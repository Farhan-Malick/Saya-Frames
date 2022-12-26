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
                    <h4><span class="font-weight-semibold">Edit Pages</span></h4>
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
                                        <label class="col-lg-3 col-form-label">Select Page:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="page_id" id="page_id" onchange="loadPageSections(this)" required>
                                                <option value='0'>Select Page</option>
                                                <option value='25'>Home Page</option>
                                                <option value='1'>Products - Main Page</option>
                                                <option value='2'>Products - Exclusive</option>
                                                <option value='3'>Products - Painting</option>
                                                <option value="4">Products - Wooden Artwork</option>
                                                <option value='5'>Products - Prints</option>
                                                <option value='6'>Services - Main Page</option>
                                                <option value='7'>Services - Custom Framing Services</option>
                                                <option value='8'>Services - Corporate Services</option>
                                                <option value='9'>Services - Gallery Wall Design</option>
                                                <option value='10'>Services - Printing</option>
                                                <option value='11'>Services - Screen Printing</option>
                                                <option value='12'>Services - Laser Cutting and Engraving</option>
                                                <option value='13'>What we frame - Main Page</option>
                                                <option value='14'>What we frame - Painting & Canvas</option>
                                                <option value='15'>What we frame - Prints & Posters</option>
                                                <option value='16'>What we frame - Educational & Professional</option>
                                                <option value='17'>What we frame - Souvenirs</option>
                                                <option value='18'>What we frame - Mirrors & More</option>
                                                <option value='19'>Framing Supplies - Main Page</option>
                                                <option value='20'>Framing Supplies - Moulding</option>
                                                <option value='21'>Framing Supplies - Mat Board</option>
                                                <option value='22'>Framing Supplies - Glazing</option>
                                                <option value='23'>Framing Supplies - Loose Material</option>
                                                <option value='24'>Framing Supplies - Other Supplies</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Select Page Section:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="section_id" id="page_sections" required>
                                                <option value='0'>Select Page Section</option>

                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="button" name="submit_btn_add_product" onclick="loadPageData()" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data" id="edit_page_form" style="display: none;">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Edit Page Data</legend>
                                    <div id="page_data">

                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="button" onclick="deletePageData()" class="btn btn-danger">Delete <i class="icon-cross ml-2"></i></button>
                                    <button type="submit" name="submit_btn_edit_page_data" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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
        <script>
            function loadPageSections(sel) {
                let pages = '<?= json_encode($pages) ?>';
                pages = JSON.parse(pages);
                let section = pages[sel.value];
                console.log(section);
                console.log(pages[sel.value]);
                let str = "<option value='0'>Select Page Section</option>";
                for (let i = 1; i <= section; i++) {
                    if( ((sel.value == 4 || sel.value == 18 || sel.value == 6) && i==2) || ((sel.value == 8 || sel.value == 19 || sel.value == 21 || sel.value == 22) && i==8) || ((sel.value == 13) && i==16) ){
                        
                    }else{
                        str += "<option value='" + i + "'>" + i + "</option>";
                    }
                }
                $('#page_sections').html(str);
            }

            function loadPageData() {
                var page_id = $('#page_id').val();
                var section_id = $('#page_sections').val();
                $.ajax({
                    method: "POST",
                    url: '<?= base_url('admin/loadPageData') ?>',
                    data: {
                        "page_id": page_id,
                        "section_id": section_id
                    },
                    success: (response) => {
                        $('#edit_page_form').show();
                        $('#page_data').html(response);
                    }
                });
            }

            function deletePageData() {
                var page_id = $('#page_id').val();
                var section_id = $('#page_sections').val();
                $.ajax({
                    method: "POST",
                    url: '<?= base_url('admin/deletePageData') ?>',
                    data: {
                        "page_id": page_id,
                        "section_id": section_id
                    },
                    success: (response) => {
                        location.reload();
                    }
                });
            }
        </script>