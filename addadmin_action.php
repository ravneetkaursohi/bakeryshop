<?php
include "connection.php";
$username=$_REQUEST['name'];
$password=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];
$usertype=$_REQUEST['type'];
$email=$_REQUEST['email'];
$contact_no=$_REQUEST['contact_no'];

$select="select * from admin";
$res=mysqli_query($conn,$select);
$flag=false;
while($row=mysqli_fetch_array($res)){
    if($row[0]==$username){
        $flag=true;
        break;
    }
}
if($flag ==true){
    header("location:add_admin.php?msg=UserName already exists");
}
else{
    if($password == $cpassword){
        $insert="insert into admin VALUES ('$username','$password','$usertype','$email',$contact_no)";
        echo "$insert";
        mysqli_query($conn,$insert);
        header("location:add_admin.php?msg=Admin added successfully");
    }
    else{
        header("location:add_admin.php?msg=Password and Confirm Password not Matched");
    }
}