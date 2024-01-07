<?php
$imagen = 'imagenes/doom.jpeg';
$marca = 'imagenes/marca.png';
$marca_agua = imagecreatefrompng($marca);
$imagen_nueva = imagecreatefromjpeg($imagen);
$x_imagen = imagesx($imagen_nueva);
$y_imagen = imagesy($imagen_nueva);
$x_marca = imagesx($marca_agua);
$y_marca = imagesy($marca_agua);
imagecopy($imagen_nueva, $marca_agua, ($x_imagen/1.17), ($y_imagen/1.22), ($x_marca/20), ($y_marca/20), (imagesx($imagen_nueva)), (imagesy($imagen_nueva)));
header('Content-type: image/jpeg');
imagejpeg($imagen_nueva);
imagedestroy($marca_agua);
imagedestroy($imagen_nueva);
?>