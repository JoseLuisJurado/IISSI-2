<?php
session_start();
//if (!isset($_SESSION['login'])=='margarita@gmail.com')
//	Header("Location: Inicio_sesion.php");

require_once("conexionBD.php");
$conn = crearconexionBD();
require_once("gestion_AdministracionDirector.php");

if (isset($_SESSION["reserva"])) $reserva = $_SESSION["reserva"];
$pag_act = isset($_GET["pag_act"]) ? (int)$_GET["pag_act"] : (isset($reserva["PAG_ACT"]) ? (int)$reserva["PAG_ACT"] : 1);
$pag_size = isset($_GET["pag_size"]) ? (int)$_GET["pag_size"] : (isset($reserva["PAG_SIZE"]) ? (int)$reserva["PAG_SIZE"] : 10);
if ($pag_act < 1) $pag_act = 1;
if ($pag_size < 1) $pag_size = 10;

unset($_SESSION["reserva"]);

$total_registros = total_consulta($conn, $consulta); //Cantidad de registros totales
$consultaTotal = ceil($total_registros / $pag_size);
if ($pag_act > $consultaTotal) $pag_act = $consultaTotal;

$reserva["PAG_ACT"] = $pag_act;
$reserva["PAG_SIZE"] = $pag_size;
$_SESSION["reserva"] = $reserva;

$filas = consulta_paginada($conn, $consulta, $pag_act, $pag_size);

cerrarConexionBD($conn);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="stylesheet" href="css/cssAdministracionDirector.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
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
            </form><br><br>
        </nav>
        <div class="cuadro">
        <?php foreach ($filas as $pagina) { ?>
        	
            <article>
            	
                <form method="post" action="controlarAdministracionDirector.php" class="muestraFormulario">
                    <div class="DescripcionBotones">
                        <span class="TextoEditar">
                            Editar
                        </span>
                        <span class="TextoBorrar">
                            Borrar
                        </span>
                        <span class="TextoNombre">
                            Nombre
                        </span>
                        <span class="TextoApellido1">
                            Primer Apellido
                        </span>
                        <span class="TextoApellido2">
                            Segundo Apellido
                        </span>
                        <span class="TextoSexo">
                            Sexo
                        </span>
                        <span class="TextoFecha1">
                            Fecha Llegada
                        </span>
                        <span class="TextoFecha2">
                            Fecha Salida
                        </span>
                    </div>

                    <div id="botones_modificacion" class="botones_modificacion">
                        
                        <?php if (isset($reserva["DNI"]) && $reserva["DNI"] == $pagina["DNI_R"]) { ?>
                            <button id="modificar" class="modificar" type="submit" name="modificar">
                                <img src="http://www.fileformat.info/info/unicode/char/2714/heavy_check_mark.png" width="22px">
                            </button>
                        <?php } else { ?>
                            <button id="editar" class="editar" type="submit" name="editar">
                                <img src="https://www.fileformat.info/info/unicode/char/2702/black_scissors.png" width="22px">
                            </button>
                        <?php } ?>
                        <button id="borrar" class="borrar" type="submit" name="borrar">
                            <img src="http://www.fileformat.info/info/unicode/char/270f/pencil.png" width="22px"/>
                        </button>
                    </div>

                    <div id="input_display" class="input_display">
                        <input id="DNI" name="DNI" type="hidden" height="40px" value="<?php echo $pagina["DNI_R"]; ?>" />
                        <input id="NOMBRE" name="NOMBRE" type="text" value="<?php echo $pagina["NOMBRE"]; ?>" />
                        <input id="APELLIDO1" name="APELLIDO1" value="<?php echo $pagina["APELLIDO1"]; ?>" />
                        <input id="APELLIDO2" name="APELLIDO2" value="<?php echo $pagina["APELLIDO2"]; ?>" />
                        <input id="SEXO" name="SEXO" type="text" value="<?php echo $pagina["GENERO"]; ?>" />
                        <input id="FECHALLEGADA" name="FECHALLEGADA" type="text" value="<?php echo $pagina["FECHA_INICIO"]; ?>" />
                        <input id="FECHASALIDA" name="FECHASALIDA" type="text" value="<?php echo $pagina["FECHA_FIN"]; ?>" />
                    </div><br>

                    <!-- <?php foreach ($_SESSION["reserva"] as $res) echo "<br>Lo que hay dentro de reserva: " . $res ?> -->
                    <!-- <?php if (isset($_SESSION["dentro"])) {
                        echo $_SESSION["dentro"];
                        unset($_SESSION["dentro"]);
                    } else ?> -->

                </form>
                
            </article>
            
        <?php   } ?>
</div>
    </main>
    <?php
    include "php/pie.php";
    ?>
</body>

</html>
