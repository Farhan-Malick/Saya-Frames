<style>
.collapsible {
    background-color: #fff;
    color: black;
    cursor: pointer;
    padding: 10px 0;
    width: 100%;
    border: none;
    text-align: left;
    outline: none !important;
    font-size: 1rem;
    font-weight: 600;
    border-bottom: 1px solid #e3e3e3;
    font-family: 'Lato', sans-serif;
}

.active,
.collapsible:hover {
    background-color: #fff;
}

.active {
    border: none !important;
}

.content {
    /* padding: 0 18px; */
    display: none;
    overflow: hidden;
    background-color: #fff;
    border-bottom: 1px solid #e3e3e3;
}

.content p a {
    font-size: 0.9rem;
    cursor: pointer;
    color: #212529;
}

.content p a:hover {
    color: #0070c9;
    text-decoration: none
}

.content p {
    font-size: 0.9rem;
    cursor: pointer;
}

.content p:hover {
    color: #0070c9;
}

.collapsible:after {
    content: '\002B';
    /* Unicode character for "plus" sign (+) */
    font-size: 16px;
    float: right;
}

.collapsible:before {
    float: left;
}

.active:after {
    content: "\00D7";
    /* Unicode character for "minus" sign (-) */
}

.dropdown-menu {
    left: -105px !important;
}

.hoverImg {
    height: 320px;
    object-fit: contain;
}

@media screen and (max-width: 1200px) {
    .hoverImg {
        height: 260px;

    }
}

@media screen and (max-width: 1000px) {
    .hoverImg {
        height: 200px;

    }
}

@media screen and (max-width: 720px) {
    .hoverImg {
        height: 260px;

    }
}
</style>
<div class="container" style="margin-top: 15px">
    <div class="row">
        <!-- <div class="col-md-2">
			<div class="just-padding">

				<div class="list-group list-group-root card1">

					<a href="#item-1" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Framed Product
					</a>
					<div class="list-group collapse" id="item-1">

						<a href="#item-1-1" class="list-group-item" data-toggle="collapse">
							Framed Poster
						</a>

						<a href="#item-1-2" class="list-group-item" data-toggle="collapse">
							Framed Canvas
						</a>

						<a href="#item-1-3" class="list-group-item" data-toggle="collapse">
							Framed Paintings
						</a>

						<a href="#item-1-4" class="list-group-item" data-toggle="collapse">
							Photo Frames
						</a>

						<a href="#item-1-5" class="list-group-item" data-toggle="collapse">
							Diploma, Certificate, Degree (frames)
						</a>

						<a href="#item-1-6" class="list-group-item" data-toggle="collapse">
							Mirrors
						</a>
					</div>

					<a href="#item-2" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Painting
					</a>
					<div class="list-group collapse" id="item-2">

						<a href="#item-2-1" class="list-group-item" data-toggle="collapse">
							Calligraphy
						</a>

						<a href="#item-2-2" class="list-group-item" data-toggle="collapse">
							Abstract
						</a>

						<a href="#item-2-3" class="list-group-item" data-toggle="collapse">
							Cityscape
						</a>

						<a href="#item-2-4" class="list-group-item" data-toggle="collapse">
							Landscape
						</a>
						<a href="#item-2-5" class="list-group-item" data-toggle="collapse">
							Floral
						</a>
						<a href="#item-2-6" class="list-group-item" data-toggle="collapse">
							Pen & Ink
						</a>
						<a href="#item-2-7" class="list-group-item" data-toggle="collapse">
							Figurative
						</a>
						<a href="#item-2-8" class="list-group-item" data-toggle="collapse">
							Miniature
						</a>
					</div>


					<a href="#item-3" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Wooden Artwork
					</a>
					<div class="list-group collapse" id="item-3">

						<a href="#item-3-1" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Islamic
						</a>

						<a href="#item-3-2" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Decorative
						</a>

						<a href="#item-3-3" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Miscellaneous
						</a>
					</div>

					<a href="#item-4" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Digital Printing
					</a>

					<a href="#item-5" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Canvas
					</a>
					<div class="list-group collapse" id="item-5">

						<a href="#item-5-1" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Islamic
						</a>

						<a href="#item-5-2" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Abstract
						</a>

						<a href="#item-5-3" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Cityscape
						</a>
						<a href="#item-5-4" class="list-group-item" data-toggle="collapse">
							<i class="fa fa-angle-right mr-2"></i>Landscape
						</a>
					</div>

					<a href="#item-6" class="list-group-item" data-toggle="collapse">
						<i class="fa fa-angle-right mr-2"></i>Special Products
					</a>

				</div>
			</div>
		</div> -->
        <div class="col-md-12">
            <!-- <div class="row">
				<div class="col-md-1">
					<span style="font-size: 15px; vertical-align:middle">Filter By:</span>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="sel1">
						<option>Category</option>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="sel1">
						<option>Mirror Shape</option>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="sel1">
						<option>Wall Art Size</option>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="sel1">
						<option>Wall Art Subject</option>
					</select>
				</div>
				<div class="col-md-2">
					<select class="form-control" id="sel1">
						<option>Wall Art Type</option>
					</select>
				</div>
			</div> -->
            <div class="row">
                <div class="col-md-12" style="padding: 0 3px;">
                    <div class="listing_banner">
                        <h1>WE LOVE YOU SALE!</h1>
                        <h2 style="line-height: 1.2">25% OFF</h2>
                        <h4>SELECT SAVINGS WITH YOU IN MIND, NOW THROUGH WEDNESDAY</h4>
                        <!-- <p>Details</p> -->
                    </div>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #d6d6d6;border-bottom: 1px solid #d6d6d6;padding-top: 17px">
                <div class="col-6 col-md-2">
                    <p style="font-size: 14px"><i class="fas fa-list-ul"></i> Filter</p>
                </div>
                <div class="d-none d-md-block col-md-8"></div>
                <div class="col-6 col-md-2">
                    <div style="float: right">
                        <div class="dropdown" style="display: inline-block;">
                            <a style="font-size: 14px;cursor: pointer" id="dropdownMenu2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Sort By: </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="left: -125px!important">
                                <button class="dropdown-item" type="button"
                                    style="color: black!important">Featured</button>
                                <button class="dropdown-item" type="button"
                                    style="color: black!important">Newest</button>
                                <button class="dropdown-item" type="button" style="color: black!important">Price: Low to
                                    High</button>
                                <button class="dropdown-item" type="button" style="color: black!important">Price: High
                                    to Low</button>
                            </div>
                        </div>
                        <span style="font-size: 14px">Featured</span>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 15px">
                <div class="col-md-3">
                    <div style="padding-right: 10px;">

                        <?php if ($filters) {
							foreach ($filters as $filter_heading => $filter_options) { ?>
                        <button type="button" class="collapsible"><?= $filter_heading ?></button>
                        <div class="content">
                            <?php foreach ($filter_options as $filter_option) { ?>
                            <p
                                style="<?= $this->uri->segment(5) == $filter_option ? "background-color: #f2f2f2; padding: 4px 8px;" : '' ?>">
                                <?php if($isFilter){?>
                                <a
                                    href="<?=  $_SERVER['REQUEST_URI'] ?>../<?= $filter_option ?>/"><?= $filter_option ?></a>
                                <?php	}?>

                                <?php if(!$isFilter){?>
                                <a
                                    href="<?=  $_SERVER['REQUEST_URI'] ?>/<?= $filter_option ?>/"><?= $filter_option ?></a>
                                <?php	}?>

                            </p>
                            <?php } ?>
                        </div>
                        <?php }
						} ?>

                        <div class="mb-5" style="margin-top: 30px">
                            <p style="margin-bottom: 0.2rem;">
                                <label for="amount" style="font-size: 1rem;">Price:</label>
                                <input type="text" id="amount" readonly
                                    style="border:0; color:#f6931f; font-weight:bold;width: 100px;float: right;font-size: 1rem;">
                            </p>
                            <div id="slider-range"></div>
                        </div>

                        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                        <link rel="stylesheet" href="/resources/demos/style.css">
                        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                        <script>
                        $(function() {
                            $("#slider-range").slider({
                                range: true,
                                min: 0,
                                max: 500,
                                values: [100, 300],
                                slide: function(event, ui) {
                                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                                },
                                stop: function(event, ui) {
                                    console.log("Sliding: ", ui.values[0], " - ", ui.values[1]);
                                    console.log("windows: ", window.location.href);
                                    let slashes = (window.location.href).split("/");
                                    let s_url = "";
                                    if (slashes.length === 8 || (slashes.length === 9 && slashes[
                                            8] == "")) {
                                        s_url = window.location.href + "/0/" + ui.values[0] +
                                            "-" + ui.values[1];
                                    } else {
                                        s_url = window.location.href + "/" + ui.values[0] +
                                            "-" + ui.values[1];
                                    }
                                    console.log("End Url : ", s_url);

                                    $.ajax({
                                        url: s_url,
                                        type: "POST",
                                        headers: ({
                                            "Content-Type": "application/json"
                                        }, true),
                                        data: {
                                            email: $("#email").val(),
                                            password: $("#password").val(),
                                        },
                                        success: function(res) {
                                            const result = JSON.parse(res);
                                            console.log("Result: ", result);
                                            const products_list = document
                                                .getElementById("products_list");
                                            products_list.textContent = "";
                                            if (result.products !== false) {
                                                result.products.forEach(product => {
                                                    const firstDiv = document
                                                        .createElement("div");
                                                    firstDiv.className =
                                                        "col-6 col-md-4 mt-2";
                                                    firstDiv.style.padding =
                                                        "0 3px";
                                                    firstDiv.style
                                                        .marginBottom = "15px";

                                                    const innerDiv = document
                                                        .createElement("div");
                                                    innerDiv.className =
                                                        "listing_details p-1";

                                                    const anchor = document
                                                        .createElement("a");
                                                    anchor.href =
                                                        window.location.origin +
                                                        "//home/detail/" +
                                                        product.id;

                                                    const img = document
                                                        .createElement("img");
                                                    img.className = "hoverImg";
                                                    img.src =
                                                        product.product_img;

                                                    anchor.appendChild(img);

                                                    const innerDiv2 = document
                                                        .createElement("div");
                                                    innerDiv2.className = "p-1";

                                                    const p1 = document
                                                        .createElement("p");
                                                    const a2 = document
                                                        .createElement("a");
                                                    a2.href =
                                                        window.location.origin +
                                                        "/home/detail/" +
                                                        product.id;
                                                    a2.style.color = "#343a40";

                                                    const tnode1 = document
                                                        .createTextNode(product
                                                            .product_name);

                                                    a2.appendChild(tnode1);

                                                    p1.appendChild(a2);
                                                    const p2 = document
                                                        .createElement("p");
                                                    const tnode2 = document
                                                        .createTextNode(product
                                                            .price);
                                                    p2.appendChild(tnode2);

                                                    innerDiv2.appendChild(p1);
                                                    innerDiv2.appendChild(p2);

                                                    const price = parseFloat(
                                                        product.price);
                                                    let discount = parseFloat(
                                                            product.discount) /
                                                        100;
                                                    discount = discount * price;
                                                    let new_price = price -
                                                        discount;
                                                    if (product.discount != 0) {
                                                        const p4 = document
                                                            .createElement("p");
                                                        p4.style.color =
                                                            "#EF4036";
                                                        const tnode3 = document
                                                            .createTextNode(
                                                                product
                                                                .discount +
                                                                "% off: " +
                                                                new_price);
                                                        p4.appendChild(tnode3);
                                                        innerDiv2.appendChild(
                                                            p4);
                                                    }

                                                    innerDiv.appendChild(
                                                        anchor);
                                                    innerDiv.appendChild(
                                                        innerDiv2);
                                                    firstDiv.appendChild(
                                                        innerDiv);
                                                    products_list.appendChild(
                                                        firstDiv);

                                                });
                                            }
                                        }
                                    });
                                }
                            });
                            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                                " - $" + $("#slider-range").slider("values", 1));
                        });
                        </script>
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="row" id="products_list">
                        <?php
						if (!empty($products)) {
							foreach ($products as $product) {
						?>
                        <div class="col-6 col-md-4 mt-2" style="padding: 0 3px;margin-bottom: 15px">
                            <div class="listing_details p-1">
                                <a href="<?= base_url() ?>home/detail/<?= $product->id; ?>">
                                    <img class="hoverImg" src="<?= base_url($product->product_img); ?>" data-alt-src="">
                                </a>
                                <div class="p-1">
                                    <p><a href="<?= base_url() ?>home/detail/<?= $product->id; ?>"
                                            style="color: #343a40"><?= $product->product_name; ?></a></p>
                                    <p><?= $product->price; ?></p>
                                    <?php 
											$price = $product->price;
											$discount = $product->discount/100;
											$discount = $discount * $price;
											$new_price = $price - $discount;
											if($product->discount != 0){
												?>
                                    <p style="color: #EF4036"><?= $product->discount; ?>% off: $<?= $new_price ?></p>
                                    <?php
											}
										?>
                                </div>
                            </div>
                        </div>
                        <?php
							}
						} else {
							?>
                        <!-- <div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail">
									<img class="hoverImg" src="<?= base_url('assets/images/l1.jpg') ?>" data-alt-src="<?= base_url('assets/images/listing_n_3.jpg') ?>">
								</a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Mixed in Floral</a></p>
								<p>$350</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail">
									<img class="hoverImg" src="<?= base_url('assets/images/l2.jpg') ?>" data-alt-src="<?= base_url('assets/images/listing_n_3.jpg') ?>">
								</a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Evening Dress Giclee Wall Art</a></p>
								<p>$650</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail">
									<img class="hoverImg" src="<?= base_url('assets/images/l3.jpg') ?>" data-alt-src="<?= base_url('assets/images/listing_n_3.jpg') ?>">
								</a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail">
									<img class="hoverImg" src="<?= base_url('assets/images/l4.jpg') ?>" data-alt-src="<?= base_url('assets/images/listing_n_3.jpg') ?>">
								</a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l5.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Mixed in Floral</a></p>
								<p>$350</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l6.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Evening Dress Giclee Wall Art</a></p>
								<p>$650</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l7.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l8.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l6.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Mixed in Floral</a></p>
								<p>$350</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l1.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Evening Dress Giclee Wall Art</a></p>
								<p>$650</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l2.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div>
						<div class="col-6 col-md-3" style="padding: 0 3px;margin-bottom: 15px">
							<div class="listing_details">
								<a href="<?= base_url() ?>home/detail"><img src="<?= base_url('assets/images/l7.jpg') ?>"></a>
								<p><a href="<?= base_url() ?>home/detail" style="color: #343a40">Antique White Mirror</a></p>
								<p>$450</p>
								<p style="color: #EF4036">25% off: $250</p>
								<p><b>Free Shipping</b></p>
							</div>
						</div> -->
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="row"
                style="border-top: 1px solid rgba(0,0,0,.1);padding-top: 1rem; padding-bottom: 1rem;border-bottom: 1px solid rgba(0,0,0,.1);">
                <div class="col-md-3" style="padding: 0 3px;">
                    <div class="related_searches">
                        <p style="line-height: 1;color: #999;"><b>Related Searches</b></p>
                        <p><small>canvas wall flower</small></p>
                        <p><small>picture frame home decor</small></p>
                        <p><small>John-Richard Collection painting</small></p>
                        <p><small>wall art country</small></p>
                        <p><small>giclee wall art</small></p>
                    </div>
                </div>
                <div class="col-md-9" style="padding: 0 3px;">
                    <div class="related_items">
                        <p style="line-height: 1;color: #999;"><b>Related Searches</b></p>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="related_search_items_img">
                                    <img src="<?= base_url('assets/images/listing_n_8.jpg') ?>">
                                </div>
                                <div class="related_search_items_text">
                                    <p>Golden Fog Original Painting, Set Of 2 Original painting with textured detail and
                                        glittered highlights on canvas.Two-piece set; each</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="related_search_items_img">
                                    <img src="<?= base_url('assets/images/listing_n_8.jpg') ?>">
                                </div>
                                <div class="related_search_items_text">
                                    <p>Golden Fog Original Painting, Set Of 2 Original painting with textured detail and
                                        glittered highlights on canvas.Two-piece set; each</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="related_search_items_img">
                                    <img src="<?= base_url('assets/images/listing_n_8.jpg') ?>">
                                </div>
                                <div class="related_search_items_text">
                                    <p>Golden Fog Original Painting, Set Of 2 Original painting with textured detail and
                                        glittered highlights on canvas.Two-piece set; each</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="related_search_items_img">
                                    <img src="<?= base_url('assets/images/listing_n_8.jpg') ?>">
                                </div>
                                <div class="related_search_items_text">
                                    <p>Golden Fog Original Painting, Set Of 2 Original painting with textured detail and
                                        glittered highlights on canvas.Two-piece set; each</p>
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
<script>
$(function() {
    // $('img.hoverImg').hover(sourceSwap, sourceSwap);
    $('.list-group-item').on('click', function() {
        $('.fas', this)
            .toggleClass('fa-angle-right')
            .toggleClass('fa-angle-down');
    });
});
var sourceSwap = function() {
    var $this = $(this);
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}


var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });






}
</script>
