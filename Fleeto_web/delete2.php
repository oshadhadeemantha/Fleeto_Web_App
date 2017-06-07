<?php
include 'config.php';


$cid = $_GET['cid'];

$conn = new mysqli($host,$username,$password,$db_name);

if($conn->connect_error){
die("Connection failed".$conn->connect_error);
}


$sql = "DELETE FROM tbl_complain WHERE c_id = $cid";
mysqli_query($conn, $sql);
header("Location:complain.php");
?>