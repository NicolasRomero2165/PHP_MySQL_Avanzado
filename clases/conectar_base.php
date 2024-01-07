<?php
class BaseDatos {
    private $conexion;

    function __construct($serv, $usua, $pass, $base) {
        $this->conexion = new mysqli($serv, $usua, $pass, $base);
    }

    public function ejecutarSQL($codigoSQL) {
        $instrSQL = strtoupper(substr($codigoSQL, 0,6));

        switch($instrSQL) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $consultaSQL = $this->conexion->query($codigoSQL);
                break;
            case 'SELECT':
                $consultaSQL = $this->conexion->query($codigoSQL);
            while($listarDatos=$consultaSQL->fetch_assoc()) {
                    $mostrarDatos[] = $listarDatos; }
                    return $mostrarDatos; 
                    break;                    
        }
    }
}
?>