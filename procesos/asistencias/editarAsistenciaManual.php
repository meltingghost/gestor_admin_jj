<?php 

	require_once "../database/conexion.php";

	$idAsistencia = (isset($_POST['idAsistencia'])) ? $_POST['idAsistencia'] : "";

	$sql = "SELECT id_asistencia, cedulaPersonal, DATE_FORMAT(fechaHoraEntrada, '%d-%m-%Y') AS fecha, DATE_FORMAT(fechaHoraEntrada, '%H:%i') AS horaEntrada, DATE_FORMAT(fechaHoraSalida, '%H:%i') AS horaSalida, observacion, asistente, confirmarAsistencia FROM asistencias WHERE id_asistencia = '$idAsistencia'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>