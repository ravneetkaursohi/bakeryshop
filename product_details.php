<?php
error_reporting(0);
session_start();
if (isset($_SESSION['session2']))
    include "user_header.php";
else
    include "public_header.php";
$id = $_REQUEST['q'];
include "connection.php";
$select = "select * from products where p_id=$id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<style>
    #timg {
        margin-bottom: 10px;
        height: 90px;
        width: 90px;
        cursor: pointer;
    }
</style>
<div class="wthreehome-latest">
    <div class="container">
        <div class="row">
            <h2><span class="text-uppercase"> <?php echo $row[1] ?></span></h2>
            <br><br>
            <div class="col-sm-1" style="margin-left:20px;">
                <table>
                    <?php
                    $gallery = "select * from product_gallery where pro_id=$id";
                    $gres = mysqli_query($conn, $gallery);
                    while ($grow = mysqli_fetch_array($gres)) {
                        ?>
                        <tr>
                            <td>                                
                                <img src="<?php echo $grow[1] ?>" id="timg"
                                     onmouseover="enlarge_view(this)" onmouseout="change_img('<?php echo $row[3] ?>')"/>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo $row[3] ?>" id="image" height="500" width="500"/>
            </div>
            <div class="col-sm-5">
                <h2>Product Description</h2>
                <br>         
                
                <?php $amt = ($row[4] / 100) * $row[2]; ?>
                <h3> &#36; <?php echo $row[2] - $amt ?></h3><br>
                <?php
                if ($row[4] != "0.00") {
                    ?>
                    <p class="text-center text-info" style="font-size:18px;font-weight: 600;">
                        <?php echo (int)$row[4] . "% Off"; ?></p><br>
                    <p class="text-center " style="font-weight: 600;text-decoration:line-through;">
                        &#36; <?php echo $row[2] ?></p>
                        
                <?php } else {
                    echo "<br><br>";
                } ?>
                <br>
                <div class="row">
                    <div class="col-sm-7 col-xs-7">
                        <select id="pqty<?php echo $row[0] ?>" class="form-control">
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
                            <button class="btn btn-primary" onclick="addtocart(<?php echo $row[0] ?>)">Add to
                                Cart
                                <span class="glyphicon glyphicon-shopping-cart"></span></button>
                        </h6>
                    </div>
                    
                    <div class="col-sm-4">
                    <?php
                    $gallery = "select * from product_details where p_id=$id";
                    $gres = mysqli_query($conn, $gallery);
                    while($grow = mysqli_fetch_array($gres)){
                ?>
                <br>
                   <h5>INGREDIENTS</h5><br>
                   <p><?php echo $grow[1] ?></p>
                   <?php
                    }
                    ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include "footer.html" ?>
