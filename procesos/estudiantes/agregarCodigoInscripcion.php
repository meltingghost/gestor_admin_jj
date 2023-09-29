<?php 

	session_start();
	require_once "../database/conexion.php";

	$codigo = $_POST['codigo'];

	$query = mysqli_query($conectar, "SELECT * FROM codigos WHERE codigo = '$codigo'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO codigos VALUES(NULL, '$codigo', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>