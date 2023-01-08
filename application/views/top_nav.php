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

#searchbox i.fa.fa-close:hover {
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
    height: 44px;
    /* margin-top: 5px; */
}

@media screen and (max-width: 1180px) {
    .nav-item {
        margin-right: 28px;
    }
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
<style>
.shopCart {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 10;
    top: 0;
    right: 0;
    background-color: white;
    overflow-x: hidden;
    transition: 0.5s;
    /* padding-top: 10px; */
}

.shopCart-header {
    padding: 0 16px 0 40px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: lightgray 1px solid;
    border-top: lightgray 1px solid;
}

.shopCart-header h3 {
    padding: 15px;
    margin: 0;
    font-size: 18px;
    line-height: 24px;
    font-weight: 400;
    color: #464648;
}

.shopCart-header .closebtn {
    /* position: absolute;
	top: 0;
	right: 25px; */
    font-size: 26px;
    margin-left: 50px;
}

.cartbar-items {
    height: 74vh;
    overflow-y: auto;
}

.cartbar-item {
    width: 100%;
    border-bottom: lightgray 1px solid;
    padding: 10px 0;
}

.cartbar-item:first-of-type {
    border-top: none;
}

.cartbar-item img {
    width: 80px;
    height: 80px;
    object-fit: contain;
}

.cartbar-item h3 {
    font-size: 14px;
    margin: 0;
    margin-bottom: 2px;
}

.cartbar-item p {
    font-size: 11px;
    color: #818181;
    margin: 0;
}

p.cartbar-item-price {
    /* font-weight: 500;
		font-size: 16px; */
    color: #ef4036;
}

.shopCart a {
    /* padding: 8px 8px 8px 32px; */
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.cartbar-item a {
    font-size: 17px;
    margin: 0;
    text-align: right;
}

.cart-checkout {
    border-top: lightgray 1px solid;
    padding: 20px;
}

.cart-checkout h3 {
    font-size: 20px;
}

.shopCart a:hover {
    color: #f1f1f1;
}

.cartbar-item button {
    border: none;
    background-color: transparent;
}

@media screen and (max-height: 450px) {
    .shopCart {
        padding-top: 15px;
    }

    .shopCart a {
        font-size: 18px;
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
                <!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/about'); ?>" >
						About Us
					</a>
					<hr class="d-block d-lg-none">
				</li> -->
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
                    <a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/contact'); ?>">Contact</a>
                    <hr class="d-block d-lg-none">
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-off" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fa fa-user mr-2" aria-hidden="true"></i>
                        <span class="d-inline-block d-lg-none">Account</span>
                    </a>
                    <hr class="d-block d-lg-none">
                    <div class="dropdown-menu dropdown-menu-right bg-dark"
                        style="z-index: 999999;left:-95px;border-radius: 20px;">
                        <span class="dropdown-item" style="font-size: 0.9rem;">
                            <i class="fas fa-user-circle"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="<?= base_url('home/profile'); ?>">My Profile</a>
                        </span>
                        <!-- <span class="dropdown-item" href="#"
							style="font-size: 0.9rem;border:none!important;text-align: center;color:white!important;padding: 20px 0;">Your
							Bag is empty.</span>
						<span class="dropdown-item" style="font-size: 0.9rem;">
							<i class="fa fa-shopping-bag"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Bag</a>
						</span> -->
                        <span class="dropdown-item" style="font-size: 0.9rem; border:none!important;">
                            <i class="far fa-heart"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Favourites</a>
                        </span>
                        <span class="dropdown-item" style="font-size: 0.9rem;">
                            <i class="fas fa-box"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Orders</a>
                        </span>
                        <span class="dropdown-item" style="font-size: 0.9rem;">
                            <i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Account</a>
                        </span>
                        <?php if ($this->session->userdata('customer_logged_in')) { ?>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-off" onclick="openNav()" id="navbardrop"
                        data-toggle="dropdown">
                        <i class="fa fa-shopping-bag mr-2" aria-hidden="true"></i>
                        <span class="d-inline-block d-lg-none">Cart</span>
                    </a>
                    <hr class="d-block d-lg-none">
                    <!-- <div class="dropdown-menu dropdown-menu-right bg-dark"
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
					</div> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-off" href="#" onclick="showSearch()">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span class="d-inline-block d-lg-none ml-1">Search</span>
                    </a>
                    <hr class="d-block d-lg-none">
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
                        <i class="fa fa-close" style="z-index: 9999;" aria-hidden="true" onclick="hideSearch()"></i>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>
</nav>
<div id="shopCart" class="shopCart shadow">
    <div class="shopCart-header">
        <h3>Your Cart</h3>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class="cartbar-items" id="cartbar-items">
        <?php foreach ($this->cart->contents() as $items): ?>
        <div class="cartbar-item" id="<?php echo $items['rowid']; ?>">
            <div class="row align-items-center" style="margin: auto;">
                <div class="col-3">
                    <img src="<?= base_url($items['product_img']) ?>" alt="">
                </div>
                <div class="col-7">
                    <h3><?php echo $items['name']; ?></h3>
                    <p>Item: <?php echo $items['id']; ?></p>
                    <p>$<?php echo $items['price']; ?><span class="float-right">Qty: <?php echo $items['qty']; ?></span>
                    </p>
                    <!-- <p class="cartbar-item-price">25% Off: -$156.25</p> -->
                    <p class="cartbar-item-price">Your Price: $<?php echo $items['price']; ?></p>
                    <!-- <p>Qty: 1</p> -->
                </div>
                <div class="col-2">
                    <button onClick="removeItem('<?php echo $items['rowid'];?>')"><i class="fa fa-trash text-danger"
                            aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="cart-checkout text-center">
        <h3 id="TPrice">Cart Total : $<?php echo $this->cart->total(); ?></h3>
        <div class="shopping_btn">
            <a href="/home/cart"
                style="background-color: #ef4036; width: 200px; padding: 5px;color:white;margin:0 auto;">Checkout</a>
        </div>
    </div>
</div>

<script>
function removeItem(rowid) {
    $.ajax({
        type: "get",
        url: "<?php echo base_url('home/removeFromCart'); ?>",
        data: {
            rowid: rowid
        },
        cache: false,
        success: function(res) {
            let data = JSON.parse(res);
            if (data.isRemove) {
                document.getElementById(rowid).remove();
                $('#TPrice').html("Cart Total : $" + data.totalPrice);
            }
        }
    });
}

function openNav() {
    document.getElementById("shopCart").style.width = "350px";
}

function closeNav() {
    document.getElementById("shopCart").style.width = "0";
}
</script>
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
<div class="responsive_submenu">
    <div class="container" style="overflow:auto;">
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

        <?php if ($this->router->method == "what_we_frame" ||  $this->router->method == "printing_and_canvas" || $this->router->method == "prints_and_posters" || $this->router->method == "educational_and_professional" || $this->router->method == "souvenirs" || $this->router->method == "mirrors_and_more") { ?>
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

        <?php if ($this->router->method == "products" || $this->router->method == "gallery_wall_design" || $this->router->method == "product_exclusive" || $this->router->method == "product_painting" || $this->router->method == "product_wooden_art" || $this->router->method == "product_prints") { ?>
        <!-- <div class="row" style="text-align: center;padding:15px 0">
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
                        <td>
                            <a href="<?= base_url('home/gallery_wall_design'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/Gallery_Wall.png'); ?>"
                                    style="width: 42px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/gallery_wall_design'); ?>">Gallery Wall Design</a></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div> -->
        <?php } ?>

        <?php if ($this->router->method == "services" || $this->router->method == "professionals" || $this->router->method == "corporate" || $this->router->method == "retail" || $this->router->method == "photographers" ||  $this->router->method == "interior" ||  $this->router->method == "Education" || $this->router->method == "artists"  ) { ?>
        <div class="row" style="text-align: center;padding:15px 0">
            <div class="col-md-12">
                <table align="center">
                    <tr>
                        <td>
                            <a href="<?= base_url('home/artists'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/Canvas_paintings.png'); ?>"
                                    style="width: 49px;" />
                            </a>
                            <span class="label hover_text"><a href="<?= base_url('home/artists'); ?>">Artists</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/corporate'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/Corporate_Services.png'); ?>"
                                    style="width: 70px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/corporate'); ?>">Corporate</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/photographers'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/Gallery_Wall.png'); ?>"
                                    style="width: 42px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/photographers'); ?>">Photographers</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/retail'); ?>">
                                <img class='hover_img' src="<?= base_url('assets/images/top_nav_icons/mirrors.png'); ?>"
                                    style="width: 42px;" />
                            </a>
                            <span class="label hover_text"><a href="<?= base_url('home/retail'); ?>">Retail</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/interior'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/Screen_Printing.png'); ?>"
                                    style="width: 64px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/interior'); ?>">Interior</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/Education'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/educational.png'); ?>"
                                    style="width: 42px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/Education'); ?>">Educational</a></span>
                        </td>
                        <td>
                            <a href="<?= base_url('home/professionals'); ?>">
                                <img class='hover_img'
                                    src="<?= base_url('assets/images/top_nav_icons/moulding.png'); ?>"
                                    style="width: 50px;" />
                            </a>
                            <span class="label hover_text"><a
                                    href="<?= base_url('home/professionals'); ?>">Professionals</a></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php } ?>


        <!-- <?php if ($this->router->method == "services" || $this->router->method == "custom_framming" || $this->router->method == "corporate_services" || $this->router->method == "gallery_wall_design" || $this->router->method == "printing" ||  $this->router->method == "screen_printing" ||  $this->router->method == "laser_cutting"  ) { ?>
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
		 -->
        <?php if ($this->router->method == "framming_supplies" || $this->router->method == "other_supplies" || $this->router->method == "loose_material" || $this->router->method == "glazing" || $this->router->method == "mat_board" || $this->router->method == "moulding") { ?>
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
$(document).ready(function() {
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
    $('#searchBar').keyup(function() {
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
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}

function enableScroll() {
    window.onscroll = function() {};
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous"></script>
