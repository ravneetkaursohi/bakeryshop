<?php
include "connection.php";
$category_name=$_REQUEST['cat_name'];
$description=$_REQUEST['descp'];

$insert="insert into category VALUES (null,'$category_name','$description')";
echo $insert;
mysqli_query($conn,$insert);
header("location:category.php?msg=Category Added Successfully");