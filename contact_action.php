<?php
include "connection.php";
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
date_default_timezone_set("Asia/Kolkata");
$dt=date("Y-m-d");
$contact_no=$_REQUEST['contact_no'];
$message=$_REQUEST['msg'];

$insert="insert into contactus VALUES (null,'$name','$email','$dt','$contact_no','$message')";
echo $insert;
mysqli_query($conn,$insert);
header("location:contactus.php?msg=Message submitted successfully");