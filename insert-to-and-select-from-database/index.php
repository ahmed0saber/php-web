<style>
    table,tr,td,th{
        border:1px solid #000;
    }
</style>
<?php
$servername = "mysql:host=localhost;dbname=login";
$username = "root";
$password = "";

try {
  $conn = new PDO($servername,$username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*$sql = "INSERT INTO users (username, email, password)
  VALUES ('ahmed', 'ahmed@gmail.com', '4578245678686')";
  $conn->exec($sql);
  echo "New record created successfully";*/
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



try{
    $sql = "SELECT * FROM users";   
    $result = $conn->query($sql);
    if($result->rowCount() > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>username</th>";
                echo "<th>email</th>";
                echo "<th>password</th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}



$conn = null;
?>
