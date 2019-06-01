<?php
session_start();
//procedimiento para borrar un residente desde la administración
if (isset($_SESSION["reserva"])) {
    $reserva = $_SESSION["reserva"];
    unset($_SESSION["reserva"]);
    $reservaAux["PAG_ACT"] = $reserva["PAG_ACT"];
    $reservaAux["PAG_SIZE"] = $reserva["PAG_SIZE"];
    $_SESSION["reserva"] = $reservaAux;

    require_once("ConexionBD.php");
    require_once("gestion_AdministracionDirector.php");

    $conn = crearconexionBD();
    $borrar = borrarConsulta($conn, $reserva["DNI"]);
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
