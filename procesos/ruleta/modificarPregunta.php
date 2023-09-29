<?php 

	require_once "../database/conexion.php";

	$idPregunta = (isset($_POST['idPreguntaEdit'])) ? $_POST['idPreguntaEdit'] : "";
	$preguntaOld = (isset($_POST['preguntaOld'])) ? $_POST['preguntaOld'] : "";
	$materia = (isset($_POST['materiaPreguntaEdit'])) ? $_POST['materiaPreguntaEdit'] : "";
	$pregunta = (isset($_POST['preguntaEdit'])) ? $_POST['preguntaEdit'] : "";
	$respuesta = (isset($_POST['respuestaEdit'])) ? $_POST['respuestaEdit'] : "";

	if ($pregunta != $preguntaOld) {

		$query = mysqli_query($conectar, "SELECT * FROM preguntas_ruleta WHERE pregunta = '$pregunta' AND materia = '$materia'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		} else {

			$sql = "UPDATE preguntas_ruleta SET materia = '$materia', pregunta = '$pregunta', respuesta = '$respuesta' WHERE id_pregunta = '$idPregunta'";
			$ejecutar = mysqli_query($conectar, $sql);

			if ($ejecutar) {
				$data = 1;
			} else {
				$data = 3;
			}

		}

	} else {

		$sql = "UPDATE preguntas_ruleta SET materia = '$materia', pregunta = '$pregunta', respuesta = '$respuesta' WHERE id_pregunta = '$idPregunta'";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>