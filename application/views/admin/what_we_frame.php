<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold">What We Frame</span> - What We Frame Main Page</h4>
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
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_1" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Section
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_2" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 3
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
										
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_3" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 4
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
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
                                        <label class="col-lg-3 col-form-label">Small Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="small_text"
                                                placeholder="Small Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_4" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 5
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_5" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 6
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_6" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 7
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_7" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 8</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_8" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 9
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_9" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 10
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="10">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_10" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 11
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="11">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_11" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 12</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="12">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_12" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 13
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="13">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_13" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 14
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img2" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img3" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="14">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_14" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section Box 15
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
												<p class="form-text text-muted">
                                                Recommended Image Resolution : 480 x 720
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
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="15">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_15" class="btn btn-primary">Submit <i
                                            class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 16</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
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
                                        <label class="col-lg-3 col-form-label">Icon 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon1"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 1 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon1_label"
                                                placeholder="Icon 1 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon2"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 2 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon2_label"
                                                placeholder="Icon 2 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon3"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 3 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon3_label"
                                                placeholder="Icon 3 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon4"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 4 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon4_label"
                                                placeholder="Icon 4 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 5:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon5"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 5 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon5_label"
                                                placeholder="Icon 5 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 6:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon6"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 6 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon6_label"
                                                placeholder="Icon 6 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 7:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon7"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 7 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon7_label"
                                                placeholder="Icon 7 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 8:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon8"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 8 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon8_label"
                                                placeholder="Icon 8 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 9:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon9"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 9 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon9_label"
                                                placeholder="Icon 9 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 10:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon10"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 10 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon10_label"
                                                placeholder="Icon 10 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 12:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon12"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 12 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon12_label"
                                                placeholder="Icon 12 Label">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 13:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon13"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 13 Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="icon13_label"
                                                placeholder="Icon 13 Label">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="17">
                                    <input type="hidden" class="form-control" name="page"
                                        value="What We Frame - What We Frame Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_wwf_16" class="btn btn-primary">Submit <i
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
