
<?php
    class Conexion{

        public static function conectar(){

            $servidor = "localhost";
            $usuario = "root";
            $password = "";
            $bd = "vistas";

            $conexion = mysqli_connect(
                $servidor, $usuario, $password, $bd
            );
            return $conexion;
        }
    }
    
    // Para verificar Conexion:
    // $c = new Conexion();

    // if ($c->conectar()) {
    //     echo "conectado";
    // }else{
    //     echo "fallo";
    // }
?>
