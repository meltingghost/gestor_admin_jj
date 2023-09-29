<?php 

	session_start();
	require_once "../database/conexion.php";

	$usuario = $_POST['validarUsername'];
	$password = sha1($_POST['validarPassword']);

	if ($usuario == $_SESSION['usuario']) {

		$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE username = '$usuario' AND password = '$password'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1){
			$data = 1;
		}else{
			$data = 3;
		}	

	}else {
		$data = 2;
	}

	print json_encode($data);

?>