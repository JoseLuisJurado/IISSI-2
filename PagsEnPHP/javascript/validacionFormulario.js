
function validacionFormulario() {
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

    var letra = DNI.charAt(9);
    var numero = parseInt(DNI.slice(0,8));
    alert(LetrasDNI.charAt(numero%24))
    alert(letra)
    if(LetrasDNI.charAt(numero%24) != letra){
        alert("La letra del DNI no coincide con el número del DNI");
    }
}