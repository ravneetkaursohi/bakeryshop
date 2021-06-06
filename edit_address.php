<?php
include "user_header.php";
include "connection.php";
$id=$_REQUEST['q'];
$select = "select * from address WHERE user_email='" . $_SESSION['session2'] . "'";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>

<div class="container">
    <br><br>
    <h1>Edit Address</h1>
    <form action="edit_address_action.php" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Location</label>

                <input type="text" class="form-control" name="location" value="<?php echo ucwords(urldecode($row[1]))?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Apartment</label>

                <input type="text" name="apartment" class="form-control" value="<?php echo ucwords(urldecode($row[2]))?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Contact No.</label>

                <input type="text" name="cno" class="form-control" value="<?php echo $row[3]?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">City</label>

                <input type="text" name="city" class="form-control" value="<?php echo $row[4]?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">State</label>

                <input type="text" name="state" class="form-control" value="<?php echo $row[5]?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="INSERT"/>
                <?php
                if(isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
                ?>
            </div>
        </div>
    </form>
</div>
<?php include "admin_footer.php" ?>