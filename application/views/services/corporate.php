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
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Frames For Corporate' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Easy-Frame has supplied a first-class picture framing service to many business, trade and government sectors over the years. 
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
			<p class="mt-5">With a state-of-the-art website and economical manufacturing techniques, we are at the leading edge of picture framing and pride ourselves on providing cost effective, bespoke picture frames. Whether your project is small or large, we would love to hear from you.</p>
            <h3>Why Choose Easy-Frame?</h3>
            <ul>
                <li>Quality – Our picture frames are manufactured by experienced expert framers from the finest imported frame mouldings sourced from the China and Krea and go through quality checks at every stage of the manufacturing process so that we deliver perfect picture frames to you.</li>
                <li>Price – Looking forward to receive discounted pricing specifically for the corporate, trade and government sectors. Our picture framing prices are very competitive and our levels of service second to none.</li>
                <li>Customer Support – A customer is the most important visitor on our website and we go above and beyond to ensure our customer is completely satisfied with their picture framing requirement. We are available to contact via email, phone or online chat.</li>
                <li>Experience – We have vast experience dealing with large and small corporations and government bodies on a weekly basis. Our expert framers can deal with any request and advise solutions.</li>
            </ul>
            <img class="img-fluid my-4" width="100%" src="<?= base_url('assets/imagess/service2.png'); ?>" alt="">
            <h5>Our Factory</h5>
            <p>Within the walls of our framing factory we have an extensive range of picture frame moulding and picture mounts ready to be selected and cut into custom frames. We are equipped to manufacture large made to measure frames with ease, and many other online picture framers cannot facilitate the manufacture of such oversized frames. Our advanced technology and smart machinery assist our expert framers in manufacturing handmade frames, without breaking the bank.</p>
            <h5>Long Established</h5>
            <p>The picture frame manufacturing business in our factory began over 14 years ago as a small operation and it has since been flourished with the creation of SAYA Art & Custom Framing (Pvt.) Ltd. in 2020. We launched a new website in 2021. The business continues to grow, and we are always innovating to keep ahead of the game. Customer service has been, and will continue to be our top priority, ensuring complete satisfaction from the point of sale right through to delivery and beyond. Every order, no matter the size or the customer, is dealt with professionally. Our expert framers have been valued members of staff for many years and have a wealth of knowledge and experience in picture frame manufacturing. They are equipped to deal with any question and offer the best solution based on the customers needs.</p>
		</div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
