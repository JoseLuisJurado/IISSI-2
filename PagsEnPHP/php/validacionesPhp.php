<?php
    if(isset($_POST['Enviar'])){
		if(empty($dni)){
			echo "<span class='error'>* DNI es un campo obligatorio</span>";
		} else {
			if(strlen($dni)!=9){
				echo "<span class='error'>* DNI incorrecto</span>";
			}
		}
		if(empty($nombre)){
			echo "<span class='error'>* El nombre es un campo obligatorio</span>";
		} else {
			if(strlen($nombre)>50){
				echo "<span class='error'>* Nombre demasiado largo</span>";
			}
		}
		if(empty($primerApe)){
			echo "<span class='error'>* Primer apellido es un campo obligatorio</span>";
		} else {
			if(strlen($segundoApe)>50){
				echo "<span class='error'>* Primer apellido demasiado largo, acórtelo/span>";
			}
		}
		if(empty($segundoApe)){
			echo "<span class='error'>* Segundo apellido es un campo obligatorio</span>";
		} else {
			if(strlen($segundoApe)>50){
				echo "<span class='error'>* Segundo apellido demasiado largo, acórtelo/span>";
			}
		}
		if(empty($sex)){
			echo "<span class='error'>* Por favor, elija con lo que mejor se identifique, pero elija</span>";
		}
		if(empty($codpost)){
			echo "<span class='error'>* El código postal es un campo obligatorio</span>";
		} else{
			if(!filter_has_var($codpost, FILTER_VALIDATE_INT)){
				echo "<span class='error'>* El código postal debe ser un número</span>";
			}
		}
		if(empty($corr)){
			echo "<span class='error'>* El correo electrónico propio es un campo obligatorio</span>";
		} else{
			if(!filter_has_var($corr, FILTER_VALIDATE_EMAIL)){
				echo "<span class='error'>* El correo electrónico es incorrecto</span>";
			}
		}
		if(empty($contra)){
			echo "<span class='error'>* La contraseña es un campo obligatorio</span>";
		}
		if($lleg>$sal){
			echo "<span class='error'>* La fecha de llegada no puede ser posterior a la fecha de salida</span>";
		}
	}
?>