<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold">Products</span> - Main Page</h4>
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
                                                Recommended Image Resolution : 1920 x 450
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 420
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
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url"
                                                placeholder="Button (White Background) URL">
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
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_1" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1920 x 450
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 420
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
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_2" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_3" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_4" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_5" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                        <input type="hidden" class="form-control" name="section" value="6">
                                        <input type="hidden" class="form-control" name="page"
                                            value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_6" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 720
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
                                    <!-- <div class="form-group row">
										<label class="col-lg-3 col-form-label">Category Icon 1:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon1" data-fouc>
										</div>
									</div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_heading_1"
                                                placeholder="Category Heading 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link Title 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_title_1"
                                                placeholder="Category Link Title 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_1"
                                                placeholder="Category Link 1">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
										<label class="col-lg-3 col-form-label">Category Icon 2:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon2" data-fouc>
										</div>
									</div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_heading_2"
                                                placeholder="Category Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link Title 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_title_2"
                                                placeholder="Category Link Title 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_2"
                                                placeholder="Category Link 2">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
										<label class="col-lg-3 col-form-label">Category Icon 3:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon3" data-fouc>
										</div>
									</div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_heading_3"
                                                placeholder="Category Heading 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link Title 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_title_3"
                                                placeholder="Category Link Title 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_3"
                                                placeholder="Category Link 3">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
										<label class="col-lg-3 col-form-label">Category Icon 4:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon4" data-fouc>
										</div>
									</div> -->
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Heading 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_heading_4"
                                                placeholder="Category Heading 4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link Title 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_title_4"
                                                placeholder="Category Link Title 4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category Link 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="category_link_4"
                                                placeholder="Category Link 4">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_7" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fifth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_8" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_9" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Seventh Box
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_10" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Eighth Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">

                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 654 x 586
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 510
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
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_11" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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
                                                Recommended Image Resolution : 79 x 79
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading"
                                                placeholder="Text">
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
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="Products - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_12" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
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