<?php 

	require_once "conexion.php";

	$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : "";

	$codigoConfirm = "GestorAdminPresbiteroJJ2023";

	if ($codigo == $codigoConfirm) {

		$sql = "DELETE FROM usuarios WHERE id_cargoUser = 2";
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