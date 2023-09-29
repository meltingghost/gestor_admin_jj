<?php 

	session_start();
	require_once "../database/conexion.php";

	$idLiteral = (isset($_POST['idLiteral'])) ? $_POST['idLiteral'] : "";

	$sql = "DELETE FROM literal WHERE id_literal = '$idLiteral'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>