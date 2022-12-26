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
                    <h4><span class="font-weight-semibold">Add Shipping Details</span></h4>
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
                                        <label class="col-lg-3 col-form-label">Select Courier Service:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="courier" required>
                                                <option value='0'>Select Courier</option>
                                                <option value='1'>TCS</option>
                                                <option value='2'>Leopards Courier</option>
                                                <option value='3'>DHL</option>
                                                <option value='4'>SpeedeX</option>
                                                <option value='5'>Pakistan Post</option>
                                                <option value='6'>FedEx Express</option>
                                                <option value='7'>M&P</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Weight:</label>
                                        <div class="col-lg-9">
                                            <input type="number" step="0.1" class="form-control" name="weight" placeholder="Weight" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Charges:</label>
                                        <div class="col-lg-9">
                                            <input type="number" step="0.1" class="form-control" name="charges" placeholder="Charges" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_add_courier" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basic legend -->

                    <!-- Basic legend -->
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Weight</td>
                                        <td>Charges</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php //if (count($shipping_details) > 0) { ?>
                                        <?php //foreach ($shipping_details as $detail) { ?>
                                            <tr>
                                                <td><?= $detail->id ?>YES</td>
                                                <td><?= $detail->name ?>YES</td>
                                                <td><?= $detail->weight ?>YES</td>
                                                <td><?= $detail->charges ?>YES</td>
                                                <td>
                                                    <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_horizontal">
                                                        Edit
                                                    </button>
                                                    <div id="modal_form_horizontal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Courier Service Details</h5>
                                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                                </div>

                                                                <form action="<?= base_url() ?>save_in_db.php" method="post"" class="form-horizontal">
                                                                    <div class="modal-body">
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Select Courier Service:</label>
                                                                            <div class="col-lg-9">
                                                                                <select class="form-control" name="courier" required>
                                                                                    <option value='0'>Select Courier</option>
                                                                                    <option value='1'>TCS</option>
                                                                                    <option value='2'>Leopards Courier</option>
                                                                                    <option value='3'>DHL</option>
                                                                                    <option value='4'>SpeedeX</option>
                                                                                    <option value='5'>Pakistan Post</option>
                                                                                    <option value='6'>FedEx Express</option>
                                                                                    <option value='7'>M&P</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Weight:</label>
                                                                            <div class="col-lg-9">
                                                                                <input type="number" step="0.1" class="form-control" name="weight" placeholder="Weight" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Charges:</label>
                                                                            <div class="col-lg-9">
                                                                                <input type="number" step="0.1" class="form-control" name="charges" placeholder="Charges" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                                        <button type="submit" name="submit_btn_add_courier" class="btn bg-primary">Submit form</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php //} ?>
                                    <?php //} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /basic legend -->

                </div>
            </div>
            <!-- /fieldset legend -->
        </div>
        <!-- /content area -->

        <script>

        </script>