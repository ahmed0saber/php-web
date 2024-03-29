<?php
include 'config.php';
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) { //if user went here without login
    echo "<script>window.location.href='login.php;</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>My quizzes</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            z-index: 2;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ask Bin</h1>

        <section class="menu">
            <ul class="menu-list">
                <li><a href="home.php">Home</a></li>
                <li onclick="theme()">Change theme</li>
                <li><a href="about.php">About us</a></li>
                <li class="active"><a href="login.php">My quizzes</a></li>
            </ul>

            <button>
                <i class="fas fa-times"></i>
                <i class="fas fa-bars"></i>
            </button>
        </section>
    </header>

    <?php echo "<p class='myH'>Hello " . $_SESSION['username'] . " , Here you can create a new quiz or view an existing one. <span><a href='logout.php'>Logout</a></span></p>"; ?>
    
    <section class="quizCon">

        <section class="quiz" onclick="window.open('createQuiz.php','_self')">
            <p class="quizL">New</p>
            <p class="quizR">???</p>
            <a href="createQuiz.php" class="link">Create</a>
        </section>

        <?php
        $owner = $_SESSION['username'];
        $sql = "SELECT * FROM forms WHERE owner='$owner'";  
        $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_row($result)){
                echo '<section class="quiz" onclick="window.open('."'viewQuiz.php?name=$row[2]'".','."'_self'".')">';
                echo '<p class="quizL">'.$row[2].'</p>';
                echo '<p class="quizR">'.$row[3].' questions</p>';
                echo '<a href='."'viewQuiz.php?name=$row[2]'".' class="link">View</a>';
                echo '</section>';
            }
            // Free result set
            unset($result);
        ?>

    </section>
    <br>

    <script src="app.js"></script>
</body>
</html>