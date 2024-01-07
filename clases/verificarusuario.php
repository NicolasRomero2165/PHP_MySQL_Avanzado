<?php
session_start();
include("conectar_base.php");
include("registro.php");

$correo = $_POST['log_email'];
$password = $_POST['log_password'];

$base = new BaseDatos('localhost', 'root', '', 'phpavanzado');
$log = new Registro($base);
$log->validar_registro($correo, $password);
?>