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
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Frames For Retail' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Easy-Frame has made buying picture frames, photo frames, poster frames,
                            standard size frames and picture frame accessories straightforward, fun and affordable.
 
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
			<p class="mt-5" style="font-size:20px"><b>We are a manufacturer and so we can offer huge discounts on quality products along with a speedy service.</b></p>
            <img class="img-fluid my-4" width="100%" src="<?= base_url('assets/imagess/service3.png'); ?>" alt="">
            <p>Easy-Frame has created a state-of-the-art website which has simplified buying picture frames online and enables customers with little or no knowledge of how to buy a picture frame to quickly create, preview and purchase their new frame with ease.</p>
            <p>Our website sets us apart from all other online framers and we are also unbeatable for quality, customer service, speed and price.</p>
            <p>Unlike other companies that simply dabble in picture frames, we’re committed to those who create and appreciate art, and helping them share and show it. Every order is personally manufactured and packaged with care by our experienced picture framers. We fulfil orders of any size, in any quantity with no required minimums and are renowned for supplying over sized and large picture frames, which many online picture framers are unable to do. We also have the facilities and processes in place to fulfil large volume orders.</p>
            <h5>SERVICE</h5>
            <p>Our expert framers are experienced and skilled in handcrafting custom-made frames, and customer service is top priority. Our customer service staff will respond quickly to any email or phone enquiries and if there are any issues regarding stock of your frame we will contact you as soon as possible to offer the best alternative. If you have any questions get in touch today.</p>
            <h5>SPEED</h5>
            <p>If you have visited a high street framer in the past, you will know that they can take weeks or even up to a month to manufacture your frame. At SAYA Art & Custom Framing we have a well laid out factory and efficient procedures in place to ensure we complete all orders in a timely fashion. We take less than a week in most cases and priority orders leave our factory within 3 business days. In some cases, we can offer next day dispatch.</p>
            <h5>PRICE</h5>
            <p>We have a picture frame, box frame, standard size frame, multi-photo frame and picture mounts for every budget. All of our frames and picture mounts are affordable and be reassured that quality has not been compromised. We offer deals online regularly giving customers unbeatable discounts on all our product range and we have many styles, colours and types of picture frames to suit all tastes.</p>
		</div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
