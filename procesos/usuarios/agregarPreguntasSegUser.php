<?php 

	require_once "../database/conexion.php";

	$pregunta1 = $_POST['pregunta1'];
	$respuesta1 = $_POST['respuesta1'];
	$pregunta2 = $_POST['pregunta2'];
	$respuesta2 = $_POST['respuesta2'];
	$pregunta3 = $_POST['pregunta3'];
	$respuesta3 = $_POST['respuesta3'];
	$idUsuario = (isset($_POST['idUsuario'])) ? $_POST['idUsuario'] : "";

	$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_usuario = '$idUsuario'");
	$nr = mysqli_num_rows($query);

	if ($nr==1) {

		$sql = "UPDATE usuarios SET pregunta1='$pregunta1', respuesta1='$respuesta1', pregunta2='$pregunta2', respuesta2='$respuesta2', pregunta3='$pregunta3', respuesta3='$respuesta3' WHERE id_usuario = '$idUsuario'";
		$resultado = $conectar->query($sql);

		if ($resultado) {
			$data = 1;
		} else {
			$data = 2;
		}

	}

	print json_encode($data);

 ?>