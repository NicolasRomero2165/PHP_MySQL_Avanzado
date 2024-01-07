<?php
    include('conexion.php');

    $clases = mysqli_query($conexion, 'SELECT unidad, fecha FROM clases ORDER BY unidad');

    while($listar_clases = mysqli_fetch_assoc($clases)) {
        echo "<p>".$listar_clases['unidad']." / ".$listar_clases['fecha']."</p>";
    } ?>