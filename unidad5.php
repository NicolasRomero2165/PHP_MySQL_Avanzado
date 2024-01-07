<?php session_start(); ?>
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
		<h2>Consultas</h2>
		<?php
		include('conexion.php');
		$consulta = mysqli_query($conexion, "SELECT * FROM consultas");
		while($listar_consultas = mysqli_fetch_assoc($consulta)){ ?>
			<h3> <?php echo $listar_consultas['nombre']." ".$listar_consultas['apellido']; ?> <span class='correo'> <?php echo " ".$listar_consultas['correo']; ?> </span></h3>
			<p> <?php echo $listar_consultas['consulta']; ?> </p>
			<div class="separador"></div>
		<?php } ?>
	</section>
	<aside>

	<?php
		function captcha(){
			$digitos = '0123456789';
			$codigo = '';
			for ($i = 0; $i < 6; $i++) {
				$codigo .= $digitos[rand(0, 9)];
			}
			return $codigo;
	}

	$_SESSION['captcha'] = captcha();
	?>

    <form action="cargar.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre" maxlength="30" required>
		<input type="text" name="apellido" placeholder="Apellido" maxlength="50" required>
		<input type="email" name="correo" placeholder="Correo electrónico" maxlength="50" required>
		<textarea name="consulta" cols="30" rows="10" maxlength="350" placeholder="Escriba aquí su consulta..." required></textarea>
		<img src="captcha.php" alt="CAPTCHA">
		<input type="text" name="captcha" id="captcha" placeholder="Introduzca el código">
		<input class="boton" type="submit" value="Enviar">
	</form>
	<?php 
	if(isset($_GET['error'])){
		echo '<p>El código ingresado es incorrecto.</p>';
	} 
	if(isset($_GET['ok'])){
		echo '<p>Consulta cargada correctamente.</p>';
	};	
	?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>