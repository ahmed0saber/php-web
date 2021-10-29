<?php 

session_start();
session_destroy(); //clear session data

/*echo "<script>window.location.href='login.php;</script>";*/ //back to login page
header("Location: login.php");

?>