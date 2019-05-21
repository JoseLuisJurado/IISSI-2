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
		Header("Location: formulario-reserva.php");
	$_SESSION["formulario"] = $reservaForm;
	$cone = crearconexionBD();
	insertarReserva($cone,$reservaForm);
	cerrarConexionBD($cone);
	
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta title="Residencia Estudiantil Digital">
    <link rel="stylesheet" href="css/cssInicio.css" />
    <link rel="icon" type="image/png" href="imagenes/LogoRED.jpeg" />
    <Title>Residencia de estudiantes bahía</Title>
</head>

<body>
	<?php 
	include "php/menu.php";
	 ?>
    <div class="cuerpo2">
        <h1>Reserva realizada correctamente, ahora puede iniciar sesión y comprobar sus datos</h1>
        
    </div>
			<?php 
	include "php/pie.php";
	 ?>
	
</body>

</html>
