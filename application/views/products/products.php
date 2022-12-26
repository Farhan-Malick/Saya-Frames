<link href="<?= base_url('assets/css/product.css'); ?>" rel="stylesheet">

<script src="<?= base_url('assets/multislider/js/multislider.min.js'); ?>"></script>
<style>
    /* coming soon page style start */

    .message {
        padding: 0;
        margin: 0;

        box-sizing: border-box;
        background-color: #202020;
        /* background-image: linear-gradient(to bottom right, #353535 , white); */
        display: flex;
        justify-content: center;
        perspective: 500;
        padding-top: 30vh;
        padding-bottom: 30vh;
        height: 100%;
        margin-bottom: 20;
    }

    .texts {
        position: relative;
        transform-style: preserve-3d;
        transition: transform 1s;
        color: #FFF;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: normal;
        cursor: wait;
        height: 50vh;
        text-align: center;
        z-index: 1;
    }

    .text {
        position: relative;
        top: 15%;
        left: 0;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        font-size: 45px;
    }

    .text-front {
        z-index: 1;
    }

    .text-back {
        transform: rotateY(180deg);
    }

    @media screen and (max-width:995px) {
        .texts {
            font-size: 25vh;
        }
    }

    /* coming soon page style end */

    .similar_banner {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 450px;
        width: 100%;
        padding: 100px 125px
    }

    .similar_boxes {
        text-align: center;
        height: 586px;
        padding-top: 60px;
        background-repeat: no-repeat;
        background-position: center center;
        background-position: center;
        background-size: cover;
        color: white;
    }

    #product_main_img_3 {
        text-align: center;
        padding: 70px 0;
        height: 720px;
        background-repeat: no-repeat;
        background-position: center center;
        background-position: center;
        background-size: cover;
    }

    @media screen and (max-width: 768px) {
        .fullDiv {
            padding: 0;
        }
    }

    @media screen and (max-width: 550px) and (min-width: 300px) {
        .responsive_width {
            width: auto !important;
        }

        .similar_banner {
            padding: 100px 30px;
        }
    }
</style>
<!-- coming soon page code start -->
<!-- <div class="message">
    <div class="texts">
        <div class="text ">
            coming soon
        </div>
    </div>
</div> -->
<!-- coming soon page code end -->
<div class="container-fluid p-0">


    <div class="row">
        <div class="similar_banner div-sec" tabIndex=1 title="bg_img"
            style="background-position:center; background-size: 100%; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="width: 400px;" class="responsive_width">
                            <h3><?= isset($page_data[1]->main_heading ) ? $page_data[1]->main_heading : '' ?></h3>
                            <h1><?= isset($page_data[1]->sub_heading) ? $page_data[1]->sub_heading : '' ?></h1>
                            <a href="<?= isset($page_data[1]->btn_white_bg_url) ? $page_data[1]->btn_white_bg_url : '' ?>"
                                class="btn btn-lg"
                                style="font-weight:400;background-color: white;border-radius: 50px;"><?= isset($page_data[1]->btn_white_bg_label) ? $page_data[1]->btn_white_bg_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                            <a href="<?= isset($page_data[1]->link_url) ? $page_data[1]->link_url : '' ?>"><?= isset($page_data[1]->link_label) ? $page_data[1]->link_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?>
                            </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     <div class="row" style="margin: 10px 0;">
        <div class="col-md-12" style="padding: 20px;">
            <div class="container-fluid">
                <h2 class="blog-slider__title">BEST SELLING </h2>
                <section class="customer-logos slider">
                    <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                    <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
                    <!-- <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div> -->
                </section>
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="similar_banner div-sec" tabIndex=2 title="bg_img"
            style="background-position:center; background-size: 100%; ?>); margin-top: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-5" style="text-align: center">
                        <h5><?= isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : '' ?>
                        </h5>
                        <h1><?= isset($page_data[2]->sub_heading) ? $page_data[2]->sub_heading : '' ?>
                        </h1>
                        <div>
                            <a href="<?php echo isset($page_data[1]->btn_white_bg_url1) ?  $page_data[1]->btn_white_bg_url1 : '#' ?>"
                                style=""><?php echo isset($page_data[1]->btn_white_bg_label1) ? $page_data[1]->btn_white_bg_label1 . '<i class="fa fa-angle-right" aria-hidden="true"></i>' : "Buy Now<i class='fa fa-angle-right' aria-hidden='true'></i>" ?></a>
                            <a
                                href="<?= isset($page_data[2]->link2_url) ? $page_data[2]->link2_url : '#' ?>"><?= isset($page_data[2]->link2_label) ? $page_data[2]->link2_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 10px 0;">
        <div class="col-md-6 fullDiv leftBox px-md-2">
            <div class="similar_boxes div-sec" tabIndex=3 title="bg_img">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[3]->sub_heading) ? $page_data[3]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '' ?>"
                        style=""><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a href="<?= isset($page_data[3]->link2_url) ? $page_data[3]->link2_url : '' ?>"><?= isset($page_data[3]->link2_label) ? $page_data[3]->link2_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 fullDiv rightBox px-md-2">
            <div class="similar_boxes div-sec" tabIndex=4 title="bg_img" style="color: #111111; ?>);">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '' ?>"
                        style=""><?= isset($page_data[4]->link1_label) ? $page_data[4]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a href="<?= isset($page_data[4]->link2_url) ? $page_data[4]->link2_url : '' ?>"><?= isset($page_data[4]->link2_label) ? $page_data[4]->link2_label."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 10px 0;">
        <div class="col-md-6 fullDiv leftBox px-md-2">
            <div class="similar_boxes div-sec btm-text" tabIndex=5 title="bg_img" style="color: #111111; ?>);">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '' ?>"
                        style=""><?= isset($page_data[5]->link1_label) ? $page_data[5]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a
                        href="<?= isset($page_data[5]->link2_url) ? $page_data[5]->link2_url : '' ?>"><?= isset($page_data[5]->link2_label) ? $page_data[5]->link2_label ."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 fullDiv rightBox px-md-2">
            <div class="similar_boxes div-sec btm-text" tabIndex=6 title="bg_img">
                <div style=" width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[6]->sub_heading) ? $page_data[6]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '' ?>"
                        style=""><?= isset($page_data[6]->link1_label) ? $page_data[6]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a href="<?= isset($page_data[6]->link2_url) ? $page_data[6]->link2_url : '' ?>"
                        style=""><?= isset($page_data[6]->link2_label) ? $page_data[6]->link2_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>

                </div>
            </div>
        </div>
    </div>
   
    <div class="row div-sec" title="bg_img" tabIndex=7 id="product_main_img_3"
        style="margin-top: 10px; margin-bottom: 10px;background-repeat:no-repeat;background-size:cover">
        <div class="col-md-4"></div>
        <div class="col-md-4" id="" style="text-align: center;padding:70px 0">
            <div style="padding: 0 15px">
                <h1 style="color: #f5f5f7;">
                    <?= isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : '' ?>
                </h1>
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-12">
        </div>
        <div class="container" style="padding-top: 20px;padding-bottom: 50px">
            <div class="row">
                <div class="col-md-3 categories" id="" style="text-align: center;">
                    
                    <h4 style="color: #f5f5f7;">
                        <b><?= isset($page_data[7]->category_heading_1) ? $page_data[7]->category_heading_1 : '' ?></b>
                    </h4>
                    <a href="<?= isset($page_data[7]->category_link_1) ? $page_data[7]->category_link_1 : '' ?>"
                        style=""><?= isset($page_data[7]->category_link_title_1) ? $page_data[7]->category_link_title_1."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                </div>
                <div class="col-md-3 categories" id="" style="text-align: center;">
                   
                    <h4 style="color: #f5f5f7;">
                        <b><?= isset($page_data[7]->category_heading_2) ? $page_data[7]->category_heading_2 : '' ?></b>
                    </h4>
                    <a href="<?= isset($page_data[7]->category_link_2) ? $page_data[7]->category_link_2 : '' ?>"
                        style=""><?= isset($page_data[7]->category_link_title_2) ? $page_data[7]->category_link_title_2 ."<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                </div>
                <div class="col-md-3 categories" id="" style="text-align: center;">
                 
                    <h4 style="color: #f5f5f7;">
                        <b><?= isset($page_data[7]->category_heading_3) ? $page_data[7]->category_heading_3 : '' ?></b>
                    </h4>
                    <a href="<?= isset($page_data[7]->category_link_3) ? $page_data[7]->category_link_3 : '' ?>"
                        style=""><?= isset($page_data[7]->category_link_title_3) ? $page_data[7]->category_link_title_3 ."<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                </div>
                <div class="col-md-3 categories" id="" style="text-align: center;">
                    <h4 style="color: #f5f5f7;">
                        <b><?= isset($page_data[7]->category_heading_4) ? $page_data[7]->category_heading_4 : '' ?></b>
                    </h4>
                    <a href="<?= isset($page_data[7]->category_link_4) ? $page_data[7]->category_link_4 : '' ?>"
                        style=""><?= isset($page_data[7]->category_link_title_4) ? $page_data[7]->category_link_title_4 . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 10px 0;">
        <div class="col-md-6 fullDiv leftBox px-md-2">
            <div class="similar_boxes div-sec" tabIndex=8 title="bg_img">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[8]->sub_heading) ? $page_data[8]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '' ?>"
                        style=""><?= isset($page_data[8]->link1_label) ? $page_data[8]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a
                        href="<?= isset($page_data[8]->link2_url) ? $page_data[8]->link2_url : '' ?>"><?= isset($page_data[8]->link2_label) ? $page_data[8]->link2_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 fullDiv rightBox px-md-2">
            <div class="similar_boxes  div-sec" tabIndex=9 title="bg_img"
                style="color: #111111;background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : '')); ?>);">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[9]->sub_heading) ? $page_data[9]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '' ?>"
                        style=""><?= isset($page_data[9]->link1_label) ? $page_data[9]->link1_label ."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                    <a
                        href="<?= isset($page_data[9]->link2_url) ? $page_data[9]->link2_url : '' ?>"><?= isset($page_data[9]->link2_label) ? $page_data[9]->link2_label ."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 10px 0;">
        <div class="col-md-6 fullDiv leftBox px-md-2">
            <div class="similar_boxes div-sec btm-text" tabIndex=10 title="bg_img"
                style="color: #111111;background-image: url(<?= base_url((isset($page_data[10]->bg_img) ? $page_data[10]->bg_img : '')); ?>);">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[10]->sub_heading) ? $page_data[10]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[10]->link1_url) ? $page_data[10]->link1_url : '' ?>"
                        style=""><?= isset($page_data[10]->link1_label) ? $page_data[10]->link1_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                    <a
                        href="<?= isset($page_data[10]->link2_url) ? $page_data[10]->link2_url : '' ?>"><?= isset($page_data[10]->link2_label) ? $page_data[10]->link2_label . "<i class='fa fa-angle-right' aria-hidden='true'></i>": '' ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 fullDiv rightBox px-md-2">
            <div class="similar_boxes div-sec btm-text" tabIndex=11 title="bg_img"
                style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : '')); ?>);">
                <div style="width: 500px;margin: 0 auto;" class="responsive_width">
                    <h5><?= isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : '' ?></h5>
                    <h1><?= isset($page_data[11]->sub_heading) ? $page_data[11]->sub_heading : '' ?>
                    </h1>
                    <a href="<?= isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '' ?>"
                        style=""><?= isset($page_data[11]->link1_label) ? $page_data[11]->link1_label."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
                    <a href="<?= isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : '' ?>"
                        style=";display:inline-block"><?= isset($page_data[11]->link2_label) ? $page_data[11]->link2_label."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>

                </div>
            </div>
        </div>
    </div>
    <div class="row similar_banner" style="text-align: center;padding:90px 0">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div style="padding: 0 34px">
                <img src="<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : '')); ?>"
                    style="margin-bottom: 10px" />
                <h1 style="font-weight: 400">
                    <?= isset($page_data[12]->main_heading) ? $page_data[12]->main_heading : '' ?>
                </h1>
                <p><?= isset($page_data[12]->sub_heading) ? $page_data[12]->sub_heading : '' ?>
                </p>
                <a href="<?= isset($page_data[12]->link1_url) ? $page_data[12]->link1_url : '#' ?>"
                    style=""><?= isset($page_data[12]->link1_label) ? $page_data[12]->link1_label."<i class='fa fa-angle-right' aria-hidden='true'></i>" : '' ?></a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script>
var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    autoplay: {
        delay: 3000,
    },
    mousewheel: {
        invert: false,
    },
    // autoHeight: true,
    pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
    }
});

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
