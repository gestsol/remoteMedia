<?php 
include "./com/com.php" ;

$QRY="select * from codigos";

$res= mysqli_query($mysqli,$QRY);

print_r($res);




?>