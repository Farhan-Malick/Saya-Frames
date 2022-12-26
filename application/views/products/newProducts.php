

  <body>
   
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
        <div class="offcanvas__links">
          <a href="#">Sign in</a>
          <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
          <span>Usd <i class="arrow_carrot-down"></i></span>
          <ul>
            <li>USD</li>
            <li>EUR</li>
            <li>USD</li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"
          ><img src="<?= base_url('assets/products/img/icon/search.png') ; ?> " alt=""
        /></a>
        <a href="#"><img src="<?= base_url('assets/products/img/icon/heart.png') ; ?> " alt="" /></a>
        <a href="#"><img src="<?= base_url('assets/products/img/icon/cart.png') ; ?> " alt="" /> <span>0</span></a>
        <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
    </div>
    <!-- Offcanvas Menu End -->



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <h4>Products</h4>
              <div class="breadcrumb__links">
                <a href="#">Home</a>
                <span>Products</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="shop__sidebar">
              <div class="shop__sidebar__search">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button type="submit">
                    <span class="icon_search"></span>
                  </button>
                </form>
              </div>
              <div class="shop__sidebar__accordion">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseOne"
                        >Categories</a
                      >
                    </div>
                    <div
                      id="collapseOne"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__categories">
                          <ul class="nice-scroll">
                            <li><a href="#">Frames</a></li>
                            <li><a href="#">Matt</a></li>
                            <li><a href="#">Sizes</a></li>
                            <li><a href="#">Nature Prints</a></li>
                            <li><a href="#">Text Posture</a></li>
                            <li><a href="#">Photographs</a></li>
                            <li><a href="#">Kids Wall Art</a></li>
                            <li><a href="#">Animals</a></li>
                            <li><a href="#">Kitchen</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseTwo"
                        >Branding</a
                      >
                    </div>
                    <div
                      id="collapseTwo"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__brand">
                          <ul>
                            <li><a href="#">Louis Vuitton</a></li>
                            <li><a href="#">Chanel</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-heading">
                      <a data-toggle="collapse" data-target="#collapseThree"
                        >Filter Price</a
                      >
                    </div>
                    <div
                      id="collapseThree"
                      class="collapse show"
                      data-parent="#accordionExample"
                    >
                      <div class="card-body">
                        <div class="shop__sidebar__price">
                          <ul>
                            <li><a href="#">$0.00 - $50.00</a></li>
                            <li><a href="#">250.00+</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
             
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="shop__product__option">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="shop__product__option__left">
                    <p>Showing 1–12 of 126 results</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="shop__product__option__right">
                    <p>Sort by Price:</p>
                    <select>
                      <option value="">Low To High</option>
                      <option value="">$0 - $55</option>
                      <option value="">$55 - $100</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <?php foreach($products as $product) { ?>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                  <div
                    class="product__item__pic set-bg"
                    data-setbg="<?= base_url($product['product_img']) ; ?>"
                  >
                    <ul class="product__hover">
                      <li>
                        <a href="#"><img src="<?= base_url('assets/products/img/icon/heart.png') ; ?> " alt="" /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img src="<?= base_url('assets/products/img/icon/compare.png') ; ?> " alt="" />
                          <span>Compare</span></a
                        >
                      </li>
                      <li>
                        <a  href="<?= base_url('home/product/'.$product['id']); ?>"><img  src="<?= base_url('assets/products/img/icon/eye.png') ; ?> " alt="" /></a>
                      </li>
                    </ul>
                  </div>
                  <div class="product__item__text">
                    <h6><?php echo $product['product_name'] ?></h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$<?php echo $product['price'] ?></h5>
                    <div class="product__color__select">
                      <label for="pc-4">
                        <input type="radio" id="pc-4" />
                      </label>
                      <label class="active black" for="pc-5">
                        <input type="radio" id="pc-5" />
                      </label>
                      <label class="grey" for="pc-6">
                        <input type="radio" id="pc-6" />
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <?php  }  ?>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="product__pagination">
                  <a class="active" href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <span>...</span>
                  <a href="#">21</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shop Section End -->

 

    <!-- Search Begin -->
    <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
          <input type="text" id="search-input" placeholder="Search here....." />
        </form>
      </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="<?= base_url('assets/products/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/jquery.countdown.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/mixitup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/products/js/main.js'); ?>"></script>
    

  </body>
