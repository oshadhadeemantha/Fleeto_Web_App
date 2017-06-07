<?php
	
	echo "<img src='images/images (5).png' alt='photo of me' />";
	echo "<img src='images/images (1).png' alt='photo of me' />";
	echo "<img src='images/download.jpg' alt='photo of me' />";	
	echo "thanks for your comments";
	echo "<img src='images/thnku.png' alt='photo of me' />";
	
	$con = mysqli_connect("localhost","root","","db_sales_force");

	if(mysqli_connect_errno())
	{
		
		echo "Error occured while connecting with database. ".mysqli_connect_errno();
	}
	if(isset($_POST['click']))
	{	
		
		$Name = $_POST['name']; 
		$Email = $_POST['email']; 
		$Phone_no = $_POST['phone']; 		
		$Date = $_POST['date']; 
		$Discription = $_POST['discription']; 
		$Submit = $_POST['click']; 
						
		
			$insertQuery = "INSERT INTO tbl_complain(c_customer_name, c_email, c_phoneNo, c_date, discription) VALUES('$Name','$Email','$Phone_no','$Date','$Discription')";
			//echo $insertQuery;
			if(mysqli_query($con, $insertQuery))
			{
				
				$error = "You are successfully sended..!!!";
			}
					
		
	}


?>