<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from category WHERE cat_id=$id";
mysqli_query($conn,$delete);
header("location:view_category.php");