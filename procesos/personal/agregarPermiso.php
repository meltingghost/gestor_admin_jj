<?php 

	session_start();
	require_once "../database/conexion.php";

	$permiso = $_POST['nombrePermiso'];
	$descripcion = $_POST['descripcionPermiso'];

	$query = mysqli_query($conectar, "SELECT * FROM permisos WHERE nombrePermiso = '$permiso'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		$sql = "INSERT INTO permisos VALUES(NULL, '$permiso', '$descripcion', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);
?>