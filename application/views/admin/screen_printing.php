<?php
if($this->router->method == 'screen_printing'){
    $page_title = 'Services - Screen Printing';
    $submit_btn_label = 'submit_btn_sp';
}else if($this->router->method == 'laser_cutting'){
    $page_title = 'Services - Laser Cutting';
    $submit_btn_label = 'submit_btn_lc';
}else if($this->router->method == 'loose_material'){
    $page_title = 'Framing Supplies - Loose Material';
    $submit_btn_label = 'submit_btn_lm';
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Small Section Below Navbar</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Normal Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="normal_text" placeholder="Normal Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (Blue Background) Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_blue_bg_label" placeholder="Button (Blue Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (Blue Background) URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_blue_bg_url" placeholder="Button (Blue Background) URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="25">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_25" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Banner</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_heading" placeholder="Small Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_1" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_2" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_3" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_4" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 4</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_5" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 5</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_6" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 6</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_7" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 7</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_8" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 8</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_9" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 9</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_10" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 10</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="11">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_11" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 11</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_12" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 12</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="13">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_13" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 13</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="14">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_14" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 14</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="15">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_15" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 15</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="16">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_16" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 16</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="17">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_17" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 17</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="18">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_18" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 18</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="19">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_19" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 19</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="20">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_20" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 20</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="21">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_21" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Banner 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="22">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_22" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Banner 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading" placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label" placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url" placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading1" placeholder="Main Heading 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text1" placeholder="Small Text 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img2" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image 2 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading2" placeholder="Main Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text2" placeholder="Small Text 2">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="23">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_23" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Last 3 Boxes In Footer</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text1" placeholder="Small Text 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading1" placeholder="Main Heading 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_label" placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link1_url" placeholder="Link 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon2" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text2" placeholder="Small Text 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading2" placeholder="Main Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label" placeholder="Link 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url" placeholder="Link 2 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon3" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Small Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text3" placeholder="Small Text 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading3" placeholder="Main Heading 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 3 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link3_label" placeholder="Link 3 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 3 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link3_url" placeholder="Link 3 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="24">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_24" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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