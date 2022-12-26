<style>
#product_main_img_1 {
    text-align: center;
    background-repeat: no-repeat;
    height: 570px;
    width: 100%;
}

#product_main_img_2 {
    height: 700px;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 100px 0;
    padding-left: 10px;
}

.compare_models {
    margin: 30px 15px;
    background-color: white;
    padding-top: 106px;
    padding-bottom: 130px;
}

.why_ipad {
    background-color: white;
    padding-top: 106px;
    padding-bottom: 130px;
}

.compare_heading {
    text-align: center;
}

.feature_points {
    width: 170px;
}

.feature_points ul {
    list-style: none;
    padding: 0;
    font-size: 16px;
    height: 340px
}

.feature_points li {
    margin: 7px 0
}

.test_class {
    width: 25%;
    float: left;
    display: block
}

.discount {
    text-align: center;
    width: 100px
}

.home_sections_bg5 {
    text-align: center;
    height: 620px;
    padding-top: 60px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
}

.home_sections_bg6 {
    text-align: center;
    height: 620px;
    padding-top: 60px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
}

.home_bsection a,
.sec2_text a,
.similar_banner a,
.similar_boxes a {
    padding-left: 2px;
    padding-right: 2px;
}

.home_sections_bg1 {
    text-align: center;
    height: 620px;
    padding-top: 60px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
}

.home_sections_bg1 h1 {
    padding-bottom: 0;
    margin-bottom: 25px
}

.home_sections_bg1 h6 {
    margin-bottom: 20px
}

.home_sections_bg1 a,
.home_sections_bg3 a,
.home_sections_bg4 a,
.home_sections_bg5 a,
.home_sections_bg6 a {
    color: white;
}

.home_sections_bg1 a:hover {
    color: white;
}

.home_sections_bg2 {
    text-align: center;
    height: 620px;
    padding-top: 465px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: #111111;
}

.home_sections_bg2 h1 {
    padding-bottom: 0;
    margin-bottom: 25px
}

.home_sections_bg2 h6 {
    margin-bottom: 20px
}

.home_sections_bg2 a {
    color: #06c;
}

.home_sections_bg2 a:hover {
    color: #06c;
}

.home_sections_bg3 {
    height: 500px;
    padding-top: 170px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
}

.home_sections_bg4 {
    height: 630px;
    padding-top: 215px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    color: white;
}

/* @media screen and (max-width: 1080px){
		.responsive_width {
            width: auto !important;
        }
		.responsive_padding {
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
	} */

@media screen and (max-width: 1080px) and (min-width: 300px) {
    .responsive_padding {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .responsive_width {
        width: auto !important;
    }

    .home_sections_bg2 {
        padding-top: 400px;
    }

    .home_sections_bg1 {
        margin-bottom: 27px;
    }

    .home_sections_bg5 {
        margin-bottom: 27px;
    }

    .home_sections_bg6 {
        margin-bottom: 27px;
    }

    .resp_compare {
        margin-top: 30px;
        display: block !important;
        text-align: center;
    }

    .resp_compare1 {
        text-align: center;
    }

    .feature_points {
        margin: 0 auto;
    }

    .feature_points ul {
        height: auto !important;
    }

}
</style>
<div style="background-color: #f2f2f2;padding-bottom: 1px">
    <div class="container-fluid p-0">
        <div class="row">
            <div id="product_main_img_1" class="similar_banner div-sec" tabIndex=1 title="bg_img"
                style="background-size: cover; background-position:center; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div style="margin-top: 120px">
                                <sub><?= isset($page_data[1]->small_text) ? $page_data[1]->small_text : 'New' ?></sub>
                                <h1>
                                    <?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'iPad Pro' ?>
                                </h1>
                                <h3><?= isset($page_data[1]->sub_heading) ? $page_data[1]->sub_heading : 'Your next computer is not a computer.' ?>
                                </h3>
                                <p style="margin: 25px 0">
                                    <?= isset($page_data[1]->normal_text) ? $page_data[1]->normal_text : 'From $799' ?>
                                </p>
                                <p><a href="<?= isset($page_data[1]->btn_blue_bg_url) ? $page_data[1]->btn_blue_bg_url : '/home/listing' ?>"
                                        style="background-color: #0071e3;padding: 8px 20px;border-radius: 19px;color: white;"><?= isset($page_data[1]->btn_blue_bg_label) ? $page_data[1]->btn_blue_bg_label : 'Buy' ?></a>
                                </p>
                                <a
                                    href="<?= isset($page_data[1]->link_url) ? $page_data[1]->link_url : '/home/listing' ?>"><?= isset($page_data[1]->link_label) ? $page_data[1]->link_label : 'Learn more ' ?><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="product_main_img_2" class="similar_banner div-sec" tabIndex=2 title="bg_img"
                style="background-image: url(<?= base_url((isset($page_data[2]->bg_img) ? $page_data[2]->bg_img : 'assets/images/ipad_air__c8xht6h7g7au_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-3">
                            <h1><?= isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : 'iPad Air' ?>
                            </h1>
                            <h5><?= isset($page_data[2]->sub_heading) ? $page_data[2]->sub_heading : 'Incredible power at an incredible value.' ?>
                            </h5>
                            <p style="margin: 25px 0">
                                <?= isset($page_data[2]->normal_text) ? $page_data[2]->normal_text : 'From $499' ?>
                            </p>
                            <p><a href="<?= isset($page_data[2]->btn_blue_bg_url) ? $page_data[2]->btn_blue_bg_url : '/home/listing' ?>"
                                    style="background-color: #0071e3;padding: 8px 20px;border-radius: 19px;color: white;"><?= isset($page_data[2]->btn_blue_bg_label) ? $page_data[2]->btn_blue_bg_label : 'Buy' ?></a>
                            </p>
                            <a href="<?= isset($page_data[2]->link_url) ? $page_data[2]->link_url : '/home/listing' ?>"><?= isset($page_data[2]->link_label) ? $page_data[2]->link_label : 'Learn more ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="product_main_img_2" class="similar_banner div-sec" tabIndex=3 title="bg_img"
                style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/ipad__bou485c1h6wi_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h1><?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'iPad Air' ?>
                            </h1>
                            <h5><?= isset($page_data[3]->sub_heading) ? $page_data[3]->sub_heading : 'Incredible power at an incredible value.' ?>
                            </h5>
                            <p style="margin: 25px 0">
                                <?= isset($page_data[3]->normal_text) ? $page_data[3]->normal_text : 'From $499' ?>
                            </p>
                            <p><a href="<?= isset($page_data[3]->btn_blue_bg_url) ? $page_data[3]->btn_blue_bg_url : '/home/listing' ?>"
                                    style="background-color: #0071e3;padding: 8px 20px;border-radius: 19px;color: white;"><?= isset($page_data[3]->btn_blue_bg_label) ? $page_data[3]->btn_blue_bg_label : 'Buy' ?></a>
                            </p>
                            <a href="<?= isset($page_data[3]->link_url) ? $page_data[3]->link_url : '/home/listing' ?>"><?= isset($page_data[3]->link_label) ? $page_data[3]->link_label : 'Learn more ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="product_main_img_2" class="similar_banner div-sec" tabIndex=4 title="bg_img"
                style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/ipad_air__c8xht6h7g7au_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-3" style="padding-top: 110px">
                            <h1><?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : 'iPad mini' ?>
                            </h1>
                            <div>
                                <h5 style="width: 215px">
                                    <?= isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : 'Small in size. <br>Big on capability.' ?>
                                </h5>
                            </div>
                            <p style="margin: 25px 0">
                                <?= isset($page_data[4]->normal_text) ? $page_data[4]->normal_text : 'From $399' ?>
                            </p>
                            <p><a href="<?= isset($page_data[4]->btn_blue_bg_url) ? $page_data[4]->btn_blue_bg_url : '/home/listing' ?>"
                                    style="background-color: #0071e3;padding: 8px 20px;border-radius: 19px;color: white;"><?= isset($page_data[4]->btn_blue_bg_label) ? $page_data[4]->btn_blue_bg_label : 'Buy' ?></a>
                            </p>
                            <a href="<?= isset($page_data[4]->link_url) ? $page_data[4]->link_url : '/home/listing' ?>"><?= isset($page_data[4]->link_label) ? $page_data[4]->link_label : 'Learn more ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="compare_models similar_banner" style="margin: 0px 15px">
                    <div style="padding: 0 420px;text-align: center" class="responsive_padding">
                        <h1><?= isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : 'Get up to $480 toward a new iPad.' ?>
                        </h1>
                    </div>
                    <div style="padding: 0 380px;text-align: center;" class="responsive_padding">
                        <p>
                            <?= isset($page_data[6]->normal_text) ? $page_data[6]->normal_text : 'With Apple Trade In, just give us your eligible iPad and get credit for a new one. It’s good for you and the planet.' ?>
                        </p>
                        <a href="<?= isset($page_data[6]->link_url) ? $page_data[6]->link_url : '/home/listing' ?>"><?= isset($page_data[6]->link_label) ? $page_data[6]->link_label : 'Find your trade‑in value ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 60px 0">
            <div class="col-md-4">
                <div style="text-align: center;padding: 0 50px">
                    <i class="fas fa-cube fa-3x"></i>
                    <h5 style="margin-top: 20px">
                        <?= isset($page_data[7]->main_heading1) ? $page_data[7]->main_heading1 : 'Fast, free delivery' ?>
                    </h5>
                    <p style=;margin-bottom: 10px">
                        <?= isset($page_data[7]->normal_text1) ? $page_data[7]->normal_text1 : 'And free returns. See checkout for delivery dates.' ?>
                    </p>
                    <a href="<?= isset($page_data[7]->link_url1) ? $page_data[7]->link_url1 : '/home/listing' ?>"><?= isset($page_data[7]->link_label1) ? $page_data[7]->link_label1 : 'Learn more ' ?>
                        <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-4">
                <div style="text-align: center;padding: 0 55px">
                    <i class="fas fa-dollar-sign fa-3x"></i>
                    <h5 style="margin-top: 20px">
                        <?= isset($page_data[7]->main_heading2) ? $page_data[7]->main_heading2 : 'Fast, free delivery' ?>
                    </h5>
                    <p style="margin-bottom: 10px">
                        <?= isset($page_data[7]->normal_text2) ? $page_data[7]->normal_text2 : 'And free returns. See checkout for delivery dates.' ?>
                    </p>
                    <a href="<?= isset($page_data[7]->link_url2) ? $page_data[7]->link_url2 : '/home/listing' ?>"><?= isset($page_data[7]->link_label2) ? $page_data[7]->link_label2 : 'Learn more ' ?>
                        <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-4">
                <div style="text-align: center;padding: 0 65px">
                    <i class="fas fa-grip-lines fa-3x"></i>
                    <h5 style="margin-top: 20px">
                        <?= isset($page_data[7]->main_heading3) ? $page_data[7]->main_heading3 : 'Fast, free delivery' ?>
                    </h5>
                    <p style="margin-bottom: 10px">
                        <?= isset($page_data[7]->normal_text3) ? $page_data[7]->normal_text3 : 'And free returns. See checkout for delivery dates.' ?>
                    </p>
                    <a href="<?= isset($page_data[7]->link_url3) ? $page_data[7]->link_url3 : '/home/listing' ?>"><?= isset($page_data[7]->link_label3) ? $page_data[7]->link_label3 : 'Learn more ' ?>
                        <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 70px;margin-bottom: 100px">
            <div class="col-md-12">
                <h1 style="text-align: center">
                    <?= isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : 'iPad essentials' ?></h1>
            </div>
        </div>
        <div class="row" style="margin: 0px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=9 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : 'assets/images/tile_bg.jpg')); ?>);">
                    <div style="margin: 0 auto;">
                        <h1><?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'Apple Pencil' ?>
                        </h1>
                        <h6><?= isset($page_data[9]->sub_heading) ? $page_data[9]->sub_heading : 'Dream it up. Jot it down.' ?>
                        </h6>
                        <a href="<?= isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[9]->link1_label) ? $page_data[9]->link1_label : 'Learn more ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[9]->link2_url) ? $page_data[9]->link2_url : '/home/listing' ?>"><?= isset($page_data[9]->link2_label) ? $page_data[9]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=10 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[10]->bg_img) ? $page_data[10]->bg_img : 'assets/images/smart_keyboard_folio__ci1ccr3r95iu_large.jpg')); ?>);">
                    <div style="margin: 0 auto;vertical-align: bottom">
                        <h1><?= isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : 'Keyboards for iPad' ?>
                        </h1>
                        <h6><?= isset($page_data[10]->sub_heading) ? $page_data[10]->sub_heading : 'Keyboards that have you covered.' ?>
                        </h6>
                        <a href="<?= isset($page_data[10]->link1_url) ? $page_data[10]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[10]->link1_label) ? $page_data[10]->link1_label : 'Learn more ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[10]->link2_url) ? $page_data[10]->link2_url : '/home/listing' ?>"><?= isset($page_data[10]->link2_label) ? $page_data[10]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 8px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec btm-text" tabIndex=11 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : 'assets/images/tile_bg.jpg')); ?>);">
                    <div style="width: 450px;margin: 0 auto;" class="responsive_width">
                        <h1><?= isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : 'Accessories' ?>
                        </h1>
                        <h6><?= isset($page_data[11]->sub_heading) ? $page_data[11]->sub_heading : 'Explore covers, cases, and more to help you get the most from your iPad.' ?>
                        </h6>
                        <a href="<?= isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[11]->link1_label) ? $page_data[11]->link1_label : 'Shop iPad Accessories ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : '/home/listing' ?>"><?= isset($page_data[11]->link2_label) ? $page_data[11]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec btm-text" tabIndex=12 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : 'assets/images/tile_bg.jpg')); ?>);">
                    <div style="width: 275px;margin: 0 auto;" class="responsive_width">
                        <h1><?= isset($page_data[12]->main_heading) ? $page_data[12]->main_heading : 'AirPods' ?></h1>
                        <h6><?= isset($page_data[12]->sub_heading) ? $page_data[12]->sub_heading : 'Magic runs in the family.' ?>
                        </h6>
                        <a href="<?= isset($page_data[12]->link1_url) ? $page_data[12]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[12]->link1_label) ? $page_data[12]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[12]->link2_url) ? $page_data[12]->link2_url : '/home/listing' ?>"><?= isset($page_data[12]->link2_label) ? $page_data[12]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 130px;margin-bottom: 100px">
            <div class="col-md-12">
                <h1 style="text-align: center">
                    <?= isset($page_data[13]->main_heading) ? $page_data[13]->main_heading : 'What makes an iPad an iPad?' ?>
                </h1>
            </div>
        </div>

        <div class="row" style="margin: 27px 0;">
            <div class="col-md-12" style="padding: 0">
                <div class="home_sections_bg3 similar_banner div-sec" tabIndex=14 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[14]->bg_img) ? $page_data[14]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div class="row">
                        <div class="col-md-7"></div>
                        <div class="col-md-3" style="text-align: center;">
                            <h1><?= isset($page_data[14]->main_heading) ? $page_data[14]->main_heading : 'Why iPad' ?>
                            </h1>
                            <p>
                                <?= isset($page_data[14]->sub_heading) ? $page_data[14]->sub_heading : 'Like a computer.<br>Unlike any computer' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[14]->link1_url) ? $page_data[14]->link1_url : '/home/listing' ?>"><?= isset($page_data[14]->link1_label) ? $page_data[14]->link1_label : 'Learn More ' ?>
                                <i class="fa fa-angle-right"></i> </a>
                            <br>
                            <a
                                href="<?= isset($page_data[14]->link2_url) ? $page_data[14]->link2_url : '/home/listing' ?>"><?= isset($page_data[14]->link2_label) ? $page_data[14]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i> </a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 27px 0;">
            <div class="col-md-12" style="padding: 0px">
                <div class="home_sections_bg3 similar_banner div-sec" tabIndex=15 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-3" style="text-align: center">
                            <h1><?= isset($page_data[15]->main_heading) ? $page_data[15]->main_heading : 'iPadOS' ?>
                            </h1>
                            <p>
                                <?= isset($page_data[15]->sub_heading) ? $page_data[15]->sub_heading : 'Incredibly capable.<br>Distinctly iPad.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[15]->link1_url) ? $page_data[15]->link1_url : '/home/listing' ?>"><?= isset($page_data[15]->link1_label) ? $page_data[15]->link1_label : 'See what’s new ' ?>
                                <i class="fa fa-angle-right"></i> </a>
                            <br>
                            <a
                                href="<?= isset($page_data[15]->link2_url) ? $page_data[15]->link2_url : '/home/listing' ?>"><?= isset($page_data[15]->link2_label) ? $page_data[15]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i> </a>
                        </div>
                        <div class="col-md-7"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 27px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=16 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[16]->bg_img) ? $page_data[16]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;width: 250px" class="responsive_width">
                        <h1><?= isset($page_data[16]->main_heading) ? $page_data[16]->main_heading : 'iCloud' ?></h1>
                        <p>
                            <?= isset($page_data[16]->sub_heading) ? $page_data[16]->sub_heading : 'The best place for all your photos, files, and more.' ?>
                        </p>
                        <a href="<?= isset($page_data[16]->link1_url) ? $page_data[16]->link1_url : '/home/listing' ?>"><?= isset($page_data[16]->link1_label) ? $page_data[16]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[16]->link2_url) ? $page_data[16]->link2_url : '/home/listing' ?>"><?= isset($page_data[16]->link2_label) ? $page_data[16]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=17 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[17]->bg_img) ? $page_data[17]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;width: 250px" class="responsive_width">
                        <h1><?= isset($page_data[17]->main_heading) ? $page_data[17]->main_heading : 'Pay' ?></h1>
                        <p>
                            <?= isset($page_data[17]->sub_heading) ? $page_data[17]->sub_heading : 'Cashless made effortless.' ?>
                        </p>
                        <a href="<?= isset($page_data[17]->link1_url) ? $page_data[17]->link1_url : '/home/listing' ?>"><?= isset($page_data[17]->link1_label) ? $page_data[17]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[17]->link2_url) ? $page_data[17]->link2_url : '/home/listing' ?>"><?= isset($page_data[17]->link2_label) ? $page_data[17]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 130px;margin-bottom: 100px">
            <div class="col-md-12">
                <h1 style="text-align: center">
                    <?= isset($page_data[18]->main_heading) ? $page_data[18]->main_heading : 'Get more out of your iPad' ?>
                </h1>
            </div>
        </div>

        <div class="row" style="margin: 10px 0;">
            <div class="col-md-12" style="padding: 0">
                <div class="home_sections_bg4 similar_banner div-sec" tabIndex=19 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[19]->bg_img) ? $page_data[19]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-3" style="text-align: center">
                            <h1><?= isset($page_data[19]->main_heading) ? $page_data[19]->main_heading : 'tv+' ?></h1>
                            <p>
                                <?= isset($page_data[19]->sub_heading) ? $page_data[19]->sub_heading : 'Lights. Camera. iPad. <br>Every new iPad comes with one year of Apple TV+.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[19]->link1_url) ? $page_data[19]->link1_url : '/home/listing' ?>"><?= isset($page_data[19]->link1_label) ? $page_data[19]->link1_label : 'Watch now on the Apple TV app ' ?>
                                <i class="fa fa-angle-right"></i></a>
                            <br>
                            <a
                                href="<?= isset($page_data[19]->link2_url) ? $page_data[19]->link2_url : '/home/listing' ?>"><?= isset($page_data[19]->link2_label) ? $page_data[19]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-7"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 8px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=20 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[20]->bg_img) ? $page_data[20]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;" class="responsive_width">
                        <h1><?= isset($page_data[20]->main_heading) ? $page_data[20]->main_heading : 'Card is here' ?>
                        </h1>
                        <p>
                            <?= isset($page_data[20]->sub_heading) ? $page_data[20]->sub_heading : 'Get 3% Daily Cash back on purchases from Apple using Apple Card.' ?>
                        </p>
                        <a href="<?= isset($page_data[20]->link1_url) ? $page_data[20]->link1_url : '/home/listing' ?>"><?= isset($page_data[20]->link1_label) ? $page_data[20]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[20]->link2_url) ? $page_data[20]->link2_url : '/home/listing' ?>"><?= isset($page_data[20]->link2_label) ? $page_data[20]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg1 similar_boxes div-sec" tabIndex=21 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[21]->bg_img) ? $page_data[21]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;width: 290px" class="responsive_width">
                        <h1><?= isset($page_data[21]->main_heading) ? $page_data[21]->main_heading : 'News+' ?></h1>
                        <h6><?= isset($page_data[21]->sub_heading) ? $page_data[21]->sub_heading : 'Hundreds of magazines and leading newspapers. One subscription.' ?>
                        </h6>
                        <a href="<?= isset($page_data[21]->link1_url) ? $page_data[21]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[21]->link1_label) ? $page_data[21]->link1_label : 'Try Apple News+ free ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[21]->link2_url) ? $page_data[21]->link2_url : '/home/listing' ?>"><?= isset($page_data[21]->link2_label) ? $page_data[21]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 8px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg1  div-sec btm-text" tabIndex=22 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[22]->bg_img) ? $page_data[22]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;width: 340px" class="responsive_width">
                        <h1><?= isset($page_data[22]->main_heading) ? $page_data[22]->main_heading : 'Arcade' ?></h1>
                        <h6><?= isset($page_data[22]->sub_heading) ? $page_data[22]->sub_heading : 'A new world to play in. 100+ ad‑free games.' ?>
                        </h6>
                        <a href="<?= isset($page_data[22]->link1_url) ? $page_data[22]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[22]->link1_label) ? $page_data[22]->link1_label : 'Try it free ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[22]->link2_url) ? $page_data[22]->link2_url : '/home/listing' ?>"><?= isset($page_data[22]->link2_label) ? $page_data[22]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg1 similar_banner div-sec btm-text" tabIndex=23 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[23]->bg_img) ? $page_data[23]->bg_img : 'assets/images/tile_bg.jpg')); ?>');">
                    <div style="margin: 0 auto;width: 290px" class="responsive_width">
                        <h1><?= isset($page_data[23]->main_heading) ? $page_data[23]->main_heading : 'Music' ?></h1>
                        <h6><?= isset($page_data[23]->sub_heading) ? $page_data[23]->sub_heading : '60 million songs. 3 months on us.' ?>
                        </h6>
                        <a href="<?= isset($page_data[23]->link1_url) ? $page_data[23]->link1_url : '/home/listing' ?>"
                            style=""><?= isset($page_data[23]->link1_label) ? $page_data[23]->link1_label : 'Try it free ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[23]->link2_url) ? $page_data[23]->link2_url : '/home/listing' ?>"><?= isset($page_data[23]->link2_label) ? $page_data[23]->link2_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 15px 0;">
            <div class="col-md-6 leftBox px-md-2">
                <div class="home_sections_bg5 similar_boxes div-sec" tabIndex=24 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[24]->bg_img) ? $page_data[24]->bg_img : 'assets/images/ipad_for_education__favmlfwgsjee_large.jpg')); ?>');">
                    <h1><?= isset($page_data[24]->main_heading) ? $page_data[24]->main_heading : 'iPad for Education' ?>
                    </h1>
                    <div style="margin: 0 auto;width: 300px" class="responsive_width">
                        <p>
                            <?= isset($page_data[24]->sub_heading) ? $page_data[24]->sub_heading : 'The perfect computer for learning looks nothing like a computer.' ?>
                        </p>
                        <a href="<?= isset($page_data[24]->link1_url) ? $page_data[24]->link1_url : '/home/listing' ?>"><?= isset($page_data[24]->link1_label) ? $page_data[24]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[24]->link2_url) ? $page_data[24]->link2_url : '/home/listing' ?>"><?= isset($page_data[24]->link2_label) ? $page_data[24]->link2_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 rightBox px-md-2">
                <div class="home_sections_bg6 similar_boxes div-sec" tabIndex=25 title="bg_img"
                    style="background-image: url('<?= base_url((isset($page_data[25]->bg_img) ? $page_data[25]->bg_img : 'assets/images/ipad_for_business__ehnpmw5yjt0m_large.jpg')); ?>');">
                    <h1><?= isset($page_data[25]->main_heading) ? $page_data[25]->main_heading : 'iPad for Business' ?>
                    </h1>
                    <div style="margin: 0 auto;width: 300px" class="responsive_width">
                        <p>
                            <?= isset($page_data[25]->sub_heading) ? $page_data[25]->sub_heading : 'With a wide range of capabilities, iPad will change the way you work.' ?>
                        </p>
                        <a href="<?= isset($page_data[25]->link1_url) ? $page_data[25]->link1_url : '/home/listing' ?>"><?= isset($page_data[25]->link1_label) ? $page_data[25]->link1_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>
                        <br>
                        <a href="<?= isset($page_data[25]->link2_url) ? $page_data[25]->link2_url : '/home/listing' ?>"><?= isset($page_data[25]->link2_label) ? $page_data[25]->link2_label : 'Learn More ' ?>
                            <i class="fa fa-angle-right"></i> </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
