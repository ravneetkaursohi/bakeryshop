<?php
include "connection.php";
$pro=$_REQUEST['product'];
$img=$_FILES['image']['name'];
$type=pathinfo($img,PATHINFO_EXTENSION);
echo $type;
$title=$_REQUEST['title'];

if($type == "jpg" || $type == "jpeg" || $type == "png" || $type == "gif"){
    $temp=$_FILES['image']['tmp_name'];
    $path="images/".$img;
    move_uploaded_file($temp,$path);
    $insert="insert into product_gallery VALUES (null,'$path','$title',$pro)";
    echo $insert;
    mysqli_query($conn,$insert);
    header("location:view_product_gallery.php?q=$pro");

}
