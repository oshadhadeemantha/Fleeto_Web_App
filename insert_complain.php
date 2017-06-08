<?php
	
	include "config.php";

    $con = new mysqli($host,$username,$password,$db_name);
    
    
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $email =$_GET['email'];
    $date =$_GET['date'];
    $discription=$_GET['discription'];
    

        $response = array();

    $statement1 = "INSERT INTO tbl_complain (name,phone_number,E-mail,date,description) VALUES ('$name','$phone','$email','$date','$discription')";

        if ($con->query($statement1) === TRUE) {
            $response["success"]=true;

        } else {
            $response["success"]=false;

        }
    echo json_encode($response);
	
	
	

 ?>