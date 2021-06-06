<?php include  "admin_header.php";
?>
<br><br>
<div class="container">
    <h1>ADD Deals</h1>
    <form action="deals_action.php" class="form-horizontal" method="post">
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Title</label>

                <input type="text" class="form-control" name="title" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Description</label>

                <input type="text" name="descp" class="form-control" >
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


<?php include "footer.html" ?>