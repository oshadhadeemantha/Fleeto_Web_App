<?php


$host='localhost';
$user='id1045959_gayan';
$password='aberathna';
$db='id1045959_fleeto';

 $connection = new mysqli($host,$user,$password,$db);
 
 if(!$connection){
	 echo 'Not Connected To Server';
 }
 
 if(!mysqli_select_db($connection, $db)){
	 
   echo 'Database Not Selected ';
 }
 $Date = $_GET['date'];
 $Wherehouse1= $_GET['warehouse'];
 $DID = $_GET['did'];
 
 $sql="INSERT INTO driver_warehouse(date,warehouse,driverid) VALUES ('$Date','$Wherehouse1','$DID')";
  
 
 
if($connection->query($sql)==TRUE){
        
	
        header('refresh:1; url = http://fleetio.dx.am/Assign%20Driver.html');

}
else {
	echo 'not Inserted';
}





?>