<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:08:04 GMT -->
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
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <div id="w3lDemoBar" class="w3l-demo-bar">
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
    </div>
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

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
                    <!-- payment -->
                    <h3>Payment</h3>

                    <div class="checkout-right mt-4">
                        <!--Horizontal Tab-->
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li>Cash on delivery (COD)</li>
                                <li>Credit/Debit</li>
                                <li>Netbanking</li>
                                <li>Paypal Account</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">

                                <div>
                                    <div class="vertical_post check_box_agile pb-lg-5 pb-4">
                                        <h5>COD</h5>
                                        <div class="checkbox">
                                            <div class="check_box_one cashon_delivery">
                                                <label class="anim">
                                                    <input type="checkbox" class="checkbox">
                                                    <span class="pl-2"> We also accept Credit/Debit card on delivery. Please Check with the
                                                        agent.</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <form action="#" method="post" class="creditly-card-form agileinfo_form information-wrapper">
                                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                            <div class="credit-card-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Name on Card</label>
                                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                                    </div>
                                                    <div class="w3_agileits_card_number_grids">
                                                        <div class="w3_agileits_card_number_grid_left">
                                                            <div class="controls">
                                                                <label class="control-label">Card Number</label>
                                                                <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="w3_agileits_card_number_grid_right">
                                                            <div class="controls">
                                                                <label class="control-label">CVV</label>
                                                                <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                            </div>
                                                        </div>
                                                        <div class="clear"> </div>
                                                    </div>
                                                    <div class="controls">
                                                        <label class="control-label">Expiration Date</label>
                                                        <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                                    </div>
                                                </div>
                                                <button class="submit btn btn-style btn-primary mt-4">Make a payment</button>

                                            </div>
                                        </section>
                                    </form>

                                </div>
                                <div>
                                    <div class="vertical_post">
                                        <form action="#" method="post">
                                            <h5>Select From Popular Banks</h5>
                                            <div class="swit-radio mt-4">
                                                <div class="check_box_one">
                                                    <div class="radio_one"> <label><input type="radio" name="radio" checked=""><i></i>Syndicate Bank</label> </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one"> <label><input type="radio" name="radio"><i></i>Bank of Baroda</label> </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one"> <label><input type="radio" name="radio"><i></i>Canara Bank</label> </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one"> <label><input type="radio" name="radio"><i></i>ICICI Bank</label> </div>
                                                </div>
                                                <div class="check_box_one">
                                                    <div class="radio_one"> <label><input type="radio" name="radio"><i></i>State Bank Of India</label> </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <h5>Or SELECT OTHER BANK</h5>
                                            <div class="section_room_pay mt-4">
                                                <select class="year py-3">
                                                    <option value="">=== Other Banks ===</option>
                                                    <option value="ALB-NA">Allahabad Bank NetBanking</option>
                                                    <option value="ADB-NA">Andhra Bank</option>
                                                    <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
                                                    <option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
                                                    <option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
                                                    <option value="BOI-NA">Bank of India NetBanking</option>
                                                    <option value="BOM-NA">Bank of Maharashtra NetBanking</option>
                                                    <option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
                                                    <option value="CBI-NA">Central Bank of India</option>
                                                    <option value="CUB-NA">City Union Bank NetBanking</option>
                                                    <option value="CRP-NA">Corporation Bank</option>
                                                    <option value="DBK-NA">Deutsche Bank NetBanking</option>
                                                    <option value="DCB-NA">Development Credit Bank</option>
                                                    <option value="DC2-NA">Development Credit Bank - Corporate</option>
                                                    <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
                                                    <option value="FBK-NA">Federal Bank NetBanking</option>
                                                    <option value="IDS-NA">Indusind Bank NetBanking</option>
                                                    <option value="IOB-NA">Indian Overseas Bank</option>
                                                    <option value="ING-NA">ING Vysya Bank (now Kotak)</option>
                                                    <option value="JKB-NA">Jammu and Kashmir NetBanking</option>
                                                    <option value="JSB-NA">Janata Sahakari Bank Limited</option>
                                                    <option value="KBL-NA">Karnataka Bank NetBanking</option>
                                                    <option value="KVB-NA">Karur Vysya Bank NetBanking</option>
                                                    <option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
                                                    <option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
                                                    <option value="CPN-NA">PNB Corporate NetBanking</option>
                                                    <option value="PNB-NA">PNB NetBanking</option>
                                                    <option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card
                                                    </option>
                                                    <option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
                                                    <option value="SWB-NA">Saraswat Bank NetBanking</option>
                                                    <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
                                                    <option value="SBH-NA">SB Hyderabad NetBanking</option>
                                                    <option value="SBM-NA">SB Mysore NetBanking</option>
                                                    <option value="SBT-NA">SB Travancore NetBanking</option>
                                                    <option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
                                                    <option value="SIB-NA">South Indian Bank NetBanking</option>
                                                    <option value="SBP-NA">State Bank of Patiala NetBanking</option>
                                                    <option value="SYD-NA">Syndicate Bank NetBanking</option>
                                                    <option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking
                                                    </option>
                                                    <option value="UCO-NA">UCO Bank NetBanking</option>
                                                    <option value="UBI-NA">Union Bank NetBanking</option>
                                                    <option value="UNI-NA">United Bank of India NetBanking</option>
                                                    <option value="VJB-NA">Vijaya Bank NetBanking</option>
                                                </select>
                                            </div>
                                            <button class="submit btn btn-style btn-primary mt-4">Pay Now</button>

                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <div id="tab4" class="tab-grid" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- <img class="pp-img img-fluid" src="assets/images/paypal.png" alt="Image Alternative text" title="Image Title"> -->
                                                <p>Important: You will be redirected to PayPal's website to securely
                                                    complete your payment.</p><a class="btn btn-style btn-primary mt-4">Checkout via
                                                    Paypal</a>
                                            </div>
                                            <div class="col-md-6">
                                                <form class="cc-form information-wrapper">
                                                    <div class="clearfix">
                                                        <div class="form-group form-group-cc-number">
                                                            <label>Card Number</label>
                                                            <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text"><span class="cc-card-icon"></span>
                                                        </div>
                                                        <div class="form-group form-group-cc-cvc">
                                                            <label>CVV</label>
                                                            <input class="form-control" placeholder="xxxx" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                        <div class="form-group form-group-cc-name">
                                                            <label>Card Holder Name</label>
                                                            <input class="form-control" type="text">
                                                        </div>
                                                        <div class="form-group form-group-cc-date">
                                                            <label>Valid Thru</label>
                                                            <input class="form-control" placeholder="mm/yy" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <div class="check_box_one pament-check vertical_post">
                                                            <label class="anim">
                                                                <input type="checkbox" class="checkbox checkboxpay">
                                                                <span class="pe-2"> Add to My
                                                                    Cards</span>
                                                            </label>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <button class="submit btn btn-style btn-primary mt-4">Proceed Payment </button>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Plug-in Initialisation-->
                        <!-- // Pay -->
                    </div>
                </div>
            </div>
            <!-- //payment -->
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
    <!-- js -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- easy-responsive-tabs -->
    <script src="assets/js/easyResponsiveTabs.js"></script>
    <!-- //easy-responsive-tabs -->
    <script type="text/javascript">
        $(document).ready(function() {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });

    </script>
    <!-- credit-card -->
    <script type="text/javascript" src="assets/js/creditly.js"></script>

    <script type="text/javascript">
        $(function() {
            var creditly = Creditly.initialize(
                '.creditly-wrapper .expiration-month-and-year',
                '.creditly-wrapper .credit-card-number',
                '.creditly-wrapper .security-code',
                '.creditly-wrapper .card-type');

            $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                    // Your validated credit card output
                    console.log(output);
                }
            });
        });

    </script>
    <!-- //credit-card -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:09:07 GMT -->
</html>
