<?php 

	require_once "../database/conexion.php";

	$idParroquia = (isset($_POST['idParroquia'])) ? $_POST['idParroquia'] : "";

	$sql = "SELECT * FROM parroquias WHERE id_parroquia = '$idParroquia'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>