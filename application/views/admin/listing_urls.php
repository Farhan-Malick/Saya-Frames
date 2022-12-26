<?php $pages = array("1" => 12, "2" => 25, "3" => 22, "4" => 22, "5" => 25, "6" => 9, "7" => 55, "8" => 18, "9" => 16, "10" => 16, "11" => 24, "12" => 24, "13" => 17, "14" => 16, "15" => 25, "16" => 55, "17" => 55, "18" => 22, "19" => 18, "20" => 55, "21" => 18, "22" => 18, "23" => 24, "24" => 16, "25" => 12,); ?>
<style>
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>
                                            URLs
                                        </td>
										<td>
                                            Product Name
                                        </td>
                                        <td>
                                            Page
                                        </td>
                                        <td>
                                            Section
                                        </td>
                                        <td>
                                            Action
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($listing_urls)) {
                                        $i = 1;
										foreach ($listing_urls as $listing_url) { ?>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="myInput_<?= $i ?>" value="<?= base_url('home/detail/'.$listing_url->id) ?>">
                                                </td>
												<td>
                                                    <?= $listing_url->product_name ?>
                                                </td>
                                                <td>
                                                    <?= $listing_url->page_name ?>
                                                </td>
                                                <td>
                                                    <?= ($listing_url->section_id == '0' ? '-' : $listing_url->section_id) ?>
                                                </td>
                                                <td>
                                                    <button data-toggle="tooltip" title="Copy to clipboard" onclick="myFunction('<?= $i ?>')" class="btn btn-default">
                                                        Copy text
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php $i++;
                                        } ?>
                                    <?php } ?>
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
            function myFunction(counter) {
                var copyText = document.getElementById("myInput_" + counter);
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                document.execCommand("copy");

                var tooltip = document.getElementById("myTooltip");
                tooltip.innerHTML = "Copied: " + copyText.value;
            }

            function outFunc(counter) {
                var tooltip = document.getElementById("myTooltip_" + counter);
                tooltip.innerHTML = "Copy to clipboard";
            }
        </script>
