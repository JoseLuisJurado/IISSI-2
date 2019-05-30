<?php
	function validarDatosReserva($conexion, $reservaForm){
	$errores=array();
    	// Validación del DNI
		if($reservaForm["DNI"]=="") 
		$errores[] = "<p>El DNI no puede estar vacío</p>";
		else if(!preg_match("/^[0-9]{8}[A-Z]$/", $reservaForm["DNI"])){
		$errores[] = "<p>El NIF debe contener 8 números y una letra mayúscula: " . $reservaForm["DNI"]. "</p>";
		}
		// Validación del nombre
		if($reservaForm['Nombre']==""){
		$errores[] ='* El nombre es un campo obligatorio';
		} else {
			if($reservaForm['Nombre']>50){
			$errores[] = '* Nombre demasiado largo';
			}
		}
		// Validación del primer apellido
		if($reservaForm['PrimerApellido']==""){
			$errores[] ='* Primer apellido es un campo obligatorio';
		} else {
			if($reservaForm['PrimerApellido']>50){
				$errores[] ='* Primer apellido demasiado largo, acórtelo';
			}
		}
		// Validación del segundo apellido
		if($reservaForm['SegundoApellido']==""){
			$errores[] ='* Segundo apellido es un campo obligatorio';
		} else {
			if($reservaForm['SegundoApellido']>50){
				$errores[] ='* Segundo apellido demasiado largo, acórtelo';
			}
		}
		// Validación del sexo
		if($reservaForm['Sexo']==""){
			$errores[] ='*Sexo: Por favor, elija con lo que mejor se identifique, pero elija';
		}
		// Validación del código postal
		if($reservaForm['CodigoPostal']==""){
			$errores[] ='* El código postal es un campo obligatorio';
		}
		else if(!preg_match("/[0-9]{5}/", $reservaForm["CodigoPostal"])){
		$errores[] = "<p>El Código postal debe contener 5 números" . $reservaForm["CodigoPostal"]. "</p>";
		}
		// Validación del correo
		if($reservaForm['CorreoElectronico']==""){
			$errores[] ='* El correo electrónico propio es un campo obligatorio';
		}
		// Validación de la contraseña
		if($reservaForm['pass']==""){
			$errores[] = 'La contraseña es un campo obligatorio';
		} else{
			if($reservaForm['pass']!=$reservaForm['confirmpass']){
				$errores[] = 'Las contraseñas no coinciden';
			}
		}
		// Validación de las fechas
		if($reservaForm["FechaLlegada"]>$reservaForm["FechaSalida"]){
			$errores[] ='* La fecha de llegada no puede ser posterior a la fecha de salida';
		}
		return $errores;
	}
?>
