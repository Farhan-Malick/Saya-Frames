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
                    <h4><span class="font-weight-semibold">Add Product</span></h4>
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
                                            <select class="form-control" name="page_id" onchange="loadPageSections(this);loadFilters(this)" required>
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
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Frame Type:</label>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="inner" name="frame_type">Inner Frame
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="middle" name="frame_type">Middle Frame
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" value="outer" name="frame_type">Outer Frame
                                                </label>
                                            </div>
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
                                            <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Price:</label>
                                        <div class="col-lg-9">
                                            <input type="number" class="form-control" name="price" placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Discount:</label>
                                        <div class="col-lg-9">
                                            <input type="number" class="form-control" name="discount" placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Description:</label>
                                        <div class="col-lg-9">
                                            <textarea id="editor1" placeholder="Description" cols="30" rows="10"></textarea>
                                            <input type="hidden" name="description" id="description">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Features:</label>
                                        <div class="col-lg-9">
                                            <textarea id="editor2" placeholder="Features" cols="30" rows="10"></textarea>
                                            <input type="hidden" name="features" id="features">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Colors:</label>
                                        <div class="col-lg-9">
                                            <textarea name="colors" id="colors" placeholder="Colors(comma seperated)" cols="30" rows="7" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Filter Options</label>
                                        <div class="col-lg-9">
                                            <select class="form-control multiselect multiselect-method-rebuild" multiple="multiple" name="filter_options[]" id="filter_options" data-fouc></select>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_add_product" onclick="getEditorsValue()" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                            <form action="<?= base_url() ?>save_in_db.php" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend class="font-weight-semibold text-uppercase font-size-sm">Add Filters</legend>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Filter Page:</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="filter_page">
                                                <option value='3'>Painting</option>
                                                <option value='5'>Prints</option>
                                                <option value='Material'>Material</option>
                                                <option value="4">Wooden Artwork</option>
                                                <option value='2'>Exclusives</option>
                                                <option value='16'>Educational & Professional</option>
                                                <option value='Frame Styles'>Frame Styles</option>
                                                <option value='20'>Moulding</option>
                                                <option value='21'>Matboards</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Filter Heading:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="filter_heading" placeholder="Filter Heading">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Filter Option:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="filter_option" placeholder="Filter Option">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="submit_btn_add_filter" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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
            var myEditor1, myEditor2;

            function getEditorsValue() {
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

            function loadFilters(sel) {
				console.log("done");
                page_id = sel.value;
                var request = $.ajax({
                    url: "<?= base_url() ?>Admin/loadFilters",
                    type: "POST",
                    data: {
                        page_id: page_id
                    },
                    dataType: "text"
                });
                request.done(function(msg) {
					console.log({msg});
                    if (msg != "error") {
                        $('#filter_options').html(msg);
                        $('.multiselect-method-rebuild').multiselect();
                        $('.multiselect-method-rebuild').multiselect('rebuild');
                    }
                });
            }
        </script>
