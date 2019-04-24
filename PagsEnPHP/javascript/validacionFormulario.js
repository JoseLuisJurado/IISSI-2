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

function passwordValidation(pwd){ // Validación de la password de una cadena
	var valid = true;
	var hasNumber = /\d/;		var hasUpperCases = /[A-Z]/;		var hasLowerCases = /[a-z]/;
	valid=valid && (pwd.length>=6) && (hasNumber.test(pwd)) && (hasUpperCases.test(pwd)) && (hasLowerCases.test(pwd));
	return valid;
}

function validacionGeneral(){
    function validacionFormulario() {
        var DNI = document.forms["formularioReserva"]["DNI"].value;
        var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

        var letra = DNI.charAt(8);
        var numero = parseInt(DNI.slice(0, 8));
        if (LetrasDNI.charAt(numero % 23) != letra) {
            alert("La letra del DNI no coincide con el número del DNI");
        }
    }

    function validacionFechas() {
        var fechaLLegada = new Date(document.forms["formularioReserva"]["FechaLlegada"].value);
        var fechaSalida = new Date(document.forms["formularioReserva"]["FechaSalida"].value);

        if (fechaSalida <= fechaLLegada) {
            alert("La fecha de llegada debe de ser anterior a la fecha de salida");
        }
    }

    validacionFormulario();
    validacionFechas();
}
