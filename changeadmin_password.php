<?php include "admin_header.php";
?>
<div class="wthreehome-latest">
    <div class="container">
        <h1>Change Password</h1>
        <form action="action_changeadmin_password.php" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Username</label>

                    <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['session1'] ?>"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Old Password</label>

                    <input type="password" name="old_pass" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">New Password</label>

                    <input type="password" name="new_pass" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Confirm Password</label>

                    <input type="password" name="confirm_pass" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary" value="INSERT"/>
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
