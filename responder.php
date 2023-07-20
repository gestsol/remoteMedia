<?php 
include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

$data=mysqli_fetch_array($res);



$codigo=$data['codigo'];



header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<note>";
echo "<from>$codigo</from>";
echo "<to>Tove</to>";
echo "<message>Remember me this weekend</message>";
echo "</note>";


// $xml="<?xml version='1.0'  encoding='UTF-8'?>
// <content>
//   <text>
//     <content>$codigo</content>
//     <duration>5</duration>
//   </text>
// </content>";

// $carga_xml = simplexml_load_string($xml);

// var_dump($carga_xml);






?>