<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
require 'connection.php';
require 'user-check.php';

if(isset($_POST["delete_product"]))
{
    
    $cart_id=$_POST["cart_id"];
    
    $query_ins = mysqli_query($connection,"DELETE FROM `tbl_cart` WHERE `cart_id`='{$cart_id}'");
    if($query_ins)
    {
        echo "<script>alert('Your product remove from cart succesfully');window.location='cart-list.php';</script>";
    }
    
    else{
        echo "<script>alert('Something went wrong!');window.location='cart-list.php';</script>";
    }    
    
} 

if(isset($_POST["update_product"]))
{
    
    $cart_id=$_POST["cart_id"];
    $cart_qty=$_POST["cart_qty"];
    $query_ins = mysqli_query($connection,"UPDATE `tbl_cart` SET cart_qty='{$cart_qty}' WHERE `cart_id`='{$cart_id}'");
    if($query_ins)
    {
        echo "<script>alert('Your product update from cart succesfully');window.location='cart-list.php';</script>";
    }
    
    else{
        echo "<script>alert('Something went wrong!');window.location='cart-list.php';</script>";
    }    
    
} 
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
    AC Buy & Service
    </title>
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
                            Cart </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Cart </li>
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
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <!-- about -->
                <div class="ecom-contenthny-w3lcheckout privacy">
                <?php
                        $query_cart = mysqli_query($connection,"select * from tbl_cart where user_id='{$get_user_id}'");
                        $count_cart=mysqli_num_rows($query_cart);
                        if($count_cart>0)
                        {

                         
                        
                        ?>
                    <div class="checkout-right">
                        
                        <table class="timetable_sub">
                            <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Iamge</th>
                                    <th>Product Name</th>
                                    <th>Qty</th>
                                   <th>Price</th>
                                   <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=1;
                                while($row= mysqli_fetch_array($query_cart)){ 
                                    $query_product = mysqli_query($connection,"select * from tbl_product where product_id='{$row["product_id"]}'");
                                    $product_data=mysqli_fetch_array($query_product);

                                    $product_price=$product_data["product_price"];
                                    $cart_qty=$row["cart_qty"];
                                    $total = $product_price*$cart_qty;
                                
                                ?>
                                <tr class="rem1">
                                    <td class="invert"><?php echo $i++;?></td>
                                    <td class="invert-image"><a href="product-single.php">
                                            <img src="../admin/uploads/<?php echo $product_data["product_image"];?>" style="width:100px;" class="img-fluid radius-image" alt=""></a></td>
                                    
                                            <td class="invert"><?php echo $product_data["product_name"];?></td>

                                            <td class="invert">
                                             
                                             <form method="post" action="cart-list.php">
                                            <input type="hidden" name="cart_id" value="<?php echo $row["cart_id"];?>">
                                            <input type="number" name="cart_qty" min="1" max="5" value="<?php echo $cart_qty;?>" style="width:100px;">
                                        <button type="submit" name="update_product" class="btn btn-success btn-sm">Update</button>
                                   
                                            </td>
                                    <td class="invert">₹<?php echo $product_data["product_price"];?></td>
                                    <td>₹<?php echo $total;?></td>
                                    <td class="invert">
                                        
                                        <form method="post" action="cart-list.php">
                                            <input type="hidden" name="cart_id" value="<?php echo $row["cart_id"];?>">
                                        <button type="submit" name="delete_product" class="btn btn-danger btn-sm"><i class="far fa-window-close"></i></button>
                                
                                        </form>

                                    </td>
                                </tr>
                                <?php } ?>
                              

                            </tbody>
                        </table>
                     
                    </div>
                    <div class="row checkout-left mt-5">
                        <div class="col-md-4 checkout-left-basket">
                            <!-- <h4>Continue to basket</h4>
                            <ul>
                                <li>Product1 <i>-</i> <span>₹40,000.00 </span></li>
                                <li>Product2 <i>-</i> <span>₹30,999.00 </span></li>
                                <li>Product3 <i>-</i> <span>₹28,000.00 </span></li>
                                <li>Total Service Charges <i>-</i> <span>₹30.00</span></li>
                                <li>Total <i>-</i> <span>₹99,029.00</span></li>
                            </ul> -->
                        </div>
                        <div class="col-md-8 address_form_agile ps-lg-5">
                            <!-- <h4>Add a new Details</h4> -->
                            <form action="payment.php" method="post" id="myform" class="creditly-card-form agileinfo_form mt-4">
                                
                                <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                    <div class="information-wrapper">
                                        <!-- <div class="first-row form-group">
                                            <div class="controls">

                                                <input class="billing-address-name form-control" type="text" name="name" pattern="^[A-Za-z -]+$" minlength="3" placeholder="Full name" required="">
                                            </div>
                                            <div class="w3_agileits_card_number_grids">
                                                <div class="w3_agileits_card_number_grid_left">
                                                    <div class="controls">

                                                        <input class="form-control" type="text" maxlength="10" minlength="10" pattern="[0-9]{10}" placeholder="Mobile number" required>
                                                    </div>
                                                </div>
                                                <div class="w3_agileits_card_number_grid_right">
                                                    <div class="controls">

                                                        <input class="form-control" type="text" placeholder="Landmark" required>
                                                    </div>
                                                </div>
                                                <div class="clear"> </div>
                                            </div>
                                            <div class="controls">

                                                <input class="form-control" type="text" placeholder="Town/City" required>
                                            </div>
                                            <div class="controls">

                                                <select class="form-control option-w3ls" required>
                                                    <option>Office</option>
                                                    <option>Home</option>
                                                    <option>Commercial</option>

                                                </select>
                                            </div>
                                        </div> -->
                                        <a class="submit check_out btn btn-style btn-success" href="products.php" >Shop Now</a>
                                        <a class="submit check_out btn btn-style btn-primary" href="checkout.php">Checkout Process</a>
                                    </div>
                                </section>
                            </form>
                           
                        </div>
                    </div>
                    <?php }
                    else{
                           ?>
                           <h1>Your Cart is Empty</h1>
                           <br>
                           <a href="products.php" class="btn btn-success">Shop Now</a>
                           <?php
                        } 
                        ?>
                </div>
                <!-- //about -->
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
    <script src="mytools/jquery.validate.min.js"></script>
        <!-- cart-js -->
        <script>

            $(document).ready(function(){
                $("#myform").validate();
            });
        </script>
        <style>
            .error{
                color:red;
            }
        </style>
    <!-- js -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });

    </script>
    <!--quantity-->
    <script>
        $(document).ready(function(c) {
            $('.close1').on('click', function(c) {
                $('.rem1').fadeOut('slow', function(c) {
                    $('.rem1').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close2').on('click', function(c) {
                $('.rem2').fadeOut('slow', function(c) {
                    $('.rem2').remove();
                });
            });
        });

    </script>
    <script>
        $(document).ready(function(c) {
            $('.close3').on('click', function(c) {
                $('.rem3').fadeOut('slow', function(c) {
                    $('.rem3').remove();
                });
            });
        });

    </script>

    <!-- //js -->
    <!-- cart-js -->
    <script src="assets/js/minicart.js"></script>
    <script>
        shopv.render();

        shopv.cart.on('shopv_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
</html>
