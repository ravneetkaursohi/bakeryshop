<?php
session_start();
session_destroy();
$_SESSION['session2']=null;
header("location:index.php");