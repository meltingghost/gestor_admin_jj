<?php 

	require_once "../database/conexion.php";

	$idMateria = (isset($_POST['idMateria'])) ? $_POST['idMateria'] : "";

	$sql = "SELECT * FROM materias_ruleta WHERE id_materia = '$idMateria'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>