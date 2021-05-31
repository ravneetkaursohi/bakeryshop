<?php
include "admin_header.php";
include "connection.php";
$select = "select * from sub_category";
$res = mysqli_query($conn, $select);
?>
<div class="wthreehome-latest">
    <div class="container">
        <table class="table table-responsive">
            <h2>View Categories</h2>
            <tr>
                <th>srno</th>
                <th>Sub-Category Name</th>
                <th>Description</th>
                <th>Category Name</th>
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
                    <td><?php
                        $cat = "select `cat_name` from category WHERE cat_id=$row[3]";
                        $ares = mysqli_query($conn, $cat);
                        $arow = mysqli_fetch_array($ares);
                        echo $arow[0]
                        ?>
                    </td>
                    <?php
                    if($_SESSION['usertype'] == "Admin"){
                        ?>
                        <td><a href="edit_subcategory.php?q=<?php echo $row[0] ?>">Edit</a></td>
                        <td><a href="delete_subcategory.php?q=<?php echo $row[0] ?>">Delete</a></td>
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
<?php include "admin_footer.php" ?>


