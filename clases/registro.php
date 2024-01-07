<?php
class Registro {
    private $bd;
    function __construct($base) {
        $this->bd = $base;
    }
    public function registro($correo, $password){
        $password_encriptada = password_hash($password, PASSWORD_DEFAULT, array('cost'=>4));
        $listado = $this->bd->ejecutarSQL("SELECT * FROM registro WHERE usuario = '$correo'");
        if($listado == NULL) {
            $this->bd->ejecutarSQL("INSERT INTO registro VALUES ('$correo', '$password_encriptada')");
            header("Location: ../unidad8.php?res=reg_ok");
        } else {
            header("Location: ../unidad8.php?res=error_reg");
        }
    }
    public function validar_registro($correo, $password){
        $usuario = $this->bd->ejecutarSQL("SELECT * FROM registro WHERE usuario = '$correo'");
        $password_desencriptada = password_verify($password, $usuario[0]['clave']);
        if($usuario == NULL) {
            header("Location: ../unidad8.php?res=error_user");
            } elseif ($password == $password_desencriptada) {
                $_SESSION['conectado'] = $correo;
                header("Location: ../unidad8.php");
            } else {
                header("Location: ../unidad8.php?res=error_pass");
            }
        }
    }
?>