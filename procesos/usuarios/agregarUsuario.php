<?php 

	require_once "../database/conexion.php";

	$nombre=$_POST['nombreUser'];
	$apellido=$_POST['apellidoUser'];
	$correo=$_POST['correoUser'];
	$cargo=$_POST['cargosUser'];
	$usuario=$_POST['username'];
	$password=sha1($_POST['password']);

	$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE username = '$usuario'");
	$nr = mysqli_num_rows($query);

	if ($nr==1) {
		$data = 2;
		$idUsuario = 0;
	} else {

		if ($cargo==1) {

			$query2 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 1");
			$nr2 = mysqli_num_rows($query2);

			if ($nr2==1) {
				$data = 3;
				$idUsuario = 0;
			} else {

				$sql="INSERT INTO `usuarios`(`id_usuario`, `nombreUser`, `apellidoUser`, `correoUser`, `id_cargoUser`, `username`, `password`, `fecha`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$cargo', '$usuario', '$password', NULL)";
				$ejecutar=mysqli_query($conectar,$sql);
				$idUsuario = mysqli_insert_id($conectar);

				if ($ejecutar) {
					$data = 1;
				} else {
					$data = 6;
					$idUsuario = 0;
				}

			}

		} else if ($cargo==2) {

			$query3 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 2");
			$nr3 = mysqli_num_rows($query3);

			if ($nr3==1) {
				$data = 4;
				$idUsuario = 0;
			} else {

				$sql="INSERT INTO `usuarios`(`id_usuario`, `nombreUser`, `apellidoUser`, `correoUser`, `id_cargoUser`, `username`, `password`, `fecha`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$cargo', '$usuario', '$password', NULL)";
				$ejecutar=mysqli_query($conectar,$sql);
				$idUsuario = mysqli_insert_id($conectar);

				if ($ejecutar) {
					$data = 1;
				} else {
					$data = 6;
					$idUsuario = 0;
				}

			}

		} else if ($cargo==3) {
			
			$query4 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 3");
			$nr4 = mysqli_num_rows($query4);

			if ($nr4==1) {
				$data = 5;
				$idUsuario = 0;
			} else {

				$sql="INSERT INTO `usuarios`(`id_usuario`, `nombreUser`, `apellidoUser`, `correoUser`, `id_cargoUser`, `username`, `password`, `fecha`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$cargo', '$usuario', '$password', NULL)";
				$ejecutar=mysqli_query($conectar,$sql);
				$idUsuario = mysqli_insert_id($conectar);

				if ($ejecutar) {
					$data = 1;
				} else {
					$data = 6;
					$idUsuario = 0;
				}

			}

		} else {

			$sql="INSERT INTO `usuarios`(`id_usuario`, `nombreUser`, `apellidoUser`, `correoUser`, `id_cargoUser`, `username`, `password`, `fecha`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$cargo', '$usuario', '$password', NULL)";
			$ejecutar=mysqli_query($conectar,$sql);
			$idUsuario = mysqli_insert_id($conectar);

			if ($ejecutar) {
				$data = 1;
			} else {
				$data = 6;
				$idUsuario = 0;
			}

		}

	}

	$datos = array("data"=>$data, "idUsuario"=>$idUsuario, "username"=>$usuario);

	print(json_encode($datos));

 ?>