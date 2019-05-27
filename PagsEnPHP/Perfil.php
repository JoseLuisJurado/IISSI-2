<?php
session_start();
require_once("gestionAdministracion_Usuario.php");

//si hay usuario (que debería de haber), extraigo de él las fechas.
if(isset($_SESSION['login'])){
   $correo = $_SESSION['login'];
   $conn = crearconexionBD();

   $fechas = extraerFechasLlegadaSalida($conn, $correo);
   cerrarConexionBD($conn);
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <meta name="autor" content="José Luis Jurado Ortiz">
    <link rel="stylesheet" href="css/formulario-reserva.css">
    <link rel="stylesheet" href="css/cssInicio.css">
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg">
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>

    <?php
    include "php/menu.php";
    ?>
    <div class="admin1">
        <div class="admin2">
            <p class="adminP">
            <img src="imagenes\caritaTriste.png" alt="ImagenDelUsuario" class="adminI">
            <!--Extraigo el usuario que se ha aportado al incio de sesion -->
            Bienvenido <?php if($correo != "") echo $correo;?>, inicio de sesión correcto.<br>
            Esperamos que tenga una buena estancia en nuestra residencia.
            </p>

        </div>
        <div class="alineacion">
            <main>
                <form method="GET">
                    <legend>Reserva de salas</legend>
                    <fieldset>
                        <label class="adminL">Reserve un día:</label>
                        <section class="adminS">
                            <label>
                                Desde: <input type="datetime-local">
                            </label>
                        </section>
                        <section>
                            <label>
                                Hasta: <input type="datetime-local">
                            </label>
                        </section>
                    </fieldset>
                    <div><input type="submit" value="Enviar"> </div>
                </form>
            </main>
            <section class="adminS2">
                <p class="adminP2">Fecha último pago</p>
                <p class="adminP3">Habitación Actual</p>
            </section>
            <section class="adminS2">
                <!-- Extraigo la fecha de pago de la residencia de la base de datos-->
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                        else echo "<span class='error'> No hay fecha </span>"; ?></p>
                <p class="adminP3"> 14</p>
            </section>
            <section class="adminS2">
                <p class="adminP2">Fecha de entrada</p>
                <p class="adminP3">Pago realizado</p>
            </section>
            <section class="adminS2">
                <!--Extraigo la fecha de entrada de la base de datos-->
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                        else echo "<span class='error'> No hay fecha </span>"; ?></p>
                <p class="adminP3"> Sí</p>
            </section>
            <section class="adminS2">
                <p class="adminP2">Fecha de salida</p>
            </section>
            <section class="adminS2">
                <!--Extraigo de la base de datos la fecha de salida que se especifica en la reserva-->
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_FIN"])) echo $fechas[0]["FECHA_FIN"];
                                        else echo "<span class='error'> No hay fecha </span>"; ?></p>
            </section>
        </div>
    </div>
    <?php
    include "php/pie.php";
    ?>

</html>
