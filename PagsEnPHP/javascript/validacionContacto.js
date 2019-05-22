function validacionGeneral(){
    
    function validacionNombre(){
        nombre = document.forms["formularioContacto"]["Nombre"].value;

        if(nombre > 15){
            alert("No se puede insertar un nombre tan largo");
            return false;
        }
    }

    function validacionPrimerApellido(){
        apellido1 = document.forms["formularioContacto"]["PrimerApellido"].value;

        if(apellido1 > 15){
            alert("El primer apellido es demasiado largo");
            return false;
        }
    }

    function validacionSegundoApellido(){
        apellido2 = document.forms["formularioContacto"]["SegundoApellido"].value;

        if(apellido2 > 15){
            alert("El segundo apellido es demasiado largo");
            return false;
        }
    }

    function validacionCorreo(){
        correo = document.forms["formularioContacto"]["CorreoElectronico"].value;

        if(correo > 25){
            alert("El correo electronico es demasiado largo");
            return false;
        }
    }

    function validacionAsunto(){
        asunto = document.forms["formularioContacto"]["Asunto"].value;

        if(asunto > 100){
            alert("El asunto es demasiado largo");
            return false;
        }
    }
}