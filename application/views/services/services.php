<style>
	#product_main_img_1 {
		background-repeat: no-repeat;
		background-size: cover;
		height: 400px;
		zoom: 1.3;
		background-position: center 50%;
		width: 100%;
		padding: 70px 125px
	}

	#product_main_img_2 {
		background-repeat: no-repeat;
		background-size: cover;
		height: 500px;
		width: 100%;
		padding: 150px 125px
	}

	#product_main_img_6 {
		background-repeat: no-repeat;
		background-size: cover;
		height: 350px;
		width: 100%;
		padding: 80px 125px;
        display:flex;
        align-items: center;
	}

	.product_main_img_10 {
		background-repeat: no-repeat;
		background-size: contain;
		width: 100%;
		padding: 100px 125px
	}

	.product_main_img_11 {
		background-repeat: no-repeat;
		background-size: contain;
		width: 100%;
		padding: 100px 125px
	}

	.product_main_img_12 {
		background-repeat: no-repeat;
		background-size: contain;
		width: 100%;
		padding: 100px 125px
	}

	#product_main_img_3 {
		background-repeat: no-repeat;
		background-size: cover;
		height: 500px;
		background-position: center 50%;
		width: 100%;
		border-bottom: 2px solid #dedede;
		padding: 80px 125px
	}

	@media screen and (max-width: 650px) and (min-width: 300px) {
		#product_main_img_1 {
			height: auto;
			padding-right: 0;
			padding-left: 0;
		}

		#product_main_img_6 {
			height: auto;
			padding-right: 0;
			padding-left: 0;
		}

		#product_main_img_3 {
			height: auto;
			padding-right: 0;
			padding-left: 0;
		}

		#product_main_img_2 {
			height: auto;
			padding-right: 0;
			padding-left: 0;
		}

		.responsive_margin {
			margin-left: 5px !important;
		}

		.responsive_padding {
			padding-left: 30px !important;
		}

		.responsive_table {
			width: 290px;
			vertical-align: middle;
			overflow-x: scroll;
		}
	}

	.card {
		margin-bottom: 20px;
	}

	.card img {
		height: 260px;
		object-fit: cover;
		border-radius: 10px;
	}

	.card-body {
		padding-left: 0;
	}

</style>
<!-- <div class="container-fluid">
    <div class="row">
        <div id="product_main_img_1" style="background-size: 100%; background-image: url(<?= base_url((isset($page_data[1]->bg_img) ? $page_data[1]->bg_img : 'assets/images/hero-banner-homepage.image.large_2x.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="text-align: center">
                            <h2><?= isset($page_data[1]->main_heading) ? $page_data[1]->main_heading : 'Welcome to Apple Support' ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="product_main_img_6" style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/e4983638-5e5b-4541-951d-ab89572075d6_Ombre-sponge-painting-1000x667.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div style="width: 70%">
                            <h2 style="text-align: left;padding: 0px;"><?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Stay connected with FaceTime' ?></h2>
                            <p style="font-size: 20px;"><?= isset($page_data[3]->sub_heading) ? $page_data[3]->sub_heading : 'Use Group FaceTime to video chat with multiple people at the same time, right from Messages or the FaceTime app.' ?></p>
                            <h4><a href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '/home/listing' ?>"><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Start a Group FaceTime call ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="product_main_img_3" style="background-image: url(<?= base_url((isset($page_data[4]->bg_img) ? $page_data[4]->bg_img : 'assets/images/redwall_orig.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div style="width: 80%;">
                            <h2 style="text-align: left;padding: 0px;"><?= isset($page_data[4]->main_heading) ? $page_data[4]->main_heading : 'iPhone and Apple Watch safety features' ?></h2>
                            <p style="font-size: 20px;"><?= isset($page_data[4]->sub_heading) ? $page_data[4]->sub_heading : 'Learn how to use your iPhone and Apple Watch to get help in an emergency.' ?></p>
                            <h4><a href="<?= isset($page_data[4]->link1_url) ? $page_data[4]->link1_url : '/home/listing' ?>"><?= isset($page_data[4]->link1_label) ? $page_data[4]->link1_label : 'Learn more and be prepared ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a></h4>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="product_main_img_2" style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/banner-hero-giveback-support.image.large_2x.jpg')); ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div style="text-align: left;width: 85%;">
                            <h2 style="text-align: left;padding: 0px;"><?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : 'Trade in with Apple' ?></h2>
                            <p><?= isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : 'Turn an eligible device into credit towards a new one, or recycle it for free. Apple Trade In is good for you and the planet.' ?></p>
                            <a href="<?= isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '/home/listing' ?>"><?= isset($page_data[5]->link1_label) ? $page_data[5]->link1_label : 'Learn more ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container" style="padding: 50px 50px">
            <div class="row">
                <div class="col-md-4">
                    <div style="width: 84%">
                        <div style="text-align: center;margin-bottom: 15px">
                            <img src="<?= base_url((isset($page_data[6]->img1) ? $page_data[6]->img1 : 'assets/images/contentlink-communities_2x.png')); ?>" width="70%" />
                        </div>
                        <h3><?= isset($page_data[6]->main_heading1) ? $page_data[6]->main_heading1 : 'Have a question?' ?></h3>
                        <p><?= isset($page_data[6]->text1) ? $page_data[6]->text1 : 'Ask everyone. Our Apple Support Community can help you find answers.' ?></p>
                        <a href="<?= isset($page_data[6]->link1_url) ? $page_data[6]->link1_url : '/home/listing' ?>"><?= isset($page_data[6]->link1_label) ? $page_data[6]->link1_label : 'Ask the community ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="width: 83%">
                        <div style="text-align: center;margin-bottom: 15px">
                            <img src="<?= base_url((isset($page_data[6]->img2) ? $page_data[6]->img2 : 'assets/images/youtube-watch-learn-promo_2x.png')); ?>" width="70%" />
                        </div>
                        <h3><?= isset($page_data[6]->main_heading2) ? $page_data[6]->main_heading2 : 'Watch and learn' ?></h3>
                        <p><?= isset($page_data[6]->text2) ? $page_data[6]->text2 : 'Then play. Discover new ways to enjoy your devices with our how-to and help videos.' ?></p>
                        <a href="<?= isset($page_data[6]->link2_url) ? $page_data[6]->link2_url : '/home/listing' ?>"><?= isset($page_data[6]->link2_label) ? $page_data[6]->link2_label : 'Explore our videos on youtube ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="width: 83%">
                        <div style="text-align: center;margin-bottom: 15px">
                            <img src="<?= base_url((isset($page_data[6]->img3) ? $page_data[6]->img3 : 'assets/images/artcol-contentlink-social_2x.png')); ?>" width="70%" />
                        </div>
                        <h3><?= isset($page_data[6]->main_heading3) ? $page_data[6]->main_heading3 : 'Get quick tips' ?></h3>
                        <p><?= isset($page_data[6]->text3) ? $page_data[6]->text3 : 'And the help you need — all in one place. We\'re here every day to answer your questions.' ?></p>
                        <a href="<?= isset($page_data[6]->link3_url) ? $page_data[6]->link3_url : '/home/listing' ?>"><?= isset($page_data[6]->link3_label) ? $page_data[6]->link3_label : 'Contact us @AppleSupport ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="border-bottom: 1px solid #dedede; border-top: 1px solid #dedede;">
        <div class="container responsive_padding" style="padding: 70px 0">
            <div class="row" style="margin: auto;">
                <div class="col-md-2"></div>
                <div class="col-md-4 product_main_img_10" style="background-image: url(<?= base_url((isset($page_data[7]->bg_img) ? $page_data[7]->bg_img : 'assets/images/artcol-contentlink-expert_2x.png')); ?>);"></div>
                <div class="col-md-5">
                    <div>
                        <h3><?= isset($page_data[7]->main_heading) ? $page_data[7]->main_heading : 'Tell us how we can help' ?></h3>
                        <p><?= isset($page_data[7]->text) ? $page_data[7]->text : 'Answer a few questions and we\'ll help you find a solution.' ?></p>
                        <a href="<?= isset($page_data[7]->link1_url) ? $page_data[7]->link1_url : '/home/listing' ?>"><?= isset($page_data[7]->link1_label) ? $page_data[7]->link1_label : 'Get Support ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="row" style="border-bottom: 1px solid #dedede; border-top: 1px solid #dedede;">
        <div class="container responsive_padding" style="padding: 70px 0">
            <div class="row" style="margin: auto;" >
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div>
                        <h3><?= isset($page_data[8]->main_heading) ? $page_data[8]->main_heading : 'Service and support from Apple experts' ?></h3>
                        <p><?= isset($page_data[8]->text) ? $page_data[8]->text : 'AppleCare products provide additional hardware service options and expert technical support from Apple.' ?></p>
                        <a href="<?= isset($page_data[8]->link1_url) ? $page_data[8]->link1_url : '/home/listing' ?>"><?= isset($page_data[8]->link1_label) ? $page_data[8]->link1_label : 'Learn about AppleCare plans ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
                <div class="col-md-4 product_main_img_11" style="background-image: url(<?= base_url((isset($page_data[8]->bg_img) ? $page_data[8]->bg_img : 'assets/images/artcol-contentlink-expert_2x.png')); ?>);"></div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="row" style="border-top: 1px solid #dedede;">
        <div class="container responsive_padding" style="padding: 70px 0">
            <div class="row" style="padding-bottom: 20px;margin:auto;">
                <div class="col-md-2"></div>
                <div class="col-md-4 product_main_img_12" style="background-image: url(<?= base_url((isset($page_data[9]->bg_img) ? $page_data[9]->bg_img : 'assets/images/artcol-contentlink-expert_2x.png')); ?>);"></div>
                <div class="col-md-5">
                    <div>
                        <h3><?= isset($page_data[9]->main_heading) ? $page_data[9]->main_heading : 'Let\'s get that fixed' ?></h3>
                        <p style="width: 85%;"><?= isset($page_data[9]->text) ? $page_data[9]->text : 'If your Apple device needs repairs, you can go to an Apple Store, visit an Authorized Service Provider, or mail in your device. Whatever you choose, we’ll make sure your device works the way it should.' ?></p>
                        <a href="<?= isset($page_data[9]->link1_url) ? $page_data[9]->link1_url : '/home/listing' ?>"><?= isset($page_data[9]->link1_label) ? $page_data[9]->link1_label : 'Choose repair option ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid">
	<div class="row">
		<div id="product_main_img_6"
			style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/redwall_orig.jpg')); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div style="">
							<h2 style="text-align: left;padding: 0px;">
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Business Services' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Whatever your requirement is, we’d love to help.<br>
                            We are Islamabad based with extensive experience in the manufacture and supply of high-quality picture frames and mounts to businesses nationwide.
                            </p>
							<!-- <h4><a href="<?= isset($page_data[3]->link1_url) ? $page_data[3]->link1_url : '/home/listing' ?>"><?= isset($page_data[3]->link1_label) ? $page_data[3]->link1_label : 'Start a Group FaceTime call ' ?><i class="fa fa-angle-right" aria-hidden="true"></i> </a></h4> -->
						</div>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="">
			<p style="font-size: 20px;" class="my-5">Whether you’re a hotel looking for an easier way to scale the framing for your growing portfolio of
				properties or an artist searching for the perfect frame for your artwork, we can provide a stress-free
				service fulfilling your requirements.<br><br>
				When you partner with us, you get dedicated support, an easy ordering process, wholesale pricing and
				quick turnaround.
			</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service.jpg'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/artists'); ?>"> Artists ></a></h4>
						<p class="card-text">Find out more about the custom framing options that we provide to artists throughout the country.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service2.png'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/corporate'); ?>""> Corporate ></a></h4>
						<p class="card-text">We work with businesses of all size to ensure that their photos and certificates stand out from the crowd.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service3.png'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/retail'); ?>""> Retail ></a></h4>
						<p class="card-text">We frame menus, photographs, painting and lots more for the retail industry. Find out more here.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service4.png'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/photographers'); ?>""> Photographers ></a></h4>
						<p class="card-text">We work with photographers to help their work shine.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service5.jpg'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/interior'); ?>""> Interior Design ></a></h4>
						<p class="card-text">Quality custom frames often compliment the work of interior designers. Find out more here.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service6.jpg'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/education'); ?>""> Education ></a></h4>
						<p class="card-text">We often work with schools, colleges and universities to ensure that their certificates and photographs look elegant and high quality.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card text-left border-0">
					<img class="card-img-top" src="<?= base_url('assets/imagess/service7.png'); ?>" alt="">
					<div class="card-body">
						<h4 class="card-title"><a href="<?= base_url('home/professionals'); ?>""> Professionals ></a></h4>
						<p class="card-text">Find out more about the custom framing options that we provide to professionals
							throughout the world.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="product_main_img_2"
			style="background-image: url(<?= base_url((isset($page_data[5]->bg_img) ? $page_data[5]->bg_img : 'assets/images/banner-hero-giveback-support.image.large_2x.jpg')); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<div style="text-align: left;width: 85%;">
							<h2 style="text-align: left;padding: 0px;">
								<?= isset($page_data[5]->main_heading) ? $page_data[5]->main_heading : 'True custom framing' ?>
							</h2>
							<p><?= isset($page_data[5]->sub_heading) ? $page_data[5]->sub_heading : 'If you’ve just been staring at a blank wall space, or have a collection of photos or artwork that you’ve been waiting to frame, definitely consider working with us. No matter what part of the process you’re in, we’re here to help make your dreams a reality' ?>
							</p>
							<a
								href="<?= isset($page_data[5]->link1_url) ? $page_data[5]->link1_url : '/home/listing' ?>"><?= isset($page_data[5]->link1_label) ? $page_data[5]->link1_label : 'Learn more ' ?><i
									class="fa fa-angle-right" aria-hidden="true"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
