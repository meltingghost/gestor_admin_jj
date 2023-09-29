<?php 

	require_once "../database/conexion.php";

	$idPermiso = (isset($_POST['idPermiso'])) ? $_POST['idPermiso'] : "";

	$sql = "SELECT * FROM permisos WHERE id_permiso = '$idPermiso'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>