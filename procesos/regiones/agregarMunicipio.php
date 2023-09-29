<?php 

	require_once "../database/conexion.php";

	$idEstado = $_POST['estadoMunicipio'];
	$municipio = $_POST['nombreMunicipio'];

	$query = mysqli_query($conectar, "SELECT * FROM municipios WHERE municipio = '$municipio' AND id_estado = '$idEstado'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	}else{

		$sql = "INSERT INTO municipios VALUES(NULL, '$idEstado', '$municipio')";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		}else{
			$data = 3;
		}

	}

	print json_encode($data);

?>