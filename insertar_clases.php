<?php
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

include('conexion.php');

mysqli_query($conexion, "INSERT INTO clases VALUES (DEFAULT, '$unidad', '$fecha')");

header("Location: unidad1.php?ingresado");
?>