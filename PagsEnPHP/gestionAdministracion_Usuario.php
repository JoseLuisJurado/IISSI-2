<?php
require_once("ConexionBD.php");

function extraerFechasLlegadaSalida($nombre)
{
    try {

        $conn = crearconexionBD();

        $consulta = "SELECT FECHA_INICIO, FECHA_FIN FROM CONTRATO_RESIDENTE NATURAL JOIN RESIDENTE WHERE NOMBRE = '$nombre';";

        return $conn->query($consulta);

    } catch (PDOException $e) {

        $_SESSION['excepcion'] = $e->GetMessage();
        header("Location: excepcion.php");
    }
}
