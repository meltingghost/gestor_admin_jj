<?php 
	require_once "../database/conexion.php";

	$cedula = $_POST['cedulaProf'];
	$fecha = $_POST['fechaAsist'];
	$observacion = $_POST['observacionAsis'];

	$query = mysqli_query($conectar, "SELECT cedulaPersonal FROM personal_p1 WHERE cedulaPersonal = '$cedula'");
	$nr = mysqli_num_rows($query);

	if ($nr == 0 OR $nr == "") {
		$data = 3;
	} else {

		$inasistentes = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada, asistente FROM asistencias WHERE cedulaPersonal = '$cedula' AND entrada = 0 AND asistente = 0 ORDER BY id_asistencia DESC LIMIT 1");
		$nrInasistentes = mysqli_num_rows($inasistentes);

		if ($nrInasistentes == 0 OR $nrInasistentes == "") {

			$query2 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada FROM asistencias WHERE cedulaPersonal = '$cedula' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
			$nr2 = mysqli_num_rows($query2);

			if ($nr2 == 0 OR $nr2 == "") {

				$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `observacion`) VALUES (NULL, '$cedula', NULL, 1, '$observacion')";
				$ejecutar = mysqli_query($conectar, $sql);

				if ($ejecutar) {
					$data = 1;
				} else {
					$data = 6;
				}

			} else {

				while ($row = $query2->fetch_array(MYSQLI_ASSOC)) {

					if ($row['fechaHoraEntrada'] == $fecha) {

						$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, entrada, salida FROM asistencias WHERE cedulaPersonal = '$cedula' ORDER BY id_asistencia DESC LIMIT 1");
						$nr3 = mysqli_num_rows($query3);

						while ($row2 = $query3->fetch_array(MYSQLI_ASSOC)) {

							$idAsistencia = $row2['id_asistencia'];

							if ($row2['entrada'] == 1 AND $row2['salida'] == 0) {

								$sql = "UPDATE asistencias SET fechaHoraSalida = NULL, salida = 1, asistente = 1 WHERE id_asistencia = '$idAsistencia' AND cedulaPersonal = '$cedula'";
								$resultado = $conectar->query($sql);

								if ($resultado) {
									$data = 2;
								} else {
									$data = 6;
								}

							}else{
								$data = 4;
							}

						}

					} else {

						$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `observacion`) VALUES (NULL, '$cedula', NULL, 1, '$observacion')";
						$ejecutar = mysqli_query($conectar, $sql);

						if ($ejecutar) {
							$data = 1;
						} else {
							$data = 6;
						}

					}

				}	

			}

		} else {

			foreach ($inasistentes as $key) {

				if ($key['fechaHoraEntrada'] == $fecha) {

					$data = 5;

				} else {

					$query2 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fechaHoraEntrada, entrada FROM asistencias WHERE cedulaPersonal = '$cedula' AND entrada = 1 ORDER BY id_asistencia DESC LIMIT 1");
					$nr2 = mysqli_num_rows($query2);

					if ($nr2 == 0 OR $nr2 == "") {

						$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `observacion`) VALUES (NULL, '$cedula', NULL, 1, '$observacion')";
						$ejecutar = mysqli_query($conectar, $sql);

						if ($ejecutar) {
							$data = 1;
						} else {
							$data = 6;
						}

					} else {

						while ($row = $query2->fetch_array(MYSQLI_ASSOC)) {

							if ($row['fechaHoraEntrada'] == $fecha) {

								$query3 = mysqli_query($conectar, "SELECT id_asistencia, cedulaPersonal, entrada, salida FROM asistencias WHERE cedulaPersonal = '$cedula' ORDER BY id_asistencia DESC LIMIT 1");
								$nr3 = mysqli_num_rows($query3);

								while ($row2 = $query3->fetch_array(MYSQLI_ASSOC)) {

									$idAsistencia = $row2['id_asistencia'];

									if ($row2['entrada'] == 1 AND $row2['salida'] == 0) {

										$sql = "UPDATE asistencias SET fechaHoraSalida = NULL, salida = 1, asistente = 1 WHERE id_asistencia = '$idAsistencia' AND cedulaPersonal = '$cedula'";
										$resultado = $conectar->query($sql);

										if ($resultado) {
											$data = 2;
										} else {
											$data = 6;
										}

									}else{
										$data = 4;
									}

								}

							} else {

								$sql = "INSERT INTO `asistencias`(`id_asistencia`, `cedulaPersonal`, `fechaHoraEntrada`, `entrada`, `observacion`) VALUES (NULL, '$cedula', NULL, 1, '$observacion')";
								$ejecutar = mysqli_query($conectar, $sql);

								if ($ejecutar) {
									$data = 1;
								} else {
									$data = 6;
								}

							}

						}	

					}

				}

			}

		}

	}

	print(json_encode($data));

?>