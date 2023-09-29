<?php 

	session_start();
	require_once "../database/conexion.php";

	$idEstudiante = (isset($_POST['idEstudiante'])) ? $_POST['idEstudiante'] : "";

	$sql = "DELETE FROM e_data_estudiante WHERE id_estudiante = '$idEstudiante'";
	$ejecutar = mysqli_query($conectar, $sql);

	if ($ejecutar) {
		$data = 1;
	} else {
		$data = 2;
	}

	print json_encode($data);

?>