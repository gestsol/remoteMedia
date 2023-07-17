<?php 
include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

$data=mysqli_fetch_array($res);



$codigo=$data['codigo'];

$xml="<?xml version='1.0'  encoding='UTF-8'?>
<content>
  <text>
    <content>$codigo</content>
    <duration>5</duration>
  </text>
</content>

$carga_xml = simplexml_load_string($xml);

print_r($carga_xml);






?>