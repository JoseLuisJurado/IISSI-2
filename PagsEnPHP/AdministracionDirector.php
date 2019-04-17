<?php
session_start();
require_once("ConexionBD.php");
$conn = crearconexionBD();
require_once("paginacion_AdministracionDirector.php");

if (isset($_SESSION["reserva"])) {
    $reserva = $_SESSION["reserva"];
    unset($_SESSION["reserva"]);
}

if (isset($_SESSION["pag_act"])) {
    $pag_act = $_SESSION["pag_act"];
} else     $pag_act = 1;

if (isset($_REQUEST["pag_act"])) {
    $pag_act = $_REQUEST["pag_act"];
}

if (isset($_REQUEST["pag_size"])) {
    $pag_size = $_REQUEST["pag_size"];
} else $pag_size = 10;

$_SESSION["pag_act"] = $pag_act;

$consultaTotal = ceil(total_consulta($conn, $consulta) / $pag_size);

$consulaPaginada = consulta_paginada($conn, $consulta, $pag_act, $pag_size);

cerrarConexionBD($conn);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
</head>

<body>
    <?php
    include "php/menu.php";

    ?>
    <main class="cuerpo">
        <nav>
            <div>
                <?php
                for ($pagina = 1; $pagina <= $consultaTotal; $pagina++) {
                    if ($pagina == $pag_act) {
                        echo ("<span>$pagina</span>");
                    } else {
                        echo ("<a href='AdministracionDirector.php?pag_act=$pagina'>$pagina</a>");
                    }
                }
                ?>
            </div>

            <form method="get" action="AdministracionDirector.php">
                <input type="number" id="pag_size" name="pag_size" value="<?php echo $pag_size ?>" autofocus>
                <input type="submit" value="Cambiar!">
            </form>
        </nav>
        <?php foreach ($consulaPaginada as $pagina) { ?>
            <article>
                <form method="post" action="controlarForlumario-reserva.php">
                    <div>
                        <input id="DNI" name="DNI" type="text" value="<?php echo $pagina["DNI"];?>"/>
                        <input id="NOMBRE" name="NOMBRE" type="text" value="<?php echo $pagina["FirstName"]." ".
                        $pagina["Primer Apellido"]." ".$pagina["Segundo Apellido"];?>"/>
                        <input id="SEXO" name="SEXO" type="text" value="<?php echo $pagina["Sexo"];?>"/>
                        <input id="FECHALLEGADA" name="FECHALLEGADA" type="text" value="<?php echo $pagina["FechaLlegada"];?>"/>
                        <input id="FECHASALIDA" name="FECHASALIDA" type="text" value="<?php echo $pagina["FechaSalida"];?>"/>
                    </div>
                </form>
            </article>
    <?php   } ?>
        </main>
        <?php
        include "php/pie.php";
        ?>



    </body>

    </html>