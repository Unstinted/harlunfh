<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
    ============================================ -->
    {{Html::style('css/bootstrap.min.css')}}
    {{Html::style('css/bootstrap-social.css')}}
    {{--<link rel="stylesheet" href="css/bootstrap.min.css">--}}
    <!-- Font Awesome CSS
    ============================================ -->
    {{Html::style('css/font-awesome.min.css')}}
    {{--<link rel="stylesheet" href="css/font-awesome.min.css">--}}
    <!-- Mean Menu CSS
    ============================================ -->
    {{Html::style('css/meanmenu.min.css')}}
    {{--<link rel="stylesheet" href="css/meanmenu.min.css">--}}
    <!-- owl.carousel CSS
    ============================================ -->
    {{Html::style('css/owl.carousel.css')}}
    {{Html::style('css/owl.theme.css')}}
    {{Html::style('css/owl.transitions.css')}}
    {{--<link rel="stylesheet" href="css/owl.carousel.css">--}}
    {{--<link rel="stylesheet" href="css/owl.theme.css">--}}
    {{--<link rel="stylesheet" href="css/owl.transitions.css">--}}
    <!-- nivo-slider css
    ============================================ -->
    {{Html::style('css/nivo-slider.css')}}
    {{--<link rel="stylesheet" href="css/nivo-slider.css">--}}
    <!-- Price slider css
    ============================================ -->
    {{Html::style('css/jquery-ui-slider.css')}}
    {{--<link rel="stylesheet" href="css/jquery-ui-slider.css">--}}
    <!-- Simple Lence css
    ============================================ -->
    {{Html::style('css/jquery.simpleLens.css')}}
    {{Html::style('css/jquery.simpleGallery.css')}}
    {{--<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">--}}
    <!-- animate CSS
    ============================================ -->
    {{Html::style('css/animate.css')}}
    {{--<link rel="stylesheet" href="css/animate.css">--}}
    <!-- normalize CSS
    ============================================ -->
    {{Html::style('css/normalize.css')}}
    {{--<link rel="stylesheet" href="css/normalize.css">--}}
    <!-- main CSS
    ============================================ -->
    {{Html::style('css/main.css')}}
    {{--<link rel="stylesheet" href="css/main.css">--}}
    <!-- style CSS
    ============================================ -->
    {{Html::style('style.css')}}
    {{--<link rel="stylesheet" href="style.css">--}}
    <!-- responsive CSS
    ============================================ -->
    {{Html::style('css/responsive.css')}}
    {{--<link rel="stylesheet" href="css/responsive.css">--}}
    <!-- modernizr JS
    ============================================ -->
    {{Html::script('js/vendor/modernizr-2.8.3.min.js')}}
    {{--<script src="js/vendor/modernizr-2.8.3.min.js"></script>--}}
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header Area -->
<div class="header-area">
    <!-- Header top bar -->
    <div class="header-top-bar">
        <div class="container">
            <div class="header-top-inner">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="header-top-left">
                            <div class="phone">
                                <label>Call us:</label> (+234) 08168694999
                            </div>
                            <div class="e-mail">
                                <label>Email:</label> wecare@harlunfh.com
                            </div>
                            <!-- Header Link Area -->
                            <div class="header-link-area">
                                <div class="header-link">
                                    <p class="hidden-xs">Language: </p>
                                    <ul>
                                        <li><a href="#">English <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="#">English 1</a></li>
                                                <li><a href="#">English 2</a></li>
                                                <li><a href="#">English 3</a></li>
                                                <li><a href="#">English 4</a></li>
                                                <li><a href="#">English 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-link">
                                    <p class="hidden-md hidden-sm hidden-xs">Currency: </p>
                                    <ul>
                                        <li class="hidden-md hidden-sm hidden-xs"><a href="#">NGN <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="#">NGN</a></li>
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">USD</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Account <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="{{URL::to('account')}}">My Account</a></li>
                                                <li><a href="{{URL::to('wishlist')}}">My Wishlist</a></li>
                                                <li><a href="{{URL::to('cart')}}">My Cart</a></li>
                                                <li><a href="{{URL::to('checkout')}}">Checkout</a></li>
                                                <li><a href="{{URL::to('blog')}}">Blog</a></li>
                                                <li><a href="{{URL::to('my-account')}}">login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Header Link Area -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="header-top-right">
                            <!-- Header Social Icon -->
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="https://twitter.com//harunfh"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://instagram.com//harunfh"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#https://facebook.com//harunfh"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Header Top bar -->
    <!-- Header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <!-- Header Search -->
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="SEARCH...">
                            <button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4  col-sm-12">
                    <!-- Header logo -->
                    <div class="header-logo">
                        <a href="{{URL::to('index')}}">{{Html::image('img/logo/logo-p.png', 'logo')}}</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <!-- Header Cart Area-->
                    <div class="header-cart-area">
                        <div class="header-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="my-cart">My cart</span>
                                        <span class="badge">2</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <div class="cart-list">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#">{{Html::image('img/cart/c1.jpg', 'cart')}}</a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-list cart-list-two">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#">{{Html::image('img/cart/c2.jpg', 'cart')}}</a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-subtotal">
                                                <p>Subtotal: <span>$1,131.00</span></p>
                                            </div>
                                            <div class="cart-action">
                                                <button type="button" class="btn"><span>checkout</span> <i class="fa fa-long-arrow-right"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End Header Cart Area-->
                </div>
            </div>
        </div>
    </div><!-- End Header bottom -->
</div><!-- End Header Area -->
<!-- Main Menu Area -->
<div class="main-menu-area entire-main-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Main Menu -->
                <div class="main-menu hidden-sm hidden-xs">
                    <nav>
                        <ul class="main-ul">
                            <li class="sub-menu-li"><a href="{{URL::to('index')}}">Home<i class="fa fa-home"></i></a>
                            </li>
                            <li><a href="{{URL::to('shop')}}"><span class="label-menu">Sale</span> Women<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Clother</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Cocktail</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Day</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Evening</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Sports</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Sexy Dress</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Fsshion Skirt</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Evening Dress</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Children's Clothing</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Dress and skirt</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Sports</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Run</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Sandals</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Books</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>A-line Dress</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Lacy Looks</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Shirts-T-Shirts</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">shoes</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>table</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>coats</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Sweater</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Coat</span></a>
                                            </div>
                                            <div class="single-mega-menu banner-add">
                                                <a href="shop.html">
                                                    <img src="img/cart/menu-img.png" alt="img">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="small-megamenu-li"><a href="{{URL::to('shop')}}">Men<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul mega-menu-ul-two">
                                    <li>
                                        <!--Small Mega Menu -->
                                        <div class="mega-menu mega-menu-two">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Bages</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Bootes Bages</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Blazers</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Mermaid</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Clothing</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>coats</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>T-shirt</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">lingerie</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>brands</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>furniture</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{URL::to('shop')}}">Kids<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Rings</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Coats & jackets</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>raincoats</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Dresses</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>Ankle Boots</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>footwear</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>clog sandals</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>combat boots</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Accessories</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>bootees Bags</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>jackets</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>shoes</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.html">Top</a></h2>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>briefs</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>camis</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>nigthwear</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
                                                <a href="shop.html"><i class="fa fa-chevron-circle-right"></i> <span>shapewer</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu-li"><a href="{{URL::to('blog')}}" class="new-arrivals">Blog<i class="fa fa-newspaper-o"></i></a>
                            </li>

                            <li class="sub-menu-li"><a href="{{URL::to('contact')}}" class="new-arrivals">Contact Us<i class="fa fa-phone"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Main Menu -->
                <!-- Start Mobile Menu -->
                <div class="mobile-menu hidden-md hidden-lg">
                    <nav>
                        <ul>
                            <li class=""><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                    <li><a href="index-5.html">Home Page 5</a></li>
                                    <li><a href="index-6.html">Home Page 6</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Women</a>
                                <ul class="">
                                    <li><a href="">Clother</a>
                                        <ul>
                                            <li><a href="#">Cocktail</a></li>
                                            <li><a href="#">Day</a></li>
                                            <li><a href="#">Evening</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Sexy Dress</a></li>
                                            <li><a href="#">Fsshion Skirt</a></li>
                                            <li><a href="#">Evening Dress</a></li>
                                            <li><a href="#">Children's Clothing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dress and skirt</a>
                                        <ul>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Run</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">A-line Dress</a></li>
                                            <li><a href="#">Lacy Looks</a></li>
                                            <li><a href="#">Shirts-T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shoes</a>
                                        <ul>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">table</a></li>
                                            <li><a href="#">coats</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">Sweater</a></li>
                                            <li><a href="#">Coat</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="shop.html">Men</a>
                                <ul class="">
                                    <li><a href="#">Bages</a>
                                        <ul>
                                            <li><a href="#">Bootes Bages</a></li>
                                            <li><a href="#">Blazers</a></li>
                                            <li><a href="#">Mermaid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a>
                                        <ul>
                                            <li><a href="#">coats</a></li>
                                            <li><a href="#">T-shirt</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">lingerie</a>
                                        <ul>
                                            <li><a href="#">brands</a></li>
                                            <li><a href="#">furniture</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Handbags</a>
                                <ul class="">
                                    <li><a href="#">Footwear Man</a>
                                        <ul>
                                            <li><a href="#">Gold Rigng</a></li>
                                            <li><a href="#">paltinum Rings</a></li>
                                            <li><a href="#">Silver Ring</a></li>
                                            <li><a href="#">Tungsten Ring</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Footwear Womens</a>
                                        <ul>
                                            <li><a href="#">Brand Gold</a></li>
                                            <li><a href="#">paltinum Rings</a></li>
                                            <li><a href="#">Silver Ring</a></li>
                                            <li><a href="#">Tungsten Ring</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Band</a>
                                        <ul>
                                            <li><a href="#">Platinum Necklaces</a></li>
                                            <li><a href="#">Gold Ring</a></li>
                                            <li><a href="#">silver ring</a></li>
                                            <li><a href="#">Diamond Bracelets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.html">Shoes</a>
                                <ul class="">
                                    <li><a href="#">Rings</a>
                                        <ul>
                                            <li><a href="#">Coats & jackets</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">raincoats</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dresses</a>
                                        <ul>
                                            <li><a href="#">footwear</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">clog sandals</a></li>
                                            <li><a href="#">combat boots</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="#">bootees Bags</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">jackets</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Top</a>
                                        <ul>
                                            <li><a href="#">briefs</a></li>
                                            <li><a href="#">camis</a></li>
                                            <li><a href="#">nigthwear</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">shapewer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="">Pages</a>
                                <ul class="">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</div><!-- End Main Menu Area -->
@yield('content')
<!-- Brand Logo area -->
<div class="brand-logo-area">
    <div class="container">
        <div class="brand-logo">
            <div class="brand-logo-title">
                <h2>Logo brands</h2>
            </div>
            <div id="brands-logo" class="owl-carousel">
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo1.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo5.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo2.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo3.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo4.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo1.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo5.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo3.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo4.png', 'logo')}}
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        {{Html::image('img/brand-logo/blogo2.png', 'logo')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Brand Logo area -->
<!-- Footer area -->
<div class="footer-area">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Footer Left -->
                    <div class="footer-left">
                        <!-- Footer Logog -->
                        <div class="footer-logo">
                            <a href="index.html">{{Html::image('img/logo/logo-p.png', 'logo')}}</a>
                        </div>
                        <div class="footer-static-content">
                            <p>Changing the face of Fashion in Nigeria and Africa by Collaborating with the industry experts to create future fashion outfits for all.</p>
                        </div>
                        <div class="footer-payment">
                            <h2>Payments</h2>
                            <ul>
                                <li><a href="#">{{Html::image('img/logo/payment.png', 'payment')}}</a></li>
                            </ul>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
                <div class="col-md-8 footer-right-col">
                    <!-- Footer Right -->
                        <div class="footer-right">
                        <div class="footer-newsletter">
                            <form action="#">
                                <h2>Newsletter</h2>
                                <input type="text" title="Sign up for our newsletter" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="information-link">
                            <div class="single-information-link">
                                <h2>Informations</h2>
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2>other static link</h2>
                                <ul>
                                    <li><a href="#">Product Recall</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Returns and Exchanges</a></li>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">Help & FAQs</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2> My account </h2>
                                <ul>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">My credit slips</a></li>
                                    <li><a href="#">My addresses</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
            </div>
        </div>
    </div><!-- End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <p>Copyright &copy; <a href="http://harlunfh.com.ng/">HarlunFH</a> All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- End Footer Bottom -->
</div><!-- End Footer area -->
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="product" src="img/product/sp2.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Cras neque metus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
                            </div>
                            <a href="product-details.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <div class="input-content">
                                                <label for="qty">Qty:</label>
                                                <input type="button" value="-" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" class="qty-decrease">
                                                <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                                <input type="button" value="+" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
                                            </div>
                                            <button class="btn" type="button"><span>Add to cart</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- END Modal -->
</div><!-- END QUICKVIEW PRODUCT -->


@yield('script')



<!-- jquery
============================================ -->
{{Html::script('js/vendor/jquery-1.11.3.min.js')}}
{{--<script src="js/vendor/jquery-1.11.3.min.js"></script>--}}
<!-- bootstrap JS
============================================ -->
{{Html::script('js/bootstrap.min.js')}}
{{--<script src="js/bootstrap.min.js"></script>--}}
<!-- nivo slider js
============================================ -->
{{Html::script('js/jquery.nivo.slider.pack.js')}}
{{--<script src="js/jquery.nivo.slider.pack.js"></script>--}}
<!-- Mean Menu js
============================================ -->
{{Html::script('js/jquery.meanmenu.min.js')}}
{{--<script src="js/jquery.meanmenu.min.js"></script>--}}
<!-- wow JS
============================================ -->
{{Html::script('js/wow.min.js')}}
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
{{Html::script('js/jquery-price-slider.js')}}
{{--<script src="js/jquery-price-slider.js"></script>--}}
<!-- Simple Lence JS
============================================ -->
{{Html::script('js/jquery.simpleGallery.min.js')}}
{{Html::script('js/jquery.simpleLens.min.js')}}
{{--<script type="text/javascript" src="js/jquery.simpleGallery.min.js"></script>--}}
{{--<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>--}}
<!-- owl.carousel JS
============================================ -->
{{Html::script('js/owl.carousel.min.js')}}
{{--<script src="js/owl.carousel.min.js"></script>--}}
<!-- scrollUp JS
============================================ -->
{{Html::script('js/jquery.scrollUp.min.js')}}
{{--<script src="js/jquery.scrollUp.min.js"></script>--}}
<!-- jquery Collapse JS
============================================ -->
{{Html::script('js/jquery.collapse.js')}}
{{--<script src="js/jquery.collapse.js"></script>--}}

@yield('script')
<!-- plugins JS
============================================ -->
{{Html::script('js/plugins.js')}}
{{--<script src="js/plugins.js"></script>--}}
<!-- main JS
============================================ -->
{{Html::script('js/main.js')}}
{{--<script src="js/main.js"></script>--}}
</body>
</html>
