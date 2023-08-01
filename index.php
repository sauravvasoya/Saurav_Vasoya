<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:06:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AC Buy & Service </title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
    <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function () {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-98H8KRKT85');
    </script>

    <meta name="robots" content="noindex">

    <body>
        <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }


            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }

            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }

            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }

            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }

            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }

            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }

            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }

            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }

            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }


            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }



            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;

                }
            }

            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;

                }
            }

            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }

                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }

                #right-sidebar,
                .pull-right {
                    width: 90px;
                }

                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>
        <!-- <div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs"> -->

        <!-- <div id="w3lDemoBar" class="w3l-demo-bar">
        <div class="demo-btns">
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -back">
                <span class="fa fa-arrow-left"></span>
            </span>
            <span class="w3l-text">Back</span>
        </a>
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -download">
                <span class="fa fa-download"></span>
            </span>
            <span class="w3l-text">Download</span>
        </a>
        <a href="https://w3layouts.com/checkout/?add-to-cart=4763800000102799" class="no-margin-bottom-mobile">
            <span class="w3l-icon -buy">
                <span class="fa fa-shopping-cart"></span>
            </span>
            <span class="w3l-text">Buy</span>
        </a>
    </div> -->
        <!--       
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div> -->
        </div>
        </div>
        </div>
        <!-- Include header  -->
        
       <?php
            include 'header.php';

       ?>
       <!-- end header  -->
        <section class="w3mid-gap"></section>
        <!--/Banner-Start-->
        <!--/main-slider -->
        <section class="w3l-main-slider banner-slider position-relative" id="home">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <div class="slider-info banner-view banner-top1">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <h5>Up To 60% Off Now</h5>
                                <h3 class="title-hero-19">Mid Season Sale 40%</h3>
                                <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                                <a href="products.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-info banner-view banner-top2">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <h5>Fall Summer Clearance</h5>
                                <h3 class="title-hero-19">Enjoy The Season Sale</h3>
                                <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                                <a href="products.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-info banner-view banner-top3">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <h5>Up To 60% Off Now</h5>
                                <h3 class="title-hero-19">Mid Season Sale 40%</h3>
                                <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                                <a href="products.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-info banner-view banner-top4">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <h5>Fall Summer Clearance</h5>
                                <h3 class="title-hero-19">Enjoy The Season Sale</h3>
                                <p>Final Clearance: Take 20% off ‘Sale Must-Haves'</p>
                                <a href="products.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i
                                        class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //main-slider -->
        <!-- /Free-Ship-->
        <section class="w3free-ship text-center py-md-5 py-4">
            <h2>Free Shipping For You Till Midnight <i class="fas fa-shipping-fast ms-lg-3"></i></h2>
        </section>
        <!--//Free-Ship-->
        <!--/bottom-3-grids-->
        <div class=" w3l-3-grids py-5" id="grids-3">
            <div class="container py-md-4">
                <div class="row">
                    <div class="col-md-6 mt-md-0">
                        <div class="grids3-info position-relative">
                            <a href="products.php" class="d-block zoom"><img src="assets/images/banner31.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="w3-grids3-info">
                                <h4 class="gdnhy-1"><a href="products.php">AC</a>
                                    <a class="w3item-link btn btn-style mt-4" href="products.php">
                                        Buy Now <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                        <div class="grids3-info second position-relative">
                            <a href="service.php" class="d-block zoom"><img src="assets/images/1.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="w3-grids3-info second">
                                <h4 class="gdnhy-1"><a href="service.php">Services</a>
                                    <a class="w3item-link btn btn-style mt-4" href="service.php">
                                        Book Now <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </h4>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <section class="w3l-witemshny-main py-5">
          <div class="container py-md-4">
               <!-- <h3 class="title-w3l">Deals Of The Day</h3>
                <div class="witemshny-grids row mt-lg-3">
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d1.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Formal Wear</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d2.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Active Wear</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d3.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Shoes</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d4.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 50% Off on Shirts</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d5.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 50% Off on Clothing</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d6.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Sandles</a>
                        </h4>
                    </div>
                </div> -->












                <!-- <h3 class="title-w3l mt-5 pt-lg-4">Best Discounts for You</h3>
                
                <div class="witemshny-grids row mt-lg-3">
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d7.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Swings</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d8.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 30% Off on Office Chairs</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d9.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Glass Mirror</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d10.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 50% Off on Makeup Kit</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d11.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Handbgs</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/d12.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Perfumes</a>
                        </h4>
                    </div>
                </div> -->
















                <!--//row-2-->
                <h3 class="title-w3l mt-5 pt-lg-4">Best Offers for You</h3>
                <!--/row2-->
                <div class="witemshny-grids row mt-lg-3">
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-1.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">10% Off on Voltas AC's</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-2.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 20% Off on Window AC's</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-3.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 10% Off on Croma AC's</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-4.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 5% Off on Blue-star Portable AC</a>
                        </h4>
                    </div>
                    <!-- <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-5.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Herbal Products</a>
                        </h4>
                    </div> -->
                    <!-- <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="products-1.php" class="d-block zoom"><img src="assets/images/shop-6.jpg" alt=""
                                    class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="products-1.php">30% Off on Office Chairs</a>
                        </h4>
                    </div> -->
                </div>
                <!--//row-2-->
            </div>
        </section>
        <!--/w3l-ecommerce-main-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->


        </div>
        <!-- /home-page-video-popup-->
        <!-- <section class="w3l-index5 py-5" id="video">
            <div class="new-block py-5">
                <div class="container">
                    <div class="video-info">
                        <div class="title-content text-center">
                            <h3 class="title-w3l two mb-5">Pre-Fall Collection,That mid-summer<br> craving for fall
                                styles?</h3>
                        </div>
                    </div>
                    <div class="history-info py-lg-5 align-self pt-0">
                        <div class="position-relative mt-lg-3 py-5 pt-lg-0">
                            <a href="#small-dialog"
                                class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            dialog itself, mfp-hide class is required to make dialog hidden 
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/145014989" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- //home-page-video-popup-->
        <section class="w3l-ecommerce-main">
            <!-- /products-->
            <div class="ecom-contenthny py-5">
                <div class="container py-lg-5">
                    <h3 class="title-w3l">Shop With Us</h3>
                    <p class="">Handpicked Favourites just for you</p>
                    <!-- /row-->
                    <div class="ecom-products-grids row mt-lg-4 mt-3">
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2 shopv">
                                <div class="product-image2">
                                    <a href="products.php">
                                        <img class="pic-1 img-fluid radius-image" src="assets/images/c1.jpg">
                                        <img class="pic-2 img-fluid radius-image" src="assets/images/c1.jpg">
                                    </a>
                                    
                                   
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2 shopv">
                                <div class="product-image2">
                                    <a href="products.php">
                                        <img class="pic-1 img-fluid radius-image" src="assets/images/c2.jpg">
                                        <img class="pic-2 img-fluid radius-image" src="assets/images/c2.jpg">
                                    </a>
                                    
                                   
                                </div>
                                
                            </div>
                        </div>
                       <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2 shopv">
                                <div class="product-image2">
                                    <a href="products.php">
                                        <img class="pic-1 img-fluid radius-image" src="assets/images/c3.jpg">
                                        <img class="pic-2 img-fluid radius-image" src="assets/images/c3.jpg">
                                    </a>
                                    
                                   
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2 shopv">
                                <div class="product-image2">
                                    <a href="products.php">
                                        <img class="pic-1 img-fluid radius-image" src="assets/images/c4.jpg">
                                        <img class="pic-2 img-fluid radius-image" src="assets/images/c4.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- //products-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!-- testimonials section -->
        <section class="w3l-clients w3l-test" id="testimonials">
            <div class="container py-lg-5 py-md-4 pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-4 testimonials-con-left-info py-sm-5 pt-0 py-3">
                        <div class="title-content text-left p-xl-3">
                            <h6 class="title-subw3hny">Reviews</h6>
                            <h3 class="title-w3l two">What Clients Say ?</h3>
                            <p class="test-p mt-3">Different reviews that we have received from our customer are as follows: 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                        <div id="owl-demo2" class="owl-carousel owl-theme testimonials-2 py-sm-5 pt-0 py-3">
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">

                                        <p><i class="fas fa-quote-left me-2"></i> This website is very comfortable
                                    I can find all products of different brands easily</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team1.JPG"
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>Rohit Kotadiya</h3>
                                            <p class="identity">Surat City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <p><i class="fas fa-quote-left me-2"></i> On this Website their are
                                        great offers and deals on the products.</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team2.jpg "
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>Alexander sakura</h3>
                                            <p class="identity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <p><i class="fas fa-quote-left me-2"></i> This Website is good and on it we can 
                                        have all categories of products and it is easy to use as well.</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team3.jpg"
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>John wilson</h3>
                                            <p class="identity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <p><i class="fas fa-quote-left me-2"></i>AC of different categories all are available 
                                        with proper description and image of product.</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team4.jpg"
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>Julia sakura</h3>
                                            <p class="identity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <p><i class="fas fa-quote-left me-2"></i>This website has all products and 
                                        you can get varieties and offers as well.</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team2.jpg"
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>John wilson</h3>
                                            <p class="identity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <p><i class="fas fa-quote-left me-2"></i> This website provides easy usage and 
                                        all type of AC with nice offers.</p>
                                    </div>
                                    <div class="bottom-info mt-4">
                                        <a class="comment-img" href="#url"><img src="assets/images/team3.jpg"
                                                class="img-fluid radius-image" alt="placeholder image"></a>
                                        <div class="people-info align-self">
                                            <h3>Julia sakura</h3>
                                            <p class="identity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //testimonials-section-->
        <!--/w3l-subscription-infhny-->
        <!-- <section class="w3l-subscription-infhny py-5">
            <div class="container py-md-5">
                <div class="subscription-info text-center mx-auto">
                    <i class="far fa-envelope"></i>
                    <h3 class="title-w3l mb-2">Get On The List</h3>
                    <p>Shop Exclusive Promos & SAVE 20% on Your First Order</p>

                    <form action="#" method="post" class="w3l-signin-form mt-4 mb-3">
                        <div class="forms-gds">
                            <div class="form-input">
                                <input type="email" name="" placeholder="Your email here" required="">
                            </div>
                            <div class="form-input"><button class="btn btn-style btn-primary">Subscribe</button></div>
                        </div>
                    </form>
                    <p>By entering your email, you are accepting our <a href="#">Terms of Use</a> and <a
                            href="#">Privacy Policy</a>.</p>
                </div>
            </div>
        </section> -->
        <!--//w3l-subscription-infhny-->
        <!-- Add Footer  -->
        <?php
        include 'footer.php';
        ?>
        <!-- footer end  -->
        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/theme-change.js"></script>
        <!-- cart-js -->
        <script src="assets/js/minicart.js"></script>
        <script>
            shopv.render();

            shopv.cart.on('shopv_checkout', function (evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) { }
                }
            });

        </script>
        <!-- //cart-js -->
        <!-- owlcarousel -->
        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function () {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        667: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })

        </script>
        <!-- //script -->
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function () {
                $("#owl-demo2").owlCarousel({
                    loop: true,
                    nav: false,
                    margin: 50,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        736: {
                            items: 1,
                            nav: false
                        },
                        991: {
                            items: 2,
                            margin: 30,
                            nav: false
                        },
                        1080: {
                            items: 2,
                            nav: false
                        }
                    }
                })
            })

        </script>
        <!-- //script for tesimonials carousel slider -->
        <!-- video popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });

        </script>
        <!-- //video popup -->

        <!-- MENU-JS -->
        <script>
            $(window).on("scroll", function () {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function () {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function () {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });

        </script>
        <!-- //MENU-JS -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });

        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!-- //bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>


    </body>


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:21 GMT -->

</html>