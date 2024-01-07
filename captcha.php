<?php
session_start();
header('Content-type: image/jpeg');
$imagen = imagecreate(100, 30);
$fondo = imagecolorallocate($imagen, 253, 166, 160);
$negro = imagecolorallocate($imagen, 0, 0, 0);
imagestring($imagen, 5, 25, 5, $_SESSION['captcha'], $negro);
imagejpeg($imagen);
imagedestroy($imagen);
?>