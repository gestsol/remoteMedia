<?php 

$xmlData = file_get_contents('php://input'); // Obtiene los datos enviados en formato XML

$xml = simplexml_load_string($xmlData); // Convierte los datos XML a un objeto SimpleXMLElement

print_r($xml);

//$codigo=  $xml->codigo;

include "./com/com.php" ;

$QRY="UPDATE `codigos` SET `codigo` = '1234' WHERE `codigos`.`id` = 1; ";

echo
$res= mysqli_query($mysqli,$QRY);

?> 