<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'usuario', 'contraseña', 'RSS');

// Consulta para obtener los mensajes desde la base de datos
$query = "SELECT * FROM mensajes";
echo
$resultado = mysqli_query($conexion, $query);

// Creación del objeto XML para el feed RSS
$feed = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><rss></rss>');
$feed->addChild('channel');

// Recorrido de los resultados y creación de los elementos del feed RSS
while ($fila = mysqli_fetch_assoc($resultado)) {
    $item = $feed->channel->addChild('item');
    $item->addChild('title', $fila['titulo']);
    $item->addChild('description', $fila['']);
    $item->addChild('pubDate', date('r', strtotime($fila['fecha'])));
}

// Encabezados y salida del feed RSS
header('Content-Type: application/rss+xml; charset=utf-8');
echo $feed->asXML();
?>