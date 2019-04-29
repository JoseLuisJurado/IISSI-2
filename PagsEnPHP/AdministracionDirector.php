<?php
session_start();
require_once("conexionBD.php");
$conn = crearconexionBD();
require_once("paginacion_AdministracionDirector.php");
/*
if (isset($_SESSION["reserva"])) {
    $reserva = $_SESSION["reserva"];
    unset($_SESSION["reserva"]);
}

$pag_act = isset($_SESSION["pag_act"])? $_SESSION["pag_act"]:2;

$pag_act = isset($_REQUEST["pag_act"]) && is_numeric($_REQUEST["pag_act"])? $_REQUEST["pag_act"]:null;

$pag_size = isset($_REQUEST["pag_size"])? $_REQUEST["pag_size"]:10;

$pag_size = isset($_REQUEST["pag_size"]) && is_numeric($_REQUEST["pag_size"])? $_REQUEST["pag_size"]:$pag_size;
*/


if (isset($_SESSION["reserva"])) $reserva = $_SESSION["reserva"];
$pag_act = isset($_GET["pag_act"]) ? (int)$_GET["pag_act"] : (isset($reserva) ? (int)$reserva["PAG_ACT"] : 1);
$pag_size = isset($_GET["pag_size"]) ? (int)$_GET["pag_size"] : (isset($reserva) ? (int)$reserva["PAG_SIZE"] : 10);
if ($pag_act < 1) $pag_act = 1;
if ($pag_size < 1) $pag_size = 10;

unset($_SESSION["reserva"]);

$total_registros = total_consulta($conn, $consulta);
$consultaTotal = ceil($total_registros / $pag_size);
echo $consultaTotal.",";
echo $total_registros.",";
echo $pag_size.",";
if ($pag_act > $consultaTotal) $pag_act = $consultaTotal;

$reserva["PAG_ACT"] = $pag_act;
$reserva["PAG_SIZE"] = $pag_size;
$_SESSION["reserva"] = $reserva;

$filas = consulta_paginada($conn, $consulta, $pag_act, $pag_size);

cerrarConexionBD($conn);


/*
$_SESSION["pag_act"] = $pag_act;

$consultaTotal = ceil(total_consulta($conn, $consulta) / $pag_size);

$consulaPaginada = consulta_paginada($conn, $consulta, $pag_act, $pag_size);

cerrarConexionBD($conn);
*/
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
        <?php foreach ($filas as $pagina) { ?>
            <article>
                <form method="post" action="controlarForlumario-reserva.php" class="muestraFormulario">
                    <div id=botones_modificacion>
                        
                    </div>
                    <div>
                        <input id="DNI" name="DNI" type="text" value="<?php echo $pagina["DNI_R"]; ?>" />
                        <input id="NOMBRE" name="NOMBRE" type="text" value="<?php echo $pagina["NOMBRE"] . " " .
                                                                                $pagina["APELLIDO1"] . " " . $pagina["APELLIDO2"]; ?>" />
                        <input id="SEXO" name="SEXO" type="text" value="<?php echo $pagina["GENERO"]; ?>" />
                        <input id="FECHALLEGADA" name="FECHALLEGADA" type="text" value="<?php echo $pagina["FECHA_INICIO"]; ?>" />
                        <input id="FECHASALIDA" name="FECHASALIDA" type="text" value="<?php echo $pagina["FECHA_FIN"]; ?>" />
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