<?php
include "admin_header.php";
include "connection.php";
$username = $_REQUEST['q'];
$select = "select * from admin WHERE username='$username'";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<div class="wthreehome-latest">
    <div class="container">
        <h1>Update Admin</h1>
        <form action="editadmin_action.php" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Username</label>

                    <input type="text" class="form-control" name="name" value="<?php echo $row[0] ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">User Type</label>
                    <select name="type" class="form-control" required>
                        <option <?php if ($row[2] == "Admin") echo "selected" ?>>Admin</option>
                        <option <?php if ($row[2] == "Sub Admin") echo "selected" ?>>Sub Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Email</label>

                    <input type="text" name="email" class="form-control" value="<?php echo $row[3] ?>" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Contact_no</label>

                    <input type="number" name="contact_no" class="form-control" value="<?php echo $row[4] ?>" required>
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

