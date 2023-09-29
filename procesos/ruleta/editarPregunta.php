<?php 

	require_once "../../procesos/database/conexion.php";

	$idPregunta = (isset($_POST['idPregunta'])) ? $_POST['idPregunta'] : "";

	$sql = "SELECT * FROM preguntas_ruleta INNER JOIN materias_ruleta ON preguntas_ruleta.materia = materias_ruleta.nombreMateria WHERE id_pregunta = '$idPregunta'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>