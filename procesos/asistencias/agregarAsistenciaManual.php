<?php 

	require_once "../database/conexion.php";

	$cedula = $_POST['cedulaPersonalNewAsis'];
	$fechaOriginal = $_POST['fechaNewAsis'];
	$fecha = explode("-", $_POST['fechaNewAsis']);
	$fecha = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
	$fechaHoraEntrada = $fecha . " " . $_POST['horaEntradaNewAsis'];
	$fechaHoraSalida = $fecha . " " . $_POST['horaSalidaNewAsis'];
	$observacion = $_POST['observacionNewAsis'];

	$conUltimoDia = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada, salida, asistente FROM asistencias WHERE cedulaPersonal = '$cedula' AND asistente = 0");
	$nr = mysqli_num_rows($conUltimoDia);

	if ($nr != 0 OR $nr != "") {

		foreach ($conUltimoDia as $key) {

			if ($key['fechaHoraEntrada'] == $fechaOriginal) {

				$idAsistencia = $key['id_asistencia'];

				$sql = "DELETE FROM asistencias WHERE id_asistencia = '$idAsistencia'";
				$resultado = $conectar->query($sql);

				if ($resultado) {

					$sql2 = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `fechaHoraSalida`, `salida`, `observacion`, `asistente`) VALUES (NULL, '$cedula', '$fechaHoraEntrada', 1, '$fechaHoraSalida', 1, '$observacion', 1)";
					$ejecutar = mysqli_query($conectar, $sql2);

					if ($ejecutar) {
						$data = 1;
					}else {
						$data = 3;
					}

				}

			} else {

				if (isset($data)) {
					
					$data = $data;

					// if ($data == 1) {
					// 	$data = 1;
					// } else {
					// 	$data = 3;
					// }

				} else {
					$data = 2;
				}

			}

		}

	} else {
		$data = 2;
	}

	print(json_encode($data));

?>