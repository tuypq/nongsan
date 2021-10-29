<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="{{ app()->getLocale() }}"><![endif]-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        <style>
            :root {
                --color-1st: {{ theme_option('primary_color', '#bead8e') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style>

        {!! Theme::header() !!}

        <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond.js doesn't work if you view the page via file://-->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}
    <div class="awe-page-loading">
        <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
{{--                <img src="" alt="images">--}}
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" placeholder="Search and hit enter...">
                        <button class="button_search" type="button">Search</button>
                    </div><!-- /input-group -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div class="wrappage">
        <header id="header" class="header-v1 header-v3">
            <div id="topbar">
                <div class="container container-ver2">
                    <div class="inner-topbar box">
                        <div class="float-left">
{{--                            <p class="acc"><img src="public/themes/nongsan/images/icon-user-header.png" alt="icon">My Account</p>--}}
                            <p class="phone"><img src="public/themes/nongsan/images/icon-phone-header.png.png" alt=""><span>{{ theme_option('phone') }}</span></p>
                        </div>
                        <div class="logo">
                            <a href="/" title="Uno">
                                <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="images">
                            </a>
                        </div>
{{--                        <div class="float-right align-right">--}}
{{--                            <div class="box-right">--}}
{{--                                <div class="cart hover-menu">--}}
{{--                                    <p class="icon-cart" title="Add to cart">--}}
{{--                                        <i class="icon"></i>--}}
{{--                                        <span class="cart-count">2</span>--}}
{{--                                    </p>--}}
{{--                                    <div class="cart-list list-menu">--}}
{{--                                        <ul class="list">--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title="" class="cart-product-image"><img src="public/themes/nongsan/images/products/1.jpg" alt="Product"></a>--}}
{{--                                                <div class="text">--}}
{{--                                                    <p class="product-name">Legging Cathedral</p>--}}
{{--                                                    <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                    <p class="qty">QTY:01</p>--}}
{{--                                                </div>--}}
{{--                                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title="" class="cart-product-image"><img src="public/themes/nongsan/images/ImgBlog/1.jpg" alt="Product"></a>--}}
{{--                                                <div class="text">--}}
{{--                                                    <p class="product-name">Legging Cathedral</p>--}}
{{--                                                    <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                    <p class="qty">QTY:01</p>--}}
{{--                                                </div>--}}
{{--                                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#" title="" class="cart-product-image"><img src="public/themes/nongsan/images/ImgBlog/1.jpg" alt="Product"></a>--}}
{{--                                                <div class="text">--}}
{{--                                                    <p class="product-name">Legging Cathedral</p>--}}
{{--                                                    <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>--}}
{{--                                                    <p class="qty">QTY:01</p>--}}
{{--                                                </div>--}}
{{--                                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                        <p class="total"><span class="left">Total:</span> <span class="right">$1121.98</span></p>--}}
{{--                                        <div class="bottom">--}}
{{--                                            <a class="link-v1" href="#" title="viewcart">View Cart</a>--}}
{{--                                            <a class="link-v1 rt" href="#" title="checkout">Check out</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">--}}
{{--                                    <i class="icon"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End topbar -->
            <div class="header-top">
                <div class="container container-ver2">
                    <div class="box">
                        <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                        <div class="logo-mobile"><a href="#" title="Xanadu"><img src="public/themes/nongsan/images/logo-v1.png" alt="Xanadu-Logo"></a></div>
                            <nav class="mega-menu">
                                {!!
                               Menu::renderMenuLocation('main-menu', [
                                   'options' => ['class' => 'nav navbar-nav'],
                                   'view'    => 'main-menu',
                               ])
                               !!}
                            </nav>
                    </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End header-top -->
        </header><!-- /header -->
    <div id="page-wrap">
