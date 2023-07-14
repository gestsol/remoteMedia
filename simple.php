<?php 

$xml="<?xml version='1.0'  encoding='UTF-8'?>
<nodo_padre>
   <CODIGO>
      <valor>12345678</valor>
   </CODIGO>
   
</nodo_padre>";

$carga_xml = simplexml_load_string($xml);

print_r($carga_xml);

echo $xml;




?>