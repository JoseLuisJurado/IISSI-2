<?php
include_once 'gestionarReserva.php';
include_once 'php/validacionesPhp.php';
include_once 'ConexionBD.php';
?>
<?php
session_start();
	$conexion = crearconexionBD();
	$formulario = $_SESSION['formulario'];
	$errores = validarDatosReserva($conexion, $formulario);
	cerrarConexionBD($conexion);
	
	// Si se han detectado errores
	if (count($errores)>0) {
		// Guardo en la sesión los mensajes de error y volvemos al formulario
		$_SESSION["errores"] = $errores;
		Header('Location: formulario-reserva.php');
	}
	else{
		Header('Location: validacionReserva.php');
	}
?>