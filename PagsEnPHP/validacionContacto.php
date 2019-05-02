<?php 
include_once 'gestionarContacto.php';
?>
<?php
	session_start();

	// Importar librerías necesarias para gestionar direcciones y géneros literarios
	require_once("ConexionBD.php");

	// Comprobar que hemos llegado a esta página porque se ha rellenado el formulario
	if (isset($_SESSION["formulario"])) {
		// Recogemos los datos del formulario
		$usuario["Nombre"] = $_REQUEST["Nombre"];
		$usuario["PrimerApellido"] = $_REQUEST["PrimerApellido"];
		$usuario["SegundoApellido"] = $_REQUEST["SegundoApellido"];
		$usuario["CorreoElectronico"] = $_REQUEST["CorreoElectronico"];
		$usuario["Asunto"] = $_REQUEST["Asunto"];
		$usuario["Mensaje"] = $_REQUEST["Mensaje"];
	
	}
	else // En caso contrario, vamos al formulario
		Header("Location: Contacto.php");
	$_SESSION["formulario"] = $usuario;
	$con = crearconexionBD();
	insertarContacto($con,$usuario);
	cerrarConexionBD($con);
	
?>