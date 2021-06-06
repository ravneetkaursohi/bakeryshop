<?php include "public_header.php";
?>
    <div class="wthreehome-latest">
        <div class="container">
            <h1>Contact us</h1>
            <form action="contact_action.php" class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label class="control-label">Name</label>

                        <input type="text" class="form-control" name="name" required>
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
                        <label class="control-label">Message</label>

                        <input type="text" name="msg" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="SEND"/>
                        <?php
                        if (isset($_REQUEST['msg']))
                            echo $_REQUEST['msg'];
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include "footer.html" ?>