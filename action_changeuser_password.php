<?php
include "connection.php";
$email=$_REQUEST['mail'];
$old_password=$_REQUEST['old_pass'];
$new_password=$_REQUEST['new_pass'];
$confirm_password=$_REQUEST['confirm_pass'];
$select="select * from user";
$res=mysqli_query($conn,$select);
$flag=false;

while ($row=mysqli_fetch_array($res)){
    if($row[1]==$old_password){
        $flag=true;
        break;
    }
}
if($flag==true){
    if($new_password == $confirm_password){
        $update="update user set password='$new_password' WHERE email='$email'";
        mysqli_query($conn,$update);
        header("location:changeuser_password.php?msg=Password updated Succesfully");
    }
    else{
        header("location:changeuser_password.php?msg=New Password and Confirm Password not Matched");

    }
}
else{
    header("location:changeuser_password.php?msg=Old Password not Matched");
}