<?php
include "connection.php";
$username = $_REQUEST['name'];
$password = $_REQUEST['password'];
$usertype = $_REQUEST['type'];

$select = "select * from admin";
$res = mysqli_query($conn, $select);
$flag = false;
while (($row = mysqli_fetch_array($res))) {
    if ($username == $row['username'] && $password == $row['pass']
        && $usertype == $row['usertype']) {
        $flag = true;
        break;
    }
}
if ($flag == true) {
    session_start();
    $_SESSION['session1'] = $username;
    $_SESSION['usertype'] = $usertype;
    header("location:admin.php");
} else {
    header("location:admin_login.php?msg=Incorrect Username or Password");
}