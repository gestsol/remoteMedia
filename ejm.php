<?php

include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

$data=mysqli_fetch_array($res);


echo
$codigo=$data['codigo'];



header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<note>";
echo "<message>$codigo</message>";
echo "</note>";
?>