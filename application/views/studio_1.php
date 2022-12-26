<style>
	#searchBar {
		border: none;
		background-color: transparent;
		box-shadow: none;
		color: white;
		margin-right: 120px;
		font-weight: 600;
		width: 470px;
		font-size: 18px
	}
	#searchbox i.fa.fa-close:hover{
		cursor: pointer;
		color: white;
	}

	.searchBoxUL {
		list-style: none;
	}

	.searchBoxUL li a {
		color: #1d1d1f;
		text-decoration: none
	}

	.searchBoxUL li a:hover {
		color: #06c;
	}

	.searchBoxUL li:hover {
		background-color: #f5f5f7;
		color: #06c;
	}

	#searchBarOuterDIV {
		position: absolute;
		left: 50%;
		z-index: 9999;
		display: none;
	}

	#searchBarInnerDIV {
		position: relative;
		left: -50%;
		width: 650px;
		height: calc(100% - 44px);
		background-color: white;
		padding: 24px 35px;
		border-bottom-left-radius: 18px;
		border-bottom-right-radius: 18px;
	}

	#searchBarInnerDIV p {
		font-size: 13px
	}

	#searchBarInnerDIV ul li {
		font-size: 14px;
		line-height: 2;
	}

	#searchBarInnerDIV ul {
		padding-left: 15px;
	}

	.navbar-expand-lg .navbar-nav .nav-link {
		padding-right: 1.55rem;
		padding-left: 1.55rem;
	}

	.dropdown-item.active,
	.dropdown-item:active {
		background-color: transparent
	}

	.navbar-dark .navbar-nav .nav-link:focus,
	.navbar-dark .navbar-nav .nav-link:hover {
		color: white !important
	}

	.dropdown-item:focus,
	.dropdown-item:hover {
		color: black !important;
		text-decoration: none;
		background-color: none;
	}

	.dropdown-menu {
		background-color: #fff;
		min-width: 15rem;
	}

	.dropdown-item {
		font-weight: 600;
		padding: 0.5rem;
		border-top: 1px solid #d2d2d7 !important;
		color: white !important;
		width: 200px;
		margin: 0 15px;
	}


	.form-control:focus {
		box-shadow: none
	}

	.caret-off::before {
		display: none;
	}

	.caret-off::after {
		display: none;
	}

	.label {
		display: block;
		/* font-size: 0.73rem; */
		font-size: 11px;
		color: black;
		height: 25px;
		width: 105px
	}

	.label a {
		/* color: black; */
		color: #f5f5f7;
	}

	.label a:hover {
		color: #06c !important;
		text-decoration: none
	}

	.navbar {
		/* padding: .3rem 1rem; */
		height: 48px;
		max-height: 44px;
	}

	.nav-item {
		margin-right: 45px;
	}

	.nav-item:last-child {
		margin-right: 0;
	}

	.nav-item .nav-link {
		opacity: 0.8;
		font-size: 14px;
		color: white !important;
		font-weight: 400;
		padding: 0 !important;
	}

	.nav-item .nav-link:hover {
		opacity: 1;
		color: white !important;
	}

	.fa-2x {
		font-size: 1.5em;
	}

	.icon_style {
		vertical-align: middle;
		height: 35px;
	}

	.hover_text {
		margin-top: 5px;
	}

	img.hover_img:hover~span.hover_text a {
		color: #06c !important;
		cursor: pointer !important;
	}

	img.hover_img:hover {
		cursor: pointer !important;
	}

	.navbar-brand {
		margin-right: 50px;
		padding: 3px;
	}

	.nav-logo {
		z-index: 100;
		/* margin-top: 20px; */
		/* position: relative; */
		opacity: 1 !important;
	}

	.nav-logo img {
		height: 42px;
		/* margin-top: 5px; */
	}

	@media screen and (max-width: 980px) {
		.navbar {
			height: auto;
			max-height: 100%;
		}

		.nav-item {
			margin: 0;
		}

		.dropdown hr {
			border-top: 1px solid white;
			margin: 10px 0;
		}

		.dropdown {
			width: 100%;
		}

		#searchBar {
			margin-right: 20px;
			width: 320px;
		}

		#searchBarInnerDIV {
			width: 90vw;
		}
	}

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  justify-content-between"
	style="background-color: #333333!important">
	<a class="navbar-brand d-lg-none" href="#">
		<img style="height: 40px;" src="<?= base_url('assets/images/saya.png'); ?>" />
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
		aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="w-100" id="main_menu">

		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">

			<ul class="navbar-nav" style="display : flex; align-items : center; justify-content: center;">
				<li class="nav-item">
					<a class="nav-link nav-logo" href="<?= base_url(); ?>">
						<img src="<?= base_url('assets/imagess/nav_logo.png'); ?>" />
					</a>

				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/about'); ?>" >
						About Us
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/virtual_art_gallery'); ?>"
						 onclick="showPanel('gallery')">
						Virtual Art Gallery
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/studio'); ?>" 
						onclick="showPanel('studio')">
						Framing Studio
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/products'); ?>" 
						onclick="showPanel('products')">
						Products
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/services'); ?>" 
						onclick="showPanel('services')">
						Services
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/what_we_frame'); ?>" 
						onclick="showPanel('frame')">
						What We Frame
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/framming_supplies'); ?>"
						 onclick="showPanel('supplies')">
						Framing Supplies
					</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/contact'); ?>"
						>Contact</a>
					<hr class="d-block d-lg-none">
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="#"  onclick="showSearch()">
						<i class="fa fa-search" aria-hidden="true"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="#" id="navbardrop" data-toggle="dropdown"
						>
						<i class="fa fa-shopping-bag mr-2" aria-hidden="true"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right bg-dark"
						style="z-index: 999999;left:-95px;border-radius: 20px;">
						<span class="dropdown-item" href="#"
							style="font-size: 0.9rem;border:none!important;text-align: center;color:white!important;padding: 20px 0;">Your
							Bag is empty.</span>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fa fa-shopping-bag"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Bag</a>
						</span>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="far fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Favourites</a>
						</span>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fas fa-box"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Orders</a>
						</span>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Account</a>
						</span>
						<?php if ($this->session->userdata('logged_in')) { ?>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
								href="<?= base_url('login/logout'); ?>">Logout</a>
						</span>
						<?php } else { ?>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
								href="<?= base_url('login'); ?>">Sign in</a>
						</span>
						<?php } ?>
					</div>
				</li>
			</ul>
		</div>
		<!-- <a class="navbar-brand d-inline-block-sm d-lg-none" href="<?= base_url(); ?>">
						<img src="<?= base_url('assets/imagess/nav_logo.png'); ?>" />
		</a> -->
	</div>
	<div class="container" id="searchbox" style="display: none;padding: .3rem 1rem;">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<ul class="navbar-nav">
				<li class="nav-item" style="margin: 0 auto; width: 820px;">
					<form class="form-inline md-form form-sm mt-0" style="color: #67676b;">
						<i class="fa fa-search" aria-hidden="true"></i>
						<input style="height: 33px;" class="form-control form-control-sm ml-3 w-65" autocomplete="off"
							id="searchBar" type="text" placeholder="Search sayaframes.com" aria-label="Search">
						<i class="fa fa-close" aria-hidden="true" onclick="hideSearch()"></i>
					</form>
				</li>
			</ul>
		</div>
		<div class="col-md-2"></div>
	</div>
</nav>
<div id="searchBarOuterDIV">
	<div id="searchBarInnerDIV">
		<p style="margin-bottom:0.7rem">QUICK LINKS</p>
		<ul class="searchBoxUL" id="quicklinks" style="margin: 0;">
			<li><a href="#">Find a Store</a></li>
			<li><a href="#">Today at Apple</a></li>
			<li><a href="#">Accessories</a></li>
			<li><a href="#">AirPods</a></li>
			<li><a href="#">iPod</a></li>
		</ul>
		<div id="suggestedserachesDiv">
			<hr style="margin: 18px 0 23px 0;">
			<p style="margin-bottom:0.7rem">SUGGESTED SEARCHES</p>
			<ul class="searchBoxUL" id="suggestedseraches" style="margin: 0;">
				<li><a href="#">Find a Store</a></li>
				<li><a href="#">Today at Apple</a></li>
				<li><a href="#">Accessories</a></li>
				<li><a href="#">AirPods</a></li>
				<li><a href="#">iPod</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="responsive_submenu" style="background-color: black;color:#f5f5f7">
	<div class="container">
		<?php if ($this->router->method == "about1") { ?>
		<div class="row" style="text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<a href="#">
								<img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/History.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="#">History</a></span>
						</td>
						<td>
							<a href="#">
								<img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/Policy.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="#">Process and Policy</a></span>
						</td>
						<td>
							<a href="#">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Our_Values.png'); ?>"
									style="width: 36px;" />
							</a>
							<span class="label hover_text"><a href="#">Our Values</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "virtual_art") { ?>
		<div class="row" id="gallery" style="display: none;text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Upcoming Event (Exhibition)</a></span>
						</td>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Previous Event (Exhibition)</a></span>
						</td>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Artists</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "framming_studio") { ?>
		<div class="row" id="studio" style="display: none;text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Single Art Framing</a></span>
						</td>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Multiple Artwork Framing</a></span>
						</td>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Picture Upload Option for Background Wall</a></span>
						</td>
						<td>
							<i class="fab fa-apple fa-2x icon_style"></i>
							<span class="label"><a href="#">Multiple Frames Display on Wall</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "what_we_frame") { ?>
		<div class="row" style="text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<a href="<?= base_url('home/printing_and_canvas'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Canvas_Paintings.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/printing_and_canvas'); ?>">Painting & Canvas</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/prints_and_posters'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Prints_Posters.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/prints_and_posters'); ?>">Prints
									& Posters</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/educational_and_professional'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Educational.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/educational_and_professional'); ?>">Educational &
									Professional</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/souvenirs'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Military.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/souvenirs'); ?>">Souvenirs</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/mirrors_and_more'); ?>">
								<img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/Mirrors.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/mirrors_and_more'); ?>">Mirrors &
									More</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "products") { ?>
		<div class="row" style="text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<a href="<?= base_url('home/product_exclusive'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Exclusive.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/product_exclusive'); ?>">Exclusive</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/product_painting'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Paintings.png'); ?>"
									style="width: 28px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/product_painting'); ?>">Paintings</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/product_wooden_art'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Wooden_Artwork.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/product_wooden_art'); ?>">Wooden
									Artwork</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/product_prints'); ?>">
								<img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/Prints.png'); ?>"
									style="width: 60px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/product_prints'); ?>">Prints</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "services") { ?>
		<div class="row" style="text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<a href="<?= base_url('home/custom_framming'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Custom_Framing_Services.png'); ?>"
									style="width: 60px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/custom_framming'); ?>">Custom
									Framing Services</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/corporate_services'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Corporate_Services.png'); ?>"
									style="width: 70px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/corporate_services'); ?>">Corporate Services</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/gallery_wall_design'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Gallery_Wall.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/gallery_wall_design'); ?>">Gallery Wall Design</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/printing'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Printing.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/printing'); ?>">Printing</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/screen_printing'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Screen_Printing.png'); ?>"
									style="width: 64px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/screen_printing'); ?>">Screen
									Printing</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/laser_cutting'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Laser_Services_1.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/laser_cutting'); ?>">Laser
									Cutting and Engraving</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>

		<?php if ($this->router->method == "framming_supplies") { ?>
		<div class="row" style="text-align: center;padding:15px 0">
			<div class="col-md-12">
				<table align="center">
					<tr>
						<td>
							<a href="<?= base_url('home/moulding'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Moulding.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a
									href="<?= base_url('home/moulding'); ?>">Moulding</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/mat_board'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Matboard.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/mat_board'); ?>">Mat
									Board</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/glazing'); ?>">
								<img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/Glazing.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/glazing'); ?>">Glazing</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/loose_material'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Framing_Supplies.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/loose_material'); ?>">Loose
									Material</a></span>
						</td>
						<td>
							<a href="<?= base_url('home/other_supplies'); ?>">
								<img class='hover_img'
									src="<?= base_url('assets/images/top_nav_icons/Framing_Supplies.png'); ?>"
									style="width: 42px;" />
							</a>
							<span class="label hover_text"><a href="<?= base_url('home/other_supplies'); ?>">Other
									Supplies</a></span>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#suggestedserachesDiv').hide();

		function load_data(query) {
			$.ajax({
				method: "POST",
				url: '<?= base_url('home / load_search_data ') ?>',
				data: {
					query: query
				},
				success: (response) => {
					if (response !== "") {
						$('#searchBarOuterDIV').show();
						$('#suggestedserachesDiv').show();
						$('#searchBarInnerDIV').html(response);
					} else {
						$('#searchBarOuterDIV').hide();
					}
				}
			});
		}
		$('#searchBar').keyup(function () {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				//load_data();
			}
		});
	});

	function showSearch() {
		$('#main_menu').hide();
		$('#searchbox').show();
		$('#searchBarOuterDIV').show();
		$("#blurBody").css({
			"background-color": "rgba(0, 0, 0, 0.4)",
			"opacity": "0.5",
			"filter": "Alpha(Opacity=50)"
		});
		disableScroll();
	}

	function hideSearch() {
		$('#main_menu').show();
		$('#searchbox').hide();
		$('#searchBarOuterDIV').hide();
		enableScroll();
		$("#blurBody").removeAttr("style")
	}

	function disableScroll() {
		// Get the current page scroll position 
		scrollTop = window.pageYOffset || document.documentElement.scrollTop;
		scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

			// if any scroll is attempted, set this to the previous value 
			window.onscroll = function () {
				window.scrollTo(scrollLeft, scrollTop);
			};
	}

	function enableScroll() {
		window.onscroll = function () {};
	}

	var active_elem = old_elem = ''

	function showPanel(elem) {
		old_elem = active_elem
		active_elem = elem;

		if (old_elem !== '') {
			$("#" + old_elem).slideUp();
		}
		if (old_elem == active_elem) {
			$("#" + old_elem).slideUp();
			active_elem = old_elem = ''
		} else {
			$("#" + active_elem).slideToggle();
		}
	}

	function hidePanel(elem) {
		$("#" + old_elem).slideUp();
	}

</script>
<style>
	.slidecontainer {
		width: 100%;
	}

	.slider {
		-webkit-appearance: none;
		width: 100%;
		height: 10px;
		background: #d3d3d3;
		outline: none;
		opacity: 1;
		-webkit-transition: .2s;
		transition: opacity .2s;
	}

	/* .slider:hover {
        opacity: 1;
    } */

	.slider::-webkit-slider-thumb {
		-webkit-appearance: none;
		appearance: none;
		width: 10px;
		height: 25px;
		background: #2196f3;
		cursor: pointer;
	}

	.slider::-moz-range-thumb {
		width: 10px;
		height: 25px;
		background: #2196f3;
		cursor: pointer;
	}

	.card {
		margin-bottom: 0;
	}

	.card-group-control {
		min-height: 95vh;
		background: transparent linear-gradient(90deg, #060F12 0%, #585E60 100%) 0% 0% no-repeat padding-box;
	}

	.card-header {
		background: transparent linear-gradient(90deg, #060F12 0%, #585E60 100%) 0% 0% no-repeat padding-box;
		/* color: white; */
	}

	.card-header a,
	label {
		color: white;
	}
    .card-header a:hover, .card-header a:focus
    {
		color: white!important;
	}
	.card {
		background-color: transparent;
	}
	.card-group-control-right .card-body{
		background-color: #F3F3F3;
		padding: 47px 37px!important;
	}
	.card-group-control-right .card-body label{
		letter-spacing: 0.16px;
		color: #545871;
		font-size: 16px;
	}
	.btn-color{
		background-color: #060F12E0;
		color: white;
	}
	.select2-selection{
		border-color: #545871;
		font-size: 16px;
	}
	.uniform-uploader .bg-blue{
		background-color: #060F12E0;
		display: flex;
    	align-items: center;
	}
</style>
<!-- Page content -->
<div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="card border-0">
            <div class="card-body p-0">
                <div class="row" style="margin:auto;">
                    <div class="col-md-3 p-0" style="margin-left: -1px; ">
                        <div>
                        

                            <div class="card-group-control card-group-control-right" id="accordion-group">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card">
										<div class="card-body m-auto bg-transparent">
											<img class="my-4" style="max-height: 60px;" src="<?= base_url('assets/images/saya.png'); ?>" alt="">
										</div>
									</div>
                                    <div class="card-header">
                                        <h6 class="card-title">
                                            <a data-toggle="collapse" class="text-default" id="artWorkAccordion" href="#accordion-item-group1">ARTWORK</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
                                        <div class="card-body">

                                            <!-- <div class="form-group">
                                                    <label class="mb-0">Upload an Image*</label>
                                                    <span class="form-text text-muted mb-2 mt-0">(Maximum file size 7MB)</span>
                                                    <input type="file" id="dropzone_file_limits" class="dropzone form-control-uniform-custom">
                                                </div> -->

                                            <div class="form-group">
                                                <label>Upload an Image</label>
                                                <input type="file" id="src_img_studio" class="form-control-uniform-custom">
                                            </div>

                                            <div class="form-group">
                                                <label class="d-block">Is your artwork:</label>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled" value="paper" name="artwork_type" checked data-fouc>
                                                        Paper
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled" value="canvas" name="artwork_type" data-fouc>
                                                        Canvas
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-0">Enter Artwork Width*</label>
                                                <span class="form-text text-muted mb-2 mt-0">(in inches)</span>
                                                <input type="text" id="artwork_width" class="form-control">
                                            </div>
                                            <div class="text-center">
                                                <button style="width: 100%;" onclick="uploadSrcImg()" class="btn btn-color">UPLOAD</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-0 rounded-0">
                                    <div class="card-header">
                                        <h6 class="card-title">
                                            <a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">MATS</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
                                        <div class="card-body" id="mat_alert" style="display: none;">
                                            <div class="alert alert-warning alert-dismissible">
                                                <span class="font-weight-semibold">Please Note:</span> Mat selection is not available for Canvas.
                                            </div>
                                        </div>
                                        <div class="card-body" id="matAccordion" style="display: none;">
                                            <div class="form-group">
                                                <label class="d-block">Choose number of mats:</label>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled" onclick="showMatType()" value="1" name="numMats" data-fouc>
                                                        One
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled" onclick="showMatType()" value="2" name="numMats" data-fouc>
                                                        Two
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled" onclick="showMatType()" value="3" name="numMats" data-fouc>
                                                        Three
                                                    </label>
                                                </div>

                                                <div class="btn-group btn-group-toggle mb-0 mt-2" data-toggle="buttons">
                                                    <label class="btn btn-color" onclick="resetMatsideBar('top')" id="top_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" autocomplete="off" value="top_mat">
                                                        Top Mat
                                                    </label>

                                                    <label class="btn btn-color" onclick="resetMatsideBar('middle')" id="middle_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" value="middle_mat" autocomplete="off">
                                                        Middle Mat
                                                    </label>

                                                    <label class="btn btn-color" onclick="resetMatsideBar('bottom')" id="bottom_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" value="bottom_mat" autocomplete="off">
                                                        Bottom Mat
                                                    </label>
                                                </div>

                                                <span style="font-size: 14px;" class="form-text text-muted mb-3 mt-3">Need help choosing Mats? <i style="cursor: pointer;" class="icon-help ml-2" data-toggle="modal" data-target="#matInfo"></i></span>
                                                <div id="matInfo" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h6 class="modal-title">Matting</h6>
                                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <p>Perhaps the most important factor when selecting a mat is quality. The very best mats available are made from 100cotton rag. The next step down are mats made from alpha cellulose. Both of these are used for conservation grade framing to help preserve the piece being framed. Mats of lesser quality are made with more highly acidic wood pulp. They are more prone to discoloring, but more importantly, they tend to accelerate the deterioration of the art.</p>
                                                                <p>Another consideration when matting is the border widths. There are a lot of variables to think about before making your final decision. It is not as simple as smaller picture get narrower mat border and larger picture gets wider border. Look at the colors and shapes within the art no matter what the size is. Two of the same size picture may look good with different border widths if the shapes are larger in one than the other. Mat borders can also be used to help art fit a wall space better.</p>
                                                                <p>If you are using multiple layers of mat in your design, it typically looks best to vary the widths of the accent colors. For example, for a triple mat your borders could be 4'' for the predominant mat, 3/8'' exposure for the second (middle) layer and 1/8'' showing of the lower mat. In general this will look better than using 4'' 1/4'' 1/4'' which would be the same overall size.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Mats by Color</label>
                                                    <select class="form-control form-control-select2" data-fouc>
                                                        <option value="AK">All</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button style="width: 100%;" class="btn btn-color" onclick="showMatsSidebar()">Select Mats</button>
                                            </div>

                                            <div class="mt-3 mb-3">
                                                <h6 class="mb-0 font-weight-semibold">Selected Mat:</h6>
                                            </div>

                                            <div class="row mb-1" id="topWidth" style="display: none;">
                                                <div class="col-md-4">
                                                    <div style="vertical-align: middle;">Top Mat Width</div>
                                                </div>
                                                <div class="col-md-3" style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput" style="height: 2rem;" id="topSliderInput" value="0.125">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="2" value="0.125" step="0.125" class="slider testSlider" onchange="updateSliderValue('topSlider')" id="topSlider">
                                                </div>
                                            </div>
                                            <div class="row mb-1" id="middleWidth" style="display: none;">
                                                <div class="col-md-4">
                                                    Middle Mat Width
                                                </div>
                                                <div class="col-md-3" style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput" style="height: 2rem;" id="middleSliderInput" value="0.125">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="2" value="0.125" step="0.125" class="slider testSlider" onchange="updateSliderValue('middleSlider')" id="middleSlider">
                                                </div>
                                            </div>
                                            <div class="row mb-1" id="bottomWidth" style="display: none;">
                                                <div class="col-md-4">
                                                    Bottom Mat Width
                                                </div>
                                                <div class="col-md-3" style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput" style="height: 2rem;" id="bottomSliderInput" value="0.125">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="2" value="0.125" step="0.125" class="slider testSlider" onchange="updateSliderValue('bottomSlider')" id="bottomSlider">
                                                </div>
                                            </div>

                                            <!-- <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="form-check form-check-switchery form-check-switchery-double">
                                                        <label class="form-check-label">
                                                            Release all sliders
                                                            <input type="checkbox" id="lockUnlock" onclick="lockUnlockSliders()" class="form-check-input-switchery" data-fouc>
                                                            Lock all sliders
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="card" id="topMats" style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Top Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('topMats')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Mats: 3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                        if (count($mat_colors['top']) > 0) {
                                                            foreach ($mat_colors['top'] as $mat_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;" onclick="saveMatOptions('top', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                        <div style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;"></div>
                                                                        <?= $mat_color['name'] ?>
                                                                    </div>
                                                                </div>
                                                        <?php }
                                                        }
                                                        ?>

                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveMatOptions('top', 'Red');applyMat('Red')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Red
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('top', 'Green');applyMat('Green')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Green
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('top', 'Blue');applyMat('Blue')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Blue
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="middleMats" style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Middle Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('middleMats')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Mats: 3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                        if (count($mat_colors['middle']) > 0) {
                                                            foreach ($mat_colors['middle'] as $mat_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;" onclick="saveMatOptions('middle', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                        <div style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;"></div>
                                                                        <?= $mat_color['name'] ?>
                                                                    </div>
                                                                </div>
                                                        <?php }
                                                        }
                                                        ?>
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveMatOptions('middle', 'Red');applyMat('Red')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Red
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('middle', 'Green');applyMat('Green')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Green
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('middle', 'Blue');applyMat('Blue')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Blue
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="bottomMats" style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Bottom Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('bottomMats')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Mats: 3</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                        if (count($mat_colors['bottom']) > 0) {
                                                            foreach ($mat_colors['bottom'] as $mat_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;" onclick="saveMatOptions('bottom', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                        <div style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;"></div>
                                                                        <?= $mat_color['name'] ?>
                                                                    </div>
                                                                </div>
                                                        <?php }
                                                        }
                                                        ?>
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveMatOptions('bottom', 'Red');applyMat('Red')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Red
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('bottom', 'Green');applyMat('Green')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Green
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveMatOptions('bottom', 'Blue');applyMat('Blue')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Blue
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-0 rounded-0 ">
                                    <div class="card-header">
                                        <h6 class="card-title">
                                            <a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group3">FRAMES</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Collection</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Frames by Color</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Frames by Style</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Frames by Width</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <span style="font-size: 14px;" class="form-text text-muted mb-3 mt-3">Need help choosing Mats? <i style="cursor: pointer;" class="icon-help ml-2" data-toggle="modal" data-target="#frameInfo"></i></span>
                                            <div id="frameInfo" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h6 class="modal-title">Framing</h6>
                                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h6 class="font-weight-semibold mb-0">Frames:</h6>
                                                            <p>To make a smart frame selection, consider Color, Style and Scale. Unless you make greater choices in each category, your frame design will not look its best.</p>

                                                            <h6 class="font-weight-semibold mb-0">Color:</h6>
                                                            <p>Frame can blend or contrast with the art or mat it is adjacent to. Blending colors will bring a subtlety to the design whereas a stronger contrast will be more dramatic. One look may be more appreciated than the other for specific colors and styles of art.</p>

                                                            <h6 class="font-weight-semibold mb-0">Style:</h6>
                                                            <p>It is common to choose a frame that matches or relates to the style of the art, but it isn't always necessary. When framing period pieces it is desirable to choose a matching style. When framing newer art it can be fun to intentionally choose an unexpected style to add interest. There should be a relationship between the art and frame but it may come from a pattern on the moulding replicating the look of something in the art.</p>

                                                            <h6 class="font-weight-semibold mb-0">Scale:</h6>
                                                            <p>Choosing an appropriate width and depth frame is important. The frame needs to be substantial enough to physically support the size and weight of the piece being framed, meaning a heavy plate glass mirror will require a wider frame than a lightweight stretched canvas. A frame should also look supportive of the visual weight of the art. Darker colors, heavy textures and bold patterns can all contribute to the appearance that art is heavier than it may actually be. If framing several sizes of the same print, the frame should get progressively wider for larger sizes to maintain the same sense of balance from one to the next. The era of the art can also guide your selection. Different frame widths were popular at various times in history.</p>

                                                            <h6 class="font-weight-semibold mb-0">Tip:</h6>
                                                            <p>The depth of a frame should be able to accommodate all the contents that will accompany the art, including glass, mats, backings, etc. Deeper frames than needed can also be used to project the art outward or recess it to add depth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3">
                                                <button style="width: 100%;" class="btn btn-color" onclick="showFramesSidebar('outer')">Select Frames</button>
                                            </div>

                                            <div class="card" id="innerFrames" style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Inner Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('innerFrames')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Frame Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Frames: 2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('inner', 'gold');applyFrame('gold')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 1
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('inner', 'blackthin');applyFrame('blackthin')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Black Thin
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('inner', 'gold');applyFrame('gold')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 2
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="middleFrames" style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Middle Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('middleFrames')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Frame Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Frames: 2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('middle', 'blackthin');applyFrame('blackthin')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Black Thin
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('middle', 'gold');applyFrame('gold')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 2
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('middle', 'blackthin');applyFrame('blackthin')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 1
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="outerFrames" style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Outer Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('outerFrames')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Search by Frame Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Frames: 2</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('outer', 'gold');applyFrame('gold')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 2
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('outer', 'blackthin');applyFrame('blackthin')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Black Thin
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div onclick="saveFrameOptions('outer', 'gold');applyFrame('gold')">
                                                                        <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                        Gold 1
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3">
                                                <button style="width: 100%;" id="stackBtn" class="btn btn-color" onclick="stackFrames()">Click To Stack Frames</button>
                                            </div>

                                            <div style="border: 1px solid grey; padding: 20px;">
                                                <span id="frameInfoMsg">Choose Frame From Right Side Popup.</span>
                                                <div id="stackedFrameDiv" style="display: none;">
                                                    <style>
                                                        .btn_custom {
                                                            background-color: transparent;
                                                            color: white;
                                                        }
                                                    </style>
                                                    <table class="table" style="background-color: #E2DBD5;">
                                                        <tr>
                                                            <td style="padding: 0;"><span class="ml-2">Frames:</span></td>
                                                            <td style="padding: 0;" align="right">
                                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                                    <label class="btn btn-sm btn_custom active" onclick="loadInnerFrames();showFramesSidebar('inner');" id="frame1" style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position" autocomplete="off" value="inner" checked>
                                                                        1
                                                                    </label>

                                                                    <label class="btn btn-sm btn_custom" id="frame2" onclick="loadMiddleFrames();showFramesSidebar('middle');" style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position" value="middle" autocomplete="off">
                                                                        2
                                                                    </label>

                                                                    <label class="btn btn-sm btn_custom" id="frame3" onclick="loadOuterFrames();showFramesSidebar('outer')" style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position" value="outer" autocomplete="off">
                                                                        3
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <div class="mt-3" style="border: 1px solid;background-color: #cfcfcf;">
                                                        <div class="ml-2 mt-1">
                                                            <span><b>Outer</b></span>
                                                        </div>
                                                        <div style="border: 1px solid;padding: 10px;margin: 0 20px 20px 20px;background-color: #e7e7e7;">
                                                            <div style="text-align: center;">
                                                                <span><b>Middle</b></span>
                                                                <div style="border: 1px solid;padding: 10px;margin: 0 10px 10px 10px;background-color: white;">
                                                                    <div style="text-align: right;margin: 0 5px 5px 5px;">
                                                                        <span><b>Inner</b></span>
                                                                        <div style="background-color: black;height: 30px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-0 rounded-0 ">
                                    <div class="card-header">
                                        <h6 class="card-title">
                                            <a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group4">WALL COLOR</a>
                                        </h6>
                                    </div>
                                    <style>
                                        .colorsBoxes {
                                            height: 17px;
                                            width: 17px;
                                            display: inline-block;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <div id="accordion-item-group4" class="collapse" data-parent="#accordion-group">
                                        <div class="card-body">
                                            <label>Choose Your Color Palette:</label>

                                            <div>
                                                <div class="card mb-0 rounded-bottom-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a data-toggle="collapse" class="text-default" href="#collapsible-item-group1">BENJAMIN MOORE</a>
                                                        </h6>
                                                    </div>
                                                    <style>
														.colorsBoxes {
															height: 20px;
															width: 20px;
															display: inline-block;
															cursor: pointer;
															border-radius: 50px;
														}
														.color-pallete{
															padding: 16px  ;
														}

													</style>
                                                    
                                                    <div id="collapsible-item-group1" class="collapse show">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['benjamin'])) {
                                                                    foreach ($wall_colors['benjamin'] as $wall_color) { ?>
                                                                        <div class="col-md-3">
                                                                            <div style="text-align: center;" onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                                <div style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;"></div>
                                                                            </div>
                                                                        </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('black')" style="background-color: black;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('red')" style="background-color: red;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('yellow')" style="background-color: yellow;"></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-0 rounded-0 border-y-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group2">VIBRANT COLORS</a>
                                                        </h6>
                                                    </div>

                                                    <div id="collapsible-item-group2" class="collapse">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['vibrant'])) {
                                                                    foreach ($wall_colors['vibrant'] as $wall_color) { ?>
                                                                        <div class="col-md-3">
                                                                            <div style="text-align: center;" onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                                <div style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;"></div>
                                                                            </div>
                                                                        </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('black')" style="background-color: black;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('red')" style="background-color: red;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('yellow')" style="background-color: yellow;"></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card rounded-top-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group3">MUTED COLORS</a>
                                                        </h6>
                                                    </div>

                                                    <div id="collapsible-item-group3" class="collapse">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['muted'])) {
                                                                    foreach ($wall_colors['muted'] as $wall_color) { ?>
                                                                        <div class="col-md-3">
                                                                            <div style="text-align: center;" onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                                <div style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;"></div>
                                                                            </div>
                                                                        </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('black')" style="background-color: black;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('red')" style="background-color: red;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes" onclick="applyColor('yellow')" style="background-color: yellow;"></div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card rounded-top-0">
                                    <div class="card-header">
                                        <h6 class="card-title">
                                            <a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group5">WALL IMAGE</a>
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group5" class="collapse" data-parent="#accordion-group">
                                        <div class="card-body">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled" onclick="wallImg()" name="wall_img" value="upload" data-fouc>
                                                    Upload
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled" onclick="wallImg()" name="wall_img" value="gallery" data-fouc>
                                                    Select image from Gallery
                                                </label>
                                            </div>

                                            <div class="form-group mt-3" id="uploadImgBtn" style="display: none;">
                                                <label>Upload an Image</label>
                                                <input type="file" id="bg_img_studio" class="form-control-uniform-custom" onchange="uploadStudioBgImg()">
                                            </div>

                                            <div class="text-center mt-3" style="display: none;" id="galleryImgBtn">
                                                <button style="width: 100%;" onclick="showGallerySidebar()" class="btn btn-color">Select Wall Image</button>
                                            </div>
                                            <div class="card" id="gallerySidebar" style="position: absolute; top: -3px; left: 315px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Wall Image</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item" onclick="closeSideBar('gallerySidebar')"><i class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row" style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <img class="card-img img-fluid" onclick="changeBg('<?= base_url('assets/images/placeholder.jpg') ?>')" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                    asdasd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                    fdgsfd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid" src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
                                                                    vrseg
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div id="testDI">
                            <div class="image-cropper-container mb-3" style="height: 600px;padding: 35px 25px;text-align: center;overflow-y: scroll;background-image: none;">
                                <img src="" alt="" class="cropper" id="demo-cropper-image">
                            </div>
                            <ul class="fab-menu fab-menu-fixed fab-menu-bottom-right" data-fab-toggle="hover">
                                <li>
                                    <a class="fab-menu-btn btn bg-teal-400 btn-float rounded-round btn-icon">
                                        <i class="fab-icon-open icon-grid2"></i>
                                        <i class="fab-icon-close icon-cross2"></i>
                                    </a>

                                    <ul class="fab-menu-inner">
                                        <li>
                                            <a href="#" class="btn btn-light rounded-round btn-icon btn-float">
                                                <i class="icon-cart2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light rounded-round btn-icon btn-float" data-toggle="modal" data-target="#calcPrice">
                                                <i class="icon-file-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="calcPrice" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h6 class="modal-title">Framing Details</h6>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Artwork</th>
                                                    <th>Size</th>
                                                    <th>Mats</th>
                                                    <th>Frames</th>
                                                </tr>
                                                <tr>
                                                    <td>castle23.jpg</td>
                                                    <td>30 " X 45 "</td>
                                                    <td>Top: Crescent Super White</td>
                                                    <td>Inner: 403239</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main content -->
</div>
<input type="hidden" id="topMatH" value="" />
<input type="hidden" id="middleMatH" value="" />
<input type="hidden" id="bottomMatH" value="" />
<input type="hidden" id="outerFrameH" value="" />
<input type="hidden" id="middleFrameH" value="" />
<input type="hidden" id="innerFrameH" value="" />

<input type="hidden" id="originalFile" value="" />
<script src="<?= base_url('assets/admin/global_assets/js/plugins/loaders/blockui.min.js') ?>"></script>
<script>
    // $('.testSlider').on("change mousemove", function() {
    //     if (flag) {
    //         $('.testSlider').val($(this).val())
    //     }
    // });

    var flag = false;

    function updateSliderValue(id) {
        if (flag) {
            $('.rangeInput').val($("#" + id).val())
            applyMat("")
        } else {
            $("#" + id + "Input").val($("#" + id).val())
            applyMat("")
        }
    }

    function lockUnlockSliders() {
        let state = $("#lockUnlock").is(':checked');
        if (state === true) {
            flag = true
        } else {
            flag = false
        }
    }


    function saveFrameOptions(mat_position, frame) {
        if (mat_position == 'outer') {
            $('#outerFrameH').val(frame)
        } else if (mat_position == 'middle') {
            $('#middleFrameH').val(frame)
        } else if (mat_position == 'inner') {
            $('#innerFrameH').val(frame)
        }
    }

    function saveMatOptions(mat_position, color) {
        if (mat_position == 'top') {
            $('#topMatH').val(color)
        } else if (mat_position == 'middle') {
            $('#middleMatH').val(color)
        } else if (mat_position == 'bottom') {
            $('#bottomMatH').val(color)
        }
    }

    function applyMat(clr) {
		console.log('Apply Mat');
        var block = $('#testDI');
        $(block).block({
            message: '<i class="icon-spinner4 spinner"></i>',
            timeout: 2000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });
        
        var top_mat = $('#topMatH').val()
        var middle_mat = $('#middleMatH').val()
        var bottom_mat = $('#bottomMatH').val()
        var imgPath = $('#originalFile').val();
        var top_mat_width = $('#topSliderInput').val()
        var middle_mat_width = $('#middleSliderInput').val()
        var bottom_mat_width = $('#bottomSliderInput').val()
        var request = $.ajax({
            url: "../IMAGE_PROCESSING_SCRIPTS/var-www-html-api/index_v2.php",
            type: "POST",
            data: {
                action: 'applyMat',
                imgPath: imgPath,
                top_mat: top_mat,
                middle_mat: middle_mat,
                bottom_mat: bottom_mat,
                top_mat_width: top_mat_width,
                middle_mat_width: middle_mat_width,
                bottom_mat_width: bottom_mat_width
            },
            dataType: "text"
        });
        request.done(function(resp) {			
            resp = JSON.parse(resp)						
            $('#demo-cropper-image').attr('src', resp.msg)
            //$('#originalFile').val(resp.msg)
        });
    }

    function applyFrame(frame) {
		console.log("Apply Frames");
        var block = $('#testDI');
        $(block).block({
            message: '<i class="icon-spinner4 spinner"></i>',
            timeout: 10000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });

        var outer_frame = $('#outerFrameH').val()
        var middle_frame = $('#middleFrameH').val()
        var inner_frame = $('#innerFrameH').val()
        var imgPath = $('#originalFile').val();

        var top_mat = $('#topMatH').val()
        var middle_mat = $('#middleMatH').val()
        var bottom_mat = $('#bottomMatH').val()
        var top_mat_width = $('#topSliderInput').val()
        var middle_mat_width = $('#middleSliderInput').val()
        var bottom_mat_width = $('#bottomSliderInput').val()
        var request = $.ajax({
            url: "../IMAGE_PROCESSING_SCRIPTS/var-www-html-api/index_v2.php",
            type: "POST",
            data: {
                action: 'applyFrame',
                imgPath: imgPath,
                outer_frame: outer_frame,
                middle_frame: middle_frame,
                inner_frame: inner_frame,
                top_mat: top_mat,
                middle_mat: middle_mat,
                bottom_mat: bottom_mat,
                top_mat_width: top_mat_width,
                middle_mat_width: middle_mat_width,
                bottom_mat_width: bottom_mat_width
            },
            dataType: "text"
        });
        request.done(function(resp) {
			console.log("We are in response");
            resp = JSON.parse(resp)
            $('#demo-cropper-image').attr('src', resp.msg)
            //$('#originalFile').val(resp.msg)
        });
    }

    function resetMatsideBar(val) {
        if (val == 'top') {
            $('#topWidth').show();
            $('#bottomWidth').hide();
            $('#middleWidth').hide();

            $('#topMats').hide();
            $('#middleMats').hide();
            $('#bottomMats').hide();
        } else if (val == 'middle') {
            $('#middleWidth').show();
            $('#bottomWidth').hide();
            $('#topWidth').hide();

            $('#topMats').hide();
            $('#middleMats').hide();
            $('#bottomMats').hide();
        } else if (val == 'bottom') {
            $('#bottomWidth').show();
            $('#middleWidth').hide();
            $('#topWidth').hide();

            $('#topMats').hide();
            $('#middleMats').hide();
            $('#bottomMats').hide();
        }
    }

    function showMatType() {
        var numMats = $('input[name="numMats"]:checked').val();
        if (numMats == 1) {
            $('#top_mat').show();
            $('#top_mat').click();
            $('#middle_mat').hide();
            $('#bottom_mat').hide();
        } else if (numMats == 2) {
            $('#top_mat').show();
            $('#middle_mat').hide();
            $('#bottom_mat').show();
        } else if (numMats == 3) {
            $('#top_mat').show();
            $('#middle_mat').show();
            $('#bottom_mat').show();
        }
    }

    function uploadSrcImg() {
        if ($('#artwork_width').val() !== "") {
            var block = $('#testDI');
            $(block).block({
                message: '<i class="icon-spinner4 spinner"></i>',
                timeout: 1000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });

            var formData = new FormData();
            formData.append('file', $('#src_img_studio')[0].files[0]);
            formData.append('width', $('#artwork_width').val());
            $.ajax({
                url: '<?= base_url('home/uploadStudioImgNew') ?>',
                type: 'POST',
                data: formData,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                success: function(resp) {					
                    resp = JSON.parse(resp)
                    $('#demo-cropper-image').attr('src', resp.path)
                    $('#demo-cropper-image').css({
                        // "width": resp.width,
                        "height": resp.height
                    });
                    $('#originalFile').val(resp.path)
                    $('#artWorkAccordion').click();
                    $('#artWorkAccordion').removeAttr('href')
                    console.log("uploaded");
                    if ($('input[name="artwork_type"]:checked').val() == 'canvas') {
                        $('#mat_alert').show();
                    } else if ($('input[name="artwork_type"]:checked').val() == 'paper') {
                        $('#matAccordion').show();
                    }
                }
            });
        } else {
            alert("Please Enter Artwork Width");
        }
    }

    function wallImg() {
        var option = $('input[name="wall_img"]:checked').val();
        if (option == "upload") {
            $('#uploadImgBtn').show();
            $('#galleryImgBtn').hide();
        } else {
            $('#galleryImgBtn').show();
            $('#uploadImgBtn').hide();
        }
    }

    function loadInnerFrames() {
        $('#frame1').css({
            "background-color": "#354552",
            "color": "#ffffff"
        });

        $('#frame2').css({
            "background-color": "transparent"
        });
        $('#frame3').css({
            "background-color": "transparent"
        });
    }

    function loadMiddleFrames() {
        $('#frame2').css({
            "background-color": "#354552",
            "color": "#ffffff"
        });

        $('#frame1').css({
            "background-color": "transparent"
        });
        $('#frame3').css({
            "background-color": "transparent"
        });
    }

    function loadOuterFrames() {
        $('#frame3').css({
            "background-color": "#354552",
            "color": "#ffffff"
        });

        $('#frame1').css({
            "background-color": "transparent"
        });
        $('#frame2').css({
            "background-color": "transparent"
        });
    }

    function showGallerySidebar() {
        $('#gallerySidebar').show();
    }

    function showMatsSidebar() {
        var mat_postion = $('input[name="mat_postion"]:checked').val();
        if (mat_postion == 'top_mat') {
            $('#topMats').show();

            $('#middleMats').hide();
            $('#bottomMats').hide();
        } else if (mat_postion == 'middle_mat') {
            $('#middleMats').show();

            $('#topMats').hide();
            $('#bottomMats').hide();
        } else if (mat_postion == 'bottom_mat') {
            $('#bottomMats').show();

            $('#topMats').hide();
            $('#middleMats').hide();
        } else {
            alert("Please select number of mats");
        }
    }

    function showFramesSidebar(frame_position) {
        if (frame_position == 'inner') {
            $('#innerFrames').show();

            $('#middleFrames').hide();
            $('#outerFrames').hide();
        } else if (frame_position == 'middle') {
            $('#middleFrames').show();

            $('#innerFrames').hide();
            $('#outerFrames').hide();
        } else if (frame_position == 'outer') {
            $('#outerFrames').show();

            $('#innerFrames').hide();
            $('#middleFrames').hide();
        }
    }

    function stackFrames() {
        $('#frameInfoMsg').hide();
        $('#stackBtn').hide();
        $('#stackedFrameDiv').show();
    }

    function closeSideBar(id) {
        $('#' + id).hide();
    }

    $('#block-card').on('click', function() {
        var block = $('#testDI');
        $(block).block({
            message: '<i class="icon-spinner4 spinner"></i>',
            timeout: 2000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });
    });

    // function applyFrame(frame_id) {
    //     var block = $('#testDI');
    //     $(block).block({
    //         message: '<i class="icon-spinner4 spinner"></i>',
    //         timeout: 5000, //unblock after 2 seconds
    //         overlayCSS: {
    //             backgroundColor: '#fff',
    //             opacity: 0.8,
    //             cursor: 'wait'
    //         },
    //         css: {
    //             border: 0,
    //             padding: 0,
    //             backgroundColor: 'transparent'
    //         }
    //     });


    //     var imgPath = $('#originalFile').val();
    //     if (imgPath != "") {
    //         var request = $.ajax({
    //             url: "http://ec2-18-218-53-198.us-east-2.compute.amazonaws.com/api/index.php",
    //             type: "POST",
    //             data: {
    //                 imgPath: imgPath,
    //                 frame_id: frame_id
    //             },
    //             dataType: "text"
    //         });
    //         request.done(function(resp) {
    //             resp = JSON.parse(resp)
    //             $('#demo-cropper-image').attr('src', resp.msg)
    //         });
    //     }
    // }

    function applyColor(color) {
        $('.image-cropper-container').css({
            "background-color": color,
            "background-image": "none"
        });
    }

    function uploadStudioBgImg() {
        var block = $('#testDI');
        $(block).block({
            message: '<i class="icon-spinner4 spinner"></i>',
            timeout: 10000, //unblock after 2 seconds
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });

        var formData = new FormData();
        formData.append('file', $('#bg_img_studio')[0].files[0]);

        $.ajax({
            url: '<?= base_url('home/uploadStudioBgImg') ?>',
            type: 'POST',
            data: formData,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function(data) {
                data = JSON.parse(data);
                if (data.error == false) {
                    $('.image-cropper-container').css({
                        "background-color": "transparent",
                        "background-image": "url(" + data.path + ")",
                        "background-size": "cover",
                        "background-repeat": "no-repeat",
                        "background-position": "center center"
                    });
                }

                // console.log(data);
                // alert(data);
            }
        });
    }

    function changeBg(img) {
        $('.image-cropper-container').css({
            "background-color": "transparent",
            "background-image": "url(" + img + ")",
            "background-size": "cover",
            "background-repeat": "no-repeat",
            "background-position": "center center"
        });
    }

    $(document).ready(function() {
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            pauseOnHover: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });

    Dropzone.autoDiscover = false;
    $myDropzone = new Dropzone('#dropzone_file_limits', {
        uploadMultiple: false,
        paramName: "fileToUpload", // The name that will be used to transfer the file
        dictDefaultMessage: 'Drop files to upload <span>or CLICK</span>',
        maxFilesize: 1, // MB
        maxFiles: 1,
        maxThumbnailFilesize: 1,
        addRemoveLinks: true,
        url: '<?= base_url('home/uploadStudioImg') ?>',
        accept: function(file, done) {
            console.log("uploaded");
            done();
        },
        success: function(file, resp) {
            $('#demo-cropper-image').attr('src', resp)
            $('#originalFile').val(resp)
            console.log("uploaded");
        }
    });
</script>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

