<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from deals WHERE deals_id=$id";
mysqli_query($conn,$delete);
header("location:view_deals.php");