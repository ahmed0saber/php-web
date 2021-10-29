<?php 
  //data required for connection of database to log in and sign up
$server = "localhost";
$user = "id17820765_root";
$pass = "]QvV)9{=SVb8RSz*";
$database = "id17820765_askbin";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>