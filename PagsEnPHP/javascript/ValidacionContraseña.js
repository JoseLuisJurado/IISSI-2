$(document).ready(function() {
	// Código JQuery
	//alert ("Tomo control con JQuery!");
	
	// Inicialmente ocultar el Div que contiene al input de confirmación de la password
	$("#confirmpass").parent().hide();
	
	// Validar coincidencia de passwords
	$("#confirmpass").keyup ( function() {
		var type = passwordColor(this.value);	
		$(this).addClass("error"); // Por defecto error
		var msg = "No coinciden las passwords";
		if ( $("#pass").val() == this.value ) {
			msg = "";
			$(this).removeClass().addClass ( $("#pass").attr("class")  );
		}	
		this.setCustomValidity(msg); // Sustituir mensaje. Si no vacío, elemento inválido 
	});

	
});

// Código Java Script

function passwordValidation(){ // Validación de la password de una cadena
	
	var valid = true;
	var hasNumber = /\d/;		var hasUpperCases = /[A-Z]/;		var hasLowerCases = /[a-z]/;
	valid=valid && (pwd.length>=6) && (hasNumber.test(pwd)) && (hasUpperCases.test(pwd)) && (hasLowerCases.test(pwd));
	return valid;
}