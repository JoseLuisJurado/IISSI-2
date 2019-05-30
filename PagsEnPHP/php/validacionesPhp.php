<?php
	function validarDatosReserva($conexion, $nuevoUsuario){
	$errores=array();
    if(isset($_POST['Enviar'])){
		if($nuevoUsuario['DNI']==""){
			$errores[] ='* DNI es un campo obligatorio';
		} else if(!preg_match("/^[0-9]{8}[A-Z]$/", $nuevoUsuario["nif"])){
		$errores[] = 'El NIF debe contener 8 números y una letra mayúscula';
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
		} else{
			if(!filter_has_var($nuevoUsuario['CodigoPostal'], FILTER_VALIDATE_INT)){
				$errores[] ='* El código postal debe ser un número';
			}
		}
		if($nuevoUsuario['CorreoElectronico']==""){
			$errores[] ='* El correo electrónico propio es un campo obligatorio';
		} else{
			if(!filter_has_var($nuevoUsuario['CorreoElectronico'], FILTER_VALIDATE_EMAIL)){
				$errores[] ='* El correo electrónico es incorrecto';
			}
		}
		if($nuevoUsuario['pass']==""){
			$errores[] = 'La contraseña es un campo obligatorio';
		}
		else if($nuevoUsuario["pass"] != $nuevoUsuario["confirmpass"]){
		$errores[] = 'Las contraseñas no coinciden';
	}
		if($nuevoUsuario["FechaLlegada"]>$nuevoUsuario["FechaSalida"]){
			$errores[] ='* La fecha de llegada no puede ser posterior a la fecha de salida';
		}
	}

?>
