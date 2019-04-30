<?php

function consulta_paginada($conn, $query, $pag_num, $pag_size)
{
	try {

		$primera = ($pag_num - 1) * $pag_size + 1;
		$ultima  = $pag_num * $pag_size;
		$consulta_paginada =
			"SELECT * FROM ( "
			. "SELECT ROWNUM RNUM, AUX.* FROM ( $query ) AUX "
			. "WHERE ROWNUM <= :ultima"
			. ") "
			. "WHERE RNUM >= :primera";

		$stmt = $conn->prepare($consulta_paginada);
		$stmt->bindParam(':primera', $primera);
		$stmt->bindParam(':ultima',  $ultima);
		$stmt->execute();
		return $stmt;
	} catch (PDOException $e) {
		$_SESSION['excepcion'] = $e->GetMessage();
		header("Location: excepcion.php");
	}
}

function total_consulta($conn, $query)
{
	try {
		$total_consulta = "SELECT COUNT(*) AS TOTAL FROM ($query)";
		$stmt = $conn->query($total_consulta);
		$result = $stmt->fetch();
		$total = $result['TOTAL'];
		return  $total;
	} catch (PDOException $e) {
		$_SESSION['excepcion'] = $e->GetMessage();
		header("Location: excepcion.php");
	}
}

$consulta = "SELECT * FROM RESIDENTE NATURAL JOIN CONTRATO_RESIDENTE ORDER BY FECHA_INICIO, FECHA_FIN";

function consultarTodos($conexion)
{
	global $consulta;
	return $conexion->query($consulta);
}

function editarLibros($conn, $DNI, $NOMBRE, $APELLIDO1, $APELLIDO2, $SEXO, $FECHALLEGADA, $FECHASALIDA)
{
	try {
	$editarConsulta1 = "UPDATE RESIDENTE SET NOMBRE = ':NOMBRE', APELLIDO1 = ':APELLIDO1'"
		. ",APELLIDO2 = ':APELLIDO2',  GENERO = ':SEXO' WHERE DNI_R = ':DNI';";

	$editarConsulta2 = "UPDATE CONTRATO_RESIDENTE SET FECHA_INICIO = ':FECHA_INICIO', FECHA_FIN = ':FECHA_FIN' WHERE DNI_R = ':DNI'; ";
	
		$stmt = $conn->prepare($editarConsulta1);
		$stmt1 = $conn->prepare($editarConsulta2);

		$stmt->bindParam(':NOMBRE', $NOMBRE);
		$stmt->bindParam(':APELLIDO1', $APELLIDO1);
		$stmt->bindParam(':APELLIDO2', $APELLIDO2);
		$stmt->bindParam(':SEXO', $SEXO);
		$stmt->bindParam(':DNI', $DNI);

		$stmt1->bindParam(':FECHA_INICIO', $FECHALLEGADA);
		$stmt1->bindParam(':FECHA_FIN', $FECHASALIDA);
		$stmt1->bindParam(':DNI', $DNI);

		$stmt->execute();
		$stmt1->execute();

		return $stmt;
	} catch (PDOException $e) {
		$_SESSION['excepcion'] = $e->GetMessage();
		header("Location: excepcion.php");
	}
}

function borrarConsulta($conn, $DNI_R)
{
	try {
		$borrarConsulta = "DELETE FROM RESIDENTE WHERE DNI_R = :DNI_R";
		$borrarConsulta1 = "DELETE FROM CONTRATO_RESIDENTE WHERE DNI_R = :DNI_R";
		
		$stmt = $conn->prepare($borrarConsulta);
		$stmt1 = $conn->prepare($borrarConsulta1);
		
		$stmt->bindParam(':DNI_R', $DNI_R);
		$stmt1->bindParam(':DNI_R', $DNI_R);

		$stmt->execute();
		$stmt1->execute();

		return $stmt;

	} catch (PDOException $e) {
		$_SESSION['excepcion'] = $e->GetMessage();
		header("Location: excepcion.php");
	}
}
