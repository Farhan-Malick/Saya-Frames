<style>
.trackpad_bg_1 {
    background-repeat: no-repeat;
    background-position-x: 600px;
    background-color: white;
    padding: 42px 50px;
}

.trackpad_bg_2 {
    background-repeat: no-repeat;
    height: 950px;
    background-position: bottom center;
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px
}

.privacy_bg_1 {
    background-color: white;
    padding: 42px 50px;
    background-repeat: no-repeat;
    background-position-x: 600px;
}

.privacy_bg_2 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 840px;
    background-position: bottom center;
}

.privacy_bg_3 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 840px;
    background-position: bottom center;
}

.update_ipados {
    background-color: white;
    padding: 80px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 690px;
    color: white;
    background-position: bottom center;
}

.ios_13 {
    background-image: url(<?= base_url('assets/images/ios13_iphone__0aqn9v2esj6u_large.jpg');
    ?>);
    background-repeat: no-repeat;
    height: 750px;
    color: white;
    background-position: bottom center;
}

.update_ipados a {
    color: white;
    font-size: 20px !important;
}

.update_ipados a:hover {
    color: white
}

.update_ipados_3 {
    background-color: white;
    height: 690px;
}

.slide_over_bg_1 {
    background-color: white;
    padding: 42px 50px;
    background-repeat: no-repeat;
}

.slide_over_bg_2 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 950px;
    background-position: bottom center;
}

.widgets {
    background-color: white;
    padding: 42px 50px;
    background-repeat: no-repeat;
    height: 1000px;
    background-position: bottom center;
}

.apple_pencil {
    background-color: white;
    padding: 42px 50px;
    background-repeat: no-repeat;
    height: 1000px;
    background-position: bottom center;
}

.apple_pencil_2 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 845px;
    background-position: center;
}

.apple_pencil_3 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 845px;
    background-position: center;
}

.text_editing_2 {
    height: 845px;
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    vertical-align: middle
}

.text_editing_3 {
    height: 845px;
}

.keyboard {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 1000px;
    background-position: bottom center;
}

.keyboard_2 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 845px;
    background-position: center;
}

.keyboard_3 {
    background-color: white;
    padding: 42px 50px;
    margin-top: 10px;
    background-repeat: no-repeat;
    height: 845px;
    background-position: center;
}

.even_more {
    background-repeat: no-repeat;
    height: 550px;
    background-position: center;
}

.ipados_devices {
    background-repeat: no-repeat;
    height: 610px;
    background-position: center;
    padding: 70px 0
}

@media screen and (max-width: 850px) and (min-width: 750px) {
    .responsive_big_heading {
        font-size: 7rem !important;
        margin-bottom: 0 !important;
    }

    .row {
        margin: auto;
    }

}

@media screen and (max-width: 1100px) and (min-width: 750px) {
    .privacy_bg_3 h1 {
        font-size: 2rem !important;
    }
}

@media screen and (max-width: 750px) and (min-width: 300px) {
    .responsive_padding {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .responsive_big_heading {
        font-size: 6rem !important;
        margin-bottom: 0 !important;
    }

    .responsive_marigins {
        margin-bottom: 100px !important;
        margin-top: 100px !important;
    }

    .responsive_marigins1 {
        margin-left: 0 !important;
    }

    .resp_width {
        width: 100% !important;
    }
}
</style>
<div style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="padding-top: 18px">
                    <h6><?= isset($page_data[56]->normal_text) ? $page_data[56]->normal_text : 'iPadOS' ?></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div style="padding-top: 13px">
                    <a href="<?= isset($page_data[56]->btn_blue_bg_url) ? $page_data[56]->btn_blue_bg_url : '/home/listing' ?>"
                        style="background: #0071e3;font-size: 12px;line-height: 1.33337;min-width: 23px; padding-left: 11px; padding-right: 11px; padding-top: 4px; padding-bottom: 4px; border-radius: 12px;color: white;float: right"><?= isset($page_data[56]->btn_blue_bg_label) ? $page_data[56]->btn_blue_bg_label : 'Buy' ?></a>
                </div>
            </div>
        </div>
        <hr style="margin-top: 0.5rem">
    </div>
    <div class="container-fluid">
        <div class="row responsive_big_heading" style="margin-bottom: 134px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div style="text-align: center">
                    <h1 class="responsive_big_heading"
                        style="color:#f97c0d;font-size: 12rem;margin-top: 100px;margin-bottom: 100px">
                        <?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'iPadOS' ?></h1>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row responsive_marigins" style="margin-bottom: 170px;margin-top: 134px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div style="text-align: center;padding: 0 70px;" class="responsive_padding">
                    <h1 style="font-size: 4.5rem!important;margin-top: 50px;margin-bottom: 30px">
                        <?= isset($page_data[2]->section_heading) ? $page_data[2]->section_heading : 'Incredibly capable. Distinctly iPad.' ?>
                    </h1>
                    <p style="font-size: 24px">
                        <?= isset($page_data[2]->section_text) ? $page_data[2]->section_text : 'iPadOS is the operating system specifically designed to take full advantage of everything that makes iPad iPad. A large
                        Multi‑Touch display. Fast performance. Powerful apps. And now with trackpad support, it opens up entirely new ways to
                        interact with iPad.' ?>

                    </p>
                    <a href="<?= isset($page_data[2]->link1_url) ? $page_data[2]->link1_url : '/home/listing' ?>"><?= isset($page_data[2]->link1_label) ? $page_data[2]->link1_label : 'Watch the filmabout iPadOS ' ?><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<div style="background-color: #f2f2f2;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #00a99d;font-size: 3.7rem">
                        <?= isset($page_data[3]->section_heading) ? $page_data[3]->section_heading : 'Trackpad Support' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 95%">
                        <?= isset($page_data[3]->section_text) ? $page_data[3]->section_text : 'Trackpad support opens up new ways to use iPad. The reimagined cursor experience has been designed
                        specifically to work in a touch‑first environment.' ?>
                    </p>
                    <a href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '/home/listing' ?>"><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Watch the film ' ?><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="trackpad_bg_1"
                    style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/ipados_cursor__dzcrjm0y1com_large.png')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div>
                                <h6 style="color: #00a99d">
                                    <?= isset($page_data[4]->heading) ? $page_data[4]->heading : 'Trackpad Support' ?>
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="float: right;">
                                <i style="color: #00a99d" class="fas fa-plus-circle fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6" style="margin: 150px 0">
                                    <h1><?= isset($page_data[4]->text) ? $page_data[4]->text : 'Trackpad support opens up new ways to use iPad.' ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-6" style="padding-right: 5px; padding-left: 10px;">
                        <div class="trackpad_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #00a99d;margin-bottom: 15px">
                                <?= isset($page_data[5]->heading) ? $page_data[5]->heading : 'Adapts to content' ?></h5>
                            <h5>
                                <?= isset($page_data[5]->text) ? $page_data[5]->text : 'The cursor elegantly adapts to content such as buttons, app icons, and text. So you always
                                have the right tool at the right moment.' ?>

                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-right: 10px; padding-left: 5px;">
                        <div class="trackpad_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[6]->bg_img) ? $page_data[6]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #00a99d;margin-bottom: 15px">
                                <?= isset($page_data[6]->heading) ? $page_data[6]->heading : 'Trackpad gestures' ?></h5>
                            <h5>
                                <?= isset($page_data[6]->text) ? $page_data[6]->text : 'Intuitive Multi‑Touch gestures, like using three fingers to switch between spaces, pinch to zoom, and swipe
                                to go home, let you perform useful actions from the trackpad.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #f3663f;font-size: 3.7rem">
                        <?= isset($page_data[7]->section_heading) ? $page_data[7]->section_heading : 'Slide Over and Split View' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 75%">
                        <?= isset($page_data[7]->section_text) ? $page_data[7]->section_text : 'Slide Over and Split View have made working with multiple apps on iPad effortless. Now they can take your
                        workflows to another level by letting you work exactly how you want in even more intuitive ways.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="slide_over_bg_1"
                    style="background-image: url(<?= base_url((isset($page_data[8]->bg_img) ? $page_data[8]->bg_img : 'assets/images/ipados_cursor__dzcrjm0y1com_large.png')); ?>)">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div>
                                <h6 style="color: #f3663f">
                                    <?= isset($page_data[8]->heading) ? $page_data[8]->heading : 'Multiple apps in Slide Over' ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-7"></div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12" style="margin: 150px 0">
                                    <h1 style="width: 58%">
                                        <?= isset($page_data[8]->text) ? $page_data[8]->text : 'Keep all of your favorite apps at the ready in Slide Over.' ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-6" style="padding-right: 5px; padding-left: 10px;">
                        <div class="slide_over_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #f3663f;margin-bottom: 15px">
                                <?= isset($page_data[9]->heading) ? $page_data[9]->heading : 'Apps in multiple spaces' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[9]->text) ? $page_data[9]->text : 'Work with the same app across multiple spaces…' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-right: 10px; padding-left: 5px;">
                        <div class="slide_over_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[10]->bg_img) ? $page_data[10]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #f3663f;margin-bottom: 15px">
                                <?= isset($page_data[10]->heading) ? $page_data[10]->heading : 'App Exposé' ?></h5>
                            <h5>
                                <?= isset($page_data[10]->text) ? $page_data[10]->text : '…and see all the spaces you have open with a single app just by tapping the icon in the Dock.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #ed3146;font-size: 3.7rem">
                        <?= isset($page_data[11]->section_heading) ? $page_data[11]->section_heading : 'New Home Screen' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 70%">
                        <?= isset($page_data[11]->section_text) ? $page_data[11]->section_text : 'The Home screen has been redesigned to take advantage of the large iPad display. A refined layout lets you
                        see more apps. And you can pin useful widgets on the front page.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="widgets"
                    style="background-image: url(<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : 'assets/images/home_screen__csgoovmw84cy_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 45%">
                                <h6 style="color: #ed3146">
                                    <?= isset($page_data[12]->heading) ? $page_data[12]->heading : 'Pinned widgets' ?>
                                </h6>
                                <h5><?= isset($page_data[12]->text) ? $page_data[12]->text : 'Pin your favorite Today View widgets on the Home screen and see them at a glance.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #a00baa;font-size: 3.7rem">
                        <?= isset($page_data[13]->section_heading) ? $page_data[13]->section_heading : 'Apple Pencil' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 75%">
                        <?= isset($page_data[13]->section_text) ? $page_data[13]->section_text : 'The precision and versatility of Apple Pencil make it an amazing tool for drawing, note-taking, and marking things up.
                        Now, thanks to even lower latency, writing with Apple Pencil feels even more like writing on paper. And with entirely
                        new ways to use it, you’ll only have to put it down when you want to.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="apple_pencil"
                    style="background-image: url(<?= base_url((isset($page_data[14]->bg_img) ? $page_data[14]->bg_img : 'assets/images/tool_palette__geo8hh6f28uq_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 40%">
                                <h6 style="color: #a00baa">
                                    <?= isset($page_data[14]->heading) ? $page_data[14]->heading : 'Tool palette' ?>
                                </h6>
                                <h5><?= isset($page_data[14]->text) ? $page_data[14]->text : 'Access a new set of tools in a redesigned palette you can shrink or move anywhere.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-4" style="padding-right: 5px; padding-left: 10px;">
                        <div class="apple_pencil_2"
                            style="background-image: url(<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/full_page_screenshots__dh8kqmv5ljsm_large.jpg')); ?>);">
                            <h5 style="color: #a00baa;margin-bottom: 15px">
                                <?= isset($page_data[15]->heading) ? $page_data[15]->heading : 'Full-page markup' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[15]->text) ? $page_data[15]->text : 'Capture a screenshot of an entire web page, document, or email and mark it up.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-8" style="padding-right: 10px; padding-left: 5px;">
                        <div class="apple_pencil_3"
                            style="background-image: url(<?= base_url((isset($page_data[16]->bg_img) ? $page_data[16]->bg_img : 'assets/images/full_page_screenshots__dh8kqmv5ljsm_large.jpg')); ?>);">
                            <h5 style="color: #a00baa;margin-bottom: 15px">
                                <?= isset($page_data[16]->heading) ? $page_data[16]->heading : 'Sidecar in macOS Catalina' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[16]->text) ? $page_data[16]->text : 'Extend your workspace with your iPad, Mac, and Apple Pencil.' ?>
                            </h5>
                            <a
                                href="<?= isset($page_data[16]->link1_url) ? $page_data[16]->link1_url : '/home/listing' ?>"><?= isset($page_data[16]->link1_label) ? $page_data[16]->link1_label : 'Learn more about macOS Catalina ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #099e79;font-size: 3.7rem">
                        <?= isset($page_data[17]->section_heading) ? $page_data[17]->section_heading : 'Text Editing' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 80%">
                        <?= isset($page_data[17]->section_text) ? $page_data[17]->section_text : 'Part of the magic of iPad is that almost anything can be done with Multi‑Touch using simple, intuitive gestures.
                        And now iPadOS makes it easier and faster to select and edit text using just your fingers.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="trackpad_bg_1"
                    style="background-image: url(<?= base_url((isset($page_data[18]->bg_img) ? $page_data[18]->bg_img : 'assets/images/ipados_cursor__dzcrjm0y1com_large.png')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div>
                                <h6 style="color: #099e79">
                                    <?= isset($page_data[18]->heading) ? $page_data[18]->heading : 'Editing gestures' ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8" style="margin: 150px 0">
                                    <h1 style="width: 90%">
                                        <?= isset($page_data[18]->text) ? $page_data[18]->text : 'Copy, paste, undo, and more with simple new gestures.' ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-4" style="padding-right: 5px; padding-left: 10px;">
                        <div class="text_editing_2"
                            style="background-image: url(<?= base_url((isset($page_data[19]->bg_img) ? $page_data[19]->bg_img : '')); ?>);">
                            <h5 style="color: #099e79;margin-bottom: 15px">
                                <?= isset($page_data[19]->heading) ? $page_data[19]->heading : 'Cursor navigation' ?>
                            </h5>
                            <div style="margin: 200px 0">
                                <h1>
                                    <?= isset($page_data[19]->text) ? $page_data[19]->text : 'Pick up the cursor and drag it precisely where you want it.' ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 10px; padding-left: 5px;">
                        <div class="text_editing_2"
                            style="background-image: url(<?= base_url((isset($page_data[20]->bg_img) ? $page_data[20]->bg_img : '')); ?>);">
                            <h5 style="color: #099e79;margin-bottom: 15px">
                                <?= isset($page_data[20]->heading) ? $page_data[20]->heading : 'Improved text selection' ?>
                            </h5>
                            <div style="margin: 200px 0">
                                <h1>
                                    <?= isset($page_data[20]->text) ? $page_data[20]->text : 'Quickly select a block of text by dragging your finger over it.' ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 5px; padding-left: 10px;">
                        <div class="text_editing_2"
                            style="background-image: url(<?= base_url((isset($page_data[21]->bg_img) ? $page_data[21]->bg_img : '')); ?>);">
                            <h5 style="color: #099e79;margin-bottom: 15px">
                                <?= isset($page_data[21]->heading) ? $page_data[21]->heading : 'Intelligent text selection' ?>
                            </h5>
                            <div style="margin: 200px 0">
                                <h1>
                                    <?= isset($page_data[21]->text) ? $page_data[21]->text : 'Select a word with a double tap. A sentence with three taps. Or a whole paragraph with four taps.' ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #e94b21;font-size: 3.7rem">
                        <?= isset($page_data[22]->section_heading) ? $page_data[22]->section_heading : 'Keyboard' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 67%">
                        <?= isset($page_data[22]->section_text) ? $page_data[22]->section_text : 'The onscreen keyboard is always there for responding to email or taking notes in a meeting. You can also use a physical
                        keyboard like the Smart Keyboard if you want one. And with iPadOS, there are more ways to use both however you want.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-6" style="padding-right: 5px; padding-left: 10px;">
                        <div class="keyboard_2"
                            style="background-image: url(<?= base_url((isset($page_data[23]->bg_img) ? $page_data[23]->bg_img : 'assets/images/floating_keyboard__fzpm8mxkxb6m_large.jpg')); ?>);">
                            <h5 style="color: #e94b21;margin-bottom: 15px">
                                <?= isset($page_data[23]->heading) ? $page_data[23]->heading : 'Floating keyboard' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[23]->text) ? $page_data[23]->text : 'Pinch to shrink the QuickType keyboard and move it wherever you want for easy one-handed typing. And more room for your apps.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-right: 10px; padding-left: 5px;">
                        <div class="keyboard_3"
                            style="background-image: url(<?= base_url((isset($page_data[24]->bg_img) ? $page_data[24]->bg_img : 'assets/images/quickpath_typing__e55lywz7a8q6_large.jpg')); ?>);">
                            <h5 style="color: #e94b21;margin-bottom: 15px">
                                <?= isset($page_data[24]->heading) ? $page_data[24]->heading : 'QuickPath typing' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[24]->text) ? $page_data[24]->text : 'Type by swiping from one letter to the next.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="keyboard"
                    style="background-image: url(<?= base_url((isset($page_data[25]->bg_img) ? $page_data[25]->bg_img : 'assets/images/keyboard_shortcuts__b27dsgu3cl6q_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 50%">
                                <h6 style="color: #e94b21">
                                    <?= isset($page_data[25]->heading) ? $page_data[25]->heading : 'Keyboard shortcuts' ?>
                                </h6>
                                <h5><?= isset($page_data[25]->text) ? $page_data[25]->text : 'Navigate the web in Safari and manage your files faster with lots of new keyboard shortcuts for physical keyboards.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #4334b4;font-size: 3.7rem">
                        <?= isset($page_data[26]->section_heading) ? $page_data[26]->section_heading : 'Fonts' ?></h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 77%">
                        <?= isset($page_data[26]->section_text) ? $page_data[26]->section_text : 'iPad is the perfect device for creating beautiful documents and page layouts. And with iPadOS, you can now get
                        great fonts from the App Store to use in your documents.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="keyboard"
                    style="background-image: url(<?= base_url((isset($page_data[27]->bg_img) ? $page_data[27]->bg_img : 'assets/images/keyboard_shortcuts__b27dsgu3cl6q_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 50%">
                                <h6 style="color: #4334b4">
                                    <?= isset($page_data[27]->heading) ? $page_data[27]->heading : 'Font management' ?>
                                </h6>
                                <h5><?= isset($page_data[27]->text) ? $page_data[27]->text : 'Bring out the personality of your projects by installing and managing custom fonts to use in your favorite apps.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #2195ee;font-size: 3.7rem">
                        <?= isset($page_data[28]->section_heading) ? $page_data[28]->section_heading : 'Files' ?></h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 67%">
                        <?= isset($page_data[28]->section_text) ? $page_data[28]->section_text : 'The Files app lets you access and manage your files however you want, all in one convenient place. And
                        iPadOS gives you powerful new ways to view, work on, and share files.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-8" style="padding-right: 5px; padding-left: 10px;">
                        <div class="keyboard_2"
                            style="background-image: url(<?= base_url((isset($page_data[29]->bg_img) ? $page_data[29]->bg_img : 'assets/images/floating_keyboard__fzpm8mxkxb6m_large.jpg')); ?>);">
                            <h5 style="color: #2195ee;margin-bottom: 15px">
                                <?= isset($page_data[29]->heading) ? $page_data[29]->heading : 'Redesigned Files app' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[29]->text) ? $page_data[29]->text : 'Get a more detailed view of your files. And more controls to do what you want with them.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 10px; padding-left: 5px;">
                        <div class="keyboard_3"
                            style="background-image: url(<?= base_url((isset($page_data[30]->bg_img) ? $page_data[30]->bg_img : 'assets/images/quickpath_typing__e55lywz7a8q6_large.jpg')); ?>);">
                            <h5 style="color: #2195ee;margin-bottom: 15px">
                                <?= isset($page_data[30]->heading) ? $page_data[30]->heading : 'iCloud Drive folder sharing' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[30]->text) ? $page_data[30]->text : 'Type by swiping from one letter to the next.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-4" style="padding-right: 5px; padding-left: 10px;">
                        <div class="keyboard_2"
                            style="background-image: url(<?= base_url((isset($page_data[31]->bg_img) ? $page_data[31]->bg_img : 'assets/images/floating_keyboard__fzpm8mxkxb6m_large.jpg')); ?>);">
                            <h5 style="color: #2195ee;margin-bottom: 15px">
                                <?= isset($page_data[31]->heading) ? $page_data[31]->heading : 'File servers' ?></h5>
                            <h5>
                                <?= isset($page_data[31]->text) ? $page_data[31]->text : 'Get to those work files on a server or home PC. Right from the Files app.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-8" style="padding-right: 10px; padding-left: 5px;">
                        <div class="keyboard_3"
                            style="background-image: url(<?= base_url((isset($page_data[32]->bg_img) ? $page_data[32]->bg_img : 'assets/images/quickpath_typing__e55lywz7a8q6_large.jpg')); ?>);">
                            <h5 style="color: #2195ee;margin-bottom: 15px">
                                <?= isset($page_data[32]->heading) ? $page_data[32]->heading : 'External drives' ?></h5>
                            <h5>
                                <?= isset($page_data[32]->text) ? $page_data[32]->text : 'Connect an external hard drive, SD card reader, and, yes, even a USB drive.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #22964b;font-size: 3.7rem">
                        <?= isset($page_data[33]->section_heading) ? $page_data[33]->section_heading : 'Safari' ?></h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 67%">
                        <?= isset($page_data[33]->section_text) ? $page_data[33]->section_text : 'Browsing the internet on iPad is so immersive it’s like holding the web in your hands. And now, powerful
                        new features make Safari on iPadOS a desktop-class browsing experience.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-8" style="padding-right: 5px; padding-left: 10px;">
                        <div class="keyboard_2"
                            style="background-image: url(<?= base_url((isset($page_data[34]->bg_img) ? $page_data[34]->bg_img : 'assets/images/floating_keyboard__fzpm8mxkxb6m_large.jpg')); ?>);">
                            <h5 style="color: #22964b;margin-bottom: 15px">
                                <?= isset($page_data[34]->heading) ? $page_data[34]->heading : 'Desktop-class browsing' ?>
                            </h5>
                            <h5 style="width: 80%">
                                <?= isset($page_data[34]->text) ? $page_data[34]->text : 'Enjoy the desktop version of websites on your iPad so you can use web apps like Google Docs, Squarespace, and WordPress.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 10px; padding-left: 5px;">
                        <div class="keyboard_3"
                            style="background-image: url(<?= base_url((isset($page_data[35]->bg_img) ? $page_data[35]->bg_img : 'assets/images/quickpath_typing__e55lywz7a8q6_large.jpg')); ?>);">
                            <h5 style="color: #22964b;margin-bottom: 15px">
                                <?= isset($page_data[35]->heading) ? $page_data[35]->heading : 'Download Manager' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[35]->text) ? $page_data[35]->text : 'See your active and recent downloads in Safari and access them easily from the new Downloads folder in Files.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #cb225e;font-size: 3.7rem">
                        <?= isset($page_data[36]->section_heading) ? $page_data[36]->section_heading : 'Dark Mode' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 75%">
                        <?= isset($page_data[36]->section_text) ? $page_data[36]->section_text : 'Dark Mode introduces a dramatic new look for iPad. It’s thoughtfully designed to make every element on the
                        screen easier on your eyes and is seamlessly integrated throughout the system. And it’s simple to turn on
                        from Control Center or set to automatically turn on at night.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="keyboard"
                    style="background-image: url(<?= base_url((isset($page_data[37]->bg_img) ? $page_data[37]->bg_img : 'assets/images/keyboard_shortcuts__b27dsgu3cl6q_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 40%">
                                <h6 style="color: #cb225e">
                                    <?= isset($page_data[37]->heading) ? $page_data[37]->heading : 'Gorgeous new look' ?>
                                </h6>
                                <h5>
                                    <?= isset($page_data[37]->text) ? $page_data[37]->text : 'A cool new look that’s easy on the eyes and perfect for low‑light environments.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #0966ca;font-size: 3.7rem">
                        <?= isset($page_data[38]->section_heading) ? $page_data[38]->section_heading : 'Privacy and Security' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 67%">
                        <?= isset($page_data[38]->section_text) ? $page_data[38]->section_text : 'Privacy and security are at the core of everything we do. iPadOS pushes privacy protection even further
                        with new features that help you stay in control of your data while enjoying the personalized experiences you want.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="privacy_bg_1"
                    style="background-image: url(<?= base_url((isset($page_data[39]->bg_img) ? $page_data[39]->bg_img : 'assets/images/ipados_cursor__dzcrjm0y1com_large.png')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div>
                                <h6 style="color: #0966ca">
                                    <?= isset($page_data[39]->heading) ? $page_data[39]->heading : 'Sign in with Apple' ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-8" style="margin: 150px 0">
                                    <h1><?= isset($page_data[39]->text) ? $page_data[39]->text : 'A simple way to sign in to apps and websites that respects your privacy.' ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-8" style="padding-right: 5px; padding-left: 10px;">
                        <div class="privacy_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[40]->bg_img) ? $page_data[40]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #0966ca;margin-bottom: 15px">
                                <?= isset($page_data[40]->heading) ? $page_data[40]->heading : 'HomeKit Secure Video' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[40]->text) ? $page_data[40]->text : 'Introducing camera storage designed around security and privacy.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 10px; padding-left: 5px;">
                        <div class="privacy_bg_3"
                            style="background-image: url(<?= base_url((isset($page_data[41]->bg_img) ? $page_data[41]->bg_img : '')); ?>);">
                            <h5 style="color: #0966ca;margin-bottom: 15px">
                                <?= isset($page_data[41]->heading) ? $page_data[41]->heading : 'Privacy' ?></h5>
                            <div style="margin: 200px 0">
                                <h1 style="font-size: 3rem">
                                    <?= isset($page_data[41]->text) ? $page_data[41]->text : 'We build privacy into everything we do, and iPadOS is no different.' ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #ff3d54;font-size: 3.7rem">
                        <?= isset($page_data[42]->section_heading) ? $page_data[42]->section_heading : 'Photos' ?></h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 78%">
                        <?= isset($page_data[42]->section_text) ? $page_data[42]->section_text : 'With its big, immersive Retina display, iPad is the perfect device for browsing and editing your photos. And it’s powerful enough to handle any photo editing task. iPadOS makes managing and manipulating photos much more efficient by bringing you fast, simple new ways to capture, edit, and browse.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="keyboard"
                    style="background-image: url(<?= base_url((isset($page_data[43]->bg_img) ? $page_data[43]->bg_img : 'assets/images/keyboard_shortcuts__b27dsgu3cl6q_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 40%">
                                <h6 style="color: #ff3d54">
                                    <?= isset($page_data[43]->heading) ? $page_data[43]->heading : 'All-new Photos tab' ?>
                                </h6>
                                <h5><?= isset($page_data[43]->text) ? $page_data[43]->text : 'A new curated view of your best moments from every day, month, and year.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-6" style="padding-right: 5px; padding-left: 10px;">
                        <div class="privacy_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[44]->bg_img) ? $page_data[44]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #ff3d54;margin-bottom: 15px">
                                <?= isset($page_data[44]->heading) ? $page_data[44]->heading : 'Redesigned editing' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[44]->text) ? $page_data[44]->text : 'New tools let you control any adjustment or filter so you can fine‑tune your photos.' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-right: 10px; padding-left: 5px;">
                        <div class="privacy_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[45]->bg_img) ? $page_data[45]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #ff3d54;margin-bottom: 15px">
                                <?= isset($page_data[45]->heading) ? $page_data[45]->heading : 'Powerful video editing' ?>
                            </h5>
                            <h5>
                                <?= isset($page_data[45]->text) ? $page_data[45]->text : 'Nearly every tool and effect you use on your photos can be used on videos, including rotate, crop, and auto enhance.' ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #ef5d1a;font-size: 3.7rem">
                        <?= isset($page_data[46]->section_heading) ? $page_data[46]->section_heading : 'Performance' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 78%">
                        <?= isset($page_data[46]->section_text) ? $page_data[46]->section_text : 'iPad has always been fast and responsive. But with iPadOS, you’ll notice that everything moves a little faster.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="row" style="margin-right: -10px; margin-left: -10px;">
                    <div class="col-md-8" style="padding-right: 5px; padding-left: 10px;">
                        <div class="privacy_bg_2"
                            style="background-image: url(<?= base_url((isset($page_data[47]->bg_img) ? $page_data[47]->bg_img : 'assets/images/trackpad_gestures__ma79hys8eb2a_large.jpg')); ?>);">
                            <h5 style="color: #ef5d1a;margin-bottom: 15px">
                                <?= isset($page_data[47]->heading) ? $page_data[47]->heading : 'Faster unlock' ?></h5>
                            <h5 style="width: 75%">
                                <?= isset($page_data[47]->text) ? $page_data[47]->text : 'iPadOS is even faster than iOS 12. For example, Face ID now unlocks up to 30 percent faster.2' ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-right: 10px; padding-left: 5px;">
                        <div class="privacy_bg_3"
                            style="background-image: url(<?= base_url((isset($page_data[48]->bg_img) ? $page_data[48]->bg_img : '')); ?>);">
                            <h5 style="color: #0966ca;margin-bottom: 15px">
                                <?= isset($page_data[48]->heading) ? $page_data[48]->heading : 'Privacy' ?></h5>
                            <div style="margin: 200px 0">
                                <h1 style="font-size: 3rem">
                                    <?= isset($page_data[48]->text) ? $page_data[48]->text : 'Apps will launch up to 2x faster than before and be smaller in download size.' ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="responsive_marigins1" style="padding-top: 121px;margin-left: 48px;margin-bottom: 39px;">
                    <h1 style="color: #9f449f;font-size: 3.7rem">
                        <?= isset($page_data[49]->section_heading) ? $page_data[49]->section_heading : 'Augmented Reality' ?>
                    </h1>
                    <p style="font-size: 20px;margin-top: 20px;width: 75%">
                        <?= isset($page_data[49]->section_text) ? $page_data[49]->section_text : 'Augmented reality combines digital objects and information with the real world to create entirely new ones.
                        iPad, with its front and back cameras, fast performance, large vivid display, and built-in motion sensors,
                        is the perfect device for experiencing them.' ?>
                    </p>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="keyboard"
                    style="background-image: url(<?= base_url((isset($page_data[50]->bg_img) ? $page_data[50]->bg_img : 'assets/images/keyboard_shortcuts__b27dsgu3cl6q_large.jpg')); ?>);">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 50%">
                                <h6 style="color: #9f449f">
                                    <?= isset($page_data[50]->heading) ? $page_data[50]->heading : 'ARKit 3.5' ?></h6>
                                <h5><?= isset($page_data[50]->text) ? $page_data[50]->text : 'AR apps can now take full advantage of the LiDAR Scanner in the new iPad Pro to create even more realistic and immersive experiences.' ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding: 0">
                <div style="padding-top: 121px;margin-bottom: 39px;text-align: center">
                    <h1 style="color: black;font-size: 3.7rem">
                        <?= isset($page_data[51]->heading) ? $page_data[51]->heading : 'And even more.' ?></h1>
                    <div class="even_more"
                        style="background-image: url(<?= base_url((isset($page_data[51]->bg_img) ? $page_data[51]->bg_img : 'assets/images/and_more__gexlf40a296y_large.jpg')); ?>);">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="padding: 0">
                <div class="ipados_devices"
                    style="background-image: url(<?= base_url((isset($page_data[52]->bg_img) ? $page_data[52]->bg_img : 'assets/images/compatible_devices_expanded__fvbi2af72h6q_large.jpg')); ?>);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div style="padding-left: 50px;color: white">
                                    <h1><?= isset($page_data[52]->heading) ? $page_data[52]->heading : 'iPadOS is compatible with these devices.' ?>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="padding-left: 50px;color: white;width: 70%;">
                                    <?= isset($page_data[52]->left_side_text) ? $page_data[52]->left_side_text : '<h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>
                                    <h5>iPad Pro 11-inch (2nd generation)</h5>
                                    <h5>iPad Pro 12.9-inch (4th generation)</h5>' ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding-right: 5px; padding-left: 10px;">
                <div class="update_ipados"
                    style="background-image: url(<?= base_url((isset($page_data[53]->bg_img) ? $page_data[53]->bg_img : 'assets/images/ipados_background__bge3yhhzbvqq_large.jpg')); ?>);">
                    <img src="<?= base_url((isset($page_data[53]->icon) ? $page_data[53]->icon : 'assets/images/ipados_icon__cgrjiy2xzrv6_large.png')); ?>"
                        style="margin-bottom: 45%">
                    <h1><?= isset($page_data[53]->heading) ? $page_data[53]->heading : 'See how to update to iPadOS.' ?>
                    </h1>
                    <a href="<?= isset($page_data[53]->link_url) ? $page_data[53]->link_url : '/home/listing' ?>"><?= isset($page_data[53]->link_label) ? $page_data[53]->link_label : 'Learn more ' ?><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-6" style="padding-right: 10px; padding-left: 5px;">
                <div class="update_ipados"
                    style="background-image: url(<?= base_url((isset($page_data[54]->bg_img) ? $page_data[54]->bg_img : 'assets/images/ipados_background__bge3yhhzbvqq_large.jpg')); ?>);">
                    <img src="<?= base_url((isset($page_data[54]->icon) ? $page_data[54]->icon : 'assets/images/ipados_icon__cgrjiy2xzrv6_large.png')); ?>"
                        style="margin-bottom: 45%">
                    <h1><?= isset($page_data[54]->heading) ? $page_data[54]->heading : 'Developers will love iPadOS, too.' ?>
                    </h1>
                    <a href="<?= isset($page_data[54]->link_url) ? $page_data[54]->link_url : '/home/listing' ?>"><?= isset($page_data[54]->link_label) ? $page_data[54]->link_label : 'Learn more about developing for iPadOS ' ?><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-md-12" style="padding-right: 10px; padding-left: 10px;">
                <div class="ios_13" style="background-color: white;padding: 42px 50px;">
                    <div class="row" style="margin-right: -10px; margin-left: -10px;margin-bottom: 30px">
                        <div class="col-md-12">
                            <div style="width: 50%;padding-top: 500px;" class="resp_width">
                                <h1><?= isset($page_data[55]->heading) ? $page_data[55]->heading : 'iOS 13' ?></h1>
                                <h5 style="margin-bottom: 20px">
                                    <?= isset($page_data[55]->text) ? $page_data[55]->text : 'A whole new look. On a whole new level.' ?>
                                </h5>
                                <a
                                    href="<?= isset($page_data[55]->link_url) ? $page_data[55]->link_url : '/home/listing' ?>"><?= isset($page_data[55]->link_label) ? $page_data[55]->link_label : 'See what\'s new ' ?><i
                                        class="fa fa-angle-right" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
