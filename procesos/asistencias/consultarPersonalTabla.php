<?php 

	require_once "../../procesos/database/conexion.php";
	$cedula = "";

	if (isset($_GET['cedulaPersonal'])) {
		$cedula = $_GET['cedulaPersonal'];
	}

	$sql = "SELECT p1.id_personal, p1.nombreCompletoPersonal, p1.cedulaPersonal, cargos.nombreCargo, asistencias.id_asistencia, asistencias.cedulaPersonal, DATE_FORMAT(asistencias.fechaHoraEntrada, '%d-%m-%Y') AS fecha, DATE_FORMAT(asistencias.fechaHoraEntrada, '%h:%i %p') AS horaEntrada, DATE_FORMAT(asistencias.fechaHoraSalida, '%h:%i %p') AS horaSalida, asistencias.observacion, asistencias.asistente, asistencias.confirmarAsistencia FROM personal_p1 AS p1 INNER JOIN personal_p2 AS p2 ON p1.id_personal = p2.id_personal INNER JOIN cargos ON p2.id_funcionPersonal = cargos.id_cargo INNER JOIN asistencias ON asistencias.cedulaPersonal = p1.cedulaPersonal WHERE asistencias.cedulaPersonal = '$cedula'";
	$result = $conectar->query($sql);


?>