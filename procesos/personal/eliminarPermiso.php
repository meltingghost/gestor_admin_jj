<?php 

	session_start();
	require_once "../database/conexion.php";

	$idPermiso = (isset($_POST['idPermiso'])) ? $_POST['idPermiso'] : "";

	$sql = "DELETE FROM permisos WHERE id_permiso = '$idPermiso'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>