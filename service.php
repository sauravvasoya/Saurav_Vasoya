

<?php
session_start();
require 'connection.php';
require 'user-check.php';
$query_user = mysqli_query($connection,"select * from tbl_usermaster where user_id='{$get_user_id}'");
$get_user = mysqli_fetch_array($query_user);

if($_POST){
    $user_name = $_POST['username'];
    $date = $_POST['date'];
    $phone = $_POST['phonenumber'];
    $address = $_POST['useraddress'];
    $problem = $_POST['problem'];
    
    $q = mysqli_query($connection,"insert into tbl_booking_id (user_id,booking_date,user_contact,serviceman_id,problem_details,booking_status,booking_address) values ('{$user_name}','{$date}','{$phone}','Pending','{$problem}','pending','{$address}')");
    if($q){
        $msg = '<div class="alert alert-success" role="alert">
        Recorded Inserted
      </div>';
    }
}

?>


<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
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

        function gtag() {
            dataLayer.push(arguments);
        }
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
                                Book Service </h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Book Service</li>
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
        <!-- /contacts -->
        <!-- contact-form 2 -->
        <!-- <section class="w3l-contact-2 py-5" id="contact">
        <div class="container py-lg-4 py-md-3 py-2">
            <div class="title-content text-center">
                <h6 class="title-subw3hny mb-1">Get in touch</h6>
                <h3 class="title-w3l mb-5">Contact with our support <br>
                    during emergency!</h3>
            </div> -->

        <div class="contact-grids mt-5 pt-lg-3">
            <div class="contact-left">
                <div class="row cont-details">
                    <div class="col-lg-4 col-md-6 cont-top margin-up">
                        <!-- <div class="cont-left text-center">
                                <span class="fas fa-map-marker-alt"></span>
                            </div> -->
                        <!-- <div class="cont-right">
                                <h6>Office Address:</h6>
                                <li>Shop No.23, Apartment-2</li>
                                    <li>Mithakhali six road</li>
                                    <li>Ahemdabad-380009</li>
                            </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6 cont-top margin-up ps-lg-5">
                        <!-- <div class="cont-left text-center">
                                <span class="fas fa-phone-alt"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Call for help :</h6>
                                <p><a href="tel:(+91) 12345 67890">(+91) 12345 67890</a></p>
                                <p><a href="tel:(+91) 12345 67890">(+91) 12345 67890</a></p>
                            </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6 cont-top margin-up">
                        <!-- <div class="cont-left text-center">
                                <span class="far fa-envelope"></span>
                            </div>
                            <div class="cont-right">
                                <h6>
                                    Mail us:</h6>
                                <p><a href="mailto:support@mail.com" class="mail">support@mail.com</a></p>
                                <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
                            </div> -->
                    </div>
                </div>
            </div>
            <div class="contact-right mt-lg-4">
                <form action="service.php" method="post" id="myform" class="signin-form">
                    <div class="input-grids">



                        

                        <input type="text" name="username" id="w3lName" placeholder="Your Name*" pattern="^[A-Za-z -]+$" minlength="1" class="contact-input" value="<?php echo $get_user["user_id"];?>" required="true">
                        <input type="date" name="date"  placeholder="Booking Date dd/mm/yyyy*"  class="contact-input"  required="">
                        <input type="text" name="phonenumber" id="w3lPhone" placeholder="Enter your Phone Number *" maxlength="10" minlength="10" pattern="[0-9]{10}" value="<?php echo $get_user["phonenumber"];?>" required="">
                        <input type="text" name="useraddress" id="w3lSubect" placeholder="Address*" class="contact-input" value="<?php echo $get_user["user_address"];?>" required="">
                    </div>
                    <div class="form-input">
                        <textarea name="problem" id="w3lMessage" placeholder="Type your issue with the product here*" required=""></textarea>
                    </div>
                    





                    <div class="submit-w3l-button text-lg-right">
                        <button class="btn btn-style btn-primary" href="payment.php">Book Service</button>
                    </div>
                </form>
            </div>
        </div>

        </div>
        </section>
        <!-- /contact-form-2 -->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!-- //contacts -->
        <!--/w3l-footer-29-main-->
        <?php
        include 'footer.php';
        ?>
        <!-- </footer> -->
        <!-- Template JavaScript -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/theme-change.js"></script>
        <script src="mytools/jquery.validate.min.js"></script>
        <!-- cart-js -->
        <script>
            $(document).ready(function() {
                $("#myform").validate();
            });
        </script>
        <style>
            .error {
                color: red;
            }
        </style>
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


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->

</html>