<style>
        #searchBar {
            border: none;
            background-color: transparent;
            box-shadow: none;
            color: white;
            margin-right: 120px;
            font-weight: 600;
            width: 470px;
            font-size: 18px;
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

        .icon-img {
            margin-bottom: 5px;
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

        .card-header .card-title {
            font-size: 14px !important;
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

        .active {
            color: #dadada !important;
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

        .ui-wrapper {
            all: none;
        }

        .image-cropper-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-magnifier-glass {
            position: absolute;
            border: 2px solid #000;
            cursor: none;
            z-index: 12;
            ;
            top: -2px;
            left: 0px;
            /*Set the size of the magnifier glass:*/
            width: 100.5%;
            height: 284px;
        }

        .zoomContainer {
            position: relative;
        }

        #image {
            background-size: 100% 100%;
            display: flex;
            position: relative;
            width: 500px;
            height: 500px;
        }

        #demo-cropper-image {
            /* position: absolute; */
            top: 0px !important;
            /* z-index: 9; */
            left: 0px !important;
            width: 100%;
            height: auto;
            /* object-fit: scale-down; */
        }

        #testDI {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .sideTitle {
            font-size: 13px;
        }

        .card-color-item {
            width: 40px;
            height: 40px;
            display: block;
            border: 1px solid grey;
        }

        .item-name {
            display: block;
            width: 100px;
            text-align: center;
            font-size: 14px;
        }



        #fixed-form-container {
            position: absolute;
            bottom: 0px;
            right: 75px;
            width: 94%;
            text-align: center;
            margin: 0;

        }

        .default-disabled {
            color: #a2a2a2;
        }

        #fixed-form-container .button:before {
            content: "+ ";
        }

        #fixed-form-container .expanded:before {
            content: "- ";
        }

        #fixed-form-container .button {
            font-size: 1.1em;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;
            /* border: 2px solid #060F12; */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px 5px 0px 0px;
            padding: 5px 20px 5px 20px;
            /* background-color: #060F12; */
            background: transparent linear-gradient(90deg, #060F12 0%, #585E60 100%) 0% 0% no-repeat padding-box;
            color: #fff;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            -webkit-box-shadow: 4px 0px 5px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 4px 0px 5px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 4px 0px 5px 0px rgba(0, 0, 0, 0.3);
        }

        #fixed-form-container .body {
            background-color: #fff;
            border-radius: 5px;
            border: 1px solid #060F1220;
            /* margin-bottom: 16px; */
            padding: 10px;
            -webkit-box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.3);
        }

        #fixed-form-container p {
            font-size: 15px;
            margin-bottom: 2px;
        }

        @media only screen and (min-width:768px) {
            #fixed-form-container .button {
                margin: 0;

            }

            #fixed-form-container {
                left: 20px;
                /* width: 390px; */
                text-align: right;
            }

            #fixed-form-container .body {
                padding: 30px;
                border-radius: 0px 5px 5px 5px;
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
                    <a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/about'); ?>">
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
                    <a class="nav-link dropdown-toggle caret-off" href="<?= base_url('home/contact'); ?>">Contact</a>
                    <hr class="d-block d-lg-none">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-off" href="#" onclick="showSearch()">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle caret-off" href="#" id="navbardrop" data-toggle="dropdown">
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
        <div class="col-md-11">
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
            height: 95vh;
            /* overflow-y: scroll; */
            background-color: #333333 !important;
        }

        .card-header {
            background-color: #333333 !important;
            /* color: white; */
        }

        .card-header a,
        label {
            color: white;
        }

        .card-header a:hover,
        .card-header a:focus {
            color: white !important;
        }

        .card {
            background-color: transparent;
        }

        .card-group-control-right .card-body {
            background-color: rgba(243, 243, 243, 0.6);
            padding: 20px 37px !important;
        }

        .zoomContainer>.card-body {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .card-group-control-right .card-body label {
            letter-spacing: 0.16px;
            color: #545871;
            font-size: 16px;
        }

        .btn-color {
            background-color: #060F12E0;
            color: white;
        }

        .select2-selection {
            border-color: #545871;
            font-size: 16px;
        }

        .uniform-uploader .bg-blue {
            background-color: #060F12E0;
            display: flex;
            align-items: center;
        }
</style>

<!-- Page content -->
<div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper" style="background-color: #b6c4e2">
        <div class="card border-0">
            <div class="card-body p-0">
                <div class="row" style="margin:auto;">
                    <div class="col-md-1 p-0" style="margin-left: -1px">
                        <div>
                            <div class="card-group-control card-group-control-right" id="accordion-group">
                                <div class="card mb-0 rounded-bottom-0" style="position: relative;">
                                    <div class="card zoomContainer" style="background-color: white">
                                        <div class="card-body m-auto bg-transparent"
                                            style="width: 80px; height: 145px; padding:0px !important">
                                            <img class="my-4" style="width: 100%"
                                                src="<?= base_url('assets/imagess/framing_studio_logo.png'); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="card-header" style="text-align:center; cursor: pointer"
                                        onclick="showArtworkSection();">
                                        <img src="<?= base_url('assets/imagess/canvas.png'); ?>" width="32px"
                                            height="32px" class="icon-img" />
                                        <h6 class=" card-title" style="color: white;">
                                            ARTWORK
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group1" class="collapse" data-parent="#accordion-group"
                                        style="position: absolute; left: 100.5%; top: 146px; border: 1px solid #b3b4b7; min-width: 326px;z-index: 1000">
                                        <div class="card-body">
                                            <div class="list-icons closeIcons" style="margin-left: 100%"
                                                onclick="closeArtworkSection()">
                                                <a href="#" class="list-icons-item"><i class="icon-close2"></i></a>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled"
                                                        onclick="selectArt()" name="wall_img" value="upload" />
                                                    Upload
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled"
                                                        onclick="selectArt()" name="wall_img" value="gallery" />
                                                    Select Art from Gallery
                                                </label>
                                            </div>
                                            <div id="uploadArtBtn" style="display: none;">
                                                <div class="form-group">
                                                    <label>Upload an Image</label>
                                                    <input type="file" name="file" id="src_img_studio"
                                                        class="form-control-uniform-custom">
                                                </div>

                                                <div class="form-group">
                                                    <label class="d-block">Is your artwork:</label>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-input-styled" value="paper"
                                                                name="artwork_type" checked data-fouc>
                                                            Paper
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-input-styled" value="canvas"
                                                                name="artwork_type" data-fouc>
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
                                                    <button style="width: 100%;" onclick="uploadSrcImg()"
                                                        class="btn btn-color">UPLOAD</button>
                                                </div>
                                            </div>
                                            <div class="text-center mt-3" style="display: none;" id="galleryArtBtn">
                                                <button style="width: 100%;" onclick="showArtSidebar()"
                                                    class="btn btn-color">Select Art</button>
                                            </div>
                                            <div class="card" id="artSidebar"
                                                style="position: absolute; top: -3px; left: 315px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Art</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('artSidebar')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        onclick="changeBg('<?= base_url('assets/images/placeholder.jpg') ?>')"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
                                                                    asdasd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
                                                                    fdgsfd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
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

                                <div class="card mb-0 rounded-0" style="position: relative;">
                                    <div class="card-header" style="cursor: pointer; text-align:center"
                                        onclick="showMatSection(this)">
                                        <img src="<?= base_url('assets/imagess/display-frame.png'); ?>" width="32px"
                                            height="32px" class="icon-img" />
                                        <h6 class="card-title default-disabled">
                                            MOUNT
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group2" class="collapse" data-parent="#accordion-group"
                                        style="position: absolute; left: 100.5%; top: 0px; border: 1px solid #b3b4b7; min-width: 382px;z-index: 1001">
                                        <!-- <div class="card-body" id="mat_alert">
                                            <div class="alert alert-warning alert-dismissible">
                                                <span class="font-weight-semibold">Please Note:</span> Mat selection is
                                                not available for Canvas.
                                            </div>
                                        </div> -->
                                        <div class="card-body" id="matAccordion">
                                            <div class="list-icons closeIcons" style="margin-left: 100%"
                                                onclick="closeMatSection(this)">
                                                <a href="#" class="list-icons-item"><i class="icon-close2"></i></a>
                                            </div>
                                            <div class="form-group">
                                                <label class="d-block">Choose number of mats:</label>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled"
                                                            onclick="showMatType()" value="1" name="numMats" data-fouc>
                                                        One
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled"
                                                            onclick="showMatType()" value="2" name="numMats" data-fouc>
                                                        Two
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-input-styled"
                                                            onclick="showMatType()" value="3" name="numMats" data-fouc>
                                                        Three
                                                    </label>
                                                </div>

                                                <div class="btn-group btn-group-toggle mb-0 mt-2" data-toggle="buttons"
                                                    style="display: inline-block; margin-left: -22px">
                                                    <label class="btn btn-color" onclick="resetMatsideBar('top')"
                                                        id="top_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" autocomplete="off"
                                                            value="top_mat">
                                                        Top Mat
                                                    </label>

                                                    <label class="btn btn-color" onclick="resetMatsideBar('middle')"
                                                        id="middle_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" value="middle_mat"
                                                            autocomplete="off">
                                                        Middle Mat
                                                    </label>

                                                    <label class="btn btn-color" onclick="resetMatsideBar('bottom')"
                                                        id="bottom_mat" style="display: none;">
                                                        <input type="radio" name="mat_postion" value="bottom_mat"
                                                            autocomplete="off">
                                                        Bottom Mat
                                                    </label>
                                                </div>

                                                <span style="font-size: 14px;"
                                                    class="form-text text-muted mb-3 mt-3">Need help choosing Mats? <i
                                                        style="cursor: pointer;" class="icon-help ml-2"
                                                        data-toggle="modal" data-target="#matInfo"></i></span>
                                                <div id="matInfo" class="modal fade" tabindex="-1"
                                                    style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h6 class="modal-title">Mounting</h6>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">×</button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <p>Perhaps the most important factor when selecting a
                                                                    mat is quality. The very best mats available are
                                                                    made from 100cotton rag. The next step down are mats
                                                                    made from alpha cellulose. Both of these are used
                                                                    for conservation grade framing to help preserve the
                                                                    piece being framed. Mats of lesser quality are made
                                                                    with more highly acidic wood pulp. They are more
                                                                    prone to discoloring, but more importantly, they
                                                                    tend to accelerate the deterioration of the art.</p>
                                                                <p>Another consideration when matting is the border
                                                                    widths. There are a lot of variables to think about
                                                                    before making your final decision. It is not as
                                                                    simple as smaller picture get narrower mat border
                                                                    and larger picture gets wider border. Look at the
                                                                    colors and shapes within the art no matter what the
                                                                    size is. Two of the same size picture may look good
                                                                    with different border widths if the shapes are
                                                                    larger in one than the other. Mat borders can also
                                                                    be used to help art fit a wall space better.</p>
                                                                <p>If you are using multiple layers of mat in your
                                                                    design, it typically looks best to vary the widths
                                                                    of the accent colors. For example, for a triple mat
                                                                    your borders could be 4'' for the predominant mat,
                                                                    3/8'' exposure for the second (middle) layer and
                                                                    1/8'' showing of the lower mat. In general this will
                                                                    look better than using 4'' 1/4'' 1/4'' which would
                                                                    be the same overall size.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                <button style="width: 100%;" class="btn btn-color"
                                                    onclick="showMatsSidebar()">Select Mats</button>
                                            </div>

                                            <div class="mt-3 mb-3">
                                                <h6 class="mb-0 font-weight-semibold" id="selectedMat">Selected Mat:
                                                    (In)
                                                </h6>
                                            </div>

                                            <div class="row mb-1" id="topMat" style="display: none;">
                                                <div class="col-md-4 sideTitle">
                                                    <div style="vertical-align: middle;">Top Mat Width</div>
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="top_topSliderInput" value="0.125"
                                                        onchange="updateSliderValue('top_topSlider','top','input')">
                                                </div>
                                                <div class=" col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('top_topSlider','top', 'slider')"
                                                        id="top_topSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    <div style="vertical-align: middle;">Left Mat Width</div>
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="top_leftSliderInput" value="0.125"
                                                        onchange="updateSliderValue('top_leftSlider','top','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('top_leftSlider','top', 'slider')"
                                                        id="top_leftSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    <div style="vertical-align: middle;">Right Mat Width</div>
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="top_rightSliderInput" value="0.125"
                                                        onchange="updateSliderValue('top_rightSlider','top','input')">
                                                </div>
                                                <div class=" col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('top_rightSlider','top','slider')"
                                                        id="top_rightSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    <div style="vertical-align: middle;">Bottom Mat Width</div>
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="top_bottomSliderInput" value="0.125"
                                                        onchange="updateSliderValue('top_bottomSlider','top','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('top_bottomSlider','top','slider')"
                                                        id="top_bottomSliderValue">
                                                </div>
                                            </div>
                                            <div class="row mb-1" id="middleMat" style="display: none;">
                                                <div class="col-md-4 sideTitle">
                                                    Top Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="middle_topSliderInput" value="0.125"
                                                        onchange="updateSliderValue('middle_topSlider','middle', 'input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('middle_topSlider','middle', 'slider')"
                                                        id="middle_topSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Left Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="middle_leftSliderInput" value="0.125"
                                                        onchange="updateSliderValue('middle_leftSlider','middle', 'input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('middle_leftSlider','middle', 'slider')"
                                                        id="middle_leftSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Right Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="middle_rightSliderInput" value="0.125"
                                                        onchange="updateSliderValue('middle_rightSlider','middle', 'input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('middle_rightSlider','middle', 'slider')"
                                                        id="middle_rightSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Bottom Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="middle_bottomSliderInput"
                                                        value="0.125"
                                                        onchange="updateSliderValue('middle_bottomSlider','middle','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('middle_bottomSlider','middle','slider')"
                                                        id="middle_bottomSliderValue">
                                                </div>
                                            </div>
                                            <div class="row mb-1" id="bottomMat" style="display: none;">
                                                <div class="col-md-4 sideTitle">
                                                    Top Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="bottom_topSliderInput" value="0.125"
                                                        onchange="updateSliderValue('bottom_topSlider','bottom','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('bottom_topSlider','bottom','slider')"
                                                        id="bottom_topSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Left Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="bottom_leftSliderInput" value="0.125"
                                                        onchange="updateSliderValue('bottom_leftSlider','bottom','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider" id="bottom_leftSliderValue"
                                                        onchange="updateSliderValue('bottom_leftSlider','bottom','slider')">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Right Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="bottom_rightSliderInput"
                                                        onchange="updateSliderValue('bottom_rightSlider','bottom', 'input')"
                                                        value="0.125">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('bottom_rightSlider','bottom', 'slider')"
                                                        id="bottom_rightSliderValue">
                                                </div>
                                                <div class="col-md-4 sideTitle">
                                                    Bottom Mat Width
                                                </div>
                                                <div class="col-md-3"
                                                    style="padding-right: .3rem; padding-left: .3rem;">
                                                    <input type="text" class="form-control rangeInput"
                                                        style="height: 2rem;" id="bottom_bottomSliderInput"
                                                        value="0.125"
                                                        onchange="updateSliderValue('bottom_bottomSlider','bottom','input')">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="range" min="0.125" max="5" value="0.125" step="0.125"
                                                        class="slider testSlider"
                                                        onchange="updateSliderValue('bottom_bottomSlider','bottom','slider')"
                                                        id="bottom_bottomSliderValue">
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

                                            <div class="card" id="topMats"
                                                style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Top Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('topMats')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <!-- <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">                                                                
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                         if (isset($data['mat_colors']) ? count($mat_colors['top']) : 0)
                                                       { 
                                                            foreach ($mat_colors['top'] as $mat_color) { ?>
                                                        <div class="col-md-3">
                                                            <div style="text-align: center;"
                                                                onclick="saveMatOptions('top', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                <div
                                                                    style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;">
                                                                </div>
                                                                <?= $mat_color['name'] ?>
                                                            </div>
                                                        </div>
                                                        <?php }
                                                        }
                                                        ?>
                                                        <table class="table">
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#ffffff');applyMat('#ffffff')"
                                                                        class="card-color-item" color="#ffffff"
                                                                        style="background:#ffffff "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f1f1f1');applyMat('#f1f1f1')"
                                                                        class="card-color-item" color="#f1f1f1"
                                                                        style="background:#f1f1f1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                   
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f3efea');applyMat('#f3efea')"
                                                                        class="card-color-item" color="#f3efea"
                                                                        style="background:#f3efea "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f4ede1');applyMat('#f4ede1')"
                                                                        class="card-color-item" color="#f4ede1"
                                                                        style="background:#f4ede1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f1e5c7');applyMat('#f1e5c7')"
                                                                        class="card-color-item" color="#f1e5c7"
                                                                        style="background:#f1e5c7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f5eac3');applyMat('#f5eac3')"
                                                                        class="card-color-item" color="#f5eac3"
                                                                        style="background:#f5eac3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#e7e1d1');applyMat('#e7e1d1')"
                                                                        class="card-color-item" color="#e7e1d1"
                                                                        style="background:#e7e1d1 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#d8d7d3');applyMat('#d8d7d3')"
                                                                        class="card-color-item" color="#d8d7d3"
                                                                        style="background:#d8d7d3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#a8a8aa');applyMat('#a8a8aa')"
                                                                        class="card-color-item" color="#a8a8aa"
                                                                        style="background:#a8a8aa "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#d8d3c8');applyMat('#d8d3c8')"
                                                                        class="card-color-item" color="#d8d3c8"
                                                                        style="background:#d8d3c8 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#8e6b4d');applyMat('#8e6b4d')"
                                                                        class="card-color-item" color="#8e6b4d"
                                                                        style="background:#8e6b4d "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#af3a30');applyMat('#af3a30')"
                                                                        class="card-color-item" color="#af3a30"
                                                                        style="background:#af3a30 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#616054');applyMat('#616054')"
                                                                        class="card-color-item" color="#616054"
                                                                        style="background:#616054 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#8e1e16');applyMat('#8e1e16')"
                                                                        class="card-color-item" color="#8e1e16"
                                                                        style="background:#8e1e16 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#f0ece7');applyMat('#f0ece7')"
                                                                        class="card-color-item" color="#f0ece7"
                                                                        style="background:#f0ece7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#766569');applyMat('#766569')"
                                                                        class="card-color-item" color="#766569"
                                                                        style="background:#766569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#544545');applyMat('#544545')"
                                                                        class="card-color-item" color="#544545"
                                                                        style="background:#544545 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#374569');applyMat('#374569')"
                                                                        class="card-color-item" color="#374569"
                                                                        style="background:#374569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#4b5b3e');applyMat('#4b5b3e')"
                                                                        class="card-color-item" color="#4b5b3e"
                                                                        style="background:#4b5b3e"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#502626');applyMat('#502626')"
                                                                        class="card-color-item" color="#502626"
                                                                        style="background:#502626 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#23241e');applyMat('#23241e')"
                                                                        class="card-color-item" color="#23241e"
                                                                        style="background:#23241e "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#10110c');applyMat('#10110c')"
                                                                        class="card-color-item" color="#10110c"
                                                                        style="background:#10110c"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#29272a');applyMat('#29272a')"
                                                                        class="card-color-item" color="#29272a"
                                                                        style="background:#29272a"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#97a398');applyMat('#97a398')"
                                                                        class="card-color-item" color="#97a398"
                                                                        style="background:#97a398 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('top', '#5d666f');applyMat('#5d666f')"
                                                                        class="card-color-item" color="#5d666f"
                                                                        style="background:#5d666f "></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="middleMats"
                                                style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Middle Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('middleMats')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <!-- <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Mats: 3</label>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                        if (count($mat_colors['middle']) > 0) {
                                                            foreach ($mat_colors['middle'] as $mat_color) { ?>
                                                        <div class="col-md-3">
                                                            <div style="text-align: center;"
                                                                onclick="saveMatOptions('middle', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                <div
                                                                    style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;">
                                                                </div>
                                                                <?= $mat_color['name'] ?>
                                                            </div>
                                                        </div>
                                                        <?php }
                                                        }
                                                        ?>
                                                        <table class="table">
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#ffffff');applyMat('#ffffff')"
                                                                        class="card-color-item" color="#ffffff"
                                                                        style="background:#ffffff "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f1f1f1');applyMat('#f1f1f1')"
                                                                        class="card-color-item" color="#f1f1f1"
                                                                        style="background:#f1f1f1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f5f1ee');applyMat('#f5f1ee')"
                                                                        class="card-color-item" color="#f5f1ee"
                                                                        style="background:#f5f1ee "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f3efea');applyMat('#f3efea')"
                                                                        class="card-color-item" color="#f3efea"
                                                                        style="background:#f3efea "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f4ede1');applyMat('#f4ede1')"
                                                                        class="card-color-item" color="#f4ede1"
                                                                        style="background:#f4ede1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f1e5c7');applyMat('#f1e5c7')"
                                                                        class="card-color-item" color="#f1e5c7"
                                                                        style="background:#f1e5c7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f5eac3');applyMat('#f5eac3')"
                                                                        class="card-color-item" color="#f5eac3"
                                                                        style="background:#f5eac3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#e7e1d1');applyMat('#e7e1d1')"
                                                                        class="card-color-item" color="#e7e1d1"
                                                                        style="background:#e7e1d1 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#d8d7d3');applyMat('#d8d7d3')"
                                                                        class="card-color-item" color="#d8d7d3"
                                                                        style="background:#d8d7d3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#a8a8aa');applyMat('#a8a8aa')"
                                                                        class="card-color-item" color="#a8a8aa"
                                                                        style="background:#a8a8aa "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#d8d3c8');applyMat('#d8d3c8')"
                                                                        class="card-color-item" color="#d8d3c8"
                                                                        style="background:#d8d3c8 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#8e6b4d');applyMat('#8e6b4d')"
                                                                        class="card-color-item" color="#8e6b4d"
                                                                        style="background:#8e6b4d "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#af3a30');applyMat('#af3a30')"
                                                                        class="card-color-item" color="#af3a30"
                                                                        style="background:#af3a30 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#616054');applyMat('#616054')"
                                                                        class="card-color-item" color="#616054"
                                                                        style="background:#616054 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#8e1e16');applyMat('#8e1e16')"
                                                                        class="card-color-item" color="#8e1e16"
                                                                        style="background:#8e1e16 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#f0ece7');applyMat('#f0ece7')"
                                                                        class="card-color-item" color="#f0ece7"
                                                                        style="background:#f0ece7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#766569');applyMat('#766569')"
                                                                        class="card-color-item" color="#766569"
                                                                        style="background:#766569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#544545');applyMat('#544545')"
                                                                        class="card-color-item" color="#544545"
                                                                        style="background:#544545 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#374569');applyMat('#374569')"
                                                                        class="card-color-item" color="#374569"
                                                                        style="background:#374569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#4b5b3e');applyMat('#4b5b3e')"
                                                                        class="card-color-item" color="#4b5b3e"
                                                                        style="background:#4b5b3e"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#502626');applyMat('#502626')"
                                                                        class="card-color-item" color="#502626"
                                                                        style="background:#502626 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#23241e');applyMat('#23241e')"
                                                                        class="card-color-item" color="#23241e"
                                                                        style="background:#23241e "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#10110c');applyMat('#10110c')"
                                                                        class="card-color-item" color="#10110c"
                                                                        style="background:#10110c"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#29272a');applyMat('#29272a')"
                                                                        class="card-color-item" color="#29272a"
                                                                        style="background:#29272a"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#97a398');applyMat('#97a398')"
                                                                        class="card-color-item" color="#97a398"
                                                                        style="background:#97a398 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('middle', '#5d666f');applyMat('#5d666f')"
                                                                        class="card-color-item" color="#5d666f"
                                                                        style="background:#5d666f "></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="bottomMats"
                                                style="position: absolute; top: -3px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Bottom Mat</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('bottomMats')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <!-- <div class="form-group">
                                                                <label>Search by Mat Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Mats: 3</label>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <?php
                                                        if (isset($data['mat_colors']) ? count($colors['bottom']) : 0)
                                                        // if (count($mat_colors['bottom']) > 0) 
                                                        {
                                                            foreach ($mat_colors['bottom'] as $mat_color) { ?>
                                                        <div class="col-md-3">
                                                            <div style="text-align: center;"
                                                                onclick="saveMatOptions('bottom', '<?= $mat_color['name'] ?>');applyMat('<?= $mat_color['name'] ?>')">
                                                                <div
                                                                    style="height: 50px; width: 50px;background: <?= $mat_color['color'] ?>;">
                                                                </div>
                                                                <?= $mat_color['name'] ?>
                                                            </div>
                                                        </div>
                                                        <?php }
                                                        }
                                                        ?>
                                                        <table class="table">
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#ffffff');applyMat('#ffffff')"
                                                                        class="card-color-item" color="#ffffff"
                                                                        style="background:#ffffff "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f1f1f1');applyMat('#f1f1f1')"
                                                                        class="card-color-item" color="#f1f1f1"
                                                                        style="background:#f1f1f1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f5f1ee');applyMat('#f5f1ee')"
                                                                        class="card-color-item" color="#f5f1ee"
                                                                        style="background:#f5f1ee "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f3efea');applyMat('#f3efea')"
                                                                        class="card-color-item" color="#f3efea"
                                                                        style="background:#f3efea "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f4ede1');applyMat('#f4ede1')"
                                                                        class="card-color-item" color="#f4ede1"
                                                                        style="background:#f4ede1 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f1e5c7');applyMat('#f1e5c7')"
                                                                        class="card-color-item" color="#f1e5c7"
                                                                        style="background:#f1e5c7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f5eac3');applyMat('#f5eac3')"
                                                                        class="card-color-item" color="#f5eac3"
                                                                        style="background:#f5eac3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#e7e1d1');applyMat('#e7e1d1')"
                                                                        class="card-color-item" color="#e7e1d1"
                                                                        style="background:#e7e1d1 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#d8d7d3');applyMat('#d8d7d3')"
                                                                        class="card-color-item" color="#d8d7d3"
                                                                        style="background:#d8d7d3 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#a8a8aa');applyMat('#a8a8aa')"
                                                                        class="card-color-item" color="#a8a8aa"
                                                                        style="background:#a8a8aa "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#d8d3c8');applyMat('#d8d3c8')"
                                                                        class="card-color-item" color="#d8d3c8"
                                                                        style="background:#d8d3c8 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#8e6b4d');applyMat('#8e6b4d')"
                                                                        class="card-color-item" color="#8e6b4d"
                                                                        style="background:#8e6b4d "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#af3a30');applyMat('#af3a30')"
                                                                        class="card-color-item" color="#af3a30"
                                                                        style="background:#af3a30 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#616054');applyMat('#616054')"
                                                                        class="card-color-item" color="#616054"
                                                                        style="background:#616054 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#8e1e16');applyMat('#8e1e16')"
                                                                        class="card-color-item" color="#8e1e16"
                                                                        style="background:#8e1e16 "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#f0ece7');applyMat('#f0ece7')"
                                                                        class="card-color-item" color="#f0ece7"
                                                                        style="background:#f0ece7 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#766569');applyMat('#766569')"
                                                                        class="card-color-item" color="#766569"
                                                                        style="background:#766569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#544545');applyMat('#544545')"
                                                                        class="card-color-item" color="#544545"
                                                                        style="background:#544545 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#d0be9f');applyMat('#d0be9f')"
                                                                        class="card-color-item" color="#d0be9f"
                                                                        style="background:#d0be9f "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#374569');applyMat('#374569')"
                                                                        class="card-color-item" color="#374569"
                                                                        style="background:#374569 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#4b5b3e');applyMat('#4b5b3e')"
                                                                        class="card-color-item" color="#4b5b3e"
                                                                        style="background:#4b5b3e"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#502626');applyMat('#502626')"
                                                                        class="card-color-item" color="#502626"
                                                                        style="background:#502626 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#23241e');applyMat('#23241e')"
                                                                        class="card-color-item" color="#23241e"
                                                                        style="background:#23241e "></span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#10110c');applyMat('#10110c')"
                                                                        class="card-color-item" color="#10110c"
                                                                        style="background:#10110c"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#29272a');applyMat('#29272a')"
                                                                        class="card-color-item" color="#29272a"
                                                                        style="background:#29272a"></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#97a398');applyMat('#97a398')"
                                                                        class="card-color-item" color="#97a398"
                                                                        style="background:#97a398 "></span>
                                                                </td>
                                                                <td style="padding:5px 0">
                                                                    <span
                                                                        onclick="saveMatOptions('bottom', '#5d666f');applyMat('#5d666f')"
                                                                        class="card-color-item" color="#5d666f"
                                                                        style="background:#5d666f "></span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-0 rounded-0" style="position: relative;">
                                    <div class="card-header" style="cursor: pointer; text-align:center;"
                                        onclick="showFramesSection(this)">
                                        <img src="<?= base_url('assets/imagess/frame.png'); ?>" width="32px"
                                            height="32px" class="icon-img" />
                                        <h6 class="card-title default-disabled">
                                            FRAMES
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group3" class="collapse" data-parent="#accordion-group"
                                        style="position: absolute; left: 100.5%; top: 0px; border: 1px solid #b3b4b7; min-width: 382px;z-index: 1002">
                                        <div class="card-body">
                                            <div class="list-icons closeIcons" style="margin-left: 100%"
                                                onclick="closeFramesSection(this)">
                                                <a href="#" class="list-icons-item"><i class="icon-close2"></i></a>
                                            </div>

                                            <div class="form-group">
                                                <label>Frames by Color</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <!-- <div class="form-group">
                                                <label>Frames by Style</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div> -->

                                            <div class="form-group">
                                                <label>Frames by Width</label>
                                                <select class="form-control form-control-select2" data-fouc>
                                                    <option value="AK">All</option>
                                                </select>
                                            </div>

                                            <span style="font-size: 14px;" class="form-text text-muted mb-3 mt-3">Need
                                                help choosing Mats? <i style="cursor: pointer;" class="icon-help ml-2"
                                                    data-toggle="modal" data-target="#frameInfo"></i></span>
                                            <div id="frameInfo" class="modal fade" tabindex="-1" style="display: none;"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                            <h6 class="modal-title">Framing</h6>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">×</button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h6 class="font-weight-semibold mb-0">Frames:</h6>
                                                            <p>To make a smart frame selection, consider Color, Style
                                                                and Scale. Unless you make greater choices in each
                                                                category, your frame design will not look its best.</p>

                                                            <h6 class="font-weight-semibold mb-0">Color:</h6>
                                                            <p>Frame can blend or contrast with the art or mat it is
                                                                adjacent to. Blending colors will bring a subtlety to
                                                                the design whereas a stronger contrast will be more
                                                                dramatic. One look may be more appreciated than the
                                                                other for specific colors and styles of art.</p>

                                                            <h6 class="font-weight-semibold mb-0">Style:</h6>
                                                            <p>It is common to choose a frame that matches or relates to
                                                                the style of the art, but it isn't always necessary.
                                                                When framing period pieces it is desirable to choose a
                                                                matching style. When framing newer art it can be fun to
                                                                intentionally choose an unexpected style to add
                                                                interest. There should be a relationship between the art
                                                                and frame but it may come from a pattern on the moulding
                                                                replicating the look of something in the art.</p>

                                                            <h6 class="font-weight-semibold mb-0">Scale:</h6>
                                                            <p>Choosing an appropriate width and depth frame is
                                                                important. The frame needs to be substantial enough to
                                                                physically support the size and weight of the piece
                                                                being framed, meaning a heavy plate glass mirror will
                                                                require a wider frame than a lightweight stretched
                                                                canvas. A frame should also look supportive of the
                                                                visual weight of the art. Darker colors, heavy textures
                                                                and bold patterns can all contribute to the appearance
                                                                that art is heavier than it may actually be. If framing
                                                                several sizes of the same print, the frame should get
                                                                progressively wider for larger sizes to maintain the
                                                                same sense of balance from one to the next. The era of
                                                                the art can also guide your selection. Different frame
                                                                widths were popular at various times in history.</p>

                                                            <h6 class="font-weight-semibold mb-0">Tip:</h6>
                                                            <p>The depth of a frame should be able to accommodate all
                                                                the contents that will accompany the art, including
                                                                glass, mats, backings, etc. Deeper frames than needed
                                                                can also be used to project the art outward or recess it
                                                                to add depth.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3">
                                                <button style="width: 100%;" class="btn btn-color"
                                                    onclick="showFramesSidebar('outer')">Select Frames</button>
                                            </div>

                                            <div class="card" id="innerFrames"
                                                style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Inner Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('innerFrames')"><i
                                                                    class="icon-close2"></i></a>
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
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <div class=""
                                                            style="display:flex; flex-wrap: wrap; gap:20px; overflow:scroll ">
                                                            <div
                                                                onclick="saveFrameOptions('inner', '013-03-jc', '0.75', '013-03-jc.jpg');applyFrame('013-03-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-03-jc.jpg') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">013-03
                                                                    [0.75]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown01-3.0', '3.0', 'Brown01-3.0.png');applyFrame('Brown01-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown01-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 01
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown02-3.0', '3.0', 'Brown02-3.0.png');applyFrame('Brown02-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown02-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 02
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown03-3.25Texture', '3.25', 'Brown03-3.25Texture.png');applyFrame('Brown03-3.25Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown03-3.25Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown03 Texture
                                                                    [3.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black01-2.0BlackWooden', '3.25', 'Black01-2.0BlackWooden.png');applyFrame('Black01-2.0BlackWooden')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black01-2.0BlackWooden.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 01-
                                                                    BlackWooden [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black02-0.50GoldenLining', '0.50', 'Black02-0.50GoldenLining.png');applyFrame('Black02-0.50GoldenLining')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black02-0.50GoldenLining.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 02- Golden Lining
                                                                    [0.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black03-0.75Texture', '0.75', 'Black03-0.75Texture.png');applyFrame('Black03-0.75Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black03-0.75Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 03- Texture [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black040.75Texture1.5deep', '0.75', 'Black040.75Texture1.5deep.png');applyFrame('Black040.75Texture1.5deep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black040.75Texture1.5deep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 04 Texture 1.5 deep
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown04-4.0Antique', '4.0', 'Brown04-4.0Antique.png');applyFrame('Brown04-4.0Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 04 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown04-4.0AntiqueCopy', '4.0', 'Brown04-4.0AntiqueCopy.png');applyFrame('Brown04-4.0AntiqueCopy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0AntiqueCopy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown05-4.0DoubleShade', '4.0', 'Brown05-4.0DoubleShade.png');applyFrame('Brown05-4.0DoubleShade')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown05-4.0DoubleShade.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Double Shade
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown06-3.0Texture', '3.0', 'Brown06-3.0Texture.png');applyFrame('Brown06-3.0Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown06-3.0Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 06 Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown07-3.0GoldenTexture', '3.0', 'Brown07-3.0GoldenTexture.png');applyFrame('Brown07-3.0GoldenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown07-3.0GoldenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 07 Golden Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown08-3.0SilverTexture', '3.0', 'Brown08-3.0SilverTexture.png');applyFrame('Brown08-3.0SilverTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown08-3.0SilverTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 08 Silver Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown10-1.5.0DoubleShadeBoxFrame', '1.5', 'Brown10-1.5.0DoubleShadeBoxFrame.png');applyFrame('Brown10-1.5.0DoubleShadeBoxFrame')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown10-1.5.0DoubleShadeBoxFrame.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 10 Double Shade Box Frame
                                                                    [1.5]</span>
                                                            </div>
                                                            <!-- new frames -->



                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown14-0.75DarkWoodenTexture', '0.75', 'Brown14-0.75DarkWoodenTexture.png');applyFrame('Brown14-0.75DarkWoodenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown14-0.75DarkWoodenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 14 Dark Wooden Texture
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown15-0.75WoodenTextureRoundTop', '0.75', 'Brown15-0.75WoodenTextureRoundTop.png');applyFrame('Brown15-0.75WoodenTextureRoundTop')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown15-0.75WoodenTextureRoundTop.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 15 Wooden Texture Round
                                                                    Top
                                                                    [0.75]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown17-4.0AntiqueCoper', '4.0', 'Brown17-4.0AntiqueCoper.png');applyFrame('Brown17-4.0AntiqueCoper')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown17-4.0AntiqueCoper.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 17 Antique Coper
                                                                    [4.0]</span>
                                                            </div>


                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown20-1.25LightBrownDoubleGutter', '1.25', 'Brown20-1.25LightBrownDoubleGutter.png');applyFrame('Brown20-1.25LightBrownDoubleGutter')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown20-1.25LightBrownDoubleGutter.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 20 Light Brown Double
                                                                    Gutter
                                                                    [1.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown22-1.50BrownTexture', '1.5', 'Brown22-1.50BrownTexture.png');applyFrame('Brown22-1.50BrownTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown22-1.50BrownTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 22 Brown Texture
                                                                    [1.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown23-0.75Brown', '0.75', 'Brown23-0.75Brown.png');applyFrame('Brown23-0.75Brown')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown23-0.75Brown.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 23 Brown
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden014.25', '4.25', 'Golden014.25.png');applyFrame('Golden014.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden014.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 01
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden02-4.25Copy', '4.25', 'Golden02-4.25Copy.png');applyFrame('Golden02-4.25Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden02-4.25Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 2 -
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden03-4.0Copy', '4.0', 'Golden03-4.0Copy.png');applyFrame('Golden03-4.0Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden03-4.0Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 3
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden04-4.25', '4.25', 'Golden04-4.25.png');applyFrame('Golden04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 4
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Grey01-4.25', '4.25', 'Grey01-4.25.png');applyFrame('Grey01-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Grey01-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Grey 01
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver01-3.5', '3.5', 'Silver01-3.5.png');applyFrame('Silver01-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver01-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 01
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver03-4.25', '4.25', 'Silver03-4.25.png');applyFrame('Silver03-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver03-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 03
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver04-4.25', '4.25', 'Silver04-4.25.png');applyFrame('Silver04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 04
                                                                    [4.25]</span>
                                                            </div>
                                                            <!-- new frames -->
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver06-3.5', '3.5', 'Silver06-3.5.png');applyFrame('Silver06-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver06-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 06
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver07-4.25Antique', '4.25', 'Silver07-4.25Antique.png');applyFrame('Silver07-4.25Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver07-4.25Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 07 Antique
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver08-4.25WoodenAntique', '4.25', 'Silver08-4.25WoodenAntique.png');applyFrame('Silver08-4.25WoodenAntique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver08-4.25WoodenAntique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 08 Wooden Antique
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver09-4.00Antique', '4.0', 'Silver09-4.00Antique.png');applyFrame('Silver09-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver09-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 09 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver10-4.00Antique', '4.0', 'Silver10-4.00Antique.png');applyFrame('Silver10-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver10-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 10 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver11-4.00ReflectingLines', '4.0', 'Silver11-4.00ReflectingLines.png');applyFrame('Silver11-4.00ReflectingLines')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver11-4.00ReflectingLines.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 11 Reflecting Lines
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver12-0.50BlackTexture', '4.0', 'Silver12-0.50BlackTexture.png');applyFrame('Silver12-0.50BlackTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver12-0.50BlackTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 12 Black Texture
                                                                    [4.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White02-0.75Plain', '0.75', 'White02-0.75Plain.png');applyFrame('White02-0.75Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White02-0.75Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 02 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White03-0.50Plain', '0.75', 'White03-0.50Plain.png');applyFrame('White03-0.50Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White03-0.50Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White04-1.50PlainDeep', '1.5', 'White04-1.50PlainDeep.png');applyFrame('White04-1.50PlainDeep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-1.50PlainDeep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White04-2.0Plain', '2.0', 'White04-2.0Plain.png');applyFrame('White04-2.0Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-2.0Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 04 Plain
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White06-1.5Plain', '1.5', 'White06-1.5Plain.png');applyFrame('White06-1.5Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White06-1.5Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 06 Plain
                                                                    [1.5]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', '013-W1-jc', '1.5', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', '013-W1-jc', '2.0', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', '149-W1-jc', '0.5', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', '149-W1-jc', '0.75', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', '149-W1-jc', '1.0', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [1.0]</span>
                                                            </div>
                                                            <!-- new frames 14/9/2021 -->
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'BrownGold1497', '2.0', 'BrownGold1497.png');applyFrame('BrownGold1497')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold1497.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold1497
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'BrownGold_1500', '2.0', 'BrownGold_1500.png');applyFrame('BrownGold_1500')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold_1500.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold_1500
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1509_copy', '1.0', 'Brown_1509_copy.png');applyFrame('Brown_1509_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1509_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1509 Copy
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1509_copy', '1.0', 'Brown_1509_copy.png');applyFrame('Brown_1509_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1509_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1509 Copy
                                                                    [1.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1506_copy', '2.0', 'Silver_1506_copy.png');applyFrame('Silver_1506_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1506_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">SILVER_1506 (Copy)
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1510', '2.0', 'Golden_1510.png');applyFrame('Golden_1510')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1510.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1510
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1512', '2.0', 'Golden_1512.png');applyFrame('Golden_1512')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1512.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1512
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Antique_1522', '1.5', 'Antique_1522.png');applyFrame('Antique_1522')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Antique_1522.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Antique_1522
                                                                    [1.5]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'AntiqueClassic_1524', '2.0', 'AntiqueClassic_1524.png');applyFrame('AntiqueClassic_1524')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/AntiqueClassic_1524.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">AntiqueClassic_1524
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1528_copy', '2.0', 'Silver_1528_copy.png');applyFrame('Silver_1528_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1528_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1528 Copy
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1533', '2.0', 'Golden_1533.png');applyFrame('Golden_1533')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1533.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1533
                                                                    [2.0]</span>
                                                            </div>

                                                            <!-- new frames 10/10/2021 -->
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1535', '1.5', 'Golden_1535.png');applyFrame('Golden_1535')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1535.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1535
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White_Golden_1538', '2.25', 'White_Golden_1538.png');applyFrame('White_Golden_1538')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_Golden_1538.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_Golden_1538
                                                                    [2.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_Golden_1541', '2.5', 'Black_Golden_1541.png');applyFrame('Black_Golden_1541')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1541.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1541
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1542', '0.75', 'Brown_1542.png');applyFrame('Brown_1542')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1542.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1542
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1544', '0.5', 'Golden_1544.png');applyFrame('Golden_1544')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1544.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1544
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1547', '0.75', 'Silver_1547.png');applyFrame('Silver_1547')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1547.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1547
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1548', '0.75', 'Brown_1548.png');applyFrame('Brown_1548')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1548.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1548
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1550', '0.75', 'Golden_1550.png');applyFrame('Golden_1550')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1550.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1550
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1553', '0.75', 'Silver_1553.png');applyFrame('Silver_1553')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1553.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1553
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_Golden_1554', '1.5', 'Brown_Golden_1554.png');applyFrame('Brown_Golden_1554')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_Golden_1554.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_Golden_1554
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1555_copy', '1.5', 'Silver_1555_copy.png');applyFrame('Silver_1555_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1555_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1555_copy
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1558', '2.0', 'Silver_1558.png');applyFrame('Silver_1558')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1558.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1558
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1559', '2.0', 'Golden_1559.png');applyFrame('Golden_1559')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1559.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1559
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_Gold_1562', '1.25', 'Black_Gold_1562.png');applyFrame('Black_Gold_1562')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Gold_1562.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Gold_1562
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1566', '1.25', 'Brown_1566.png');applyFrame('Brown_1566')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1566.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1566
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_1561', '2.0', 'Black_1561.png');applyFrame('Black_1561')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1561.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1561
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1567', '0.75', 'Brown_1567.png');applyFrame('Brown_1567')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1567.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1567
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1571', '0.75', 'Brown_1571.png');applyFrame('Brown_1571')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1571.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1571
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1574', '1.25', 'Brown_1574.png');applyFrame('Brown_1574')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1574.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1574
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1576', '1.25', 'Brown_1576.png');applyFrame('Brown_1576')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1576.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1576
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1577', '1.0', 'Brown_1577.png');applyFrame('Brown_1577')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1577.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1577
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1582', '0.5', 'Brown_1582.png');applyFrame('Brown_1582')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1582.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1582
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1586', '0.5', 'Golden_1586.png');applyFrame('Golden_1586')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1586.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1586
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_Golden_1588_copy', '0.5', 'Black_Golden_1588_copy.png');applyFrame('Black_Golden_1588_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1588_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1588 copy
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_1589', '0.75', 'Black_1589.png');applyFrame('Black_1589')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1589.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1589
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_1590', '2.0', 'Black_1590.png');applyFrame('Black_1590')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1590.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1590
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Multicolor_1593_copy', '2.0', 'Multicolor_1593_copy.png');applyFrame('Multicolor_1593_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Multicolor_1593_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Multicolor_1593_copy
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1596', '2.5', 'Brown_1596.png');applyFrame('Brown_1596')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1596.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1596
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'White_1599', '2.5', 'White_1599.png');applyFrame('White_1599')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_1599.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_1599
                                                                    [2.5]</span>
                                                            </div>
                                                            <!-- new -->
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1519', '2.0', 'Golden_1519.png');applyFrame('Golden_1519')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1519.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1519
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Silver_1609', '2.0', 'Silver_1609.png');applyFrame('Silver_1609')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1609.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1609
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1614', '1.0', 'Golden_1614.png');applyFrame('Golden_1614')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1614.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1614
                                                                    [1.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1616', '2.0', 'Brown_1616.png');applyFrame('Brown_1616')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1616.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1616
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1619', '2.0', 'Golden_1619.png');applyFrame('Golden_1619')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1619.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1619
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Golden_1606', '2.0', 'Golden_1606.png');applyFrame('Golden_1606')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1606.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1606
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Black_1630', '2.0', 'Black_1630.png');applyFrame('Black_1630')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1630.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1630
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1634', '2.0', 'Brown_1634.png');applyFrame('Brown_1634')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1634.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1634
                                                                    [2.0]</span>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="middleFrames"
                                                style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Middle Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('middleFrames')"><i
                                                                    class="icon-close2"></i></a>
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
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <div class=""
                                                            style="display:flex; flex-wrap: wrap; gap:20px; overflow:scroll ">

                                                            <div
                                                                onclick="saveFrameOptions('middle', '013-03-jc', '0.75', '013-03-jc.jpg');applyFrame('013-03-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-03-jc.jpg') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">013-03
                                                                    [0.75]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown01-3.0', '3.0', 'Brown01-3.0.png');applyFrame('Brown01-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown01-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 01
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown02-3.0', '3.0', 'Brown02-3.0.png');applyFrame('Brown02-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown02-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 02
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown03-3.25Texture', '3.25', 'Brown03-3.25Texture.png');applyFrame('Brown03-3.25Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown03-3.25Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown03 Texture
                                                                    [3.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black01-2.0BlackWooden', '3.25', 'Black01-2.0BlackWooden.png');applyFrame('Black01-2.0BlackWooden')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black01-2.0BlackWooden.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 01-
                                                                    BlackWooden [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black02-0.50GoldenLining', '0.50', 'Black02-0.50GoldenLining.png');applyFrame('Black02-0.50GoldenLining')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black02-0.50GoldenLining.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 02- Golden Lining
                                                                    [0.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black03-0.75Texture', '0.75', 'Black03-0.75Texture.png');applyFrame('Black03-0.75Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black03-0.75Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 03- Texture [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black040.75Texture1.5deep', '0.75', 'Black040.75Texture1.5deep.png');applyFrame('Black040.75Texture1.5deep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black040.75Texture1.5deep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 04 Texture 1.5 deep
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown04-4.0Antique', '4.0', 'Brown04-4.0Antique.png');applyFrame('Brown04-4.0Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 04 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown04-4.0AntiqueCopy', '4.0', 'Brown04-4.0AntiqueCopy.png');applyFrame('Brown04-4.0AntiqueCopy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0AntiqueCopy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown05-4.0DoubleShade', '4.0', 'Brown05-4.0DoubleShade.png');applyFrame('Brown05-4.0DoubleShade')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown05-4.0DoubleShade.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Double Shade
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown06-3.0Texture', '3.0', 'Brown06-3.0Texture.png');applyFrame('Brown06-3.0Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown06-3.0Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 06 Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown07-3.0GoldenTexture', '3.0', 'Brown07-3.0GoldenTexture.png');applyFrame('Brown07-3.0GoldenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown07-3.0GoldenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 07 Golden Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown08-3.0SilverTexture', '3.0', 'Brown08-3.0SilverTexture.png');applyFrame('Brown08-3.0SilverTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown08-3.0SilverTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 08 Silver Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown10-1.5.0DoubleShadeBoxFrame', '1.5', 'Brown10-1.5.0DoubleShadeBoxFrame.png');applyFrame('Brown10-1.5.0DoubleShadeBoxFrame')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown10-1.5.0DoubleShadeBoxFrame.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 10 Double Shade Box Frame
                                                                    [1.5]</span>
                                                            </div>
                                                            <!-- new frames -->


                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown14-0.75DarkWoodenTexture', '0.75', 'Brown14-0.75DarkWoodenTexture.png');applyFrame('Brown14-0.75DarkWoodenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown14-0.75DarkWoodenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 14 Dark Wooden Texture
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown15-0.75WoodenTextureRoundTop', '0.75', 'Brown15-0.75WoodenTextureRoundTop.png');applyFrame('Brown15-0.75WoodenTextureRoundTop')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown15-0.75WoodenTextureRoundTop.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 15 Wooden Texture Round
                                                                    Top
                                                                    [0.75]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown17-4.0AntiqueCoper', '4.0', 'Brown17-4.0AntiqueCoper.png');applyFrame('Brown17-4.0AntiqueCoper')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown17-4.0AntiqueCoper.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 17 Antique Coper
                                                                    [4.0]</span>
                                                            </div>


                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown20-1.25LightBrownDoubleGutter', '1.25', 'Brown20-1.25LightBrownDoubleGutter.png');applyFrame('Brown20-1.25LightBrownDoubleGutter')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown20-1.25LightBrownDoubleGutter.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 20 Light Brown Double
                                                                    Gutter
                                                                    [1.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown22-1.50BrownTexture', '1.5', 'Brown22-1.50BrownTexture.png');applyFrame('Brown22-1.50BrownTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown22-1.50BrownTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 22 Brown Texture
                                                                    [1.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown23-0.75Brown', '0.75', 'Brown23-0.75Brown.png');applyFrame('Brown23-0.75Brown')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown23-0.75Brown.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 23 Brown
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden014.25', '4.25', 'Golden014.25.png');applyFrame('Golden014.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden014.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 01
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden02-4.25Copy', '4.25', 'Golden02-4.25Copy.png');applyFrame('Golden02-4.25Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden02-4.25Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 2 -
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden03-4.0Copy', '4.0', 'Golden03-4.0Copy.png');applyFrame('Golden03-4.0Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden03-4.0Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 3
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden04-4.25', '4.25', 'Golden04-4.25.png');applyFrame('Golden04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 4
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Grey01-4.25', '4.25', 'Grey01-4.25.png');applyFrame('Grey01-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Grey01-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Grey 01
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver01-3.5', '3.5', 'Silver01-3.5.png');applyFrame('Silver01-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver01-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 01
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver03-4.25', '4.25', 'Silver03-4.25.png');applyFrame('Silver03-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver03-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 03
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver04-4.25', '4.25', 'Silver04-4.25.png');applyFrame('Silver04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 04
                                                                    [4.25]</span>
                                                            </div>
                                                            <!-- new frames -->

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver06-3.5', '3.5', 'Silver06-3.5.png');applyFrame('Silver06-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver06-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 06
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver07-4.25Antique', '4.25', 'Silver07-4.25Antique.png');applyFrame('Silver07-4.25Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver07-4.25Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 07 Antique
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver08-4.25WoodenAntique', '4.25', 'Silver08-4.25WoodenAntique.png');applyFrame('Silver08-4.25WoodenAntique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver08-4.25WoodenAntique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 08 Wooden Antique
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver09-4.00Antique', '4.0', 'Silver09-4.00Antique.png');applyFrame('Silver09-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver09-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 09 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver10-4.00Antique', '4.0', 'Silver10-4.00Antique.png');applyFrame('Silver10-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver10-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 10 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver11-4.00ReflectingLines', '4.0', 'Silver11-4.00ReflectingLines.png');applyFrame('Silver11-4.00ReflectingLines')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver11-4.00ReflectingLines.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 11 Reflecting Lines
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver12-0.50BlackTexture', '4.0', 'Silver12-0.50BlackTexture.png');applyFrame('Silver12-0.50BlackTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver12-0.50BlackTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 12 Black Texture
                                                                    [4.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White02-0.75Plain', '0.75', 'White02-0.75Plain.png');applyFrame('White02-0.75Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White02-0.75Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 02 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White03-0.50Plain', '0.75', 'White03-0.50Plain.png');applyFrame('White03-0.50Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White03-0.50Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White04-1.50PlainDeep', '1.5', 'White04-1.50PlainDeep.png');applyFrame('White04-1.50PlainDeep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-1.50PlainDeep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White04-2.0Plain', '2.0', 'White04-2.0Plain.png');applyFrame('White04-2.0Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-2.0Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 04 Plain
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White06-1.5Plain', '1.5', 'White06-1.5Plain.png');applyFrame('White06-1.5Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White06-1.5Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 06 Plain
                                                                    [1.5]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', '013-W1-jc', '1.5', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', '013-W1-jc', '2.0', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', '149-W1-jc', '0.5', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', '149-W1-jc', '0.75', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', '149-W1-jc', '1.0', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [1.0]</span>
                                                            </div>

                                                            <!-- new frames 14/9/2021 -->
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'BrownGold1497', '2.0', 'BrownGold1497.png');applyFrame('BrownGold1497')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold1497.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold1497
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'BrownGold_1500', '2.0', 'BrownGold_1500.png');applyFrame('BrownGold_1500')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold_1500.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold_1500
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('inner', 'Brown_1509_copy', '1.0', 'Brown_1509_copy.png');applyFrame('Brown_1509_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1509_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1509 Copy
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1506_copy', '2.0', 'Silver_1506_copy.png');applyFrame('Silver_1506_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1506_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">SILVER_1506 (Copy)
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1510', '2.0', 'Golden_1510.png');applyFrame('Golden_1510')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1510.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1510
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1512', '2.0', 'Golden_1512.png');applyFrame('Golden_1512')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1512.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1512
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Antique_1522', '1.5', 'Antique_1522.png');applyFrame('Antique_1522')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Antique_1522.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Antique_1522
                                                                    [1.5]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'AntiqueClassic_1524', '2.0', 'AntiqueClassic_1524.png');applyFrame('AntiqueClassic_1524')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/AntiqueClassic_1524.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">AntiqueClassic_1524
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1528_copy', '2.0', 'Silver_1528_copy.png');applyFrame('Silver_1528_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1528_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1528 Copy
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1533', '2.0', 'Golden_1533.png');applyFrame('Golden_1533')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1533.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1533
                                                                    [2.0]</span>
                                                            </div>
                                                            <!-- new frames 10/10/2021 -->
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1535', '1.5', 'Golden_1535.png');applyFrame('Golden_1535')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1535.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1535
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White_Golden_1538', '2.25', 'White_Golden_1538.png');applyFrame('White_Golden_1538')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_Golden_1538.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_Golden_1538
                                                                    [2.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_Golden_1541', '2.5', 'Black_Golden_1541.png');applyFrame('Black_Golden_1541')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1541.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1541
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1542', '0.75', 'Brown_1542.png');applyFrame('Brown_1542')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1542.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1542
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1544', '0.5', 'Golden_1544.png');applyFrame('Golden_1544')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1544.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1544
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1547', '0.75', 'Silver_1547.png');applyFrame('Silver_1547')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1547.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1547
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1548', '0.75', 'Brown_1548.png');applyFrame('Brown_1548')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1548.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1548
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1550', '0.75', 'Golden_1550.png');applyFrame('Golden_1550')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1550.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1550
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1553', '0.75', 'Silver_1553.png');applyFrame('Silver_1553')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1553.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1553
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_Golden_1554', '1.5', 'Brown_Golden_1554.png');applyFrame('Brown_Golden_1554')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_Golden_1554.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_Golden_1554
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1555_copy', '1.5', 'Silver_1555_copy.png');applyFrame('Silver_1555_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1555_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1555_copy
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1558', '2.0', 'Silver_1558.png');applyFrame('Silver_1558')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1558.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1558
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1559', '2.0', 'Golden_1559.png');applyFrame('Golden_1559')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1559.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1559
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_Gold_1562', '1.25', 'Black_Gold_1562.png');applyFrame('Black_Gold_1562')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Gold_1562.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Gold_1562
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1566', '1.25', 'Brown_1566.png');applyFrame('Brown_1566')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1566.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1566
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_1561', '2.0', 'Black_1561.png');applyFrame('Black_1561')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1561.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1561
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1567', '0.75', 'Brown_1567.png');applyFrame('Brown_1567')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1567.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1567
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1571', '0.75', 'Brown_1571.png');applyFrame('Brown_1571')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1571.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1571
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1574', '1.25', 'Brown_1574.png');applyFrame('Brown_1574')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1574.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1574
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1576', '1.25', 'Brown_1576.png');applyFrame('Brown_1576')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1576.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1576
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1577', '1.0', 'Brown_1577.png');applyFrame('Brown_1577')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1577.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1577
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1582', '0.5', 'Brown_1582.png');applyFrame('Brown_1582')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1582.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1582
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1586', '0.5', 'Golden_1586.png');applyFrame('Golden_1586')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1586.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1586
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_Golden_1588_copy', '0.5', 'Black_Golden_1588_copy.png');applyFrame('Black_Golden_1588_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1588_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1588 copy
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_1589', '0.75', 'Black_1589.png');applyFrame('Black_1589')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1589.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1589
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_1590', '2.0', 'Black_1590.png');applyFrame('Black_1590')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1590.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1590
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Multicolor_1593_copy', '2.0', 'Multicolor_1593_copy.png');applyFrame('Multicolor_1593_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Multicolor_1593_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Multicolor_1593_copy
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1596', '2.5', 'Brown_1596.png');applyFrame('Brown_1596')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1596.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1596
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'White_1599', '2.5', 'White_1599.png');applyFrame('White_1599')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_1599.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_1599
                                                                    [2.5]</span>
                                                            </div>

                                                            <!-- new ones -->
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1519', '2.0', 'Golden_1519.png');applyFrame('Golden_1519')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1519.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1519
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Silver_1609', '2.0', 'Silver_1609.png');applyFrame('Silver_1609')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1609.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1609
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1614', '1.0', 'Golden_1614.png');applyFrame('Golden_1614')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1614.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1614
                                                                    [1.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1616', '2.0', 'Brown_1616.png');applyFrame('Brown_1616')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1616.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1616
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1619', '2.0', 'Golden_1619.png');applyFrame('Golden_1619')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1619.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1619
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Golden_1606', '2.0', 'Golden_1606.png');applyFrame('Golden_1606')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1606.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1606
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Black_1630', '2.0', 'Black_1630.png');applyFrame('Black_1630')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1630.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1630
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('middle', 'Brown_1634', '2.0', 'Brown_1634.png');applyFrame('Brown_1634')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1634.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1634
                                                                    [2.0]</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card" id="outerFrames"
                                                style="position: absolute; top: 150px; left: 311px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Outer Frame</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('outerFrames')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <!-- <div class="form-group">
                                                                <label>Search by Frame Name/Item #:</label>
                                                                <input type="text" class="form-control">
                                                                <label class="mt-2">Total Frames: 2</label>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <div class=""
                                                            style="display:flex; flex-wrap: wrap; gap:20px; overflow:scroll ">

                                                            <div
                                                                onclick="saveFrameOptions('outer', '013-03-jc', '0.75', '013-03-jc.jpg');applyFrame('013-03-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-03-jc.jpg') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">013-03
                                                                    [0.75]</span>
                                                            </div>


                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown01-3.0', '3.0', 'Brown01-3.0.png');applyFrame('Brown01-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown01-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 01
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown02-3.0', '3.0', 'Brown02-3.0.png');applyFrame('Brown02-3.0')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown02-3.0.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 02
                                                                    [3.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown03-3.25Texture', '3.25', 'Brown03-3.25Texture.png');applyFrame('Brown03-3.25Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown03-3.25Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 03 Texture
                                                                    [3.25]</span>
                                                            </div>
                                                            <!-- new frames -->
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black01-2.0BlackWooden', '3.25', 'Black01-2.0BlackWooden.png');applyFrame('Black01-2.0BlackWooden')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black01-2.0BlackWooden.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 01-
                                                                    BlackWooden [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black02-0.50GoldenLining', '0.50', 'Black02-0.50GoldenLining.png');applyFrame('Black02-0.50GoldenLining')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black02-0.50GoldenLining.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 02- Golden Lining
                                                                    [0.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black03-0.75Texture', '0.75', 'Black03-0.75Texture.png');applyFrame('Black03-0.75Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black03-0.75Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 03- Texture [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black040.75Texture1.5deep', '0.75', 'Black040.75Texture1.5deep.png');applyFrame('Black040.75Texture1.5deep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black040.75Texture1.5deep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Black 04 Texture 1.5 deep
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown04-4.0Antique', '4.0', 'Brown04-4.0Antique.png');applyFrame('Brown04-4.0Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 04 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown04-4.0AntiqueCopy', '4.0', 'Brown04-4.0AntiqueCopy.png');applyFrame('Brown04-4.0AntiqueCopy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown04-4.0AntiqueCopy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown05-4.0DoubleShade', '4.0', 'Brown05-4.0DoubleShade.png');applyFrame('Brown05-4.0DoubleShade')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown05-4.0DoubleShade.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 05 Double Shade
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown06-3.0Texture', '3.0', 'Brown06-3.0Texture.png');applyFrame('Brown06-3.0Texture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown06-3.0Texture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 06 Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown07-3.0GoldenTexture', '3.0', 'Brown07-3.0GoldenTexture.png');applyFrame('Brown07-3.0GoldenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown07-3.0GoldenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 07 Golden Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown08-3.0SilverTexture', '3.0', 'Brown08-3.0SilverTexture.png');applyFrame('Brown08-3.0SilverTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown08-3.0SilverTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 08 Silver Texture
                                                                    [3.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown10-1.5.0DoubleShadeBoxFrame', '1.5', 'Brown10-1.5.0DoubleShadeBoxFrame.png');applyFrame('Brown10-1.5.0DoubleShadeBoxFrame')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown10-1.5.0DoubleShadeBoxFrame.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 10 Double Shade Box Frame
                                                                    [1.5]</span>
                                                            </div>
                                                            <!-- new frames again -->


                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown14-0.75DarkWoodenTexture', '0.75', 'Brown14-0.75DarkWoodenTexture.png');applyFrame('Brown14-0.75DarkWoodenTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown14-0.75DarkWoodenTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 14 Dark Wooden Texture
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown15-0.75WoodenTextureRoundTop', '0.75', 'Brown15-0.75WoodenTextureRoundTop.png');applyFrame('Brown15-0.75WoodenTextureRoundTop')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown15-0.75WoodenTextureRoundTop.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 15 Wooden Texture Round
                                                                    Top
                                                                    [0.75]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown17-4.0AntiqueCoper', '4.0', 'Brown17-4.0AntiqueCoper.png');applyFrame('Brown17-4.0AntiqueCoper')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown17-4.0AntiqueCoper.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 17 Antique Coper
                                                                    [4.0]</span>
                                                            </div>


                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown20-1.25LightBrownDoubleGutter', '1.25', 'Brown20-1.25LightBrownDoubleGutter.png');applyFrame('Brown20-1.25LightBrownDoubleGutter')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown20-1.25LightBrownDoubleGutter.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 20 Light Brown Double
                                                                    Gutter
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown22-1.50BrownTexture', '1.5', 'Brown22-1.50BrownTexture.png');applyFrame('Brown22-1.50BrownTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown22-1.50BrownTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 22 Brown Texture
                                                                    [1.50]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown23-0.75Brown', '0.75', 'Brown23-0.75Brown.png');applyFrame('Brown23-0.75Brown')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown23-0.75Brown.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Brown 23 Brown
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden014.25', '4.25', 'Golden014.25.png');applyFrame('Golden014.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden014.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 01
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden02-4.25Copy', '4.25', 'Golden02-4.25Copy.png');applyFrame('Golden02-4.25Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden02-4.25Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 2 -
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden03-4.0Copy', '4.0', 'Golden03-4.0Copy.png');applyFrame('Golden03-4.0Copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden03-4.0Copy.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 3
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden04-4.25', '4.25', 'Golden04-4.25.png');applyFrame('Golden04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Golden 4
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Grey01-4.25', '4.25', 'Grey01-4.25.png');applyFrame('Grey01-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Grey01-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Grey 01
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver01-3.5', '3.5', 'Silver01-3.5.png');applyFrame('Silver01-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver01-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 01
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver03-4.25', '4.25', 'Silver03-4.25.png');applyFrame('Silver03-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver03-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 03
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver04-4.25', '4.25', 'Silver04-4.25.png');applyFrame('Silver04-4.25')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver04-4.25.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 04
                                                                    [4.25]</span>
                                                            </div>
                                                            <!-- new frames -->

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver06-3.5', '3.5', 'Silver06-3.5.png');applyFrame('Silver06-3.5')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver06-3.5.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 06
                                                                    [3.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver07-4.25Antique', '4.25', 'Silver07-4.25Antique.png');applyFrame('Silver07-4.25Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver07-4.25Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 07 Antique
                                                                    [4.25]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver08-4.25WoodenAntique', '4.25', 'Silver08-4.25WoodenAntique.png');applyFrame('Silver08-4.25WoodenAntique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver08-4.25WoodenAntique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 08 Wooden Antique
                                                                    [4.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver09-4.00Antique', '4.0', 'Silver09-4.00Antique.png');applyFrame('Silver09-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver09-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 09 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver10-4.00Antique', '4.0', 'Silver10-4.00Antique.png');applyFrame('Silver10-4.00Antique')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver10-4.00Antique.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 10 Antique
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver11-4.00ReflectingLines', '4.0', 'Silver11-4.00ReflectingLines.png');applyFrame('Silver11-4.00ReflectingLines')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver11-4.00ReflectingLines.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 11 Reflecting Lines
                                                                    [4.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver12-0.50BlackTexture', '4.0', 'Silver12-0.50BlackTexture.png');applyFrame('Silver12-0.50BlackTexture')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver12-0.50BlackTexture.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">Silver 12 Black Texture
                                                                    [4.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White02-0.75Plain', '0.75', 'White02-0.75Plain.png');applyFrame('White02-0.75Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White02-0.75Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 02 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White03-0.50Plain', '0.75', 'White03-0.50Plain.png');applyFrame('White03-0.50Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White03-0.50Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White04-1.50PlainDeep', '1.5', 'White04-1.50PlainDeep.png');applyFrame('White04-1.50PlainDeep')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-1.50PlainDeep.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 03 Plain
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White04-2.0Plain', '2.0', 'White04-2.0Plain.png');applyFrame('White04-2.0Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White04-2.0Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 04 Plain
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White06-1.5Plain', '1.5', 'White06-1.5Plain.png');applyFrame('White06-1.5Plain')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White06-1.5Plain.png') ?>"
                                                                    alt="" style="width:100px;height:30px">
                                                                <span class="item-name">White 06 Plain
                                                                    [1.5]</span>
                                                            </div>

                                                            <!-- new frames again -->
                                                            <div
                                                                onclick="saveFrameOptions('outer', '013-W1-jc', '1.5', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', '013-W1-jc', '2.0', '013-W1-jc.jpg');applyFrame('013-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/013-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 013-W1-jc
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', '149-W1-jc', '0.5', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', '149-W1-jc', '0.75', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', '149-W1-jc', '1.0', '149-W1-jc.jpg');applyFrame('149-W1-jc')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/149-W1-jc.jpg') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White 149-W1-jc
                                                                    [1.0]</span>
                                                            </div>
                                                            <!-- new frames again 14/9/2021-->

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'BrownGold1497', '2.0', 'BrownGold1497.png');applyFrame('BrownGold1497')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold1497.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold1497
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'BrownGold_1500', '2.0', 'BrownGold_1500.png');applyFrame('BrownGold_1500')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/BrownGold_1500.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">BrownGold_1500
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1509_copy', '1.0', 'Brown_1509_copy.png');applyFrame('Brown_1509_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1509_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1509 Copy
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1506_copy', '2.0', 'Silver_1506_copy.png');applyFrame('Silver_1506_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1506_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">SILVER_1506 (Copy)
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1510', '2.0', 'Golden_1510.png');applyFrame('Golden_1510')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1510.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1510
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1512', '2.0', 'Golden_1512.png');applyFrame('Golden_1512')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1512.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1512
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Antique_1522', '1.5', 'Antique_1522.png');applyFrame('Antique_1522')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Antique_1522.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Antique_1522
                                                                    [1.5]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'AntiqueClassic_1524', '2.0', 'AntiqueClassic_1524.png');applyFrame('AntiqueClassic_1524')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/AntiqueClassic_1524.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">AntiqueClassic_1524
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1528_copy', '2.0', 'Silver_1528_copy.png');applyFrame('Silver_1528_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1528_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1528 Copy
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1533', '2.0', 'Golden_1533.png');applyFrame('Golden_1533')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1533.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1533
                                                                    [2.0]</span>
                                                            </div>

                                                            <!-- new frames 10/10/2021 -->
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1535', '1.5', 'Golden_1535.png');applyFrame('Golden_1535')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1535.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1535
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White_Golden_1538', '2.25', 'White_Golden_1538.png');applyFrame('White_Golden_1538')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_Golden_1538.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_Golden_1538
                                                                    [2.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_Golden_1541', '2.5', 'Black_Golden_1541.png');applyFrame('Black_Golden_1541')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1541.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1541
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1542', '0.75', 'Brown_1542.png');applyFrame('Brown_1542')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1542.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1542
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1544', '0.5', 'Golden_1544.png');applyFrame('Golden_1544')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1544.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1544
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1547', '0.75', 'Silver_1547.png');applyFrame('Silver_1547')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1547.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1547
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1548', '0.75', 'Brown_1548.png');applyFrame('Brown_1548')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1548.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1548
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1550', '0.75', 'Golden_1550.png');applyFrame('Golden_1550')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1550.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1550
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1553', '0.75', 'Silver_1553.png');applyFrame('Silver_1553')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1553.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1553
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_Golden_1554', '1.5', 'Brown_Golden_1554.png');applyFrame('Brown_Golden_1554')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_Golden_1554.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_Golden_1554
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1555_copy', '1.5', 'Silver_1555_copy.png');applyFrame('Silver_1555_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1555_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1555_copy
                                                                    [1.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1558', '2.0', 'Silver_1558.png');applyFrame('Silver_1558')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1558.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1558
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1559', '2.0', 'Golden_1559.png');applyFrame('Golden_1559')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1559.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1559
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_Gold_1562', '1.25', 'Black_Gold_1562.png');applyFrame('Black_Gold_1562')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Gold_1562.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Gold_1562
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1566', '1.25', 'Brown_1566.png');applyFrame('Brown_1566')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1566.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1566
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_1561', '2.0', 'Black_1561.png');applyFrame('Black_1561')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1561.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1561
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1567', '0.75', 'Brown_1567.png');applyFrame('Brown_1567')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1567.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1567
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1571', '0.75', 'Brown_1571.png');applyFrame('Brown_1571')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1571.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1571
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1574', '1.25', 'Brown_1574.png');applyFrame('Brown_1574')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1574.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1574
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1576', '1.25', 'Brown_1576.png');applyFrame('Brown_1576')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1576.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1576
                                                                    [1.25]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1577', '1.0', 'Brown_1577.png');applyFrame('Brown_1577')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1577.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1577
                                                                    [1.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1582', '0.5', 'Brown_1582.png');applyFrame('Brown_1582')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1582.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1582
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1586', '0.5', 'Golden_1586.png');applyFrame('Golden_1586')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1586.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1586
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_Golden_1588_copy', '0.5', 'Black_Golden_1588_copy.png');applyFrame('Black_Golden_1588_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_Golden_1588_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_Golden_1588 copy
                                                                    [0.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_1589', '0.75', 'Black_1589.png');applyFrame('Black_1589')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1589.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1589
                                                                    [0.75]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_1590', '2.0', 'Black_1590.png');applyFrame('Black_1590')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1590.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1590
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Multicolor_1593_copy', '2.0', 'Multicolor_1593_copy.png');applyFrame('Multicolor_1593_copy')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Multicolor_1593_copy.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Multicolor_1593_copy
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1596', '2.5', 'Brown_1596.png');applyFrame('Brown_1596')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1596.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1596
                                                                    [2.5]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'White_1599', '2.5', 'White_1599.png');applyFrame('White_1599')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/White_1599.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">White_1599
                                                                    [2.5]</span>
                                                            </div>

                                                            <!-- new ones -->
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1519', '2.0', 'Golden_1519.png');applyFrame('Golden_1519')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1519.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1519
                                                                    [2.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Silver_1609', '2.0', 'Silver_1609.png');applyFrame('Silver_1609')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Silver_1609.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Silver_1609
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1614', '1.0', 'Golden_1614.png');applyFrame('Golden_1614')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1614.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1614
                                                                    [1.0]</span>
                                                            </div>

                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1616', '2.0', 'Brown_1616.png');applyFrame('Brown_1616')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1616.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1616
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1619', '2.0', 'Golden_1619.png');applyFrame('Golden_1619')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1619.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1619
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Golden_1606', '2.0', 'Golden_1606.png');applyFrame('Golden_1606')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Golden_1606.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Golden_1606
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Black_1630', '2.0', 'Black_1630.png');applyFrame('Black_1630')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Black_1630.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Black_1630
                                                                    [2.0]</span>
                                                            </div>
                                                            <div
                                                                onclick="saveFrameOptions('outer', 'Brown_1634', '2.0', 'Brown_1634.png');applyFrame('Brown_1634')">
                                                                <img class="card-img img-fluid"
                                                                    src="<?= base_url('/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/edge_images/Brown_1634.png') ?>"
                                                                    alt=""
                                                                    style="width:100px;height:30px;border:1px solid #bbbbbb">
                                                                <span class="item-name">Brown_1634
                                                                    [2.0]</span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mb-3">
                                                <button style="width: 100%;" id="stackBtn" class="btn btn-color"
                                                    onclick="stackFrames()">Click To Stack Frames</button>
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
                                                            <td style="padding: 0;"><span class="ml-2">Frames:</span>
                                                            </td>
                                                            <td style="padding: 0;" align="right">
                                                                <div class="btn-group btn-group-toggle"
                                                                    data-toggle="buttons">
                                                                    <label class="btn btn-sm btn_custom active"
                                                                        onclick="loadInnerFrames();showFramesSidebar('inner');"
                                                                        id="frame1" style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position"
                                                                            autocomplete="off" value="inner" checked>
                                                                        1
                                                                    </label>

                                                                    <label class="btn btn-sm btn_custom" id="frame2"
                                                                        onclick="loadMiddleFrames();showFramesSidebar('middle');"
                                                                        style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position"
                                                                            value="middle" autocomplete="off">
                                                                        2
                                                                    </label>

                                                                    <label class="btn btn-sm btn_custom" id="frame3"
                                                                        onclick="loadOuterFrames();showFramesSidebar('outer')"
                                                                        style="border: 1px solid #000000;">
                                                                        <input type="radio" name="frame_position"
                                                                            value="outer" autocomplete="off">
                                                                        3
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <div class="mt-3"
                                                        style="border: 1px solid;background-color: #cfcfcf;">
                                                        <div class="ml-2 mt-1">
                                                            <span><b>Outer</b></span>
                                                        </div>
                                                        <div
                                                            style="border: 1px solid;padding: 10px;margin: 0 20px 20px 20px;background-color: #e7e7e7;">
                                                            <div style="text-align: center;">
                                                                <span><b>Middle</b></span>
                                                                <div
                                                                    style="border: 1px solid;padding: 10px;margin: 0 10px 10px 10px;background-color: white;">
                                                                    <div
                                                                        style="text-align: right;margin: 0 5px 5px 5px;">
                                                                        <span><b>Inner</b></span>
                                                                        <div
                                                                            style="background-color: black;height: 30px;">
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
                                </div>

                                <div class="card mb-0 rounded-0 " style="position: relative">
                                    <div class="card-header" style="cursor: pointer; text-align:center"
                                        onclick="showWallColorSection(this)">
                                        <img src="<?= base_url('assets/imagess/mansory.png'); ?>" width="28px"
                                            height="28px" class="icon-img" />
                                        <h6 class="card-title" style="color: white">
                                            WALL COLOR
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
                                    <div id="accordion-item-group4" class="collapse" data-parent="#accordion-group"
                                        style="position: absolute; left: 100.5%; top: 0px; border: 1px solid #b3b4b7; min-width: 382px;z-index: 1001">
                                        <div class="card-body">
                                            <div class="list-icons closeIcons" style="margin-left: 100%"
                                                onclick="closeWallColorSection(this)">
                                                <a href="#" class="list-icons-item"><i class="icon-close2"></i></a>
                                            </div>
                                            <label>Choose Your Color Palette:</label>
                                            <div>
                                                <div class="card mb-0 rounded-bottom-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a data-toggle="collapse" class="text-default"
                                                                href="#collapsible-item-group1">EVERYDAY COLORS</a>
                                                        </h6>
                                                    </div>
                                                    <style>
                                                    .colorsBoxes {
                                                        height: 20px;
                                                        width: 20px;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        /* border-radius: 50px; */
                                                    }

                                                    .color-pallete {
                                                        padding: 4px;
                                                    }

                                                    .color-pallete td {
                                                        width: 20px;
                                                        height: 20px;
                                                    }
                                                    </style>

                                                    <div id="collapsible-item-group1" class="collapse show">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['benjamin'])) {
                                                                    foreach ($wall_colors['benjamin'] as $wall_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;"
                                                                        onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                        <div
                                                                            style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f5ece0')"
                                                                            style="background-color: #f5ece0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9e6d9')"
                                                                            style="background-color: #e9e6d9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9eee4')"
                                                                            style="background-color: #e9eee4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f3dfbd')"
                                                                            style="background-color: #f3dfbd;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ede4cb')"
                                                                            style="background-color: #ede4cb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ebd5b1')"
                                                                            style="background-color: #ebd5b1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9ddbb')"
                                                                            style="background-color: #e9ddbb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eff0e6')"
                                                                            style="background-color: #eff0e6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f3f0e6')"
                                                                            style="background-color: #f3f0e6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c6d4e0')"
                                                                            style="background-color: #c6d4e0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dbe1db')"
                                                                            style="background-color: #dbe1db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e4e0d3')"
                                                                            style="background-color: #e4e0d3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eceaeb')"
                                                                            style="background-color: #eceaeb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eae6d1')"
                                                                            style="background-color: #eae6d1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ebe1b2')"
                                                                            style="background-color: #ebe1b2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6e2a5')"
                                                                            style="background-color: #f6e2a5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fad6b1')"
                                                                            style="background-color: #fad6b1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e4ca47')"
                                                                            style="background-color: #e4ca47;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cdb185')"
                                                                            style="background-color: #cdb185;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dbcaac')"
                                                                            style="background-color: #dbcaac;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CDC9BF')"
                                                                            style="background-color: #CDC9BF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#BEB9AE')"
                                                                            style="background-color: #BEB9AE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CCC9A4')"
                                                                            style="background-color: #CCC9A4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B8AB9B')"
                                                                            style="background-color: #B8AB9B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4AFB5')"
                                                                            style="background-color: #A4AFB5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A1A7B7')"
                                                                            style="background-color: #A1A7B7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D9B5B6')"
                                                                            style="background-color: #D9B5B6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B5A08C')"
                                                                            style="background-color: #B5A08C;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F5C6A1')"
                                                                            style="background-color: #F5C6A1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B5A95D')"
                                                                            style="background-color: #B5A95D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#AAB696')"
                                                                            style="background-color: #AAB696;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DBC3AF')"
                                                                            style="background-color: #DBC3AF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#70908F')"
                                                                            style="background-color: #70908F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#86847E')"
                                                                            style="background-color: #86847E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A08F7D')"
                                                                            style="background-color: #A08F7D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9B9B8F')"
                                                                            style="background-color: #9B9B8F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7E674E')"
                                                                            style="background-color: #7E674E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#58514D')"
                                                                            style="background-color: #58514D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7E495B')"
                                                                            style="background-color: #7E495B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#865A5E')"
                                                                            style="background-color: #865A5E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#314757')"
                                                                            style="background-color: #314757;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7D829E')"
                                                                            style="background-color: #7D829E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#AB99AE')"
                                                                            style="background-color: #AB99AE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8AA169')"
                                                                            style="background-color: #8AA169;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5A533D')"
                                                                            style="background-color: #5A533D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8EAEDA')"
                                                                            style="background-color: #8EAEDA;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#986058')"
                                                                            style="background-color: #986058;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B69178')"
                                                                            style="background-color: #B69178;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#988669')"
                                                                            style="background-color: #988669;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#815032')"
                                                                            style="background-color: #815032;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B8808D')"
                                                                            style="background-color: #B8808D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#000000')"
                                                                            style="background-color: #000000;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F9F8E9')"
                                                                            style="background-color: #F9F8E9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ECE7D8')"
                                                                            style="background-color: #ECE7D8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F9EBE4')"
                                                                            style="background-color: #F9EBE4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#FAE9C5')"
                                                                            style="background-color: #FAE9C5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E8D9BF')"
                                                                            style="background-color: #E8D9BF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EBD3A9')"
                                                                            style="background-color: #EBD3A9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DFE0CE')"
                                                                            style="background-color: #DFE0CE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F1F2EB')"
                                                                            style="background-color: #F1F2EB;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F6F3EE')"
                                                                            style="background-color: #F6F3EE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C8D6E5')"
                                                                            style="background-color: #C8D6E5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E3E8DD')"
                                                                            style="background-color: #E3E8DD;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E6E1D6')"
                                                                            style="background-color: #E6E1D6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CAD5C9')"
                                                                            style="background-color: #CAD5C9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EAE6D1')"
                                                                            style="background-color: #EAE6D1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DCD7A8')"
                                                                            style="background-color: #DCD7A8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EBDCA2')"
                                                                            style="background-color: #EBDCA2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F2CBA8')"
                                                                            style="background-color: #F2CBA8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DEBFA0')"
                                                                            style="background-color: #DEBFA0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D6B488')"
                                                                            style="background-color: #D6B488;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DFCDA8')"
                                                                            style="background-color: #DFCDA8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D0CBC3')"
                                                                            style="background-color: #D0CBC3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B7B5AD')"
                                                                            style="background-color: #B7B5AD;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CCCEAF')"
                                                                            style="background-color: #CCCEAF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B0A690')"
                                                                            style="background-color: #B0A690;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#98B3B8')"
                                                                            style="background-color: #98B3B8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A7A7BE')"
                                                                            style="background-color: #A7A7BE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E6B7C0')"
                                                                            style="background-color: #E6B7C0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B69E95')"
                                                                            style="background-color: #B69E95;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DEB774')"
                                                                            style="background-color: #DEB774;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ADAA6F')"
                                                                            style="background-color: #ADAA6F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4AD9F')"
                                                                            style="background-color: #A4AD9F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A2A17F')"
                                                                            style="background-color: #A2A17F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6F898E')"
                                                                            style="background-color: #6F898E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#878684')"
                                                                            style="background-color: #878684;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4937D')"
                                                                            style="background-color: #A4937D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#969280')"
                                                                            style="background-color: #969280;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#746147')"
                                                                            style="background-color: #746147;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#686763')"
                                                                            style="background-color: #686763;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8C393F')"
                                                                            style="background-color: #8C393F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#695654')"
                                                                            style="background-color: #695654;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#365574')"
                                                                            style="background-color: #365574;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#858A9B')"
                                                                            style="background-color: #858A9B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9D9DA7')"
                                                                            style="background-color: #9D9DA7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6F8555')"
                                                                            style="background-color: #6F8555;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#575952')"
                                                                            style="background-color: #575952;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#2D8493')"
                                                                            style="background-color: #2D8493;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#AC605F')"
                                                                            style="background-color: #AC605F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#AB8A6B')"
                                                                            style="background-color: #AB8A6B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9D8275')"
                                                                            style="background-color: #9D8275;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9A6F70')"
                                                                            style="background-color: #9A6F70;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C78792')"
                                                                            style="background-color: #C78792;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EAE7DC')"
                                                                            style="background-color: #EAE7DC;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F7F1E2')"
                                                                            style="background-color: #F7F1E2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F6E4CD')"
                                                                            style="background-color: #F6E4CD;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F5EACF')"
                                                                            style="background-color: #F5EACF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E9DDC9')"
                                                                            style="background-color: #E9DDC9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ECDCBA')"
                                                                            style="background-color: #ECDCBA;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F3EFDE')"
                                                                            style="background-color: #F3EFDE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F7F7EE')"
                                                                            style="background-color: #F7F7EE;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DAD9D4')"
                                                                            style="background-color: #DAD9D4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E4EAEC')"
                                                                            style="background-color: #E4EAEC;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DEDACF')"
                                                                            style="background-color: #DEDACF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D5CFCC')"
                                                                            style="background-color: #D5CFCC;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F3EAC2')"
                                                                            style="background-color: #F3EAC2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EEF2C8')"
                                                                            style="background-color: #EEF2C8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E1CBCC')"
                                                                            style="background-color: #E1CBCC;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C5A079')"
                                                                            style="background-color: #C5A079;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D2BEA5')"
                                                                            style="background-color: #D2BEA5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CCC7B9')"
                                                                            style="background-color: #CCC7B9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C4B9AF')"
                                                                            style="background-color: #C4B9AF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#AEACA3')"
                                                                            style="background-color: #AEACA3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#BBCCE0')"
                                                                            style="background-color: #BBCCE0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D1C6C6')"
                                                                            style="background-color: #D1C6C6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B9A284')"
                                                                            style="background-color: #B9A284;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D9926E')"
                                                                            style="background-color: #D9926E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DCCA89')"
                                                                            style="background-color: #DCCA89;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#96AE6E')"
                                                                            style="background-color: #96AE6E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9EB3D1')"
                                                                            style="background-color: #9EB3D1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7C8169')"
                                                                            style="background-color: #7C8169;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#898A84')"
                                                                            style="background-color: #898A84;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#988578')"
                                                                            style="background-color: #988578;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A39E97')"
                                                                            style="background-color: #A39E97;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#816E61')"
                                                                            style="background-color: #816E61;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#594845')"
                                                                            style="background-color: #594845;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#705160')"
                                                                            style="background-color: #705160;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9C4C4A')"
                                                                            style="background-color: #9C4C4A;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#443832')"
                                                                            style="background-color: #443832;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#757E93')"
                                                                            style="background-color: #757E93;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9C8F9D')"
                                                                            style="background-color: #9C8F9D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#83A1A7')"
                                                                            style="background-color: #83A1A7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5C6B5C')"
                                                                            style="background-color: #5C6B5C;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#628798')"
                                                                            style="background-color: #628798;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8B2829')"
                                                                            style="background-color: #8B2829;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CB8455')"
                                                                            style="background-color: #CB8455;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#997D5E')"
                                                                            style="background-color: #997D5E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#975B3B')"
                                                                            style="background-color: #975B3B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9F5875')"
                                                                            style="background-color: #9F5875;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#000000')"
                                                                            style="background-color: #000000;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#000000')"
                                                                            style="background-color: #000000;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E8E5DA')"
                                                                            style="background-color: #E8E5DA;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F2EBDD')"
                                                                            style="background-color: #F2EBDD;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EEE6CF')"
                                                                            style="background-color: #EEE6CF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DDCFBC')"
                                                                            style="background-color: #DDCFBC;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E8DCBC')"
                                                                            style="background-color: #E8DCBC;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F0EDE0')"
                                                                            style="background-color: #F0EDE0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F4F1EA')"
                                                                            style="background-color: #F4F1EA;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CAD1D9')"
                                                                            style="background-color: #CAD1D9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E8F0ED')"
                                                                            style="background-color: #E8F0ED;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E3DED1')"
                                                                            style="background-color: #E3DED1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D1CED7')"
                                                                            style="background-color: #D1CED7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EEE9D0')"
                                                                            style="background-color: #EEE9D0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F8EDBB')"
                                                                            style="background-color: #F8EDBB;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#FAD896')"
                                                                            style="background-color: #FAD896;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#EDE09C')"
                                                                            style="background-color: #EDE09C;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#F3CDD0')"
                                                                            style="background-color: #F3CDD0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#CBA573')"
                                                                            style="background-color: #CBA573;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DECAAD')"
                                                                            style="background-color: #DECAAD;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C9C7BA')"
                                                                            style="background-color: #C9C7BA;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C4BEB2')"
                                                                            style="background-color: #C4BEB2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C6C498')"
                                                                            style="background-color: #C6C498;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#C7B198')"
                                                                            style="background-color: #C7B198;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B7B5B3')"
                                                                            style="background-color: #B7B5B3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ADB4CB')"
                                                                            style="background-color: #ADB4CB;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#DEC4C1')"
                                                                            style="background-color: #DEC4C1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#B9A38B')"
                                                                            style="background-color: #B9A38B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#E6A984')"
                                                                            style="background-color: #E6A984;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#D4D090')"
                                                                            style="background-color: #D4D090;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4B793')"
                                                                            style="background-color: #A4B793;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#94A7BF')"
                                                                            style="background-color: #94A7BF;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#76876F')"
                                                                            style="background-color: #76876F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#87857D')"
                                                                            style="background-color: #87857D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9E8875')"
                                                                            style="background-color: #9E8875;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9A968D')"
                                                                            style="background-color: #9A968D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8D705E')"
                                                                            style="background-color: #8D705E;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#53443F')"
                                                                            style="background-color: #53443F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6E4B62')"
                                                                            style="background-color: #6E4B62;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8D515A')"
                                                                            style="background-color: #8D515A;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#3A3E3D')"
                                                                            style="background-color: #3A3E3D;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7786A2')"
                                                                            style="background-color: #7786A2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4959A')"
                                                                            style="background-color: #A4959A;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#899E9B')"
                                                                            style="background-color: #899E9B;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#616342')"
                                                                            style="background-color: #616342;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5C7FB8')"
                                                                            style="background-color: #5C7FB8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A03F3F')"
                                                                            style="background-color: #A03F3F;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#BA8867')"
                                                                            style="background-color: #BA8867;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#958166')"
                                                                            style="background-color: #958166;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#A4683F')"
                                                                            style="background-color: #A4683F;"></div>
                                                                    </td>

                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-0 rounded-0 border-y-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a class="collapsed text-default" data-toggle="collapse"
                                                                href="#collapsible-item-group2">VIBRANT COLORS</a>
                                                        </h6>
                                                    </div>

                                                    <div id="collapsible-item-group2" class="collapse">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['vibrant'])) {
                                                                    foreach ($wall_colors['vibrant'] as $wall_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;"
                                                                        onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                        <div
                                                                            style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eecdd6')"
                                                                            style="background-color: #eecdd6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f3cbd3')"
                                                                            style="background-color: #f3cbd3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fed0dd')"
                                                                            style="background-color: #fed0dd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eacfc4')"
                                                                            style="background-color: #eacfc4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fccdc5')"
                                                                            style="background-color: #fccdc5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f8c3bd')"
                                                                            style="background-color: #f8c3bd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fecfc7')"
                                                                            style="background-color: #fecfc7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#efbaa8')"
                                                                            style="background-color: #efbaa8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6cec6')"
                                                                            style="background-color: #f6cec6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffd5ce')"
                                                                            style="background-color: #ffd5ce;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eed8c1')"
                                                                            style="background-color: #eed8c1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9d9c4')"
                                                                            style="background-color: #f9d9c4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f3decd')"
                                                                            style="background-color: #f3decd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffe0c1')"
                                                                            style="background-color: #ffe0c1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffe5d2')"
                                                                            style="background-color: #ffe5d2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6dfcd')"
                                                                            style="background-color: #f6dfcd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f0e1cc')"
                                                                            style="background-color: #f0e1cc;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fff9c5')"
                                                                            style="background-color: #fff9c5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9eed2')"
                                                                            style="background-color: #f9eed2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eee7cd')"
                                                                            style="background-color: #eee7cd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eee7cf')"
                                                                            style="background-color: #eee7cf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9fcc4')"
                                                                            style="background-color: #e9fcc4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8e4cc')"
                                                                            style="background-color: #d8e4cc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dce7d6')"
                                                                            style="background-color: #dce7d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ccd0d6')"
                                                                            style="background-color: #ccd0d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ccf0d6')"
                                                                            style="background-color: #ccf0d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cde0cc')"
                                                                            style="background-color: #cde0cc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cce2d6')"
                                                                            style="background-color: #cce2d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cfdbcf')"
                                                                            style="background-color: #cfdbcf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c8e2d9')"
                                                                            style="background-color: #c8e2d9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c5eae3')"
                                                                            style="background-color: #c5eae3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d1f6ee')"
                                                                            style="background-color: #d1f6ee;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d0ccff')"
                                                                            style="background-color: #d0ccff;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c3ceee')"
                                                                            style="background-color: #c3ceee;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ced9ed')"
                                                                            style="background-color: #ced9ed;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ced4e2')"
                                                                            style="background-color: #ced4e2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eac5d6')"
                                                                            style="background-color: #eac5d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e1ccdf')"
                                                                            style="background-color: #e1ccdf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eac3e2')"
                                                                            style="background-color: #eac3e2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f3caea')"
                                                                            style="background-color: #f3caea;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dfc5e0')"
                                                                            style="background-color: #dfc5e0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eec9ea')"
                                                                            style="background-color: #eec9ea;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f7f3f4')"
                                                                            style="background-color: #f7f3f4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#feeeee')"
                                                                            style="background-color: #feeeee;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f5f0f6')"
                                                                            style="background-color: #f5f0f6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eff8ff')"
                                                                            style="background-color: #eff8ff;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ebfcf6')"
                                                                            style="background-color: #ebfcf6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fffde8')"
                                                                            style="background-color: #fffde8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fff8e5')"
                                                                            style="background-color: #fff8e5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6f7f1')"
                                                                            style="background-color: #f6f7f1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fcfcfe')"
                                                                            style="background-color: #fcfcfe;"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8bec7')"
                                                                            style="background-color: #d8bec7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#edb2c6')"
                                                                            style="background-color: #edb2c6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffbad6')"
                                                                            style="background-color: #ffbad6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#deb8ad')"
                                                                            style="background-color: #deb8ad;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e8bbb6')"
                                                                            style="background-color: #e8bbb6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f4aaa7')"
                                                                            style="background-color: #f4aaa7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fabfbb')"
                                                                            style="background-color: #fabfbb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dda78f')"
                                                                            style="background-color: #dda78f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f5bbb7')"
                                                                            style="background-color: #f5bbb7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffcbbe')"
                                                                            style="background-color: #ffcbbe;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d7c6ac')"
                                                                            style="background-color: #d7c6ac;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e6c7b3')"
                                                                            style="background-color: #e6c7b3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f1c9b0')"
                                                                            style="background-color: #f1c9b0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffcdae')"
                                                                            style="background-color: #ffcdae;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9dbc3')"
                                                                            style="background-color: #f9dbc3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e7d5af')"
                                                                            style="background-color: #e7d5af;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e5d3ab')"
                                                                            style="background-color: #e5d3ab;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eee2ae')"
                                                                            style="background-color: #eee2ae;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f4e1b6')"
                                                                            style="background-color: #f4e1b6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fbf4ae')"
                                                                            style="background-color: #fbf4ae;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f1e2b7')"
                                                                            style="background-color: #f1e2b7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e1deb5')"
                                                                            style="background-color: #e1deb5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dfd4b6')"
                                                                            style="background-color: #dfd4b6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6fccb')"
                                                                            style="background-color: #d6fccb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c8d5b9')"
                                                                            style="background-color: #c8d5b9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cddbc1')"
                                                                            style="background-color: #cddbc1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bdeebf')"
                                                                            style="background-color: #bdeebf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b4d3b4')"
                                                                            style="background-color: #b4d3b4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bbcfc4')"
                                                                            style="background-color: #bbcfc4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#becdb8')"
                                                                            style="background-color: #becdb8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b6cacb')"
                                                                            style="background-color: #b6cacb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ade0d7')"
                                                                            style="background-color: #ade0d7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c5e9e5')"
                                                                            style="background-color: #c5e9e5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bac4ff')"
                                                                            style="background-color: #bac4ff;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#adb6df')"
                                                                            style="background-color: #adb6df;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c6ccdc')"
                                                                            style="background-color: #c6ccdc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b6bfce')"
                                                                            style="background-color: #b6bfce;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dbb1c5')"
                                                                            style="background-color: #dbb1c5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d0b8ce')"
                                                                            style="background-color: #d0b8ce;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cba6c7')"
                                                                            style="background-color: #cba6c7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e3c0e0')"
                                                                            style="background-color: #e3c0e0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d0aecf')"
                                                                            style="background-color: #d0aecf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e5e6e0')"
                                                                            style="background-color: #e5e6e0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6d6d7')"
                                                                            style="background-color: #f6d6d7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e8dff2')"
                                                                            style="background-color: #e8dff2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dfe6f8')"
                                                                            style="background-color: #dfe6f8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9f8c0')"
                                                                            style="background-color: #f9f8c0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6f0e2')"
                                                                            style="background-color: #f6f0e2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dfe6f8')"
                                                                            style="background-color: #dfe6f8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e6e1cb')"
                                                                            style="background-color: #e6e1cb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9f5f4')"
                                                                            style="background-color: #f9f5f4;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#aa6a7a')"
                                                                            style="background-color: #aa6a7a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b94977')"
                                                                            style="background-color: #b94977;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fb709a')"
                                                                            style="background-color: #fb709a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#99625d')"
                                                                            style="background-color: #99625d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b2716d')"
                                                                            style="background-color: #b2716d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cf4b49')"
                                                                            style="background-color: #cf4b49;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f96f6c')"
                                                                            style="background-color: #f96f6c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9f5346')"
                                                                            style="background-color: #9f5346;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6705a')"
                                                                            style="background-color: #d6705a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fe9a76')"
                                                                            style="background-color: #fe9a76;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9b785c')"
                                                                            style="background-color: #9b785c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b37f5a')"
                                                                            style="background-color: #b37f5a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cd865a')"
                                                                            style="background-color: #cd865a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f29558')"
                                                                            style="background-color: #f29558;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffae81')"
                                                                            style="background-color: #ffae81;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b79c59')"
                                                                            style="background-color: #b79c59;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6a85a')"
                                                                            style="background-color: #d6a85a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f1b74c')"
                                                                            style="background-color: #f1b74c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fdcb74')"
                                                                            style="background-color: #fdcb74;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#feeb51')"
                                                                            style="background-color: #feeb51;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d5bf5a')"
                                                                            style="background-color: #d5bf5a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ac995e')"
                                                                            style="background-color: #ac995e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#968454')"
                                                                            style="background-color: #968454;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b1ed7b')"
                                                                            style="background-color: #b1ed7b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7dae6c')"
                                                                            style="background-color: #7dae6c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9aa682')"
                                                                            style="background-color: #9aa682;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#75e2a1')"
                                                                            style="background-color: #75e2a1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6ca572')"
                                                                            style="background-color: #6ca572;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#699176')"
                                                                            style="background-color: #699176;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#738673')"
                                                                            style="background-color: #738673;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6c8984')"
                                                                            style="background-color: #6c8984;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#4b9d97')"
                                                                            style="background-color: #4b9d97;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#85d7d1')"
                                                                            style="background-color: #85d7d1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8b99fc')"
                                                                            style="background-color: #8b99fc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#4d56b1')"
                                                                            style="background-color: #4d56b1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#838fb7')"
                                                                            style="background-color: #838fb7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#656c7f')"
                                                                            style="background-color: #656c7f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7b6481')"
                                                                            style="background-color: #7b6481;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#886e91')"
                                                                            style="background-color: #886e91;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#744f92')"
                                                                            style="background-color: #744f92;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b185ba')"
                                                                            style="background-color: #b185ba;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#93528c')"
                                                                            style="background-color: #93528c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cb6ec7')"
                                                                            style="background-color: #cb6ec7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9d9998')"
                                                                            style="background-color: #9d9998;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9d5853')"
                                                                            style="background-color: #9d5853;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#998c9d')"
                                                                            style="background-color: #998c9d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#767c9e')"
                                                                            style="background-color: #767c9e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#74a377')"
                                                                            style="background-color: #74a377;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e1d8ad')"
                                                                            style="background-color: #e1d8ad;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c5a246')"
                                                                            style="background-color: #c5a246;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#887356')"
                                                                            style="background-color: #887356;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9e9d9b')"
                                                                            style="background-color: #9e9d9b;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7b334b')"
                                                                            style="background-color: #7b334b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#950246')"
                                                                            style="background-color: #950246;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fe307a')"
                                                                            style="background-color: #fe307a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#651f1f')"
                                                                            style="background-color: #651f1f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#933738')"
                                                                            style="background-color: #933738;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b30401')"
                                                                            style="background-color: #b30401;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fe312c')"
                                                                            style="background-color: #fe312c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7d1104')"
                                                                            style="background-color: #7d1104;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b82f1c')"
                                                                            style="background-color: #b82f1c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fc774c')"
                                                                            style="background-color: #fc774c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#723e0f')"
                                                                            style="background-color: #723e0f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#934918')"
                                                                            style="background-color: #934918;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ba5117')"
                                                                            style="background-color: #ba5117;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e56b15')"
                                                                            style="background-color: #e56b15;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fc9955')"
                                                                            style="background-color: #fc9955;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9c7510')"
                                                                            style="background-color: #9c7510;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ba8913')"
                                                                            style="background-color: #ba8913;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dd9819')"
                                                                            style="background-color: #dd9819;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ffb246')"
                                                                            style="background-color: #ffb246;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fdde12')"
                                                                            style="background-color: #fdde12;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#be9e15')"
                                                                            style="background-color: #be9e15;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#80670b')"
                                                                            style="background-color: #80670b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5e4c0a')"
                                                                            style="background-color: #5e4c0a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7df12c')"
                                                                            style="background-color: #7df12c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#336e02')"
                                                                            style="background-color: #336e02;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#65804d')"
                                                                            style="background-color: #65804d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#2ad060')"
                                                                            style="background-color: #2ad060;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#096a1b')"
                                                                            style="background-color: #096a1b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#336039')"
                                                                            style="background-color: #336039;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#3a5044')"
                                                                            style="background-color: #3a5044;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#285250')"
                                                                            style="background-color: #285250;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#00726f')"
                                                                            style="background-color: #00726f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#27b3a6')"
                                                                            style="background-color: #27b3a6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#525afa')"
                                                                            style="background-color: #525afa;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#011288')"
                                                                            style="background-color: #011288;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#55649b')"
                                                                            style="background-color: #55649b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#283045')"
                                                                            style="background-color: #283045;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#442a57')"
                                                                            style="background-color: #442a57;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5a345d')"
                                                                            style="background-color: #5a345d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#320a62')"
                                                                            style="background-color: #320a62;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8a55a5')"
                                                                            style="background-color: #8a55a5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#610f5b')"
                                                                            style="background-color: #610f5b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b134b2')"
                                                                            style="background-color: #b134b2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#23201b')"
                                                                            style="background-color: #23201b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#4f1116')"
                                                                            style="background-color: #4f1116;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#462f3f')"
                                                                            style="background-color: #462f3f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#292a3c')"
                                                                            style="background-color: #292a3c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#2c3a29')"
                                                                            style="background-color: #2c3a29;"></div>
                                                                    </td>

                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card rounded-top-0">
                                                    <div class="card-header">
                                                        <h6 class="card-title">
                                                            <a class="collapsed text-default" data-toggle="collapse"
                                                                href="#collapsible-item-group3">MUTED COLORS</a>
                                                        </h6>
                                                    </div>

                                                    <div id="collapsible-item-group3" class="collapse">
                                                        <div class="color-pallete">
                                                            <div class="row">
                                                                <?php
                                                                if (!empty($wall_colors['muted'])) {
                                                                    foreach ($wall_colors['muted'] as $wall_color) { ?>
                                                                <div class="col-md-3">
                                                                    <div style="text-align: center;"
                                                                        onclick="applyColor('<?= $wall_color['name'] ?>')">
                                                                        <div
                                                                            style="height: 20px; width: 20px;background: <?= $wall_color['color'] ?>;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php }
                                                                }
                                                                ?>
                                                            </div>
                                                            <table>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#fefefe')"
                                                                            style="background-color: #fefefe;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f2f2f2')"
                                                                            style="background-color: #f2f2f2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f7f3f0')"
                                                                            style="background-color: #f7f3f0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9f7ea')"
                                                                            style="background-color: #f9f7ea;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f7f6fb')"
                                                                            style="background-color: #f7f6fb;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f5f5fd')"
                                                                            style="background-color: #f5f5fd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f0eff4')"
                                                                            style="background-color: #f0eff4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f9f5f6')"
                                                                            style="background-color: #f9f5f6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dcd0de')"
                                                                            style="background-color: #dcd0de;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8ced6')"
                                                                            style="background-color: #d8ced6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e2d8e0')"
                                                                            style="background-color: #e2d8e0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dcccd6')"
                                                                            style="background-color: #dcccd6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d7d2d8')"
                                                                            style="background-color: #d7d2d8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dad1d4')"
                                                                            style="background-color: #dad1d4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6d5da')"
                                                                            style="background-color: #d6d5da;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d9dce3')"
                                                                            style="background-color: #d9dce3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d1d4db')"
                                                                            style="background-color: #d1d4db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dcdcf8')"
                                                                            style="background-color: #dcdcf8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#deeaea')"
                                                                            style="background-color: #deeaea;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d3ddde')"
                                                                            style="background-color: #d3ddde;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d2dadc')"
                                                                            style="background-color: #d2dadc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d3d8d2')"
                                                                            style="background-color: #d3d8d2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d5d9d8')"
                                                                            style="background-color: #d5d9d8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d5dad4')"
                                                                            style="background-color: #d5dad4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6e6dc')"
                                                                            style="background-color: #d6e6dc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e0e1dc')"
                                                                            style="background-color: #e0e1dc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d7dcd5')"
                                                                            style="background-color: #d7dcd5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e3e9db')"
                                                                            style="background-color: #e3e9db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e5e2db')"
                                                                            style="background-color: #e5e2db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9e7db')"
                                                                            style="background-color: #e9e7db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f0eadc')"
                                                                            style="background-color: #f0eadc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ece5db')"
                                                                            style="background-color: #ece5db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eae3db')"
                                                                            style="background-color: #eae3db;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#efdfd2')"
                                                                            style="background-color: #efdfd2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f2e5dd')"
                                                                            style="background-color: #f2e5dd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e8ded5')"
                                                                            style="background-color: #e8ded5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e3dad3')"
                                                                            style="background-color: #e3dad3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e4d9d5')"
                                                                            style="background-color: #e4d9d5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f5dddd')"
                                                                            style="background-color: #f5dddd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9d7d5')"
                                                                            style="background-color: #e9d7d5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dec6b9')"
                                                                            style="background-color: #dec6b9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eddcd4')"
                                                                            style="background-color: #eddcd4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e7d2d1')"
                                                                            style="background-color: #e7d2d1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e6d7d4')"
                                                                            style="background-color: #e6d7d4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e0d5d1')"
                                                                            style="background-color: #e0d5d1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f1dee4')"
                                                                            style="background-color: #f1dee4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#edd6de')"
                                                                            style="background-color: #edd6de;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e3d8dc')"
                                                                            style="background-color: #e3d8dc;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#f6f6f6')"
                                                                            style="background-color: #f6f6f6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dfdbd8')"
                                                                            style="background-color: #dfdbd8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#efece5')"
                                                                            style="background-color: #efece5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#edecda')"
                                                                            style="background-color: #edecda;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e1e6e2')"
                                                                            style="background-color: #e1e6e2;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e6e5eb')"
                                                                            style="background-color: #e6e5eb;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eadfdd')"
                                                                            style="background-color: #eadfdd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e8e8e8')"
                                                                            style="background-color: #e8e8e8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d2c8d3')"
                                                                            style="background-color: #d2c8d3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c2b8c0')"
                                                                            style="background-color: #c2b8c0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8cbd4')"
                                                                            style="background-color: #d8cbd4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c4b6c3')"
                                                                            style="background-color: #c4b6c3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c7c2c8')"
                                                                            style="background-color: #c7c2c8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cabdc6')"
                                                                            style="background-color: #cabdc6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bdc0c7')"
                                                                            style="background-color: #bdc0c7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cdd0d7')"
                                                                            style="background-color: #cdd0d7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bebfd3')"
                                                                            style="background-color: #bebfd3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d1d0f0')"
                                                                            style="background-color: #d1d0f0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cbdddd')"
                                                                            style="background-color: #cbdddd;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#bbcecc')"
                                                                            style="background-color: #bbcecc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d2dadc')"
                                                                            style="background-color: #d2dadc;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c1c6bf')"
                                                                            style="background-color: #c1c6bf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c3c8c2')"
                                                                            style="background-color: #c3c8c2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c2c9c2')"
                                                                            style="background-color: #c2c9c2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cedbd2')"
                                                                            style="background-color: #cedbd2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cfd4ce')"
                                                                            style="background-color: #cfd4ce;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c7cdc3')"
                                                                            style="background-color: #c7cdc3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e0e9d6')"
                                                                            style="background-color: #e0e9d6;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d1cfc0')"
                                                                            style="background-color: #d1cfc0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d7d6c2')"
                                                                            style="background-color: #d7d6c2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dbd5c7')"
                                                                            style="background-color: #dbd5c7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e6e2c5')"
                                                                            style="background-color: #e6e2c5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#eddfd4')"
                                                                            style="background-color: #eddfd4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e2d9c7')"
                                                                            style="background-color: #e2d9c7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dad3c9')"
                                                                            style="background-color: #dad3c9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8d1c7')"
                                                                            style="background-color: #d8d1c7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ebddd2')"
                                                                            style="background-color: #ebddd2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e9d4c1')"
                                                                            style="background-color: #e9d4c1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8cdc9')"
                                                                            style="background-color: #d8cdc9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d6cbc7')"
                                                                            style="background-color: #d6cbc7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cec3bf')"
                                                                            style="background-color: #cec3bf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e7d8d5')"
                                                                            style="background-color: #e7d8d5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#dac6c5')"
                                                                            style="background-color: #dac6c5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cab2a8')"
                                                                            style="background-color: #cab2a8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#e8cecf')"
                                                                            style="background-color: #e8cecf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8bebf')"
                                                                            style="background-color: #d8bebf;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d9c7c5')"
                                                                            style="background-color: #d9c7c5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cec3bf')"
                                                                            style="background-color: #cec3bf;"></div>
                                                                    </td>

                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9a9a9a')"
                                                                            style="background-color: #9a9a9a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#79726c')"
                                                                            style="background-color: #79726c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a18f69')"
                                                                            style="background-color: #a18f69;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d0cbb5')"
                                                                            style="background-color: #d0cbb5;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#819387')"
                                                                            style="background-color: #819387;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#82808d')"
                                                                            style="background-color: #82808d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#939196')"
                                                                            style="background-color: #939196;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8b6e6a')"
                                                                            style="background-color: #8b6e6a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#999a9c')"
                                                                            style="background-color: #999a9c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ac85b1')"
                                                                            style="background-color: #ac85b1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#826382')"
                                                                            style="background-color: #826382;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a793ac')"
                                                                            style="background-color: #a793ac;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#72657f')"
                                                                            style="background-color: #72657f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#807681')"
                                                                            style="background-color: #807681;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#756f79')"
                                                                            style="background-color: #756f79;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6d7077')"
                                                                            style="background-color: #6d7077;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9596a8')"
                                                                            style="background-color: #9596a8;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#676c89')"
                                                                            style="background-color: #676c89;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b4b7da')"
                                                                            style="background-color: #b4b7da;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9dbbb9')"
                                                                            style="background-color: #9dbbb9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#658381')"
                                                                            style="background-color: #658381;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#74807c')"
                                                                            style="background-color: #74807c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#797e78')"
                                                                            style="background-color: #797e78;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#78857c')"
                                                                            style="background-color: #78857c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#79927d')"
                                                                            style="background-color: #79927d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9dbfa7')"
                                                                            style="background-color: #9dbfa7;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#939b83')"
                                                                            style="background-color: #939b83;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#85997e')"
                                                                            style="background-color: #85997e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b4cfa2')"
                                                                            style="background-color: #b4cfa2;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7f7a67')"
                                                                            style="background-color: #7f7a67;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#928d79')"
                                                                            style="background-color: #928d79;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b0a881')"
                                                                            style="background-color: #b0a881;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cdc185')"
                                                                            style="background-color: #cdc185;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d1c0a4')"
                                                                            style="background-color: #d1c0a4;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b9a985')"
                                                                            style="background-color: #b9a985;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ad9d7b')"
                                                                            style="background-color: #ad9d7b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9f9176')"
                                                                            style="background-color: #9f9176;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d7bca9')"
                                                                            style="background-color: #d7bca9;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c09c86')"
                                                                            style="background-color: #c09c86;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#aa9081')"
                                                                            style="background-color: #aa9081;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#968170')"
                                                                            style="background-color: #968170;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#887668')"
                                                                            style="background-color: #887668;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#daaea1')"
                                                                            style="background-color: #daaea1;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#ae887d')"
                                                                            style="background-color: #ae887d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#89645e')"
                                                                            style="background-color: #89645e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#cd9c98')"
                                                                            style="background-color: #cd9c98;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a87270')"
                                                                            style="background-color: #a87270;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a27f83')"
                                                                            style="background-color: #a27f83;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#85706f')"
                                                                            style="background-color: #85706f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d299ac')"
                                                                            style="background-color: #d299ac;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#997082')"
                                                                            style="background-color: #997082;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#957e86')"
                                                                            style="background-color: #957e86;"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="d-flex flex-wrap">
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#535353')"
                                                                            style="background-color: #535353;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#51483f')"
                                                                            style="background-color: #51483f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#736042')"
                                                                            style="background-color: #736042;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b6b48d')"
                                                                            style="background-color: #b6b48d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#515f4e')"
                                                                            style="background-color: #515f4e;"></div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#56545f')"
                                                                            style="background-color: #56545f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#655b64')"
                                                                            style="background-color: #655b64;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#653b3f')"
                                                                            style="background-color: #653b3f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#545452')"
                                                                            style="background-color: #545452;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9b78a0')"
                                                                            style="background-color: #9b78a0;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6e5068')"
                                                                            style="background-color: #6e5068;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9b849e')"
                                                                            style="background-color: #9b849e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5e516f')"
                                                                            style="background-color: #5e516f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#70626f')"
                                                                            style="background-color: #70626f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#665c67')"
                                                                            style="background-color: #665c67;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#5b5e65')"
                                                                            style="background-color: #5b5e65;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#888a99')"
                                                                            style="background-color: #888a99;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#565881')"
                                                                            style="background-color: #565881;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#aaacd3')"
                                                                            style="background-color: #aaacd3;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#86aead')"
                                                                            style="background-color: #86aead;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#52726f')"
                                                                            style="background-color: #52726f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#586c6a')"
                                                                            style="background-color: #586c6a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#696e67')"
                                                                            style="background-color: #696e67;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#64786d')"
                                                                            style="background-color: #64786d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#4c7152')"
                                                                            style="background-color: #4c7152;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7caf90')"
                                                                            style="background-color: #7caf90;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#849078')"
                                                                            style="background-color: #849078;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#607554')"
                                                                            style="background-color: #607554;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9ec47b')"
                                                                            style="background-color: #9ec47b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#726c5c')"
                                                                            style="background-color: #726c5c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7e7b5a')"
                                                                            style="background-color: #7e7b5a;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a1986d')"
                                                                            style="background-color: #a1986d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c3bb7c')"
                                                                            style="background-color: #c3bb7c;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d4b48d')"
                                                                            style="background-color: #d4b48d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b59d7b')"
                                                                            style="background-color: #b59d7b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a89074')"
                                                                            style="background-color: #a89074;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#96825f')"
                                                                            style="background-color: #96825f;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d4b69e')"
                                                                            style="background-color: #d4b69e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#b7937b')"
                                                                            style="background-color: #b7937b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#9f7f68')"
                                                                            style="background-color: #9f7f68;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#8a7560')"
                                                                            style="background-color: #8a7560;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#7c695b')"
                                                                            style="background-color: #7c695b;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#d8a497')"
                                                                            style="background-color: #d8a497;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#a1766d')"
                                                                            style="background-color: #a1766d;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#6f5347')"
                                                                            style="background-color: #6f5347;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#c98a83')"
                                                                            style="background-color: #c98a83;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#96605e')"
                                                                            style="background-color: #96605e;"></div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="colorsBoxes"
                                                                            onclick="applyColor('#977377')"
                                                                            style="background-color: #977377;"></div>
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

                                <div class="card rounded-top-0 mb-5" style="position: relative">
                                    <div class="card-header" style="cursor: pointer; text-align: center;"
                                        onclick="showWallImageSection(this)">
                                        <img src="<?= base_url('assets/imagess/image.png'); ?>" width="32px"
                                            height="32px" class="icon-img" />
                                        <h6 class="card-title" style="color: white">
                                            WALL IMAGE
                                        </h6>
                                    </div>

                                    <div id="accordion-item-group5" class="collapse" data-parent="#accordion-group"
                                        style="position: absolute; left: 100.5%; top: 0px; border: 1px solid #b3b4b7; min-width: 382px;z-index: 1005">
                                        <div class="card-body">
                                            <div class="list-icons closeIcons" style="margin-left: 100%"
                                                onclick="closeWallImageSection(this)">
                                                <a href="#" class="list-icons-item"><i class="icon-close2"></i></a>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled"
                                                        onclick="wallImg()" name="wall_img" value="upload" data-fouc>
                                                    Upload
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input-styled"
                                                        onclick="wallImg()" name="wall_img" value="gallery" data-fouc>
                                                    Select image from Gallery
                                                </label>
                                            </div>

                                            <div class="form-group mt-3" id="uploadImgBtn" style="display: none;">
                                                <label>Upload an Image</label>
                                                <input type="file" id="bg_img_studio"
                                                    class="form-control-uniform-custom" onchange="uploadStudioBgImg()">
                                            </div>

                                            <div class="text-center mt-3" style="display: none;" id="galleryImgBtn">
                                                <button style="width: 100%;" onclick="showGallerySidebar()"
                                                    class="btn btn-color">Select Wall Image</button>
                                            </div>
                                            <div class="card" id="gallerySidebar"
                                                style="position: absolute; top: -3px; left: 315px; z-index: 999; display: none; width: 100%;">
                                                <div class="card-header bg-primary text-white header-elements-inline">
                                                    <h6 class="card-title">Select Wall Image</h6>
                                                    <div class="header-elements">
                                                        <div class="list-icons">
                                                            <a href="#" class="list-icons-item"
                                                                onclick="closeSideBar('gallerySidebar')"><i
                                                                    class="icon-close2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row"
                                                        style="height: 200px; overflow: hidden; overflow-y: scroll;">
                                                        <table class="table">
                                                            <tr>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        onclick="changeBg('<?= base_url('assets/images/placeholder.jpg') ?>')"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
                                                                    asdasd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
                                                                    fdgsfd
                                                                </td>
                                                                <td>
                                                                    <img class="card-img img-fluid"
                                                                        src="<?= base_url('assets/images/placeholder.jpg') ?>"
                                                                        alt="">
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
                    <div class="col-md-11 main-bg" style="background-color: #b6c4e2">
                        <div id="testDI">
                            <div id="frameBorder" class="image-cropper-container my-1"
                                style="height: 100%;padding: 35px 25px;text-align: center;overflow-y: scroll;background-image: none;">
                                <!-- <img src="" alt="" class="cropper" id="demo-cropper-image">-->
                                <!-- <div id="draggableHelper" style="display:inline-block"> -->
                                <div id="image" style="background-color: #dde7f7">
                                    <img class="cropper" id="demo-cropper-image" />
                                </div>
                                <!-- </div> -->
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
                                                <i class="icon-cart2" onclick="magnify('demo-cropper-image', 3)"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-light rounded-round btn-icon btn-float"
                                                data-toggle="modal" data-target="#calcPrice">
                                                <i class="icon-file-text"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="calcPrice" class="modal fade" tabindex="-1" style="display: none;"
                                aria-hidden="true">
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
                            <div style="position:relative;">
                                <section id="fixed-form-container">
                                    <div class="button" id="grand-total"></div>
                                    <div class="body">
                                        <div>
                                            <h2>Framing Details</h2>
                                            <div>
                                                <h5 class="mb-0">Artwork</h5>
                                                <hr class="my-2">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p>Artwork</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p> Size</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Price / Sq.ft</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Subtotal</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p id="artworkName">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="artworkSize">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="artworkPrice">-</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="artworkSubtotal">-</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1">
                                                <h5 class="mb-0">Matt</h5>
                                                <hr class="my-2">
                                                <div class="row" id="Mat1Details">
                                                    <div class="col-3">
                                                        <p id="Mat_1">Mat # 1</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat1Size"></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat1Amount">100 PKR</p>
                                                    </div>
                                                </div>
                                                <div class="row" id="Mat2Details">
                                                    <div class="col-3">
                                                        <p id="Mat_2">Mat # 2</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat2Size"></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat2Amount">100 PKR</p>
                                                    </div>
                                                </div>
                                                <div class="row" id="Mat3Details">
                                                    <div class="col-3">
                                                        <p id="Mat_3">Mat # 3</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat3Size"></p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p id="Mat3Amount">100 PKR</p>
                                                    </div>
                                                </div>
                                                <h5 class="text-right mb-0" id="Mat_Subtotal">Subtotal : Rs 100</h5>
                                            </div>
                                            <div>
                                                <h5 class="mb-0">Frames</h5>
                                                <hr class="my-2">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p>Outer</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p> 34 x 20</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Rs 100</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p>Middle</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p> 34 x 20</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Rs 100</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <p>Inner</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p> 34 x 20</p>
                                                    </div>
                                                    <div class="col-3">
                                                        <p>Rs 100</p>
                                                    </div>
                                                </div>
                                                <h5 class="text-right mb-0">Subtotal : Rs 100</h5>
                                            </div>
                                            <hr class="my-2">
                                            <h3 class="mb-0 text-right" id="grandTotalInside">Grand Total : Rs 1000</h3>
                                            <a href="javascript:0" class="btn btn-secondary" id="invoice">Print Invoice</a>
                                        </div>
                                    </div>
                                </section>
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
<input type="hidden" id="outerFrameSize" value="0" />
<input type="hidden" id="middleFrameSize" value="0" />
<input type="hidden" id="innerFrameSize" value="0" />
<input type="hidden" id="innerFrameH" value="" />
<input type="hidden" id="screenWidth" value="" />
<input type="hidden" id="pixelPerInch" value="" />
<input type="hidden" id="originalImageSize" value="" />
<input type="hidden" id="originalFile" value="" />
<input type="hidden" id="originalFileWithMat" value="" />
<input type="hidden" id="originalFileWithFrame" value="" />
<input type="hidden" id="outerFrameImage" value="" />
<input type="hidden" id="middleFrameImage" value="" />
<input type="hidden" id="innerFrameImage" value="" />

<script src="<?= base_url('assets/admin/global_assets/js/plugins/loaders/blockui.min.js') ?>"></script>
<script>
    
let screenWidth = 0;
let pixelPerInch = 0;
let currentInchesOnScreen = 96;
const artworkPricePerSqft = 250;
let artworkWidthInInches = null;
let artworkHeightInInches = null;
let sidebarSize = 0;
let grandTotal = 0.0;
let price = 0;

$(document).ready(function() {
    screenWidth = $(window).width();
    sidebarSize = screenWidth * 25 / 100;
    screenWidth -= sidebarSize;
    pixelPerInch = screenWidth / currentInchesOnScreen;
    $("#screenWidth").val(screenWidth);
    $("#pixelPerInch").val(pixelPerInch);
    $("#grand-total").html("Total : 0.0 PKR");
    $("#invoice").click(() => printInvoice());
});

var flag = false;
 
function updateSliderValue(id, changed, type) {
    if (flag) {
        if (type == "slider")
            $('#' + id + "Input").val($("#" + id + "Value").val())
        else
            $('#' + id + "Value").val($("#" + id + "Input").val())
    } else {
        if (type == "slider")
            $('#' + id + "Input").val($("#" + id + "Value").val())
        else
            $('#' + id + "Value").val($("#" + id + "Input").val())
    }
    if (changed == "top") { 
        if ($("#topMatH").val() == "") {
            saveMatOptions("top", "#f1e5c7")
            applyMat("#f1e5c7");
        } else {
            applyMat();
        }
    } else if (changed == "middle") {
        if ($("#middleMatH").val() == "") {
            saveMatOptions("middle", "#f1e5c7")
            applyMat("#f1e5c7");
        } else {
            applyMat();
        }
    } else {
        if ($("#bottomMatH").val() == "") {
            saveMatOptions("bottom", "#f1e5c7")
            applyMat("#f1e5c7");
        } else {
            applyMat();
        }
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

function saveFrameOptions(frame_position, frame, size, image) {
    if (frame_position == 'outer') {
        $('#outerFrameH').val(frame)
        $('#outerFrameSize').val(size);
        $('#outerFrameImage').val(image);
    } else if (frame_position == 'middle') {
        $('#middleFrameH').val(frame)
        $('#middleFrameSize').val(size);
        $('#middleFrameImage').val(image);
    } else if (frame_position == 'inner') {
        $('#innerFrameH').val(frame)
        $('#innerFrameSize').val(size);
        $('#innerFrameImage').val(image);
    }
}

function showArtworkSection() {
    $("#accordion-item-group1").css("display", "block");
    $("#accordion-item-group2").css("display", "none");
    $("#accordion-item-group3").css("display", "none");
    $("#accordion-item-group4").css("display", "none");
    $("#accordion-item-group5").css("display", "none");
}

function closeArtworkSection() {
    $("#accordion-item-group1").css("display", "none");
}

function showMatSection(e) {
    if ($("#originalFile").val() !== "") {
        $("#accordion-item-group2").css("display", "block");
        $(e).css("color", "white");
        $("#accordion-item-group1").css("display", "none");
        $("#accordion-item-group3").css("display", "none");
        $("#accordion-item-group4").css("display", "none");
        $("#accordion-item-group5").css("display", "none");
    }
}

function closeMatSection(e) {
    $("#accordion-item-group2").css("display", "none");
}

function showFramesSection(e) {
    if ($("#originalFile").val() !== "") {
        $("#accordion-item-group3").css("display", "block");
        $("#accordion-item-group2").css("display", "none");
        $("#accordion-item-group1").css("display", "none");
        $("#accordion-item-group4").css("display", "none");
        $("#accordion-item-group5").css("display", "none");
        $(e).css("color", "white");
    }
}

function closeFramesSection(e) {
    $("#accordion-item-group3").css("display", "none");
}

function showWallColorSection(e) {
    $("#accordion-item-group4").css("display", "block");
    $("#accordion-item-group2").css("display", "none");
    $("#accordion-item-group3").css("display", "none");
    $("#accordion-item-group1").css("display", "none");
    $("#accordion-item-group5").css("display", "none");
    $(e).css("color", "white");
}

function closeWallColorSection(e) {
    $("#accordion-item-group4").css("display", "none");
    $(e).css("color", "inherit");
}

function showWallImageSection(e) {
    $("#accordion-item-group5").css("display", "block");
    $("#accordion-item-group2").css("display", "none");
    $("#accordion-item-group3").css("display", "none");
    $("#accordion-item-group4").css("display", "none");
    $("#accordion-item-group1").css("display", "none");
    $(e).css("color", "white");
}

function closeWallImageSection(e) {
    $("#accordion-item-group5").css("display", "none");
    $(e).css("color", "inherit");
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

function printInvoice(){
   
    var topMat = $('#topMatH').val();
    var middleMat = $("#middleMatH").val();
    var bottomMat = $("#bottomMatH").val();

    var imgPath = $('#originalFile').val();
    let pixelPerInch = $("#pixelPerInch").val();


    var matSize = $('#artworkSize').val();
   
    var request = $.ajax({  
        url: "/saya_frames/GeneratePdfController/index",
        // dataType: 'application/json; charset=utf-8', 
        type: "POST",
        data: {
            
            top_matColor: topMat,
            middle_matColor: middleMat,
            bottom_matColor: bottomMat,
            mat_Size: matSize,

            pixelPerInch: pixelPerInch,
        },
        xhrFields: {
            responseType: 'blob' // to avoid binary data being mangled on charset conversion
        }
    });
    request.done(function(blob, status, xhr) {
        // check for a filename
        var filename = "";
        var disposition = xhr.getResponseHeader('Content-Disposition');
        if (disposition && disposition.indexOf('attachment') !== -1) {
            var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
            var matches = filenameRegex.exec(disposition);
            if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
        }

        if (typeof window.navigator.msSaveBlob !== 'undefined') {
            // IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
            window.navigator.msSaveBlob(blob, filename);
        } else {
            var URL = window.URL || window.webkitURL;
            var downloadUrl = URL.createObjectURL(blob);

            if (filename) {
                // use HTML5 a[download] attribute to specify filename
                var a = document.createElement("a");
                // safari doesn't support this yet
                if (typeof a.download === 'undefined') {
                    window.location.href = downloadUrl;
                } else {
                    a.href = downloadUrl;
                    a.download = filename;
                    document.body.appendChild(a);
                    a.click();
                }
            } else {
                window.location.href = downloadUrl;
            }

            setTimeout(function () { URL.revokeObjectURL(downloadUrl); }, 100); // cleanup
        }
         //applying mats calculation
        let leftTotal = 0;
        let rightTotal = 0;
        let topTotal = 0;
        let bottomTotal = 0;

        if (topMat != "") {
            leftTotal += parseFloat(top_left_mat_width);
            rightTotal += parseFloat(top_right_mat_width);
            topTotal += parseFloat(top_top_mat_width);
            bottomTotal += parseFloat(top_bottom_mat_width);
        }
        if (middleMat != "") {
            leftTotal += parseFloat(middle_left_mat_width);
            rightTotal += parseFloat(middle_right_mat_width);
            topTotal += parseFloat(middle_top_mat_width);
            bottomTotal += parseFloat(middle_bottom_mat_width);
        }
        if (bottomMat != "") {
            leftTotal += parseFloat(bottom_left_mat_width);
            rightTotal += parseFloat(bottom_right_mat_width);
            topTotal += parseFloat(bottom_top_mat_width);
            bottomTotal += parseFloat(bottom_bottom_mat_width);
        }

        const totalMatWidth = (leftTotal + rightTotal + artworkWidthInInches) + 0.5;
        const totalMatHeight = (topTotal + bottomTotal + artworkHeightInInches) + 0.5;
        const areaInSqFt = (totalMatWidth * totalMatHeight) / 144;

        const MatPrice = 100;
        price = areaInSqFt * 100;
       

        console.log("Total Left: ", price);
            console.log("Total right: ", rightTotal);
            console.log("Total top: ", topTotal);
        console.log("Total bottom: ", bottomTotal);

        var Mat_Subtotal = document.querySelector("#Mat_Subtotal");
        Mat_Subtotal.innerHTML = "Subtotal: " + price.toFixed(2) + " PKR";

        grandTotal = grandTotal + price;
        $("#grand-total").text("Total: " + grandTotal.toFixed(2) + " PKR");
        $("#grandTotalInside").text("Grand Total: " + grandTotal.toFixed(2) + " PKR");

        if (topMat != "") {
            const matSize = document.querySelector("#Mat1Size");
            const matWidth = (parseFloat(top_left_mat_width) + parseFloat(top_right_mat_width) +
                artworkWidthInInches + 0.5);
            console.log("mat width: ", matWidth);
            const matHeight = (
                parseFloat(top_top_mat_width) + parseFloat(top_bottom_mat_width) + artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        }
        if (middleMat != "") { 
            const matSize = document.querySelector("#Mat2Size");
            const matWidth = (parseFloat(middle_left_mat_width) + parseFloat(middle_right_mat_width) +
                artworkWidthInInches + 0.5);
            console.log("mat width: ", matWidth);
            const matHeight = (
                parseFloat(middle_top_mat_width) + parseFloat(middle_bottom_mat_width) +
                artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        } else {
            document.querySelector("#Mat2Details").style.display = "none";
        }
        if (bottomMat != "") {
            const matSize = document.querySelector("#Mat3Size");
            document.querySelector("#Mat3Details").style.display = "flex";
            const matWidth = (parseFloat(bottom_left_mat_width) + parseFloat(bottom_right_mat_width) +
                artworkWidthInInches + 0.5);
            const matHeight = (
                parseFloat(bottom_top_mat_width) + parseFloat(bottom_bottom_mat_width) +
                artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        } else {
            document.querySelector("#Mat3Details").style.display = "none";
        }
        if ($("#originalFileWithFrame").val() !== "") {
            applyFrame();
        }
    });
}

function applyMat(clr) {
    var block = $('#testDI');
    $(block).block({
        message: '<i class="icon-spinner4 spinner"></i>',
        timeout: 2500, //unblock after 2 seconds
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

    var topMat = $('#topMatH').val();
    var middleMat = $("#middleMatH").val();
    var bottomMat = $("#bottomMatH").val();

    var imgPath = $('#originalFile').val();
    let pixelPerInch = $("#pixelPerInch").val();

    var top_top_mat_width = $('#top_topSliderInput').val();
        var top_left_mat_width = $('#top_leftSliderInput').val();
        var top_right_mat_width = $('#top_rightSliderInput').val();
        var top_bottom_mat_width = $('#top_bottomSliderInput').val();
        var middle_top_mat_width = $('#middle_topSliderInput').val();
        var middle_left_mat_width = $('#middle_leftSliderInput').val();
        var middle_right_mat_width = $('#middle_rightSliderInput').val();
        var middle_bottom_mat_width = $('#middle_bottomSliderInput').val();
        var bottom_top_mat_width = $('#bottom_topSliderInput').val();
        var bottom_left_mat_width = $('#bottom_leftSliderInput').val();
    var bottom_right_mat_width = $('#bottom_rightSliderInput').val();
    var bottom_bottom_mat_width = $('#bottom_bottomSliderInput').val();

    var request = $.ajax({  
        url: "/saya_frames/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/index_v2.php",
        type: "POST",
        data: {
            action: 'applyMat',
            imgPath: imgPath,
            top_matColor: topMat,
            middle_matColor: middleMat,
            bottom_matColor: bottomMat,
            top_topMat: top_top_mat_width,
            top_leftMat: top_left_mat_width,
            top_rightMat: top_right_mat_width,
            top_bottomMat: top_bottom_mat_width,
            middle_topMat: middle_top_mat_width,
            middle_leftMat: middle_left_mat_width,
            middle_rightMat: middle_right_mat_width,
            middle_bottomMat: middle_bottom_mat_width,
            bottom_topMat: bottom_top_mat_width,
            bottom_leftMat: bottom_left_mat_width,
            bottom_rightMat: bottom_right_mat_width,
            bottom_bottomMat: bottom_bottom_mat_width,
            pixelPerInch: pixelPerInch,
            imageSize: $("#originalImageSize").val()
        },
        dataType: "text"
    });
    request.done(function(resp) {
        // console.log("Respone Mat: ", resp);
        // resp = JSON.parse(resp);
        // $('#demo-cropper-image').attr('src', resp.msg)
        // $('#image').css("width", resp.width)
        // $('#image').css("height", resp.height)
        // $("#originalFileWithMat").val(resp.msg);

        //applying mats calculation
        let leftTotal = 0;
        let rightTotal = 0;
        let topTotal = 0;
        let bottomTotal = 0;

        if (topMat != "") {
            leftTotal += parseFloat(top_left_mat_width);
            rightTotal += parseFloat(top_right_mat_width);
            topTotal += parseFloat(top_top_mat_width);
            bottomTotal += parseFloat(top_bottom_mat_width);
        }
        if (middleMat != "") {
            leftTotal += parseFloat(middle_left_mat_width);
            rightTotal += parseFloat(middle_right_mat_width);
            topTotal += parseFloat(middle_top_mat_width);
            bottomTotal += parseFloat(middle_bottom_mat_width);
        }
        if (bottomMat != "") {
            leftTotal += parseFloat(bottom_left_mat_width);
            rightTotal += parseFloat(bottom_right_mat_width);
            topTotal += parseFloat(bottom_top_mat_width);
            bottomTotal += parseFloat(bottom_bottom_mat_width);
        }

        const totalMatWidth = (leftTotal + rightTotal + artworkWidthInInches) + 0.5;
        const totalMatHeight = (topTotal + bottomTotal + artworkHeightInInches) + 0.5;
        const areaInSqFt = (totalMatWidth * totalMatHeight) / 144;

        const MatPrice = 100;
        price = areaInSqFt * 100;
       

        console.log("Total Left: ", price);
            console.log("Total right: ", rightTotal);
            console.log("Total top: ", topTotal);
        console.log("Total bottom: ", bottomTotal);

        var Mat_Subtotal = document.querySelector("#Mat_Subtotal");
        Mat_Subtotal.innerHTML = "Subtotal: " + price.toFixed(2) + " PKR";

        grandTotal = grandTotal + price;
        $("#grand-total").text("Total: " + grandTotal.toFixed(2) + " PKR");
        $("#grandTotalInside").text("Grand Total: " + grandTotal.toFixed(2) + " PKR");

        if (topMat != "") {
            const matSize = document.querySelector("#Mat1Size");
            const matWidth = (parseFloat(top_left_mat_width) + parseFloat(top_right_mat_width) +
                artworkWidthInInches + 0.5);
            console.log("mat width: ", matWidth);
            const matHeight = (
                parseFloat(top_top_mat_width) + parseFloat(top_bottom_mat_width) + artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        }
        if (middleMat != "") { 
            const matSize = document.querySelector("#Mat2Size");
            const matWidth = (parseFloat(middle_left_mat_width) + parseFloat(middle_right_mat_width) +
                artworkWidthInInches + 0.5);
            console.log("mat width: ", matWidth);
            const matHeight = (
                parseFloat(middle_top_mat_width) + parseFloat(middle_bottom_mat_width) +
                artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        } else {
            document.querySelector("#Mat2Details").style.display = "none";
        }
        if (bottomMat != "") {
            const matSize = document.querySelector("#Mat3Size");
            document.querySelector("#Mat3Details").style.display = "flex";
            const matWidth = (parseFloat(bottom_left_mat_width) + parseFloat(bottom_right_mat_width) +
                artworkWidthInInches + 0.5);
            const matHeight = (
                parseFloat(bottom_top_mat_width) + parseFloat(bottom_bottom_mat_width) +
                artworkHeightInInches +
                0.5);
            matSize.innerHTML = matWidth.toFixed(2) +
                " x " + matHeight.toFixed(2);
        } else {
            document.querySelector("#Mat3Details").style.display = "none";
        }
        if ($("#originalFileWithFrame").val() !== "") {
            applyFrame();
        }
    });
}

function applyFrame(frame) {
    if ($("#originalFile").val() === "" && $("#originalFileWithMat").val() === "") {
        alert("Please select or upload an Artwork");
        return;
    }
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
    var top_top_mat_width = $('#topMatH').val() ? $('#top_topSliderInput').val() : '0';
    var top_left_mat_width = $('#topMatH').val() ? $('#top_leftSliderInput').val() : '0';
    var top_right_mat_width = $('#topMatH').val() ? $('#top_rightSliderInput').val() : '0';
    var top_bottom_mat_width = $('#topMatH').val() ? $('#top_bottomSliderInput').val() : '0';
    var middle_top_mat_width = $("#middleMatH").val() ? $('#middle_topSliderInput').val() : '0';
    var middle_left_mat_width = $("#middleMatH").val() ? $('#middle_leftSliderInput').val() : '0';
    var middle_right_mat_width = $("#middleMatH").val() ? $('#middle_rightSliderInput').val() : '0';
    var middle_bottom_mat_width = $("#middleMatH").val() ? $('#middle_bottomSliderInput').val() : '0';
    var bottom_top_mat_width = $("#bottomMatH").val() ? $('#bottom_topSliderInput').val() : '0';
    var bottom_left_mat_width = $("#bottomMatH").val() ? $('#bottom_leftSliderInput').val() : '0';
    var bottom_right_mat_width = $("#bottomMatH").val() ? $('#bottom_rightSliderInput').val() : '0';
    var bottom_bottom_mat_width = $("#bottomMatH").val() ? $('#bottom_bottomSliderInput').val() : '0';
    var outer_frame = $('#outerFrameH').val()
    var middle_frame = $('#middleFrameH').val()
    var inner_frame = $('#innerFrameH').val()
    var img_path = "";
    if ($("#originalFileWithMat").val() !== "") {
        imgPath = $('#originalFileWithMat').val();
    } else {
        imgPath = $('#originalFile').val();
    }

    const frame_size = $("#outerFrameSize").val();
    let pixelPerInch = $("#pixelPerInch").val();
    var request = $.ajax({
        url: "/saya_frames/IMAGE_PROCESSING_SCRIPTS/var-www-html-api/index_v2.php",
        type: "POST",
        data: {
            action: 'applyFrame',
            imgPath: imgPath,
            outer_frame: outer_frame,
            middle_frame: middle_frame,
            inner_frame: inner_frame,
            outerFrameSize: $('#outerFrameSize').val(),
            outerFrameImage: $("#outerFrameImage").val(),
            middleFrameSize: $('#middleFrameSize').val(),
            middleFrameImage: $("#middleFrameImage").val(),
            innerFrameSize: $('#innerFrameSize').val(),
            innerFrameImage: $("#innerFrameImage").val(),
            imageSize: $("#originalImageSize").val(),
            top_topMat: top_top_mat_width,
            top_leftMat: top_left_mat_width,
            top_rightMat: top_right_mat_width,
            top_bottomMat: top_bottom_mat_width,
            middle_topMat: middle_top_mat_width,
            middle_leftMat: middle_left_mat_width,
            middle_rightMat: middle_right_mat_width,
            middle_bottomMat: middle_bottom_mat_width,
            bottom_topMat: bottom_top_mat_width,
            bottom_leftMat: bottom_left_mat_width,
            bottom_rightMat: bottom_right_mat_width,
            bottom_bottomMat: bottom_bottom_mat_width,
        },
        // dataType: 'application/json; charset=utf-8',
        dataType: "text"
    });
    request.done(function(resp) {
        console.log(resp);
        // resp = JSON.parse(resp);    
        $('#demo-cropper-image').attr('src', resp.msg);
        $('#image').css("width", resp.width)
        $('#image').css("height", resp.height)
        $("#originalFileWithFrame").val(resp.msg);
    });
}

function resetMatsideBar(val) {
    if (val == 'top') {
        $('#topMat').show();
        $('#bottomMat').hide();
        $('#middleMat').hide();

        $('#topMats').hide();
        $('#middleMats').hide();
        $('#bottomMats').hide();
    } else if (val == 'middle') {
        $('#middleMat').show();
        $('#bottomMat').hide();
        $('#topMat').hide();

        $('#topMats').hide();
        $('#middleMats').hide();
        $('#bottomMats').hide();
    } else if (val == 'bottom') {
        $('#bottomMat').show();
        $('#middleMat').hide();
        $('#topMat').hide();

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
        $('#middleMatH').val("");
        $('#bottomMatH').val("");
    } else if (numMats == 2) {
        $('#top_mat').show();
        $('#middle_mat').hide();
        $('#middleMatH').val("");
        $('#bottom_mat').show();
    } else if (numMats == 3) {
        $('#top_mat').show();
        $('#middle_mat').show();
        $('#bottom_mat').show();
    }
}

function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);
    /*create magnifier glass:*/
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    /*insert magnifier glass:*/
    //   img.parentElement.insertBefore(glass, img);
    document.querySelector(".zoomContainer").appendChild(glass);
    /*set background properties for the magnifier glass:*/
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    let styled = getComputedStyle(img);
    //   glass.style.left = styled.left;
    //   glass.style.top =  styled.top;

    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;
    /*execute a function when someone moves the magnifier glass over the image:*/
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    /*and also for touch screens:*/
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {
            x = img.width - (w / zoom);
        }
        if (x < w / zoom) {
            x = w / zoom;
        }
        if (y > img.height - (h / zoom)) {
            y = img.height - (h / zoom);
        }
        if (y < h / zoom) {
            y = h / zoom;
        }
        /*set the position of the magnifier glass:*/

        // glass.style.left = (x - w)  + styled.left + "px";
        // glass.style.top = (y - h) + styled.top +"px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0,
            y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {
            x: x,
            y: y
        };
    }
}

function uploadSrcImg() {
    const artworkWidth = $('#artwork_width').val();
    if (artworkWidth !== "") {
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
        formData.append('width', "500");
        formData.append('pixelPerInch', $('#pixelPerInch').val());
        $("#originalImageSize").val($('#artwork_width').val());
        $.ajax({
            url: '<?= base_url("home/uploadStudioImgNew") ?>',
            type: 'POST',
            data: formData,
            processData: false, // tell jQuery not to process the data
            contentType: false, // tell jQuery not to set contentType
            success: function(resp) {
                console.log(resp);
                resp = JSON.parse(resp);
                $("#accordion-item-group1").css("display", "none");
                $("#accordion-item-group2").css("display", "block");
                $(".default-disabled").css("color", "white");
                $("#originalImageWidth").val(resp.width);
                $("#originalImageHeight").val(resp.height);
                $('#image').css("width", resp.width)
                $('#image').css("height", resp.height)
                $('#demo-cropper-image').attr('src', resp.path)
                $('#originalFile').val(resp.path);
                $('#artWorkAccordion').click();
                $('#artWorkAccordion').removeAttr('href')
                if ($('input[name="artwork_type"]:checked').val() == 'canvas') {
                    $('#mat_alert').show();
                } else if ($('input[name="artwork_type"]:checked').val() == 'paper') {
                    $('#matAccordion').show();
                }
                // const area = $("#originalImageSize").val() * parseFloat(resp.height);
                const calculatedPPI = resp.width / artworkWidth;
                console.log("PPI: ", calculatedPPI);

                const widthInInches = resp.width / calculatedPPI;
                artworkWidthInInches = widthInInches;
                const heightInInches = resp.height / calculatedPPI;
                artworkHeightInInches = heightInInches;

                const area = widthInInches * heightInInches;
                const areaSquareFeet = (area / 144);
                
                const artworkSubTotal = (areaSquareFeet * artworkPricePerSqft);
                console.log(price);
                // debugger;
                grandTotal = grandTotal + artworkSubTotal;
                $("#grand-total").text("Total: " + grandTotal.toFixed(2) + " PKR");
                $("#grandTotalInside").text("Grand Total: " + grandTotal.toFixed(2) + " PKR");
                $("#artworkName").text($('#src_img_studio')[0].files[0].name);
                $("#artworkSize").text(widthInInches + " x " + heightInInches);
                $("#artworkPrice").text("250 PKR");
                $("#artworkSubtotal").text(artworkSubTotal.toFixed(2) + " PKR");
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

function selectArt() {
    var option = $('input[name="wall_img"]:checked').val();
    if (option == "upload") {
        $('#uploadArtBtn').show();
        $('#galleryArtBtn').hide();
    } else {
        $('#galleryArtBtn').show();
        $('#uploadArtBtn').hide();
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

function showArtSidebar() {
    $('#artSidebar').show();
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

function applyColor(color) {
    $('.content-wrapper').css({
        "background-color": color,
        "background-image": "none"
    });
    $('.main-bg').css({
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
            console.log("Response: ", data);
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

//Make the DIV element draggagle:
        //dragElement(document.getElementById("frameBorder"));

        // function dragElement(elmnt) {
        //     var pos1 = 0,
        //         pos2 = 0,
        //         pos3 = 0,
        //         pos4 = 0;
        //     if (document.getElementById(elmnt.id)) {
        //         /* if present, the header is where you move the DIV from:*/
        //         document.getElementById(elmnt.id).onmousedown = dragMouseDown;
        //     } else {
        //         /* otherwise, move the DIV from anywhere inside the DIV:*/
        //         elmnt.onmousedown = dragMouseDown;
        //     }

        //     function dragMouseDown(e) {
        //         e = e || window.event;
        //         e.preventDefault();
        //         // get the mouse cursor position at startup:
        //         pos3 = e.clientX;
        //         pos4 = e.clientY;
        //         document.onmouseup = closeDragElement;
        //         // call a function whenever the cursor moves:
        //         document.onmousemove = elementDrag;
        //     }

        //     function elementDrag(e) {
        //         e = e || window.event;
        //         e.preventDefault();
        //         // calculate the new cursor position:
        //         pos1 = pos3 - e.clientX;
        //         pos2 = pos4 - e.clientY;
        //         pos3 = e.clientX;
        //         pos4 = e.clientY;
        //         // set the element's new position:
        //         elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        //         elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
        //     }

        //     function closeDragElement() {
        //         /* stop moving when mouse button is released:*/
        //         document.onmouseup = null;
        //         document.onmousemove = null;
        //     }
        // }
        // $('#draggableHelper').draggable({
        //     containment: "#frameBorder",
        //     scroll: false
        // });
        // $('#demo-cropper-image').resizable({
        //     aspectRatio: true
// });
</script>

<script>
$(function() {
    $("#image").draggable();
    $('#image').resizable({
        aspectRatio: true
    });
});
</script>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
<script>
$("#fixed-form-container .body").hide();
$("#fixed-form-container .button").click(function() {
    $(this).next("#fixed-form-container div").slideToggle(400);
    $(this).toggleClass("expanded");
});
</script>

<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
