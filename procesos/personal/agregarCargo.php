<?php 

	session_start();
	require_once "../database/conexion.php";

	$cargo = $_POST['nombreCargo'];

	$query = mysqli_query($conectar, "SELECT * FROM cargos WHERE nombreCargo = '$cargo'");
	$nr = mysqli_num_rows($query);

	if($nr==1){
		$data = 2;
	}else{
		$sql="INSERT INTO cargos VALUES(NULL, '$cargo', 0, NULL)";
		$ejecutar=mysqli_query($conectar,$sql);
		if($ejecutar){
			$data = 1;
		}else{
			$data = 3;
		}
	}

	print json_encode($data);
?>