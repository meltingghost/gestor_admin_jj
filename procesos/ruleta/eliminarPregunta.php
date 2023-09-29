<?php 

	require_once "../database/conexion.php";

	$idPregunta = (isset($_POST['idPregunta'])) ? $_POST['idPregunta'] : "";

	$sql = "DELETE FROM preguntas_ruleta WHERE id_pregunta = '$idPregunta'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>