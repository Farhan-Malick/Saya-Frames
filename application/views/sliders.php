<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

<style>
.clearfix, .row12:after {
  display: table;
  line-height: 0;
  content: "";
  clear: both;
}

.row12 {
  max-width: 680px;
  margin: 0 auto;
}
.row12 .row12 {
  margin-left: -30px;
  margin-right: -30px;
}
.row12 .col12 {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding-left: 30px;
  padding-right: 30px;
}

@media (min-width: 400px) {
  .hide-lrg {
    display: none;
  }

  .lrg-1 {
    width: 8.33333%;
    float: left;
  }

  .lrg-2 {
    width: 16.66667%;
    float: left;
  }

  .lrg-3 {
    width: 25%;
    float: left;
  }

  .lrg-4 {
    width: 33.33333%;
    float: left;
  }

  .lrg-5 {
    width: 41.66667%;
    float: left;
  }

  .lrg-6 {
    width: 50%;
    float: left;
  }

  .lrg-7 {
    width: 58.33333%;
    float: left;
  }

  .lrg-8 {
    width: 66.66667%;
    float: left;
  }

  .lrg-9 {
    width: 75%;
    float: left;
  }

  .lrg-10 {
    width: 83.33333%;
    float: left;
  }

  .lrg-11 {
    width: 91.66667%;
    float: left;
  }

  .lrg-12 {
    width: 100%;
    float: left;
  }
}
.slider-wrap .slider {
  height: 250px;
  position: relative;
}
.slider-wrap .outer {
  position: relative;
}
.slider-wrap .outer, .slider-wrap .tray, .slider-wrap section {
  height: 100%;
}
.slider-wrap .tray, .slider-wrap section {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slider-wrap section {
  background: rgba(0, 0, 0, 0.2);
  overflow: hidden;
}
.slider-wrap section img {
  width: 100%;
  max-width: 100%;
}
.slider-wrap .arrow {
  position: absolute;
  top: 50%;
  border-radius: 50%;
  margin-top: -30px;
  height: 60px;
  width: 60px;
  z-index: 1;
  cursor: pointer;
  z-index: 15;
  background-color: rgba(182,182,182,0.4);
}
.slider-wrap .arrow.left {
  right: -30px;
  background-image: url(https://www.garethweaver.com/codepen/images/bbc-left.png);
}
.slider-wrap .arrow.left span {
  left: 60px;
  padding: 0 20px 0 0;
}
.slider-wrap .arrow.right {
  left: -30px;
  background-image: url(https://www.garethweaver.com/codepen/images/bbc-right.png);
}
.slider-wrap .arrow.right span {
  right: 60px;
  padding: 0 0 0 20px;
}
.slider-wrap .arrow span {
  height: 60px;
  line-height: 60px;
  background: #0380a5;
  position: absolute;
  display: none;
  color: #fff;
}
.slider-wrap .arrow:hover {
  background-color: #0380a5;
}
.slider-wrap .arrow:hover span {
  display: block;
}
.slider-wrap .mask {
  display: block;
  position: absolute;
  top: 0;
  height: 100%;
  width: 200%;
  background: rgba(255, 255, 255, 0.7);
  z-index: 10;
  cursor: pointer;
}
.slider-wrap .mask.left {
  right: 100%;
}
.slider-wrap .mask.right {
  left: 100%;
}
.slider-wrap .slider-nav {
  position: relative;
  font-size: 14px;
  text-align: center;
  margin: 15px 0 0;
  overflow: hidden;
}
.slider-wrap .slider-nav ul {
  position: relative;
  margin: 0;
  padding: 0;
}
.slider-wrap .slider-nav li {
  float: left;
  width: 25%;
  box-sizing: border-box;
}
.slider-wrap .slider-nav li.current a {
  color: #0380a5;
}
.slider-wrap .slider-nav li a {
  -moz-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  -webkit-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
  height: 60px;
  line-height: 60px;
  border-top: 4px solid #dfdfde;
  display: block;
  font-weight: bold;
  margin: 0 4px;
}
.slider-wrap .slider-nav li a:hover {
  color: #0380a5;
}
.slider-wrap .slider-nav .highlight {
  position: absolute;
  margin: 0 4px;
  top: 0;
  left: 0;
  width: 24%;
  box-sizing: border-box;
  border-top: 4px solid #0380a5;
}
</style>

<!-- partial:index.partial.html -->
<div style="overflow:hidden; /*padding:30px 0;*/">
  <div class="row12">
    <div class="col12 lrg-12">

        <div class="slider-wrap">
          <div class="slider">
            <div class="outer">
              <div class="tray">
                <section id="all-articles" style="left:-100%;"><img src="<?=base_url('assets/images/slider_img_1.jpg');?>"></section>
                <section id="featured-articles" style="left:0%;" class="current"><img src="<?=base_url('assets/images/slider_img_2.jpg');?>"></section>
                <section id="popular-articles" style="left:100%;"><img src="<?=base_url('assets/images/slider_img_3.jpg');?>"></section>
                <section id="new-articles" style="left:200%;"><img src="<?=base_url('assets/images/slider_img_2.jpg');?>"></section>
              </div>
            </div>
            <div class="mask left">
              <a href="#" class="arrow left"></a>
            </div>
            <div class="mask right">
              <a href="#" class="arrow right"></a>
            </div>
          </div>
        </div>

      </div>
  </div>
</div>
<!-- partial -->
  
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script>
//BBC hompage slider
var homeSlider = {

vars: {
  //tray position
  pos: 0,
  //lock the slider to prevent multiple clicks when animating
  locked: 0,
   //animation duration
   duration: 1000
},

helpers: {

  //return percent from .att('style')
  getPercent: function(str){
    var foo = str.substring(str.indexOf('left:')+5);
    return parseInt(foo.substring(0, foo.indexOf('%')));
  },

  //unlock the slider post animation
  unlock: function(){
    homeSlider.vars.locked = 0;
  }

},

//bind all the things
init: function(){

  //click binds
  $('.slider .mask').on('mouseenter mouseleave', homeSlider.peek.over);
  $('.slider .mask').on('click', homeSlider.nav.arrow);
  $('.slider-nav a').on('click', homeSlider.nav.menu);

  //mobile support
  /*
  $('.slider .outer').swipe({
    swipe: function(event, direction, distance, duration, fingerCount){
      if ( direction === 'left' ){
        $('.mask.right').click();
      } else if ( direction === 'right' ){
        $('.mask.left').click();
      }
    },
    threshold: 40
  });
  */
},

peek: {

  //hover on masks triggers peek direction
  over: function(e){
    if (e.type == 'mouseenter' && $(this).hasClass('left')) {
      homeSlider.peek.move(0);
    } else if (e.type == 'mouseenter' && $(this).hasClass('right')) {
      homeSlider.peek.move(0);
    } else {
      homeSlider.peek.move(0);
    }
  },

  //peek move
  move: function(dist){
    $('.slider-wrap .outer').stop().animate({'left': dist}, 300);
  }

},

nav: {

  //handles arror nav click
  arrow: function(e){
    e.preventDefault();
    if ( homeSlider.vars.locked === 0) {
      homeSlider.vars.locked = 1;
      if ( $(this).hasClass('left') ){
        homeSlider.move.direction(0);
      } else {
        homeSlider.move.direction(1);
      }
    }
  },

  //handles a menu nav click
  menu: function(e){
    e.preventDefault();
    if ( homeSlider.vars.locked === 0) {
      homeSlider.vars.locked = 1;
      homeSlider.move.toSlide($(e.target.hash));
    }
  },

  //updates the menu nav visual class and arrow text
  update: function(){
     //nav menu
    homeSlider.move.currentClass($('.slider-nav').find('a[href="#' + $('.slider .current').attr('id') + '"]').parent());
    var offset = $('.slider-nav li.current').position().left / $('.slider-nav').width() * 100;
    $('.slider-nav .highlight').stop().animate({'left': offset+'%'}, homeSlider.vars.duration, 'easeInOutQuart');
     //update arrow text
     $('.arrow.right span').text($('.slider-nav').find('a[href="#' + $('.slider .current').next().attr('id') + '"]').text());
     $('.arrow.left span').text($('.slider-nav').find('a[href="#' + $('.slider .current').prev().attr('id') + '"]').text());
  }

},

move: {

  direction: function(dir){

    var $curr = $('.slider .current');

    //go right
    if (dir === 1) {
      homeSlider.vars.pos -= 100;
      if ( $curr.next().is(':last-child') ){
        //append first to last
        homeSlider.move.firstToLast();
        homeSlider.move.animate(homeSlider.vars.pos, true);
      } else {
        //no appendingzings
        homeSlider.move.animate(homeSlider.vars.pos, false);
      }
      homeSlider.move.currentClass($curr.next());

    //go left
    } else {
      homeSlider.vars.pos += 100;
      if ( $curr.prev().is(':first-child') ){
        //prepend last to first
        homeSlider.move.lastToFirst();
        homeSlider.move.animate(homeSlider.vars.pos, true);
      } else {
        //no appendingzings
        homeSlider.move.animate(homeSlider.vars.pos, false);
      }
      homeSlider.move.currentClass($curr.prev());

    }

      //if the slider is currently peeking, remove peek
      homeSlider.peek.move(0);
    //update the bottom nav
    homeSlider.nav.update();

  },

  toSlide: function($elm){

    var pos =  homeSlider.helpers.getPercent($elm.attr('style')) * -1;

    //if moving to the beginning of the stack
    if ( $elm.is(':first-child') ) {
      homeSlider.move.lastToFirst();
      homeSlider.move.currentClass($elm);
      homeSlider.move.animate(pos, true);

    //if moving to the end of the stack
    } else if ( $elm.is(':last-child') ) {
      homeSlider.move.firstToLast();
      homeSlider.move.currentClass($elm);
      homeSlider.move.animate(pos, true);

    //if moving to the middle of the stack
    } else {
      homeSlider.move.currentClass($elm);
      homeSlider.move.animate(pos, false);
    }

    //update the bottom nav
    homeSlider.nav.update();
    //update the tray positon
    homeSlider.vars.pos = pos;

  },

  //updates current class to requested slide
  currentClass: function($elm){
    $elm.addClass('current').siblings().removeClass('current');
  },

  //animation of the slider tray
  animate: function(pos, flush){
    $('.slider .tray').animate({'left': pos+'%'}, homeSlider.vars.duration, 'easeInOutQuart', function(){
      if (flush) {
        homeSlider.move.flush();
      } else {
        homeSlider.helpers.unlock();
      }
    });
  },

  //dupe first slide to end of stack + mark first slide for removal
  firstToLast: function(){
    var $elm = $('.slider section:first-child');
      pos = homeSlider.helpers.getPercent($('.slider section:last-child').attr('style')) + 100;
      $clone = $elm.clone();
    $elm.addClass('remove');
    $clone.removeAttr('style').css({'left': pos+'%' }).appendTo($('.slider .tray'));
  },

  //dupe last slide to beginning of stack + mark last slide for removal
  lastToFirst: function(){
    var $elm = $('.slider section:last-child');
      pos = homeSlider.helpers.getPercent($('.slider section:first-child').attr('style')) - 100;
      $clone = $elm.clone();
    $elm.addClass('remove');
    $clone.removeAttr('style').css({'left': pos+'%' }).prependTo($('.slider .tray'));
  },

  //remove old slide from stack
  flush: function(){
    $('.slider .tray section.remove').remove();
    homeSlider.helpers.unlock();
  }

}

};

var helper = {

init: function(){
  helper.center();
  $(window).resize(helper.center);
},

center: function(){
  $.each($('.slider section img'), function(i, elm){
    //$(elm).css({marginTop:-$(elm).height()/2, top:'50%', position:'relative'});
    $(elm).css({ top:'0%', position:'relative'});
  })
}
}

homeSlider.init();
helper.init();
</script>