<?php
if ($this->router->method == 'custom_framming') {
    $page_title = 'Services - Custom Framing';
    $submit_btn_label = 'submit_btn_cf';
} else if ($this->router->method == 'education_and_professional') {
    $page_title = 'What We Frame - Educational And Professional';
    $submit_btn_label = 'submit_btn_e&p';
} else if ($this->router->method == 'souvenirs') {
    $page_title = 'What We Frame - Souvenirs';
    $submit_btn_label = 'submit_btn_sov';
} else if ($this->router->method == 'moulding') {
    $page_title = 'Framming Supplies - Moulding';
    $submit_btn_label = 'submit_btn_mou';
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Small Section Below
                                        Navbar</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Normal Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="normal_text"
                                                placeholder="Normal Text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (Blue Background) Label:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_blue_bg_label"
                                                placeholder="Button (Blue Background) Label">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Button (Blue Background) URL:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="btn_blue_bg_url"
                                                placeholder="Button (Blue Background) URL">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="56">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_56"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">First Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Main Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="main_heading"
                                                placeholder="Main Heading">
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
                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Second Banner
                                    </legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <input type="hidden" class="form-control" name="section" value="2">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_2"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 1</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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






                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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



                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 4</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="16">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_16"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 5</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 4</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
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


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 6</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
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
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="23">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_23"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1 Mobile:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="24">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_24"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img1" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="25">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_25"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 7</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="26">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_26"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="27">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_27"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
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
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="28">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_28"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="29">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_29"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="30">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_30"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="31">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_31"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 4</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="32">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_32"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 9</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="33">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_33"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="34">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_34"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="35">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_35"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 10</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="36">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_36"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="37">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_37"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 11</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="38">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_38"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="39">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_39"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="40">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_40"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="41">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_41"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 12</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="42">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_42"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="43">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_43"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="44">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_44"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 3</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="45">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_45"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 13</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="46">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_46"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="47">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_47"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
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
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution :
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="48">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_48"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Section 14</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading"
                                                placeholder="Section Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_text"
                                                placeholder="Section Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="49">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_49"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1388 x 1000
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text" placeholder="Text">
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="50">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_50"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Banner 3</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 550
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Icon 1:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_1"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 1:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text1" placeholder="Text 1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 2:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_2"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text2" placeholder="Text 2">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 3:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_3"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 3:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text3" placeholder="Text 3">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 4:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_4"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 4:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text4" placeholder="Text 4">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 5:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_5"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 5:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text5" placeholder="Text 5">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 6:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_6"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 6:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text6" placeholder="Text 6">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 7:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_7"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 7:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text7" placeholder="Text 7">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 8:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_8"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 8:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text8" placeholder="Text 8">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 9:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_9"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 9:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text9" placeholder="Text 9">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 10:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_10"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 10:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text10" placeholder="Text 10">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 11:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_11"
                                                data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 11:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text11" placeholder="Text 11">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon 12:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon_12"
                                                data-fouc>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Text 12:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="text12" placeholder="Text 12">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Section Heading 2:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="section_heading_2"
                                                placeholder="Section Heading 2">
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
                                    <input type="hidden" class="form-control" name="section" value="51">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_51"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">

                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Banner 4</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1358 x 610
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Left Side Text:</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="left_side_text"
                                                placeholder="Left Side Text" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="section" value="52">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_52"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 1</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 670 x 690
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Icon:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 115 x 115
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="53">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_53"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>


                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Box 2</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 670 x 690
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Icon:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="icon"
                                                data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 115 x 115
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="54">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_54"
                                        class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Banner 5</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*"
                                                name="background_img" data-fouc>
                                            <p class="form-text text-muted">
                                                Recommended Image Resolution : 1420 x 750
                                            </p>
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
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading"
                                                placeholder="Heading">
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
                                    <input type="hidden" class="form-control" name="section" value="55">
                                    <input type="hidden" class="form-control" name="page" value="<?= $page_title ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="<?= $submit_btn_label ?>_55"
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

