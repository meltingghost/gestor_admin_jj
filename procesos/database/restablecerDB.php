<?php 

	require_once "conexion.php";

	$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : "";

	$codigoConfirm = "GestorAdminPresbiteroJJ2023";

	if ($codigo == $codigoConfirm) {

		$sql = "DROP DATABASE `gestor_jj`";
		$ejecutar = mysqli_query($conectar, $sql);

		if($ejecutar){
			$data= 1;
		}else{
			$data= 3;
		}

	} else {
		$data = 2;
	}

	print json_encode($data);

?>