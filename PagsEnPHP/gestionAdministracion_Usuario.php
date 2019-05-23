<?php
require_once("ConexionBD.php");

function extraerFechasLlegadaSalida($conn, $correo)
{
    try {

        //Comprobacion de errores para saber si la funcion se ejecuta correctamente
        // if (!isset($_SESSION["dentro"])) {
        //     $_SESSION["dentro"] = "Estoy dentro de editar";
        // } else {
        //     unset($_SESSION["dentro"]);
        //     $_SESSION["dentro"] = "Estoy dentro de editar";
        // }

        $consulta = "SELECT FECHA_INICIO, FECHA_FIN FROM USUARIO_REGISTRADO NATURAL JOIN CONTRATO_RESIDENTE WHERE CORREO = '$correo'";

        $stmt = $conn->query($consulta);
        $result = $stmt->fetchAll();
        return $result;

    } catch (PDOException $e) {
        $_SESSION['excepcion'] = $e->GetMessage();
        header("Location: excepcion.php");
    }
}
