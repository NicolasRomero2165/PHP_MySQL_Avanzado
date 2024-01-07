<?php
include("conectar_base.php");
include("carrito.php");
$id_producto = $_GET['id'];
$base = new BaseDatos('localhost', 'root', '', 'phpavanzado');
$producto = $base->ejecutarSQL("SELECT * FROM productos WHERE codigo = $id_producto");
$compra = new Carrito($base);
$compra->introducir_compra($producto[0]['codigo'], $producto[0]['producto'], $producto[0]['descripcion'], $producto[0]['precio']);
header("Location: ../unidad7.php?ok=1");
?>