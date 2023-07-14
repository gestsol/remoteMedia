<?php 
include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

$data=mysqli_fetch_array($res);

echo 

$codigo=$data['codigo'];





?>