<?php 

	session_start();
	require_once "../database/conexion.php";

	// PARTE 1
	// DATOS DEL NIÑO O NIÑA
	$apellidosEI = $_POST['apellidosEI'];
	$nombresEI = $_POST['nombresEI'];
	$cEscolarEI = $_POST['cEscolarEI'];
	$fechaNacimientoEI = explode("-", $_POST['fechaNacimientoEI']);
	$fechaNacimientoEI = $fechaNacimientoEI[2] . "-" . $fechaNacimientoEI[1] . "-" . $fechaNacimientoEI[0];
	$edadAniosEI = $_POST['edadAniosEI'];
	$edadMesesEI = $_POST['edadMesesEI'];
	$lugarNacimientoEI = $_POST['lugarNacimientoEI'];
	$idEstadoNatalEI = $_POST['estadoNatalEI'];
	$idMunicipioNatalEI = $_POST['municipioNatalEI'];
	$idParroquiaNatalEI = $_POST['parroquiaNatalEI'];
	$direccionHabitacionEI = $_POST['direccionHabitacionEI'];

	// PARTE 2
	// DATOS DE LA MADRE O DEL PADRE (REPRESENTANTE 1)
	$parentescoREI1 = $_POST['parentescoREI1'];
	$nombreCompletoREI1 = $_POST['nombreCompletoREI1'];
	$cedulaREI1 = $_POST['cedulaREI1'];
	$edadREI1 = $_POST['edadREI1'];
	$nacionalidadREI1 = $_POST['nacionalidadREI1'];
	$gradoInstrucionREI1 = $_POST['gradoInstrucionREI1'];
	$trabajaREI1 = $_POST['trabajaREI1'];
	$direccionTrabajoREI1 = $_POST['direccionTrabajoREI1'];
	$viveREI1 = $_POST['viveREI1'];
	$codigoTelCasaREI1 = $_POST['codigoTelCasaREI1'];
	$telefonoCasaREI1 = $_POST['telefonoCasaREI1'];
	$codigoTelCelREI1 = $_POST['codigoTelCelREI1'];
	$telefonoCelREI1 = $_POST['telefonoCelREI1'];
	$direccionHabitacionREI1 = $_POST['direccionHabitacionREI1'];

	// DATOS DE LA MADRE O DEL PADRE (REPRESENTANTE 2)
	$parentescoREI2 = $_POST['parentescoREI2'];
	$nombreCompletoREI2 = $_POST['nombreCompletoREI2'];
	$cedulaREI2 = $_POST['cedulaREI2'];
	$edadREI2 = $_POST['edadREI2'];
	$nacionalidadREI2 = $_POST['nacionalidadREI2'];
	$gradoInstrucionREI2 = $_POST['gradoInstrucionREI2'];
	$trabajaREI2 = $_POST['trabajaREI2'];
	$direccionTrabajoREI2 = $_POST['direccionTrabajoREI2'];
	$viveREI2 = $_POST['viveREI2'];
	$codigoTelCasaREI2 = $_POST['codigoTelCasaREI2'];
	$telefonoCasaREI2 = $_POST['telefonoCasaREI2'];
	$codigoTelCelREI2 = $_POST['codigoTelCelREI2'];
	$telefonoCelREI2 = $_POST['telefonoCelREI2'];
	$direccionHabitacionREI2 = $_POST['direccionHabitacionREI2'];

	$situacionPadresEI = $_POST['situacionPadresEI'];

	// PARTE 3
	$autorizacionFEI = $_POST['autorizacionFEI'];
	$organismoAutorizacionFEI = $_POST['organismoAutorizacionFEI'];
	$tieneHermanosEI = $_POST['tieneHermanosEI'];
	$cuantosHermanosEI = $_POST['cuantosHermanosEI'];
	$cuantosHermanosVEI = $_POST['cuantosHermanosVEI'];
	$cuantosHermanosHEI = $_POST['cuantosHermanosHEI'];
	$lugarHermanosEI = $_POST['lugarHermanosEI'];
	$quienDuermeEI = $_POST['quienDuermeEI'];
	$quienJuegaEI = $_POST['quienJuegaEI'];
	$localizarFEI = $_POST['localizarFEI'];
	$dondeQuienViveEI = $_POST['dondeQuienViveEI'];
	$tipoPartoEI = $_POST['tipoPartoEI'];
	$enfermedadesEI = $_POST['enfermedadesEI'];
	$vacunasEI = $_POST['vacunasEI'];
	$dificultadCaminarEI = $_POST['dificultadCaminarEI'];
	$compromisoVisualEI = $_POST['compromisoVisualEI'];
	$auditivosEI = $_POST['auditivosEI'];
	$pronunciacionEI = $_POST['pronunciacionEI'];
	$otrasEI = $_POST['otrasEI'];
	$caracteristicasEI = $_POST['caracteristicasEI'];
	$sueñoIntranquiloEI = $_POST['sueñoIntranquiloEI'];
	$esfinteresEI = $_POST['esfinteresEI'];
	$ayudaBanioEI = $_POST['ayudaBanioEI'];
	$comeSoloEI = $_POST['comeSoloEI'];
	$alimentosPrefiereEI = $_POST['alimentosPrefiereEI'];
	$alergicoEI = $_POST['alergicoEI'];
	$alimentosProhibidosEI = $_POST['alimentosProhibidosEI'];
	$fiebreMedicamentoEI = $_POST['fiebreMedicamentoEI'];

	// PARTE 4
	$tallaOctubreEI = $_POST['tallaOctubreEI'];
	$tallaEneroEI = $_POST['tallaEneroEI'];
	$tallaAbrilEI = $_POST['tallaAbrilEI'];	
	$tallaJunioEI = $_POST['tallaJunioEI'];
	$pesoOctubreEI = $_POST['pesoOctubreEI'];
	$pesoEneroEI = $_POST['pesoEneroEI'];
	$pesoAbrilEI = $_POST['pesoAbrilEI'];
	$pesoJunioEI = $_POST['pesoJunioEI'];
	$atencionAdultaEI = $_POST['atencionAdultaEI'];
	$entretieneSoloEI = $_POST['entretieneSoloEI'];
	$expresaAfectoEI = $_POST['expresaAfectoEI'];
	$enojaFrecuentementeEI = $_POST['enojaFrecuentementeEI'];
	$porqueEnojaEI = $_POST['porqueEnojaEI'];
	$miedosInfundidosEI = $_POST['miedosInfundidosEI'];
	$intranquiloEI = $_POST['intranquiloEI'];
	$tiempoViendoTvEI = $_POST['tiempoViendoTvEI'];
	$programasTvEI = $_POST['programasTvEI'];
	$tiempoGamingEI = $_POST['tiempoGamingEI'];
	$gamesEI = $_POST['gamesEI'];

	// PARTE 5
	$actividadPeriodo1EI = $_POST['actividadPeriodo1EI'];
	$actividadPeriodo2EI = $_POST['actividadPeriodo2EI'];
	$actividadPeriodo3EI = $_POST['actividadPeriodo3EI'];
	$infoCometeFaltaEI = $_POST['infoCometeFaltaEI'];

	$query = mysqli_query($conectar, "SELECT * FROM e_data_estudiante WHERE cedulaE = '$cEscolarEI'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
		$idEstudiante = null;
	}else {

		$sql = "INSERT INTO `e_data_estudiante`(`id_estudiante`, `apellidosE`, `nombresE`, `cedulaE`, `fechaNacimientoE`, `edadAniosE`, `edadMesesE`, `lugarNacimientoE`, `idEstadoNatalE`, `idMunicipioNatalE`, `idParroquiaNatalE`, `direccionHabitacionE`, `inscritoInicial`, `fecha`, `papeleraE`) VALUES (NULL, '$apellidosEI', '$nombresEI', '$cEscolarEI', '$fechaNacimientoEI', '$edadAniosEI', '$edadMesesEI', '$lugarNacimientoEI', '$idEstadoNatalEI', '$idMunicipioNatalEI', '$idParroquiaNatalEI', '$direccionHabitacionEI', 1, NULL, 0)";
		$ejecutar = mysqli_query($conectar, $sql);
		$idEstudiante = mysqli_insert_id($conectar);

		if ($ejecutar) {

			$sql2 = "INSERT INTO `e_data_padres_i`(`id_estudiante`, `parentescoREI1`, `nombreCompletoREI1`, `cedulaREI1`, `edadREI1`, `nacionalidadREI1`, `gradoInstrucionREI1`, `trabajaREI1`, `direccionTrabajoREI1`, `viveREI1`, `codigoTelCasaREI1`, `telefonoCasaREI1`, `codigoTelCelREI1`, `telefonoCelREI1`, `direccionHabitacionREI1`, `parentescoREI2`, `nombreCompletoREI2`, `cedulaREI2`, `edadREI2`, `nacionalidadREI2`, `gradoInstrucionREI2`, `trabajaREI2`, `direccionTrabajoREI2`, `viveREI2`, `codigoTelCasaREI2`, `telefonoCasaREI2`, `codigoTelCelREI2`, `telefonoCelREI2`, `direccionHabitacionREI2`, `situacionPadresEI`) VALUES ('$idEstudiante', '$parentescoREI1', '$nombreCompletoREI1', '$cedulaREI1', '$edadREI1', '$nacionalidadREI1', '$gradoInstrucionREI1', '$trabajaREI1', '$direccionTrabajoREI1', '$viveREI1', '$codigoTelCasaREI1', '$telefonoCasaREI1', '$codigoTelCelREI1', '$telefonoCelREI1', '$direccionHabitacionREI1', '$parentescoREI2', '$nombreCompletoREI2', '$cedulaREI2', '$edadREI2', '$nacionalidadREI2', '$gradoInstrucionREI2', '$trabajaREI2', '$direccionTrabajoREI2', '$viveREI2', '$codigoTelCasaREI2', '$telefonoCasaREI2', '$codigoTelCelREI2', '$telefonoCelREI2', '$direccionHabitacionREI2', '$situacionPadresEI')";
			$ejecutar2 = mysqli_query($conectar, $sql2);

			if ($ejecutar2) {

				$sql3 = "INSERT INTO `e_data_familiar_i`(`id_estudiante`, `autorizacionFEI`, `organismoAutorizacionFEI`, `tieneHermanosEI`, `cuantosHermanosEI`, `cuantosHermanosVEI`, `cuantosHermanosHEI`, `lugarHermanosEI`, `quienDuermeEI`, `quienJuegaEI`, `localizarFEI`, `dondeQuienViveEI`, `tipoPartoEI`, `enfermedadesEI`, `vacunasEI`, `dificultadCaminarEI`, `compromisoVisualEI`, `auditivosEI`, `pronunciacionEI`, `otrasEI`, `caracteristicasEI`, `sueñoIntranquiloEI`, `esfinteresEI`, `ayudaBanioEI`, `comeSoloEI`, `alimentosPrefiereEI`, `alergicoEI`, `alimentosProhibidosEI`, `fiebreMedicamentoEI`) VALUES ('$idEstudiante', '$autorizacionFEI', '$organismoAutorizacionFEI', '$tieneHermanosEI', '$cuantosHermanosEI', '$cuantosHermanosVEI', '$cuantosHermanosHEI', '$lugarHermanosEI', '$quienDuermeEI', '$quienJuegaEI', '$localizarFEI', '$dondeQuienViveEI', '$tipoPartoEI', '$enfermedadesEI', '$vacunasEI', '$dificultadCaminarEI', '$compromisoVisualEI', '$auditivosEI', '$pronunciacionEI', '$otrasEI', '$caracteristicasEI', '$sueñoIntranquiloEI', '$esfinteresEI', '$ayudaBanioEI', '$comeSoloEI', '$alimentosPrefiereEI', '$alergicoEI', '$alimentosProhibidosEI', '$fiebreMedicamentoEI')";
				$ejecutar3 = mysqli_query($conectar, $sql3);

				if ($ejecutar3) {

					$sql4 = "INSERT INTO `e_data_interes_i`(`id_estudiante`, `tallaOctubreEI`, `tallaEneroEI`, `tallaAbrilEI`, `tallaJunioEI`, `pesoOctubreEI`, `pesoEneroEI`, `pesoAbrilEI`, `pesoJunioEI`, `atencionAdultaEI`, `entretieneSoloEI`, `expresaAfectoEI`, `enojaFrecuentementeEI`, `porqueEnojaEI`, `miedosInfundidosEI`, `intranquiloEI`, `tiempoViendoTvEI`, `programasTvEI`, `tiempoGamingEI`, `gamesEI`, `actividadPeriodo1EI`, `actividadPeriodo2EI`, `actividadPeriodo3EI`, `infoCometeFaltaEI`) VALUES ('$idEstudiante', '$tallaOctubreEI', '$tallaEneroEI', '$tallaAbrilEI', '$tallaJunioEI', '$pesoOctubreEI', '$pesoEneroEI', '$pesoAbrilEI', '$pesoJunioEI', '$atencionAdultaEI', '$entretieneSoloEI', '$expresaAfectoEI', '$enojaFrecuentementeEI', '$porqueEnojaEI', '$miedosInfundidosEI', '$intranquiloEI', '$tiempoViendoTvEI', '$programasTvEI', '$tiempoGamingEI', '$gamesEI', '$actividadPeriodo1EI', '$actividadPeriodo2EI', '$actividadPeriodo3EI', '$infoCometeFaltaEI')";
					$ejecutar4 = mysqli_query($conectar, $sql4);

					if ($ejecutar4) {
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

		} else {
			$data = 3;
		}

	}

	$datos = array("data"=>$data, "idEstudiante"=>$idEstudiante);

	sleep(1);
	print json_encode($datos);

?>