<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/estilos_unidad1.css">
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
		<h2>Agenda de clases</h2>
		<form action="insertar_clases.php" method="POST">
			<input type="text" name="unidad" maxlength="30" placeholder="Unidad" required>
			<input type="date" name="fecha" required>
			<input class="boton" type="submit" value="Inscribirse">
		</form>
	
	<?php
		if(isset($_GET['ingresado'])) {
			echo "<p>Clase ingresada exitosamente.</p>";
		};
	?>

	</section>
	<aside>
		<?php
		include('ver_clases.php');
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>