<?php 

	require_once "../database/conexion.php";

	$idEstudiante = (isset($_POST['idEstudiante'])) ? $_POST['idEstudiante'] : "";

	$sql = "SELECT p1.id_estudiante, p1.apellidosE, p1.nombresE, p1.cedulaE, DATE_FORMAT(p1.fechaNacimientoE, '%d-%m-%Y') AS fechaNacimientoE, p1.edadAniosE, p1.lugarNacimientoE, p1.idEstadoNatalE, p1.idMunicipioNatalE, p1.idParroquiaNatalE, p1.direccionHabitacionE, p1.sexoEB, DATE_FORMAT(p1.fecha, '%d-%m-%Y') AS fecha, p5.nombreCompletoREB, DATE_FORMAT(p5.fechaNacimientoREB, '%d-%m-%Y') AS fechaNacimientoREB, p5.cedulaREB, p5.edadREB, p5.gradoInstruccionREB, p5.ocupacionREB, p5.lugarTrabajoREB, p5.codigoTelREB, p5.telefonoREB, p5.direccionDomicilioREB, p5.parentescoREB, p5.rSustitutoEB, DATE_FORMAT(p5.fechaNacimientoRSEB, '%d-%m-%Y') AS fechaNacimientoRSEB, p5.cedulaRSEB, p5.direccionHabitacionRSEB, p5.codigoTelRSEB, p5.telefonoRSEB, p5.id_personalResponsableEB, p5.confirmResponsableInsEB, p5.observacionesEB, p5.fichaNumEB, personal_p1.id_personal, personal_p1.nombreCompletoPersonal, personal_p2.id_funcionPersonal, cargos.nombreCargo, formalizar.id_anioEscolar, formalizar.id_literalGradoAnterior, formalizar.id_gradoCursar, formalizar.id_seccionGradoCursar, municipios.municipio, parroquias.parroquia, secciones.letraSeccion, grados.numeroGrado FROM e_data_estudiante AS p1 INNER JOIN e_data_representante_b AS p5 ON p1.id_estudiante = p5.id_estudiante INNER JOIN personal_p1 ON p5.id_personalResponsableEB = personal_p1.id_personal INNER JOIN personal_p2 ON personal_p1.id_personal = personal_p2.id_personal INNER JOIN cargos ON personal_p2.id_funcionPersonal = cargos.id_cargo INNER JOIN formalizar_ins_e AS formalizar ON p1.id_estudiante = formalizar.id_estudiante INNER JOIN municipios ON p1.idMunicipioNatalE = municipios.id_municipio INNER JOIN parroquias ON p1.idParroquiaNatalE = parroquias.id_parroquia INNER JOIN secciones ON formalizar.id_seccionGradoCursar = secciones.id_seccion INNER JOIN grados ON formalizar.id_gradoCursar = grados.id_grado WHERE p1.id_estudiante = '$idEstudiante'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>