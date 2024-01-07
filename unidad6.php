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
		<h2>Usuarios</h2>
		
		<?php
		if($_POST){
		include('clases/caract_usuarios.php');
		}
		?>

	</section>
	<aside>

    <form action="unidad6.php" method="POST">
		<input type="text" placeholder="Nombre" name="nombre" required>
		<input type="text" placeholder="Apellido" name="apellido" required>
		<input type="date" name="fecha_nac" required>
		<input type="submit" class="boton" value="Enviar">
	</form>

  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>