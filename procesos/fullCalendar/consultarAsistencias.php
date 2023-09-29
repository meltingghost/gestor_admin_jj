<?php 

	session_start();
	require_once "../database/conexion.php";

	$sql = "SELECT id_asistencia AS id, cedulaPersonal AS title, fechaHoraEntrada AS start, fechaHoraSalida AS end FROM asistencias WHERE entrada = 1 AND salida = 1 AND asistente = 1";

	$respuesta = mysqli_query($conectar, $sql);
	$asistencias = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);

	echo json_encode($asistencias);

?>