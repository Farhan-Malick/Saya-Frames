<?php //require_once(__DIR__ . "/slider_parallax.php"); ?>
<style>
    .studio_bg {
        height: 460px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        padding-top: 70px;
        padding-bottom: 70px;
    }

    .home_sections_bg1 {
        padding-top: 30px;
        height: 624px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        color: white;

        background-size: cover;
        height: 0;
        padding: 0;
        padding-bottom: calc(100% * 3 / 4);
    }

    .home_sections_bg2 {
        padding-top: 30px;
        height: 624px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        color: #111111;

        background-size: cover;
        height: 0;
        padding: 0;
        padding-bottom: calc(100% * 3 / 4);
    }

    .bg-style {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat
    }

    @media screen and (max-width: 550px) and (min-width: 300px) {
        .resp_img {
            height: auto !important;
        }

        .carousel-inner {
            margin-top: -8px;
        }

        .home_sections_bg2 {
            height: calc(var(--content-height) + var(--global-nav-collective-height) + var(--gutter-width)) !important;
            min-height: 500px;
        }

        .home_sections_bg1 {
            height: calc(var(--content-height) + var(--global-nav-collective-height) + var(--gutter-width)) !important;
            min-height: 500px;
        }

        h2 {
            font-size: 1.5rem;
        }

        p {
            font-size: 1rem;
        }

        a {
            font-size: 0.9rem;
        }
    }

    .carousel-item {
        transition: transform 2s ease, opacity .5s ease-out
    }

    .carousel-control-next,
    .carousel-control-prev

    /*, .carousel-indicators */
        {
        filter: invert(100%);
    }
</style>
<!-- <section class="home_sec1 d-flex align-items-center">
	<p><span>Shop Online</span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
		invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
</section> -->
<section class="home_bsection bottomSpace" id="land">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
			<li data-target="#carouselId" data-slide-to="0" class="active"></li>
			<li data-target="#carouselId" data-slide-to="1"></li>
			<li data-target="#carouselId" data-slide-to="2"></li>
			<li data-target="#carouselId" data-slide-to="3"></li>
		</ol> -->

        <div class="carousel-inner" role="listbox">
            <div class="carousel-item home_bsection active div-sec" tabIndex=1 title="image1"
                style="background-image: url('<?php echo isset($page_data[1]->image1) ? $page_data[1]->image1 : '' ?>');background-size: cover;background-position: center; background-repeat: no-repeat">
                <h1><?php echo isset($page_data[1]->main_heading1) ? $page_data[1]->main_heading1 : '' ?>
                </h1>
                <h3><?php echo isset($page_data[1]->sub_heading1) ? $page_data[1]->sub_heading1 : '' ?>
                </h3>
                <p><?php echo isset($page_data[1]->text1) ? $page_data[1]->text1 : '' ?>
                </p>
                <div class="links">
                    <a href="<?php echo isset($page_data[1]->btn_white_bg_url1) ?  $page_data[1]->btn_white_bg_url1 : '#' ?>"
                        style=""><?php echo isset($page_data[1]->btn_white_bg_label1) ? $page_data[1]->btn_white_bg_label1 . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : '' ?>
                    </a>
                    <a href="<?php echo isset($page_data[1]->link1_url) ? $page_data[1]->link1_url : '#' ?>"
                        style=""><?php echo isset($page_data[1]->link1_label) ?  $page_data[1]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': '' ?>
                    </a>
                </div>
                <!-- <img src="<?php echo isset($page_data[1]->image1) ? $page_data[1]->image1 : '' ?>"
                    class="img-fluid img-sec" tabIndex=1 title="image1" alt=""> -->
            </div>
            <div class="carousel-item home_bsection div-sec" tabIndex=1 title="image2"
                style="background-image: url('<?php echo isset($page_data[1]->image2) ? $page_data[1]->image2 : '' ?>');background-size: cover; background-position: center; background-repeat: no-repeat">
                <h1><?php echo isset($page_data[1]->main_heading2) ? $page_data[1]->main_heading2 : '' ?>
                </h1>
                <h3><?php echo isset($page_data[1]->sub_heading2) ? $page_data[1]->sub_heading2 : '' ?>
                </h3>
                <p><?php echo isset($page_data[1]->text2) ? $page_data[1]->text2 : '' ?>
                </p>
                <div class="links">
                    <a href="<?php echo isset($page_data[1]->btn_white_bg_url2) ?  $page_data[1]->btn_white_bg_url2: '#' ?>"
                        style=""><?php echo isset($page_data[1]->btn_white_bg_label2) ? $page_data[1]->btn_white_bg_label2 . '<i class="fa fa-angle-right" aria-hidden="true"></i>': '' ?>
                    </a>
                    <a href="<?php echo isset($page_data[1]->link2_url) ? $page_data[1]->link2_url : '#' ?>"
                        style=""><?php echo isset($page_data[1]->link2_label) ?  $page_data[1]->link2_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : '' ?>
                    </a>
                    <!-- <img src="<?php echo isset($page_data[1]->image2) ? $page_data[1]->image2 : '' ?>"
                    class="img-fluid img-sec" tabIndex=1 title="image2" alt=""> -->
                </div>
            </div>
            <div class="carousel-item home_bsection div-sec" tabIndex=1 title="image3"
                style="background-image: url('<?php echo isset($page_data[1]->image3) ? $page_data[1]->image3 : '' ?>');background-size: cover; background-position: center; background-repeat: no-repeat">
                <h1><?php echo isset($page_data[1]->main_heading3) ? $page_data[1]->main_heading3 : '' ?>
                </h1>
                <h3><?php echo isset($page_data[1]->sub_heading3) ? $page_data[1]->sub_heading3 : '' ?>
                </h3>
                <p><?php echo isset($page_data[1]->text3) ? $page_data[1]->text3 : '' ?>
                </p>
                <div class="links">
                    <a href="<?php echo isset($page_data[1]->btn_white_bg_url3) ?  $page_data[1]->btn_white_bg_url3 : '#' ?>"
                        style=""><?php echo  isset($page_data[1]->btn_white_bg_label3) ? $page_data[1]->btn_white_bg_label3.'<i class="fa fa-angle-right" aria-hidden="true"></i>' : '' ?>
                    </a>
                    <a href="<?php echo isset($page_data[1]->link3_url) ? $page_data[1]->link3_url : '#' ?>"
                        style=""><?php echo isset($page_data[1]->link3_label) ?  $page_data[1]->link3_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>': '' ?>
                    </a>
                </div>
                <!-- <img src="<?php echo isset($page_data[1]->image3) ? $page_data[1]->image3 : '' ?>"
                    class="img-fluid img-sec" tabIndex=1 title="image3"alt=""> -->
            </div>
            <div class="carousel-item home_bsection div-sec" tabIndex=1 title="image4"
                style="background-image: url('<?php echo isset($page_data[1]->image4) ? $page_data[1]->image4 : '' ?>');background-size: cover; background-position: center; background-repeat: no-repeat">
                <h1><?php echo isset($page_data[1]->main_heading4) ? $page_data[1]->main_heading4 : '' ?>
                </h1>
                <h3><?php echo isset($page_data[1]->sub_heading4) ? $page_data[1]->sub_heading4 : '' ?>
                </h3>
                <p><?php echo isset($page_data[1]->text4) ? $page_data[1]->text4 : '' ?>
                </p>
                <div class="links">
                    <a href="<?php echo isset($page_data[1]->btn_white_bg_url4) ?  $page_data[1]->btn_white_bg_url4 : '#' ?>"
                        style=""><?php echo  isset($page_data[1]->btn_white_bg_label4) ? $page_data[1]->btn_white_bg_label4 .'<i class="fa fa-angle-right" aria-hidden="true"></i>': '' ?>
                    </a>
                    <a href="<?php echo isset($page_data[1]->link4_url) ? $page_data[1]->link4_url : '#' ?>"
                        style=""><?php echo isset($page_data[1]->link4_label) ?  $page_data[1]->link4_label.'<i class="fa fa-angle-right" aria-hidden="true"></i>' : '' ?>
                    </a>
                </div>
                <!-- <img src="<?php echo isset($page_data[1]->image4) ? $page_data[1]->image4 : '' ?>"
                    class="img-fluid img-sec" tabIndex=1 title="image4" alt=""> -->
            </div>
            <div class="carousel-item home_bsection div-sec" tabIndex=1 title="image5"
                style="background-image: url('<?php echo isset($page_data[1]->image5) ? $page_data[1]->image5 : '' ?>');background-size: cover;background-position: center; background-repeat: no-repeat">

                <h1><?php echo isset($page_data[1]->main_heading5) ? $page_data[1]->main_heading5 : '' ?>
                </h1>
                <h3><?php echo isset($page_data[1]->sub_heading5) ? $page_data[1]->sub_heading5 : '' ?>
                </h3>
                <p><?php echo isset($page_data[1]->text5) ? $page_data[1]->text5 : '' ?>
                </p>
                <div class="links">
                    <a href="<?php echo isset($page_data[1]->btn_white_bg_url5) ?  $page_data[1]->btn_white_bg_url5 : '#' ?>"
                        style=""><?php echo  isset($page_data[1]->btn_white_bg_label5) ? $page_data[1]->btn_white_bg_label5.'<i class="fa fa-angle-right" aria-hidden="true"></i>' : '' ?>
                    </a>
                    <a href="<?php echo isset($page_data[1]->link5_url) ? $page_data[1]->link5_url : '#' ?>"
                        style=""><?php echo isset($page_data[1]->link5_label) ?  $page_data[1]->link5_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>': '' ?>
                    </a>
                </div>
                <!-- <img src="<?php echo isset($page_data[1]->image5) ? $page_data[1]->image5 : '' ?>"
                    class="img-fluid img-sec" tabIndex=1 title="image5" alt=""> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="home_bsection home_bg1 div-sec bottomSpace" tabIndex=2 title="bg_img"
    style="background-image: url('<?php echo isset($page_data[2]->bg_img) ? $page_data[2]->bg_img  : "" ?>');background-size: cover;background-position: center; background-repeat: no-repeat;">
    <h1 class="text-white" id="mainHeading">
        <?php echo isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : "" ?>
    </h1>
    <h3><?php echo isset($page_data[2]->sub_heading) ? $page_data[2]->sub_heading  : "" ?></h3>
    <p><?php echo   isset($page_data[2]->text) ? $page_data[2]->text  : "" ?></p>
    <div class="links">

        <a href="<?php echo isset($page_data[2]->btn_white_bg_url) ? $page_data[2]->btn_white_bg_url  : "/" ?>"><?php echo isset($page_data[2]->btn_white_bg_label) ? $page_data[2]->btn_white_bg_label.'<i class="fa fa-angle-right" aria-hidden="true"></i>'  : "" ?>
        </a>
        <a href="<?php echo  isset($page_data[2]->link_url) ? $page_data[2]->link_url   : "/" ?>"><?php echo isset($page_data[2]->link_label) ? $page_data[2]->link_label.'<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
        </a>
    </div>
    <!-- <img id="" src="" class="img-fluid img-sec" tabIndex=2 title="bg_img"  alt=""> -->
</section>
<section class="home_bsection div-sec" tabIndex=12 title="bg_img"
    style="background-image: url('<?php echo isset($page_data[12]->bg_img) ? $page_data[12]->bg_img  : "" ?>');background-size: cover;background-position: center; background-repeat: no-repeat">

    <h1><?php echo isset($page_data[12]->main_heading) ? $page_data[12]->main_heading  : ""   ?></h1>
    <h3><?php echo isset($page_data[12]->sub_heading) ? $page_data[12]->sub_heading  : "" ?>
    </h3>
    <p><?php echo isset($page_data[12]->text) ? $page_data[12]->text  : "" ?></p>
    <!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing</p> -->
    <div class="links">

        <a href="<?php echo isset($page_data[12]->btn_white_bg_url) ? $page_data[12]->btn_white_bg_url  : "/" ?>"
            style=""><?php echo isset($page_data[12]->btn_white_bg_label) ? $page_data[12]->btn_white_bg_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': "" ?>
        </a>
        <a href="<?php echo  isset($page_data[12]->link_url) ? $page_data[12]->link_url : "/" ?>"><?php echo isset($page_data[12]->link_label) ? $page_data[12]->link_label  . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
        </a>
    </div>
    <!-- <img title="bg_img" src="<?php echo isset($page_data[12]->bg_img) ? $page_data[12]->bg_img  : "" ?>"
        class="img-fluid img-sec" tabIndex=12 alt=""> -->
</section>
<div class="animateDiv">
    <div class="home_sec2">
        <div class="row" style="margin: auto">
            <div class="col-md-6 p-0 px-md-2 leftBox">
                <div title="bg_img" class="sec2_text home_bg1 div-sec" tabIndex=4
                    style="background-position:center;background-image: url('<?php base_url( 'assets/imagess/home1.png') ?>');background-size:cover; background-repeat:no-repeat">
                    <h1 class="text-white">
                        <?php echo isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : ''  ?>
                    </h1>
                    <h3 class="text-white">
                        <?php echo isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '#'  ?>"><?php echo isset($page_data[4]->link1_label) ? $page_data[4]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : ''  ?>
                        </a>
                        <a href="<?php echo isset($page_data[4]->link2_url) ? $page_data[4]->link2_url : "/" ?>"><?php echo isset($page_data[4]->link2_label) ? $page_data[4]->link2_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>'  : "" ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 px-md-2 rightBox">
                <div title="bg_img" class="sec2_text div-sec" tabIndex=5
                    style="background:url(<?= isset($page_data[5]->bg_img) ? base_url($page_data[5]->bg_img) : base_url( 'assets/imagess/clock.jpg')?>);background-size:cover;background-position: center; background-repeat: no-repeat">
                    <h1 class="text-white">
                        <?php echo isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : ''  ?>
                    </h1>
                    <h3 class="text-white">
                        <?php echo isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '#'  ?>"><?php echo isset($page_data[5]->link1_label) ? $page_data[5]->link1_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : ''  ?>
                        </a>
                        <a href="<?php echo  isset($page_data[5]->link2_url) ? $page_data[5]->link2_url : "/" ?>"><?php echo isset($page_data[5]->link2_label) ? $page_data[5]->link2_label  .'<i class="fa fa-angle-right" aria-hidden="true"></i>'  : "" ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_sec2">
        <div class="row" style="margin: auto">
            <div class="col-md-6 p-0 px-md-2 leftBox">
                <div class="sec2_text mt-0 home_bg1 div-sec btm-text" tabIndex=6 title="bg_img"
                    style="background-position:center;background-image: url(<?= isset($page_data[6]->bg_img) ? base_url($page_data[6]->bg_img) : base_url( 'assets/imagess/product1.jpg')?>); background-size:cover; background-repeat:no-repeat;">
                    <h1 class="">
                        <?php echo isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : ''  ?>
                    </h1>
                    <h3 style="">
                        <?php echo isset($page_data[6]->sub_heading) ? $page_data[6]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '#'  ?>"><?php echo isset($page_data[6]->link1_label) ? $page_data[6]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': ''  ?>
                        </a>
                        <a href="<?php echo  isset($page_data[6]->link2_url) ? $page_data[6]->link2_url  : "/" ?>"><?php echo isset($page_data[6]->link2_label) ? $page_data[6]->link2_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 px-md-2 rightBox">
                <div class="sec2_text mt-0 div-sec btm-text" tabIndex=7 title="bg_img"
                    style="background-position:center;background-image: url(<?= isset($page_data[7]->bg_img) ? base_url($page_data[7]->bg_img) : base_url( '')?>); background-position: center; background-size:cover;background-repeat: no-repeat">
                    <h1 class="">
                        <?php echo isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : ''  ?></h1>
                    <h3 style="">
                        <?php echo isset($page_data[7]->sub_heading) ? $page_data[7]->sub_heading : ''  ?>
                    </h3>
                    <div class='links'>
                        <a href="<?php echo isset($page_data[7]->link1_url) ? $page_data[7]->link1_url : '#'  ?>"><?php echo isset($page_data[7]->link1_label) ? $page_data[7]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': ''  ?>
                        </a>
                        <a href="<?php echo  isset($page_data[7]->link2_url) ? $page_data[7]->link2_url  : "/" ?>"><?php echo isset($page_data[7]->link2_label) ? $page_data[7]->link2_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="home_sec2">
        <div class="row" style="margin: auto">
            <div class="col-md-6 p-0 px-md-2 leftBox">
                <div class="sec2_text mt-0 home_bg1 div-sec" tabIndex=8 title="bg_img"
                    style="background-position:center;background-image: url(<?= isset($page_data[8]->bg_img) ? base_url($page_data[8]->bg_img) : base_url( '')?>); background-size:cover;background-repeat: no-repeat">
                    <h1 class="text-white">
                        <?php echo isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : ''  ?>
                    </h1>
                    <h3 style="color: #FBFBFD;">
                        <?php echo isset($page_data[8]->sub_heading) ? $page_data[8]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '#'  ?>"><?php echo isset($page_data[8]->link1_label) ? $page_data[8]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : ''  ?>
                        </a>
                        <a href="<?php echo  isset($page_data[8]->link2_url) ? $page_data[8]->link2_url  : "/" ?>"><?php echo isset($page_data[8]->link2_label) ? $page_data[8]->link2_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 px-md-2 rightBox">
                <div class="sec2_text mt-0 div-sec" tabIndex=9 title="bg_img"
                    style="background-position:center;background-image: url(<?= isset($page_data[9]->bg_img) ? base_url($page_data[9]->bg_img) : base_url( '')?>);background-repeat: no-repeat;background-size:cover;">
                    <h1 class="text-white">
                        <?php echo isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : ''  ?>
                    </h1>
                    <h3 style="color: #FBFBFD;">
                        <?php echo isset($page_data[9]->sub_heading) ? $page_data[9]->sub_heading : ''  ?>
                    </h3>
                    <div class='links'>
                        <a href="<?php echo isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '#'  ?>"><?php echo isset($page_data[9]->link1_label) ? $page_data[9]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': ''  ?>
                        </a>
                        <a href="<?php echo  isset($page_data[9]->link2_url) ? $page_data[9]->link2_url : "/" ?>"><?php echo isset($page_data[9]->link2_label) ? $page_data[9]->link2_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home_sec2">
        <div class="row" style="margin: auto">
            <div class="col-md-6 p-0 px-md-2 leftBox">
                <div class="sec2_text mt-0 home_bg1 div-sec btm-text" tabIndex=10 title="bg_img"
                    style="background-position:center;background-image: url(<?= isset($page_data[10]->bg_img) ? base_url($page_data[10]->bg_img) : base_url( 'assets/imagess/product1.jpg')?>); background-size:cover;background-repeat: no-repeat">
                    <h1 class="">
                        <?php echo isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : ''  ?>
                    </h1>
                    <h3 style="">
                        <?php echo isset($page_data[10]->sub_heading) ? $page_data[10]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[10]->link1_url) ? $page_data[10]->link1_url : '#'  ?>"><?php echo isset($page_data[10]->link1_label) ? $page_data[10]->link1_label . '<i class="fa fa-angle-right" aria-hidden="true"></i>': ''  ?>
                        </a>
                        <a href="<?php echo isset($page_data[10]->link2_url) ? $page_data[10]->link2_url : "/" ?>"><?php echo  isset($page_data[10]->link2_label) ? $page_data[10]->link2_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-0 px-md-2 rightBox">
                <div class="sec2_text mt-0 div-sec bg-style btm-text" tabIndex=11 title="bg_img">
                    <h1 class="">
                        <?php echo isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : ''  ?>
                    </h1>
                    <h3 style="">
                        <?php echo isset($page_data[11]->sub_heading) ? $page_data[11]->sub_heading : ''  ?>
                    </h3>
                    <div class="links">
                        <a href="<?php echo isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '#'  ?>"><?php echo isset($page_data[11]->link1_label) ? $page_data[11]->link1_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : ''  ?>
                        </a>
                        <a href="<?php echo isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : "/" ?>"><?php echo   isset($page_data[11]->link2_label) ? $page_data[11]->link2_label .'<i class="fa fa-angle-right" aria-hidden="true"></i>' : "" ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script>
// var swiper = new Swiper('.blog-slider', {
//     spaceBetween: 30,
//     effect: 'fade',
//     loop: true,
//     autoplay: {
//         delay: 3000,
//     },
//     mousewheel: {
//         invert: false,
//     },
//     // autoHeight: true,
//     pagination: {
//         el: '.blog-slider__pagination',
//         clickable: true,
//     }
// });

$(".fullDiv").click(function() {
    window.location = $(this).find("a").attr("href");
    return false;
});

$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

});
</script>
