<?php 

	require_once "../database/conexion.php";

	$idAnioEscolar = (isset($_POST['idAnioEscolarEdit'])) ? $_POST['idAnioEscolarEdit'] : "";
	$ddmmi = (isset($_POST['ddmmiEdit'])) ? $_POST['ddmmiEdit'] : "";
	$ddmmf = (isset($_POST['ddmmfEdit'])) ? $_POST['ddmmfEdit'] : "";

	$sql = "UPDATE anio_escolar SET ddmmi = '$ddmmi', ddmmf = '$ddmmf' WHERE id_anioEscolar = '$idAnioEscolar'";
	$resultado = $conectar->query($sql);

	if($resultado){
		$data= 1;
	}else{
		$data= 2;
	}

	print json_encode($data);

?>