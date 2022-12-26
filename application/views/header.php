<!DOCTYPE html>
<html lang="en">

<head>
    <title>Saya Framers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <?php if (($this->router->class == "home" || $this->router->class == "Home") && ($this->router->method == "about" || $this->router->method == "aboutus")) { ?>
    <link rel="stylesheet" href="<?= base_url('assets/about/css/main.css'); ?>">
    <?php } ?>

    <link rel="stylesheet" href="<?= base_url('assets/css/blog-slider.css'); ?>">

    <?php if ($this->router->class == "home" && ($this->router->method == "index" || $this->router->method == "products" || $this->router->method == "virtual_art_gallery")) { ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/brands_slider.css'); ?>">
    <?php } ?>

    <link rel="stylesheet" href="<?= base_url('assets/css/listing_left_nav.css'); ?>">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script src="https://kit.fontawesome.com/39ce2438ce.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- Products LINKS -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="<?= base_url('assets/products/css/bootstrap.min.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/font-awesome.min.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/elegant-icons.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/magnific-popup.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/nice-select.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/owl.carousel.min.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/slicknav.min.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= base_url('assets/products/css/style.css'); ?>" type="text/css" />


    <style>
    @media screen and (max-width: 450px) and (min-width: 300px) {
        .responsive_submenu {
            width: auto !important;
            overflow: scroll;
        }
    }
    </style>

</head>

<body onload="onLoadBody()" onresize="onLoadBody()">
    <?php require_once(__DIR__ . "/top_nav.php"); ?>
    <div id="blurBody">