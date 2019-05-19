<?php
function consultarUsuario($conexion,$email,$pass) {
 	$consulta = "SELECT COUNT(*) AS TOTAL FROM usuario_registrado WHERE correo=:email AND contraseña=:pass";
	$stmt = $conexion->prepare($consulta);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':pass',$pass);
	$stmt->execute();
	return $stmt->fetchColumn();
}
?>
