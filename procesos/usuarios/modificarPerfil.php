<?php 

	require_once "../database/conexion.php";

	$idUsuario = (isset($_POST['idUsuarioEdit'])) ? $_POST['idUsuarioEdit'] : "";
	$nombre = (isset($_POST['nombreUserEdit'])) ? $_POST['nombreUserEdit'] : "";
	$apellido = (isset($_POST['apellidoUserEdit'])) ? $_POST['apellidoUserEdit'] : "";
	$correo = (isset($_POST['correoUserEdit'])) ? $_POST['correoUserEdit'] : "";
	$cargoOld = (isset($_POST['cargoUserOld'])) ? $_POST['cargoUserOld'] : "";
	$cargo = (isset($_POST['cargosUserEdit'])) ? $_POST['cargosUserEdit'] : "";
	$usuarioOld = (isset($_POST['usernameOld'])) ? $_POST['usernameOld'] : "";
	$usuario = (isset($_POST['usernameEdit'])) ? $_POST['usernameEdit'] : "";
	$password = sha1((isset($_POST['passwordEdit'])) ? $_POST['passwordEdit'] : "");

	if ($usuario != $usuarioOld) {
		
		$query = mysqli_query($conectar, "SELECT * FROM usuarios WHERE username = '$usuario'");
		$nr = mysqli_num_rows($query);

		if($nr==1){
			$data = 2;
		}else{

			if ($cargo != $cargoOld) {
				
				if ($cargo==1) {

					$query2 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 1");
					$nr2 = mysqli_num_rows($query2);

					if($nr2==1){
						$data = 3;
					}else{

						$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
						$resultado = $conectar->query($sql);

						if($resultado){
							$data = 1;
						}else{
							$data = 6;
						}

					}

				}else if ($cargo==2) {

					$query3 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 2");
					$nr3 = mysqli_num_rows($query3);

					if($nr3==1){
						$data = 4;
					}else{

						$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
						$resultado = $conectar->query($sql);

						if($resultado){
							$data = 1;
						}else{
							$data = 6;
						}

					}

				}else if ($cargo==3) {

					$query4 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 3");
					$nr4 = mysqli_num_rows($query4);

					if($nr4==1){
						$data = 5;
					}else{

						$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
						$resultado = $conectar->query($sql);

						if($resultado){
							$data = 1;
						}else{
							$data = 6;
						}

					}

				}else{

					$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
					$resultado = $conectar->query($sql);

					if($resultado){
						$data = 1;
					}else{
						$data = 6;
					}

				}

			}else{

				$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
				$resultado = $conectar->query($sql);

				if($resultado){
					$data = 1;
				}else{
					$data = 6;
				}

			}
	
		}

	}else{

		if ($cargo != $cargoOld) {

			if ($cargo==1) {

				$query2 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 1");
				$nr2 = mysqli_num_rows($query2);

				if($nr2==1){
					$data = 3;
				}else{

					$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
					$resultado = $conectar->query($sql);

					if($resultado){
						$data = 1;
					}else{
						$data = 6;
					}

				}

			}else if ($cargo==2) {

				$query3 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 2");
				$nr3 = mysqli_num_rows($query3);

				if($nr3==1){
					$data = 4;
				}else{

					$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
					$resultado = $conectar->query($sql);

					if($resultado){
						$data = 1;
					}else{
						$data = 6;
					}

				}

			}else if ($cargo==3) {

				$query4 = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id_cargoUser = 3");
				$nr4 = mysqli_num_rows($query4);

				if($nr4==1){
					$data = 5;
				}else{

					$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
					$resultado = $conectar->query($sql);

					if($resultado){
						$data = 1;
					}else{
						$data = 6;
					}

				}

			}else{

				$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
				$resultado = $conectar->query($sql);

				if($resultado){
					$data = 1;
				}else{
					$data = 6;
				}

			}

		}else{

			$sql = "UPDATE usuarios SET nombreUser='$nombre', apellidoUser='$apellido', correoUser='$correo', id_cargoUser='$cargo', username='$usuario', password='$password' WHERE id_usuario = '$idUsuario'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data = 1;
			}else{
				$data = 6;
			}

		}

	}

	print json_encode($data);

?>