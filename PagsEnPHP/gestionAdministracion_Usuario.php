<?php
require_once("ConexionBD.php");

function extraerFechasLlegadaSalida($conn, $dni)
{
    try {

        if (!isset($_SESSION["dentro"])) {
            $_SESSION["dentro"] = "Estoy dentro de editar Libro";
        } else {
            unset($_SESSION["dentro"]);
            $_SESSION["dentro"] = "Estoy dentro de editar Libro";
        }

        $consulta = "SELECT FECHA_INICIO, FECHA_FIN FROM CONTRATO_RESIDENTE NATURAL JOIN RESIDENTE WHERE DNI_R = '$dni'";

        $stmt = $conn->query($consulta);
        $result = $stmt->fetchAll();
        return $result;

    } catch (PDOException $e) {
        $_SESSION['excepcion'] = $e->GetMessage();
        header("Location: excepcion.php");
    }
}
