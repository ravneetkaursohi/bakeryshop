
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta-charset="utf-8">
        <title>Urban Crave</title>

        <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- jQuery Validate JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
            integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
            crossorigin="anonymous"></script>
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


<div class="wthreehome-latest" style="height:100%">
    <div class="container">
        <h1>Admin Login</h1>
        <form action="admin_action.php" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Username</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">User Type</label>
                    <select name="type" class="form-control" required>
                        <option>Choose one</option>
                        <option>Admin</option>
                        <option>Sub Admin</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary" value="LOGIN"/>
                    <?php
                    if (isset($_REQUEST['msg']))
                        echo $_REQUEST['msg'];
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "admin_footer.php" ?>

