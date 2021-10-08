<?php 

include 'config.php';

session_start();

error_reporting(0); //turn off error reporting

if (isset($_SESSION['username'])) { //if logged in
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']); //convert to md5 hash

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) //if found
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
        #container{
            text-align: center;
            padding-top:20px;
        }
        input , button{
            margin: 10px;
            height: 40px;
            width: 200px;
            font-size:18px;
        }
		#h1{
			font-size:25px;
			padding:0;
			margin:0;
		}
    </style>
	<title>Login</title>
</head>
<body>
	<div id="container">
		<form action="" method="POST">
			<p id="h1">Log in</p>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
				<button name="submit" class="btn">Login</button><br>
			<p>Don't have account ?? <a href="register.php">Sign up</a></p>
		</form>
	</div>
</body>
</html>
