<?php 

	require_once "../database/conexion.php";

	$apellidosEB = $_POST['apellidosEB'];
	$nombresEB = $_POST['nombresEB'];
	$lugarNacimientoEB = $_POST['lugarNacimientoEB'];
	$fechaNacimientoEB = explode("-", $_POST['fechaNacimientoEB']);
	$fechaNacimientoEB = $fechaNacimientoEB[2] . "-" . $fechaNacimientoEB[1] . "-" . $fechaNacimientoEB[0];
	$sexoEB = $_POST['sexoEB'];
	$edadEB = $_POST['edadEB'];
	$cedulaEB = $_POST['cedulaEB'];
	$idEstadoNatalEB = $_POST['estadoNatalEB'];
	$idMunicipioNatalEB = $_POST['municipioNatalEB'];
	$idParroquiaNatalEB = $_POST['parroquiaNatalEB'];
	$direccionEB = $_POST['direccionEB'];

	$idGradoCursarEB = $_POST['gradoCursarEB'];
	$idSeccionGradoCursar = $_POST['seccionGradoCursarEB'];
	$idAnioEscolarEB = $_POST['anioEscolarEB'];
	$idLiteralEB = $_POST['literalEB'];

	$nombreCompletoREB = $_POST['nombreCompletoREB'];
	$fechaNacimientoREB = explode("-", $_POST['fechaNacimientoREB']);
	$fechaNacimientoREB = $fechaNacimientoREB[2] . "-" . $fechaNacimientoREB[1] . "-" . $fechaNacimientoREB[0];
	$cedulaREB = $_POST['cedulaREB'];
	$edadREB = $_POST['edadREB'];
	$gradoInstruccionREB = $_POST['gradoInstruccionREB'];
	$ocupacionREB = $_POST['ocupacionREB'];
	$lugarTrabajoREB = $_POST['lugarTrabajoREB'];
	$codigoTelREB = $_POST['codigoTelREB'];
	$telefonoREB = $_POST['telefonoREB'];
	$direccionHabitacionREB = $_POST['direccionHabitacionREB'];
	$parentescoREB = $_POST['parentescoREB'];
	$rSustitutoEB = $_POST['rSustitutoEB'];
	$fechaNacimientoRSEB = explode("-", $_POST['fechaNacimientoRSEB']);
	$fechaNacimientoRSEB = $fechaNacimientoRSEB[2] . "-" . $fechaNacimientoRSEB[1] . "-" . $fechaNacimientoRSEB[0];
	$cedulaRSEB = $_POST['cedulaRSEB'];
	$codigoTelRSEB = $_POST['codigoTelRSEB'];
	$telefonoRSEB = $_POST['telefonoRSEB'];
	$direccionHabitacionRSEB = $_POST['direccionHabitacionRSEB'];

	$idPersonalResponsableEB = $_POST['personalResponsableEB'];
	$confirmResponsableInsEB = $_POST['confirmResponsableInsEB'];

	$observacionesEB = $_POST['observacionesEB'];

	$query = mysqli_query($conectar, "SELECT * FROM e_data_estudiante WHERE cedulaE = '$cedulaEB'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
		$idEstudiante = null;
	} else {

		$sql = "INSERT INTO `e_data_estudiante`(`id_estudiante`, `apellidosE`, `nombresE`, `cedulaE`, `fechaNacimientoE`, `edadAniosE`, `lugarNacimientoE`, `idEstadoNatalE`, `idMunicipioNatalE`, `idParroquiaNatalE`, `direccionHabitacionE`, `sexoEB`, `inscritoInicial`, `fecha`, `papeleraE`) VALUES(NULL, '$apellidosEB', '$nombresEB', '$cedulaEB', '$fechaNacimientoEB', '$edadEB', '$lugarNacimientoEB', '$idEstadoNatalEB', '$idMunicipioNatalEB', '$idParroquiaNatalEB', '$direccionEB', '$sexoEB', 0, NULL, 0)";
		$ejecutar = mysqli_query($conectar,$sql);
		$idEstudiante = mysqli_insert_id($conectar);

		if ($ejecutar) {

			$sql2 = "INSERT INTO `e_data_representante_b`(`id_estudiante`, `nombreCompletoREB`, `fechaNacimientoREB`, `cedulaREB`, `edadREB`, `gradoInstruccionREB`, `ocupacionREB`, `lugarTrabajoREB`, `codigoTelREB`, `telefonoREB`, `direccionDomicilioREB`, `parentescoREB`, `rSustitutoEB`, `fechaNacimientoRSEB`, `cedulaRSEB`, `direccionHabitacionRSEB`, `codigoTelRSEB`, `telefonoRSEB`, `id_personalResponsableEB`, `confirmResponsableInsEB`, `observacionesEB`, `fichaNumEB`) VALUES('$idEstudiante', '$nombreCompletoREB', '$fechaNacimientoREB', '$cedulaREB', '$edadREB', '$gradoInstruccionREB', '$ocupacionREB', '$lugarTrabajoREB', '$codigoTelREB', '$telefonoREB', '$direccionHabitacionREB', '$parentescoREB', '$rSustitutoEB', '$fechaNacimientoRSEB', '$cedulaRSEB', '$direccionHabitacionRSEB', '$codigoTelRSEB', '$telefonoRSEB', '$idPersonalResponsableEB', '$confirmResponsableInsEB', '$observacionesEB', '$idEstudiante')";
			$ejecutar2 = mysqli_query($conectar,$sql2);

			if ($ejecutar2) {

				$sql3 = "INSERT INTO `formalizar_ins_e`(`id_tabla`, `id_estudiante`, `id_anioEscolar`, `id_literalGradoAnterior`, `id_gradoCursar`, `id_seccionGradoCursar`, `fecha`) VALUES(NULL, '$idEstudiante', '$idAnioEscolarEB', '$idLiteralEB', '$idGradoCursarEB', '$idSeccionGradoCursar', NULL)";
				$ejecutar3 = mysqli_query($conectar,$sql3);

				if ($ejecutar3) {
					$data = 1;
				} else {
					$data = 3;
				}
				
			} else {
				$data = 3;
			}

		} else {
			$data = 3;
		}

	}

	$datos = array("data"=>$data, "idEstudiante"=>$idEstudiante);

	sleep(1);
	print json_encode($datos);

?>