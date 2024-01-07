<?php
class Producto {
    private $codigo;
    public $producto;
    public $descripcion;
    private $precio;
    
    function __construct($cod, $pro, $des, $pre) {
        $this->codigo = $cod;
        $this->producto = $pro;
        $this->descripcion = $des;
        $this->precio = $pre;
     }

   public function listar_productos(){
        echo "<tr><td>".$this->codigo."</td>";
        echo "<td>".$this->producto."</td>";
        echo "<td>".$this->descripcion."</td>";
        echo "<td><strong>".$this->precio."</strong></td>";
  }
}
?>