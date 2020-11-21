<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Market - Shop Food</title>

    <meta name="description" content="Ecofood theme tempalte">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="Ecofood theme template">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="<?php echo $this->config->item('base_assets') ?>fonts/fonts.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/css-hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/revolution/css/layers.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/revolution/css/navigation.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/revolution/css/settings.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>vendor/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>css/main.css" rel="stylesheet">
    <link href="<?php echo $this->config->item('base_assets') ?>css/colors/green.css" rel="stylesheet" id="colors">
    <link href="<?php echo $this->config->item('base_assets') ?>css/retina.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.php">
    <script src="<?php echo $this->config->item('base_assets') ?>js/modernizr-custom.js"></script>

</head>

<body>
    <div class="page-loader">
        <div class="loader"></div>
    </div>
    <header>
        <div class="section dark-background">
            <div class="container">
                <div class="header-2">
                    <div class="header-left">
                        <p>
                            <a href="./admin"><i class="fa fa-home"></i>Dashboard</a>
                        </p>
                    </div>
                    <div class="header-right">
                        <div class="header-login">
                            <a href="javascript:;"><strong>Welcome: </strong><i class="fa fa-user-circle"></i>Ali Khan</a>
                        </div>
                        <span class="divider">|</span>
                        <div class="header-search">
                            <button class="fa fa-search"></button>
                            <div class="search-box">
                                <input type="text" placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div class="section white-background" id="js-navbar">
            <div class="container">
                <div class="nav-1 nav-2">
                    <button class="hamburger has-animation hamburger--collapse" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/icons/ic-logo-01.png" alt="Logo Here" />
                        </a>
                    </div>
                    <div class="cart-icon-holder">
                        <div class="cart-shopping js-mini-shopcart">
                            <span class="totals">2</span>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                    <ul class="nav-menu">
                        <li>
                            <a class="has-text-color-hover" href="index.php"><i class="fa fa-home"></i> HOME</a>
                        </li>
                        <li class="has-drop">
                            <a class="has-text-color-hover" href="javascript:;"><i class="fa fa-th-large"></i> PRODUCTS</a>
                            <button class="btn-caret fa fa-angle-right"></button>
                            <ul class="drop-menu left">
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Fruits</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Vegetables</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Organic</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Local Products</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Fresh Cut</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Pre-Packaged</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">4th Range</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">Dry Fruits</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-drop">
                            <a class="has-text-color-hover" href="javascript:;"><i class="fa fa-shopping-bag"></i> SHOP</a>
                            <button class="btn-caret fa fa-angle-right"></button>
                            <ul class="drop-menu left">
                                <li>
                                    <a class="has-bg-color-hover" href="shop-categories.php">Categories</a>
                                </li>
                                <li>
                                    <a class="has-bg-color-hover" href="all-products.php">All Products</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-text-color-hover" href="my-favourities.php"><i class="fa fa-star"></i> My Favourites</a>
                        </li>
                        <li>
                            <a class="has-text-color-hover" href="login.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
                        </li>
                    </ul>
                    <div class="mini-shopcart">
                        <div class="head-mini-shopcart">
                            <p>2 items in your cart</p>
                        </div>
                        <div class="content-mini-shopcart">
                            <div class="item-mini-shopcart">
                                <div class="item-image">
                                    <img src="images/shopping-cart-item-01.jpg" alt="shopping cart" />
                                </div>
                                <div class="item-content">
                                    <h3 class="name">Strawberries, 16 oz</h3>
                                    <p class="price">1 x $2.50</p>
                                    <button class="btn-del fa fa-close"></button>
                                </div>
                            </div>
                            <div class="item-mini-shopcart">
                                <div class="item-image">
                                    <img src="images/shopping-cart-item-02.jpg" alt="shopping cart" />
                                </div>
                                <div class="item-content">
                                    <h3 class="name">Broccoli, bunch</h3>
                                    <p class="price">2 x $4.00</p>
                                    <button class="btn-del fa fa-close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="foot-mini-shopcart">
                            <p class="total-shopcart">Total: $6.50</p>
                            <div class="mini-shopcart-action">
                                <button class="au-btn au-btn-border btn-viewcart">VIEW CART</button>
                                <button class="au-btn au-btn-primary btn-checkout">CHECKOUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>