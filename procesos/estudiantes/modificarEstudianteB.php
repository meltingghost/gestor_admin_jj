<?php 

	require_once "../database/conexion.php";

	$idEstudiante = (isset($_POST['idEdit'])) ? $_POST['idEdit'] : "";
	$apellidosEB = (isset($_POST['apellidosEBEdit'])) ? $_POST['apellidosEBEdit'] : "";
	$nombresEB = (isset($_POST['nombresEBEdit'])) ? $_POST['nombresEBEdit'] : "";
	$lugarNacimientoEB = (isset($_POST['lugarNacimientoEBEdit'])) ? $_POST['lugarNacimientoEBEdit'] : "";
	$sexoEB = (isset($_POST['sexoEBEdit'])) ? $_POST['sexoEBEdit'] : "";
	$cedulaOld = (isset($_POST['cedulaOld'])) ? $_POST['cedulaOld'] : "";
	$cedulaEB = (isset($_POST['cedulaEBEdit'])) ? $_POST['cedulaEBEdit'] : "";
	$idEstadoNatalEB = (isset($_POST['estadoNatalEBEdit'])) ? $_POST['estadoNatalEBEdit'] : "";
	$idMunicipioNatalEB = (isset($_POST['municipioNatalEBEdit'])) ? $_POST['municipioNatalEBEdit'] : "";
	$idParroquiaNatalEB = (isset($_POST['parroquiaNatalEBEdit'])) ? $_POST['parroquiaNatalEBEdit'] : "";
	$direccionEB = (isset($_POST['direccionEBEdit'])) ? $_POST['direccionEBEdit'] : "";

	// $idGradoCursarEB = (isset($_POST['gradoCursarEBEdit'])) ? $_POST['gradoCursarEBEdit'] : "";
	// $idSeccionGradoCursar = (isset($_POST['seccionGradoCursarEBEdit'])) ? $_POST['seccionGradoCursarEBEdit'] : "";
	// $idAnioEscolarEB = (isset($_POST['anioEscolarEBEdit'])) ? $_POST['anioEscolarEBEdit'] : "";
	// $idLiteralEB = (isset($_POST['literalEBEdit'])) ? $_POST['literalEBEdit'] : "";

	$nombreCompletoREB = (isset($_POST['nombreCompletoREBEdit'])) ? $_POST['nombreCompletoREBEdit'] : "";
	$gradoInstruccionREB = (isset($_POST['gradoInstruccionREBEdit'])) ? $_POST['gradoInstruccionREBEdit'] : "";
	$ocupacionREB = (isset($_POST['ocupacionREBEdit'])) ? $_POST['ocupacionREBEdit'] : "";
	$lugarTrabajoREB = (isset($_POST['lugarTrabajoREBEdit'])) ? $_POST['lugarTrabajoREBEdit'] : "";
	$codigoTelREB = (isset($_POST['codigoTelREBEdit'])) ? $_POST['codigoTelREBEdit'] : "";
	$telefonoREB = (isset($_POST['telefonoREBEdit'])) ? $_POST['telefonoREBEdit'] : "";
	$direccionHabitacionREB = (isset($_POST['direccionHabitacionREBEdit'])) ? $_POST['direccionHabitacionREBEdit'] : "";
	$parentescoREB = (isset($_POST['parentescoREBEdit'])) ? $_POST['parentescoREBEdit'] : "";
	$rSustitutoEB = (isset($_POST['rSustitutoEBEdit'])) ? $_POST['rSustitutoEBEdit'] : "";
	$codigoTelRSEB = (isset($_POST['codigoTelRSEBEdit'])) ? $_POST['codigoTelRSEBEdit'] : "";
	$telefonoRSEB = (isset($_POST['telefonoRSEBEdit'])) ? $_POST['telefonoRSEBEdit'] : "";
	$direccionHabitacionRSEB = (isset($_POST['direccionHabitacionRSEBEdit'])) ? $_POST['direccionHabitacionRSEBEdit'] : "";

	$confirmResponsableInsEB = (isset($_POST['confirmResponsableInsEBEdit'])) ? $_POST['confirmResponsableInsEBEdit'] : "";

	$observacionesEB = (isset($_POST['observacionesEBEdit'])) ? $_POST['observacionesEBEdit'] : "";

	if ($cedulaEB != $cedulaOld) {
		
		$query = mysqli_query($conectar, "SELECT * FROM e_data_estudiante WHERE cedulaE = '$cedulaEB'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		} else {

			$sql = "UPDATE e_data_estudiante SET apellidosE = '$apellidosEB', nombresE = '$nombresEB', cedulaE = '$cedulaEB', lugarNacimientoE = '$lugarNacimientoEB', idEstadoNatalE = '$idEstadoNatalEB', idMunicipioNatalE = '$idMunicipioNatalEB', idParroquiaNatalE = '$idParroquiaNatalEB', direccionHabitacionE = '$direccionEB', sexoEB = '$sexoEB' WHERE id_estudiante = '$idEstudiante'";
			$resultado = $conectar->query($sql);

			if ($resultado) {

				$sql2 = "UPDATE e_data_representante_b SET nombreCompletoREB = '$nombreCompletoREB', gradoInstruccionREB = '$gradoInstruccionREB', ocupacionREB = '$ocupacionREB', lugarTrabajoREB = '$lugarTrabajoREB', codigoTelREB = '$codigoTelREB', telefonoREB = '$telefonoREB', direccionDomicilioREB = '$direccionHabitacionREB', parentescoREB = '$parentescoREB', rSustitutoEB = '$rSustitutoEB', direccionHabitacionRSEB = '$direccionHabitacionRSEB', codigoTelRSEB = '$codigoTelRSEB', telefonoRSEB = '$telefonoRSEB', confirmResponsableInsEB = '$confirmResponsableInsEB', observacionesEB = '$observacionesEB' WHERE id_estudiante = '$idEstudiante'";
				$resultado2 = $conectar->query($sql2);

				if ($resultado2) {

					// $sql3 = "INSERT INTO formalizar_ins_e VALUES(NULL, '$idEstudiante', '$idAnioEscolarEB', '$idLiteralEB', '$idGradoCursarEB', '$idSeccionGradoCursar', NULL)";
					// $ejecutar3 = mysqli_query($conectar,$sql3);

					// if ($ejecutar3) {
						$data = 1;
					// } else {
					// 	$data = 3;
					// }

				} else {
					$data = 3;
				}

			} else {
				$data = 3;
			}

		}

	} else {

		$sql = "UPDATE e_data_estudiante SET apellidosE = '$apellidosEB', nombresE = '$nombresEB', cedulaE = '$cedulaEB', lugarNacimientoE = '$lugarNacimientoEB', idEstadoNatalE = '$idEstadoNatalEB', idMunicipioNatalE = '$idMunicipioNatalEB', idParroquiaNatalE = '$idParroquiaNatalEB', direccionHabitacionE = '$direccionEB', sexoEB = '$sexoEB' WHERE id_estudiante = '$idEstudiante'";
		$resultado = $conectar->query($sql);

		if ($resultado) {

			$sql2 = "UPDATE e_data_representante_b SET nombreCompletoREB = '$nombreCompletoREB', gradoInstruccionREB = '$gradoInstruccionREB', ocupacionREB = '$ocupacionREB', lugarTrabajoREB = '$lugarTrabajoREB', codigoTelREB = '$codigoTelREB', telefonoREB = '$telefonoREB', direccionDomicilioREB = '$direccionHabitacionREB', parentescoREB = '$parentescoREB', rSustitutoEB = '$rSustitutoEB', direccionHabitacionRSEB = '$direccionHabitacionRSEB', codigoTelRSEB = '$codigoTelRSEB', telefonoRSEB = '$telefonoRSEB', confirmResponsableInsEB = '$confirmResponsableInsEB', observacionesEB = '$observacionesEB' WHERE id_estudiante = '$idEstudiante'";
			$resultado2 = $conectar->query($sql2);

			if ($resultado2) {

					// $sql3 = "INSERT INTO formalizar_ins_e VALUES(NULL, '$idEstudiante', '$idAnioEscolarEB', '$idLiteralEB', '$idGradoCursarEB', '$idSeccionGradoCursar', NULL)";
					// $ejecutar3 = mysqli_query($conectar,$sql3);

					// if ($ejecutar3) {
				$data = 1;
					// } else {
					// 	$data = 3;
					// }

			} else {
				$data = 3;
			}

		} else {
			$data = 3;
		}

	}

	sleep(1);
	print json_encode($data);

?>