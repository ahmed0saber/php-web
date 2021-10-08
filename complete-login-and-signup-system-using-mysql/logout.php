<?php 

session_start();
session_destroy(); //clear session data

header("Location: index.php"); //back to login page

?>