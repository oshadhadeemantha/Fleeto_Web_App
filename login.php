<?php

require_once 'config.php';
session_start();
$con = mysqli_connect($host, $username, $password, $db_name) or die("Connection error: " . mysqli_error($con));

$username =$_POST['username'];
$password =$_POST['password'];


$stmt = $con->prepare("SELECT d_id ,d_password FROM tbl_driver WHERE d_id = ? AND d_password = ? LIMIT 1");
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

$result = array();



if ($stmt->num_rows == 1) {
    $result = array('success'=>true,'driver_id'=>$username);
} else {
    $result = array('success'=>false);
}

echo json_encode($result);

$stmt->close();

$con->close();
?>