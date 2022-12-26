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
    p, p + ul li{
        font-size: 17px;
        letter-spacing: -0.85px;
        margin-bottom: 10px;
    }
    h3{
        margin-top: 50px;
    }
    h5{
        margin-top: 30px;
    }
    p:last-of-type{
        margin-bottom: 50px;
    }
    
</style>
<div class="container-fluid">
	<div class="row">
		<div id="product_main_img_6"
			style="background-image: url(<?= base_url((isset($page_data[3]->bg_img) ? $page_data[3]->bg_img : 'assets/images/e4983638-5e5b-4541-951d-ab89572075d6_Ombre-sponge-painting-1000x667.jpg')); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div style="">
							<h2 style="text-align: left;padding: 0px;">
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Picture Framing For Photographers' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Find out more about the services SAYA Art & Custom Framing provides to photographers for their portraits and photographs.
 
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
		<div class="col-md-10">
			<p class="mt-5" style="font-size:20px"><b>Picture framing and mounting are the tools you need to make your best photos shine and doing this well gives the photographer many more display options than simply using basic frames. A well-designed combination of frames and mounts forms part of the visual expression of a displayed photo, separating it from its surroundings and giving it more visual weight.</b></p>
            <img class="img-fluid my-4" width="100%" src="<?= base_url('assets/imagess/service4.png'); ?>" alt="">
            <h5>Photography Framing</h5>
            <p>At SAYA Art & Custom Framing (Pvt.) Ltd. choose from many of combinations of high-quality custom-made picture frames and ready-made picture frames and mounts to complement your photographs perfectly. Our state-of-the-art website makes shopping for picture frames for photography easy and affordable. Our picture frames are made of  the best mouldings and latest equipment by our expert framers.</p>
            <h5>Mounting</h5>
            <p>Photos will always be prone to bending and marking and need protection from moisture and airborne pollutants. Picture mounts aim to prevent this and a mounted photo is more easily handled during the framing process with less risk of damaging the print. Mounts are one of our most popular photography presentation products as they can improve the visual appeal of your photograph, bringing out the colours of your photos making them look bright and vivid. We have reasonable mount colours and styles to choose from and mounts can be ordered with or without a frame.</p>
            <h5>Printing</h5>
            <p>Our professional printing services produce outstanding results with the use of High Quality Glossy and Luster paper. This paper yields high image quality digital prints that make it suitable for professional uses as portrait or commercial photography.</p>
        </div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
