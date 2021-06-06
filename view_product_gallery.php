<?php
include "admin_header.php";
include "connection.php";
$pro = $_REQUEST['q'];
$select = "select * from product_gallery where pro_id=$pro";
$res = mysqli_query($conn, $select);
?>
<div class="wthreehome-latest">
    <div class="container">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <img src="<?php echo $row[1] ?>" style="height: 40%;width:80%;" class="img-responsive" />
                    <br>
                    <a href="delete_photo.php?q=<?php echo $row[0] ?>&p=<?php echo $pro ?>">Delete</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include "admin_footer.php" ?>


