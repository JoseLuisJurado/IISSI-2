<?php
session_start();
require_once("gestionAdministracion_Usuario.php");

//si hay usuario (que debería de haber), extraigo de él las fechas.
if (isset($_SESSION['login'])) {
    $correo = $_SESSION['login'];
    $conn = crearconexionBD();
    $comedor = extraerPagoComedor($conn, $correo);
    if (isset($comedor)) {
        $comedorValor = $comedor[0]["PAGOCOMEDOR"];

        if ($comedorValor == 0) {
            $comedorValor = 'No';
        } else {
            $comedorValor = 'Si';
        }
    }
    $fechas = extraerFechasLlegadaSalida($conn, $correo);
    cerrarConexionBD($conn);
} else {
    Header("Location: Inicio_sesion.php");
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css">
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg">
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>

    <?php
    include "php/menu.php";
    ?>


    <script text="javascript">
        setTimeout("document.getElementById('mensaje').style.display='none';", 8000);
    </script>
    <div id="mensaje" style="display:block">
        <!--Extraigo el usuario que se ha aportado al incio de sesion -->
        Bienvenido <?php if ($correo != "") echo $correo; ?>, inicio de sesión correcto.<br>
        Esperamos que tenga una buena estancia en nuestra residencia.
        </p>
    </div>


    <main>
        <form class="formRes" method="GET">
            <legend class="adminSala">Reserva de salas</legend>
            <img src="imagenes\avatar.png" alt="ImagenDelUsuario" class="adminI">
            <fieldset class="fieldsetRes">
                <label class="adminL">Reserve un día:</label>
                <section class="adminS">
                    <label class="labelRes">
                        Desde: <input type="datetime-local">
                    </label>
                </section>
                <section class="sectionRes">
                    <label class="labelRes">
                        Hasta: <input type="datetime-local">
                    </label>
                </section>
            </fieldset>
            <div><input type="submit" value="Enviar"> </div>
        </form>
    </main>
    <div class="cuerpoPerfil">
        <section class="adminS2">

            <span class="adminP2">Fecha último pago</span>
            <span class="adminP3_1">Habitación Actual</span>
        </section>
        <section class="adminS2">

            <!-- Extraigo la fecha de pago de la residencia de la base de datos-->
            <span class="adminR2"> <?php if (isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                    else echo "<span class='error'> No hay fecha </span>" ?></span>
            <span class="adminR3"> WIP</span>

        </section>
        <section class="adminS2">
            <span class="adminP2">Fecha de llegada</span>
            <span class="adminP3"> Pago realizado</span>
        </section>
        <section class="adminS2">
            <!--Extraigo la fecha de entrada de la base de datos-->
            <span class="adminR2"> <?php if (isset($fechas[0]["FECHA_INICIO"])) echo $fechas[0]["FECHA_INICIO"];
                                    else echo "<span class='error'> No hay fecha </span>" ?></span>
            <span class="adminR3"> Sí</span>
        </section>
        <section class="adminS2">
            <span class="adminP2">Fecha de partida</span>
            <span class="adminP3">Comedor Pagado</span>
        </section>
        <section class="adminS2">
            <!--Extraigo de la base de datos la fecha de salida que se especifica en la reserva-->
            <span class="adminR2"> <?php if (isset($fechas[0]["FECHA_FIN"])) echo $fechas[0]["FECHA_FIN"];
                                    else echo "<span class='error'> No hay fecha </span>" ?></span>
            <span class="adminR3"><?php if (isset($comedorValor)) echo $comedorValor;
                                    else echo "<span class='error'> dato no encontrado </span>" ?></span>

        </section>
    </div>


    <?php
    include "php/pie.php";
    ?>
</body>

</html>