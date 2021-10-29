<?php
include 'config.php';
error_reporting(0);
if (isset($_POST['submit'])) {
	$form = $_GET['form'];
	$owner = $_GET['owner'];
    $answers = $_POST['answers'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO submits (owner, formname, answers)
                VALUES ('$owner', '$form', '$answers')"; //add a row to the table
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['formname'] = $qName;
            echo "<script>window.location.href='sent.php';</script>";
            $form = '';
            $owner = '';
            $answers = '';
            
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    }
}
?>

<?php
if (isset($_GET['form'])&&isset($_GET['owner'])) {
    $form = $_GET['form'];
    $owner = $_GET['owner'];
}else{
    header("Location: home.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Quiz invite</title> 
    <link rel="stylesheet" href="style.css">
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
    <section class="formCon">
        <section class="form">
            <form action="" method="POST" autocomplete="off">
                <p class="title">
                    <?php
                        echo $form;
                    ?>
                </p>
                <?php
                $sql = "SELECT * FROM forms WHERE owner='$owner' AND formname='$form'";  
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_row($result)){
                        $array = str_split($row[4]);
                        $x=1;
                        echo '<p class="questioned">';
                        foreach ($array as $char) {
                            echo $char;
                            if($char=='?'){
                                echo '</p><input type="text" name="answer'.$x.'" placeholder="Answer" class="txt">';
                                if($x<$row[3])
                                echo '<p class="questioned">';
                                $x++;
                        }
                    }
                }
                    // Free result set
                    unset($result);
                ?>
                <input type="hidden" name="answers" id="astxt">
                <button type="button" class="btn" onclick="ansr()">Submit</button>
                <button name="submit" id="ansrbtn" hidden>Submit</button>
            </form>
        </section>
    </section>
    

    <script src="app.js"></script>
</body>
</html>