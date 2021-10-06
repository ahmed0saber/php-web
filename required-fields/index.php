<html>
    <head>
        <style>
            .error{
                color: #f00;
            }
        </style>
    </head>
<body>
<?php
$name = $email = $nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
Name:<input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<input type="submit">
</form>
</body>
</html>
