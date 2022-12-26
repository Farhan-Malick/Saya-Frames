<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if(!isset($studio)){ ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php } ?>
    <title>SAYA ART & CUSTOM FRAMING</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="<?= base_url('assets/admin/global_assets/css/icons/icomoon/styles.css'); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?= base_url('assets/admin/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/assets/css/bootstrap_limitless.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?= base_url('assets/admin/assets/css/layout.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/assets/css/components.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/admin/assets/css/colors.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?= base_url('assets/admin/global_assets/js/main/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/main/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/loaders/blockui.min.js'); ?>"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/forms/selects/select2.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/forms/styling/uniform.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/demo_pages/form_inputs.js') ?>"></script>

    <script src="<?= base_url('assets/admin/assets/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/demo_pages/form_layouts.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js'); ?>">
    </script>
    <script src="<?= base_url('assets/admin/global_assets/js/demo_pages/form_multiselect.js'); ?>"></script>
    <!-- /theme JS files -->

    <?php if ($this->router->class == "home" && ($this->router->method == "studio" || $this->router->method == "studio_v1")) { ?>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/uploaders/dropzone.min.js'); ?>"></script>
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link rel="stylesheet" href="<?= base_url('assets/css/brands_slider.css'); ?>"> -->

    <script src="<?= base_url('assets/admin/global_assets/js/plugins/ui/fab.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/ui/sticky.min.js'); ?>"></script>

    <script src="<?= base_url('assets/admin/global_assets/js/plugins/forms/styling/switch.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/demo_pages/form_checkboxes_radios.js'); ?>"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js'); ?>">
    </script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/extensions/jquery_ui/touch.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/sliders/slider_pips.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/plugins/forms/styling/switchery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/global_assets/js/demo_pages/jqueryui_sliders.js'); ?>"></script>
    <?php } ?>

</head>

<body>