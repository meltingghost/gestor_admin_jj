<?php 

	session_start();
	require_once "../database/conexion.php";

	$sql = "SELECT id_asistencia AS id, cedulaPersonal AS title, fechaHoraEntrada AS start, fechaHoraSalida AS end FROM asistencias WHERE entrada = 0 AND salida = 0 AND asistente = 0";

	$respuesta = mysqli_query($conectar, $sql);
	$inasistencias = mysqli_fetch_all($respuesta, MYSQLI_ASSOC);

	echo json_encode($inasistencias);

?>