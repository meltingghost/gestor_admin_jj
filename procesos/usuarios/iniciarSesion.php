<?php

	session_start();
	require_once "../database/conexion.php";

	$usuario=$_POST['username'];
	$password=sha1($_POST['password']);

	$conusr=mysqli_query($conectar, "SELECT * FROM usuarios WHERE username = '$usuario'");
	$nru = mysqli_num_rows($conusr);

	if ($nru==1) {

		$query = mysqli_query($conectar, "SELECT usuarios.id_usuario AS id_usuario, usuarios.nombreUser AS nombre, usuarios.apellidoUser AS apellido, usuarios.id_cargoUser AS id_cargo, usuarios.username AS usuario, cargos.nombreCargo AS cargo FROM usuarios INNER JOIN cargos ON usuarios.id_cargoUser=cargos.id_cargo WHERE username = '$usuario' AND password = '$password'");
		$nr = mysqli_num_rows($query);

		if($nr==1){

			if ($_POST['codigoInscripcion']) {

				$codigo=$_POST['codigoInscripcion'];

				$conCod= mysqli_query($conectar, "SELECT codigo FROM codigos ORDER BY id_codigo DESC LIMIT 1");

				if ($mostrar = $conCod->fetch_array(MYSQLI_ASSOC)) {

					$codigoInscripcion = $mostrar['codigo'];

					if ($codigo != $codigoInscripcion) {

						if ($row = $query->fetch_array(MYSQLI_ASSOC)) {
							$_SESSION['id_usuario'] = $row['id_usuario'];
							$_SESSION['usuario'] = $usuario;
							$_SESSION['nombre'] = $row['nombre'];
							$_SESSION['apellido'] = $row['apellido'];
							$_SESSION['id_cargo'] = $row['id_cargo'];
							$_SESSION['cargo'] = $row['cargo'];
							$_SESSION['codigoInscripcion'] = null;
							$data = 4;
						}
						
					} else {

						if ($row = $query->fetch_array(MYSQLI_ASSOC)) {
							$_SESSION['id_usuario'] = $row['id_usuario'];
							$_SESSION['usuario'] = $usuario;
							$_SESSION['nombre'] = $row['nombre'];
							$_SESSION['apellido'] = $row['apellido'];
							$_SESSION['id_cargo'] = $row['id_cargo'];
							$_SESSION['cargo'] = $row['cargo'];
							$_SESSION['codigoInscripcion'] = $codigoInscripcion;
							$data = 1;
						}

					}

				}

			} else {

				if ($row = $query->fetch_array(MYSQLI_ASSOC)) {
					$_SESSION['id_usuario'] = $row['id_usuario'];
					$_SESSION['usuario'] = $usuario;
					$_SESSION['nombre'] = $row['nombre'];
					$_SESSION['apellido'] = $row['apellido'];
					$_SESSION['id_cargo'] = $row['id_cargo'];
					$_SESSION['cargo'] = $row['cargo'];
					$_SESSION['codigoInscripcion'] = null;
					$data = 1;
				}

			}

			
		}else{
			$_SESSION['usuario'] = null;
			$data = 3;
		}

	} else {
		$_SESSION['usuario'] = null;
		$data = 2;
	}

	print json_encode($data);
?>