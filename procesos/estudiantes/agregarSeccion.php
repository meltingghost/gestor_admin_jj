<?php 

	session_start();
	require_once "../database/conexion.php";

	$seccion = $_POST['seccion'];
	$grado = $_POST['gradoSeccion'];

	$query = mysqli_query($conectar, "SELECT * FROM secciones WHERE letraSeccion = '$seccion' AND id_grado = '$grado'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	}else {

		$sql = "INSERT INTO secciones VALUES(NULL, '$seccion', '$grado', NULL)";
		$ejecutar = mysqli_query($conectar, $sql);

		if($ejecutar){
			$data = 1;
		}else{
			$data = 3;
		}

	}

	print json_encode($data);

?>