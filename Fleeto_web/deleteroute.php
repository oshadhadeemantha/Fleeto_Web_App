<?php
    include 'dbconnect.php';
    
    $sessionid   = isset($_GET['sessionid']) ? $_GET['sessionid'] : '0';

  
        
            $stmt = $pdo->prepare($sqlFunctionCallMethod.'prcDeleteRoute(:sessionID)');     
          
   

    $stmt->execute(array(':sessionID' => $sessionid));

?>
