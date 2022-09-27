<?php 
    session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shupmax - Multipurpose eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="top header__top gray-bg d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="message--header__top">
                            <p class="message m-0 dove__gray-color">Free Shipping Worldwide - On All Order Over $1000</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="menu--header__top text-right">
                            <nav class="nav--top__list">
                                <ul class="list-inline">
                                    <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">store Locator</a></li>
                                    <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Track Orders</a></li>
                                    <li><a class="nav--top__link dove__gray-color text-capitalize position-relative" href="#">Credit Card</a></li>
                                    <li class="nav--top__dropdown position-relative"><a class="nav--top__link lang--top__link dove__gray-color text-capitalize position-relative" href="#">English & Dollar<span class="lnr lnr-chevron-down"></span></a>
                                        <ul class="dropdown-show">
                                            <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">canada</span><span class="currency">USD</span></a></li>
                                            <li><a class="dove__gray-color text-capitalize" href="#"><span class="lang">Bangladesh</span><span class="currency">TAKA</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle header__middle bg--header__middle pt-35 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content--header__middle d-flex align-items-center justify-content-between">
                            <div class="logo--header__middle">
                                <div class="logo">
                                    <a class="logo__link" href="index-2.html"><img src="img/logo/h1__logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="search--header__middle h1search--header__middle">
                                <form class="search--header__form position-relative" action="#">
                                    <div class="header--search__box">
                                        <input class="header--search__query" type="text" placeholder="Search For Products...">
                                        <button class="header--search__btn"><i class="icofont-search-2"></i></button>
                                    </div>
                                    <div class="header--search__cate">
                                        <select name="header-search" id="header--search__main">
                                            <option value="1">All Categories</option>
                                            <option value="1">Lamps & Lighting</option>
                                            <option value="1">Mattress & Bedding</option>
                                            <option value="1">Housekeeping</option>
                                            <option value="1">Showpiece & Wall Art</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="cart--header__middle d-none d-md-block">
                                <div class="cart--header__list">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                        <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="http://localhost/ecommerce/customer/cart.php"><i class="fal fa-bags-shopping"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom header__bottom header__bottom--border custom-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-10">
                       <!-- Extra shopping cart for mobile device start -->
                        <div class="cart--header__middle d-block d-md-none">
                            <div class="cart--header__list">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fal fa-user-plus"></i></a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fal fa-bags-shopping"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Extra shopping cart for mobile device end -->
                        <div class="dept__menu position-relative d-none d-md-block">
                            <nav>
                                <ul class="dept__menu--list">
                                    <li><a class="dept__menu-mlink f-900 cod__gray-color" href="JavaScript:Void(0);">Shop By Departments</a>
                                        <!-- <ul class="dept__menu--dropdown open">
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Lamps & Lighting</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Mattress & Bedding</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Home wares</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Housekeeping</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dept__menu--dlink" href="#">Showpiece & Wall Art</a></li>
                                            <li><a class="dept__menu--dlink" href="#">Dining & Cabinetry</a></li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Ceiling Light</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Festive & Outdoor</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dept__menu--dlink" href="#">Comfoters & Sheets</a></li>
                                            <li class="dropdown"><a class="dept__menu--dlink" href="#">Other Accessories</a>
                                                <ul class="sub__menu sub__dept--menu">
                                                    <li><a href="#">Desktop</a></li>
                                                    <li class="dropdown"><a href="#">Laptop</a>
                                                        <ul class="sub__menu level2">
                                                            <li><a href="#">Desktop</a></li>
                                                            <li><a href="#">Laptop</a></li>
                                                            <li><a href="#">Mobile</a></li>
                                                            <li><a href="#">Tablet</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Mobile</a></li>
                                                    <li><a href="#">Tablet</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7 col-2">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="dropdown-icon">
                                        <a href="index-2.html">Home</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="index-2.html">Home Furniture</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Electronics</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home Fashion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li class="mega-menu static dropdown-icon">
                                        <a href="shop.html">Shop</a>
                                        <ul class="submenu mega-full">
                                            <li>
                                                <a href="shop.html">Category 01</a>
                                                <ul class="submenu  level-1">
                                                    <li>
                                                        <a href="shop.html">Furniture</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Fasion</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Bags</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Lather</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Category 02</a>
                                                <ul class="submenu  level-1">
                                                    <li>
                                                        <a href="shop.html">Electronics</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Chair</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Table</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Book</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Category 03</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="shop.html">Clock</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Watch</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Mobile</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">sunglass</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop.html">Category 04</a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="shop.html">Chair</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Lather</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Table</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop.html">Clock</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-icon">
                                        <a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="product-details2.html">Product Details</a>
                                            </li>
                                            <li>
                                                <a href="registration.html">Register</a>
                                            </li>
                                            <li>
                                                <a href="shop-cat-three.html">Shop Category 03</a>
                                            </li>
                                            <li>
                                                <a href="shop-collection.html">Shop Category 01</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">Top Product</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Trending</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">Furniture</a>
                                    </li>
                                    <li class="dropdown-icon">
                                        <a href="blog.html">Blog</a>
                                        <ul class="submenu  level-1">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-sidebar.html">Blog Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header end /-->