<?php
include "admin_header.php";
include "connection.php";
$deals_id = $_REQUEST['q'];
$select = "select * from deals WHERE deals_id=$deals_id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<br><br>
<div class="wthreehome-latest">
<div class="container">
    <h1>Update Deals</h1>
    <form action="editdeals_action.php" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $deals_id ?>"/>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Title</label>

                <input type="text" class="form-control" name="title" value="<?php echo $row[1] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Description</label>

                <input type="text" name="descp" class="form-control" value="<?php echo $row[2] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="UPDATE"/>
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
