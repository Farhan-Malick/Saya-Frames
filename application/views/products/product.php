<style>
        .similar_banner {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 60%;
            height: 450px;
            width: 100%;
            padding: 100px 125px;
            /* background: #e7e7e5; */
        }

        .similar_banner h1,
        .similar_banner h3 {
            color: white;
        }

        .similar_boxes {
            text-align: center;
            height: 950px;
            padding-top: 60px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            color: white;
        }


        #product_main_img_3 {
            text-align: center;
            padding: 70px 0;
            height: 500px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        h1+a,
        h1+a+a {
            font-size: 21px;
            letter-spacing: -1.05px;
            color: #3083D5;
            font-weight: 500;
        }

        @media screen and (max-width: 980px) {
            .similar_banner {
                padding: 100px 50px;
                height: 400px;
            }

            .similar_banner h1 {
                font-size: 28px;
            }

            .similar_banner h3 {
                font-size: 21px;
            }

            .similar_banner a {
                font-size: 17px;
            }
        }

        @media screen and (max-width: 450px) and (min-width: 300px) {
            .responsive_width {
                width: auto !important;
            }

            .similar_banner {
                padding: 100px 30px;
            }
        }
</style>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/categories.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/categories_responsive.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/product.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/product_responsive.css'); ?>">
<div class="container-fluid">
    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->

                <div class="col-lg-5 border-right 1px p-2">
                    <div class="details_image">
                        <div class="details_image_large"><img src="<?= base_url($product['product_img']) ; ?>"
                                alt=""></div>
                        <!-- <div class="details_image_thumbnails d-flex flex-row align-items-start">
                            <div class="details_image_thumbnail active"
                                data-image="<?= base_url( 'assets/imagess/details_1.jpg')?>"><img
                                    src="<?= base_url( 'assets/imagess/details_1.jpg')?>" alt=""></div>
                            <div class="details_image_thumbnail"
                                data-image="<?= base_url( 'assets/imagess/details_2.jpg')?>"><img
                                    src="<?= base_url( 'assets/imagess/details_2.jpg')?>" alt=""></div>
                            <div class="details_image_thumbnail"
                                data-image="<?= base_url( 'assets/imagess/details_3.jpg')?>"><img
                                    src="<?= base_url( 'assets/imagess/details_3.jpg')?>" alt=""></div>
                            <div class="details_image_thumbnail"
                                data-image="<?= base_url( 'assets/imagess/details_4.jpg')?>"><img
                                    src="<?= base_url( 'assets/imagess/details_4.jpg')?>" alt=""></div>
                        </div> -->
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-7 p-2">
                    <div class="details_content">
                        <div class="details_name"><?php echo $product['product_name'] ?></div>
                        <div class="details_discount">$<?php echo $product['discount'] ?></div>
                        <div class="details_price">$<?php echo $product['price'] ?></div>

                        <!-- In Stock -->
                        <div class="mt-4">
                       <div class="row">
                            <div class="col-md-6">  
                                <div class="availability">Availability:</div>
                            <span class="text-dark"><b>In Stock</b></span>
                        </div>
                            <div class="col-md-6">
                                <span class="availability"><img src="<?= base_url( 'assets/products/img/icon/check-mark.png')?>" alt=""> Delivery in 3-6 business days</span>
                            </div>
                       </div>
                          
                           
                        </div>
                        <div class="mt-4">
                           <div class="row">
                                <div class="col-md-6">
                                    <span class="availability"><img src="<?= base_url( 'assets/products/img/icon/check-mark.png')?>" alt="">Free delivery over $59</span>
                                </div>
                                <div class="col-md-6">
                                    <span class=" availability"><img src="<?= base_url( 'assets/products/img/icon/check-mark.png')?>" alt="">Return policy 90 days</span>
                                </div>
                           </div>
                        
                        </div>
                        <div class="mt-4">
                            <p><?php echo $product['features'] ?></p>
                        </div>

                        <div class="form-group">
                            <label for=""></label>
                            <select class="form-control" name="" id="">
                                <option></option>
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="button cart_button"><a href="<?= base_url('home/product/'. $product['id']); ?>">Add to cart</a></div>

                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                    </div>
                    <div class="description_text">
                        <p><?php echo $product['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
    </div>
    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="products_title">Related Products</div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
                        <a href="<?= base_url('home/product'); ?>">
                            <div class="product">
                                <div class="product_image"><img src="<?= base_url('assets/imagess/product_2.jpg'); ?>"
                                        alt=""></div>
                                <!-- <div class="product_extra product_sale"><a href="categories.html">Sale</a></div> -->
                                <div class="product_content">
                                    <div class="product_title"><a href  ="<?= base_url('home/product'); ?>"> Smart
                                            Phone</a></div>
                                    <div class="product_price">$520</div>
                                </div>
                            </div>
                        </a>

                        <!-- Product -->
                        <a href="<?= base_url('home/product'); ?>">
                            <div class="product">
                                <div class="product_image"><img src="<?= base_url('assets/imagess/product_3.jpg'); ?>"
                                        alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="<?= base_url('home/product'); ?>">Smart
                                            Phone</a></div>
                                    <div class="product_price">$710</div>
                                </div>
                            </div>
                        </a>

                        <!-- Product -->
                        <a href="<?= base_url('home/product'); ?>">
                            <div class="product">
                                <div class="product_image"><img src="<?= base_url('assets/imagess/product_4.jpg'); ?>"
                                        alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="<?= base_url('home/product'); ?>">Smart
                                            Phone</a></div>
                                    <div class="product_price">$330</div>
                                </div>
                            </div>
                        </a>

                        <!-- Product -->
                        <a href="<?= base_url('home/product'); ?>">
                            <div class="product">
                                <div class="product_image"><img src="<?= base_url('assets/imagess/product_5.jpg'); ?>"
                                        alt=""></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="<?= base_url('home/product'); ?>">Smart
                                            Phone</a></div>
                                    <div class="product_price">$170</div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script> -->

<script src="<?= base_url('assets/js/products.js'); ?>"></script>
<script src="<?= base_url('assets/js/isotope.pkgd.min.js'); ?>"></script>
<script>
// var swiper = new Swiper('.blog-slider', {
//     spaceBetween: 30,
//     effect: 'fade',
//     loop: true,
//     autoplay: {
//         delay: 3000,
//     },
//     mousewheel: {
//         invert: false,
//     },
//     // autoHeight: true,
//     pagination: {
//         el: '.blog-slider__pagination',
//         clickable: true,
//     }
// });

$(".fullDiv").click(function() {
    window.location = $(this).find("a").attr("href");
    return false;
});

$(document).ready(function() {
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
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
</script>
