<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold">Services</span> - Main Page</h4>
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
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1045 x 400
                                            </p>
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
                                    <input type="hidden" class="form-control" name="section" value="1">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_1" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <!-- <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Section</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon1" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title1" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon2" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title2" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon3" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title3" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon4" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title4" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon5" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title5" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon6" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title6" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Icon:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="icon7" data-fouc>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="title7" placeholder="Title">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_2" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form> -->
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 450
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="3">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_3" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 500
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="4">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_4" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Banner</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 500
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Sub Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="5">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_5" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Section</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Image 1:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="img1" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 200 x 120
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Main Heading 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading1" placeholder="Main Heading 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
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
											<input type="file" class="form-input-styled" accept="image/*" name="img2" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 200 x 120
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Main Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading2" placeholder="Main Heading 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
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
											<input type="file" class="form-input-styled" accept="image/*" name="img3" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 200 x 120
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading3" placeholder="Main Heading 3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
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
                                    <input type="hidden" class="form-control" name="section" value="6">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_6" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Section</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 380 x 200
                                            </p>
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
                                    <input type="hidden" class="form-control" name="section" value="7">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_7" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Third Section</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 380 x 200
                                            </p>
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
                                    <input type="hidden" class="form-control" name="section" value="8">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_8" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post"enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Fourth Section</legend>
                                    <div class="form-group row">
										<label class="col-lg-3 col-form-label">Background Image:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" accept="image/*" name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 380 x 200
                                            </p>
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
                                    <input type="hidden" class="form-control" name="section" value="9">
                                    <input type="hidden" class="form-control" name="page" value="Services - Main Page">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_smp_9" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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