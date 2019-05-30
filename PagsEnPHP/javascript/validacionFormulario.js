function validacionGeneral() {

    res = true;
    res = res && validacionFormulario();
    res = res && validacionFechas();
    res = res && validacionConfirmacionContraseña();
    return res;
}

function validacionFormulario() {
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

    var letra = DNI.charAt(8);
    var numero = parseInt(DNI.slice(0, 8));
    if (LetrasDNI.charAt(numero % 23) != letra) {
        return false;
    } else {
        return true;
    }
}

function validacionFechas() {
    var fechaLLegada = new Date(document.forms["formularioReserva"]["FechaLlegada"].value);
    var fechaSalida = new Date(document.forms["formularioReserva"]["FechaSalida"].value);

    if (fechaSalida <= fechaLLegada) {
        return false;
    } else {
        return true;
    }
}

function validacionNombre() {
    var nombre = document.forms["formularioReserva"]["Nombre"].value;

    if (nombre.length > 15) {
        return false;
    } else {
        return true;
    }
}

function validacionPrimerApellido() {
    var apellido1 = document.forms["formularioReserva"]["PrimerApellido"].value;

    if (apellido1.length > 15) {
        return false;
    } else {
        return true;
    }
}

function validacionSegundoApellido() {
    var apellido2 = document.forms["formularioReserva"]["SegundoApellido"].value;

    if (apellido2.length > 15) {
        return false;
    } else {
        return true;
    }
}

function validacionConfirmacionContraseña() {
    var contraseña = document.forms["formularioReserva"]["pass"].value;
    var confirmarContraseña = document.forms["formularioReserva"]["confirmpass"].value;

    if (contraseña != confirmarContraseña) {
        return false;

    } else {

        if (contraseña.length > 25) {
            return false;

        } else {
            var valid = true;
            var hasNumber = /\d/; var hasUpperCases = /[A-Z]/; var hasLowerCases = /[a-z]/;
            valid = valid && (contraseña.length >= 6) && (hasNumber.test(contraseña)) && (hasUpperCases.test(contraseña)) && (hasLowerCases.test(contraseña));
            if (valid == false) {
                return valid;
            } else {
                return true;
            }
        }
    }
}

function validacionPoblacion() {
    var poblacion = document.forms["formularioReserva"]["Domicilio"].value;

    if (poblacion != "") {
        if (poblacion.length > 30) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function validacionCorreo() {
    var correo = document.forms["formularioReserva"]["CorreoElectronico"].value;
    var correoPadre = document.forms["formularioReserva"]["CorreoPadre"].value;

    if (correo != "" || correoPadre != "") {
        if (correo.length > 25 || correoPadre.length > 25) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function inputContraseña() {
    var contraseña = document.forms["formularioReserva"]["pass"].value;
    var hasNumber = /\d/; var hasUpperCases = /[A-Z]/; var hasLowerCases = /[a-z]/;

    if (contraseña == "") {
        document.getElementById("TextosPass").innerHTML = "";
    } else if (!hasNumber.test(contraseña)) {
        document.getElementById("TextosPass").innerHTML = "La contraseña no contiene números";
    } else if (!hasUpperCases.test(contraseña)) {
        document.getElementById("TextosPass").innerHTML = "La contraseña no contiene mayúsculas";
    } else if (!hasLowerCases.test(contraseña)) {
        document.getElementById("TextosPass").innerHTML = "La contraseña no contiene minúsculas";
    } else if (contraseña.length < 8) {
        document.getElementById("TextosPass").innerHTML = "La contraseña debe de tener almenos 8 dígitos";
    } else {
        document.getElementById("TextosPass").innerHTML = "";
    }

}

function inputDNI() {
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';
    var hasUpperCases = /[A-Z]/;


    var letra = DNI.charAt(8);
    var numero = parseInt(DNI.slice(0, 8));
    if (DNI == "") {
        document.getElementById("TextoDNI").innerHTML = "";
    } else if (!hasUpperCases.test(DNI)) {
        document.getElementById("TextoDNI").innerHTML = "El dni no tiene letra mayúscula";
    } else if (LetrasDNI.charAt(numero % 23) != letra) {
        document.getElementById("TextoDNI").innerHTML = "El valor no coincide con la letra del DNI";
    } else {
        document.getElementById("TextoDNI").innerHTML = "";
    }
}

function inputFechas() {
    var fechaLLegada = new Date(document.forms["formularioReserva"]["FechaLlegada"].value);
    var fechaSalida = new Date(document.forms["formularioReserva"]["FechaSalida"].value);

    if (fechaSalida <= fechaLLegada) {
        document.getElementById("textoFecha").innerHTML = "La fecha de salida es anterior o igual a la fecha de llegada";
    } else {
        document.getElementById("textoFecha").innerHTML = "";
    }
}

function inputCoincidenContraseñas() {
    var contraseña = document.forms["formularioReserva"]["pass"].value;
    var confirmarContraseña = document.forms["formularioReserva"]["confirmpass"].value;

    if (confirmarContraseña == "") {
        document.getElementById("textoConfirm").innerHTML = "";
    } else if (contraseña != confirmarContraseña) {
        document.getElementById("textoConfirm").innerHTML = "Las contraseñas escritas no coinciden";
    } else {
        document.getElementById("textoConfirm").innerHTML = "";
    }
}