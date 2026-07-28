<?php
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
$conn = sqlsrv_connect($serverName, $options);
 
if( $conn === false )  
{  
     echo "Could not connect.\n";  
     die( print_r( sqlsrv_errors(), true));  
}  

?>