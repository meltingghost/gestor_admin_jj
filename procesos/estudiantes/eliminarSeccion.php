<?php 

	session_start();
	require_once "../database/conexion.php";

	$idSeccion = (isset($_POST['idSeccion'])) ? $_POST['idSeccion'] : "";

	$sql = "DELETE FROM secciones WHERE id_seccion = '$idSeccion'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>