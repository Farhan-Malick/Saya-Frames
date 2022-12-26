<style>
    .row{
        margin: auto;
    }
    #product_main_img_1 {
        margin: 64px 0;
        background-repeat: no-repeat;
        background-position: center top;
        height: 580px;
        width: 100%;
    }

    .watch_activity {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 200px;
    }

    .apple_watch_ar {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 540px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 200px;
    }

    .watch_track {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 500px;
        padding-left: 50px;
        color: white;
    }

    .call_text {
        margin-bottom: 10px;
        background-image: url();
        background-color: #00DD70;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        border-radius: 12px;
        padding: 100px 50px;
        color: white;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .watch_text {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 500px;
        padding-left: 50px;
        color: white;
    }

    .splash_proof {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 260px;
        padding-left: 50px;
        color: white;
    }

    .apple_music {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center right;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 490px;
        padding-left: 50px;
        padding-right: 50px;
        color: white;
    }

    .never_miss {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-position: center left;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 230px;
    }

    .watch_siri {
        margin-bottom: 10px;
        background-color: purple;
        color: white;
        background-image: url();
        background-repeat: no-repeat;
        background-position: center left;
        height: 619px;
        width: 100%;
        border-radius: 12px;
        padding-top: 260px;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .watch_maps {
        margin-bottom: 10px;
        background-color: purple;
        color: black;
        background-repeat: no-repeat;
        background-position: center left;
        height: 619px;
        width: 100%;
        border-radius: 12px;
        padding-top: 260px;
    }

    .ping_iphone {
        margin-bottom: 10px;
        background-repeat: no-repeat;
        background-size: cover;
        height: 619px;
        width: 100%;
        background-color: #f5f5f7;
        border-radius: 12px;
        padding-top: 500px;
        padding-left: 50px;
        color: black;
    }

    .watch_1 {
        margin-top: 50px;
        margin-bottom: 50px;
        background-repeat: no-repeat;
        height: 518px;
        width: 100%;
        background-position: center;
    }

    .watch_2 {
        margin-top: 50px;
        margin-bottom: 50px;
        background-repeat: no-repeat;
        height: 518px;
        width: 100%;
        background-position: center;
    }
    @media screen and (max-width: 1150px) and (min-width: 770px) 
        {
            .responsive_margin{
            margin: auto!important;
        }
        }
    @media screen and (max-width: 770px) and (min-width: 300px) {
        .watch_2{
            background-size: contain;
        }
        .watch_1{
            background-size: contain;
        }
        #product_main_img_1{
            background-size: contain;
            height: 235px;
        }
        .responsive_margin{
            margin: auto!important;
        }
        .resp_width{
            width: 100%!important;
        }
        .watch_track,.splash_proof,.apple_music,.watch_text{
            background-size:cover;
            background: center;
        }
        .apple_watch_ar{
            background-position: center;
        }
    }
</style>
<div style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div style="padding-top: 18px">
					<h6><?= isset($page_data[25]->normal_text) ? $page_data[25]->normal_text : 'iPadOS' ?></h6>
				</div>
			</div>
			<div class="col-md-6">
				<div style="padding-top: 13px">
					<a href="<?= isset($page_data[25]->btn_blue_bg_url) ? $page_data[25]->btn_blue_bg_url : '/home/listing' ?>"
						style="background: #0071e3;font-size: 12px;line-height: 1.33337;min-width: 23px; padding-left: 11px; padding-right: 11px; padding-top: 4px; padding-bottom: 4px; border-radius: 12px;color: white;float: right"><?= isset($page_data[25]->btn_blue_bg_label) ? $page_data[25]->btn_blue_bg_label : 'Buy' ?></a>
				</div>
			</div>
		</div>
		<hr style="margin-top: 0.5rem">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div id="product_main_img_1"
				style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/hero__e4ykmvto2gsy_large.jpg')); ?>);">
			</div>
		</div>
		<div class="row" style="margin-bottom: 134px;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="text-align: center">
					<h2><?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'WATCH' ?></h2>
					<h6 style="color: darkred">
						<?= isset($page_data[1]->small_heading) ? $page_data[1]->small_heading : 'SERIES 3' ?></h6>
					<h1 style="font-size: 4.5rem!important;margin-top: 50px;margin-bottom: 30px">
						<?= isset($page_data[1]->sub_heading) ? $page_data[1]->sub_heading : 'Do it all. <br> All from your wrist.' ?>
					</h1>
					<h5><?= isset($page_data[1]->text) ? $page_data[1]->text : 'Starting at $199' ?></h5>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-8" style="padding-right: 5px;">
				<div class="watch_activity"
					style="background-image: url(<?= base_url((isset($page_data[2]->bg_img) ? $page_data[2]->bg_img : 'assets/images/hw_rings_static__c82fxixnge4i_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-6">
							<h2 style="width: 50%;margin-left: 50px;">
								<?= isset($page_data[2]->main_heading) ? $page_data[2]->main_heading : 'See how much you' ?>
							</h2>
							<div
								style="background-color: #f91757;margin-top: 15px;padding-left: 50px;width: 55%;margin-bottom: 5px;border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
								<h2><?= isset($page_data[2]->text1) ? $page_data[2]->text1 : 'Move' ?></h2>
							</div>
							<div
								style="background-color: #b2ff01;padding-left: 50px;width: 65%;margin-bottom: 5px;border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
								<h2><?= isset($page_data[2]->text2) ? $page_data[2]->text2 : 'Exercise' ?></h2>
							</div>
							<div
								style="background-color: #02e5f8;padding-left: 50px;width: 55%;margin-bottom: 5px;border-bottom-right-radius: 50px; border-top-right-radius: 50px;">
								<h2><?= isset($page_data[2]->text3) ? $page_data[2]->text3 : 'Stand' ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="watch_track"
					style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h4><?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Track every way you work out.' ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-4" style="padding-right: 5px;">
				<div class="splash_proof"
					style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/waterproof_endframe__b7ijoxk30rv6_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h4><?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : 'Splashproof. Swimproof. Surfproof.*' ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="padding-right: 5px;">
				<div class="apple_music"
					style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-12" style="text-align: left">
							<h5><?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : 'Store your favorite songs. <br> Or stream over 60 million with Apple Music.' ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="apple_music"
					style="background-image: url(<?= base_url((isset($page_data[6]->bg_img) ? $page_data[6]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-12" style="text-align: left">
							<h5 style="">
								<?= isset($page_data[6]->main_heading) ? $page_data[6]->main_heading : 'Get the exact workout<br> metrics you need. <br>Down to the decimal.' ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-8" style="padding-right: 5px;">
				<div class="never_miss"
					style="background-image: url(<?= base_url((isset($page_data[7]->bg_img) ? $page_data[7]->bg_img : 'assets/images/hw_rings_static__c82fxixnge4i_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<h2 style="width: 200px;margin-left: 50px;">
								<?= isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : 'Never miss<br> a call.<br>Say what?' ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="watch_text"
					style="background-image: url(<?= base_url((isset($page_data[8]->bg_img) ? $page_data[8]->bg_img : 'assets/images/messaging_endframe__fo9uj6d05v2a_large.jpg')); ?>);">

				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-6" style="padding-right: 5px;">
				<div class="watch_siri"
					style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : '')); ?>);">
					<div class="row">
						<div class="col-md-12">
							<h2 style="margin-left: 50px;width: 245px;">
								<?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'Just raise your <br> wrist to ask Siri.' ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ping_iphone"
					style="background-image: url(<?= base_url((isset($page_data[10]->bg_img) ? $page_data[10]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div style="width: 34%;">
						<h5><?= isset($page_data[10]->main_heading) ? $page_data[10]->main_heading : 'Ping your iPhone. Hear and see where it’s hiding.' ?>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-8" style="padding-right: 5px;">
				<div class="watch_activity"
					style="background-image: url(<?= base_url((isset($page_data[11]->bg_img) ? $page_data[11]->bg_img : 'assets/images/hw_rings_static__c82fxixnge4i_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h2 style="width: 50%;margin-left: 50px;">
								<?= isset($page_data[11]->main_heading) ? $page_data[11]->main_heading : 'Pay for coffee, buy lunch, or send money to a friend with Apple Pay' ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="watch_track"
					style="background-image: url(<?= base_url((isset($page_data[12]->bg_img) ? $page_data[12]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h4><?= isset($page_data[12]->main_heading) ? $page_data[12]->main_heading : 'Track every way you work out.' ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-6" style="padding-right: 5px;">
				<div class="watch_maps"
					style="background-image: url(<?= base_url((isset($page_data[13]->bg_img) ? $page_data[13]->bg_img : 'assets/images/maps_endframe__fsl92cwk2k2u_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-6">
							<h2 style="margin-left: 50px;">
								<?= isset($page_data[13]->main_heading) ? $page_data[13]->main_heading : 'Get a tap when it’s time to turn with Maps.' ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ping_iphone"
					style="background-image: url(<?= base_url((isset($page_data[14]->bg_img) ? $page_data[14]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div style="width: 35%;" class="resp_width">
						<h5><?= isset($page_data[14]->main_heading) ? $page_data[14]->main_heading : 'Unlock your Mac just by wearing your watch.' ?>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-8" style="padding-right: 5px;">
				<div class="never_miss"
					style="background-image: url(<?= base_url((isset($page_data[15]->bg_img) ? $page_data[15]->bg_img : 'assets/images/hw_rings_static__c82fxixnge4i_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-7">
							<div style="width: 84%;">
								<h2 style="margin-left: 50px;">
									<?= isset($page_data[15]->main_heading) ? $page_data[15]->main_heading : 'Show your true colors with interchangeable bands.' ?>
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="watch_track"
					style="background-image: url(<?= base_url((isset($page_data[16]->bg_img) ? $page_data[16]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h4><?= isset($page_data[16]->main_heading) ? $page_data[16]->main_heading : 'Stay in the know with notifications.' ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-4" style="padding-right: 5px;">
				<div class="splash_proof"
					style="background-image: url(<?= base_url((isset($page_data[17]->bg_img) ? $page_data[17]->bg_img : 'assets/images/waterproof_endframe__b7ijoxk30rv6_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h4><?= isset($page_data[17]->main_heading) ? $page_data[17]->main_heading : 'Splashproof. Swimproof. Surfproof.*' ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4" style="padding-right: 5px;">
				<div class="apple_music"
					style="background-image: url(<?= base_url((isset($page_data[18]->bg_img) ? $page_data[18]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-10" style="text-align: left">
							<h5><?= isset($page_data[18]->main_heading) ? $page_data[18]->main_heading : 'Track your menstrual cycle with a tap.' ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="apple_music"
					style="background-image: url(<?= base_url((isset($page_data[19]->bg_img) ? $page_data[19]->bg_img : 'assets/images/workout_endframe__fa75u4o7za62_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8" style="text-align: left">
							<h5><?= isset($page_data[19]->main_heading) ? $page_data[19]->main_heading : 'Call emergency services right from your wrist.' ?>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-8" style="padding-right: 5px;">
				<div class="watch_activity"
					style="background-image: url(<?= base_url((isset($page_data[20]->bg_img) ? $page_data[20]->bg_img : 'assets/images/hw_rings_static__c82fxixnge4i_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-8">
							<h2 style="width: 50%;margin-left: 50px;">
								<?= isset($page_data[20]->main_heading) ? $page_data[20]->main_heading : 'Keep an eye on your with heart health notifications.' ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="call_text"
					style="background-image: url(<?= base_url((isset($page_data[21]->bg_img) ? $page_data[21]->bg_img : '')); ?>);">
					<div class="row">
						<div class="col-md-10">
							<!-- <div style="margin-bottom: 50px">
                                <svg class="cellular-icon animate" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 212 141" style="enable-background:new 0 0 212 141;" xml:space="preserve" width="106">
                                    <path class="st1" d="M141.4,141h-71C31.5,141,0,109.5,0,70.5l0,0C0,31.6,31.5,0.1,70.5,0.1h71c38.9,0,70.5,31.5,70.5,70.5l0,0 C211.9,109.5,180.4,141,141.4,141L141.4,141z" fill="#00DD70" style="opacity: 0;"></path>
                                    <path class="st2" d="M106,41.6c-7.1,0-12.9,5.8-12.9,12.9c0,5.5,3.5,10.5,8.8,12.3v54.4c0,2.2,1.8,4,4,4s4-1.8,4-4V66.8 c6.8-2.2,10.6-9.4,8.4-16.2C116.6,45.3,111.6,41.6,106,41.6z M88.1,33.9c-1.6-1.6-4.1-1.6-5.7,0l0,0C70.3,45.6,69.9,65,81.7,77.2 c0.1,0.1,0.3,0.3,0.4,0.4c0.8,0.8,1.8,1.2,2.9,1.2c1.1,0,2.1-0.4,2.8-1.2c1.6-1.6,1.6-4.1,0-5.7l0,0c-8.9-8.8-9-23.1-0.2-32 c0.2-0.2,0.3-0.3,0.5-0.5C89.6,38,89.6,35.5,88.1,33.9L88.1,33.9z M123.8,33.9c-1.6,1.6-1.6,4.1,0,5.7l0,0c9,8.6,9.3,22.9,0.7,31.9 c-0.1,0.1-0.3,0.3-0.4,0.4c-1.6,1.6-1.6,4.1,0,5.7l0,0c0.7,0.7,1.8,1.2,2.8,1.2c1.1,0,2.1-0.4,2.9-1.2c11.9-11.9,12-31.3,0-43.3 c-0.1-0.1-0.3-0.3-0.4-0.4C127.8,32.4,125.3,32.4,123.8,33.9z M71.6,22.6c-1.6-1.5-4.2-1.3-5.6,0.3c-16.9,18.5-17,46.8-0.3,65.5 c0.8,0.9,1.8,1.3,3,1.3c1,0,1.9-0.4,2.6-1c1.7-1.5,1.8-4,0.4-5.6c-14-15.6-13.9-39.4,0.3-54.8C73.4,26.6,73.3,24.1,71.6,22.6 C71.6,22.6,71.6,22.6,71.6,22.6z M145.9,22.9c-1.5-1.7-4-1.8-5.7-0.3c-1.7,1.5-1.8,4-0.3,5.7c14.2,15.5,14.3,39.2,0.3,54.8 c-1.5,1.7-1.3,4.2,0.4,5.6c0.7,0.6,1.7,1,2.6,1c1.1,0,2.2-0.5,3-1.3C162.9,69.8,162.8,41.5,145.9,22.9z" fill="#FFFFFF"></path>
                                </svg>
                            </div> -->
							<h2><?= isset($page_data[21]->main_heading) ? $page_data[21]->main_heading : 'Call. Text. Stream. Cellular connectivity lets you do it all without your phone.' ?>
								</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-12">
				<div class="apple_watch_ar"
					style="background-image: url(<?= base_url((isset($page_data[22]->bg_img) ? $page_data[22]->bg_img : 'assets/images/ar_tile__fgca8s00aqqi_large.jpg')); ?>);">
					<div class="row">
						<div class="col-md-5">
							<div style="float: right;width: 55%;margin-left: 50px;">
								<h2><?= isset($page_data[22]->main_heading) ? $page_data[22]->main_heading : 'See Apple Watch Series 3 in AR.' ?>
								</h2>
								<p><?= isset($page_data[22]->text) ? $page_data[22]->text : 'Just open this page in Safari on your iPhone or iPad.' ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive_margin" style="margin: 134px">
			<div class="row">
				<div class="col-md-12">
					<div style="text-align: center">
						<h1 style="margin-bottom: 30px">
							<?= isset($page_data[23]->section_heading) ? $page_data[23]->section_heading : 'Compare Apple Watch models.' ?>
						</h1>
						<a
							href="<?= isset($page_data[23]->link1_url) ? $page_data[23]->link1_url : '/home/listing' ?>"><?= isset($page_data[23]->link1_label) ? $page_data[23]->link1_label : 'Find the one that’s right for you ' ?><i
								class="fa fa-angle-right" aria-hidden="true"></i> </a>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="watch_1"
						style="background-image: url(<?= base_url((isset($page_data[23]->bg_img1) ? $page_data[23]->bg_img1 : 'assets/images/compare-s5__b441wvjpjliu_large.jpg')); ?>);">

					</div>
					<div style="text-align: center">
						<h4><?= isset($page_data[23]->main_heading1) ? $page_data[23]->main_heading1 : 'Watch' ?></h4>
						<p style="font-size: 0.9rem;color: darkred">
							<?= isset($page_data[23]->small_text1) ? $page_data[23]->small_text1 : 'SERIES 5' ?></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="watch_2"
						style="background-image: url(<?= base_url((isset($page_data[23]->bg_img2) ? $page_data[23]->bg_img2 : 'assets/images/compare-s3__cefnyqnm4pg2_large.jpg')); ?>);">

					</div>
					<div style="text-align: center">
						<h4><?= isset($page_data[23]->main_heading2) ? $page_data[23]->main_heading2 : 'Watch' ?></h4>
						<p style="font-size: 0.9rem;color: darkred">
							<?= isset($page_data[23]->small_text2) ? $page_data[23]->small_text2 : 'SERIES 5' ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
