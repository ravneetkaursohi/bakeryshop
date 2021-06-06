<?php
$catid=$_REQUEST["catid"];
?>
<select name="sub_category" id="sub_category" class="form-control" required>
    <option value="">Choose Category</option>
    <?php
    include "connection.php";
    $sselect = "SELECT * FROM `sub_category` WHERE `cat_id`=$catid";
    $sres = mysqli_query($conn, $sselect);
    while ($srow = mysqli_fetch_array($sres)) {
        ?>
        <option value="<?php echo $srow[0] ?>"><?php echo $srow[1] ?></option>
        <?php
    }
    ?>
</select>
