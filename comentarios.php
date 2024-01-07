<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('d/m/Y H:i:s');

$contenido = "<h3>".$nombre." ".$apellido." <span class='correo'>".$correo."</span></h3><p>".$comentario." <span class='correo'>".$fecha."</span></p><div class='separador'></div>";

$comentarios = fopen('comentarios.txt', 'a+');
fputs($comentarios, $contenido);
fclose($comentarios);

header("Location: unidad3.php?ok");
?>