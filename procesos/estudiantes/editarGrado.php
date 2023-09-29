<?php 

	require_once "../database/conexion.php";

	$idGrado = (isset($_POST['idGrado'])) ? $_POST['idGrado'] : "";

	$sql = "SELECT * FROM grados WHERE id_grado = '$idGrado'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>