<?php

$dbuser = 'id1045959_gayan';
$dbpass = 'aberathna';

$params = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);


   
        $pdo = new PDO('mysql:host=localhost;dbname=id1045959_fleeto;charset=utf8', $dbuser, $dbpass, $params);
        $sqlFunctionCallMethod = 'CALL ';
   
?>