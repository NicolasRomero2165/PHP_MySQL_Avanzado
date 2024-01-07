<?php
include('usuarios.php');
$datos = new Usuarios($_POST['nombre'], $_POST['apellido'], $_POST['fecha_nac']);
$datos->imprime_caracteristicas();
?>