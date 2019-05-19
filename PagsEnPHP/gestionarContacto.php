<?php
  /*
     * #===========================================================#
     * #	Este fichero contiene las funciones de gestión
     * #	de usuarios de la capa de acceso a datos
     * #==========================================================#
     */

 function insertarContacto($conexion,$usuario) {
	// BUSCA LA OPERACIÓN ALMACENADA "INSERTAR_USUARIO" EN SQL
	// 			PARA SABER CUÁLES SON SUS PARÁMETROS.
	// RECUERDA QUE SE INVOCA MEDIANTE 'CALL' EN PL/SQL
	// RECUERDA QUE EL FORMATO DE FECHA PARA ORACLE ES "d/m/Y"
	// RECUERDA EL TRY/CATCH
	// para ver si le llega algo o no:print_r($usuario);
	try {
		$consulta = "CALL INSERTAR_CONTACTO(:nombre, :ape1, :ape2, :corr, :asu, :men)";
		$stmt=$conexion->prepare($consulta);
		$stmt->bindParam(':nombre',$usuario["Nombre"]);
		$stmt->bindParam(':ape1',$usuario["PrimerApellido"]);
		$stmt->bindParam(':ape2',$usuario["SegundoApellido"]);
		$stmt->bindParam(':corr',$usuario["CorreoElectronico"]);
		$stmt->bindParam(':asu',$usuario["Asunto"]);
		$stmt->bindParam(':men',$usuario["Mensaje"]);
		$stmt->execute();
	} catch(PDOException $e) {
		echo $e-> getMessage();
		header ("Location: excepcion.php");
		// Si queremos visualizar la excepción durante la depuración: $e->getMessage();
    }
}
