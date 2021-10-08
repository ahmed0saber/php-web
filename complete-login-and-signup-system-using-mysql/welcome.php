<?php 
session_start();

if (!isset($_SESSION['username'])) { //if user went here without login
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Hello " . $_SESSION['username'] . " , welcome to my first full stack website.</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>