<?php $pages = array("1" => 12, "2" => 25, "3" => 22, "4" => 22, "5" => 25, "6" => 9, "7" => 55, "8" => 18, "9" => 16, "10" => 16, "11" => 24, "12" => 24, "13" => 17, "14" => 16, "15" => 25, "16" => 55, "17" => 55, "18" => 22, "19" => 18, "20" => 55, "21" => 18, "22" => 18, "23" => 24, "24" => 16, "25" => 12,); ?>
<style>
    .ck-editor__editable {
        min-height: 200px;
    }
</style>
<!-- Page content -->
<div class="page-content">
    <?php require_once(__DIR__ . "/left_nav.php"); ?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><span class="font-weight-semibold">Add Mat</span></h4>
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Type:</label>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="top" name="mat_type">Top Mat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="middle" name="mat_type">Middle Mat
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="bottom" name="mat_type">Bottom Mat
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Color Hex Code:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="color" placeholder="Color Hex Code" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Color Name:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="cname" placeholder="Color Name" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_add_mat_color" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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