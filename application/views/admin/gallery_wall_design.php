<?php
if($this->router->method == 'gallery_wall_design'){
    $page_title = 'Services - Gallery Wall Design';
    $submit_btn_label = 'submit_btn_gwd';
}else if($this->router->method == 'printing'){
    $page_title = 'Services - Printing';
    $submit_btn_label = 'submit_btn_wwfp';
}else if($this->router->method == 'printing_and_canvas'){
    $page_title = 'What We Frame - Printing and Canvas';
    $submit_btn_label = 'submit_btn_p&c';
}else if($this->router->method == 'other_supplies'){
    $page_title = 'Framing Supplies - Other Supplies';
    $submit_btn_label = 'submit_btn_os';
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
                                    <input type="hidden" class="form-control" name="section" value="17">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_17" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_1" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading2" placeholder="Sub Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading3" placeholder="Sub Heading 3">
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
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_2" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_3" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_4" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fifth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_5" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Sixth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_6" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Seventh Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_7" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Eighth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_8" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Nineth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_9" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Tenth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_10" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Eleventh Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                        <label class="col-lg-3 col-form-label">Sub Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading2" placeholder="Sub Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_label" placeholder="Link 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link2_url" placeholder="Link 1 URL">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Twelvth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_12" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Thirteenth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="13">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_13" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourteenth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="14">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_14" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fifteenth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img_m" data-fouc>
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
                                    <input type="hidden" class="form-control" name="section" value="15">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_15" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <!-- <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Sixteenth Banner</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading" placeholder="Main Heading">
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
										<label class="col-lg-3 col-form-label">Image 1:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="image1" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 1 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title1" placeholder="Title 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_text1" placeholder="Sub Text 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features 1:</label>
                                        <div class="col-lg-9">
                                            <textarea name="features1" placeholder="Add points comma separated" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button1_label" placeholder="Button 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button1_url" placeholder="Button 1 URL">
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
										<label class="col-lg-3 col-form-label">Image 2:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="image2" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 2 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title2" placeholder="Title 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_text2" placeholder="Sub Text 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features 2:</label>
                                        <div class="col-lg-9">
                                            <textarea name="features2" placeholder="Add points comma separated" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button2_label" placeholder="Button 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button2_url" placeholder="Button 2 URL">
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
										<label class="col-lg-3 col-form-label">Image 3:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="image3" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 3 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title3" placeholder="Title 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_text3" placeholder="Sub Text 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features 3:</label>
                                        <div class="col-lg-9">
                                            <textarea name="features3" placeholder="Add points comma separated" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 3 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button3_label" placeholder="Button 3 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 3 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button3_url" placeholder="Button 3 URL">
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


                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 4:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="image4" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 4 Mobile:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 
                                            </p>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title4" placeholder="Title 4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Text 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_text4" placeholder="Sub Text 4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features 4:</label>
                                        <div class="col-lg-9">
                                            <textarea name="features4" placeholder="Add points comma separated" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 4 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button4_label" placeholder="Button 4 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 4 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="button4_url" placeholder="Button 4 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 4 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link4_label" placeholder="Link 4 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 4 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link4_url" placeholder="Link 4 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="16">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_16" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form> -->

                        </div>
                    </div>
                    <!-- /basic legend -->

                </div>
            </div>
            <!-- /fieldset legend -->
        </div>
        <!-- /content area -->
