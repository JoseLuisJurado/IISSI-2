<?php
    session_start();

    if(isset($_REQUEST["DNI"])){
        $reserva["DNI"] = $_REQUEST["DNI"];
        $reserva["FirstName"] = $_REQUEST["FirstName"];
        $reserva["Primer Apellido"] = $_REQUEST["Primer Apellido"];
        $reserva["Segundo Apellido"] = $_REQUEST["Segundo Apellido"];
        $reserva["Sexo"] = $_REQUEST["Sexo"];
        $reserva["pais"] = $_REQUEST["pais"];
        $reserva["Población"] = $_REQUEST["Población"];
        $reserva["CódigoPostal"] = $_REQUEST["CódigoPostal"];
        $reserva["Domicilio"] = $_REQUEST["Domicilio"];
        $reserva["Correo electrónico"] = $_REQUEST["Correo electrónico"];
        $reserva["CorreoPadre"] = $_REQUEST["CorreoPadre"];
        $reserva["FechaLlegada"] = $_REQUEST["FechaLlegada"];
        $reserva["FechaSalida"] = $_REQUEST["FechaSalida"];
        $reserva["TipoPago"] = $_REQUEST["TipoPago"];
        $reserva["FormaPago"] = $_REQUEST["FormaPago"];
        $reserva["MayoriaEdad"] = $_REQUEST["MayoriaEdad"];
        $reserva["pagoComedor"] = $_REQUEST["pagoComedor"];

        $_SESSION["reserva"] = $reserva;
        
    }else{
        echo "No se ha pasado ningún parámetro";
    }
?>