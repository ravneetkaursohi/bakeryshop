<?php
include "public_header.php";
?>

<div class="wthreehome-latest">
    <div class="container">
        <h1>Deals</h1> <br>
        <?php
        include "connection.php";
        $select="select * from deals order by deals_id desc";
        $res=mysqli_query($conn,$select);
        ?>
        <div class="row">
            <?php
            while ($row=mysqli_fetch_array($res)){
                ?>
                <div class="col-sm-6" style="margin-bottom: 10px;">
                    <div class="bg-primary text-center"><?php echo strtoupper($row[1]) ?></div>
                    <div class="bg-info" style="height:200px;overflow: auto;font-size:15px;padding:12px;">
                        <?php echo $row[2] ?>
                    </div>
                    <div class="bg-primary text-right" style="padding-right:10px;"><?php echo $row[3] ?> <?php echo $row[4] ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include "footer.html" ?>
