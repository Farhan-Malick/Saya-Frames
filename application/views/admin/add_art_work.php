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
                    <h4><span class="font-weight-semibold">Add Art Work</span></h4>
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
                                        <label class="col-lg-3 col-form-label">Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="heading" placeholder="Heading"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Description:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="description"
                                                placeholder="Description" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Artist:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="artistId" required>
                                                <option value='0'>Select Artist</option>
                                                <?php foreach ($artists as $value) {  ?>
                                                <option value="<?php echo $value->artistId ?>">
                                                    <?php echo $value->fname ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="category" required>
                                                <option value='0'>Select Category</option>
                                                <option value='Music'>Music</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="image"
                                                data-fouc>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_add_artwork" class="btn btn-primary">Submit
                                        <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basi
c legend -->

                </div>
            </div>
            <!-- /fieldset legend -->
        </div>
        <!-- /content area -->