<?php
session_start();

$excepcion = "No hay error";
if (isset($_SESSION['excepcion'])) {
	$excepcion = $_SESSION['excepcion'];
	unset($_SESSION['excepcion']);
}

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
	<link rel="stylesheet" href="css/css404.css" />
	<link rel="stylesheet" href="css/cssInicio.css" />
	<link rel="icon" type="image/jpeg" href="imagenes/LogoRED.jpeg" />
	<Title>Residencia de estudiantes bahía</Title>
</head>

<body>

	<?php
	include "php/menu.php";
	?>
	<div class="cuerpo">

		<p>La Página a la que intenta acceder no existe</p>
		<img hspace="5" vspace="5" src="imagenes/caritaTriste.png" width="50%" height="50%" style="text-align: center;" />


	</div>
	<div class='excepcion'>
		<?php echo "Información relativa al problema: $excepcion;" ?>
	</div>
	<?php
	include "php/pie.php";
	?>
</body>

</html>