<?php
error_reporting(0);
session_start();
if(isset($_SESSION['session2']))
    include "user_header.php";
else
include("public_header.php");
?>
<div class="wthreehome-latest">
    <div class="container">
        <h2>Choose Payment Method</h2>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="payment_action.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <?php if (isset($_SESSION['payment_method'])) {
                            $method = $_SESSION['payment_method'];
                            echo "<h4>Payment Method : " . strtoupper($method) . "</h4>";
                        }
                        ?>

                        <input type="radio"
                               value="cod" <?php if (isset($_SESSION['payment_method']) && $_SESSION['payment_method'] == "cod") echo "checked" ?>
                               name="payment_method" id="cod"/>
                        <label for="cod">Cash on Delivery</label>
                        

                    </div>
                    <div class="form-group">
                        <input type="submit" style="float: right;" class="btn btn-primary" value="PROCEED FOR PAYMENT"/>
                    </div>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>

    </div>
</div>
<?php include "footer.html" ?>
