<?php 

	require_once "../database/conexion.php";

	$idMunicipio = (isset($_POST['idMunicipio'])) ? $_POST['idMunicipio'] : "";

	$sql = "DELETE FROM municipios WHERE id_municipio = '$idMunicipio'";
	$resultado = $conectar->query($sql);

	if ($resultado) {
		$data = 1;
	} else {
		$data = 2;
	}

	print json_encode($data);

?>