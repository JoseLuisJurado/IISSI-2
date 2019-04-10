<?php
    function crearconexionBD(){
        
        $host="oci:dbname=localhost/XE;charset=UTF8";
        $usuario = "IISSI";
        $password = "IISSI";

        try{
            $conexion = new PDO($host, $usuario, $password, array(PDO::ATTR_PERSISTENT => true));

            $conexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            $_SESSION['excepcion'] = $e->getMessage();
            
        }
    }

    function cerrarConexionBD($conexion){
        $conexion = null;
    }

    function altaUsuarioBD($c, $f){
        $nif = $f["DNI"];
        $nombre = $f["FirstName"];
        $primerApellido = $f["Primer Apellido"];
        $segundoApellido = $f["Segundo Apellido"];
        $sexo = $f["Sexo"];
        $pais = $f["pais"];
        $poblacion = $f["Población"];
        $codigoPostal = $f["CódigoPostal"];
        $domicilio = $f["Domicilio"];
        $correoElectronico = $f["Correo electrónico"];
        $correoPadre = $f["CorreoPadre"];
        $fechaLlegada = $f["FechaLlegada"];
        $fechaSalida = $f["FechaSalida"];
        $tipoPago = $f["TipoPago"];
        $formaPago = $f["FormaPago"];
        $mayoriaEdad = $f["MayoriaEdad"];
        $pagoComedor = $f["pagoComedor"];

        $comando1 = "INSERT INTO RESIDENTE(DNI_R, Nombre, Genero, PagoComedor, Es_Mayor) ";
        
        $comando1 += "VALUES('$nif','$nombre'+' '+'$primerApellido'+' '+'$segundoApellido','$sexo','$pagoComedor','$mayoriaEdad')";

        $comando2 = "INSERT INTO contrato_residente (Correo_Hijo, Correo_padre, Fecha_inicio, Fecha_fin, TipoPago,"
        ." FormaPago, Pais, Poblacion, Domicilio, CodPostal, DNI_R)";
        
        $comando2 += "VALUES('$correoElectronico','$correoPadre','$fechaLlegada','$fechaSalida','$tipoPago',"
        ."'$formaPago','$pais','$poblacion','$domicilio','$codigoPostal','$nif')";
    }
?>