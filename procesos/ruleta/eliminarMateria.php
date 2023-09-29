<?php 

	require_once "../database/conexion.php";

	$idMateria = (isset($_POST['idMateria'])) ? $_POST['idMateria'] : "";

	$sql = "DELETE FROM materias_ruleta WHERE id_materia = '$idMateria'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>