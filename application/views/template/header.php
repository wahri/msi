<!DOCTYPE HTML>
<html>

<head>
    <title>Mahkota Sukses Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/icomoon.css">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">

    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

</head>

<body>

    <div class="colorlib-loader"></div>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 col-md-9">
                            <div id="colorlib-logo">
                                <a href="index.html">
                                    <img src="<?= base_url('assets/images/logo1.png') ?>" alt="msi" height="60px">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-3">
                            <form action="#" class="search-wrap">
                                <div class="form-group">
                                    <input type="search" class="form-control search" placeholder="Search">
                                    <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-left menu-1">
                            <ul>
                                <li class="<?= ($nav == 'home') ? 'active' : '' ?>"><a href="<?= base_url('home') ?>">Home</a></li>
                                <li class="<?= ($nav == 'store') ? 'active' : '' ?>"><a href="<?= base_url('home/store') ?>">MSI Store</a></li>
                                <!-- <li class="has-dropdown">
                                    <a href="men.html">Men</a>
                                    <ul class="dropdown">
                                        <li><a href="product-detail.html">Product Detail</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="order-complete.html">Order Complete</a></li>
                                        <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li> -->
                                <li><a class="<?= ($nav == 'about') ? 'active' : '' ?>" href="<?= base_url('home/about') ?>">About</a></li>
                                <li><a class="<?= ($nav == 'contact') ? 'active' : '' ?>" href="<?= base_url('home/contact') ?>">Contact</a></li>
                                <!-- <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <?php
                                    $slider = $this->db->get('slider')->result_array();
                                    foreach ($slider as $s) :
                                    ?>
                                        <div class="item">
                                            <div class="col">
                                                <h3><a href="<?= $s['link'] ?>"><?= $s['header1'] ?> <?= $s['header2'] ?></a></h3>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>