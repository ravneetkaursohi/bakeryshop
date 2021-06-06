<?php
include "connection.php";
$pro=$_REQUEST['p'];
$img=$_REQUEST['q'];
mysqli_query($conn,"delete from product_gallery where pg_id=$img");
header("location:view_product_gallery.php?q=$pro");