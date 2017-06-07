<?php

    include "config.php";

    $con = new mysqli($host,$username,$password,$db_name);
    
    //$item_id = //$_POST['item_id'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $driver_id =$_POST['driver_id'];
    $item_name =$_POST['item_name'];
    $cu_name=$_POST['cu_name'];
    $status= "pending";


        $response = array();

    $statement1 = "INSERT INTO item_driver (lat,lng,driver_id,item_name,cu_name,status) VALUES ('$lat','$lng','$driver_id','$item_name','$cu_name','$status')";

        if ($con->query($statement1) === TRUE) {
            $response["success"]=true;

        } else {
            $response["success"]=false;

        }




    echo json_encode($response);



 ?>