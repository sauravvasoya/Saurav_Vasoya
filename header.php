 <!--/Header-->
 <header id="site-header" class="fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                    <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="#">
                            <span class="w3yellow">AC </span>BUY & SERVICE
                        </a></h1>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link" href="products.php">Products</a>

                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item pt-2" href="products.php">Products</a></li>
                                    <li><a class="dropdown-item" href="product-single.php">Product Single</a></li>
                                    <li><a class="dropdown-item" href="checkout.php">Cart Page</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.php">Service</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="contact.php" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                     Service <span class="fa fa-angle-down ms-1"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item pt-2" href="blog.php">Blog Page</a></li>
                                    <li><a class="dropdown-item" href="blog-single.php">Blog Single</a></li>
                                    <li><a class="dropdown-item" href="elements.php">Elements</a></li>
                                    <li><a class="dropdown-item" href="error.php">Error Page</a></li>
                                    <li><a class="dropdown-item" href="faq.php">FaQ</a></li>

                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item search-right">
                                <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2"
                                        aria-hidden="true"></span></a>
                                <!-- search popup -->
                                <div id="search" class="pop-overlay">
                                    <div class="popup">
                                        <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                        <form action="#" method="GET" class="search-box d-flex position-relative">
                                            <input type="search" placeholder="Enter Keyword here" name="search"
                                                required="required" autofocus="">
                                            <button type="submit" class="btn"><span class="fas fa-search"
                                                    aria-hidden="true"></span></button>
                                        </form>
                                    </div>
                                    <a class="close" href="#close">×</a>
                                </div>
                                <!-- /search popup -->
                            </li>
                        </ul>
                        <!--/search-right-->

                    </div>
                    <?php 

if(!isset($_SESSION['userid']))
{
?>
  <ul class="header-search me-lg-4 d-flex">
                        <li class="get-btn me-2">
                            <a href="login.php" class="btn btn-style btn-primary" title="search"><i
                                    class="fas fa-user me-lg-2"></i> <span class="btn-texe-inf">Login</span></a>
                        </li>
                        <!-- <li class="shopvcart galssescart2 cart cart box_1 get-btn">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_shopv_cart" type="submit" name="submit" value="">
                                    <span class="fas fa-shopping-bag me-lg-2"></span> <span
                                        class="btn-texe-inf">Cart</span>

                                </button>
                            </form>
                        </li> -->
                    </ul>
<?php
}else if(isset($_SESSION['userid']))
{

    ?>

<ul class="header-search me-lg-4 d-flex">
                        <!-- <li class="get-btn me-2">
                            <a href="#" class="btn btn-style btn-primary" title="search">
                                 <span class="btn-texe-inf">Profile</span></a>
                            
                        </li> -->
                        
                        <li class="nav-item dropdown">
                                <a class="btn btn-style btn-primary" href="#Pages" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" ><i
                                    class="fas fa-user me-lg-2"></i>
                                    Profile <span class="fa fa-angle-down ms-1"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <!-- <li><a class="dropdown-item pt-2" href="#">My Account</a></li> -->
                                    <li><a class="dropdown-item" href="profile.php">Edit Profile</a></li>
                                    <li><a class="dropdown-item" href="order.php">My Order</a></li>
                                    <li><a class="dropdown-item" href="booking.php">My Booking</a></li>
                                    <li><a class="dropdown-item pt-2" href="cart-list.php">My Cart</a></li>
                                    <li><a class="dropdown-item" href="changepassword.php">Change Password</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                        </li> 
                    </ul> 
<?php
}

?>
                  
                    <!--//search-right-->
                    <!-- toggle switch for light and dark theme -->
                    <div class="mobile-position">
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                                    <input type="checkbox" id="checkbox">
                                    <div class="mode-container">
                                        <i class="gg-sun"></i>
                                        <i class="gg-moon"></i>
                                    </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                    <!-- //toggle switch for light and dark theme -->
                </nav>
            </div>
        </header>
        <!--//Header-->