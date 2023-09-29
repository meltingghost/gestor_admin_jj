<?php

	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idOtroUserEdit'])) ? $_POST['idOtroUserEdit'] : "";
	$cargoOld = (isset($_POST['cargoOtroUserOld'])) ? $_POST['cargoOtroUserOld'] : "";
	$cargo = (isset($_POST['cargoOtroUserEdit'])) ? $_POST['cargoOtroUserEdit'] : "";

	if ($cargo != $cargoOld) {

		if ($cargo==1) {

			$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 1");
			$nr = mysqli_num_rows($query);

			if($nr==1){
				$data = 2;
			}else{

				$sql = "UPDATE usuarios SET id_cargoUser='$cargo' WHERE id_usuario = '$idUsuario'";
				$resultado = $conectar->query($sql);

				if($resultado){
					$data = 1;
				}else{
					$data = 5;
				}

			}

		}else if ($cargo==2) {

			$query2 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 2");
			$nr2 = mysqli_num_rows($query2);

			if($nr2==1){
				$data = 3;
			}else{

				$sql = "UPDATE usuarios SET id_cargoUser='$cargo' WHERE id_usuario = '$idUsuario'";
				$resultado = $conectar->query($sql);

				if($resultado){
					$data = 1;
				}else{
					$data = 5;
				}

			}

		}else if ($cargo==3) {

			$query3 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 3");
			$nr3 = mysqli_num_rows($query3);

			if($nr3==1){
				$data = 4;
			}else{

				$sql = "UPDATE usuarios SET id_cargoUser='$cargo' WHERE id_usuario = '$idUsuario'";
				$resultado = $conectar->query($sql);

				if($resultado){
					$data = 1;
				}else{
					$data = 5;
				}

			}

		}else{

			$sql = "UPDATE usuarios SET id_cargoUser='$cargo' WHERE id_usuario = '$idUsuario'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data = 1;
			}else{
				$data = 5;
			}

		}

	}else{

		$sql = "UPDATE usuarios SET id_cargoUser='$cargo' WHERE id_usuario = '$idUsuario'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data = 1;
		}else{
			$data = 5;
		}

	}

	print json_encode($data);

?>