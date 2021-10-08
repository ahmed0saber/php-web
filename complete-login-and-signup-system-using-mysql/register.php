<?php 

include 'config.php';

error_reporting(0); //turn off error reporting

session_start();

if (isset($_SESSION['username'])) { //if logged in
    header("Location: index.php");
}

if (isset($_POST['submit'])) { //because this page submits to itself
	$username = $_POST['username']; //fill the input fields
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) { //password confirmation
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')"; //add a row to the table
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$_SESSION['username'] = $username;
				header("Location: welcome.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
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
	<title>Signup</title>
</head>
<body>
	<div id="container">
		<form action="" method="POST">
            <p id="h1">Sign up</p>
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required><br>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required><br>
				<button name="submit">Register</button><br>
			<p>Have an account ?? <a href="index.php">Login</a></p>
		</form>
	</div>
</body>
</html>