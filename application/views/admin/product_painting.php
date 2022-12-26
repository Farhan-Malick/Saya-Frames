<?php
if($this->router->method == 'product_painting'){
    $page_title = 'Products - Painting';
    $submit_btn_label = 'submit_btn_pt';
}else if($this->router->method == 'product_wooden_art'){
    $page_title = 'Products - Wooden Artwork';
    $submit_btn_label = 'submit_btn_pwa';
}else if($this->router->method == 'mirrors_and_more'){
    $page_title = 'What We Frame - Mirrors & More';
    $submit_btn_label = 'submit_btn_m&m';
}
?>
<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold"><?= $page_title ?></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <!-- Fieldset legend -->
            <div class="row">
                <div class="col-md-12">

                    <!-- Basic legend -->
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 2560 x 1620
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 720
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Normal Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="normal_text"
                                                placeholder="Normal Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link_label"
                                                placeholder="Link Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link_url"
                                                placeholder="Link URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_1"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <?php if($this->router->method == 'product_painting'){ ?>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Banner
                                    </legend>
                                    <!-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon" data-fouc>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Normal Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="normal_text"
                                                placeholder="Normal Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_2"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <?php } ?>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_3"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 130 x 40
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 130 x 40
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 130 x 40
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img4" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 130 x 40
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text"
                                                placeholder="Small Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 5:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img5" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 130 x 40
                                            </p>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_4"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 385
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_5"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 385
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_6"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fifth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Colorful Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="colorful_text"
                                                placeholder="Colorful Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_7"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Sixth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 385
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_8"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Seventh Box
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_9"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 50 x 50
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Normal Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="normal_text"
                                                placeholder="Normal Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_10"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 280
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="11">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_11"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img4" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 5:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img5" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 6:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img6" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 7:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img7" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 8:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img8" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 9:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img9" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 10:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img10" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 11:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img11" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 12:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img12" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 13:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img13" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 14:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img14" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 15:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img15" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text"
                                                placeholder="Small Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 16:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img16" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 100 x 35
                                            </p>
                                        </div>
                                    </div>

                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_12"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 418
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="13">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_13"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 418
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="14">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_14"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fifth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Colorful Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="colorful_text"
                                                placeholder="Colorful Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="15">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_15"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Sixth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 468 x 418
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="16">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_16"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Seventh Box
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="17">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_17"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 60 x 60
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon2"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 60 x 60
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="18">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_18"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 697 x 466
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 720
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="19">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_19"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 697 x 466
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 720
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="20">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_20"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 697 x 466
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 720
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="21">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_21"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 697 x 466
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 720
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label"
                                                placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url"
                                                placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label"
                                                placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url"
                                                placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="22">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_22"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basic legend -->

                </div>
            </div>
            <!-- /fieldset legend -->
        </div>
        <!-- /content area -->