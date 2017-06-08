<?php
require_once 'config.php';
session_start();
$con = mysqli_connect($host,$username,$password, $db_name) or die("Connection error: " . mysqli_error($con));

$username=$_POST['username'];
$name= $_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];


$stmt = $con->prepare("INSERT INTO tbl_admin (username,a_name,email,a_password) VALUES (?,?,?,?)");
$stmt ->bind_param("ssss",$name,$username,$email,$password);
//    $stmt->bind_param('ss', $username, $password);


if($stmt->execute()){
    echo "success";

   header("location:registerpass.html");
}else{
   header("location:registerfail.html");
}


?>