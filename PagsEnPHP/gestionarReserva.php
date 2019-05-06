<?php

 function insertarReserva($conexion,$reservaForm) {
	
	$fechaLlegada = date('d/m/Y', strtotime($reservaForm["FechaLlegada"]));
	$fechaSalida = date('d/m/Y', strtotime($reservaForm["FechaSalida"]));
	
	try {
		$reservar = "CALL INSERTAR_RESERVA(:dni, :nombre, :ape1, :ape2, :sex, :may, :pai, :pob,
											 :cod, :dom, :corr, :corp, :pas, :lleg, :sal, :pag, :fpag, :pagc)";
		$stmt=$conexion->prepare($reservar);
		$stmt->bindParam(':dni',$reservaForm["DNI"]);
		$stmt->bindParam(':nombre',$reservaForm["Nombre"]);
		$stmt->bindParam(':ape1',$reservaForm["PrimerApellido"]);
		$stmt->bindParam(':ape2',$reservaForm["SegundoApellido"]);
		$stmt->bindParam(':sex',$reservaForm["Sexo"]);
		$stmt->bindParam(':may',$reservaForm["MayoriaEdad"]);
		$stmt->bindParam(':pai',$reservaForm["paises"]);
		$stmt->bindParam(':pob',$reservaForm["Poblacion"]);
		$stmt->bindParam(':cod',$reservaForm["CodigoPostal"]);
		$stmt->bindParam(':dom',$reservaForm["Domicilio"]);
		$stmt->bindParam(':corr',$reservaForm["CorreoElectronico"]);
		$stmt->bindParam(':corp',$reservaForm["CorreoPadre"]);
		$stmt->bindParam(':pas',$reservaForm["pass"]);
		$stmt->bindParam(':lleg',$fechaLlegada);
		$stmt->bindParam(':sal',$fechaSalida);
		$stmt->bindParam(':pag',$reservaForm["TipoPago"]);
		$stmt->bindParam(':fpag',$reservaForm["FormaPago"]);
		$stmt->bindParam(':pagc',$reservaForm["pagoComedor"]);
		$stmt->execute();
		
	} catch(PDOException $e) {
		echo $e-> getMessage();
    }
}