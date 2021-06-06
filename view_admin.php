<?php
include "admin_header.php";
include "connection.php";
$select = "select * from admin";
$res = mysqli_query($conn, $select);
?>
<div class="wthreehome-latest">
    <div class="container">
        <table class="table table-responsive">
            <h2>View Admins</h2>
            <tr>
                <th>srno</th>
                <th>Username</th>
                <th>Usertype</th>
                <th>Email</th>
                <th>Contact no</th>
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
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <?php if($_SESSION['usertype']=="Admin"){
                        ?>
                        <td><a href="edit_admin.php?q=<?php echo $row[0] ?>">Edit</a></td>
                        <td><a href="delete_admin.php?q=<?php echo $row[0] ?>">Delete</a></td>

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
