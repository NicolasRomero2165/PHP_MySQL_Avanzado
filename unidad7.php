<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/estilos_unidad4.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Compras</h2>
		<table id='productos'>
			<tr>
				<th>CÓDIGO</th>
				<th>PRODUCTO</th>
				<th>DESCRIPCIÓN</th>
				<th>PRECIO</th>
				<th>COMPRAR</th>
			</tr>
		<?php
		include("clases/conectar_base.php");
		include("clases/producto.php");
		include("clases/carrito.php");
		$base = new BaseDatos('localhost', 'root', '', 'phpavanzado');
		$mostrar_productos = $base->ejecutarSQL('SELECT * FROM productos');
		for($i=0; $i<count($mostrar_productos); $i++) { 
			$producto = new Producto($mostrar_productos[$i]['codigo'], $mostrar_productos[$i]['producto'], $mostrar_productos[$i]['descripcion'], $mostrar_productos[$i]['precio']);
			$producto->listar_productos(); ?>
			<td><a href="clases/compra.php?id=<?php echo $mostrar_productos[$i]['codigo']; ?>">COMPRAR</a></td></tr>
			<?php }	?>
		</table>
	</section>
	<aside>
	<table>
		<tr>
			<th>PRODUCTO</th>
			<th>PRECIO</th>
			<th>ELIMINAR</th>
		</tr>
    <?php
	$carrito = new Carrito($base);
	if(isset($_GET['ok'])){
	if($_GET['ok'] > 0){
	$lista_carrito = $carrito->listar_compra();
	for($i=0; $i<count($lista_carrito); $i++){ ?>
		<tr>
			<td><?php echo $lista_carrito[$i]['producto']; ?></td>
			<td><strong><?php echo $lista_carrito[$i]['precio']; ?></strong></td>
			<td><a href="clases/quitar.php?id=<?php echo $lista_carrito[$i]['id_compra']; ?>">ELIMINAR</a></td>
		</tr>
		<?php } } }
		?>
	</table>
	<?php 
		include("conexion.php");
		$consulta = "SELECT * FROM compras";
		$lista = mysqli_query($conexion, $consulta);
		$total = 0;
		while ($precio = mysqli_fetch_assoc ($lista)) {
			$total += $precio['precio'];
		}
		echo "<p id='total_fondo'><strong>TOTAL <span id='total'>$ ".$total."</span></strong></p>";
	?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>