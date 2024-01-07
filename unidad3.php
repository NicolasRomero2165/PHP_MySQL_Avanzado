<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/estilos_unidad3.css">
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
		<h2>Comentarios</h2>
	<?php
	$comentarios = fopen('comentarios.txt', 'r');
	fpassthru($comentarios);
	fclose($comentarios);
	?>
	</section>
	<aside>
    <form action="comentarios.php" method="post">
		<input type="text" maxlength="30" name="nombre" placeholder="Nombre" required>
		<input type="text" maxlength="30" name="apellido" placeholder="Apellido" required>
		<input type="email" maxlength="100" name="correo" placeholder="Correo" required>
		<textarea name="comentario" maxlength="350" cols="30" rows="10" required></textarea>
		<input class="boton" type="submit" value="Enviar">
	</form>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>