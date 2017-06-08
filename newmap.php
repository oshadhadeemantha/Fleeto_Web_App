<?php
include "config.php";

	$host = $host;
	$user=$username;
	$password=$password;
	$db=$db_name;
        $driver_id=$_POST['driver_id'];
	$sql = "select * from item_driver where driver_id='$driver_id' and status='pending' ";

	$con = mysqli_connect($host,$user,$password,$db);

	$result= mysqli_query($con,$sql);

	$response = array();
	//$res = array();


	while($row=mysqli_fetch_array($result)){

		array_push($response,array(
			"lat"=>$row["lat"],
			"lng"=>$row["lng"]
			));

	}
	
	
	
	///array_push($res,array(
	//"success"=> true,
	//"data"=>$response

	
	
//

echo json_encode($response);
	
	
	
?>