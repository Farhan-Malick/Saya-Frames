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
                    <h4><span class="font-weight-semibold">Update Product</span></h4>
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
                                                <option value='0' >Select Page</option>
                                                <option value='25'<?= ($product_details['page_id'] == 25 ? 'selected' : '') ?>>Home Page</option>
                                                <option value='1' <?= ($product_details['page_id'] == 1 ? 'selected' : '') ?>>Products - Main Page</option>
                                                <option value='2' <?= ($product_details['page_id'] == 2 ? 'selected' : '') ?>>Products - Exclusive</option>
                                                <option value='3' <?= ($product_details['page_id'] == 3 ? 'selected' : '') ?>>Products - Painting</option>
                                                <option value="4" <?= ($product_details['page_id'] == 4 ? 'selected' : '') ?>>Products - Wooden Artwork</option>
                                                <option value='5' <?= ($product_details['page_id'] == 5 ? 'selected' : '') ?>>Products - Prints</option>
                                                <option value='6' <?= ($product_details['page_id'] == 6 ? 'selected' : '') ?>>Services - Main Page</option>
                                                <option value='7' <?= ($product_details['page_id'] == 7 ? 'selected' : '') ?>>Services - Custom Framing Services</option>
                                                <option value='8' <?= ($product_details['page_id'] == 8 ? 'selected' : '') ?>>Services - Corporate Services</option>
                                                <option value='9' <?= ($product_details['page_id'] == 9 ? 'selected' : '') ?>>Services - Gallery Wall Design</option>
                                                <option value='10' <?= ($product_details['page_id'] == 10 ? 'selected' : '') ?>>Services - Printing</option>
                                                <option value='11' <?= ($product_details['page_id'] == 11 ? 'selected' : '') ?>>Services - Screen Printing</option>
                                                <option value='12' <?= ($product_details['page_id'] == 12 ? 'selected' : '') ?>>Services - Laser Cutting and Engraving</option>
                                                <option value='13' <?= ($product_details['page_id'] == 13 ? 'selected' : '') ?>>What we frame - Main Page</option>
                                                <option value='14' <?= ($product_details['page_id'] == 14 ? 'selected' : '') ?>>What we frame - Painting & Canvas</option>
                                                <option value='15' <?= ($product_details['page_id'] == 15 ? 'selected' : '') ?>>What we frame - Prints & Posters</option>
                                                <option value='16' <?= ($product_details['page_id'] == 16 ? 'selected' : '') ?>>What we frame - Educational & Professional</option>
                                                <option value='17' <?= ($product_details['page_id'] == 17 ? 'selected' : '') ?>>What we frame - Souvenirs</option>
                                                <option value='18' <?= ($product_details['page_id'] == 18 ? 'selected' : '') ?>>What we frame - Mirrors & More</option>
                                                <option value='19' <?= ($product_details['page_id'] == 19 ? 'selected' : '') ?>>Framing Supplies - Main Page</option>
                                                <option value='20' <?= ($product_details['page_id'] == 20 ? 'selected' : '') ?>>Framing Supplies - Moulding</option>
                                                <option value='21' <?= ($product_details['page_id'] == 21 ? 'selected' : '') ?>>Framing Supplies - Mat Board</option>
                                                <option value='22' <?= ($product_details['page_id'] == 22 ? 'selected' : '') ?>>Framing Supplies - Glazing</option>
                                                <option value='23' <?= ($product_details['page_id'] == 23 ? 'selected' : '') ?>>Framing Supplies - Loose Material</option>
                                                <option value='24' <?= ($product_details['page_id'] == 24 ? 'selected' : '') ?>>Framing Supplies - Other Supplies</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Select Page Section:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="section_id" id="page_sections" required>
                                                <option value='0'>Select Page Section</option>
                                                <?php for($i = 1; $i<=$pages[$product_details['page_id']]; $i++){ ?>
                                                    <option value='<?= $i ?>' <?= ($product_details['section_id'] == $i ? 'selected' : '') ?>><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Product Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="product_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Background Image:</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-input-styled" accept="image/*" name="bg_img" data-fouc>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Product Name:</label>
                                        <div class="col-lg-9">
                                            <input type="text" value="<?= $product_details['product_name'] ?>" class="form-control" name="product_name" placeholder="Product Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Price:</label>
                                        <div class="col-lg-9">
                                            <input type="number" value="<?= $product_details['price'] ?>" class="form-control" name="price" placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Discount:</label>
                                        <div class="col-lg-9">
                                            <input type="number" value="<?= $product_details['discount'] ?>" class="form-control" name="discount" placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Description:</label>
                                        <div class="col-lg-9">
                                            <textarea id="editor1" placeholder="Description" cols="30" rows="10" ><?= $product_details['description'] ?></textarea>
                                            <input type="hidden" name="description" id="description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features:</label>
                                        <div class="col-lg-9">
                                            <textarea id="editor2" placeholder="Features" cols="30" rows="10"><?= $product_details['features'] ?></textarea>
                                            <input type="hidden" name="features" id="features">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Colors:</label>
                                        <div class="col-lg-9">
                                            <textarea name="colors" id="colors" placeholder="Colors(comma seperated)" cols="30" rows="7" class="form-control"><?= $product_details['colors'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Filter Options</label>
                                        <div class="col-lg-9">
                                            <select class="form-control multiselect multiselect-method-rebuild" multiple="multiple" name="filter_options[]" id="filter_options" data-fouc>
                                                <option value='0' >Select Page</option>
                                                <?php
                                                if(count($filters) > 0){
                                                    foreach($filters as $filter_options){
                                                        foreach($filter_options as $filter_option){
                                                            $ex = explode(',', $product_details['filter_options']);
                                                            ?>
                                                            <option value="<?= $filter_option ?>" <?= (in_array($filter_option, $ex)) ? 'selected' : '' ?> ><?= $filter_option ?></option>
                                                            <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $product_details['id'] ?>">
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_udpate_product" onclick="getEditorsValue()" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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
        <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
        <script>
            var myEditor1,myEditor2;
            function getEditorsValue(){
                $('#description').val(myEditor1.getData())
                $('#features').val(myEditor2.getData())
            }
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .then(editor1 => {
                    console.log('Editor was initialized', editor1);
                    myEditor1 = editor1;
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#editor2'))
                .then(editor2 => {
                    console.log('Editor was initialized', editor2);
                    myEditor2 = editor2;
                })
                .catch(error => {
                    console.error(error);
                });

            function loadPageSections(sel) {
                let pages = '<?= json_encode($pages) ?>';
                pages = JSON.parse(pages);
                let section = pages[sel.value];
                console.log(section);
                let str = "<option value='0'>Select Page Section</option>";
                for (let i = 1; i <= section; i++) {
                    str += "<option value='" + i + "'>" + i + "</option>";
                }
                $('#page_sections').html(str);
            }
            //loadFilters();
            function loadFilters() {
                var page_id = $('#page_id').val();
                var request = $.ajax({
                    url: "<?= base_url() ?>Admin/loadFilters",
                    type: "POST",
                    data: {
                        page_id: page_id
                    },
                    dataType: "text"
                });
                request.done(function(msg) {
                    if (msg != "error") {
                        $('#filter_options').html(msg);
                        $('.multiselect-method-rebuild').multiselect();
                        $('.multiselect-method-rebuild').multiselect('rebuild');
                    }
                });
            }
        </script>