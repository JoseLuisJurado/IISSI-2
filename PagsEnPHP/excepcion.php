<?php
session_start();

$excepcion = "No hay error";
if (isset($_SESSION['excepcion'])) {
	$excepcion = $_SESSION['excepcion'];
	}
	unset($_SESSION['excepcion']);

if (isset($_SESSION["destino"])) {
	$destino = $_SESSION["destino"];
	unset($_SESSION["destino"]);
} else
	$destino = "";

// if (isset($_SESSION["dentro"])) {
// 	echo $_SESSION["dentro"];
// 	unset($_SESSION["dentro"]);
// } else {
// 	unset($_SESSION["dentro"]);
// }
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta title="Residencia Estudiantil Digital">
	<link rel="stylesheet" href="css/cssInicio.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="icon" type="image/jpeg" href="imagenes/LogoRED.jpeg" />
	<Title>Residencia de estudiantes bahía</Title>
</head>

<body>

	<?php
	include "php/menu.php";
	?>
	<div class="cuerpo">

		<p class="p404">Se ha producido un error</p>
		<img class="caritatriste" src="imagenes/caritaTriste.png" />

	</div>
	<div class='excepcion'>
		<?php if ($excepcion == 'SQLSTATE[HY000]: General error: 1 OCIStmtExecute: ORA-00001: unique constraint (IISSI.SYS_C007026) violated ORA-06512: at "IISSI.INSERTAR_RESERVA", line 23 (ext\pdo_oci\oci_statement.c:148)'){
			$excepcion = 'Usuario ya registrado';
			//Capturamos el error y si se trata de unique constrain proporcionamos el mensaje de usuario repetido
		}
		echo "Información relativa al problema: <span class='Error' > $excepcion <span/>" ?>
	</div>
	<?php
	include "php/pie.php";
	?>
</body>

</html>
