<?php

	session_start();
	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : "";

	$sql = "DELETE FROM usuarios WHERE id_usuario = '$idUsuario'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>