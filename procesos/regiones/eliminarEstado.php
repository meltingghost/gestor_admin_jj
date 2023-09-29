<?php 

	require_once "../database/conexion.php";

	$idEstado = (isset($_POST['idEstado'])) ? $_POST['idEstado'] : "";

	$sql = "DELETE FROM estados WHERE id_estado = '$idEstado'";
	$resultado = $conectar->query($sql);

	if ($resultado) {
		$data = 1;
	}else{
		$data = 2;
	}

	print json_encode($data);

?>