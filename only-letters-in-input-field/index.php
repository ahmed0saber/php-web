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
$name = $nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters are allowed";
        }
        elseif (count(explode(' ', $name)) > 1) {
          $nameErr = "Only letters are allowed without white spaces";
        }
        else{
            $nameErr = "Your name is valid";
        }
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
Name:<input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<input type="submit">
</form>
</body>
</html>
