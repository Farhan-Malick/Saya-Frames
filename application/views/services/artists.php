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
								<?= isset($page_data[3]->main_heading) ? $page_data[3]->main_heading : 'Framing For Artists & Galleries' ?>
							</h2>
							<p style="font-size: 18px;margin-bottom:0;">Nicely Framed has supplied custom made picture frames and accessories to many artists and art galleries over the years.
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
		<div class="col-10">
            <p class="mt-5">Whether you’re an amateur or professional artist, a University student with some pieces of artwork to frame or you own an art gallery and require a picture framing service, we are here to help.</p>
            <p>Working together we will be able to find your perfect picture frame moulding at the right price along with high quality standards and a professional attitude.</p>
            <p>Picture framing can often be overlooked once the hard work of creating an artwork has been completed, however it can accentuate key features in your art and complement it. A picture frame is the finishing touch, the element that completes and elevates a painting, presenting it to the viewer in the best possible light. Glance through your artwork and select any key colours before deciding whether you want the frame to blend or contrast with the colours. Picture frames are also fundamental in protecting a piece of art from damage from substances like dirt and dust.</p>
            <p>We can manufacture wholesale quantities and ship them to you or your business, ready for you to insert your artwork at your leisure.</p>
            <h3>What we offer</h3>
            <ul>
                <li>Extensive choice of frame colours & styles</li>
                <li>Over-sized and large picture framing available</li>
                <li>Various mounting options</li>
                <li>Float Framing</li>
                <li>Box framing</li>
                <li>Conservation framing as standard</li>
            </ul>
            <h5>Picture Mounting</h5>
            <p>Mounts are a great way of preventing the artwork from contacting the frame and add further protection against dirt and dust. Our picture mounts have a non-acidic surface so they’re ideal for those special and precious possessions.</p>
		</div>
	</div>
</div>
<script>
	$(".fullDiv").click(function () {
		window.location = $(this).find("a").attr("href");
		return false;
	});
</script>
