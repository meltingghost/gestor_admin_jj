<?php 

	require_once "../database/conexion.php";

	$materia = $_POST['materiaPregunta'];
	$pregunta = $_POST['pregunta'];
	$respuesta = $_POST['respuesta'];

	$query = mysqli_query($conectar, "SELECT * FROM preguntas_ruleta WHERE pregunta = '$pregunta' AND materia = '$materia'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO preguntas_ruleta VALUES(NULL, '$materia', '$pregunta', '$respuesta', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);


?>