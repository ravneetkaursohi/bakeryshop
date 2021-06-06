<?php
include "admin_header.php";
include "connection.php";
$id = $_REQUEST['q'];
$select = "select * from sub_category WHERE sc_id=$id";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<div class="wthreehome-latest">
    <div class="container">
    <h1>Category</h1>
    <form action="edit_action_subcategory.php" class="form-horizontal" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Sub-Category Name</label>

                <input type="text" class="form-control" name="sbcat_name" value="<?php echo $row[1]?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Description</label>

                <input type="text" name="descp" class="form-control" value="<?php echo $row[2]?>" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <label class="control-label">Category Name</label>

                <select name="category" class="form-control">
                    <?php
                    include "connection.php";
                    $select="select * from category";
                    $ress=mysqli_query($conn,$select);
                    while($crow=mysqli_fetch_array($ress)){
                        ?>
                        <option <?php if($row['cat_id']== $crow[0] ) echo "selected";?> value="<?php echo $crow[0] ?>"><?php echo $crow[1] ?></option>                        <?php
                    }
                    ?>
                </select>
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

<?php require "admin_footer.php" ?>