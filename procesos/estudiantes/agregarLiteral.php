<?php 

	session_start();
	require_once "../database/conexion.php";

	$literal = $_POST['letraLiteral'];
	$descripcion = $_POST['descripcionLiteral'];

	$query = mysqli_query($conectar, "SELECT * FROM literal WHERE letraLiteral = '$literal'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO literal VALUES(NULL, '$literal', '$descripcion', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);
?>