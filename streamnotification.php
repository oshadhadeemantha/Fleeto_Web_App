<?php

       function send_notification ($tokens,$message)
    {
    	$url = 'https://fcm.googleapis.com/fcm/send';
    	$fields = array(
    		'registration_ids' => $tokens,
    		'data' => $message
    		);

    	$headers = array(

    		'Authorization:key = AAAAQJFNUCU:APA91bHdoN7FX54IU0ATIY2ia4_qxVV0vosyUobBlwrrIvsJUK_u3YksmzIbXr3_boGb01omYs3FoJPTTF1e6F5ViL8_6EtgCwM2yoFcgTqFFuXdgVKnfZjZ4weuGTp4TlOW6aSUaDq8',
    		'Content-Type: application/json'
    		);

    		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_URL,$url);
    		curl_setopt($ch, CURLOPT_POST,true);
    		curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    		curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($fields));

    		$result = curl_exec($ch);
    		if($result == FALSE){
    				die('Curl failed: '. curl_error($ch));
    		}
    		curl_close($ch);
    		return $result;
    }



    $host = "localhost";
	$user="id1045959_gayan";
	$password="aberathna";
	$db="id1045959_fleeto";

	$conn = mysqli_connect("$host","$user","$password","$db");

    $driver_id = $_POST['driverid'];

	$sql = "Select Token From tbl_driver where d_id='$driver_id'";

	$result = mysqli_query($conn,$sql);
	$tokens = array();

	if (mysqli_num_rows($result) > 0) {
		
		while ($row = mysqli_fetch_assoc($result) ) {

			$tokens [] = $row["Token"];

		}
	}

	mysqli_close($conn);

	$message = array("message" => "Enable Live Stream");
	$message_status = send_notification($tokens, $message);
       header('refresh:1; url = https://fleeto.000webhostapp.com/livestream.html');
?>