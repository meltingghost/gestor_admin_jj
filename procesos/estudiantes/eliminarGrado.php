<?php 

	session_start();
	require_once "../database/conexion.php";

	$idGrado = (isset($_POST['idGrado'])) ? $_POST['idGrado'] : "";

	$sql = "DELETE FROM grados WHERE id_grado = '$idGrado'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>