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
 $Dname = $_GET['dname'];
 $Did= $_GET['did'];
 $Dpassword = $_GET['dpassword'];
 $Dtele = $_GET['dtele'];
 $Dob= $_GET['dob'];
 
 
 $sql="INSERT INTO tbl_driver(d_name,d_id,d_password,d_telephone,d_dob) VALUES ('$Dname','$Did',' $Dpassword','$Dtele','$Dob')";
  
 
 
if($connection->query($sql)==TRUE){
        
	
        header('refresh:1; url = http://fleetio.dx.am/AddNewDriver.html');

}
else {
	echo 'not Inserted';
}





?>