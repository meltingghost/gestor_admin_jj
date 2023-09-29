<?php 

	require_once "../database/conexion.php";

	$idAsistencia = (isset($_POST['idAsistencia'])) ? $_POST['idAsistencia'] : "";

	$query = mysqli_query($conectar, "SELECT confirmarAsistencia FROM asistencias WHERE id_asistencia = '$idAsistencia'");

	foreach ($query as $key) {
		
		if ($key['confirmarAsistencia'] == 1) {

			$sql = "UPDATE asistencias SET confirmarAsistencia = 0 WHERE id_asistencia = '$idAsistencia'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			}else {
				$data = 2;
			}

		} else {

			$sql = "UPDATE asistencias SET confirmarAsistencia = 1 WHERE id_asistencia = '$idAsistencia'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			}else {
				$data = 2;
			}

		}

	}

	print json_encode($data);

?>