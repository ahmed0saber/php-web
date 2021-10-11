<?php
header("Content-Type:application/json");
if (isset($_GET['id']) && $_GET['id']!="") {

	$con = mysqli_connect("localhost","root","","api");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

	$id = $_GET['id'];

	$result = mysqli_query($con,"SELECT * FROM `count` WHERE id=$id");
	if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	$name = $row['name'];
	$value = $row['value'];

	response($id, $name, $value);

	mysqli_close($con);
	
	}else{
		response(NULL, NULL, 200,"No Record Found");
		}
}else{
	response(NULL, NULL, 400,"Invalid Request");
	}

function response($id,$name,$value){
	$response['id'] = $id;
	$response['name'] = $name;
	$response['value'] = $value;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>
