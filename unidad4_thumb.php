<?php
$origen_imagen = imagecreatefromjpeg('imagenes/unidad4.jpg');
$alto_imagen = 150;
$ancho_imagen = 150;
$destino_imagen = imagecreatetruecolor($ancho_imagen, $alto_imagen);
$imagen = imagecreate($ancho_imagen, $alto_imagen);
imagecopyresized($destino_imagen, $origen_imagen, 0, 0, 0, 0, $ancho_imagen, $alto_imagen, imagesx($origen_imagen), imagesy($origen_imagen));
imagejpeg($destino_imagen, 'imagenes/unidad4_thumb.jpg');
imagedestroy($destino_imagen);
?>