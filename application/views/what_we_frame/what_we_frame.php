<style>
#product_main_img_1 {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 450px;
    width: 100%;
    padding: 150px 125px;
}

#product_main_img_2 {
    background-image: url(<?= base_url('assets/images/redwall_orig.jpg');
    ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 450px;
    width: 100%;
    padding: 100px 125px
}

#product_main_img_3 {
    background-image: url(<?= base_url('assets/images/appsfromapple__ccg14s8qy6qa_large.jpg');
    ?>);
    height: 500px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-position: center;
    /* background-attachment: fixed; */
}

.dot1 {
    height: 15px;
    width: 15px;
    background-color: burlywood;
    border-radius: 50%;
    display: inline-block;
}

.dot2 {
    height: 15px;
    width: 15px;
    background-color: pink;
    border-radius: 50%;
    display: inline-block;
}

.dot3 {
    height: 15px;
    width: 15px;
    background-color: crimson;
    border-radius: 50%;
    display: inline-block;
}

.boxesClass8 {
    height: 700px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass9 {
    height: 700px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    padding-left: 0;
    padding-right: 0;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass6 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass7 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass5 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass4 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass3 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass2 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass1 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass12 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.boxesClass13 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

@media screen and (max-width: 550px) and (min-width: 300px) {
    #product_main_img_1 {
        width: auto !important;
        padding-right: 45px !important;
        padding-left: 45px !important;
    }
}
</style>
<div class="container-fluid">
    <div class="row">
        <div id="product_main_img_1" class="div-sec" tabIndex=1 title="bg_img"
            style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/banner-macbook.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1><?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'Make the perfect connection.' ?>
                        </h1>
                        <a href="<?= isset($page_data[1]->link1_url) ? $page_data[1]->link1_url : '/home/listing' ?>"><?= isset($page_data[1]->link1_label) ? $page_data[1]->link1_label : 'Shop Cases & Protection ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 75px;text-align: center">
        <h2 style="margin-bottom: 10px">
            <?= isset($page_data[2]->section_heading) ? $page_data[2]->section_heading : 'Featured MAC Accessories' ?>
        </h2>
        <div class="row">
            <div class="col-md-4 boxesClass8">
                <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MWV92.png') ?>" style="margin: 120px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 667px;padding-top: 550px;">
                    <p>
                        <a class="boxesClass8_a"></a>
                    </p>
                    <p class="boxesClass8_text"></p>
                </div>
                <span class="dot1"></span>
                <span class="dot2"></span>
                <span class="dot3"></span>
            </div>
            <div class="col-md-8 boxesClass9 div-sec" tabIndex=4 title="bg_img"
                style="background-image: url('/assets/images/pro-display-hero.png')">
                <!-- <img src="<?= base_url('assets/images/pro-display-hero.png') ?>" style="width: 100%;margin-bottom: 35px" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 550px;">
                    <p>
                        <a
                            href="<?= isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '/home/listing' ?>"><?= isset($page_data[4]->link1_label) ? $page_data[4]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[4]->small_text) ? $page_data[4]->small_text : '$99.00' ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 boxesClass7 div-sec" title="bg_img" tabIndex=5
                style="background-image: url('assets/images/HMUB2.png');">
                <!-- <img src="<?= base_url('assets/images/HMUB2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '/home/listing' ?>"><?= isset($page_data[5]->link1_label) ? $page_data[5]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[5]->small_text) ? $page_data[5]->small_text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass6 div-sec" title="bg_img" tabIndex=6
                style="background-image: url('assets/images/MX0J2_GEO_US.png')">
                <!-- <img src="<?= base_url('assets/images/MX0J2_GEO_US.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '/home/listing' ?>"><?= isset($page_data[6]->link1_label) ? $page_data[6]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[6]->text) ? $page_data[6]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass5"
                style="background-image: url(<?= base_url((isset($page_data[7]->bg_img) ? $page_data[7]->bg_img : 'assets/images/MJ1M2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MJ1M2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[7]->link1_url) ? $page_data[7]->link1_url : '/home/listing' ?>"><?= isset($page_data[7]->link1_label) ? $page_data[7]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[7]->text) ? $page_data[7]->text : '$99.00' ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 75px;text-align: center">
        <h2 style="margin-bottom: 10px">
            <?= isset($page_data[8]->section_heading) ? $page_data[8]->section_heading : 'Mice & Keyboards' ?></h1>
            <div class="row">
                <div class="col-md-4 boxesClass4" style="">
                    <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MRMH2.png') ?>" style="margin: 65px 0" /> -->
                    <div style="width: 80%; margin: 0 auto;height: 567px;padding-top: 450px;">
                        <p>
                            <a class="boxesClass4_a"></a>
                        </p>
                        <p class="boxesClass4_text"></p>
                    </div>
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                </div>
                <div class="col-md-4 boxesClass3" style="">
                    <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MRME2_AV1.png') ?>" style="margin: 65px 0" /> -->
                    <div style="width: 80%; margin: 0 auto;height: 567px;padding-top: 450px;">
                        <p>
                            <a class="boxesClass3_a"></a>
                        </p>
                        <p class="boxesClass3_text"></p>
                    </div>
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                </div>
                <div class="col-md-4 boxesClass2" style="">
                    <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MRMF2_AV1.png') ?>" style="margin: 65px 0" /> -->
                    <div style="width: 80%; margin: 0 auto;height: 567px;padding-top: 450px;">
                        <p>
                            <a class="boxesClass2_a"></a>
                        </p>
                        <p class="boxesClass2_text"></p>
                    </div>
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                    <span class="dot3"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <div style="width: 80%; margin: 30px auto 0 auto;">
                        <p>
                            <a
                                href="<?= isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '/home/listing' ?>"><?= isset($page_data[8]->link1_label) ? $page_data[8]->link1_label : 'Shop Mice & Keyboards ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </p>
                    </div>
                </div>
            </div>
    </div>

    <div class="container" style="margin-top: 60px;margin-bottom: 50px;text-align: center">
        <h2 style="margin-bottom: 10px">
            <?= isset($page_data[12]->section_heading) ? $page_data[12]->section_heading : 'Mac Essentials' ?></h2>
        <div class="row">
            <div class="col-md-4 boxesClass1"
                style="background-image: url(<?= base_url((isset($page_data[13]->bg_img) ? $page_data[13]->bg_img : 'assets/images/MWP22.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MWP22.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[13]->link1_url) ? $page_data[13]->link1_url : '/home/listing' ?>"><?= isset($page_data[13]->link1_label) ? $page_data[13]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[13]->text) ? $page_data[13]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass12" style="">
                <!-- <img class="updateTileImg" src="<?= base_url('assets/images/HNFF2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 567px;padding-top: 420px;">
                    <p>
                        <a class="boxesClass12_a"></a>
                    </p>
                    <p class="boxesClass12_text"></p>
                </div>
                <span class="dot1"></span>
                <span class="dot2"></span>
                <span class="dot3"></span>
                <span class="dot1"></span>
            </div>
            <div class="col-md-4 boxesClass13"
                style="background-image: url(<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/HMTZ2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/HMTZ2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[15]->link1_url) ? $page_data[15]->link1_url : '/home/listing' ?>"><?= isset($page_data[15]->link1_label) ? $page_data[15]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[15]->text) ? $page_data[15]->text : '$99.00' ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 style="margin-bottom: 0px;text-align: center;padding: 10px">
                        <?= isset($page_data[17]->section_heading) ? $page_data[17]->section_heading : 'Shop by Category' ?>
                    </h2>
                    <p style="margin-bottom: 40px;text-align: center">
                        <?= isset($page_data[17]->sub_heading) ? $page_data[17]->sub_heading : 'Discover the perfect accessories.' ?>
                    </p>
                    <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image1) ? $page_data[17]->image1 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon1_label) ? $page_data[17]->icon1_label : 'Accessibility' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image2) ? $page_data[17]->image2 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon2_label) ? $page_data[17]->icon2_label : 'Cases & Protection' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image3) ? $page_data[17]->image3 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon3_label) ? $page_data[17]->icon3_label : 'Photography' ?></span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image4) ? $page_data[17]->image4 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon4_label) ? $page_data[17]->icon4_label : 'Photography' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image5) ? $page_data[17]->image5 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon5_label) ? $page_data[17]->icon5_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image6) ? $page_data[17]->image6 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon6_label) ? $page_data[17]->icon6_label : 'Cases & Protection' ?></span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image7) ? $page_data[17]->image7 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon7_label) ? $page_data[17]->icon7_label : 'Photography' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image8) ? $page_data[17]->image8 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon8_label) ? $page_data[17]->icon8_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image9) ? $page_data[17]->image9 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon9_label) ? $page_data[17]->icon9_label : 'Cases & Protection' ?></span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image10) ? $page_data[17]->image10 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon10_label) ? $page_data[17]->icon10_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image11) ? $page_data[17]->image11 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon11_label) ? $page_data[17]->icon11_label : 'Cases & Protection' ?></span>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row" style="margin-top: 20px;margin-bottom: 40px">
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image12) ? $page_data[17]->image12 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon12_label) ? $page_data[17]->icon12_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4">
                            <img src="<?= base_url((isset($page_data[17]->image13) ? $page_data[18]->image13 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[17]->icon13_label) ? $page_data[17]->icon13_label : 'Cases & Protection' ?></span>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>

<script>
// var i = 0;
// var array_imgs = ['http://sayaframes.000webhostapp.com/assets/images/HP312.png', 'http://sayaframes.000webhostapp.com/assets/images/MJ2R2.png'];
// var array_titles = ['Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)', 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand'];
// setInterval(function() {
//     $('.updateTileImg').attr("src", array_imgs[i]);
//     $('.updateTileTitle').text(array_titles[i]);
//     if (i == 0) {
//         i = 1;
//     } else {
//         i = 0
//     }
// }, 3000);

var i = 0;
var backgrounds3 = [
    '<?= (isset($page_data[3]->bg_img1) ? base_url($page_data[3]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[3]->bg_img2) ? base_url($page_data[3]->bg_img2) : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[3]->bg_img3) ? base_url($page_data[3]->bg_img3) : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables3 = [
    '<?= (isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[3]->link2_label) ? $page_data[3]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[3]->link3_label) ? $page_data[3]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls3 = [
    '<?= (isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[3]->link2_url) ? $page_data[3]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[3]->link3_url) ? $page_data[3]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts3 = ['<?= (isset($page_data[3]->text1) ? $page_data[3]->text1 : '$000') ?>',
    '<?= (isset($page_data[3]->text2) ? $page_data[3]->text2 : '$000') ?>',
    '<?= (isset($page_data[3]->text3) ? $page_data[3]->text3 : '$000') ?>'
];
setInterval(function() {
    $('.boxesClass8').css('background-image', 'url(' + backgrounds3[j] + ')');
    $('.boxesClass8_a').text(link_lables3[j]);
    $('.boxesClass8_a').attr("href", link_urls3[j]);
    $('.boxesClass8_text').text(texts3[j]);
    if (j >= backgrounds3.length - 1) {
        j = 0
    } else {
        j++;
    }
}, 3000);

var j = 0;
var backgrounds9 = [
    '<?= (isset($page_data[9]->bg_img1) ? base_url($page_data[9]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[9]->bg_img2) ? base_url($page_data[9]->bg_img2) : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[9]->bg_img3) ? base_url($page_data[9]->bg_img3) : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables9 = [
    '<?= (isset($page_data[9]->link1_label) ? $page_data[9]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[9]->link2_label) ? $page_data[9]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[9]->link3_label) ? $page_data[9]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls9 = [
    '<?= (isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[9]->link2_url) ? $page_data[9]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[9]->link3_url) ? $page_data[9]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts9 = ['<?= (isset($page_data[9]->text1) ? $page_data[9]->text1 : '$000') ?>',
    '<?= (isset($page_data[9]->text2) ? $page_data[9]->text2 : '$000') ?>',
    '<?= (isset($page_data[9]->text3) ? $page_data[9]->text3 : '$000') ?>'
];
setInterval(function() {
    $('.boxesClass4').css('background-image', 'url(' + backgrounds9[j] + ')');
    $('.boxesClass4_a').text(link_lables9[j]);
    $('.boxesClass4_a').attr("href", link_urls9[j]);
    $('.boxesClass4_text').text(texts9[j]);
    if (j >= backgrounds9.length - 1) {
        j = 0
    } else {
        j++;
    }
}, 3000);

var k = 0;
var backgrounds10 = [
    '<?= (isset($page_data[10]->bg_img1) ? base_url($page_data[10]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[10]->bg_img2) ? base_url($page_data[10]->bg_img2) : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[10]->bg_img3) ? base_url($page_data[10]->bg_img3) : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables10 = [
    '<?= (isset($page_data[10]->link1_label) ? $page_data[10]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[10]->link2_label) ? $page_data[10]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[10]->link3_label) ? $page_data[10]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls10 = [
    '<?= (isset($page_data[10]->link1_url) ? $page_data[10]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[10]->link2_url) ? $page_data[10]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[10]->link3_url) ? $page_data[10]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts10 = ['<?= (isset($page_data[10]->text1) ? $page_data[10]->text1 : '$150') ?>',
    '<?= (isset($page_data[10]->text2) ? $page_data[10]->text2 : '$120') ?>',
    '<?= (isset($page_data[10]->text3) ? $page_data[10]->text3 : '$99') ?>'
];
setInterval(function() {
    $('.boxesClass3').css('background-image', 'url(' + backgrounds10[k] + ')');
    $('.boxesClass3_a').text(link_lables10[k]);
    $('.boxesClass3_a').attr("href", link_urls10[k]);
    $('.boxesClass3_text').text(texts10[k]);
    if (k >= backgrounds10.length - 1) {
        k = 0
    } else {
        k++;
    }
}, 3000);

var l = 0;
var backgrounds11 = [
    '<?= (isset($page_data[11]->bg_img1) ? base_url($page_data[11]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[11]->bg_img2) ?  base_url($page_data[11]->bg_img2) : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[11]->bg_img3) ?  base_url($page_data[11]->bg_img3) : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables11 = [
    '<?= (isset($page_data[11]->link1_label) ? $page_data[11]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[11]->link2_label) ? $page_data[11]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[11]->link3_label) ? $page_data[11]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls11 = [
    '<?= (isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[11]->link3_url) ? $page_data[11]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts11 = ['<?= (isset($page_data[11]->text1) ? $page_data[11]->text1 : '$150') ?>',
    '<?= (isset($page_data[11]->text2) ? $page_data[11]->text2 : '$120') ?>',
    '<?= (isset($page_data[11]->text3) ? $page_data[11]->text3 : '$99') ?>'
];
setInterval(function() {
    $('.boxesClass2').css('background-image', 'url(' + backgrounds11[l] + ')');
    $('.boxesClass2_a').text(link_lables11[l]);
    $('.boxesClass2_a').attr("href", link_urls11[l]);
    $('.boxesClass2_text').text(texts11[l]);
    if (l >= backgrounds11.length - 1) {
        l = 0
    } else {
        l++;
    }
}, 3000);

var m = 0;
var backgrounds14 = [
    '<?= (isset($page_data[14]->bg_img1) ? base_url($page_data[14]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[14]->bg_img2) ?  base_url($page_data[14]->bg_img2) : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[14]->bg_img3) ?  base_url($page_data[14]->bg_img3) : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables14 = [
    '<?= (isset($page_data[14]->link1_label) ? $page_data[14]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[14]->link2_label) ? $page_data[14]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[14]->link3_label) ? $page_data[14]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls14 = [
    '<?= (isset($page_data[14]->link1_url) ? $page_data[14]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[14]->link2_url) ? $page_data[14]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[14]->link3_url) ? $page_data[14]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts14 = ['<?= (isset($page_data[14]->text1) ? $page_data[14]->text1 : '$150') ?>',
    '<?= (isset($page_data[14]->text2) ? $page_data[14]->text2 : '$120') ?>',
    '<?= (isset($page_data[14]->text3) ? $page_data[14]->text3 : '$99') ?>'
];
setInterval(function() {
    $('.boxesClass12').css('background-image', 'url(' + backgrounds14[m] + ')');
    $('.boxesClass12_a').text(link_lables14[m]);
    $('.boxesClass12_a').attr("href", link_urls14[m]);
    $('.boxesClass12_text').text(texts14[m]);
    if (m >= backgrounds14.length - 1) {
        m = 0
    } else {
        m++;
    }
}, 3000);
</script>