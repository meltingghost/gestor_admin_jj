<?php 

	require_once "../database/conexion.php";

	$idMunicipio = (isset($_POST['idMunicipioEdit'])) ? $_POST['idMunicipioEdit'] : "";
	$municipioOld = (isset($_POST['nombreMunicipioOld'])) ? $_POST['nombreMunicipioOld'] : "";
	$idEstado = (isset($_POST['estadoMunicipioEdit'])) ? $_POST['estadoMunicipioEdit'] : "";
	$municipio = (isset($_POST['nombreMunicipioEdit'])) ? $_POST['nombreMunicipioEdit'] : "";

	if ($municipio != $municipioOld) {
		
		$query = mysqli_query($conectar, "SELECT * FROM municipios WHERE municipio = '$municipio' AND id_estado = '$idEstado'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		}else {

			$sql = "UPDATE municipios SET id_estado = '$idEstado', municipio = '$municipio' WHERE id_municipio = '$idMunicipio'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			}else {
				$data = 3;
			}

		}

	} else {

		$sql = "UPDATE municipios SET id_estado = '$idEstado', municipio = '$municipio' WHERE id_municipio = '$idMunicipio'";
		$resultado = $conectar->query($sql);

		if ($resultado) {
			$data = 1;
		}else {
			$data = 3;
		}

	}

	print json_encode($data);

?>