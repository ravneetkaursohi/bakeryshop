<?php
include "admin_header.php";
include "connection.php";
$select = "select * from products order by p_id desc";
$res = mysqli_query($conn, $select);
?>
<div class="wthreehome-latest">
    <div class="container">
        <div class=" table-responsive">
            <table class="table">
                <h2>View Products</h2>
                <tr>
                    <th>srno</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Discount</th>
                    <th>Category Name</th>
                    <th>Sub_Category</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                $srno = 0;
                while ($row = mysqli_fetch_array($res)) {
                    ++$srno;

                    ?>
                    <tr>
                        <td><?php echo $srno ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><img src="<?php echo $row[3] ?>" height="150" width="120"/></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php
                            $cat = "select `cat_name` from category WHERE cat_id=$row[5]";
                            $ares = mysqli_query($conn, $cat);
                            $arow = mysqli_fetch_array($ares);
                            echo $arow[0]
                            ?>
                        </td>
                        <td><?php
                            $cat = "select `sc_name` from sub_category WHERE sc_id=$row[6]";
                            $ares = mysqli_query($conn, $cat);
                            $arow = mysqli_fetch_array($ares);
                            echo $arow[0]
                            ?>
                        </td>
                        
                        <?php
                        if($_SESSION['usertype'] =="Admin"){
                            ?>
                            <td><a href="edit_product.php?q=<?php echo $row[0] ?>">Edit</a></td>
                            <td><a href="delete_product.php?q=<?php echo $row[0] ?>">Delete</a></td>
                            <td><a href="product_gallery.php?q=<?php echo $row[0] ?>">Add Images to Gallery</a></td>
                            <td><a href="view_product_gallery.php?q=<?php echo $row[0] ?>">View Gallery</a></td>

                            <?php
                        }
                        ?>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?php include "admin_footer.php" ?>

