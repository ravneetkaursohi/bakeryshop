<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from products WHERE p_id=$id";
mysqli_query($conn,$delete);
header("location:view_product.php");