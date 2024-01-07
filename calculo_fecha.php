<?php
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['año'];

date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha = $dia."-".$mes."-".$anio;
$fecha_hoy = date('d-m-Y');
$calculo = (strtotime($fecha) - strtotime($fecha_hoy))/86400;

if (checkdate($mes, $dia, $anio) && $calculo > 0) {
    header("Location: unidad2.php?fecha=$calculo");
} else {
    header("Location: unidad2.php?error");
}
?>