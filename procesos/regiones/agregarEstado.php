<?php 

	require_once "../database/conexion.php";

	$estado = $_POST['nombreEstado'];

	$query = mysqli_query($conectar, "SELECT * FROM estados WHERE estado = '$estado'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	}else{

		$sql = "INSERT INTO estados VALUES(NULL, '$estado')";
		$ejecutar = mysqli_query($conectar, $sql);

		if ($ejecutar) {
			$data = 1;
		}else{
			$data = 3;
		}

	}

	print json_encode($data);

?>