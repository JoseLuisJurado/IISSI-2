<?php
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION("usuario");
    unset($_SESSION["usuario"]);

    require_once("ConexionBD.php");
    require_once("gestion_AdministracionDirector.php");

    if ($usuario["contraseña"] == $usuario["repetirContraseña"]) {
        $conn = crearconexionBD();

        if (comprobarContraseña($usuario)) {


            if ($excepcion <> "") {
                $_SESSION["excepcion"] = $excepcion;

                header("Location: excepcion.php");
            } else {
                header("Location: AdministracionDirector.php");
            }
        }else{
            header("Location: AdministracionDirector.php");
        }
    } else {
        header("Location: AdministracionDirector.php");
    }
} else {
    header("Location: AdministracionDirector.php");
}
