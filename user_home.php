<?php
include "user_header.php";
include "connection.php";
$select = "select * from products order by p_id desc";
$res = mysqli_query($conn, $select);
?>

<!-- Latest-Arrivals -->
<div class="wthreehome-latest">
    <div class="container">

        <div class="wthreehome-latest-grids">
            <?php
            $pro = "select * from products order by p_id desc";
            $pro_res = mysqli_query($conn, $pro);
            while ($pro_row = mysqli_fetch_array($pro_res)) {
                ?>
                <div class="col-md-4 wthreehome-latest-grid wthreehome-latest-grid1">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <img src="<?php echo $pro_row[3] ?>" style="width:350px;height: 350px;"
                                 alt="Urban Crave"><br>
                           <a href="product_details.php?q=<?php echo $pro_row[0] ?>"><figcaption></figcaption></a>
                        </figure>
                    </div>
                    <h4 class="text-uppercase"><?php echo $pro_row[1] ?></h4>
                    <?php $amt = ($pro_row[4] / 100) * $pro_row[2]; ?>
                    <h5>&#36; <?php echo $pro_row[2] - $amt ?></h5>
                    <?php
                    if ($pro_row[4] != "0.00") {
                        ?>
                        <p class="text-center text-info" style="font-weight: 600;">
                            <?php echo (int)$pro_row[4] . "% Off"; ?></p>
                        <p class="text-center " style="font-weight: 600;text-decoration:line-through;">
                        &#36; <?php echo $pro_row[2] ?></p>
                    <?php }
                    else{echo "<br><br>";}?>
                    <div class="row">
                        <div class="col-sm-7 col-xs-7">
                            <select id="pqty<?php echo $pro_row[0] ?>" class="form-control">
                                <option value="">Quantity</option>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    ?>
                                    <option><?php echo $i ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-4 col-xs-4">
                            <h6>
                                <button class="btn btn-primary" onclick="addtocart(<?php echo $pro_row[0] ?>)">Add to Cart
                                    <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </h6>
                        </div>
                    </div>


                </div>
                <?php
            }
            ?>


        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- //Latest-Arrivals -->
<?php include "footer.html" ?>


