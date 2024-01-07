<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/estilosUnidad2.css">
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
		<h2>Eventos</h2>
	<form action="calculo_fecha.php" method="POST">
		<input type="number" min="1" max="31" name="dia" placeholder="Día" required>
		<input type="number" min="1" max="12" name="mes" placeholder="Mes" required>
		<input type="number" maxlength="4" min="2023" name="año" placeholder="Año" required>
		<input type="submit" class="boton" value="Calcular">
	</form>
	<?php
	if(isset($_GET['fecha'])) { ?>
		<p><?php if ($_GET['fecha'] == 1) { echo "Falta un día"; } else { echo "Faltan ".$_GET['fecha']." días"; } ?> para llegar a la fecha ingresada.</p>
	<?php } ?>

	<?php
	if(isset($_GET['error'])) { ?>
		<p>La fecha ingresada no existe o es una fecha anterior al de hoy.</p>
	<?php } ?>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>