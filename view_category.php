<?php
include "admin_header.php";
include "connection.php";
$select= "select * from category";
$res= mysqli_query($conn,$select);
?>
<div class="wthreehome-latest">
<div class="container">
    <table class="table table-responsive">
        <h2>View Categories</h2>
        <tr>
            <th>srno</th>
            <th>Category Name</th>
            <th>Description</th>
          </tr>
        <?php
        $srno=0;
        while($row=mysqli_fetch_array($res)){
        ++$srno;

        ?>
        <tr>
            <td><?php echo $srno ?></td>
            <td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
            <?php if($_SESSION['usertype']=="Admin"){
                ?>
                <td><a href="delete_category.php?q=<?php echo $row[0] ?>">Delete</a></td>

                <?php
            } ?>

        </tr>
            <?php
        }
        ?>
    </table>
</div>

</div>
<?php include "admin_footer.php" ?>
