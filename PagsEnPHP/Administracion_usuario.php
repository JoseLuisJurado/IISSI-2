<?php
session_start();
require_once("gestionAdministracion_Usuario.php");
// $nombre = 'bbbaaaaaaaaaaaaa';

// if (!isset($_SESSION["dentro"])) {
//     $_SESSION["dentro"] = "Estoy dentro de editar Libro";
// } else {
//     unset($_SESSION["dentro"]);
//     $_SESSION["dentro"] = "Estoy dentro de editar Libro";
// }

// $fechas = extraerFechasLlegadaSalida($nombre);

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
            Aquí estoy escribiendo el supuesto texto que iría junto al usuario, todavía no se cual es, pero en cuyo
            caso aquí está. Estoy
            probando como quedaría el texto escribiendo un texto largo aquí al lado y me doy estoy dando cuenta de
            que
            la reserva de salas está quedando muy feo, habrá que cambiarlo de alguna forma.
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
                        		<li class="sala">Sala 1</li>
                        		<li class="sala">Sala 1</li>
                        		<li class="sala">Sala 1</li>
                        		<li class="sala">Sala 1</li>
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
            <section>
                <!-- Poner la fecha del último pago-->
                <p style="float: left"> 16/04/2019</p>
                <p style="float: right"> 14</p>
            </section>
            <section class="adminS2">
                <p style="float:left">Fecha de entrada</p>
                <p style="float:right">Pago realizado</p>
            </section>
            <section>
                <p style="float: left"> <?php echo $fechas["FECHA_INICIO"] ?></p>
                <p style="float: right"> Sí</p>
            </section>
            <section class="adminS2">
                <p class="adminP4">Fecha de salida</p>
            </section>
            <section>
                <p style="float:left"> <?php echo $fechas["FECHA_FIN"] ?></p>
            </section>
        </div>
    </div>
    <?php
    include "php/pie.php";
    ?>

</html>
