<?php
include "connection.php";
$title=$_REQUEST['title'];
$description=$_REQUEST['descp'];
date_default_timezone_set("America/Montreal");
$dt=date("d-M-Y");
$tm=date('h:i A');

$insert="insert into deals VALUES (null,'$title','$description','$dt','$tm')";
echo $insert;
mysqli_query($conn,$insert);
header("location:add_deals.php?msg=deals Added Successfully");