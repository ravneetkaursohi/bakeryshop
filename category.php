<?php include "admin_header.php";
?>
<div class="wthreehome-latest">
<div class="container">
    <h1>Category</h1>
    <form action="category_action.php" class="form-horizontal" method="post">
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Category Name</label>

                <input type="text" class="form-control" name="cat_name" required>
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
</div>
<?php include "admin_footer.php" ?>