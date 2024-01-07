<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/estilos_unidad8.css">
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
		<h2>Registro</h2>
		<h3>Registrarse</h3>
		<form action="clases/cargarusuario.php" method="POST">
			<input type="email" maxlength="30" placeholder="Correo electrónico" name="reg_email" required>
			<input type="password" placeholder="Contraseña" name="reg_password" required></br>
			<input type="submit" value="REGISTRARSE" class="boton">
		</form>
		<?php
	if (isset($_SESSION['conectado'])) {
		echo "<p>Bienvenido a nuestra página.</p>"; ?>
		<form action="salir.php" method="post">
			<input class="boton" type="submit" value="CERRAR SESIÓN">
		</form>
	<?php } else { ?>
		<h3>Iniciar sesión</h3>
		<form action="clases/verificarusuario.php" method="POST">
			<input type="email" maxlength="30" placeholder="Correo electrónico" name="log_email" required>
			<input type="password" placeholder="Contraseña" name="log_password" required></br>
			<input type="submit" value="INICIAR SESIÓN" class="boton">
		</form>
	<?php } ?>
	</section>
	<aside>
	<?php
	if (isset($_GET['res'])) {
		switch ($_GET['res']) {
			case 'error_reg':
				$resultado = 'El correo que intenta ingresar ya se encuentra registrado.';
			break;
			case 'reg_ok':
				$resultado = 'Correo registrado exitosamente.';
			break;
			case 'error_user':
			case 'error_pass':
				$resultado = 'Los datos ingresados son incorrectos.';
			break; }
	?>
		<p><?php echo $resultado; } ?></p>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>