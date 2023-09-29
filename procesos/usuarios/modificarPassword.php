<?php 

	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idUserRecoveryNew'])) ? $_POST['idUserRecoveryNew'] : "";
	$password = sha1((isset($_POST['newPassword'])) ? $_POST['newPassword'] : "");

	$sql = "UPDATE usuarios SET password = '$password' WHERE id_usuario = '$idUsuario'";
	$resultado = $conectar->query($sql);

	if ($resultado) {
		$data = 1;
	}else {
		$data = 2;
	}

	print json_encode($data);

?>