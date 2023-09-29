<?php 

	require_once "../database/conexion.php";

	$idAnioEscolar = (isset($_POST['idAnioEscolar'])) ? $_POST['idAnioEscolar'] : "";

	$sql = "SELECT * FROM anio_escolar WHERE id_anioEscolar = '$idAnioEscolar'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>