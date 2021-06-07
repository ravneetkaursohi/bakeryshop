<?php
session_start();
if (is_null($_SESSION['session1']))
    header("location:admin_login.php");


?>
<head>
    <title>Urban Crave- Admin Panel</title>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //Meta-Tags -->

    <!-- Custom-StyleSheet-Links -->
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- Header-Slider-CSS -->
    <link rel="stylesheet" href="css/fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
    <!-- //Custom-StyleSheet-Links -->


    <!-- Font-Awesome-File-Links -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- TTF -->
    <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Supportive-Modernizr-JavaScript -->
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Default-JavaScript -->
    <script src="js/jquery-2.2.3.js"></script>
</head>


<!-- Header -->
<div class="agileheader" id="agileitshome" style="background-color: #e2122a;">
    <!-- Navigation -->
    <nav class="navbar navbar-default w3ls navbar-fixed-top" style="background-color: #e2122a;">
        <div class="container-fluid">
            <div class="navbar-header wthree nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <ul class="w3header-cart">
                    <li class="wthreecartaits"><span class="my-cart-icon"><i class="fa fa-cart-arrow-down"
                                                                             aria-hidden="true"></i>
                            <span class="badge badge-notify my-cart-badge"></span></span></li>
                            
                </ul>
            </div>
            <div id="bs-megadropdown-tabs" class="navbar-collapse collapse">
            
                <?php
                if ($_SESSION['usertype'] == "Admin") {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin.php">Dashboard</a></li>
                        <li class="dropdown">                        
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span> Admin </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="add_admin.php">Add New Admin</a> </li>
                                            <li class="heading"><a href="view_admin.php">View Admins</a> </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span> Categories </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="category.php">Add Category</a></li>
                                            <li class="heading"><a href="view_category.php">View Category</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Sub- Categories </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="sub_category.php">Add Sub Category</a></li>
                                            <li class="heading"><a href="view_subcategory.php">View Sub-Category</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Products </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="product.php">Add Product</a></li>
                                            <li class="heading"><a href="view_product.php">View Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Orders </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="orders.php">View Pending Orders</a></li>
                                            <li class="heading"><a href="dispatched_orders.php">View Dispatch Orders</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Deals </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="add_deals.php">Add Deals</a></li>
                                            <li class="heading"><a href="view_deals.php">View Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li ><a href="changeadmin_password.php">Change Password</a> </li>
                        <li ><a href="admin_logout.php">LogOut</a> </li>
                        <li><a  style="background-color: black;color:white;">Welcome, <?php echo $_SESSION['session1'] ?></a></li>
                    </ul>
                    <?php
                } else {
?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span> Admin </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="view_admin.php">View Admins</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span> Categories </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="view_category.php">View Category</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Sub- Categories </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="view_subcategory.php">View Sub-Category</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Products </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="product.php">Add Product</a></li>
                                            <li class="heading"><a href="view_product.php">View Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Orders </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="dispatched_orders.php">View Dispatched Orders</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle w3-agile hyper"
                               data-toggle="dropdown"><span>Deals </span></a>
                            <ul class="dropdown-menu aits-w3 multi multi1">
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div
                                        class="col-sm-10 w3layouts-nav-agile w3layouts-mens-nav-agileits w3layouts-mens-nav-agileits-1">
                                        <ul class="multi-column-dropdown">
                                            <li class="heading"><a href="add_deals.php">Add Deals</a></li>
                                            <li class="heading"><a href="view_deals.php">View Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </ul>
                        </li>
                        <li><a href="changeadmin_password.php">Change Password</a></li>
                        <li><a href="admin_logout.php">LogOut</a></li>
                        <li><a style="background-color: black;color:white;">Welcome, <?php echo $_SESSION['session1'] ?></a>
                        </li>
                    </ul>
                <?php
                }
                ?>

            </div>

        </div>
    </nav>
    <!-- //Navigation -->
</div>
<!-- //Header -->


<br><br>
