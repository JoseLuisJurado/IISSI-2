<?php
session_start();

if (isset($_SESSION["reserva"])) {
    $reserva = $_SESSION["reserva"];
    unset($_SESSION["reserva"]);


    require_once("ConexionBD.php");
    require_once("gestion_AdministracionDirector.php");

    $conn = crearconexionBD();
    $borrar = editarLibros($conn, $reserva["DNI"],
    $reserva["NOMBRE"],$reserva["APELLIDO1"],$reserva["APELLIDO2"],
    $reserva["SEXO"],$reserva["FECHALLEGADA"],$reserva["FECHASALIDA"] );
    cerrarConexionBD($conn);

    if ($excepcion <> "") {
        $_SESSION["excepcion"] = $excepcion;
        
        header("Location: excepcion.php");

    }else {
        header("Location: AdministracionDirector.php");
    }
}else{
    header("Location: AdministracionDirector.php");
}
