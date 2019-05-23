function validacionGeneral() {

    res = true;
    res = res & validacionFormulario();
    res = res & validacionFechas();
    res = res & validacionConfirmacionContraseña();
}

function validacionFormulario() {
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

    var letra = DNI.charAt(8);
    var numero = parseInt(DNI.slice(0, 8));
    if (LetrasDNI.charAt(numero % 23) != letra) {
        alert("La letra del DNI no coincide con el número del DNI");
        return false;
    }else{
        return true;
    }
}

function validacionFechas() {
    var fechaLLegada = new Date(document.forms["formularioReserva"]["FechaLlegada"].value);
    var fechaSalida = new Date(document.forms["formularioReserva"]["FechaSalida"].value);

    if (fechaSalida <= fechaLLegada) {
        alert("La fecha de llegada debe de ser anterior a la fecha de salida");
        return false;
    }else{
        return true;
    }
}

function validacionNombre() {
    var nombre = document.forms["formularioReserva"]["Nombre"].value;

    if (nombre.length > 15) {
        alert("Este nombre es demasiado largo para la base de datos");
        return false;
    }else{
        return true;
    }
}

function validacionPrimerApellido() {
    var apellido1 = document.forms["formularioReserva"]["PrimerApellido"].value;

    if (apellido1.length > 15) {
        alert("Este primero apellido no se puede insertar en la base de datos");
        return false;
    }else{
        return true;
    }
}

function validacionSegundoApellido() {
    var apellido2 = document.forms["formularioReserva"]["SegundoApellido"].value;

    if (apellido2.length > 15) {
        alert("Este segundo apellido no se puede insertar en la base de datos");
        return false;
    }else{
        return true;
    }
}

function validacionConfirmacionContraseña() {
    var contraseña = document.forms["formularioReserva"]["pass"].value;
    var confirmarContraseña = document.forms["formularioReserva"]["confirmpass"].value;

    if (contraseña != confirmarContraseña) {
        alert("Las contraseñas no coinciden");
        return false;

    } else {

        if (contraseña.length > 25) {
            alert("No se puede introducir una contraseña tan larga, debe de ser menor que 25");
            return false;

        } else {
            var valid = true;
            var hasNumber = /\d/; var hasUpperCases = /[A-Z]/; var hasLowerCases = /[a-z]/;
            valid = valid && (contraseña.length >= 6) && (hasNumber.test(contraseña)) && (hasUpperCases.test(contraseña)) && (hasLowerCases.test(contraseña));
            if (valid == false) {
                alert("La contraseña debe de tener un número, una mayúscula y una minúscula y mayor que 8");
                return valid;
            }else{
                return true;
            }
        }
    }
}

function validacionPoblacion() {
    var poblacion = document.forms["formularioReserva"]["Domicilio"].value;

    if (poblacion != "") {
        if (poblacion.length > 30) {
            alert("No existe ninguna poblacion con este tamaño");
            return false;
        }else{
            return true;
        }
    }else{
        return true;
    }
}

function validacionCorreo() {
    var correo = document.forms["formularioReserva"]["CorreoElectronico"].value;
    var correoPadre = document.forms["formularioReserva"]["CorreoPadre"].value;

    if (correo != "" || correoPadre != "") {
        if (correo.length > 25 || correoPadre.length > 25) {
            alert("No se permite en la base de datos un correo tan largo");
            return false;
        }else{
            return true;
        }
    }else{
        return true;
    }
}
