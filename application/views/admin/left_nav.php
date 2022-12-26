<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">Admin</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-exit3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Pages</div> <i class="icon-menu"
                        title="Forms"></i>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/home_page') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Main Home Page</span></a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/listing_urls') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Show Listing URLs</span></a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/shipping_details') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Shipping Details</span></a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/edit_pages') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Edit Pages & Sub Pages</span></a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/add_mat_colors') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Add Mat Colors</span></a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('admin/add_wall_colors') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Add Wall Colors</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/orders') ?>" class="nav-link"><i class="icon-pencil3"></i>
                        <span>Orders</span></a>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Add Products</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/add_product') ?>" class="nav-link"><span>Add
                                    Product Page</span></a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/all_products') ?>" class="nav-link"><span>Show
                                    All Products</span></a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Products</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/main_products_page') ?>" class="nav-link">Main
                                'Products' Page</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/product_exclusive') ?>"
                                class="nav-link">Exclusive</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/product_painting') ?>"
                                class="nav-link">Paintings</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/product_wooden_art') ?>"
                                class="nav-link">Wooden Artwork</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/product_prints') ?>"
                                class="nav-link">Prints</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/gallery_wall_design') ?>"
                                class="nav-link">Gallery Wall Design</a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Services</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/services') ?>" class="nav-link">Main
                                'Services' Page</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/custom_framming') ?>" class="nav-link">Custom
                                Framing Services</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/corporate_services') ?>"
                                class="nav-link">Corporate Services</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/printing') ?>" class="nav-link">Printing</a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('admin/screen_printing') ?>" class="nav-link">Screen
                                Printing</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/laser_cutting') ?>" class="nav-link">Laser
                                Cutting and Engraving</a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>What We Frame</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/what_we_frame') ?>" class="nav-link">Main
                                'What We Frame' Page</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/printing_and_canvas') ?>"
                                class="nav-link">Painting & Canvas</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/prints_and_posters') ?>"
                                class="nav-link">Prints & Posters</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/education_and_professional') ?>"
                                class="nav-link">Educational & Professional</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/souvenirs') ?>" class="nav-link">Souvenirs</a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('admin/mirrors_and_more') ?>"
                                class="nav-link">Mirrors & More</a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Framing Supplies</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/framming_supplies') ?>" class="nav-link">Main
                                'Framing Supplies' Page</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/moulding') ?>" class="nav-link">Moulding</a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('admin/mat_board') ?>" class="nav-link">Mat Board</a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('admin/glazing') ?>" class="nav-link">Glazing</a>
                        </li>
                        <li class="nav-item"><a href="<?= base_url('admin/loose_material') ?>" class="nav-link">Loose
                                Material</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/other_supplies') ?>" class="nav-link">Other
                                Supplies</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Virtual Art Gallery</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="<?= base_url('admin/add_artist') ?>" class="nav-link">Add
                                Artist</a></li>
                        <li class="nav-item"><a href="<?= base_url('admin/add_art_work') ?>" class="nav-link">Add Art
                                work</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->