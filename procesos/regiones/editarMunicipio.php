<?php 

	require_once "../database/conexion.php";

	$idMunicipio = (isset($_POST['idMunicipio'])) ? $_POST['idMunicipio'] : "";

	$sql = "SELECT * FROM municipios WHERE id_municipio = '$idMunicipio'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>