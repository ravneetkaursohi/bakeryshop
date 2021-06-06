<?php
include "connection.php";
$id = $_REQUEST['id'];
$location = $_REQUEST['location'];
$apartment = $_REQUEST['apartment'];
$cno = $_REQUEST['cno'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];

$update = "update address set location='$location',apartment='$apartment',
contact_no=$cno,city='$city',state='$state' WHERE aid=$id";
echo $update;
mysqli_query($conn, $update);
header("location:view_address.php");