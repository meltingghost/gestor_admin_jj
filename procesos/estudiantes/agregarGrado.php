<?php 

	session_start();
	require_once "../database/conexion.php";

	$grado = $_POST['grado'];

	$query = mysqli_query($conectar, "SELECT * FROM grados WHERE numeroGrado = '$grado'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	}else {

		$sql = "INSERT INTO grados VALUES(NULL, '$grado', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>