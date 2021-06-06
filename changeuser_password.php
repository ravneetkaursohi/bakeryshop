<?php include "user_header.php";
?>
<div class="container">
    <br><br>
    <h1>Change Password</h1>
    <form action="action_changeuser_password.php" class="form-horizontal" method="post">
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Email</label>

                <input type="email" class="form-control" style="color:black;" name="mail" value="<?php echo $_SESSION['session2'] ?>" readonly>
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
                <input type="submit" class="btn btn-primary" value="UPDATE"/>
                <?php
                if(isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
                ?>
            </div>
        </div>
    </form>
</div>
<?php include "footer.html" ?>
