<?php 

	require_once "../database/conexion.php";

	$idLiteral = (isset($_POST['idLiteral'])) ? $_POST['idLiteral'] : "";

	$sql = "SELECT * FROM literal WHERE id_literal = '$idLiteral'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>