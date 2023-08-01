<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
require 'connection.php';
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AC Buy & Service</title>
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
                            Products </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <!--/w3l-ecommerce-main-->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <div class="ecommerce-grids row">
                    <div class="ecommerce-left-hny col-lg-4">
                        <!--/ecommerce-left-hny-->
                        <aside class="pe-lg-4">
                            <div class="sider-bar">
                                <!-- /Gallery-imgs -->

                                <div class="single-gd mb-5">
                                    <h4>Product Categories</h4>
                                    <ul class="list-group single">
                                        <?php
                                        $query_c = mysqli_query($connection,"select * from tbl_category order by category_name asc");
                                        while($row_c = mysqli_fetch_array($query_c))
                                        {
                                        ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="products.php?cid=<?php echo $row_c["category_id"];?>"><?php echo $row_c["category_name"];?></a>
                                            <!-- <span class="badge badge-primary badge-pill">14</span> -->
                                        </li>
                                        <?php } ?>
                                     
                                    </ul>
                                </div>
                                <!-- <div class="single-gd mb-5">
                                    <h4>Filter by Price</h4>

                                    <ul class="dropdown-vjm-transitu6">
                                        <li>

                                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header" style="left: 0.555556%; width: 18.5556%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0.555556%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 66.6667%;"></a>
                                                <div class="ui-slider-range ui-widget-header" style="left: 0.555556%; width: 66.1111%;"></div>
                                            </div>
                                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">
                                        </li>
                                    </ul>


                                    //Gallery-imgs
                                </div> -->

                           
                            </div>
                        </aside>
                        <!--//ecommerce-left-hny-->
                    </div>
                    <!-- /row-->
                    <div class="ecommerce-right-hny col-lg-8">
                        
                        <div class="ecom-products-grids row">
                            <?php
                            if(isset($_GET["cid"]))
                            {
                                $cid=$_GET["cid"];
                                $search_c = "where category_id='{$cid}'";
                            }
                            else{
                                $search_c ="";
                            }
                            $query_product = mysqli_query($connection, "select * from tbl_product $search_c order by product_id desc");
                            $count_product = mysqli_num_rows($query_product);
                            if($count_product>0){
                            while($row = mysqli_fetch_array($query_product))
                            {
                                ?>
                            <div class="col-lg-4 col-6 product-incfhny mt-4">
                                <div class="product-grid2 shopv">
                                    <div class="product-image2">
                                        <a href="product-single.php?id=<?php echo $row["product_id"];?>">
                                            <img class="pic-1 img-fluid radius-image" src="../admin/uploads/<?php echo $row["product_image"];?>">
                                            <img class="pic-2 img-fluid radius-image" src="../admin/uploads/<?php echo $row["product_image"];?>">
                                        </a>
                                        <ul class="social">
                                            <li><a href="product-single.php?id=<?php echo $row["product_id"];?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                            <li><a href="cart-list.php" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                            </li>
                                        </ul>
                                        <div class="shopv single-item">
                                            <form action="cart-add.php" method="post">
                                                
                                                <input type="hidden" name="product_id" value="<?php echo $row["product_id"];?>">
                                           
                                                <button type="submit" name="submit" class="shopv-cart pshopv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="product-single.php?id=<?php echo $row["product_id"];?>"><?php echo $row["product_name"];?> </a></h3>
                                        <span class="price"><del>₹<?php echo $row["product_price"]+100;?></del>₹<?php echo $row["product_price"];?></span>
                                    </div>
                                </div>
                            </div>    
                                <?php
                            }}else{echo "<h1>No Product Found</h1>";}
                            ?>
                            <!-- <div class="col-lg-4 col-6 product-incfhny mt-4">
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
                                                <input type="hidden" name="amount" value="899.99">
                                                <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="product-single.php">Voltas Split AC </a></h3>
                                        <span class="price"><del>₹45000.00</del>₹40000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 product-incfhny mt-4">
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
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"><a href="product-single.php">Voltas Window AC</a></h3>
                                        <span class="price"><del>₹32999.00</del>₹30999.00</span>
                                    </div>
                                </div>

                            </div> -->
                      

                        </div>
                       
                        <!-- <div class="pagination">
                            <ul>
                                <li class="prev"><a href="#page-number"><span class="fa fa-angle-double-left"></span></a></li>
                                <li><a href="#page-number" class="active">1</a></li>
                                <li><a href="#page-number">2</a></li>
                                <li><a href="#page-number">3</a></li>

                                <li class="next"><a href="#page-number"><span class="fa fa-angle-double-right"></span></a></li>
                            </ul>
                        </div> -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:33 GMT -->
</html>
