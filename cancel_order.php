<?php
include "connection.php";
$q=$_REQUEST['q'];
mysqli_query($conn,"update bill set status='cancelled' where b_id=$q");
header("location:my_orders.php");
