<style>
.row{
    margin: auto;
}
    #product_main_img_1 {
        background-repeat: no-repeat;
        background-position: center top;
        height: 980px;
        width: 100%;
    }

    #product_main_img_2 {
        background-repeat: no-repeat;
        background-position: center top;
        height: 630px;
        width: 100%;
    }

    #product_main_img_3 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1800px;
        width: 100%;
    }

    #product_main_img_4 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1300px;
        width: 100%;
    }

    .product_main_img_5 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1230px;
        width: 100%;
    }

    .product_main_img_6 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1700px;
        width: 100%;
    }

    .product_main_img_7 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1700px;
        width: 100%;
    }

    .product_main_img_8 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1500px;
        width: 100%;
    }

    .product_main_img_9 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 2000px;
        width: 100%;
    }

    .product_main_img_10 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1350px;
        width: 100%;
    }

    .product_main_img_11 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 950px;
        width: 100%;
    }

    .product_main_img_12 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 1200px;
        width: 100%;
    }

    .product_main_img_13 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 500px;
        width: 100%;
    }

    .product_main_img_14 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 950px;
        width: 100%;
    }

    .product_main_img_15 {
        background-repeat: no-repeat;
        background-size: cover;
        height: 650px;
        width: 100%;
    }

    .compare_models {
        padding-top: 106px;
        padding-bottom: 130px;
    }

    .compare_heading {
        margin-bottom: 20px;
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

    @media screen and (max-width: 1050px) and (min-width: 300px) {
        .responsive_width {
            width: auto !important;
        }
        .resp_height{
            margin-top: auto!important;
        }
        .resp_compare{
            height: auto!important;
            text-align: center;
            display: block!important;
            margin-top: 40px;
        }
        .resp_compare1{
            text-align: center;
        }
        .feature_points {
            text-align: center;
            width: 100%!important;
        }
        .feature_points ul{
            height: auto!important;
        }
    }
</style>
<div style="background-color: #f5e9dd;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="padding-top: 18px">
                    <h6><?= isset($page_data[17]->normal_text) ? $page_data[17]->normal_text : 'iPad mini' ?></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div style="padding-top: 13px">
                    <a href="<?= isset($page_data[17]->btn_blue_bg_url) ? $page_data[17]->btn_blue_bg_url : '/home/listing' ?>" style="background: #0071e3;font-size: 12px;line-height: 1.33337;min-width: 23px; padding-left: 11px; padding-right: 11px; padding-top: 4px; padding-bottom: 4px; border-radius: 12px;color: white;float: right"><?= isset($page_data[17]->btn_blue_bg_label) ? $page_data[17]->btn_blue_bg_label : 'Buy' ?></a>
                </div>
            </div>
        </div>
        <hr style="margin-top: 0.5rem">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div style="text-align: center;padding-top: 40px;">
                            <h1 style="font-size: 6.5rem!important;margin-top: 50px;"><?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'iPad mini' ?></h1>
                            <h2><?= isset($page_data[1]->sub_heading) ? $page_data[1]->sub_heading : 'Mini just got mightier.' ?></h2>
                            <div style="padding: 40px 35px;">
                                <p style="font-size: 20px">
                                    <?= isset($page_data[1]->text) ? $page_data[1]->text : 'iPad mini is beloved for its size and capability. And now there are even more reasons to love it.
                                    The A12 Bionic chip with Neural Engine. A 7.9‑inch Retina display with True Tone. And Apple Pencil,
                                    so you can capture your biggest ideas wherever they come to you. It’s still iPad mini. There’s just
                                    more of it than ever.' ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div id="product_main_img_1" style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/hero__d1cahx63kr6u_large.jpg')); ?>);"></div>
        </div>
    </div>
</div>

<div style="background-color: #fff9ef">
    <div class="container-fluid">
        <div class="row" style="padding-top: 174px; padding-bottom: 164px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div>
                            <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : 'Design' ?></h1>
                            <h1 style="font-size: 3rem"><?= isset($page_data[2]->sub_heading) ? $page_data[2]->sub_heading : 'Compact. Portable. Pocketable.' ?></h1>
                            <div style="width: 65%">
                                <p style="font-size: 20px">
                                    <?= isset($page_data[2]->text) ? $page_data[2]->text : 'iPad mini features a thin, light, and portable design that makes it the perfect on-the-go companion.
                                    At 0.66 pound and 6.1 mm thin,1 it’s easy to carry with you in one hand or take out of a pocket or bag
                                    whenever inspiration strikes.' ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div id="product_main_img_2" style="background-image: url(<?= base_url((isset($page_data[2]->bg_img) ? $page_data[2]->bg_img : 'assets/images/ipad_horizontal_silver__c2l1ltmney82_large.png')); ?>);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div style="width: 90%;padding-left: 65px">
                            <h3><?= isset($page_data[2]->sub_heading2) ? $page_data[2]->sub_heading2 : 'Stay connected with fast Wi‑Fi and Gigabit‑class LTE whenever you need it.' ?></h3>
                            <a href="<?= isset($page_data[2]->link1_url) ? $page_data[2]->link1_url : '/home/listing' ?>"><?= isset($page_data[2]->link1_label) ? $page_data[2]->link1_label : 'Learn more about cellular data ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="width: 90%;padding-left: 65px">
                            <h3><?= isset($page_data[2]->sub_heading3) ? $page_data[2]->sub_heading3 : 'Up to 10 hours of battery life means you can go all day on a single charge.' ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f6eff6">
    <div class="container-fluid">
        <div class="row">
            <div id="product_main_img_3" style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div style="margin-top: 120px">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Performance' ?></h1>
                                <h1 style="font-size: 3rem;width: 90%"><?= isset($page_data[3]->sub_heading) ? $page_data[3]->sub_heading : 'Power beyond its size.' ?></h1>
                                <div style="width: 75%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[3]->text) ? $page_data[3]->text : 'The A12 Bionic chip with Neural Engine enables a remarkable level of power and intelligence.
                                        It uses real-time machine learning to recognize patterns, make predictions, and learn from
                                        experience. With all this power, you can run apps like Adobe Photoshop CC,* experience augmented
                                        reality, or play an immersive game with console-level graphics.' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f3fce9">
    <div class="container-fluid">
        <div class="row">
            <div id="product_main_img_4" style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : 'Retina Display' ?></h1>
                                <h1 style="font-size: 3rem;width: 95%"><?= isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : 'It’s not the size of the display. It’s the quality of the pixel.' ?></h1>
                                <div style="width: 81%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[4]->text) ? $page_data[4]->text : 'iPad mini packs over 3 million pixels into a 7.9‑inch display. And we made them all count.
                                        Whether you’re reading in the park or editing video in your home office, the high brightness,
                                        wide color, and antireflective coating offer true-to-life detail and razor-sharp text. And True
                                        Tone dynamically adjusts white balance so images look natural in any light.' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #ebf3f6">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_5" style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : 'Cameras' ?></h1>
                                <h1 style="font-size: 3rem;width: 95%"><?= isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : 'Stay in touch. Shoot in HD. Play in AR.' ?></h1>
                                <div style="width: 81%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[5]->text) ? $page_data[5]->text : 'The front and back cameras in iPad mini let you take vivid photos and cinematic videos.
                                        But the fun doesn’t stop there. Make FaceTime calls with friends, scan documents and mark
                                        them up, or even use augmented reality to plan out your living room decor.' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fefcef">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_6" style="background-image: url(<?= base_url((isset($page_data[6]->bg_img) ? $page_data[6]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : 'Cameras' ?></h1>
                                <h1 style="font-size: 3rem;width: 95%"><?= isset($page_data[6]->sub_heading) ? $page_data[6]->sub_heading : 'Stay in touch. Shoot in HD. Play in AR.' ?></h1>
                                <div style="width: 81%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[6]->text) ? $page_data[6]->text : 'The front and back cameras in iPad mini let you take vivid photos and cinematic videos.
                                        But the fun doesn’t stop there. Make FaceTime calls with friends, scan documents and mark
                                        them up, or even use augmented reality to plan out your living room decor.' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fefcef">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_7" style="background-image: url(<?= base_url((isset($page_data[7]->bg_img) ? $page_data[7]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : 'Apple Pencil' ?></h1>
                                <h1 style="font-size: 3rem;width: 95%"><?= isset($page_data[7]->sub_heading) ? $page_data[7]->sub_heading : 'Pencil meets mini. Magic happens.' ?></h1>
                                <div style="width: 70%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[7]->text) ? $page_data[7]->text : 'Apple Pencil opens up new possibilities for iPad mini.4 Together they turn iPad mini into your
                                        take-anywhere digital notebook. Jot down notes, sign documents, and fill out forms. Or capture
                                        your most creative ideas by drawing, painting, or sketching on the go.' ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #faebe4">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_8" style="background-image: url(<?= base_url((isset($page_data[8]->bg_img) ? $page_data[8]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : 'iPadOS' ?></h1>
                                <h1 style="font-size: 3rem;"><?= isset($page_data[8]->sub_heading) ? $page_data[8]->sub_heading : 'Designed to help you get the most out of iPad.' ?></h1>
                                <div style="width: 70%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[8]->text) ? $page_data[8]->text : 'iPadOS on iPad mini gives you the full iPad experience in the most compact iPad. Use multiple
                                        apps at once, launch your favorite apps from the Dock, and drag and drop files using simple
                                        Multi‑Touch gestures. Access your files all in one place with the Files app. And for tasks
                                        that require more precision, support for trackpad or mouse complements the familiar Multi-Touch
                                        experience of iPad.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '/home/listing' ?>"><?= isset($page_data[8]->link1_label) ? $page_data[8]->link1_label : 'See what’s new in iPadOS ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fef6f3">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_9" style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'Apps' ?></h1>
                                <h1 style="font-size: 3rem;"><?= isset($page_data[9]->sub_heading) ? $page_data[9]->sub_heading : 'Over a million ways to use iPad mini.' ?></h1>
                                <div style="width: 80%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[9]->text) ? $page_data[9]->text : 'iPad mini comes with powerful Apple-designed apps, like Photos, Maps, Messages, Apple News, Mail,
                                        and Safari. And with over a million iPad apps on the App Store, there’s an app for anything you
                                        want to do. Edit a video, check your social media, sketch an idea, and join a battle royale with friends.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '/home/listing' ?>"><?= isset($page_data[9]->link1_label) ? $page_data[9]->link1_label : 'Discover apps for iPad in the App Store ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #edfaff">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_10" style="background-image: url(<?= base_url((isset($page_data[10]->bg_img) ? $page_data[10]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container" style="margin: 120px 0">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div style="margin: 30px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : 'iCloud' ?></h1>
                                <h1 style="font-size: 3rem;"><?= isset($page_data[10]->sub_heading) ? $page_data[10]->sub_heading : 'The best place for all your photos, files, and more.' ?></h1>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div style="width: 75%">
                                <p style="font-size: 20px">
                                    <?= isset($page_data[10]->text) ? $page_data[10]->text : 'iCloud keeps things like your photos, files, and notes safe, current, and conveniently available
                                    on all your devices.5 And the Files app lets you manage all your files — in iCloud Drive and on
                                    your iPad mini — in one central location.' ?>
                                </p>
                                <a href="<?= isset($page_data[10]->link1_url) ? $page_data[10]->link1_url : '/home/listing' ?>"><?= isset($page_data[10]->link1_label) ? $page_data[10]->link1_label : 'Learn more about iCloud ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #eef7e6">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_11" style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container" style="margin-top: 120px;margin-bottom: 120px;">
                    <div class="row">
                        <div class="col-md-7">
                            <div style="margin-top: 475px" class="resp_height">
                                <h3><?= isset($page_data[11]->sub_heading2) ? $page_data[11]->sub_heading2 : 'At Apple, we believe privacy is a fundamental human right.' ?></h3>
                                <a href="<?= isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : '/home/listing' ?>"><?= isset($page_data[11]->link2_label) ? $page_data[11]->link2_label : 'Learn more about Apple’s approach to privacy ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div style="margin: 30px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : 'Privacy and Security' ?></h1>
                                <h1 style="font-size: 3rem;"><?= isset($page_data[11]->sub_heading) ? $page_data[11]->sub_heading : 'Your data belongs to you. And only you.' ?></h1>
                                <div style="width: 80%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[11]->text) ? $page_data[11]->text : 'Like every Apple product, iPad mini was designed with your privacy and security in mind.
                                        Touch ID makes unlocking your iPad mini simple and secure. And you can make purchases
                                        conveniently and safely with Apple Pay. Just place your finger on the Touch ID sensor
                                        and you’re good to go.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '/home/listing' ?>"><?= isset($page_data[11]->link1_label) ? $page_data[11]->link1_label : 'Learn more about iCloud ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fefcef">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_12" style="background-image: url(<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div style="margin: 120px 0">
                                <h1 style="color: #888;font-size: 3rem"><?= isset($page_data[12]->main_heading) ? $page_data[12]->main_heading : 'Accessibility' ?></h1>
                                <h1 style="font-size: 3rem;width: 95%"><?= isset($page_data[12]->sub_heading) ? $page_data[12]->sub_heading : 'Designed to empower everyone.' ?></h1>
                                <div style="width: 80%">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[12]->text) ? $page_data[12]->text : 'We believe technology is most powerful when everyone can use it. That’s why iPad mini comes
                                        with accessibility features that support vision, interaction, hearing, and learning needs.
                                        Like VoiceOver, which tells you what’s happening on your screen. Switch Control, which lets
                                        you interact with iPad mini without touching it. And Voice Control, which lets you control
                                        your iPad with just your voice.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[12]->link1_url) ? $page_data[12]->link1_url : '/home/listing' ?>"><?= isset($page_data[12]->link1_label) ? $page_data[12]->link1_label : 'Explore all accessibility features on iPad ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fff">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_13" style="background-image: url(<?= base_url((isset($page_data[13]->bg_img) ? $page_data[13]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div style="margin: 120px 0;text-align: center">
                                <h1 style="font-size: 3rem;"><?= isset($page_data[13]->main_heading) ? $page_data[13]->main_heading : 'Apple Pencil' ?></h1>
                                <div style="padding: 20px 50px">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[13]->sub_heading) ? $page_data[13]->sub_heading : 'Take unforgettable notes, mark up documents and photos, or draw and create with ease.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[13]->link1_url) ? $page_data[13]->link1_url : '/home/listing' ?>"><?= isset($page_data[13]->link1_label) ? $page_data[13]->link1_label : 'Buy ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #edfaff">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_14" style="background-image: url(<?= base_url((isset($page_data[14]->bg_img) ? $page_data[14]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div style="margin: 120px 0;text-align: center">
                                <h1 style="font-size: 3rem;"><?= isset($page_data[14]->main_heading) ? $page_data[14]->main_heading : 'Accessories' ?></h1>
                                <div style="padding: 20px 50px">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[14]->sub_heading) ? $page_data[14]->sub_heading : 'Explore cases, headphones, speakers, and more.' ?>
                                    </p>
                                    <a href="<?= isset($page_data[14]->link1_url) ? $page_data[14]->link1_url : '/home/listing' ?>"><?= isset($page_data[14]->link1_label) ? $page_data[14]->link1_label : 'Shop iPad Accessories ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fff">
    <div class="container-fluid">
        <div class="row">
            <div class="product_main_img_15" style="background-image: url(<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/ipad_pro_hero__c60u09fxbrsm_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div style="margin: 120px 0;text-align: center">
                                <h1 style="font-size: 3rem;"><?= isset($page_data[15]->main_heading) ? $page_data[15]->main_heading : 'Get up to $480 toward a new iPad.' ?></h1>
                                <div style="padding: 20px 20px">
                                    <p style="font-size: 20px">
                                        <?= isset($page_data[15]->sub_heading) ? $page_data[15]->sub_heading : 'With Apple Trade In, just give us your eligible iPad and get credit for a new one. It’s good for you and the planet.**' ?>
                                    </p>
                                    <a href="<?= isset($page_data[15]->link1_url) ? $page_data[15]->link1_url : '/home/listing' ?>"><?= isset($page_data[15]->link1_label) ? $page_data[15]->link1_label : 'Find your trade‑in value ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #fafafa">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="compare_models">
                    <div class="compare_heading">
                        <h1 style="margin-bottom: 30px"><?= isset($page_data[16]->main_heading) ? $page_data[16]->main_heading : 'Compare iPad models' ?></h1>
                        <a href="<?= isset($page_data[16]->link1_url) ? $page_data[16]->link1_url : '/home/listing' ?>"><?= isset($page_data[16]->link1_label) ? $page_data[16]->link1_label : 'Find the right iPad for you ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                    <div style="width: 1000px;margin: 0 auto" class="responsive_width">
                        <div class="row">
                            <div class="col-md-3">
                                <div style="height: 220px;vertical-align: bottom; display: table-cell;" class="resp_compare">
                                    <img src="<?= base_url((isset($page_data[16]->image1) ? $page_data[16]->image1 : 'assets/images/compare_ipad_pro__dt5x47gpupea_large.png')); ?>" style="vertical-align: bottom" />
                                </div>
                                <div class="resp_compare1">
                                    <h5 style="margin-top: 20px"><?= isset($page_data[16]->title1) ? $page_data[16]->title1 : 'iPad Pro' ?></h5>
                                    <p style="font-size: 15px"><?= isset($page_data[16]->sub_text1) ? $page_data[16]->sub_text1 : 'Starting at $799' ?></p>
                                </div>
                                <div class="feature_points">
                                    <ul>
                                        <?php
                                        if(isset($page_data[16])){
                                        if ($page_data[16]->features1 != '') {
                                            $features1 = explode(',', $page_data[16]->features1);
                                        ?>
                                            <?php foreach ($features1 as $feature) { ?>
                                                <li><?= $feature ?></li>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <li>12.9” and 11” Liquid Retina display with ProMotion</li>
                                            <li>A12Z Bionic chip</li>
                                            <li>Pro cameras and LiDAR Scanner</li>
                                            <li>Face ID</li>
                                            <li>Up to 1TB storage</li>
                                            <li>Support for Apple Pencil(2nd generation)</li>
                                            <li>Support for Magic Keyboard and Smart Keyboard Folio</li>
                                        <?php }
                                        }
                                        else{
                                            ?>
                                            <li>12.9” and 11” Liquid Retina display with ProMotion</li>
                                            <li>A12Z Bionic chip</li>
                                            <li>Pro cameras and LiDAR Scanner</li>
                                            <li>Face ID</li>
                                            <li>Up to 1TB storage</li>
                                            <li>Support for Apple Pencil(2nd generation)</li>
                                            <li>Support for Magic Keyboard and Smart Keyboard Folio</li>
                                        <?php
                                        } ?>
                                    </ul>
                                    <p>
                                        <a href="<?= isset($page_data[16]->button1_url) ? $page_data[16]->button1_url : '/home/listing' ?>" style="background-color: #0071e3;padding: 4px 17px;border-radius: 15px;color: white;font-size: 14px"><?= isset($page_data[16]->button1_label) ? $page_data[16]->button1_label : 'Buy ' ?></a>
                                    </p>
                                    <a href="<?= isset($page_data[16]->link1_url) ? $page_data[16]->link1_url : '/home/listing' ?>"><?= isset($page_data[16]->link1_label) ? $page_data[16]->link1_label : 'Learn more ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 0 20px">
                                    <div style="height: 220px;vertical-align: bottom; display: table-cell;" class="resp_compare">
                                        <img src="<?= base_url((isset($page_data[16]->image2) ? $page_data[16]->image2 : 'assets/images/compare_ipad_air__deo1v0c88iaa_large.png')); ?>" style="vertical-align: bottom" />
                                    </div>
                                    <div class="resp_compare1">
                                        <h5 style="margin-top: 20px"><?= isset($page_data[16]->title2) ? $page_data[16]->title2 : 'iPad Air' ?></h5>
                                        <p style="font-size: 15px"><?= isset($page_data[16]->sub_text2) ? $page_data[16]->sub_text2 : 'Starting at $499' ?></p>
                                    </div>
                                    <div class="feature_points">
                                        <ul>
                                            <?php 
                                            if(isset($page_data[16])){
                                            if ($page_data[16]->features2 != '') {
                                                $features2 = explode(',', $page_data[16]->features2);
                                            ?>
                                                <?php foreach ($features2 as $feature) { ?>
                                                    <li><?= $feature ?></li>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <li>10.5” Retina display</li>
                                                <li>A12 Bionic chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 256GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                                <li>Support for Smart Keyboard</li>
                                            <?php }
                                            }else { ?>
                                                <li>10.5” Retina display</li>
                                                <li>A12 Bionic chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 256GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                                <li>Support for Smart Keyboard</li>
                                            <?php }
                                             ?>
                                        </ul>
                                        <p>
                                            <a href="<?= isset($page_data[16]->button2_url) ? $page_data[16]->button2_url : '/home/listing' ?>" style="background-color: #0071e3;padding: 4px 17px;border-radius: 15px;color: white;font-size: 14px"><?= isset($page_data[16]->button2_label) ? $page_data[16]->button2_label : 'Buy ' ?></a>
                                        </p>
                                        <a href="<?= isset($page_data[16]->link2_url) ? $page_data[16]->link2_url : '/home/listing' ?>"><?= isset($page_data[16]->link2_label) ? $page_data[16]->link2_label : 'Learn more ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 0 20px">
                                    <div style="height: 220px;vertical-align: bottom; display: table-cell;" class="resp_compare">
                                        <img src="<?= base_url((isset($page_data[16]->image3) ? $page_data[16]->image3 : 'assets/images/compare_ipad__gt1civqvilei_large.png')); ?>" style="vertical-align: bottom" />
                                    </div>
                                    <div class="resp_compare1">
                                        <h5 style="margin-top: 20px"><?= isset($page_data[16]->title3) ? $page_data[16]->title3 : 'iPad Pro' ?></h5>
                                        <p style="font-size: 15px"><?= isset($page_data[16]->sub_text3) ? $page_data[16]->sub_text3 : 'Starting at $799' ?></p>
                                    </div>
                                    <div class="feature_points">
                                        <ul>
                                            <?php 
                                            if(isset($page_data[16])){
                                            if ($page_data[16]->features3 != '') {
                                                $features3 = explode(',', $page_data[16]->features3);
                                            ?>
                                                <?php foreach ($features3 as $feature) { ?>
                                                    <li><?= $feature ?></li>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <li>10.2” Retina display</li>
                                                <li>A10 Fusion chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 128GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                                <li>Support for Smart Keyboard</li>
                                            <?php }
                                        } else { ?>
                                                <li>10.2” Retina display</li>
                                                <li>A10 Fusion chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 128GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                                <li>Support for Smart Keyboard</li>
                                            <?php } ?>
                                        </ul>
                                        <p>
                                            <a href="<?= isset($page_data[16]->button3_url) ? $page_data[16]->button3_url : '/home/listing' ?>" style="background-color: #0071e3;padding: 4px 17px;border-radius: 15px;color: white;font-size: 14px"><?= isset($page_data[16]->button3_label) ? $page_data[16]->button3_label : 'Buy ' ?></a>
                                        </p>
                                        <a href="<?= isset($page_data[16]->link3_url) ? $page_data[16]->link3_url : '/home/listing' ?>"><?= isset($page_data[16]->link3_label) ? $page_data[16]->link3_label : 'Learn more ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div style="padding: 0 20px">
                                    <div style="height: 220px;vertical-align: bottom; display: table-cell;" class="resp_compare">
                                        <img src="<?= base_url((isset($page_data[16]->image4) ? $page_data[16]->image4 : 'assets/images/compare_ipad_mini__fo3g5w569h6y_large.png')); ?>" style="vertical-align: bottom" />
                                    </div>
                                    <div class="resp_compare1">
                                        <h5 style="margin-top: 20px"><?= isset($page_data[16]->title4) ? $page_data[16]->title4 : 'iPad Pro' ?></h5>
                                        <p style="font-size: 15px"><?= isset($page_data[16]->sub_text3) ? $page_data[16]->sub_text3 : 'Starting at $799' ?></p>
                                    </div>
                                    <div class="feature_points">
                                        <ul>
                                            <?php
                                             if(isset($page_data[16])){
                                            if ($page_data[16]->features4 != '') {
                                                $features4 = explode(',', $page_data[16]->features4);
                                            ?>
                                                <?php foreach ($features4 as $feature) { ?>
                                                    <li><?= $feature ?></li>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <li>7.9” Retina display</li>
                                                <li>A12 Bionic chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 256GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                            <?php } 
                                            } else { ?>
                                                <li>7.9” Retina display</li>
                                                <li>A12 Bionic chip</li>
                                                <li>Advanced cameras</li>
                                                <li>Touch ID</li>
                                                <li>Up to 256GB storage</li>
                                                <li>Support for Apple Pencil(1st generation)</li>
                                            <?php } ?>
                                            
                                        </ul>
                                        <p>
                                            <a href="<?= isset($page_data[16]->button4_url) ? $page_data[16]->button4_url : '/home/listing' ?>" style="background-color: #0071e3;padding: 4px 17px;border-radius: 15px;color: white;font-size: 14px"><?= isset($page_data[16]->button4_label) ? $page_data[16]->button4_label : 'Buy ' ?></a>
                                        </p>
                                        <a href="<?= isset($page_data[16]->link4_url) ? $page_data[16]->link4_url : '/home/listing' ?>"><?= isset($page_data[16]->link4_label) ? $page_data[16]->link4_label : 'Learn more ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
