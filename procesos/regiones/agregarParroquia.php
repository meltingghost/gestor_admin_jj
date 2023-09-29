<?php 

	require_once "../database/conexion.php";

	$idMunicipio = $_POST['municipioParroquia'];
	$parroquia = $_POST['nombreParroquia'];

	$query = mysqli_query($conectar, "SELECT * FROM parroquias WHERE parroquia = '$parroquia' AND id_municipio = '$idMunicipio'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO parroquias VALUES(NULL, '$idMunicipio', '$parroquia')";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>