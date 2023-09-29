<?php 

	require_once "../database/conexion.php";

	$idEstudiante = (isset($_POST['idEstudiante'])) ? $_POST['idEstudiante'] : "";

	$sql = "SELECT p1.id_estudiante, p1.apellidosE, p1.nombresE, p1.cedulaE, DATE_FORMAT(p1.fechaNacimientoE, '%d-%m-%Y') AS fechaNacimientoE, p1.edadAniosE, p1.edadMesesE, p1.lugarNacimientoE, p1.idEstadoNatalE, p1.idMunicipioNatalE, p1.idParroquiaNatalE, p1.direccionHabitacionE, p2.parentescoREI1, p2.nombreCompletoREI1, p2.cedulaREI1, p2.edadREI1, p2.nacionalidadREI1, p2.gradoInstrucionREI1, p2.trabajaREI1, p2.direccionTrabajoREI1, p2.viveREI1, p2.codigoTelCasaREI1, p2.telefonoCasaREI1, p2.codigoTelCelREI1, p2.telefonoCelREI1, p2.direccionHabitacionREI1, p2.parentescoREI2, p2.nombreCompletoREI2, p2.cedulaREI2, p2.edadREI2, p2.nacionalidadREI2, p2.gradoInstrucionREI2, p2.trabajaREI2, p2.direccionTrabajoREI2, p2.viveREI2, p2.codigoTelCasaREI2, p2.telefonoCasaREI2, p2.codigoTelCelREI2, p2.telefonoCelREI2, p2.direccionHabitacionREI2, p2.situacionPadresEI, p3.autorizacionFEI, p3.organismoAutorizacionFEI, p3.tieneHermanosEI, p3.cuantosHermanosEI, p3.cuantosHermanosVEI, p3.cuantosHermanosHEI, p3.lugarHermanosEI, p3.quienDuermeEI, p3.quienJuegaEI, p3.localizarFEI, p3.dondeQuienViveEI, p3.tipoPartoEI, p3.enfermedadesEI, p3.vacunasEI, p3.dificultadCaminarEI, p3.compromisoVisualEI, p3.auditivosEI, p3.pronunciacionEI, p3.otrasEI, p3.caracteristicasEI, p3.sueñoIntranquiloEI, p3.esfinteresEI, p3.ayudaBanioEI, p3.comeSoloEI, p3.alimentosPrefiereEI, p3.alergicoEI, p3.alimentosProhibidosEI, p3.fiebreMedicamentoEI, p4.tallaOctubreEI, p4.tallaEneroEI, p4.tallaAbrilEI, p4.tallaJunioEI, p4.pesoOctubreEI, p4.pesoEneroEI, p4.pesoAbrilEI, p4.pesoJunioEI, p4.atencionAdultaEI, p4.entretieneSoloEI, p4.expresaAfectoEI, p4.enojaFrecuentementeEI, p4.porqueEnojaEI, p4.miedosInfundidosEI, p4.intranquiloEI, p4.tiempoViendoTvEI, p4.programasTvEI, p4.tiempoGamingEI, p4.gamesEI, p4.actividadPeriodo1EI, p4.actividadPeriodo2EI, p4.actividadPeriodo3EI, p4.infoCometeFaltaEI, municipios.municipio, parroquias.parroquia FROM e_data_estudiante AS p1 INNER JOIN e_data_padres_i AS p2 ON p1.id_estudiante=p2.id_estudiante INNER JOIN e_data_familiar_i AS p3 ON p1.id_estudiante=p3.id_estudiante INNER JOIN e_data_interes_i AS p4 ON p1.id_estudiante=p4.id_estudiante INNER JOIN municipios ON p1.idMunicipioNatalE=municipios.id_municipio INNER JOIN parroquias ON p1.idParroquiaNatalE=parroquias.id_parroquia WHERE p1.id_estudiante = '$idEstudiante'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>