<?php 

	require_once "../database/conexion.php";

	$idSeccion = (isset($_POST['idSeccion'])) ? $_POST['idSeccion'] : "";

	$sql = "SELECT secciones.id_seccion, secciones.letraSeccion, secciones.id_grado AS id_grado_seccion, grados.id_grado, grados.numeroGrado AS grado FROM secciones INNER JOIN grados ON secciones.id_grado = grados.id_grado WHERE id_seccion = '$idSeccion'";
	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print json_encode($data);

?>