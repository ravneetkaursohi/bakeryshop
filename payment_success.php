<?php
session_start();
include "connection.php";
include_once "cart.php";
$ar1 = array();
$ar2 = array();
$ar1 = $_SESSION['cart'];
$email=$_SESSION['session2'];
$ptype=$_SESSION['payment_method'];
$count = count($ar1);
$gt = 0;
for ($i = 0; $i < $count; $i++) {
    $ar2 = (array)$ar1[$i];
    $pr = $ar2['price'];
    $disc = $ar2['discount'];
    $amt = $pr - ($disc / 100) * $pr;
    $gt += $amt * $ar2['qty'];
}
date_default_timezone_set("America/Montreal");
$dt=date("Y-m-d");
$tm=date("h:i:s A");
$insert="insert into bill values(null,$gt,'$ptype','$email','$dt','$tm','pending')";
mysqli_query($conn,$insert);

$select="select max(b_id) from bill";
$sres=mysqli_query($conn,$select);
$srow=mysqli_fetch_array($sres);
$bill_id=$srow[0];

for ($i = 0; $i < $count; $i++) {
    $ar2 = (array)$ar1[$i];
    $pr = $ar2['price'];
    $disc = $ar2['discount'];
    $amt = $pr - ($disc / 100) * $pr;
    $gt += $amt * $ar2['qty'];

    $insert_bd="insert into bill_details values(null,".$ar2['pro_id'].",".$ar2['qty'].",$bill_id)";

    mysqli_query($conn,$insert_bd);


}

$_SESSION['cart']=null;
$_SESSION['payment_method']=null;
unset($_SESSION['cart']);
unset($_SESSION['payment_method']);
header("location:my_orders.php");