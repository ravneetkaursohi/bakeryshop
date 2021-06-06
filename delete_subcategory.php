<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from sub_category WHERE sc_id=$id";
mysqli_query($conn,$delete);
header("location:view_subcategory.php");