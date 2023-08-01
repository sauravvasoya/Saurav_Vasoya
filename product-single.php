<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
require 'connection.php';
if(isset($_GET["id"]))
{$id=$_GET["id"];}
else{
    $id="";
}
$query_product = mysqli_query($connection, "select * from tbl_product where product_id='{$id}' order by product_id desc");
                            $count_product = mysqli_num_rows($query_product);
 if($count_product==0)
 {
    header("location:products.php");
 }                           
 $row = mysqli_fetch_array($query_product);

 $query_category = mysqli_query($connection, "select * from tbl_category where category_id='{$row["category_id"]}'");
 $row_category = mysqli_fetch_array($query_category);

 $query_brand = mysqli_query($connection, "select * from tbl_brand where brand_id='{$row["brand_id"]}'");
 $row_brand = mysqli_fetch_array($query_brand);
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
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
  padding-top:70px;
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
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
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
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>


    <!--/Header-->
    <?php
            include 'header.php';
        ?>
    <!--//Header-->
    <section class="w3mid-gap"></section>
    <!--/Banner-Start-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Single </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Product Detail</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!--/w3l-ecommerce-main-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <!--/row1-->
                <div class="sp-store-single-page row">
                    <div class="col-lg-5 single-right-left">
                        <div class="flexslider1">

                            <ul class="slides">
                                <li data-thumb="../admin/uploads/<?php echo $row["product_image"];?>">
                                    <div class="thumb-image"> <img src="../admin/uploads/<?php echo $row["product_image"];?>" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <!-- <li data-thumb="assets/images/cart2.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart2.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <li data-thumb="assets/images/cart3.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart3.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <li data-thumb="assets/images/cart4.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart4.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li> -->
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="eco-buttons mt-5 d-flex">

                            <div class="shopv1 single-item">
                                <form action="cart-add.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $row["product_id"];?>">
                                  
                                  
                                    <!-- shopv-cart pshopv-cart add-to-cart btn btn-style btn-primary -->
                                    <button type="submit" name="submit" class="btn btn-style btn-primary">
                                        Add to Cart
                                    </button>
                                    
                                </form>
                            </div>
                            <!-- <div class="buyhny-now"> <a href="#buy" class="btn btn-style btn-primary">Buy Now </a></div> -->

                        </div>
                    </div>
                    <div class="col-lg-7 single-right-left ps-lg-5">
                        <h3><?php echo $row["product_name"];?> 
                        </h3>
                        <div class="caption">

                            <ul class="rating-single">
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                               <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                    </a>
                                </li>
                            </ul>

                            <h6>
                                <span class="item_price">₹<?php echo $row["product_price"];?></span>
                                <del>₹<?php echo $row["product_price"]+100;?></del> Free Delivery
                            </h6>
                        </div>
                        <!-- <div class="desc_single my-4">
                            <ul class="emi-views">
                                <li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
                                <li><span>Bank Offer</span> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card</li>
                                <li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
                                <li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li>
                            </ul>
                        </div> -->
                        <div class="desc_single mb-4">
                            <h5>Description:</h5>
                            <p><?php echo $row["product_details"];?> 
                            </p>
                        </div>
                        <div class="description-apt d-grid mb-4">
                            <div class="occasional">
                                <h5 class="sp_title mb-3">Highlights:</h5>
                                <ul class="single_specific">
                                    <li>
                                        Category : <?php echo $row_category["category_name"];?></li>
                                    <li>
                                        Brand : <?php echo $row_brand["brand_name"];?></li>

                                    
                                    <!-- <li> Material : Pure Cutton</li> -->

                                </ul>

                            </div>

                            <!-- <div class="color-quality">
                                <h5 class="sp_title">Services:</h5>
                                <ul class="single_serv">
                                    <li>
                                        <a href="#">30 Day Return Policy</a>
                                    </li>
                                    <li class="gap">
                                        <a href="#">Cash on Delivery available</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <!-- <div class="description mb-4">
                            <h5>Check delivery, payment options and charges at your location</h5>
                            <form action="#" class="d-flex" method="post">
                                <input type="text" placeholder="Enter pincode" required>
                                <button class="submit btn btn-style btn-primary ms-3" type="submit">Check</button>
                            </form>
                        </div> -->

                    </div>
                </div>
            </div>
            <!--//row1-->

        </div>
    </section>
    <!-- <section class="w3l-witemshny-main py-5">
        <div class="container py-md-4">
            <h3 class="title-w3l">New Collections</h3>
            
            <div class="witemshny-grids row mt-lg-3">
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d1.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Formal Wear</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d2.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Active Wear</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d3.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 40% Off on Shoes</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d4.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 50% Off on Shirts</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d5.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 50% Off on Clothing</a>
                    </h4>
                </div>
                <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                    <div class="weitemshny-grid oposition-relative">
                        <a href="products-1.php" class="d-block zoom"><img src="assets/images/d6.jpg" alt="" class="img-fluid news-image"></a>
                        <div class="witemshny-inf">
                        </div>
                    </div>
                    <h4 class="gdnhy-1 mt-4"><a href="products-1.php">Min. 60% Off on Sandles</a>
                    </h4>
                </div>
            </div>
        

        </div>
    </section> -->
    <!--/w3l-ecommerce-main-->
    <!-- //products-->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="title-w3l">Featured Products</h3>
                <p class="">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-4 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 shopv">
                            <div class="product-image2">
                                <a href="product-single.php">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-1.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-1.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.php" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Voltas Split AC">
                                        <input type="hidden" name="amount" value="1899.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.php">Voltas Split AC </a></h3>
                                <span class="price"><del>₹32,000.00</del>₹30,000.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.php">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-2.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-2.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.php" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Voltas Window AC">
                                        <input type="hidden" name="amount" value="1399.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.php">Voltas Window AC</a></h3>
                                <span class="price"><del>₹30,000.00</del>₹28,000.00</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.php">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-3.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-3.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.php" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Croma Portable AC">
                                        <input type="hidden" name="amount" value="1999.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.php">Croma Portable AC </a></h3>
                                <span class="price"><del>₹25,000.00</del>₹21,999.00</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="product-single.php">
                                    <img class="pic-1 img-fluid radius-image" src="assets/images/shop-5.jpg">
                                    <img class="pic-2 img-fluid radius-image" src="assets/images/shop-5.jpg">
                                </a>
                                <ul class="social">
                                    <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                    <li><a href="products.php" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                    </li>
                                </ul>
                                <div class="shopv single-item">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="shopv_item" value="Blue Star Split AC">
                                        <input type="hidden" name="amount" value="1399.99">
                                        <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="product-single.php">Blue Star Split AC </a></h3>
                                <span class="price"><del>₹34,000.00</del>₹32,000.00</span>
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
    <!--/w3l-footer-29-main-->
    <?php
        include 'footer.php';
    ?>
    <!-- end footer  -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- FlexSlider -->
    <!-- price range (top products) -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script>
        //<![CDATA[ 
        $(window).load(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>

    </script>
    <!-- //price range (top products) -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <!-- single -->
    <script src="assets/js/imagezoom.js"></script>
    <!-- single -->
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

    </script>
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        // shopv.render();

        // shopv.cart.on('shopv_checkout', function(evt) {
        //     var items, len, i;

        //     if (this.subtotal() > 0) {
        //         items = this.items();

        //         for (i = 0, len = items.length; i < len; i++) {}
        //     }
        // });

    </script>
    <!-- //cart-js -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>


</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:35 GMT -->
</html>
