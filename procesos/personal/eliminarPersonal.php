<?php 

	require_once "../database/conexion.php";

	$idPersonal = (isset($_POST['idPersonal'])) ? $_POST['idPersonal'] : "";

	$sql = "DELETE FROM personal_p1 WHERE id_personal = '$idPersonal'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>