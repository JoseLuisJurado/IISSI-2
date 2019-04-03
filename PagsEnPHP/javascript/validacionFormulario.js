
function validacionFormulario() {
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

    var letra = DNI.charAt(8);
    var numero = parseInt(DNI.slice(0,8));
    if(LetrasDNI.charAt(numero%23) != letra){
        alert("La letra del DNI no coincide con el número del DNI");
    }
}