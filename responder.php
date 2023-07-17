<?php 
include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

$data=mysqli_fetch_array($res);



$codigo=$data['codigo'];

$xml="<?xml version='1.0'  encoding='UTF-8'?>
<root>
<row>
<Id>1</Id>
<Airline>Iberia</Airline>
<Time>3:00 PM</Time>
<Desti>Barcelona</Desti>
<Flight>IBE - 844</Flight>
<Gate>33</Gate>
<Status>On Time</Status>
<Terminal>A1</Terminal>
<Logo>http://470c998ccfa016fcf181-54de496ac22791b8baa2bc402f068fc2.r42.cf2.rackcdn.com/ib.png</Logo>
</row>
</root>";

$carga_xml = simplexml_load_string($xml);

print_r($carga_xml);






?>