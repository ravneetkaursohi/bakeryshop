<?php
$payment_method=$_REQUEST['payment_method'];
session_start();
$_SESSION['payment_method']=$payment_method;
header("location:add_address.php");