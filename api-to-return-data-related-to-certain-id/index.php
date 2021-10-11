<html>
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="width:700px; margin:0 auto;"> 
<form action="" method="POST">
<input type="text" name="id" placeholder="Enter ID (1,2,3,4,5)" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>    

<?php
if (isset($_POST['id']) && $_POST['id']!="") {
	$id = $_POST['id'];
	$url = "http://localhost/projects/api1/rest/api.php?id=".$id;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	echo "<table>";
	echo "<tr><td>ID:</td><td>$result->id</td></tr>";
	echo "<tr><td>Name:</td><td>$result->name</td></tr>";
	echo "<tr><td>Value:</td><td>$result->value</td></tr>";
	echo "</table>";
}
    ?>
</div>
</body>
</html>