<?php
  $dsn = 'mysql:host=localhost;dbname=products'; //data source name
  $user = 'root'; //user name
  $pass = ''; //password
  $options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  ); //for items named in arabic

  try{
  $db = new PDO($dsn, $user, $pass, $options); //start a connection with PDO class
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //for error reporting
  echo "You are now connected";
  $q = "INSERT INTO items (name) VALUES ('New Product2')";
  $db->exec($q); //add a new item
  }
  catch(PDOException $e){
    echo "Failed . " . $e->getMessage();
  }
?>
