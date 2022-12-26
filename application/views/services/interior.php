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
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Framing For Interior Designers' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Our framing work has been featured in many high profile establishments nationwide, making it perfect for Interior Designers.
 
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
			<p class="mt-5" style="font-size:20px"><b>Interior designers, architects and fit-out specialists are faced with challenges every day. Challenges that are less fun and more like work. SAYA Art & Custom Framing can relieve some of this stress and help you deal with the logistics around custom framing and shipping all over the country, by providing a wall decor solution including a bespoke picture framing service, framed mirrors and print and art sourcing service.</b></p>
            <p>SAYA Art & Custom Framing has worked with some of the top interior designers in the in the country over the years providing a first-class service and high-quality bespoke picture frames, mirrors, mounts and accessories. All our frames are made in our Islambad factory. We offer a large selection of PVC & wooden frames which are available as custom sized frames and in standard sizes and they range from modern styles to rustic frames and we provide various types of glazing including acrylic . Our picture frames cater for a large range of interior styles, colour schemes and budgets.</p>
            <img class="img-fluid my-4" width="100%" src="<?= base_url('assets/imagess/service5.jpg'); ?>" alt="">
            <p>Place your order online or get in touch with us and tell us a little bit about your brief or the decor style that you are creating, and we can interpret your ideas and help you select the best style and colour of picture framing for your project. We can offer a tailored design solution to interior designers, architects and fit-out specialists.</p>
            <p>Once you have placed your order for your picture frames we can work with you to fulfil your project deadlines and keep you informed every step of the way, especially when organising a suitable delivery date. We can offer next day turnaround for urgent orders.</p>
            <h3>What we offer</h3>
            <ul>
                <li>Extensive choice of frame colours & styles</li>
                <li>Over-sized and large picture framing available</li>
                <li>Various mounting options</li>
                <li>Float Framing (for paintings)</li>
                <li>Box framing</li>
                <li>Conservation framing as standard</li>
                <li>Custom framed mirrors and unframed mirrors</li>
            </ul>
            <br><br>
        </div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
