<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold">Home Page</span></h4>
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
                                        <label class="col-lg-3 col-form-label">Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image1"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="image_m1" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading1"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading1"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label
                                            1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label1"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url1"
                                                placeholder="Button (White Background) URL">
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
                                        <label class="col-lg-3 col-form-label">Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image2"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="image_m2" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading2"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading2"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label
                                            2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label2"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url2"
                                                placeholder="Button (White Background) URL">
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
                                        <label class="col-lg-3 col-form-label">Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image3"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="image_m3" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading3"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading3"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label
                                            3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label3"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url3"
                                                placeholder="Button (White Background) URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 3 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link3_label"
                                                placeholder="Link 3 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 3 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link3_url"
                                                placeholder="Link 3 URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image4"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="image_m4" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading4"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading4"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text4" placeholder="Text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label
                                            4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label4"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url4"
                                                placeholder="Button (White Background) URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 4 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link4_label"
                                                placeholder="Link 4 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 4 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link4_url"
                                                placeholder="Link 4 URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 5:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image5"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="image_m5" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading 5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading5"
                                                placeholder="Main Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Sub Heading 5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading5"
                                                placeholder="Sub Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text5" placeholder="Text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) Label
                                            5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label5"
                                                placeholder="Button (White Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (White Background) URL 5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url5"
                                                placeholder="Button (White Background) URL">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 5 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link5_label"
                                                placeholder="Link 5 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link 5 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link5_url"
                                                placeholder="Link 5 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_slider" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                                placeholder="Link 5 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link_url"
                                                placeholder="Link 5 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_2" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 1358 x 636
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img_m" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 350 x 600
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                                placeholder="Link 5 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Link URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="link_url"
                                                placeholder="Link 5 URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_13" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <!-- <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Virtual Art Gallery Slider 1</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="bg_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label1" placeholder="Button 1 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 1 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url1" placeholder="Button 1 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading1" placeholder="Heading 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="img2" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="bg_img2" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label2" placeholder="Button 2 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 2 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url2" placeholder="Button 2 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading2" placeholder="Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="img3" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="bg_img3" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 3 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label3" placeholder="Button 3 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 3 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url3" placeholder="Button 3 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading3" placeholder="Heading 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="img4" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="bg_img4" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 4 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_label4" placeholder="Button 4 Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button 4 URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_white_bg_url4" placeholder="Button 4 URL">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading4" placeholder="Heading 4">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text4" placeholder="Text 4">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_13" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form> -->

                            <!-- <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Banner</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_3" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form> -->

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Box</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_4" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_5" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_6" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_7" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_8" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_9" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_10" class="btn btn-primary">Submit <i
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
                                                Recommended Image Resolution : 656 x 586
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

                                    <input type="hidden" class="form-control" name="section" value="11">
                                    <input type="hidden" class="form-control" name="page" value="Home Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_hp_11" class="btn btn-primary">Submit <i
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