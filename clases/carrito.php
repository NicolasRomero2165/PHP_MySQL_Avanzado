<?php
class Carrito {
    private $bd;

    function __construct($base) {
        $this->bd = $base;
    }

    public function introducir_compra($codigo, $producto, $descripcion, $precio) {
        $introducir = $this->bd->ejecutarSQL("INSERT INTO compras VALUES (DEFAULT, $codigo, '$producto', '$descripcion', $precio)");
        return $introducir;
    }

    public function eliminar_compra($id_compra) {
        $borrar = $this->bd->ejecutarSQL("DELETE FROM compras WHERE id_compra = $id_compra");
        return $borrar;
    }

    public function listar_compra() {
        $listar = $this->bd->ejecutarSQL("SELECT * FROM compras");
        return $listar;
    }
}
?>