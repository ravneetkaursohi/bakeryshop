<?php
include "connection.php";
$username=$_REQUEST['name'];
$usertype=$_REQUEST['type'];
$email=$_REQUEST['email'];
$contact_no=$_REQUEST['contact_no'];


$update="update admin set name='$username', type='$usertype',
email='$email',contact_no='$contact_no' where username=$username";
echo $update;
mysqli_query($conn,$update);
header("location:view_admin.php");