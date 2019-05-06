<?php 
include_once 'gestionarReserva.php';
?>
<?php
	session_start();

	// Importar librerías necesarias para gestionar direcciones y géneros literarios
	require_once("ConexionBD.php");

	// Comprobar que hemos llegado a esta página porque se ha rellenado el formulario
	if (isset($_SESSION["formulario"])) {
		// Recogemos los datos del formulario
		$reservaForm['DNI'] = $_REQUEST["DNI"];
		$reservaForm['Nombre'] = $_REQUEST["Nombre"];
		$reservaForm['PrimerApellido'] = $_REQUEST["PrimerApellido"];
		$reservaForm['SegundoApellido'] = $_REQUEST["SegundoApellido"];
		$reservaForm['Sexo'] = $_REQUEST["Sexo"];
		$reservaForm['MayoriaEdad'] = $_REQUEST["MayoriaEdad"];
		$reservaForm['paises'] = $_REQUEST["paises"];
		$reservaForm['Poblacion'] = $_REQUEST["Poblacion"];
		$reservaForm['CodigoPostal'] = $_REQUEST["CodigoPostal"];
		$reservaForm['Domicilio'] = $_REQUEST["Domicilio"];
		$reservaForm['CorreoElectronico'] = $_REQUEST["CorreoElectronico"];
		$reservaForm['CorreoPadre'] = $_REQUEST["CorreoPadre"];
		$reservaForm['pass'] = $_REQUEST["pass"];
		$reservaForm['FechaLlegada'] = $_REQUEST["FechaLlegada"];
		$reservaForm['FechaSalida'] = $_REQUEST["FechaSalida"];
		$reservaForm['TipoPago'] = $_REQUEST["TipoPago"];
		$reservaForm['FormaPago'] = $_REQUEST["FormaPago"];
		$reservaForm['pagoComedor'] = $_REQUEST["pagoComedor"];
		
	}
	else // En caso contrario, vamos al formulario
		Header("Location: Contacto.php");
	$_SESSION["formulario"] = $reservaForm;
	$cone = crearconexionBD();
	insertarReserva($cone,$reservaForm);
	cerrarConexionBD($cone);
	
?>
