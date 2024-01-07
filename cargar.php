<?php
session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];
$captcha = $_POST['captcha'];

include('conexion.php');

if ($captcha == $_SESSION['captcha']){
    mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido', '$correo', '$consulta')") or exit ('No se pudo establecer una conexión con la base de datos.');
    header('Location: unidad5.php?ok');
} else {
    header('Location: unidad5.php?error');
}
?>