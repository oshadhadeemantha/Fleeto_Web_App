<?php
	$host = "localhost";
	$user="id1045959_gayan";
	$password="aberathna";
	$db="id1045959_fleeto";



	if(isset($_POST["Token"])){

		$token = $_POST["Token"];

		$conn = mysqli_connect("$host","$user","$password","$db");

		$query = "INSERT INTO testuser(Token) Values ('$token') ON DUPLICATE KEY UPDATE Token = '$token';";
		echo "success";

		mysqli_query($conn,$query);

		mysqli_close($conn);
	}
?>