<?php include "admin_header.php";
?>
<div class="wthreehome-latest">
    <div class="container">
        <h1>Add New Admin</h1>
        <form action="addadmin_action.php" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Username</label>

                    <input type="text" class="form-control" name="name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Password</label>

                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Confirm Password</label>

                    <input type="password" name="cpassword" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">User Type</label>
                    <select name="type" class="form-control" required>
                        <option>Choose one</option>
                        <option>Admin</option>
                        <option>Sub Admin</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Email</label>

                    <input type="text" name="email" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Contact_no</label>

                    <input type="number" name="contact_no" class="form-control" required>
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