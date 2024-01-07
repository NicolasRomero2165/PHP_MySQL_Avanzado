<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $ape, $nac) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nacimiento = $nac;
    }

    private function calcular_edad(){
        $fecha_hoy = date('d-m-Y');
        $calculo = round(((strtotime($fecha_hoy) - strtotime($this->fecha_nacimiento))/86400)/365);
        return $calculo;
    }

    public function imprime_caracteristicas(){
        echo '<p><strong>Nombre: </strong>'.$this->nombre.'</p>';
        echo '<p><strong>Apellido: </strong>'.$this->apellido.'</p>';
        echo '<p><strong>Edad: </strong>'.$this->calcular_edad().'</p>';
    }
}
?>