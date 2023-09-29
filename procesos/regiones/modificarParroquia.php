<?php 

	require_once "../database/conexion.php";

	$idParroquia = (isset($_POST['idParroquiaEdit'])) ? $_POST['idParroquiaEdit'] : "";
	$parroquiaOld = (isset($_POST['nombreParroquiaOld'])) ? $_POST['nombreParroquiaOld'] : "";
	$idMunicipio = (isset($_POST['municipioParroquiaEdit'])) ? $_POST['municipioParroquiaEdit'] : "";
	$parroquia = (isset($_POST['nombreParroquiaEdit'])) ? $_POST['nombreParroquiaEdit'] : "";

	if ($parroquia != $parroquiaOld) {

		$query = mysqli_query($conectar, "SELECT * FROM parroquias WHERE parroquia = '$parroquia' AND id_municipio = '$idMunicipio'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		} else {

			$sql = "UPDATE parroquias SET id_municipio = '$idMunicipio', parroquia = '$parroquia' WHERE id_parroquia = '$idParroquia'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			} else {
				$data = 3;
			}

		}

	} else {

		$sql = "UPDATE parroquias SET id_municipio = '$idMunicipio', parroquia = '$parroquia' WHERE id_parroquia = '$idParroquia'";
		$resultado = $conectar->query($sql);

		if ($resultado) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>