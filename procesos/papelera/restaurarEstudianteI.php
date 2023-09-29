<?php 

	session_start();
	require_once "../database/conexion.php";

	$idEstudiante = (isset($_POST['idEstudiante'])) ? $_POST['idEstudiante'] : "";

	$sql = "UPDATE e_data_estudiante SET papeleraE = 0 WHERE id_estudiante = '$idEstudiante'";
	$ejecutar = mysqli_query($conectar, $sql);

	if ($ejecutar) {
		$data = 1;
	} else {
		$data = 2;
	}

	print json_encode($data);

?>