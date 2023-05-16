<?php 

	require_once "../database/conexion.php";

	$idCargo = (isset($_POST['idCargoEdit'])) ? $_POST['idCargoEdit'] : "";
	$cargoOld = (isset($_POST['nombreCargoOld'])) ? $_POST['nombreCargoOld'] : "";
	$cargo = (isset($_POST['nombreCargoEdit'])) ? $_POST['nombreCargoEdit'] : "";

	if ($cargo != $cargoOld) {
		$query = mysqli_query($conectar, "SELECT * FROM cargos WHERE nombreCargo = '$cargo'");
		$nr = mysqli_num_rows($query);

		if($nr==1){
			$data = 2;
		}else{
			$sql = "UPDATE cargos SET nombreCargo='$cargo' WHERE id_cargo = '$idCargo'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data= 1;
			}else{
				$data= 3;
			}
		}
	}else{
		$sql = "UPDATE cargos SET nombreCargo='$cargo' WHERE id_cargo = '$idCargo'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data= 1;
		}else{
			$data= 3;
		}
	}

	print json_encode($data);

 ?>