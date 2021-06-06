<?php
include "connection.php";
$id=$_REQUEST['id'];
$title=$_REQUEST['title'];
$description=$_REQUEST['descp'];
date_default_timezone_set("America/Montreal");
$dt=date('d-M-Y');
$tm=date("h:i A");

$update="update deals set title='$title',description='$description',
date_deals='$dt',time_deals='$tm' WHERE $id=deals_id";
echo $update;
mysqli_query($conn,$update);
header("location:view_deals.php");