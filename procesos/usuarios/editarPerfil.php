<?php 

	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : "";

	$sql = "SELECT * FROM usuarios WHERE id_usuario = '$idUsuario'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>