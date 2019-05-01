<?php
    session_start();
    echo "Pasa por aqui";
    if(isset($_REQUEST["DNI"])){
        $reserva["DNI"] = $_REQUEST["DNI"];
        $reserva["NOMBRE"] = $_REQUEST["NOMBRE"];
        $reserva["APELLIDO1"] = $_REQUEST["APELLIDO1"];
        $reserva["APELLIDO2"] = $_REQUEST["APELLIDO2"];
        $reserva["SEXO"] = $_REQUEST["SEXO"];
        $reserva["FECHALLEGADA"] = $_REQUEST["FECHALLEGADA"];
        $reserva["FECHASALIDA"] = $_REQUEST["FECHASALIDA"];
        $_SESSION["reserva"] = $reserva;
        
        if(isset($_REQUEST["modificar"])) header("Location: accionModificarAdministracionDirector.php");
        else if(isset($_REQUEST["borrar"])) header("Location: accionBorrarAdministracionDirector.php");
        else header("Location: AdministracionDirector.php");
    }else{
        header("Location: AdministracionDirector.php");
    }
?>