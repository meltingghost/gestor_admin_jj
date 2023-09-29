<?php 

	require_once "../database/conexion.php";

	$idParroquia = (isset($_POST['idParroquia'])) ? $_POST['idParroquia'] : "";

	$sql = "DELETE FROM parroquias WHERE id_parroquia = '$idParroquia'";
	$resultado = $conectar->query($sql);

	if ($resultado) {
		$data = 1;
	}else {
		$data = 2;
	}

	print json_encode($data);

?>