<?php 

	require_once "../database/conexion.php";

	$idAsistencia = (isset($_POST['idAsistenciaManEdit'])) ? $_POST['idAsistenciaManEdit'] : "";
	$fecha = explode("-", (isset($_POST['fechaAsisManEdit'])) ? $_POST['fechaAsisManEdit'] : "");
	$fecha = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
	$fechaHoraEntrada = $fecha . " " . ((isset($_POST['horaEntradaAsisManEdit'])) ? $_POST['horaEntradaAsisManEdit'] : "");
	$fechaHoraSalida = $fecha . " " . ((isset($_POST['horaSalidaAsisManEdit'])) ? $_POST['horaSalidaAsisManEdit'] : "");
	$observacion = (isset($_POST['observacionAsisManEdit'])) ? $_POST['observacionAsisManEdit'] : "";

	$sql = "UPDATE asistencias SET fechaHoraEntrada = '$fechaHoraEntrada', entrada = 1, fechaHoraSalida = '$fechaHoraSalida', salida = 1, observacion = '$observacion', asistente = 1 WHERE id_asistencia = '$idAsistencia'";
	$resultado = $conectar->query($sql);

	if ($resultado) {
		$data = 1;
	}else {
		$data = 2;
	}

	print json_encode($data);

?>