<?php
session_start();
include("conectar_base.php");
include("registro.php");

$correo = $_POST['reg_email'];
$password = $_POST['reg_password'];

$base = new BaseDatos('localhost', 'root', '', 'phpavanzado');
$registro = new Registro($base);
$registro->registro($correo, $password);
?>