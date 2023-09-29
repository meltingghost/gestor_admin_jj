<?php 

	require_once "../database/conexion.php";

	$idGrado = (isset($_POST['idGradoEdit'])) ? $_POST['idGradoEdit'] : "";
	$gradoOld = (isset($_POST['numeroGradoOld'])) ? $_POST['numeroGradoOld'] : "";
	$grado = (isset($_POST['numeroGradoEdit'])) ? $_POST['numeroGradoEdit'] : "";

	if ($grado != $gradoOld) {
		$query = mysqli_query($conectar, "SELECT * FROM grados WHERE numeroGrado = '$grado'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		}else {
			$sql = "UPDATE grados SET numeroGrado = '$grado' WHERE id_grado = '$idGrado'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data= 1;
			}else{
				$data= 3;
			}
		}
	}else {
		$sql = "UPDATE grados SET numeroGrado = '$grado' WHERE id_grado = '$idGrado'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data= 1;
		}else{
			$data= 3;
		}
	}

	print json_encode($data);

?>