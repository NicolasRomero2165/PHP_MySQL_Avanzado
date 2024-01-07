<?php
include("conectar_base.php");
include("carrito.php");
$base = new BaseDatos('localhost', 'root', '', 'phpavanzado');
$compra = new Carrito($base);
$id_compra = $_GET['id'];
$compra->eliminar_compra($id_compra);
$lista = $compra->listar_compra();
if($lista == NULL){
header("Location: ../unidad7.php"); }
else {
header("Location: ../unidad7.php?ok=$lista"); };
?>