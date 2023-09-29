<?php 

	require_once "../database/conexion.php";

	$idEstado = (isset($_POST['idEstadoEdit'])) ? $_POST['idEstadoEdit'] : "";
	$estadoOld = (isset($_POST['nombreEstadoOld'])) ? $_POST['nombreEstadoOld'] : "";
	$estado = (isset($_POST['nombreEstadoEdit'])) ? $_POST['nombreEstadoEdit'] : "";

	if ($estado != $estadoOld) {
		
		$query = mysqli_query($conectar, "SELECT * FROM estados WHERE estado = '$estado'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		}else{

			$sql = "UPDATE estados SET estado = '$estado' WHERE id_estado = '$idEstado'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			}else{
				$data = 3;
			}

		}

	}else{

		$sql = "UPDATE estados SET estado = '$estado' WHERE id_estado = '$idEstado'";
		$resultado = $conectar->query($sql);

		if ($resultado) {
			$data = 1;
		}else{
			$data = 3;
		}

	}

	print json_encode($data);

?>