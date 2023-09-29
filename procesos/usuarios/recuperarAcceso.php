<?php 

	require_once "../database/conexion.php";

	$usuario = $_POST['usernameRecovery'];

	$query = mysqli_query($conectar, "SELECT id_usuario, username, pregunta1, pregunta2, pregunta3 FROM usuarios WHERE username = '$usuario'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {

		$data = 1;
		$infoUser = $query->fetch_array(MYSQLI_ASSOC);

	} else {
		$data = 2;
		$infoUser = null;
	}


	$datos = array("data"=>$data, "info"=>$infoUser);

	print json_encode($datos);

?>