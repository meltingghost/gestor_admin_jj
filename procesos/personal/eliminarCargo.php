<?php 

	session_start();
	require_once "../database/conexion.php";

	$idCargo = (isset($_POST['idCargo'])) ? $_POST['idCargo'] : "";

	$sql = "DELETE FROM cargos WHERE id_cargo = '$idCargo'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>