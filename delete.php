<?php
	$host = "localhost";
	$user="id1045959_gayan";
	$password="aberathna";
	$db="id1045959_fleeto";
	
	$conn = new mysqli($host,$user,$password,$db);

	if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
	}
	
	$item_id =$_POST["itemid"];
	
	$sql = "update item_driver set status='done' WHERE itemid=$item_id";
	 $stmt = $conn->prepare($sql);
	  $stmt->execute();
	 
	  $response = array();
	$response["success"]=false;
	  
	 if(mysqli_affected_rows($conn)> 0){
		 $response["success"]=true;
	}
	
	echo json_encode($response);
	
	
	
	$conn->close();

?>