
function validacionFormulario() {
    document.write(<h2>Esta funcionando</h2>);
    var DNI = document.forms["formularioReserva"]["DNI"].value;
    var LetrasDNI = 'TRWAGMYFPDXBNJZSQVHLCKE';

    var letra = DNI.charAt(-1);
    var numero = parseInt(DNI.slice(0,7));

    if(LetrasDNI.charAt(numero%24) != letra){
        alert("La letra del DNI no coincide con el número del DNI");
    }
}