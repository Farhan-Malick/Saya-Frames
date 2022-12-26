<style>
	div
	{
		display: block;
		position: relative;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}

	.product_details
	{
		width: 100%;
		background: #FFFFFF;
		z-index: 2;
	}

	.details_image_large
	{
		width: 100%;
	}
	.details_image_large img
	{
		/* max-width: 100%; */
	}
	.details_image_thumbnails
	{
		margin-top: 17px;
	}
	.details_image_thumbnail
	{
		width: calc((100% - 51px) / 6);
		cursor: pointer;
		margin-right: 10px;
	}
	.details_image_thumbnail::after
	{
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: solid 1px #6c6a74;
		content: '';
		background: transparent;
		pointer-events: none;
		visibility: hidden;
		opacity: 0;
		-webkit-transition: all 200ms ease;
		-moz-transition: all 200ms ease;
		-ms-transition: all 200ms ease;
		-o-transition: all 200ms ease;
		transition: all 200ms ease;
	}
	.details_image_thumbnail.active::after,
	.details_image_thumbnail:hover::after
	{
		visibility: visible;
		opacity: 1;
	}
	.details_image_thumbnail img
	{
		max-width: 100%;
	}
</style>
<!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/product.css'); ?>"> -->
<div class="container" style="margin-top: 40px;margin-bottom: 40px">
	<div class="row">
		<?php
		if (!empty($product)) {
		?>
			<div class="col-md-5">
				<div class="jzoom">
					<img src="<?= base_url($product['product_img']) ?>" width="100%">
				</div>
			</div>

			<div class="col-md-7">
				<div class="p_details">
					<p><?= $product['description'] ?></p>
					<hr>
					<p><?= $product['product_name'] ?></p>
					<p><small>Price: <?= $product['price'] ?></small></p>
					<?php
					$price = $product['price'];
					$discount = $product['discount'] / 100;
					$discount = $discount * $price;
					$new_price = $price - $discount;
					if($product['discount'] != 0){
						?>
						<p style="color:#EF4036"><small><?= $product['discount'] ?>% off: $<?= $new_price ?></small></p>
						<?php
					}
					?>
					<span style="font-size: 13px; color: gray;">
						<?= $product['features'] ?>
					</span>
					<select>
						<option>Select Color</option>
						<?php if ($product['colors'] != "") {
							$colors = explode(',', $product['colors']);
							foreach ($colors as $color) {
						?>
								<option><?= $color ?></option>
						<?php }
						} ?>

					</select>
				</div>
				<div class="input-group" style="width: 20%;">
					<span class="input-group-btn">
						<a type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
							<span class="fa fa-minus"></span>
						</a>
					</span>
					<input type="text" name="quant[1]" class="form-control input-number" id="input-number" value="1" min="1" max="10">
					<span class="input-group-btn">
						<a type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
							<span class="fa fa-plus"></span>
						</a>
					</span>
				</div>
				<p><small>In Stock</small></p>
				<div class="shopping_btn">
					<button onClick="addToCart()">ADD TO SHOPPING BAGs</button>
				</div>
			</div>
		<?php } else { ?>
			<div class="col-md-5">
				<div class="details_image">
						<div class="details_image_large jzoom"><img  src="<?= base_url('assets/images/listing_1.jpg') ?>"
								alt=""></div>
						<div class="details_image_thumbnails d-flex flex-row align-items-start">
							<div class="details_image_thumbnail active"
								data-image="<?= base_url('assets/images/listing_1.jpg') ?>"><img
									src="<?= base_url('assets/images/listing_1.jpg') ?>" alt=""></div>
							<div class="details_image_thumbnail"
								data-image="<?= base_url( 'assets/imagess/details_2.jpg')?>"><img
									src="<?= base_url( 'assets/imagess/details_2.jpg')?>" alt=""></div>
							<div class="details_image_thumbnail"
								data-image="<?= base_url( 'assets/imagess/details_3.jpg')?>"><img
									src="<?= base_url( 'assets/imagess/details_3.jpg')?>" alt=""></div>
							<div class="details_image_thumbnail"
								data-image="<?= base_url( 'assets/imagess/details_4.jpg')?>"><img
									src="<?= base_url( 'assets/imagess/details_4.jpg')?>" alt=""></div>
						</div>
					</div>
				<!-- <div class="jzoom">
					<img src="<?= base_url('assets/images/listing_1.jpg') ?>" width="100%">
				</div> -->
			</div>

		
		<?php } ?>



	</div>
</div>
<?php require_once(__DIR__ . "/you_may_like.php"); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="<?= base_url('assets/js/jzoom.min.js'); ?>"></script>
<script>
	$('.jzoom').jzoom({
		bgColor: "#222"
	});
</script>
<script>
	//plugin bootstrap minus and plus
	//http://jsfiddle.net/laelitenetwork/puJ6G/
	
	function addToCart(){
		$.ajax({
				type: "post",
				url: "<?php echo base_url('home/addToCart'); ?>",
				data: {
						  id:<?php echo $product['id'] ?>,
   					      name:'<?php echo $product['product_name'] ?>',
						  qty:document.getElementById("input-number").value,
					      price:'<?php echo $product['price'] ?>',
					      discount:'<?php echo $product['discount'] ?>',
						  product_img:'<?php echo $product['product_img'] ?>',
					}, 
				cache: false,
				success: function(res){
					swal('Product added to cart successfully').then(()=>{
							window.location.replace("<?php echo base_url('home/detail/'.$product['id']); ?>");
						})
				}
			});
	}
	$('.btn-number').click(function(e) {
		e.preventDefault();
		fieldName = $(this).attr('data-field');
		type = $(this).attr('data-type');
		var input = $("input[name='" + fieldName + "']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if (type == 'minus') {

				if (currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
				}
				if (parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}

			} else if (type == 'plus') {

				if (currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
				}
				if (parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}

			}
		} else {
			input.val(0);
		}
	});
	$('.input-number').focusin(function() {
		$(this).data('oldValue', $(this).val());
	});
	$('.input-number').change(function() {

		minValue = parseInt($(this).attr('min'));
		maxValue = parseInt($(this).attr('max'));
		valueCurrent = parseInt($(this).val());

		name = $(this).attr('name');
		if (valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
		} else {
			alert('Sorry, the minimum value was reached');
			$(this).val($(this).data('oldValue'));
		}
		if (valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
		} else {
			alert('Sorry, the maximum value was reached');
			$(this).val($(this).data('oldValue'));
		}


	});
	$(".input-number").keydown(function(e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
			// Allow: Ctrl+A
			(e.keyCode == 65 && e.ctrlKey === true) ||
			// Allow: home, end, left, right
			(e.keyCode >= 35 && e.keyCode <= 39)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
</script>
<script src="<?= base_url('assets/js/products.js'); ?>"></script>
<!-- <script src="<?= base_url('assets/js/isotope.pkgd.min.js'); ?>"></script> -->