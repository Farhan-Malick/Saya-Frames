<style>
a {
    padding: 10px;
}

#product_main_img_1 {
    width: 100%;
    /* background-size: 2560px 1620px; */
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    /* padding-bottom: 1087px; */
    padding-bottom: 160px;
    padding-top: 100px;
    color: white;
    text-align: center
}

#apple_tv_feature {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 560px;
    width: 100%;
    border-top: 3px solid red;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

#apple_tv_feature_2 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 650px;
    width: 100%;
    border-top: 3px solid red;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

#apple_tv_feature_15 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 650px;
    width: 100%;
    border-top: 3px solid #806fff;
    background-color: white;
    padding: 54px 40px;
    margin-bottom: 22px;
}

#apple_tv_feature_6 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 700px;
    width: 100%;
    border-top: 3px solid red;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

#apple_tv_feature_10 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 700px;
    width: 100%;
    border-top: 3px solid #806fff;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

.violator {
    font-size: 17px;
    line-height: 1.47059;
    font-weight: 400;
    letter-spacing: -.022em;
    font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    font-family: "SF Pro Text", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    color: #ef5602;
    background: transparent;
    border: 1px solid #ef5602;
    border-radius: 4px;
    display: inline-block;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 4px;
    padding-bottom: 4px;
    white-space: nowrap;
    margin-bottom: 20px
}

#apple_tv_feature_5 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 600px;
    width: 100%;
    border-top: 3px solid red;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

#apple_tv_feature_8 {
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #0c0f0b;
    background-position: center;
    height: 620px;
    width: 100%;
    border-top: 3px solid #806fff;
    background-color: white;
    padding: 54px 40px;
    margin-bottom: 22px;
}

#apple_tv_feature_3 {
    background-size: cover;
    border-top: 3px solid red;
    background-color: white;
    padding: 54px 44px;
    margin-bottom: 22px;
}

#apple_tv_feature_14 {
    background-size: cover;
    border-top: 3px solid #806fff;
    background-color: white;
    padding: 54px 40px;
    margin-bottom: 22px;
}

#apple_tv_feature_9 {
    background-size: cover;
    height: auto;
}

.fullDiv_2>.div-sec {
    display: flex;
    align-items: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px;
    height: 284px;
}
}
</style>

<div style="background-color: #f7f7f7;margin-bottom: 10px;">
    <div class="container-fluid">
        <div class="row">
            <div id="product_main_img_1" class="div-sec similar_banner" tabIndex=1 title="bg_img"
                style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/hero_large.jpg')); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h3><?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'AirPlay' ?></h3>
                            <h1 style="font-size: 3.5rem!important;">
                                <?= isset($page_data[1]->sub_heading) ? $page_data[1]->sub_heading : 'Watch. Listen. Share. AirPlay lets you do it all' ?>
                            </h1>
                            <p>
                                <?= isset($page_data[1]->normal_text) ? $page_data[1]->normal_text : 'AirPlay lets you share videos, photos, music, and more from Apple devices to your Apple TV, favorite speakers, and popular smart TVs. And what you share always stays personal and private. So sit back and enjoy everything you love — in more places than ever.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[1]->link_url) ? $page_data[1]->link_url : '/home/listing' ?>"><?= isset($page_data[1]->link_label) ? $page_data[1]->link_label : 'Watch Servant on the Apple TV app ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[1]->link2_url) ? $page_data[1]->link2_url : '/home/listing' ?>"><?= isset($page_data[1]->link2_label) ? $page_data[1]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container" style="max-width: 100vw; margin-left: 5px; margin-right: 5px">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div style="text-align: center;padding-top: 160px;padding-bottom: 85px;">
                            <!-- <img src="<?= base_url((isset($page_data[2]->icon) ? $page_data[2]->icon : 'assets/images/video_icon_large.jpg')); ?>" style="margin-bottom: 20px" /> -->
                            <h1 style="color: #bb48af;">
                                <?= isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : 'And just like that, it’s on TV.' ?>
                            </h1>
                            <p>
                                <?= isset($page_data[2]->normal_text) ? $page_data[2]->normal_text : 'Simply tap the AirPlay icon on your Apple device and share almost anything — the latest movies, home videos, vacation photos, presentations — to your Apple TV or AirPlay 2–enabled smart TV.' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 no-padding-mob">
                        <!-- BOX 1 -->
                        <div id="apple_tv_feature" class="div-sec" tabIndex=3 title="bg_img"
                            style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/premium_experience_large.jpg')); ?>);">
                            <h3 style="width: 90%;">
                                <?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Get the full picture on Apple TV 4K.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[3]->sub_heading) ? $page_data[3]->sub_heading : 'More than a remarkable way to use AirPlay, Apple TV 4K is the ultimate cinematic experience. Stream 4K HDR video. Enjoy your photos from iCloud. Connect Apple Music to your home theater. Even control your HomeKit accessories.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '/home/listing' ?>"><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Learn more about Apple TV 4K ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[3]->link2_url) ? $page_data[3]->link2_url : '/home/listing' ?>"><?= isset($page_data[3]->link2_label) ? $page_data[3]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                        <!-- BOX 3 -->
                        <div id="apple_tv_feature_2"
                            style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/control_touch_large.jpg')); ?>);">
                            <h3 style=";">
                                <?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : 'Control it all with a tap.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : 'Convenient built-in controls appear on your iPhone in apps, on the Lock screen, and in Control Center — so you can easily play, pause, fast-forward, rewind, and adjust the volume on your TV.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '/home/listing' ?>"><?= isset($page_data[5]->link1_label) ? $page_data[5]->link1_label : 'Learn more' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[5]->link2_url) ? $page_data[5]->link2_url : '/home/listing' ?>"><?= isset($page_data[5]->link2_label) ? $page_data[5]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                        <!-- BOX 5 -->
                        <div id="apple_tv_feature_3">
                            <h3 style=";">
                                <?= isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : 'Put Siri in charge of your TV.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[7]->sub_heading) ? $page_data[7]->sub_heading : 'With AirPlay 2 and HomeKit, you can use Siri on your iPhone to send a video to your TV.1 Better yet, ask Siri to play a specific show in a specific room.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[7]->link1_url) ? $page_data[7]->link1_url : '/home/listing' ?>"><?= isset($page_data[7]->link1_label) ? $page_data[7]->link1_label : 'Learn more about HomeKit ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[7]->link2_url) ? $page_data[7]->link2_url : '/home/listing' ?>"><?= isset($page_data[7]->link2_label) ? $page_data[7]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                            <h2
                                style="margin-top: 30px;font-size: 40px;;text-align: center;padding: 0 14px;background: -webkit-linear-gradient(#f0357c, #f154ff, #777dff, #497ce2, #37bdde);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                <?= isset($page_data[7]->colorful_text) ? $page_data[7]->colorful_text : 'Hey Siri, play Servant on my living room TV' ?>
                            </h2>
                        </div>

                        <!-- BOX 7 -->
                        <div id="apple_tv_feature_7">
                            <h3 style=";">
                                <?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'You pick the show. AirPlay picks the TV.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[9]->sub_heading) ? $page_data[9]->sub_heading : 'Now AirPlay can automatically play movies and shows in the places you’re most likely to watch them. Over time, AirPlay learns where you prefer to watch TV, and can start playing to the TV in that room with just a tap.' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 no-padding-mob">
                        <!-- BOX 2 -->
                        <div id="apple_tv_feature_3">
                            <!-- <span class="violator">New</span> -->
                            <h3 style=";">
                                <?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : 'AirPlay 2–enabled TVs. Now that’s smart.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : 'Now AirPlay can automatically play movies and shows in the places you’re most likely to watch them. Over time, AirPlay learns where you prefer to watch TV, and can start playing to the TV in that room with just a tap.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '/home/listing' ?>"><?= isset($page_data[4]->link1_label) ? $page_data[4]->link1_label : 'See all AirPlay 2–enabled smart TVs ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[4]->link2_url) ? $page_data[4]->link2_url : '/home/listing' ?>"><?= isset($page_data[4]->link2_label) ? $page_data[4]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>

                            <div class="row" style="margin-top: 50px;">
                                <div class="col-md-6">
                                    <div id="branding_1"
                                        style="height: 40px ; background-image: url(<?= base_url((isset($page_data[4]->bg_img1) ? $page_data[4]->bg_img1 : 'assets/images/logo_samsung_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="branding_2"
                                        style="height: 40px ; background-image: url(<?= base_url((isset($page_data[4]->bg_img2) ? $page_data[4]->bg_img2 : 'assets/images/logo_lg_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6">
                                    <div id="branding_3"
                                        style="height: 40px ; background-image: url(<?= base_url((isset($page_data[4]->bg_img3) ? $page_data[4]->bg_img3 : 'assets/images/logo_sony_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="branding_4"
                                        style="height: 40px ; background-image: url(<?= base_url((isset($page_data[4]->bg_img4) ? $page_data[4]->bg_img4 : 'assets/images/logo_vizio_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 50px">
                                <sub
                                    style="margin-top: 50px"><?= isset($page_data[4]->small_text) ? $page_data[4]->small_text : 'Look for this symbol in stores and online.' ?></sub>
                                <div id="symbol"
                                    style="background-image: url(<?= base_url((isset($page_data[4]->bg_img5) ? $page_data[4]->bg_img5 : 'assets/images/logo_apple_airplay_video_large.jpg')); ?>);">
                                </div>
                            </div>
                        </div>

                        <!-- BOX 4 -->
                        <div style="background: white; height: 670px;margin-bottom: 22px;">
                            <div id="apple_tv_feature_5"
                                style="background-image: url(<?= base_url((isset($page_data[6]->bg_img) ? $page_data[6]->bg_img : 'assets/images/mirror_it_large.jpg')); ?>);">
                                <h3 style=";">
                                    <?= isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : 'When bigger is better, mirror it.' ?>
                                </h3>
                                <p style="width: 98%">
                                    <?= isset($page_data[6]->sub_heading) ? $page_data[6]->sub_heading : 'AirPlay mirroring lets you share what’s on your Apple device — websites, presentations, spreadsheets — with everyone in the room on a bigger screen.' ?>
                                </p>
                                <a
                                    href="<?= isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '/home/listing' ?>"><?= isset($page_data[6]->link1_label) ? $page_data[6]->link1_label : 'Learn more' ?><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <a
                                    href="<?= isset($page_data[6]->link2_url) ? $page_data[6]->link2_url : '/home/listing' ?>"><?= isset($page_data[6]->link2_label) ? $page_data[6]->link2_label : 'Buy ' ?>
                                    <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <!-- BOX 6 -->
                        <div id="apple_tv_feature_6"
                            style="background-image: url(<?= base_url((isset($page_data[8]->bg_img) ? $page_data[8]->bg_img : 'assets/images/control_touch_large.jpg')); ?>);">
                            <h3 style=";">
                                <?= isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : 'A must-see Siri suggestion.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[8]->sub_heading) ? $page_data[8]->sub_heading : 'When Siri suggests a show to watch — on the Lock screen or in search — it will also include an option to use AirPlay. So one quick tap on a Siri suggestion, and you’re watching your favorite show on your favorite screen.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '/home/listing' ?>"><?= isset($page_data[8]->link1_label) ? $page_data[8]->link1_label : 'Learn more' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[8]->link2_url) ? $page_data[8]->link2_url : '/home/listing' ?>"><?= isset($page_data[8]->link2_label) ? $page_data[8]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container" style="max-width: 100vw; margin-left: 5px; margin-right: 5px">
                <div class="row similar_banner">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="responsive_padding"
                            style="text-align: center;padding-top: 160px;padding-bottom: 85px;padding-left: 80px; padding-right: 80px;">
                            <img src="<?= base_url((isset($page_data[10]->icon) ? $page_data[10]->icon : 'assets/images/audio_icon_large.jpg')); ?>"
                                style="margin-bottom: 20px" />
                            <h1 style="color: #578aff;">
                                <?= isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : 'Your audio. Your way.' ?>
                            </h1>
                            <p>
                                <?= isset($page_data[10]->normal_text) ? $page_data[10]->normal_text : 'With AirPlay 2, you’re in control of your audio. And if you have more than one HomePod or AirPlay 2–enabled speaker, you can enjoy your favorite music or podcasts throughout your house — in perfect sync. You can even play different songs in different rooms.' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 no-padding-mob">
                        <!-- BOX 1 -->
                        <div style="background: white; height: 670px;margin-bottom: 22px;">
                            <div id="apple_tv_feature_8"
                                style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : 'assets/images/homepod_whole_home_large.jpg')); ?>);">
                                <h3 style=";">
                                    <?= isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : 'HomePod and AirPlay. The perfect duet.' ?>
                                </h3>
                                <p style="width: 98%">
                                    <?= isset($page_data[11]->sub_heading) ? $page_data[11]->sub_heading : 'HomePod is a breakthrough speaker that uses AirPlay 2 to control music throughout your home — from whatever room you’re in. Together with Siri, it creates an entirely new way to discover and interact with music.' ?>
                                </p>
                                <a
                                    href="<?= isset($page_data[11]->link1_url) ? $page_data[11]->link1_url : '/home/listing' ?>"><?= isset($page_data[11]->link1_label) ? $page_data[11]->link1_label : 'Learn more about HomePod ' ?><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <a
                                    href="<?= isset($page_data[11]->link2_url) ? $page_data[11]->link2_url : '/home/listing' ?>"><?= isset($page_data[11]->link2_label) ? $page_data[11]->link2_label : 'Buy ' ?>
                                    <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                        <!-- BOX 3 -->
                        <div id="apple_tv_feature_15"
                            style="background-image: url(<?= base_url((isset($page_data[13]->bg_img) ? $page_data[13]->bg_img : 'assets/images/every_room_large.jpg')); ?>);">
                            <h3 style=";">
                                <?= isset($page_data[13]->main_heading) ? $page_data[13]->main_heading : 'Multiroom audio is music to everyone’s ears.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[13]->sub_heading) ? $page_data[13]->sub_heading : 'Play your favorite music in one room and stream a podcast to another. Or sync your HomePod or other AirPlay 2–enabled speakers for music throughout your home.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[13]->link1_url) ? $page_data[13]->link1_url : '/home/listing' ?>"><?= isset($page_data[13]->link1_label) ? $page_data[13]->link1_label : 'Learn more ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[13]->link2_url) ? $page_data[13]->link2_url : '/home/listing' ?>"><?= isset($page_data[13]->link2_label) ? $page_data[13]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                        <!-- BOX 5 -->
                        <div id="apple_tv_feature_14">
                            <h3 style=";">
                                <?= isset($page_data[15]->main_heading) ? $page_data[15]->main_heading : 'Ask Siri to play what you want, where you want.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[15]->sub_heading) ? $page_data[15]->sub_heading : 'With Siri, your music is there for the asking. Just say the song, say the room, and enjoy the music. Siri can also play music on TVs, receivers, and speakers that you’ve added to your Home app.' ?>
                            </p>
                            <h2
                                style="margin-top: 30px;font-size: 40px;;text-align: center;padding: 0 14px;background: -webkit-linear-gradient(#f0357c, #f154ff, #777dff, #497ce2, #37bdde);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                                <?= isset($page_data[15]->colorful_text) ? $page_data[15]->colorful_text : 'Hey Siri, play the latest album by Angel Olsen in the bedroom' ?>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-5 no-padding-mob">
                        <!-- BOX 2 -->
                        <div id="apple_tv_feature_9">
                            <h3 style=";">
                                <?= isset($page_data[12]->main_heading) ? $page_data[12]->main_heading : 'AirPlay 2. Now in more speakers than ever.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[12]->sub_heading) ? $page_data[12]->sub_heading : 'Major speaker manufacturers are incorporating AirPlay 2 into their home audio products. And every AirPlay 2–enabled speaker works with the Home app on iOS and macOS.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[12]->link1_url) ? $page_data[12]->link1_url : '/home/listing' ?>"><?= isset($page_data[12]->link1_label) ? $page_data[12]->link1_label : 'See all AirPlay 2–enabled speakers ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[12]->link2_url) ? $page_data[12]->link2_url : '/home/listing' ?>"><?= isset($page_data[12]->link2_label) ? $page_data[12]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>

                            <div class="row" style="margin-top: 50px;">
                                <div class="col-md-4">
                                    <div id="branding_5"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_bang_olufsen_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_6"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_beats_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_7"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_bluesound_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-4">
                                    <div id="branding_8"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_bose_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_9"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_bowers_wilkins_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_10"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_definitive_technology_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-4">
                                    <div id="branding_11"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_denon_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_12"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_devialet_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_13"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_dynaudio_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-4">
                                    <div id="branding_14"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_libratone_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_15"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_marantz_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_16"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_mcintosh_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-4">
                                    <div id="branding_17"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_naim_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_18"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_polk_large.jpg')); ?>);">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="branding_19"
                                        style="background-image: url(<?= base_url((isset($page_data[12]->bg_img1) ? $page_data[12]->bg_img1 : 'assets/images/logo_sonos_large.jpg')); ?>);">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 80px">
                                <sub
                                    style="margin-top: 50px"><?= isset($page_data[12]->small_text) ? $page_data[12]->small_text : 'Look for this symbol in stores and online.' ?></sub>
                                <div id="symbol"
                                    style="background-image: url(<?= base_url((isset($page_data[12]->bg_img5) ? $page_data[12]->bg_img5 : 'assets/images/logo_apple_airplay_video_large.jpg')); ?>);">
                                </div>
                            </div>
                        </div>

                        <!-- BOX 4 -->
                        <div id="apple_tv_feature_10"
                            style="background-image: url(<?= base_url((isset($page_data[14]->bg_img1) ? $page_data[14]->bg_img1 : 'assets/images/anyone_can_add_songs_large.jpg')); ?>);">
                            <h3 style=";">
                                <?= isset($page_data[14]->main_heading) ? $page_data[14]->main_heading : 'Anyone can add songs to Up Next.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[14]->sub_heading) ? $page_data[14]->sub_heading : 'With AirPlay 2 and Apple Music, your friends can add their own music to the mix.' ?>
                            </p>
                            <a
                                href="<?= isset($page_data[14]->link1_url) ? $page_data[14]->link1_url : '/home/listing' ?>"><?= isset($page_data[14]->link1_label) ? $page_data[14]->link1_label : 'Learn more ' ?><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></a>
                            <a
                                href="<?= isset($page_data[14]->link2_url) ? $page_data[14]->link2_url : '/home/listing' ?>"><?= isset($page_data[14]->link2_label) ? $page_data[14]->link2_label : 'Buy ' ?>
                                <i class="fa fa-angle-right"></i></a>
                        </div>

                        <!-- BOX 6 -->
                        <div id="apple_tv_feature_13">
                            <h3 style=";">
                                <?= isset($page_data[16]->main_heading) ? $page_data[16]->main_heading : 'Take a call. Make a call. And the music plays on.' ?>
                            </h3>
                            <p style="width: 98%">
                                <?= isset($page_data[16]->sub_heading) ? $page_data[16]->sub_heading : 'Take an incoming call or play a game on your device without interrupting your music.' ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 50px;">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <div style="text-align: center;padding-top: 160px;padding-bottom: 85px;">
                    <div style="height: 55px">
                        <img
                            src="<?= base_url((isset($page_data[18]->icon) ? $page_data[18]->icon : 'assets/images/airplay_video_icon_large.jpg')); ?>" />
                    </div>
                    <h5 style="margin-top: 10px;">
                        <a
                            href="<?= isset($page_data[18]->link1_url) ? $page_data[18]->link1_url : '/home/listing' ?>"><?= isset($page_data[18]->link1_label) ? $page_data[18]->link1_label : 'Learn more about HomePod ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </h5>
                </div>
            </div>
            <div class="col-md-3">
                <div style="text-align: center;padding-top: 160px;padding-bottom: 85px;">
                    <div style="height: 55px">
                        <img
                            src="<?= base_url((isset($page_data[18]->icon2) ? $page_data[18]->icon2 : 'assets/images/airplay_audio_icon_large.jpg')); ?>" />
                    </div>
                    <h5 style="margin-top: 10px;">
                        <a
                            href="<?= isset($page_data[18]->link2_url) ? $page_data[18]->link2_url : '/home/listing' ?>"><?= isset($page_data[18]->link2_label) ? $page_data[18]->link2_label : 'Learn more about HomePod ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </h5>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <div class="container-fluid" style="margin: 0;padding: 0;">
        <div class="row" style="margin: 10px 0;">
            <div class="col-md-6 fullDiv_2" style="padding: 0;border-right: 13px solid #f7f7f7;">
                <div class="apple_tv_box_bg similar_boxes px-0 px-md-4 div-sec" tabIndex=19 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[19]->bg_img) ? $page_data[19]->bg_img : 'assets/images/apple_tv_4k_large.png')); ?>);">
                    <div style="width: 360px;margin: 0 auto;">
                        <h5 style="font-size: 1.5rem">
                            <?= isset($page_data[19]->main_heading) ? $page_data[19]->main_heading : 'tv 4K' ?></h5>
                        <h1 style="margin: 20px 0">
                            <?= isset($page_data[19]->sub_heading) ? $page_data[19]->sub_heading : 'Cinematic in every sense.' ?>
                        </h1>
                        <a
                            href="<?= isset($page_data[19]->link1_url) ? $page_data[19]->link1_url : '/home/listing' ?>"><?= isset($page_data[19]->link1_label) ? $page_data[19]->link1_label : 'Learn more ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a
                            href="<?= isset($page_data[19]->link2_url) ? $page_data[19]->link2_url : '/home/listing' ?>"><?= isset($page_data[19]->link2_label) ? $page_data[19]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="col-md-6 fullDiv_2" style="padding: 0;">
                <div class="apple_tv_box_bg_2 similar_boxes px-0 px-md-4 div-sec" tabIndex=20 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[20]->bg_img) ? $page_data[20]->bg_img : 'assets/images/homepod_large.png')); ?>);">
                    <div style="width: 360px;margin: 0 auto;">
                        <h5 style="font-size: 1.5rem">
                            <?= isset($page_data[20]->main_heading) ? $page_data[20]->main_heading : 'HomePod' ?></h5>
                        <h1 style="margin: 20px 0">
                            <?= isset($page_data[20]->sub_heading) ? $page_data[20]->sub_heading : 'The new sound of home.' ?>
                        </h1>
                        <a
                            href="<?= isset($page_data[20]->link1_url) ? $page_data[20]->link1_url : '/home/listing' ?>"><?= isset($page_data[20]->link1_label) ? $page_data[20]->link1_label : 'Learn more ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a
                            href="<?= isset($page_data[20]->link2_url) ? $page_data[20]->link2_url : '/home/listing' ?>"><?= isset($page_data[20]->link2_label) ? $page_data[20]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 10px 0;">
            <div class="col-md-6 fullDiv_2" style="padding: 0;border-right: 13px solid #f7f7f7;">
                <div class="apple_tv_box_bg similar_boxes px-0 px-md-4 div-sec" tabIndex=21 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[21]->bg_img) ? $page_data[21]->bg_img : 'assets/images/homekit_large.png')); ?>);">
                    <div style="width: 360px;margin: 0 auto;" class="responsive_width">

                        <h5 style="font-size: 1.5rem">
                            <?= isset($page_data[21]->main_heading) ? $page_data[21]->main_heading : 'Home app' ?></h5>
                        <h1 style="margin: 20px 0">
                            <?= isset($page_data[21]->sub_heading) ? $page_data[21]->sub_heading : 'Control all your HomeKit accessories in one place.' ?>
                        </h1>
                        <a
                            href="<?= isset($page_data[21]->link1_url) ? $page_data[21]->link1_url : '/home/listing' ?>"><?= isset($page_data[21]->link1_label) ? $page_data[21]->link1_label : 'Learmore ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a
                            href="<?= isset($page_data[21]->link2_url) ? $page_data[21]->link2_url : '/home/listing' ?>"><?= isset($page_data[21]->link2_label) ? $page_data[21]->link2_label : 'Buy ' ?>
                            <i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class=""></div>
                </div>
            </div>
            <div class="col-md-6 fullDiv_2" style="padding: 0;">
                <div class="apple_tv_box_bg_2 similar_boxes px-0 px-md-4 div-sec" tabIndex=22 title="bg_img"
                    style="background-image: url(<?= base_url((isset($page_data[22]->bg_img) ? $page_data[22]->bg_img : 'assets/images/music_large.png')); ?>)">
                    <div style="width: 360px;margin: 0 auto;" class="responsive_width">
                        <h5 style="font-size: 1.5rem">
                            <?= isset($page_data[22]->main_heading) ? $page_data[22]->main_heading : 'HomePod' ?></h5>
                        <h1 style="margin: 20px 0">
                            <?= isset($page_data[22]->sub_heading) ? $page_data[22]->sub_heading : '60 million songs. 3 months on us.' ?>
                        </h1>
                        <a
                            href="<?= isset($page_data[22]->link1_url) ? $page_data[22]->link1_url : '/home/listing' ?>"><?= isset($page_data[22]->link1_label) ? $page_data[22]->link1_label : 'Try it free ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a
                            href="<?= isset($page_data[22]->link2_url) ? $page_data[22]->link2_url : '/home/listing' ?>"><?= isset($page_data[22]->link2_label) ? $page_data[22]->link2_label : 'Learn more ' ?><i
                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class=""></div>
                </div>
            </div>
        </div>
        </ div>
    </div>