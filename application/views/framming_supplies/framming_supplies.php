<style>
#product_main_img_1 {
    background-repeat: no-repeat;
    background-size: cover;
    height: 400px;
    width: 100%;
    padding: 130px 125px
}

#product_main_img_2 {
    background-repeat: no-repeat;
    background-size: cover;
    height: 450px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
}

#product_main_img_2 h2 {
    margin-top: 350px;
    padding: 10px;
    margin-bottom: 0
}

#product_main_img_3 {
    background-repeat: no-repeat;
    background-size: cover;
    height: 450px;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
    text-align: center;
    padding-left: 20px
}

#product_main_img_3 h2 {
    margin-top: 250px;
    padding: 10px;
    margin-bottom: 0
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

.boxesClass_1 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_2 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_3 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_4 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_5 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_6 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-right: 10px solid white;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
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
}

.boxesClass10 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_7 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

.boxesClass_8 {
    height: 600px;
    text-align: center;
    background-color: #f2f2f2;
    padding-bottom: 80px;
    border-bottom: 10px solid white;
    background-repeat: no-repeat;
    background-size: cover;
}

@media screen and (max-width: 550px) and (min-width: 300px) {
    .responsive_width {
        width: auto !important;
    }

    #product_main_img_1 {
        width: auto !important;
        padding-right: 45px !important;
        padding-left: 45px !important;
        background-size: cover;
    }
}
</style>
<div class="container-fluid">
    <div class="row">
        <div id="product_main_img_1"
            style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/banner-macbook.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="width: 20%" class="responsive_width">
                            <?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'Look smart. Be smarter.' ?>
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
            <?= isset($page_data[2]->section_heading) ? $page_data[2]->section_heading : 'Featured iPad Accessories' ?>
        </h2>
        <div class="row">
            <div class="col-md-4 boxesClass8"
                style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/MU8F2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MU8F2.png') ?>" style="margin: 120px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 667px;padding-top: 530px;">
                    <small
                        style="color: #e85d00"><b><?= isset($page_data[3]->small_text) ? $page_data[3]->small_text : 'Free Engraving' ?></b></small>
                    <p>
                        <a
                            href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '/home/listing' ?>"><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Apple Pencil (2nd generation) ' ?></a>
                    </p>
                    <p><?= isset($page_data[3]->text) ? $page_data[3]->text : '$129.00' ?></p>
                </div>
            </div>
            <div class="col-md-8 boxesClass9"
                style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/MXNK2_AV2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MXNK2_AV2.png') ?>" style="width: 100%;margin: 30px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 667px;padding-top: 559px;">
                    <p>
                        <a href="<?= isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '/home/listing' ?>"><?= isset($page_data[4]->link1_label) ? $page_data[4]->link1_label : 'Smart Keyboard Folio for iPad Pro 11-inch (2nd generation) ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </p>
                    <p><?= isset($page_data[4]->text) ? $page_data[4]->text : '$129.00' ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 boxesClass_1">
                <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MU8F2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 550px;padding-top: 420px;">
                    <p>
                        <a class="boxesClass_1_a"></a>
                    </p>
                    <p class="boxesClass_1_text"></p>
                </div>
                <span class="dot1"></span>
                <span class="dot2"></span>
                <span class="dot3"></span>
            </div>
            <div class="col-md-4 boxesClass_2"
                style="background-image: url(<?= base_url((isset($page_data[6]->bg_img) ? $page_data[6]->bg_img : 'assets/images/MXTE2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MXTE2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 550px;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '/home/listing' ?>"><?= isset($page_data[6]->link1_label) ? $page_data[6]->link1_label : 'Smart Folio for iPad Pro 12.9-inch (4th generation) - Cactus ' ?></a>
                    </p>
                    <p><?= isset($page_data[6]->text) ? $page_data[6]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass10">
                <!-- <img class="updateTileImg" src="<?= base_url('assets/images/MXTE2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;height: 550px;padding-top: 420px;">
                    <p>
                        <a class="boxesClass10_a"></a>
                    </p>
                    <p class="boxesClass10_text"></p>
                </div>
                <span class="dot1"></span>
                <span class="dot2"></span>
                <span class="dot3"></span>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="container" id="product_main_img_3"
            style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : 'assets/images/ipad-pencil-accessories-202003.jpg')); ?>);">
            <div class="row">
                <div class="col-md-4">
                    <h2><?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'Stay sharp.' ?></h2>
                    <a href="<?= isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '/home/listing' ?>"><?= isset($page_data[9]->link1_label) ? $page_data[9]->link1_label : 'Shop Apple Pencil ' ?><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 75px;text-align: center">
        <h2 style="margin-bottom: 10px">
            <?= isset($page_data[10]->section_heading) ? $page_data[10]->section_heading : 'iPad Essentials' ?></h2>
        <div class="row">
            <div class="col-md-4 boxesClass_3"
                style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : 'assets/images/MRMH2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MRMH2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '/home/listing' ?>"><?= isset($page_data[11]->link1_label) ? $page_data[11]->link1_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand ' ?></a>
                    </p>
                    <p><?= isset($page_data[11]->text) ? $page_data[11]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass_4"
                style="background-image: url(<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : 'assets/images/MRME2_AV1.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MRME2_AV1.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a href="<?= isset($page_data[12]->link1_url) ? $page_data[12]->link1_url : '/home/listing' ?>"><?= isset($page_data[12]->link1_label) ? $page_data[12]->link1_label : 'iPad mini Smart Cover - Cactus ' ?>
                        </a>
                    </p>
                    <p><?= isset($page_data[12]->text) ? $page_data[12]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass_7"
                style="background-image: url(<?= base_url((isset($page_data[13]->bg_img) ? $page_data[13]->bg_img : 'assets/images/MRMF2_AV1.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MRMF2_AV1.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[13]->link1_url) ? $page_data[13]->link1_url : '/home/listing' ?>"><?= isset($page_data[13]->link1_label) ? $page_data[13]->link1_label : 'Airpods Pro ' ?></a>
                    </p>
                    <p><?= isset($page_data[13]->text) ? $page_data[13]->text : '$99.00' ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 60px;margin-bottom: 50px;text-align: center">
        <h2 style="margin-bottom: 10px">
            <?= isset($page_data[14]->section_heading) ? $page_data[14]->section_heading : 'Power & Cables' ?></h2>
        <div class="row">
            <div class="col-md-4 boxesClass_5"
                style="background-image: url(<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/MWP22.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/MWP22.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a href="<?= isset($page_data[15]->link1_url) ? $page_data[15]->link1_url : '/home/listing' ?>"><?= isset($page_data[15]->link1_label) ? $page_data[15]->link1_label : 'USB-C Digital AV Multiport Adapter ' ?>
                        </a>
                    </p>
                    <p><?= isset($page_data[15]->text) ? $page_data[15]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass_6"
                style="background-image: url(<?= base_url((isset($page_data[16]->bg_img) ? $page_data[16]->bg_img : 'assets/images/HNFF2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/HNFF2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a href="<?= isset($page_data[16]->link1_url) ? $page_data[16]->link1_url : '/home/listing' ?>"><?= isset($page_data[16]->link1_label) ? $page_data[16]->link1_label : 'USB-C Digital AV Multiport Adapter ' ?>
                        </a>
                    </p>
                    <p><?= isset($page_data[16]->text) ? $page_data[16]->text : '$99.00' ?></p>
                </div>
            </div>
            <div class="col-md-4 boxesClass_8"
                style="background-image: url(<?= base_url((isset($page_data[17]->bg_img) ? $page_data[17]->bg_img : 'assets/images/HMTZ2.png')); ?>);">
                <!-- <img src="<?= base_url('assets/images/HMTZ2.png') ?>" style="margin: 65px 0" /> -->
                <div style="width: 80%; margin: 0 auto;padding-top: 420px;">
                    <p>
                        <a
                            href="<?= isset($page_data[17]->link1_url) ? $page_data[17]->link1_url : '/home/listing' ?>"><?= isset($page_data[17]->link1_label) ? $page_data[17]->link1_label : 'USB-C to 3.5 mm Headphone Jack Adapter ' ?></a>
                    </p>
                    <p><?= isset($page_data[17]->text) ? $page_data[17]->text : '$99.00' ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <div style="width: 80%; margin: 30px auto 0 auto;">
                    <p>
                        <a href="<?= isset($page_data[14]->link1_url) ? $page_data[14]->link1_url : '/home/listing' ?>"><?= isset($page_data[14]->link1_label) ? $page_data[14]->link1_label : 'Shop Power & Cables ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h2 style="margin-bottom: 0px;text-align: center;padding: 10px">
                        <?= isset($page_data[18]->section_heading) ? $page_data[18]->section_heading : 'Shop by Category' ?>
                    </h2>
                    <p style="margin-bottom: 40px;text-align: center">
                        <?= isset($page_data[18]->sub_heading) ? $page_data[18]->sub_heading : 'Discover the perfect accessories.' ?>
                    </p>
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image1) ? $page_data[18]->image1 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon1_label) ? $page_data[18]->icon1_label : 'Accessibility' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image2) ? $page_data[18]->image2 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon2_label) ? $page_data[18]->icon2_label : 'Cases & Protection' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image3) ? $page_data[18]->image3 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon3_label) ? $page_data[18]->icon3_label : 'Photography' ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image4) ? $page_data[18]->image4 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon4_label) ? $page_data[18]->icon4_label : 'Photography' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image5) ? $page_data[18]->image5 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon5_label) ? $page_data[18]->icon5_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image6) ? $page_data[18]->image6 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon6_label) ? $page_data[18]->icon6_label : 'Cases & Protection' ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image7) ? $page_data[18]->image7 : 'assets/images/homepage_productnav_imac_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon7_label) ? $page_data[18]->icon7_label : 'Photography' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image8) ? $page_data[18]->image8 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon8_label) ? $page_data[18]->icon8_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image9) ? $page_data[18]->image9 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon9_label) ? $page_data[18]->icon9_label : 'Cases & Protection' ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image10) ? $page_data[18]->image10 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon10_label) ? $page_data[18]->icon10_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image11) ? $page_data[18]->image11 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon11_label) ? $page_data[18]->icon11_label : 'Cases & Protection' ?></span>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image12) ? $page_data[18]->image12 : 'assets/images/homepage_productdrawer_applemusic_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon12_label) ? $page_data[18]->icon12_label : 'Health & Fitness' ?></span>
                        </div>
                        <div class="col-md-4" style="margin-top: 20px;margin-bottom: 20px">
                            <img src="<?= base_url((isset($page_data[18]->image13) ? $page_data[18]->image13 : 'assets/images/homepage_productnav_iphone_2x.png')); ?>"
                                width="15%" />
                            <span
                                style="margin-left: 20px;"><?= isset($page_data[18]->icon13_label) ? $page_data[18]->icon13_label : 'Cases & Protection' ?></span>
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
var backgrounds = [
    '<?= (isset($page_data[5]->bg_img1) ? base_url($page_data[5]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[5]->bg_img2) ? $page_data[5]->bg_img2 : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[5]->bg_img3) ? $page_data[5]->bg_img3 : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables = [
    '<?= (isset($page_data[5]->link1_label) ? $page_data[5]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[5]->link2_label) ? $page_data[5]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[5]->link3_label) ? $page_data[5]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls = [
    '<?= (isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[5]->link2_url) ? $page_data[5]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[5]->link3_url) ? $page_data[5]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts = ['<?= (isset($page_data[5]->text1) ? $page_data[5]->text1 : '$150') ?>',
    '<?= (isset($page_data[5]->text2) ? $page_data[5]->text2 : '$120') ?>',
    '<?= (isset($page_data[5]->text3) ? $page_data[5]->text3 : '$99') ?>'
];
setInterval(function() {
    $('.boxesClass_1').css('background-image', 'url(' + backgrounds[i] + ')');
    $('.boxesClass_1_a').text(link_lables[i]);
    $('.boxesClass_1_a').attr("href", link_urls[i]);
    $('.boxesClass_1_text').text(texts[i]);
    if (i >= backgrounds.length - 1) {
        i = 0
    } else {
        i++;
    }
}, 3000);

var j = 0;
var backgrounds = [
    '<?= (isset($page_data[7]->bg_img1) ? base_url($page_data[7]->bg_img1) : base_url('assets/images/ipad-pencil-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[7]->bg_img2) ? $page_data[7]->bg_img2 : base_url('assets/images/ipad-keyboard-accessories-202003.jpg')) ?>',
    '<?= (isset($page_data[7]->bg_img3) ? $page_data[7]->bg_img3 : base_url('assets/images/MXTE2.png')) ?>'
];
var link_lables = [
    '<?= (isset($page_data[7]->link1_label) ? $page_data[7]->link1_label : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[7]->link2_label) ? $page_data[7]->link2_label : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[7]->link3_label) ? $page_data[7]->link3_label : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var link_urls = [
    '<?= (isset($page_data[7]->link1_url) ? $page_data[7]->link1_url : 'Logitech Combo Touch Keyboard Case with Trackpad for iPad (7th generation)') ?>',
    '<?= (isset($page_data[7]->link2_url) ? $page_data[7]->link2_url : 'Smart Folio for iPad Pro 11-inch (2nd generation) - Pink Sand') ?>',
    '<?= (isset($page_data[7]->link3_url) ? $page_data[7]->link3_url : 'Smart Folio for iPad Pro 11-inch') ?>'
];
var texts = ['<?= (isset($page_data[7]->text1) ? $page_data[7]->text1 : '$150') ?>',
    '<?= (isset($page_data[7]->text2) ? $page_data[7]->text2 : '$120') ?>',
    '<?= (isset($page_data[7]->text3) ? $page_data[7]->text3 : '$99') ?>'
];
setInterval(function() {
    $('.boxesClass10').css('background-image', 'url(' + backgrounds[j] + ')');
    $('.boxesClass10_a').text(link_lables[j]);
    $('.boxesClass10_a').attr("href", link_urls[j]);
    $('.boxesClass10_text').text(texts[j]);
    if (j >= backgrounds.length - 1) {
        j = 0
    } else {
        j++;
    }
}, 3000);
</script>
