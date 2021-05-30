<?php

session_start();
session_destroy();
$_SESSION['session1']=null;
header("location:admin_login.php");