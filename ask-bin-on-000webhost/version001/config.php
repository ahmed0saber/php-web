<?php 
  //data required for connection of database to log in and sign up
$server = "";
$user = "";
$pass = "";
$database = "";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
