<?php 

	require_once "../database/conexion.php";

	$idEstado = (isset($_POST['idEstado'])) ? $_POST['idEstado'] : "";

	$sql = "SELECT * FROM estados WHERE id_estado = '$idEstado'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>