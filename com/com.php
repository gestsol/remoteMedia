<?php
$mysqli = new mysqli('localhost','wit','wit2023','vinos');
if($mysqli->connect_errno >0){
    die("Error en la conexión". $mysqli->connect_error);
}