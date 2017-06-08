<?php
	$host = "localhost";
	$user="id1045959_gayan";
	$password="aberathna";
	$db="id1045959_fleeto";

	$driver_id =$_POST['driverid'];//"1001";

	if(isset($_POST['Token'])){

		$token = $_POST["Token"];
		
		$conn = mysqli_connect("$host","$user","$password","$db");
		
		$query = "update tbl_driver set Token = '$token' WHERE d_id = '$driver_id'";
		

		 if ($conn->query($query) === TRUE) {
		 echo "success";}

		mysqli_close($conn);
	}
?>