<?php 

	session_start();
	require_once "../database/conexion.php";

	$ddmmi = $_POST['ddmmi'];
	$yyi = $_POST['yyi'];
	$ddmmf = $_POST['ddmmf'];
	$yyf = $_POST['yyf'];

	$query = mysqli_query($conectar, "SELECT * FROM anio_escolar WHERE yyi = '$yyi'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO anio_escolar VALUES(NULL, '$ddmmi', '$yyi', '$ddmmf', '$yyf', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>