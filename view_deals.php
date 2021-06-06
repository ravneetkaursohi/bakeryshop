<?php
include "admin_header.php";
include "connection.php";
$select= "select * from deals";
$res= mysqli_query($conn,$select);
?>
<br><br>
<div class="container">
    <table class="table table-responsive">
        <h2>View Deals</h2>
        <thead>
        <tr>
            <th>srno</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date of Deal</th>
            <th>Time of Deal</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <?php
        $srno=0;
        while($row=mysqli_fetch_array($res)){
            ++$srno;

            ?>
            <tr>
                <td><?php echo $srno ?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
                <td><?php $dt = $row[3];
                    $arr = strtotime($dt);
                    echo date('D, d M Y', $arr) ?></td>
                <td><?php echo $row[4]?></td>
                <?php
                if($_SESSION['usertype'] == "Admin"){
                    ?>
                    <td><a href="edit_deals.php?q=<?php echo $row[0] ?>">Edit</a></td>
                    <td><a href="delete_deals.php?q=<?php echo $row[0] ?>">Delete</a></td>

                    <?php
                }
                ?>

            </tr>
            <?php
        }
        ?>
    </table>
</div>


<?php include "admin_footer.php" ?>