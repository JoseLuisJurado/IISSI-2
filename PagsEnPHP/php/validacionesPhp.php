<?php
	function validarDatosReserva($conexion, $nuevoUsuario){
	$errores=array();
    if(isset($_POST['Enviar'])){
		if($nuevoUsuario['DNI']==""){
			$errores[] ='* DNI es un campo obligatorio';
		} else if(!preg_match("/^[0-9]{8}[A-Z]$/", $nuevoUsuario["DNI"])){
		$errores[] = 'El DNI debe contener 8 números y una letra mayúscula';
	}
		}
		if($nuevoUsuario['Nombre']==""){
			$errores[] ='* El nombre es un campo obligatorio';
		} else {
			if($nuevoUsuario['Nombre']>50){
				$errores[] = '* Nombre demasiado largo';
			}
		}
		if($nuevoUsuario['PrimerApellido']==""){
			$errores[] ='* Primer apellido es un campo obligatorio';
		} else {
			if($nuevoUsuario['PrimerApellido']>50){
				$errores[] ='* Primer apellido demasiado largo, acórtelo';
			}
		}
		if($nuevoUsuario['SegundoApellido']==""){
			$errores[] ='* Segundo apellido es un campo obligatorio';
		} else {
			if($nuevoUsuario['SegundoApellido']>50){
				$errores[] ='* Segundo apellido demasiado largo, acórtelo';
			}
		}
		if($nuevoUsuario['Sexo']==""){
			$errores[] ='* Por favor, elija con lo que mejor se identifique, pero elija';
		}
		if($nuevoUsuario['CodigoPostal']==""){
			$errores[] ='* El código postal es un campo obligatorio';
		}
		if($nuevoUsuario['CorreoElectronico']==""){
			$errores[] ='* El correo electrónico propio es un campo obligatorio';
		}
		if($nuevoUsuario['pass']==""){
			$errores[] = 'La contraseña es un campo obligatorio';
		}
		if($nuevoUsuario["FechaLlegada"]>$nuevoUsuario["FechaSalida"]){
			$errores[] ='* La fecha de llegada no puede ser posterior a la fecha de salida';
		}
	}

?>
