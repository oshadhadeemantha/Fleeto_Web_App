<?php
include "config.php";

	$host = $host;
	$user=$username;
	$password=$password;
	$db=$db_name;
        $driverId = $_GET['driverId'];
	$sql = "select * from item_driver where driver_id=$driverId and status='pending' ";
	$con = mysqli_connect($host,$user,$password,$db);
	$result= mysqli_query($con,$sql);

	

	$response = array();
	$res = array();

if(isset($result)){
	while($row=mysqli_fetch_array($result)){

		array_push($response,array(
			"itemid"=>$row["itemid"],
			"item_name"=>$row["item_name"],
			"cu_name"=>$row["cu_name"]
			));

	}
	
	
	
	array_push($res,array(
	"success"=> true,
	"data"=>$response
	));
	
	
}
else{
	array_push($res,array(
	"success"=>false ,
	"message"=>"Data retrieve failed"
	));
}

echo json_encode($res);
	
	
	
?>