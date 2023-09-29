<?php 

	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idUserRecovery'])) ? $_POST['idUserRecovery'] : "";
	$respuesta1 = (isset($_POST['respuesta1Recovery'])) ? $_POST['respuesta1Recovery'] : "";
	$respuesta2 = (isset($_POST['respuesta2Recovery'])) ? $_POST['respuesta2Recovery'] : "";
	$respuesta3 = (isset($_POST['respuesta3Recovery'])) ? $_POST['respuesta3Recovery'] : "";

	$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_usuario = '$idUsuario' AND respuesta1 = '$respuesta1' AND respuesta2 = '$respuesta2' AND respuesta3 = '$respuesta3'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 1;
	} else {
		$data = 2;
	}

	$datos = array("data"=>$data, "idUsuario"=>$idUsuario);

	print json_encode($datos);

?>