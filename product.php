<?php
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Venedor - Responsive eCommerce Template</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300'
          rel='stylesheet' id="googlefont">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/colpick.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon and Apple Icons -->
    <link rel="icon" type="image/png" href="images/icons/icon.html">
    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.html">

    <!--- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>

    <!--- Modernizr -->
    <script src="js/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style id="custom-style">

    </style>
</head>
<body>

<div id="option-panel">
    <div id="option-panel-wrapper">
        <div id="option-panel-btn"></div><!-- End #option-panel-btn -->

        <div id="option-panel-container">
            <ul id="option-panel-tabs-container" class="clearfix">
                <li class="active"><a href="#panel-layout" data-toggle="tab" data-panel-title="Layout"></a></li>
                <li><a href="#panel-home" data-toggle="tab" data-panel-title="Background Settings"></a></li>
                <li><a href="#panel-color" data-toggle="tab" data-panel-title="Color Settings"></a></li>
                <li><a href="#panel-font" data-toggle="tab" data-panel-title="Font Settings"></a></li>
                <li><a id="option-close" href="#"></a></li>
            </ul>
            <div id="option-panel-title" class="clearfix">
                <span>Layout</span>
                <a href="#" id="option-panel-reset">Reset</a>
            </div>
            <div id="option-panel-content" class="tab-content">
                <div class="tab-pane fade in active" id="panel-layout">
                    <div id="panel-option-layout" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Layout</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#document-layout"
                                   data-parent="#panel-option-layout"></a>
                            </div><!-- End .accordion-header -->

                            <div id="document-layout" class="collapse in">
                                <div class="panel-body">
                                    <ul class="layout-style-list clearfix">
                                        <li data-layout="fullwidth"><img src="images/panel/fullwidth.png"
                                                                         alt="Fullwidth">
                                            <p>Fullwidth</p></li>
                                        <li data-layout="boxed"><img src="images/panel/boxed.png" alt="Boxed">
                                            <p>Boxed</p></li>
                                    </ul>
                                </div><!-- End .panel-body -->
                            </div><!-- #collapse -->
                        </div><!-- End .panel -->

                    </div><!-- .panel-group -->
                </div><!-- End .tab-pane -->
                <div class="tab-pane fade" id="panel-home">
                    <div id="panel-home-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Basic Color</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#body-background-color" data-parent="#panel-home-accordion"></a>
                            </div><!-- End .accordion-header -->

                            <div id="body-background-color" class="collapse in">
                                <div class="panel-body">
                                    <div id="panel-color-picker">

                                    </div><!-- End #panel-color-picker -->
                                </div><!-- End .panel-body -->
                            </div><!-- #collapse -->
                        </div><!-- End .panel -->

                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Patterns</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn" data-toggle="collapse" data-target="#body-background-pattern"
                                   data-parent="#panel-home-accordion"></a>
                            </div><!-- End .accordion-header -->

                            <div id="body-background-pattern" class="collapse">
                                <div class="panel-body">
                                    <ul class="clearfix pattern-box-list">
                                        <li><img data-src="images/patterns/pattern1.png"
                                                 src="images/patterns/pattern1.png" alt="pattern 1"></li>
                                        <li><img data-src="images/patterns/pattern2.png"
                                                 src="images/patterns/pattern2.png" alt="pattern 2"></li>
                                        <li><img data-src="images/patterns/pattern3.png"
                                                 src="images/patterns/pattern3.png" alt="pattern 3"></li>
                                        <li><img data-src="images/patterns/pattern4.png"
                                                 src="images/patterns/pattern4.png" alt="pattern 4"></li>
                                        <li><img data-src="images/patterns/pattern5.png"
                                                 src="images/patterns/pattern5.png" alt="pattern 5"></li>
                                        <li><img data-src="images/patterns/pattern6.png"
                                                 src="images/patterns/pattern6.png" alt="pattern 6"></li>
                                        <li><img data-src="images/patterns/pattern7.png"
                                                 src="images/patterns/pattern7.png" alt="pattern 7"></li>
                                        <li><img data-src="images/patterns/pattern8.png"
                                                 src="images/patterns/pattern8.png" alt="pattern 8"></li>
                                        <li><img data-src="images/patterns/pattern9.png"
                                                 src="images/patterns/pattern9.png" alt="pattern 9"></li>
                                        <li><img data-src="images/patterns/pattern10.png"
                                                 src="images/patterns/pattern10.png" alt="pattern 10"></li>
                                        <li><img data-src="images/patterns/pattern11.png"
                                                 src="images/patterns/pattern11.png" alt="pattern 11"></li>
                                        <li><img data-src="images/patterns/pattern12.png"
                                                 src="images/patterns/pattern12.png" alt="pattern 12"></li>
                                        <li><img data-src="images/patterns/pattern13.png"
                                                 src="images/patterns/pattern13.png" alt="pattern 13"></li>
                                        <li><img data-src="images/patterns/pattern14.png"
                                                 src="images/patterns/pattern14.png" alt="pattern 14"></li>
                                        <li><img data-src="images/patterns/pattern15.png"
                                                 src="images/patterns/pattern15.png" alt="pattern 15"></li>
                                        <li><img data-src="images/patterns/pattern16.png"
                                                 src="images/patterns/pattern16.png" alt="pattern 16"></li>
                                        <li><img data-src="images/patterns/pattern17.png"
                                                 src="images/patterns/pattern17.png" alt="pattern 17"></li>
                                        <li><img data-src="images/patterns/pattern18.png"
                                                 src="images/patterns/pattern18.png" alt="pattern 18"></li>
                                        <li><img data-src="images/patterns/pattern19.png"
                                                 src="images/patterns/pattern19.png" alt="pattern 19"></li>
                                        <li><img data-src="images/patterns/pattern20.png"
                                                 src="images/patterns/pattern20.png" alt="pattern 20"></li>
                                        <li><img data-src="images/patterns/pattern21.png"
                                                 src="images/patterns/pattern21.png" alt="pattern 21"></li>
                                        <li><img data-src="images/patterns/pattern22.png"
                                                 src="images/patterns/pattern22.png" alt="pattern 22"></li>
                                        <li><img data-src="images/patterns/pattern23.png"
                                                 src="images/patterns/pattern23.png" alt="pattern 23"></li>
                                        <li><img data-src="images/patterns/pattern24.png"
                                                 src="images/patterns/pattern24.png" alt="pattern 24"></li>
                                        <li><img data-src="images/patterns/pattern25.png"
                                                 src="images/patterns/pattern25.png" alt="pattern 25"></li>
                                        <li><img data-src="images/patterns/pattern26.png"
                                                 src="images/patterns/pattern26.png" alt="pattern 26"></li>
                                        <li><img data-src="images/patterns/pattern27.png"
                                                 src="images/patterns/pattern27.png" alt="pattern 27"></li>
                                        <li><img data-src="images/patterns/pattern28.png"
                                                 src="images/patterns/pattern28.png" alt="pattern 28"></li>
                                        <li><img data-src="images/patterns/pattern29.png"
                                                 src="images/patterns/pattern29.png" alt="pattern 29"></li>
                                        <li><img data-src="images/patterns/pattern30.png"
                                                 src="images/patterns/pattern30.png" alt="pattern 30"></li>

                                    </ul>
                                </div><!-- End .panel-body -->
                            </div><!-- #collapse -->
                        </div><!-- End .panel -->
                    </div><!-- .panel-group -->
                </div><!-- End .tab-pane -->

                <div class="tab-pane fade" id="panel-color">
                    <div id="panel-color-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Green Mode</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#color-mode"
                                   data-parent="#panel-color-accordion"></a>
                            </div><!-- End .accordion-header -->

                            <ul class="colorbox-list clearfix collapse in" id="color-mode">
                                <li>
                                    <div class="color-box first-color">
                                        <span></span>
                                    </div>
                                    <p>First Color</p>
                                </li>
                                <li>
                                    <div class="color-box second-color">
                                        <span></span>
                                    </div>
                                    <p>Second Color</p>
                                </li>
                                <li>
                                    <div class="color-box third-color">
                                        <span></span>
                                    </div>
                                    <p>Third Color</p>
                                </li>
                                <li>
                                    <div class="color-box fourth-color">
                                        <span></span>
                                    </div>
                                    <p>Fourth Color</p>
                                </li>
                            </ul>
                        </div><!-- .panel -->
                    </div><!-- #panel-color-accordion -->
                </div><!-- End .tab-pane -->
                <div class="tab-pane fade" id="panel-font">
                    <div id="panel-font-accordion" class="panel-group custom-accordion sm-accordion">
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>First Font</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#first-font-container" data-parent="#panel-font-accordion"></a>
                            </div><!-- End .accordion-header -->
                            <div class="collapse in" id="first-font-container">
                                <select class="form-control" name="first-font" id="first-font">
                                    <option value="Arial">Arial</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Ubuntu</option>
                                    <option value="Nunito">Nunito</option>
                                </select>
                            </div><!-- End #first-font-container -->
                        </div><!-- .panel -->

                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Second Font</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn" data-toggle="collapse" data-target="#second-font-container"
                                   data-parent="#panel-font-accordion"></a>
                            </div><!-- End .accordion-header -->
                            <div class="collapse" id="second-font-container">
                                <select class="form-control" name="second-font" id="second-font">
                                    <option value="Oswald">Oswald</option>
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select>
                            </div><!-- End #second-font-container -->
                        </div><!-- .panel -->

                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Third Font</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn" data-toggle="collapse" data-target="#third-font-container"
                                   data-parent="#panel-font-accordion"></a>
                            </div><!-- End .accordion-header -->
                            <div class="collapse" id="third-font-container">
                                <select class="form-control" name="third-font" id="third-font">
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select>
                            </div><!-- End #third-font-container -->
                        </div><!-- .panel -->
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Fourth Font</span></div><!-- End .accordion-title -->
                                <a class="accordion-btn" data-toggle="collapse" data-target="#fourth-font-container"
                                   data-parent="#panel-font-accordion"></a>
                            </div><!-- End .accordion-header -->
                            <div class="collapse" id="fourth-font-container">
                                <select class="form-control" name="fourth-font" id="fourth-font">
                                    <option value="Gudea">Gudea</option>
                                    <option value="Open Sans">Open Sans</option>
                                    <option value="PT Sans">PT Sans</option>
                                    <option value="Lato">Lato</option>
                                    <option value="Roboto">Roboto</option>
                                    <option value="Droid Sans">Droid Sans</option>
                                    <option value="Ubuntu">Ubuntu</option>
                                    <option value="Arvo">Arvo</option>
                                    <option value="Droid Serif">Droid Serif</option>
                                    <option value="Nunito">Nunito</option>
                                </select>
                            </div><!-- End #fourth-font-container -->
                        </div><!-- .panel -->

                    </div><!-- End .panel-font-accordion -->
                </div><!-- End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End #option-panel-container -->


    </div><!-- End #option-panel-wrapper -->

</div><!-- End #option panel -->

<div id="wrapper">
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span
                                                class="hide-for-xs">My Wishlist</span></a></li>
                                <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span
                                                class="hide-for-xs">My Account</span></a></li>
                                <li><a href="cart.html" title="My Cart"><span
                                                class="top-icon top-icon-cart"></span><span
                                                class="hide-for-xs">My Cart</span></a></li>
                                <li><a href="checkout.html" title="Checkout"><span
                                                class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a>
                                </li>
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">

                            <div class="header-text-container pull-right">
                                <p class="header-text">Welcome to Venedor!</p>
                                <p class="header-link"><a href="#">login</a>&nbsp;or&nbsp;<a href="#">create an
                                        account</a></p>
                            </div><!-- End .pull-right -->
                        </div><!-- End .header-top-right -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #header-top -->

        <div id="inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <span>Responsive eCommerce Template</span>
                            <a href="index-2.html" title="Venedor eCommerce Template"><img src="images/logo.png"
                                                                                           alt="Venedor Commerce Template"
                                                                                           width="188" height="67"></a>
                        </h1>
                    </div><!-- End .col-md-5 -->
                    <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right clearfix">
                        <div class="header-inner-right-wrapper">
                            <div class="dropdown-cart-menu-container pull-right">
                                <div class="btn-group dropdown-cart">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="cart-menu-icon"></span>
                                        0 item(s) <span class="drop-price">- $0.00</span>
                                    </button>

                                    <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                        <p class="dropdown-cart-description">Recently added item(s).</p>
                                        <ul class="dropdown-cart-product-list">
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i
                                                            class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i
                                                            class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img
                                                                src="images/products/thumbnails/shoe1.jpg" alt="shoe 1"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Cam Optia AF Webcam </a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499</span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                            <li class="item clearfix">
                                                <a href="#" title="Delete item" class="delete-item"><i
                                                            class="fa fa-times"></i></a>
                                                <a href="#" title="Edit item" class="edit-item"><i
                                                            class="fa fa-pencil"></i></a>
                                                <figure>
                                                    <a href="product.html"><img
                                                                src="images/products/thumbnails/shoe3.jpg" alt="shoe 3"></a>
                                                </figure>
                                                <div class="dropdown-cart-details">
                                                    <p class="item-name">
                                                        <a href="product.html">Iphone Case Cover Original</a>
                                                    </p>
                                                    <p>
                                                        1x
                                                        <span class="item-price">$499<span class="sub-price">.99</span></span>
                                                    </p>
                                                </div><!-- End .dropdown-cart-details -->
                                            </li>
                                        </ul>

                                        <ul class="dropdown-cart-total">
                                            <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                            <li><span class="dropdown-cart-total-title">Total:</span>$1005<span
                                                        class="sub-price">.99</span></li>
                                        </ul><!-- .dropdown-cart-total -->
                                        <div class="dropdown-cart-action">
                                            <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                            <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a></p>
                                        </div><!-- End .dropdown-cart-action -->

                                    </div><!-- End .dropdown-cart -->
                                </div><!-- End .btn-group -->
                            </div><!-- End .dropdown-cart-menu-container -->
                            <div class="header-top-dropdowns pull-right">
                                <div class="btn-group dropdown-money">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="hide-for-xs">US Dollar</span><span class="hide-for-lg">$</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="hide-for-xs">Euro</span><span class="hide-for-lg">&euro;</span></a>
                                        </li>
                                        <li><a href="#"><span class="hide-for-xs">Pound</span><span class="hide-for-lg">&pound;</span></a>
                                        </li>
                                    </ul>
                                </div><!-- End .btn-group -->
                                <div class="btn-group dropdown-language">
                                    <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                        <span class="flag-container"><img src="images/england-flag.png"
                                                                          alt="flag of england"></span>
                                        <span class="hide-for-xs">English</span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#"><span class="flag-container"><img src="images/italy-flag.png"
                                                                                          alt="flag of england"></span><span
                                                        class="hide-for-xs">Italian</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="images/spain-flag.png"
                                                                                          alt="flag of italy"></span><span
                                                        class="hide-for-xs">Spanish</span></a></li>
                                        <li><a href="#"><span class="flag-container"><img src="images/france-flag.png"
                                                                                          alt="flag of france"></span><span
                                                        class="hide-for-xs">French</span></a></li>
                                        <li><a href="#"><span class="sm-separator"><img src="images/germany-flag.png"
                                                                                        alt="flag of germany"></span><span
                                                        class="hide-for-xs">German</span></a></li>
                                    </ul>
                                </div><!-- End .btn-group -->
                            </div><!-- End .header-top-dropdowns -->
                        </div><!-- End .header-inner-right-wrapper -->

                    </div><!-- End .col-md-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">

                            <nav id="main-nav">
                                <div id="responsive-nav">
                                    <div id="responsive-nav-button">
                                        Menu <span id="responsive-nav-button-icon"></span>
                                    </div><!-- responsive-nav-button -->
                                </div>
                                <ul class="menu clearfix">
                                    <li>
                                        <a class="active" href="index-2.html">HOME</a>
                                        <ul>
                                            <li><a href="../green/index-2.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="../orange/index-2.html">Home 3</a></li>
                                            <li><a href="../pink/index-2.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-container"><a href="#">SHOP</a>
                                        <div class="mega-menu clearfix">
                                            <div class="col-5">
                                                <a href="category.html" class="mega-menu-title">Clothing</a>
                                                <!-- End .mega-menu-title -->
                                                <ul class="mega-menu-list clearfix">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Jeans &amp; Trousers</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; T-Shirts</a></li>
                                                    <li><a href="#">Jackets &amp; Coats</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                </ul>
                                            </div><!-- End .col-5 -->
                                            <div class="col-5">
                                                <a href="category.html" class="mega-menu-title">Shoes</a>
                                                <!-- End .mega-menu-title -->
                                                <ul class="mega-menu-list clearfix">
                                                    <li><a href="#">Formal Shoes</a></li>
                                                    <li><a href="#">Casual Shoes</a></li>
                                                    <li><a href="#">Sandals</a></li>
                                                    <li><a href="#">Boots</a></li>
                                                    <li><a href="#">Wide Fit</a></li>
                                                    <li><a href="#">Slippers</a></li>
                                                </ul>
                                            </div><!-- End .col-5 -->
                                            <div class="col-5">
                                                <a href="category.html" class="mega-menu-title">Accessories</a>
                                                <!-- End .mega-menu-title -->
                                                <ul class="mega-menu-list clearfix">
                                                    <li><a href="#">Bags &amp; Purses</a></li>
                                                    <li><a href="#">Belts</a></li>
                                                    <li><a href="#">Gloves</a></li>
                                                    <li><a href="#">Jewellery</a></li>
                                                    <li><a href="#">Sunglasses</a></li>
                                                    <li><a href="#">Hair Accessories</a></li>
                                                </ul>
                                            </div><!-- End .col-5 -->
                                            <div class="col-5">
                                                <a href="category.html" class="mega-menu-title">Sports</a>
                                                <!-- End .mega-menu-title -->
                                                <ul class="mega-menu-list clearfix">
                                                    <li><a href="#">Sport Tops &amp; Vests</a></li>
                                                    <li><a href="#">Swimwear</a></li>
                                                    <li><a href="#">Footwear</a></li>
                                                    <li><a href="#">Sports Underwear</a></li>
                                                    <li><a href="#">Bags</a></li>
                                                </ul>
                                            </div><!-- End .col-5 -->

                                            <div class="col-5">
                                                <a href="category.html" class="mega-menu-title">Maternity</a>
                                                <!-- End .mega-menu-title -->
                                                <ul class="mega-menu-list clearfix">
                                                    <li><a href="#">Tops &amp; Skirts</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Trousers &amp; Shorts</a></li>
                                                    <li><a href="#">Knitwear</a></li>
                                                    <li><a href="#">Jackets &amp; Coats</a></li>
                                                </ul>
                                            </div><!-- End .col-5 -->
                                        </div><!-- End .mega-menu -->
                                    </li>

                                    <li>
                                        <a href="#">PAGES</a>
                                        <ul>
                                            <li><a href="product.html">Product</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="category.html">Category</a>
                                                <ul>
                                                    <li><a href="category-list.html">Category list</a></li>
                                                    <li><a href="category.html">Category Banner 1</a></li>
                                                    <li><a href="category-banner-2.html">Category Banner 2</a></li>
                                                    <li><a href="category-banner-3.html">Category Banner 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="aboutus.html">About Us</a></li>
                                            <li><a href="register-account.html">Register Account</a></li>
                                            <li><a href="compare-products.html">Compare Products</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio-2.html">Two Columns</a></li>
                                            <li><a href="portfolio-3.html">Three Columns</a></li>
                                            <li><a href="portfolio-4.html">Four Columns</a></li>
                                            <li><a href="single-portfolio.html">Portfolio Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>

                            </nav>

                            <div id="quick-access">
                                <form class="form-inline quick-search-form" role="form" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div><!-- End .form-inline -->
                                    <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                </form>
                            </div><!-- End #quick-access -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            </div><!-- End #nav -->
        </div><!-- End #inner-header -->
    </header><!-- End #header -->

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Product</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">

                        <div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">

                            <div id="product-image-carousel-container">
                                <ul id="product-carousel" class="celastislide-list">
                                    <li class="active-slide"><a data-rel='prettyPhoto'
                                                                href="images/products/big-shoe1.jpg"><img
                                                    src="images/products/thumbnails/shoe1.jpg" alt="Shoe photo 1"></a>
                                    </li>
                                    <li><a data-rel='prettyPhoto' href="images/products/big-shoe2.jpg"><img
                                                    src="images/products/thumbnails/shoe2.jpg" alt="Shoe photo 2"></a>
                                    </li>
                                    <li><a data-rel='prettyPhoto' href="images/products/big-shoe3.jpg"><img
                                                    src="images/products/thumbnails/shoe3.jpg" alt="Shoe photo 3"></a>
                                    </li>
                                    <li><a data-rel='prettyPhoto' href="images/products/big-shoe4.jpg"><img
                                                    src="images/products/thumbnails/shoe4.jpg" alt="Shoe photo 4"></a>
                                    </li>
                                    <li><a data-rel='prettyPhoto' href="images/products/big-shoe5.jpg"><img
                                                    src="images/products/thumbnails/shoe5.jpg" alt="Shoe photo 5"></a>
                                    </li>

                                </ul><!-- End product-carousel -->
                            </div>

                            <div id="product-image-container">
                                <figure><img src="images/products/big-shoe1.jpg" alt="Product Big image"
                                             id="product-image" data-big="images/products/big-shoe1.jpg">
                                    <figcaption class="item-price-container">
                                        <span class="old-price">$160</span>
                                        <span class="item-price">$120</span>
                                    </figcaption>
                                </figure>
                            </div><!-- product-image-container -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6 col-sm-12 col-xs-12 product">
                            <div class="lg-margin visible-sm visible-xs"></div><!-- Space -->
                            <h1 class="product-name">Samsun Galaxy Ace</h1>
                            <div class="ratings-container">
                                <div class="ratings separator">
                                    <div class="ratings-result" data-result="70"></div>
                                </div><!-- End .ratings -->
                                <span class="ratings-amount separator">
									3 Review(s)
								</span>
                                <span class="separator">|</span>
                                <a href="#review" class="rate-this">Add Your Review</a>
                            </div><!-- End .rating-container -->
                            <ul class="product-list">
                                <li><span>Availability:</span>In Stock</li>
                                <li><span>Product Code:</span>483512569</li>
                                <li><span>Brand:</span>Apple</li>
                            </ul>
                            <hr>
                            <div class="product-color-filter-container">
                                <span>Select Color:</span>
                                <div class="xs-margin"></div>
                                <ul class="filter-color-list clearfix">
                                    <li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#d1d2d4" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#666467" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#515151" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#bcdae6" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#5272b3" class="filter-color-box"></a></li>
                                    <li><a href="#" data-bgcolor="#acbf0b" class="filter-color-box"></a></li>
                                </ul>
                            </div><!-- End .product-color-filter-container-->
                            <hr>
                            <div class="product-add clearfix">
                                <div class="custom-quantity-input">
                                    <input type="text" name="quantity" value="1">
                                    <a href="#" onclick="return false;" class="quantity-btn quantity-input-up"><i
                                                class="fa fa-angle-up"></i></a>
                                    <a href="#" onclick="return false;" class="quantity-btn quantity-input-down"><i
                                                class="fa fa-angle-down"></i></a>
                                </div>
                                <button class="btn btn-custom-2">ADD TO CART</button>
                            </div><!-- .product-add -->
                            <div class="md-margin"></div><!-- Space -->
                            <div class="product-extra clearfix">
                                <div class="product-extra-box-container clearfix">
                                    <div class="item-action-inner">
                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                    </div><!-- End .item-action-inner -->
                                </div>
                                <div class="md-margin visible-xs"></div>
                                <div class="share-button-group">
                                    <!-- AddThis Button BEGIN -->
                                    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                        <a class="addthis_button_facebook"></a>
                                        <a class="addthis_button_twitter"></a>
                                        <a class="addthis_button_email"></a>
                                        <a class="addthis_button_print"></a>
                                        <a class="addthis_button_compact"></a><a
                                                class="addthis_counter addthis_bubble_style"></a>
                                    </div>
                                    <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                                    <script type="text/javascript"
                                            src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52b2197865ea0183"></script>
                                    <!-- AddThis Button END -->
                                </div><!-- End .share-button-group -->
                            </div>
                        </div><!-- End .col-md-6 -->


                    </div><!-- End .row -->

                    <div class="lg-margin2x"></div><!-- End .space -->

                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">

                            <div class="tab-container left product-detail-tab clearfix">
                                <ul class="nav-tabs">
                                    <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                                    <li><a href="#description" data-toggle="tab">Description</a></li>
                                    <li><a href="#review" data-toggle="tab">Review</a></li>
                                    <li><a href="#additional" data-toggle="tab">Additional Info</a></li>
                                    <li><a href="#video" data-toggle="tab">Video</a></li>
                                </ul>
                                <div class="tab-content clearfix">

                                    <div class="tab-pane active" id="overview">
                                        <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel,
                                            tristique urna. </p>
                                        <p>Cumque nihil facere itaque mollitia consectetur saepe cupiditate debitis
                                            fugiat temporibus soluta maxime doloremque alias enim officia aperiam at
                                            similique quae vel sapiente nulla molestiae tenetur deleniti architecto
                                            ratione accusantium.
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti in impedit
                                            modi aliquid explicabo aperiam illum esse quibusdam aspernatur commodi
                                            voluptate veritatis vero quidem porro vitae non nihil architecto optio!</p>
                                        <p>Phasellus consequat id purus in convallis. Nulla quis nunc auctor, pretium
                                            enimnec, tristique magna.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam minima
                                            officiis consequatur expedita nesciunt voluptates at enim. Reprehenderit
                                            possimus vitae dolor tempore earum nulla maxime delectus repellendus
                                            excepturi suscipit qui?</p>
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane" id="description">
                                        <p>The perfect mix of portability and performance in a slim 1" form factor:</p>
                                        <ul class="product-details-list">
                                            <li>3rd gen Intel® Core™ i7 quad core processor available;</li>
                                            <li>Windows 8 Pro available;</li>
                                            <li>13.3" and 15.5" screen sizes available;</li>
                                            <li>Double your battery life with available sheet battery;</li>
                                            <li>4th gen Intel® Core™ i7 processor available;</li>
                                            <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                                            <li>Super fast 512GB PCIe SSD available;</li>
                                            <li>Ultra-light at just 2.34 lbs.</li>
                                            <li>And more...</li>
                                        </ul>
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane" id="review">

                                        <p>Sed volutpat ac massa eget lacinia. Suspendisse non purus semper, tellus vel,
                                            tristique urna. </p>
                                        <p>Cumque nihil facere itaque mollitia consectetur saepe cupiditate debitis
                                            fugiat temporibus soluta maxime doloremque alias enim officia aperiam at
                                            similique quae vel sapiente nulla molestiae tenetur deleniti architecto
                                            ratione accusantium.
                                        </p>
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane" id="additional">
                                        <strong>Additional Informations</strong>
                                        <p>Quae eum placeat reiciendis enim at dolorem eligendi?</p>
                                        <hr>
                                        <ul class="product-details-list">
                                            <li>Lorem ipsum dolor sit quam</li>
                                            <li>Consectetur adipisicing elit</li>
                                            <li>Illum autem tempora officia</li>
                                            <li>Amet id odio architecto explicabo</li>
                                            <li>Voluptatem laborum veritatis</li>
                                            <li>Quae laudantium iste libero</li>
                                        </ul>
                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane" id="video">
                                        <div class="video-container">
                                            <strong>A Video about Product</strong>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
                                                adipisci esse.</p>
                                            <hr>
                                            <iframe width="560" height="315"
                                                    src="http://www.youtube.com/embed/Z0MNVFtyO30?rel=0"></iframe>

                                        </div><!-- End .video-container -->

                                    </div><!-- End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .tab-container -->
                            <div class="lg-margin visible-xs"></div>
                        </div><!-- End .col-md-9 -->
                        <div class="lg-margin2x visible-sm visible-xs"></div><!-- Space -->
                        <div class="col-md-3 col-sm-12 col-xs-12 sidebar">
                            <div class="widget related">
                                <h3>Related</h3>

                                <div class="related-slider flexslider sidebarslider">
                                    <ul class="related-list clearfix">
                                        <li>
                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item1.jpg" alt="item1">
                                                </figure>
                                                <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$40</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item2.jpg" alt="item2">
                                                </figure>
                                                <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">18$</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item3.jpg" alt="item3">
                                                </figure>
                                                <h5><a href="#">Women's Lauren Dress</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$30</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->
                                        </li>
                                        <li>
                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                </figure>
                                                <h5><a href="#">Swiss Mobile Phone</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="64"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$39</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item5.jpg" alt="item5">
                                                </figure>
                                                <h5><a href="#">Zwinzed HeadPhones</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="94"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$18.99</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item6.jpg" alt="item6">
                                                </figure>
                                                <h5><a href="#">Kless Man Suit</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="74"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$99</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->
                                        </li>
                                        <li>

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item2.jpg" alt="item2">
                                                </figure>
                                                <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$17</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->

                                            <div class="related-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                </figure>
                                                <h5><a href="#">Women's Lauren Dress</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="related-price">$30</div><!-- End .related-price -->
                                            </div><!-- End .related-product -->
                                        </li>
                                    </ul>
                                </div><!-- End .related-slider -->
                            </div><!-- End .widget -->

                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                    <div class="lg-margin2x"></div><!-- Space -->

                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

    <footer id="footer">
        <div id="newsletter-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                        <h3>Sing up to receive the latest fashion news</h3>
                        <form id="register-newsletter">
                            <input type="text" name="newsletter" required="" placeholder="Enter your email address">
                            <input type="submit" class="btn btn-custom-3" value="SIGN UP">
                        </form>
                    </div><!--End  .col-md-6 -->

                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #newsletter-container -->
        <div id="inner-footer">

            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>MY ACCOUNT</h3>
                        <ul class="links">
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Personal information</a></li>
                            <li><a href="#">Addresses</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Your Vouchers</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>INFORMATION</h3>
                        <ul class="links">
                            <li><a href="#">New products</a></li>
                            <li><a href="#">Top sellers</a></li>
                            <li><a href="#">Specials</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Our stores</a></li>
                        </ul>
                    </div><!-- End .widget -->

                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>Twıtter Feed</h3>
                        <div class="twitter_feed">
                        </div><!-- End twitter-feed -->
                    </div><!-- End .widget -->

                    <div class="clearfix visible-sm"></div>

                    <div class="col-md-3 col-sm-12 col-xs-12 widget">
                        <h3>FACEBOOK LIKE BOX</h3>

                        <div class="facebook-likebox">
                            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                        </div>


                    </div><!-- End .widget -->
                </div><!-- End .row -->
            </div><!-- End .container -->

        </div><!-- End #inner-footer -->

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                        <ul class="social-links clearfix">
                            <li><a href="#" class="social-icon icon-facebook"></a></li>
                            <li><a href="#" class="social-icon icon-twitter"></a></li>
                            <li><a href="#" class="social-icon icon-rss"></a></li>
                            <li><a href="#" class="social-icon icon-delicious"></a></li>
                            <li><a href="#" class="social-icon icon-linkedin"></a></li>
                            <li><a href="#" class="social-icon icon-flickr"></a></li>
                            <li><a href="#" class="social-icon icon-skype"></a></li>
                            <li><a href="#" class="social-icon icon-email"></a></li>
                        </ul>
                    </div><!-- End .col-md-7 -->

                    <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                        <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                    </div><!-- End .col-md-5 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #footer-bottom -->

    </footer><!-- End #footer -->
</div><!-- End #wrapper -->
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
<!-- END -->
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.hoverIntent.min.js"></script>
<script src="js/twitter/jquery.tweet.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/colpick.js"></script>
<script src="js/jquery.elastislide.js"></script>
<script src="js/jquery.mlens-1.3.min.js"></script>
<script src="js/main.js"></script>

<script>
    $(function () {

        var carouselContainer = $('#product-carousel'),
            productImg = $('#product-image');

        carouselContainer.elastislide({
            orientation: 'vertical',
            minItems: 4

        });

        productImg.mlens({
            imgSrc: $("#product-image").attr("data-big"),
            lensShape: "square",
            lensSize: 150,
            borderSize: 4,
            borderColor: "#999",
            borderRadius: 0
        });


        var oldImg = productImg.attr('src');
        carouselContainer.find('li').on('mouseover', function () {

            var newImg = $(this).find('a').attr('href');

            productImg.attr({'src': newImg, 'data-big': newImg}).trigger('imagechanged');

        });

        // triggered with custom event
        productImg.on('imagechanged', function () {
            productImg.mlens("update", 0, {
                imgSrc: productImg.attr("data-big"),
                lensShape: "square",
                lensSize: 150,
                borderSize: 4,
                borderColor: "#999"
            });
        });

    });
</script>
</body>
</html>