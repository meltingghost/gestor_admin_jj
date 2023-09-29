<?php 

	session_start();
	require_once "../database/conexion.php";

	$sql = "DELETE FROM e_data_estudiante WHERE papeleraE = 1";
	$ejecutar = mysqli_query($conectar, $sql);

	if ($ejecutar) {
		$data = 1;
	} else {
		$data = 2;
	}

	sleep(1);
	print json_encode($data);

?>