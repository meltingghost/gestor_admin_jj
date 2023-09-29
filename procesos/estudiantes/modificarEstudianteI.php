<?php 
	
	session_start();
	require_once "../database/conexion.php";

	// PARTE 1
	// DATOS DEL NIÑO O NIÑA
	$idEstudiante = (isset($_POST['idEstudianteEdit'])) ? $_POST['idEstudianteEdit'] : "";
	$apellidosEI = (isset($_POST['apellidosEIEdit'])) ? $_POST['apellidosEIEdit'] : "";
	$nombresEI = (isset($_POST['nombresEIEdit'])) ? $_POST['nombresEIEdit'] : "";
	$cedulaE = (isset($_POST['cEscolarEIEdit'])) ? $_POST['cEscolarEIEdit'] : "";
	$cedulaOld = (isset($_POST['cEscolarEIOld'])) ? $_POST['cEscolarEIOld'] : "";
	$lugarNacimientoEI = (isset($_POST['lugarNacimientoEIEdit'])) ? $_POST['lugarNacimientoEIEdit'] : "";
	$idEstadoNatalEI = (isset($_POST['estadoNatalEIEdit'])) ? $_POST['estadoNatalEIEdit'] : "";
	$idMunicipioNatalEI = (isset($_POST['municipioNatalEIEdit'])) ? $_POST['municipioNatalEIEdit'] : "";
	$idParroquiaNatalEI = (isset($_POST['parroquiaNatalEIEdit'])) ? $_POST['parroquiaNatalEIEdit'] : "";
	$direccionHabitacionEI = (isset($_POST['direccionHabitacionEIEdit'])) ? $_POST['direccionHabitacionEIEdit'] : "";

	// PARTE 2
	// DATOS DE LA MADRE O DEL PADRE (REPRESENTANTE 1)
	$parentescoREI1 = (isset($_POST['parentescoREI1Edit'])) ? $_POST['parentescoREI1Edit'] : "";
	$nombreCompletoREI1 = (isset($_POST['nombreCompletoREI1Edit'])) ? $_POST['nombreCompletoREI1Edit'] : "";
	$edadREI1 = (isset($_POST['edadREI1Edit'])) ? $_POST['edadREI1Edit'] : "";
	$nacionalidadREI1 = (isset($_POST['nacionalidadREI1Edit'])) ? $_POST['nacionalidadREI1Edit'] : "";
	$gradoInstrucionREI1 = (isset($_POST['gradoInstrucionREI1Edit'])) ? $_POST['gradoInstrucionREI1Edit'] : "";
	$trabajaREI1 = (isset($_POST['trabajaREI1Edit'])) ? $_POST['trabajaREI1Edit'] : "";
	$direccionTrabajoREI1 = (isset($_POST['direccionTrabajoREI1Edit'])) ? $_POST['direccionTrabajoREI1Edit'] : "";
	$viveREI1 = (isset($_POST['viveREI1Edit'])) ? $_POST['viveREI1Edit'] : "";
	$codigoTelCasaREI1 = (isset($_POST['codigoTelCasaREI1Edit'])) ? $_POST['codigoTelCasaREI1Edit'] : "";
	$telefonoCasaREI1 = (isset($_POST['telefonoCasaREI1Edit'])) ? $_POST['telefonoCasaREI1Edit'] : "";
	$codigoTelCelREI1 = (isset($_POST['codigoTelCelREI1Edit'])) ? $_POST['codigoTelCelREI1Edit'] : "";
	$telefonoCelREI1 = (isset($_POST['telefonoCelREI1Edit'])) ? $_POST['telefonoCelREI1Edit'] : "";
	$direccionHabitacionREI1 = (isset($_POST['direccionHabitacionREI1Edit'])) ? $_POST['direccionHabitacionREI1Edit'] : "";

	// DATOS DE LA MADRE O DEL PADRE (REPRESENTANTE 2)
	$parentescoREI2 = (isset($_POST['parentescoREI2Edit'])) ? $_POST['parentescoREI2Edit'] : "";
	$nombreCompletoREI2 = (isset($_POST['nombreCompletoREI2Edit'])) ? $_POST['nombreCompletoREI2Edit'] : "";
	$cedulaREI2 = (isset($_POST['cedulaREI2Edit'])) ? $_POST['cedulaREI2Edit'] : "";
	$edadREI2 = (isset($_POST['edadREI2Edit'])) ? $_POST['edadREI2Edit'] : "";
	$nacionalidadREI2 = (isset($_POST['nacionalidadREI2Edit'])) ? $_POST['nacionalidadREI2Edit'] : "";
	$gradoInstrucionREI2 = (isset($_POST['gradoInstrucionREI2Edit'])) ? $_POST['gradoInstrucionREI2Edit'] : "";
	$trabajaREI2 = (isset($_POST['trabajaREI2Edit'])) ? $_POST['trabajaREI2Edit'] : "";
	$direccionTrabajoREI2 = (isset($_POST['direccionTrabajoREI2Edit'])) ? $_POST['direccionTrabajoREI2Edit'] : "";
	$viveREI2 = (isset($_POST['viveREI2Edit'])) ? $_POST['viveREI2Edit'] : "";
	$codigoTelCasaREI2 = (isset($_POST['codigoTelCasaREI2Edit'])) ? $_POST['codigoTelCasaREI2Edit'] : "";
	$telefonoCasaREI2 = (isset($_POST['telefonoCasaREI2Edit'])) ? $_POST['telefonoCasaREI2Edit'] : "";
	$codigoTelCelREI2 = (isset($_POST['codigoTelCelREI2Edit'])) ? $_POST['codigoTelCelREI2Edit'] : "";
	$telefonoCelREI2 = (isset($_POST['telefonoCelREI2Edit'])) ? $_POST['telefonoCelREI2Edit'] : "";
	$direccionHabitacionREI2 = (isset($_POST['direccionHabitacionREI2Edit'])) ? $_POST['direccionHabitacionREI2Edit'] : "";

	$situacionPadresEI = (isset($_POST['situacionPadresEIEdit'])) ? $_POST['situacionPadresEIEdit'] : "";

	// PARTE 3
	$autorizacionFEI = (isset($_POST['autorizacionFEIEdit'])) ? $_POST['autorizacionFEIEdit'] : "";
	$organismoAutorizacionFEI = (isset($_POST['organismoAutorizacionFEIEdit'])) ? $_POST['organismoAutorizacionFEIEdit'] : "";
	$tieneHermanosEI = (isset($_POST['tieneHermanosEIEdit'])) ? $_POST['tieneHermanosEIEdit'] : "";
	$cuantosHermanosEI = (isset($_POST['cuantosHermanosEIEdit'])) ? $_POST['cuantosHermanosEIEdit'] : "";
	$cuantosHermanosVEI = (isset($_POST['cuantosHermanosVEIEdit'])) ? $_POST['cuantosHermanosVEIEdit'] : "";
	$cuantosHermanosHEI = (isset($_POST['cuantosHermanosHEIEdit'])) ? $_POST['cuantosHermanosHEIEdit'] : "";
	$lugarHermanosEI = (isset($_POST['lugarHermanosEIEdit'])) ? $_POST['lugarHermanosEIEdit'] : "";
	$quienDuermeEI = (isset($_POST['quienDuermeEIEdit'])) ? $_POST['quienDuermeEIEdit'] : "";
	$quienJuegaEI = (isset($_POST['quienJuegaEIEdit'])) ? $_POST['quienJuegaEIEdit'] : "";
	$localizarFEI = (isset($_POST['localizarFEIEdit'])) ? $_POST['localizarFEIEdit'] : "";
	$dondeQuienViveEI = (isset($_POST['dondeQuienViveEIEdit'])) ? $_POST['dondeQuienViveEIEdit'] : "";
	$tipoPartoEI = (isset($_POST['tipoPartoEIEdit'])) ? $_POST['tipoPartoEIEdit'] : "";
	$enfermedadesEI = (isset($_POST['enfermedadesEIEdit'])) ? $_POST['enfermedadesEIEdit'] : "";
	$vacunasEI = (isset($_POST['vacunasEIEdit'])) ? $_POST['vacunasEIEdit'] : "";
	$dificultadCaminarEI = (isset($_POST['dificultadCaminarEIEdit'])) ? $_POST['dificultadCaminarEIEdit'] : "";
	$compromisoVisualEI = (isset($_POST['compromisoVisualEIEdit'])) ? $_POST['compromisoVisualEIEdit'] : "";
	$auditivosEI = (isset($_POST['auditivosEIEdit'])) ? $_POST['auditivosEIEdit'] : "";
	$pronunciacionEI = (isset($_POST['pronunciacionEIEdit'])) ? $_POST['pronunciacionEIEdit'] : "";
	$otrasEI = (isset($_POST['otrasEIEdit'])) ? $_POST['otrasEIEdit'] : "";
	$caracteristicasEI = (isset($_POST['caracteristicasEIEdit'])) ? $_POST['caracteristicasEIEdit'] : "";
	$sueñoIntranquiloEI = (isset($_POST['sueñoIntranquiloEIEdit'])) ? $_POST['sueñoIntranquiloEIEdit'] : "";
	$esfinteresEI = (isset($_POST['esfinteresEIEdit'])) ? $_POST['esfinteresEIEdit'] : "";
	$ayudaBanioEI = (isset($_POST['ayudaBanioEIEdit'])) ? $_POST['ayudaBanioEIEdit'] : "";
	$comeSoloEI = (isset($_POST['comeSoloEIEdit'])) ? $_POST['comeSoloEIEdit'] : "";
	$alimentosPrefiereEI = (isset($_POST['alimentosPrefiereEIEdit'])) ? $_POST['alimentosPrefiereEIEdit'] : "";
	$alergicoEI = (isset($_POST['alergicoEIEdit'])) ? $_POST['alergicoEIEdit'] : "";
	$alimentosProhibidosEI = (isset($_POST['alimentosProhibidosEIEdit'])) ? $_POST['alimentosProhibidosEIEdit'] : "";
	$fiebreMedicamentoEI = (isset($_POST['fiebreMedicamentoEIEdit'])) ? $_POST['fiebreMedicamentoEIEdit'] : "";

	// PARTE 4
	$tallaOctubreEI = (isset($_POST['tallaOctubreEIEdit'])) ? $_POST['tallaOctubreEIEdit'] : "";
	$tallaEneroEI = (isset($_POST['tallaEneroEIEdit'])) ? $_POST['tallaEneroEIEdit'] : "";
	$tallaAbrilEI = (isset($_POST['tallaAbrilEIEdit'])) ? $_POST['tallaAbrilEIEdit'] : "";	
	$tallaJunioEI = (isset($_POST['tallaJunioEIEdit'])) ? $_POST['tallaJunioEIEdit'] : "";
	$pesoOctubreEI = (isset($_POST['pesoOctubreEIEdit'])) ? $_POST['pesoOctubreEIEdit'] : "";
	$pesoEneroEI = (isset($_POST['pesoEneroEIEdit'])) ? $_POST['pesoEneroEIEdit'] : "";
	$pesoAbrilEI = (isset($_POST['pesoAbrilEIEdit'])) ? $_POST['pesoAbrilEIEdit'] : "";
	$pesoJunioEI = (isset($_POST['pesoJunioEIEdit'])) ? $_POST['pesoJunioEIEdit'] : "";
	$atencionAdultaEI = (isset($_POST['atencionAdultaEIEdit'])) ? $_POST['atencionAdultaEIEdit'] : "";
	$entretieneSoloEI = (isset($_POST['entretieneSoloEIEdit'])) ? $_POST['entretieneSoloEIEdit'] : "";
	$expresaAfectoEI = (isset($_POST['expresaAfectoEIEdit'])) ? $_POST['expresaAfectoEIEdit'] : "";
	$enojaFrecuentementeEI = (isset($_POST['enojaFrecuentementeEIEdit'])) ? $_POST['enojaFrecuentementeEIEdit'] : "";
	$porqueEnojaEI = (isset($_POST['porqueEnojaEIEdit'])) ? $_POST['porqueEnojaEIEdit'] : "";
	$miedosInfundidosEI = (isset($_POST['miedosInfundidosEIEdit'])) ? $_POST['miedosInfundidosEIEdit'] : "";
	$intranquiloEI = (isset($_POST['intranquiloEIEdit'])) ? $_POST['intranquiloEIEdit'] : "";
	$tiempoViendoTvEI = (isset($_POST['tiempoViendoTvEIEdit'])) ? $_POST['tiempoViendoTvEIEdit'] : "";
	$programasTvEI = (isset($_POST['programasTvEIEdit'])) ? $_POST['programasTvEIEdit'] : "";
	$tiempoGamingEI = (isset($_POST['tiempoGamingEIEdit'])) ? $_POST['tiempoGamingEIEdit'] : "";
	$gamesEI = (isset($_POST['gamesEIEdit'])) ? $_POST['gamesEIEdit'] : "";

	// PARTE 5
	$actividadPeriodo1EI = (isset($_POST['actividadPeriodo1EIEdit'])) ? $_POST['actividadPeriodo1EIEdit'] : "";
	$actividadPeriodo2EI = (isset($_POST['actividadPeriodo2EIEdit'])) ? $_POST['actividadPeriodo2EIEdit'] : "";
	$actividadPeriodo3EI = (isset($_POST['actividadPeriodo3EIEdit'])) ? $_POST['actividadPeriodo3EIEdit'] : "";
	$infoCometeFaltaEI = (isset($_POST['infoCometeFaltaEIEdit'])) ? $_POST['infoCometeFaltaEIEdit'] : "";

	if ($cedulaE != $cedulaOld) {

		$query = mysqli_query($conectar, "SELECT * FROM e_data_estudiante WHERE cedulaE = '$cedulaE'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		}else {

			$sql = "UPDATE e_data_estudiante SET apellidosE = '$apellidosEI', nombresE = '$nombresEI', cedulaE = '$cedulaE', lugarNacimientoE = '$lugarNacimientoEI', idEstadoNatalE = '$idEstadoNatalEI', idMunicipioNatalE = '$idMunicipioNatalEI', idParroquiaNatalE = '$idParroquiaNatalEI', direccionHabitacionE = '$direccionHabitacionEI' WHERE id_estudiante = '$idEstudiante'";
			$ejecutar = mysqli_query($conectar, $sql);

			if ($ejecutar) {

				$sql2 = "UPDATE e_data_padres_i SET parentescoREI1 = '$parentescoREI1', nombreCompletoREI1 = '$nombreCompletoREI1', edadREI1 = '$edadREI1', nacionalidadREI1 = '$nacionalidadREI1', gradoInstrucionREI1 = '$gradoInstrucionREI1', trabajaREI1 = '$trabajaREI1', direccionTrabajoREI1 = '$direccionTrabajoREI1', viveREI1 = '$viveREI1', codigoTelCasaREI1 = '$codigoTelCasaREI1', telefonoCasaREI1 = '$telefonoCasaREI1', codigoTelCelREI1 = '$codigoTelCelREI1', telefonoCelREI1 = '$telefonoCelREI1', direccionHabitacionREI1 = '$direccionHabitacionREI1', parentescoREI2 = '$parentescoREI2', nombreCompletoREI2 = '$nombreCompletoREI2', cedulaREI2 = '$cedulaREI2', edadREI2 = '$edadREI2', nacionalidadREI2 = '$nacionalidadREI2', gradoInstrucionREI2 = '$gradoInstrucionREI2', trabajaREI2 = '$trabajaREI2', direccionTrabajoREI2 = '$direccionTrabajoREI2', viveREI2 = '$viveREI2', codigoTelCasaREI2 = '$codigoTelCasaREI2', telefonoCasaREI2 = '$telefonoCasaREI2', codigoTelCelREI2 = '$codigoTelCelREI2', telefonoCelREI2 = '$telefonoCelREI2', direccionHabitacionREI2 = '$direccionHabitacionREI2', situacionPadresEI = '$situacionPadresEI' WHERE id_estudiante = '$idEstudiante'";
				$ejecutar2 = mysqli_query($conectar, $sql2);

				if ($ejecutar2) {

					$sql3 = "UPDATE e_data_familiar_i SET autorizacionFEI = '$autorizacionFEI', organismoAutorizacionFEI = '$organismoAutorizacionFEI', tieneHermanosEI = '$tieneHermanosEI', cuantosHermanosEI = '$cuantosHermanosEI', cuantosHermanosVEI = '$cuantosHermanosVEI', cuantosHermanosHEI = '$cuantosHermanosHEI', lugarHermanosEI = '$lugarHermanosEI', quienDuermeEI = '$quienDuermeEI', quienJuegaEI = '$quienJuegaEI', localizarFEI = '$localizarFEI', dondeQuienViveEI = '$dondeQuienViveEI', tipoPartoEI = '$tipoPartoEI', enfermedadesEI = '$enfermedadesEI', vacunasEI = '$vacunasEI', dificultadCaminarEI = '$dificultadCaminarEI', compromisoVisualEI = '$compromisoVisualEI', auditivosEI = '$auditivosEI', pronunciacionEI = '$pronunciacionEI', otrasEI = '$otrasEI', caracteristicasEI = '$caracteristicasEI', sueñoIntranquiloEI = '$sueñoIntranquiloEI', esfinteresEI = '$esfinteresEI', ayudaBanioEI = '$ayudaBanioEI', comeSoloEI = '$comeSoloEI', alimentosPrefiereEI = '$alimentosPrefiereEI', alergicoEI = '$alergicoEI', alimentosProhibidosEI = '$alimentosProhibidosEI', fiebreMedicamentoEI = '$fiebreMedicamentoEI' WHERE id_estudiante = '$idEstudiante'";
					$ejecutar3 = mysqli_query($conectar, $sql3);

					if ($ejecutar3) {

						$sql4 = "UPDATE e_data_interes_i SET tallaOctubreEI = '$tallaOctubreEI', tallaEneroEI = '$tallaEneroEI', tallaAbrilEI = '$tallaAbrilEI', tallaJunioEI = '$tallaJunioEI', pesoOctubreEI = '$pesoOctubreEI', pesoEneroEI = '$pesoEneroEI', pesoAbrilEI = '$pesoAbrilEI', pesoJunioEI = '$pesoJunioEI', atencionAdultaEI = '$atencionAdultaEI', entretieneSoloEI = '$entretieneSoloEI', expresaAfectoEI = '$expresaAfectoEI', enojaFrecuentementeEI = '$enojaFrecuentementeEI', porqueEnojaEI = '$porqueEnojaEI', miedosInfundidosEI = '$miedosInfundidosEI', intranquiloEI = '$intranquiloEI', tiempoViendoTvEI = '$tiempoViendoTvEI', programasTvEI = '$programasTvEI', tiempoGamingEI = '$tiempoGamingEI', gamesEI = '$gamesEI', actividadPeriodo1EI = '$actividadPeriodo1EI', actividadPeriodo2EI = '$actividadPeriodo2EI', actividadPeriodo3EI = '$actividadPeriodo3EI', infoCometeFaltaEI = '$infoCometeFaltaEI' WHERE id_estudiante = '$idEstudiante'";
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

	} else {
		
		$sql = "UPDATE e_data_estudiante SET apellidosE = '$apellidosEI', nombresE = '$nombresEI', cedulaE = '$cedulaE', lugarNacimientoE = '$lugarNacimientoEI', idEstadoNatalE = '$idEstadoNatalEI', idMunicipioNatalE = '$idMunicipioNatalEI', idParroquiaNatalE = '$idParroquiaNatalEI', direccionHabitacionE = '$direccionHabitacionEI' WHERE id_estudiante = '$idEstudiante'";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {

			$sql2 = "UPDATE e_data_padres_i SET parentescoREI1 = '$parentescoREI1', nombreCompletoREI1 = '$nombreCompletoREI1', edadREI1 = '$edadREI1', nacionalidadREI1 = '$nacionalidadREI1', gradoInstrucionREI1 = '$gradoInstrucionREI1', trabajaREI1 = '$trabajaREI1', direccionTrabajoREI1 = '$direccionTrabajoREI1', viveREI1 = '$viveREI1', codigoTelCasaREI1 = '$codigoTelCasaREI1', telefonoCasaREI1 = '$telefonoCasaREI1', codigoTelCelREI1 = '$codigoTelCelREI1', telefonoCelREI1 = '$telefonoCelREI1', direccionHabitacionREI1 = '$direccionHabitacionREI1', parentescoREI2 = '$parentescoREI2', nombreCompletoREI2 = '$nombreCompletoREI2', cedulaREI2 = '$cedulaREI2', edadREI2 = '$edadREI2', nacionalidadREI2 = '$nacionalidadREI2', gradoInstrucionREI2 = '$gradoInstrucionREI2', trabajaREI2 = '$trabajaREI2', direccionTrabajoREI2 = '$direccionTrabajoREI2', viveREI2 = '$viveREI2', codigoTelCasaREI2 = '$codigoTelCasaREI2', telefonoCasaREI2 = '$telefonoCasaREI2', codigoTelCelREI2 = '$codigoTelCelREI2', telefonoCelREI2 = '$telefonoCelREI2', direccionHabitacionREI2 = '$direccionHabitacionREI2', situacionPadresEI = '$situacionPadresEI' WHERE id_estudiante = '$idEstudiante'";
			$ejecutar2 = mysqli_query($conectar, $sql2);

			if ($ejecutar2) {

				$sql3 = "UPDATE e_data_familiar_i SET autorizacionFEI = '$autorizacionFEI', organismoAutorizacionFEI = '$organismoAutorizacionFEI', tieneHermanosEI = '$tieneHermanosEI', cuantosHermanosEI = '$cuantosHermanosEI', cuantosHermanosVEI = '$cuantosHermanosVEI', cuantosHermanosHEI = '$cuantosHermanosHEI', lugarHermanosEI = '$lugarHermanosEI', quienDuermeEI = '$quienDuermeEI', quienJuegaEI = '$quienJuegaEI', localizarFEI = '$localizarFEI', dondeQuienViveEI = '$dondeQuienViveEI', tipoPartoEI = '$tipoPartoEI', enfermedadesEI = '$enfermedadesEI', vacunasEI = '$vacunasEI', dificultadCaminarEI = '$dificultadCaminarEI', compromisoVisualEI = '$compromisoVisualEI', auditivosEI = '$auditivosEI', pronunciacionEI = '$pronunciacionEI', otrasEI = '$otrasEI', caracteristicasEI = '$caracteristicasEI', sueñoIntranquiloEI = '$sueñoIntranquiloEI', esfinteresEI = '$esfinteresEI', ayudaBanioEI = '$ayudaBanioEI', comeSoloEI = '$comeSoloEI', alimentosPrefiereEI = '$alimentosPrefiereEI', alergicoEI = '$alergicoEI', alimentosProhibidosEI = '$alimentosProhibidosEI', fiebreMedicamentoEI = '$fiebreMedicamentoEI' WHERE id_estudiante = '$idEstudiante'";
				$ejecutar3 = mysqli_query($conectar, $sql3);

				if ($ejecutar3) {

					$sql4 = "UPDATE e_data_interes_i SET tallaOctubreEI = '$tallaOctubreEI', tallaEneroEI = '$tallaEneroEI', tallaAbrilEI = '$tallaAbrilEI', tallaJunioEI = '$tallaJunioEI', pesoOctubreEI = '$pesoOctubreEI', pesoEneroEI = '$pesoEneroEI', pesoAbrilEI = '$pesoAbrilEI', pesoJunioEI = '$pesoJunioEI', atencionAdultaEI = '$atencionAdultaEI', entretieneSoloEI = '$entretieneSoloEI', expresaAfectoEI = '$expresaAfectoEI', enojaFrecuentementeEI = '$enojaFrecuentementeEI', porqueEnojaEI = '$porqueEnojaEI', miedosInfundidosEI = '$miedosInfundidosEI', intranquiloEI = '$intranquiloEI', tiempoViendoTvEI = '$tiempoViendoTvEI', programasTvEI = '$programasTvEI', tiempoGamingEI = '$tiempoGamingEI', gamesEI = '$gamesEI', actividadPeriodo1EI = '$actividadPeriodo1EI', actividadPeriodo2EI = '$actividadPeriodo2EI', actividadPeriodo3EI = '$actividadPeriodo3EI', infoCometeFaltaEI = '$infoCometeFaltaEI' WHERE id_estudiante = '$idEstudiante'";
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

	sleep(1);
	print (json_encode($data));

?>