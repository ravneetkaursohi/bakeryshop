<?php
include "connection.php";
$id = $_REQUEST['id'];
$sbcat_name = $_REQUEST['sbcat_name'];
$description = $_REQUEST['descp'];
$category = $_REQUEST['category'];

$update = "update sub_category set sc_name='$sbcat_name',sc_descp='$description',
cat_id=$category WHERE sc_id=$id";
echo $update;
mysqli_query($conn, $update);
header("location:view_subcategory.php");