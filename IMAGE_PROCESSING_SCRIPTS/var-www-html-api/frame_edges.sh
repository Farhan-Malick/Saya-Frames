#!/bin/bash
#
# frame_edges {frame_image} {input_image} {output_image}
#
# Frame a picture as if in the real world, using cardbord borders and strips
# of wood. The input and images can be any format understood by ImageMagick.
#
# For example frame a rose: image in gold  and  display result...
#    frame_edges goldthin  rose:  show:
#
# Or save it to a file...
#    frame_edges blkmarble  granite:  granite_frame.jpg
#
# Or pipe it to another IM command to process it further
#    frame_edges bamboothin  rose:  miff:- |\
#       montage -label "A Rose by any Name" - \
#               -geometry +5+5 -shadow -background lightgreen show:
#
###
#
# Anthony Thyssen   <A.Thyssen@griffith.edu.au>   14 March 2008
#
# Updated to handle problems with "compose" meta-data  27 Jan 2017
#
ORIGDIR=`pwd`                          # original directory (builtin)
PROGNAME=`type $0 | awk '{print $3}'`  # search for executable on path
PROGDIR=`dirname $PROGNAME`            # extract directory of program
PROGNAME=`basename $PROGNAME`          # base name of program
cd $PROGDIR                            # go to that directory
PROGDIR=`pwd`                          # remove any symbolic link parts
cd $ORIGDIR                            # return to original directory (opt)

FRAMEDIR='.'/edge_images

cmd_found() {                          # is this command available?
  case "`type $1 2>&1`" in *'not found'*) return 1 ;; esac; return 0
}
Usage() {                              # output the script comments as docs
  # Output the script comments as a manual
  echo >&2 "$PROGNAME:" "$@"
  sed >&2 -n '/^###/q; /^#/!q; s/^#//; s/^ //; 3s/^/Usage: /; 2,$ p' \
          "$PROGDIR/$PROGNAME"

  # List the framing edge images available
  if cd $FRAMEDIR; then
    echo "Framing images (styles) available :-"
    ls *.{gif,png,jpg} 2>/dev/null |
      sed 's/\.\(gif\|png\|jpg\)$//; s/_\(top\|btm\|lft\|rht\)$//;' | sort -u |
         if cmd_found fmt; then
           fmt -w 60 | sed 's/^/    /'
         else
             tr '\012' ' ' |
               sed 's/ $/@/; s/[^@]\{5\} /&@/g' |
                 tr '@' '\012' | sed 's/^/    /'
         fi
    echo ""
  fi
  exit 10;
}
Error() {
  echo >&2 "FATAL ERROR in \"$PROGNAME\":" "$@"
  exit 1
}
cmd_found convert || Error "ImageMagick 'convert' not found"

# Read arguments
[ $# -lt 3 ] && Usage "Not Enough Arguments"
[ $# -gt 3 ] && Usage "Too Many Arguments"
style="$1"
picture="$2"
output="$3"

# Variable Options (calculated if not set for a style)
# $top          Main image to use for framing the 'top' and other edges.
#               this image MUST be given for a specific (unlisted) 'style'.
# $btm          The Bottom edge image (if shaded differently).
#               May be set to 'copy' 'flip' 'flop' or 'rot' of the top image
#               Defaults to 'copy' (for a rounded frame) if not set.
# $lft, $rht    Optional left and right edge images (usally not uused)
# $card_cover   Color of the surrounding cardboard. Defaults to 'Snow'
# $card_inner   Color of the inner core of cardboard, producing a
#               a thin colored border close to the image.
#               Defaults to the average color of 'top' image.
# $card_border  The width of the cardboard border (other than the bevel)
#               Defaults to 15 or 1/2 'top' width, whatever's greater.
# $roll_images  If set to 'true' images have a pattern that should be
#               randomly rolled before tiling. Defaults to false.
#
case "$style" in
  black)
     top=$FRAMEDIR/black_top.gif
     btm=$FRAMEDIR/black_btm.gif
     card_inner="DarkGoldenRod"  # override default
     ;;
  blackthin)
     top=$FRAMEDIR/blackthin_top.gif
     btm=$FRAMEDIR/blackthin_btm.gif
     card_inner="DarkGoldenRod"  # override default
     ;;
   gold)
     top=$FRAMEDIR/gold_top.png
     btm=$FRAMEDIR/gold_btm.png
     card_inner="DarkGoldenRod"  # override default
     ;;
   custom)
     top=$FRAMEDIR/custom_top.png
     btm=$FRAMEDIR/custom_btm.png
     card_inner="DarkGoldenRod"  # override default
     ;;
  multiwood)
     top=$FRAMEDIR/multiwood.png
     btm=flip                    # frame has no shading
     ;;
  *) # See if we have an image of this name -- otherwise output Usage
     images=`cd $FRAMEDIR; ls "$style"{_???,}.??? 2>/dev/null`
     if [ "$images" ]; then
       for i in $images; do
         case $i in
           *_top.???) top=$FRAMEDIR/$i ;;
           *_btm.???) btm=$FRAMEDIR/$i ;;
           *_lft.???) lft=$FRAMEDIR/$i ;;
           *_rht.???) rht=$FRAMEDIR/$i ;;
           *.???)     top=$FRAMEDIR/$i; btm=copy ;; # assume copy of top
         esac
       done
       [ -z "$top" ] &&
          Error "Unable to determine 'top' image for style '$style'"
       [ -z "$btm" ] &&
          Error "Unable to determine 'btm' image for style '$style'"
     else
       Usage "Unknown style '$style'"
     fi
     ;;
esac
# Just roll all the images
# This prevent top-bottom edge alignment, especially for "bamboo" edge images
# It is an extra step, but it is cheap as we copy the edge images anyway.
roll_images=true

# ----------------------------
# Handle Defaults for info not supplied...

# Sanity Check -- top image should always be available
[ -f "$top" ] || Error "Unable to find 'top' image for style '$style'"
[ -z "$btm" ] && btm=copy

# Just default to using "snow" for the cardboard outside.
[ -z "$card_cover" ] && card_cover="Snow"

# Use average color of 'top' image for cardboard inside bevel color
[ -z "$card_inner" ] &&
  card_inner=`convert $top -scale 1x1! -format '%[pixel:s.p{0,0}]' info:`

# figure out length and width of the top piece
# other pieces are assumed to correspond to this size
length=`identify -format %w $top`
width=`identify -format %h $top`

# If cardboard border was not defined by the syle - figure it out now
if [ -z "$border" ]; then
  border=15
  [ $width -gt 30 ] && border=$(($width/2))
fi

# -----------------------------
# Create the other images needed, and roll them.

# Set up temporary file and auto-cleanup
umask 77
tmpdir=`mktemp -d "${TMPDIR:-/tmp}/$PROGNAME.XXXXXXXXXX"` ||
  { echo >&2 "$PROGNAME: Unable to create temporary directory"; exit 1;}
trap 'rm -rf "$tmpdir"' EXIT         # remove when finished (on end or exit)
trap 'exit 130' SIGHUP SIGINT SIGQUIT SIGTERM   # terminate script on signal

tmp_pic="$tmpdir/picture.png"    # The picture after a cardboard outline added
tmp_top="$tmpdir/frame_top.png"  # generated versions of edge images
tmp_btm="$tmpdir/frame_btm.png"
tmp_lft="$tmpdir/frame_lft.png"
tmp_rht="$tmpdir/frame_rht.png"

# Just convert the top image (as is)
convert $top $tmp_top

# Generate the bottom edge image if needed
if   [ -f "$btm"       ]; then convert $btm $tmp_btm
elif [ "$btm" = "copy" ]; then convert $top $tmp_btm
elif [ "$btm" = "flip" ]; then convert $top -flip $tmp_btm
elif [ "$btm" = "flop" ]; then convert $top -flop $tmp_btm
elif [ "$btm" = "rot"  ]; then convert $top -rotate 180 $tmp_btm
else Error "Unable to find 'bottom' image for \"$style\""
fi

# If left and right sides not defined, transpose top and bottom edges
if [ -z "$lft" ]
then  convert $top -transpose $tmp_lft
else  convert $lft $tmp_lft
fi
if [ -z "$rht" ]
then  convert $tmp_btm -transpose $tmp_rht
else  convert $rht $tmp_rht
fi

# Now roll all the edge pieces at random
if [ "$roll_images" = 'true' ]; then
  convert $top     -roll "+$(( $RANDOM % $length ))+0" $tmp_top
  convert $tmp_btm -roll "+$(( $RANDOM % $length ))+0" $tmp_btm
  convert $tmp_lft -roll "+0+$(( $RANDOM % $length ))" $tmp_lft
  convert $tmp_rht -roll "+0+$(( $RANDOM % $length ))" $tmp_rht
fi

# ----------------------------
# Read in picture and add a cardboard overlay
#
# Add a cardboard overlay of an appropriate color with a inner colored core.
# Also add a little bit of shadow from the surrounding frame
#
#convert "$picture" \
#        -bordercolor $card_cover -border 1 \
#        -bordercolor $card_inner -border 3 \
#        -bordercolor $card_cover -border ${border} \
#        \( +clone -fill white -colorize 100% \
#           -background gray25 -virtual-pixel background -motion-blur 0x5-135 \
#        \) -compose multiply -composite +compose \
#        $tmp_pic

convert "$picture" \
        \( +clone -fill white -colorize 100% \
            -background gray25 -virtual-pixel background -motion-blur 0x5-135 \
        \) -unsharp 0.25x0.25+8+0.065 -quality 100 -compose multiply -composite +compose \
        $tmp_pic



# -------------------------------
# Add framing images around that image

# Work out the image size before and after framing
set `convert "$tmp_pic" -format '%w %h' info:`
pic_w=$(($1))                # image size before adding frames
pic_h=$(($2))
new_w=$(($pic_w+$width*2))   # bash integer math - final image size
new_h=$(($pic_h+$width*2))

# Frame the Image, As per IM Examples
#     http://imagemagick.org/Usage/thumbnails/#frame_edge
#
# The Image is read in and a framign template is created.
# The Top and Bottom edgeing images are read in and randomly rolled
#    then the corners are cut out using the template.
# Repeate for the side edging images.
# Flatten all images together to produce the final output result.
#
# magick -script - <<EOF  # ImageMagick v7
convert \
  $tmp_pic -repage +$width+$width -alpha set \
  -bordercolor none -fill none -background none \
  \( +clone -compose Dst -frame ${width}x$width+$width +compose \
           -draw "color 0,0 replace" \
     -flip -draw "color 0,0 replace" -flip \
  \) \
  \( $tmp_top $tmp_btm -append  -alpha set \
     -splice 0x${pic_h}+0+$width -write mpr:horz +delete \
     -size ${new_w}x$new_h -compose over tile:mpr:horz \
     -clone 1 -compose DstOut -composite +compose \
  \) \
  \( $tmp_lft $tmp_rht  +append -alpha set \
     -splice ${pic_w}x0+$width+0 -write mpr:vert +delete \
     -size ${new_w}x$new_h -compose over tile:mpr:vert \
     -clone 1 -compose DstIn -composite +compose \
  \) \
  -delete 1 \
  -compose over -mosaic +compose \
  -write "$output" "null:"
#EOF

exit 0    # everything is automatically cleaned up
# --------------------------------
