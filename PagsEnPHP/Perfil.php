ambio<?php
session_start();
require_once("gestionAdministracion_Usuario.php");

if(isset($_SESSION['login'])){
   $correo = $_SESSION['login']; //correo del usuario
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
            <p class="adminP"></p>
            <img src="imagenes\caritaTriste.png" alt="ImagenDelUsuario" class="adminI">
            Bienvenido <?php if($correo != "") echo $correo;?>, inicio de sesión correcto.
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
                        <section class="tabla">
                        	<ul class="sala">
                        		<li class="lista"><a href="#as" class="enlace" >Sala 1</a></li>
                        		<li class="lista"><a href="#as" class="enlace">Sala 1</a></li>
                        		<li class="lista"><a href="#as" class="enlace">Sala 1</a></li>
                        		<li class="lista"><a href="#as" class="enlace">Sala 1</a></li>
                        	</ul>
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
                <!-- Poner la fecha del último pago-->
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                        else echo "No hay fecha"; ?></p>
                <p class="adminP3"> 14</p>
            </section>
            <section class="adminS2">
                <p class="adminP2">Fecha de entrada</p>
                <p class="adminP3">Pago realizado</p>
            </section>
            <section class="adminS2">
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                        else echo "No hay fecha"; ?></p>
                <p class="adminP3"> Sí</p>
            </section>
            <section class="adminS2">
                <p class="adminP2">Fecha de salida</p>
            </section>
            <section class="adminS2">
                <p class="adminP2"> <?php if(isset($fechas[0]["FECHA_FIN"])) echo $fechas[0]["FECHA_FIN"];
                                        else echo "No hay fecha"; ?></p>
            </section>
        </div>
    </div>
    <?php
    include "php/pie.php";
    ?>

</html>
