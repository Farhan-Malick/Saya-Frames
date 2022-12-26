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
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Frames For Education' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">SAYA Art & Custom Framing has a wealth of framing experience in educational institutions and has provided a first-class picture framing service schools , colleges and universities over the years.
 
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
			<p class="mt-5" style="font-size:20px"><b>Take advantage of our discounted picture framing prices for educational institutions and let us help with your next frame requirement.</b></p>
            <p>We like nothing more than to undertake an educational building transformation project, to give students a learning environment that they’ll enjoy. No matter the size or complexity, your custom framing project will be in good hands and we’ll work within your time frames, so you have one less thing to worry about. Whatever your budget, we will advise you on the best solutions throughout your project.</p>
            <img class="img-fluid my-4" width="100%" src="<?= base_url('assets/imagess/service6.jpg'); ?>" alt="">
            <h5>For Education</h5>
            <p>Whether School, College  or University it is require lots of picture frames for various items and situations, which is why we have created a product range specific to schools and their needs. We have a vast array of made to measures picture frames and mounts to choose from.</p>
            <h5>Education Discount</h5>
            <p>SAYA Art & Custom Framing offers education pricing on all frames and mounts to those buying for schools, universities or colleges. Our picture frames are used throughout the education system, framing items such as student artwork and certificates to health and safety notices and more.</p>
            <h3>What can we frame?</h3>
            <ul>
                <li>Certificates (sports, achievements, awards)</li>
                <li>Notices (fire routes, H&S)</li>
                <li>Posters (inspirational, promotional)</li>
                <li>Photographs (classes, staff, events)</li>
                <li>Exhibitions and Students artwork (mosaics, ceramics, oil paintings)</li>
                <li>Decorative (classrooms, science labs, teacher areas, corridors)</li>
                <li>Presentations</li>
                <li>School Events</li>
            </ul>
            <h5>Safety</h5>
            <p>Safety is one of the key concerns when making any product purchase for schools and so we offer a range of products to help eliminate the risk posed to children. Our custom and ready-made frames come with crystal clear acrylic glazing as standard, instead of glass. This material is much safer and will not smash like glass. We have a range of security fixings which fix the frames to the wall securely, preventing them from falling when brushed.</p>
            <h5>Get in Touch</h5>
            <p>If you’re looking for stunning picture frame solutions, please do get in contact with us. Take a look at some of our recent school framing projects for inspiration, including a high school corridor revamp and framed ceramic murals for an Art Department.</p>
        </div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
