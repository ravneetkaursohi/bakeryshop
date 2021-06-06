<?php include "admin_header.php"
?>
<div class="wthreehome-latest">
    <div class="container">
        <h1>Gallery</h1>
        <form action="product_gallery_action.php" class="form-horizontal" enctype="multipart/form-data" method="post">
            <input type="hidden" name="product" value="<?php echo $_REQUEST['q'] ?>"/>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Select Photo</label>

                    <input type="file" name="image" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label class="control-label">Title</label>

                    <input type="text" name="title" class="form-control">
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
