<?php 

	require_once "../database/conexion.php";

	$materia = $_POST['nombreMateria'];

	$query = mysqli_query($conectar, "SELECT * FROM materias_ruleta WHERE nombreMateria = '$materia'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO materias_ruleta VALUES(NULL, '$materia', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>