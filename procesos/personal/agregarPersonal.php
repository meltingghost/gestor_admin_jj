<?php 

	session_start();
	require_once "../database/conexion.php";

	$tipoPersonal = $_POST['tipoPersonal'];
	$codigoPersonal = $_POST['codigoPersonal'];
	$trasladoPersonal = $_POST['trasladoPersonal'];
	$fechaPersonal = explode("-", $_POST['fechaPersonal']);
	$fechaPersonal = $fechaPersonal[2] . "-" . $fechaPersonal[1] . "-" . $fechaPersonal[0];
	$nombreCompletoPersonal = $_POST['nombreCompletoPersonal'];
	$cedulaPersonal = $_POST['cedulaPersonal'];
	$fechaNacimientoPersonal = explode("-", $_POST['fechaNacimientoPersonal']);
	$fechaNacimientoPersonal = $fechaNacimientoPersonal[2] . "-" . $fechaNacimientoPersonal[1] . "-" . $fechaNacimientoPersonal[0];
	$sexoPersonal = $_POST['sexoPersonal'];
	$grupoSanguineoPersonal = $_POST['grupoSanguineoPersonal'];
	$factorRhPersonal = $_POST['factorRhPersonal'];
	$nivelInstrucionPersonal = $_POST['nivelInstrucionPersonal'];
	$especialidadPersonal = $_POST['especialidadPersonal'];
	$egresadoPersonal = $_POST['egresadoPersonal'];
	$preGradoPersonal = $_POST['preGradoPersonal'];
	$postGradoPersonal = $_POST['postGradoPersonal'];
	$condicionMedicaPersonal = $_POST['condicionMedicaPersonal'];
	$direccionPersonal = $_POST['direccionPersonal'];
	$codigoTelPersonal = $_POST['codigoTelPersonal'];
	$telefonoPersonal = $_POST['telefonoPersonal'];
	$codigoTel2Personal = $_POST['codigoTel2Personal'];
	$telefono2Personal = $_POST['telefono2Personal'];
	$codigoTelOpcionalPersonal = $_POST['codigoTelOpcionalPersonal'];
	$telefonoOpcionalPersonal = $_POST['telefonoOpcionalPersonal'];
	$correoPersonal = $_POST['correoPersonal'];
	$cuentaNominaPersonal = $_POST['cuentaNominaPersonal'];
	$tipoCuentaPersonal = $_POST['tipoCuentaPersonal'];
	$funcionPersonal = $_POST['funcionPersonal'];
	$especialistaPersonal = $_POST['especialistaPersonal'];
	$fechaIngresoPersonal = explode("-", $_POST['fechaIngresoPersonal']);
	$fechaIngresoPersonal = $fechaIngresoPersonal[2] . "-" . $fechaIngresoPersonal[1] . "-" . $fechaIngresoPersonal[0];
	$observacionPersonal = $_POST['observacionPersonal'];
	$codigoVoucherPersonal = $_POST['codigoVoucherPersonal'];
	$cargoVoucherPersonal = $_POST['cargoVoucherPersonal'];
	$adscritoPersonal = $_POST['adscritoPersonal'];
	$codigoIPersonal = $_POST['codigoIPersonal'];
	$codigoBPersonal = $_POST['codigoBPersonal'];
	$institucionPersonal = $_POST['institucionPersonal'];
	$codigoDependenciaPersonal = $_POST['codigoDependenciaPersonal'];
	$codigoDeaPersonal = $_POST['codigoDeaPersonal'];
	$copiaCIPersonal = $_POST['copiaCIPersonal'];
	$copiaCredencialPersonal = $_POST['copiaCredencialPersonal'];
	$constanciaTrabajoPersonal = $_POST['constanciaTrabajoPersonal'];
	$reciboPagoPersonal = $_POST['reciboPagoPersonal'];
	$curriculoPersonal = $_POST['curriculoPersonal'];

	$query = mysqli_query($conectar, "SELECT * FROM personal_p1 WHERE cedulaPersonal = '$cedulaPersonal'");
	$nr = mysqli_num_rows($query);

	if ($nr == 1) {
		$data = 2;
	} else {

		if ($funcionPersonal == 1) {

			$query2 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 1");
			$nr2 = mysqli_num_rows($query2);

			if ($nr2 == 1) {
				$data = 3;
			} else {

				$sql = "INSERT INTO personal_p1 VALUES(NULL, '$tipoPersonal', '$codigoPersonal', '$trasladoPersonal', '$fechaPersonal', '$nombreCompletoPersonal', '$cedulaPersonal', '$fechaNacimientoPersonal', '$sexoPersonal', '$grupoSanguineoPersonal', '$factorRhPersonal', '$nivelInstrucionPersonal', '$especialidadPersonal', '$egresadoPersonal', '$preGradoPersonal', '$postGradoPersonal', '$condicionMedicaPersonal', '$direccionPersonal', '$codigoTelPersonal', '$telefonoPersonal', '$codigoTel2Personal', '$telefono2Personal', '$codigoTelOpcionalPersonal', '$telefonoOpcionalPersonal', '$correoPersonal', '$cuentaNominaPersonal', '$tipoCuentaPersonal')";
				$ejecutar = mysqli_query($conectar,$sql);
				$idPersonal = mysqli_insert_id($conectar);

				if($ejecutar){

					$sql2 = "INSERT INTO personal_p2 VALUES('$idPersonal', '$funcionPersonal', '$especialistaPersonal', '$fechaIngresoPersonal', '$observacionPersonal', '$codigoVoucherPersonal', '$cargoVoucherPersonal', '$adscritoPersonal', '$codigoIPersonal', '$codigoBPersonal', '$institucionPersonal', '$codigoDependenciaPersonal', '$codigoDeaPersonal', '$copiaCIPersonal', '$copiaCredencialPersonal', '$constanciaTrabajoPersonal', '$reciboPagoPersonal', '$curriculoPersonal', NULL)";
					$ejecutar2 = mysqli_query($conectar,$sql2);

					if ($ejecutar2) {
						$data = 1;
					} else {
						$data = 6;
					}

				}else{
					$data = 6;
				}

			}

		} else if ($funcionPersonal == 2) {

			$query3 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 2");
			$nr3 = mysqli_num_rows($query3);

			if ($nr3 == 1) {
				$data = 4;
			} else {

				$sql = "INSERT INTO personal_p1 VALUES(NULL, '$tipoPersonal', '$codigoPersonal', '$trasladoPersonal', '$fechaPersonal', '$nombreCompletoPersonal', '$cedulaPersonal', '$fechaNacimientoPersonal', '$sexoPersonal', '$grupoSanguineoPersonal', '$factorRhPersonal', '$nivelInstrucionPersonal', '$especialidadPersonal', '$egresadoPersonal', '$preGradoPersonal', '$postGradoPersonal', '$condicionMedicaPersonal', '$direccionPersonal', '$codigoTelPersonal', '$telefonoPersonal', '$codigoTel2Personal', '$telefono2Personal', '$codigoTelOpcionalPersonal', '$telefonoOpcionalPersonal', '$correoPersonal', '$cuentaNominaPersonal', '$tipoCuentaPersonal')";
				$ejecutar = mysqli_query($conectar,$sql);
				$idPersonal = mysqli_insert_id($conectar);

				if($ejecutar){

					$sql2 = "INSERT INTO personal_p2 VALUES('$idPersonal', '$funcionPersonal', '$especialistaPersonal', '$fechaIngresoPersonal', '$observacionPersonal', '$codigoVoucherPersonal', '$cargoVoucherPersonal', '$adscritoPersonal', '$codigoIPersonal', '$codigoBPersonal', '$institucionPersonal', '$codigoDependenciaPersonal', '$codigoDeaPersonal', '$copiaCIPersonal', '$copiaCredencialPersonal', '$constanciaTrabajoPersonal', '$reciboPagoPersonal', '$curriculoPersonal', NULL)";
					$ejecutar2 = mysqli_query($conectar,$sql2);

					if ($ejecutar2) {
						$data = 1;
					} else {
						$data = 6;
					}

				}else{
					$data = 6;
				}

			}

		} else if ($funcionPersonal == 3) {

			$query4 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 3");
			$nr4 = mysqli_num_rows($query4);

			if ($nr4 == 1) {
				$data = 5;
			} else {

				$sql = "INSERT INTO personal_p1 VALUES(NULL, '$tipoPersonal', '$codigoPersonal', '$trasladoPersonal', '$fechaPersonal', '$nombreCompletoPersonal', '$cedulaPersonal', '$fechaNacimientoPersonal', '$sexoPersonal', '$grupoSanguineoPersonal', '$factorRhPersonal', '$nivelInstrucionPersonal', '$especialidadPersonal', '$egresadoPersonal', '$preGradoPersonal', '$postGradoPersonal', '$condicionMedicaPersonal', '$direccionPersonal', '$codigoTelPersonal', '$telefonoPersonal', '$codigoTel2Personal', '$telefono2Personal', '$codigoTelOpcionalPersonal', '$telefonoOpcionalPersonal', '$correoPersonal', '$cuentaNominaPersonal', '$tipoCuentaPersonal')";
				$ejecutar = mysqli_query($conectar,$sql);
				$idPersonal = mysqli_insert_id($conectar);

				if($ejecutar){

					$sql2 = "INSERT INTO personal_p2 VALUES('$idPersonal', '$funcionPersonal', '$especialistaPersonal', '$fechaIngresoPersonal', '$observacionPersonal', '$codigoVoucherPersonal', '$cargoVoucherPersonal', '$adscritoPersonal', '$codigoIPersonal', '$codigoBPersonal', '$institucionPersonal', '$codigoDependenciaPersonal', '$codigoDeaPersonal', '$copiaCIPersonal', '$copiaCredencialPersonal', '$constanciaTrabajoPersonal', '$reciboPagoPersonal', '$curriculoPersonal', NULL)";
					$ejecutar2 = mysqli_query($conectar,$sql2);

					if ($ejecutar2) {
						$data = 1;
					} else {
						$data = 6;
					}

				}else{
					$data = 6;
				}

			}

		} else {

			$sql = "INSERT INTO personal_p1 VALUES(NULL, '$tipoPersonal', '$codigoPersonal', '$trasladoPersonal', '$fechaPersonal', '$nombreCompletoPersonal', '$cedulaPersonal', '$fechaNacimientoPersonal', '$sexoPersonal', '$grupoSanguineoPersonal', '$factorRhPersonal', '$nivelInstrucionPersonal', '$especialidadPersonal', '$egresadoPersonal', '$preGradoPersonal', '$postGradoPersonal', '$condicionMedicaPersonal', '$direccionPersonal', '$codigoTelPersonal', '$telefonoPersonal', '$codigoTel2Personal', '$telefono2Personal', '$codigoTelOpcionalPersonal', '$telefonoOpcionalPersonal', '$correoPersonal', '$cuentaNominaPersonal', '$tipoCuentaPersonal')";
			$ejecutar = mysqli_query($conectar,$sql);
			$idPersonal = mysqli_insert_id($conectar);

			if($ejecutar){

				$sql2 = "INSERT INTO personal_p2 VALUES('$idPersonal', '$funcionPersonal', '$especialistaPersonal', '$fechaIngresoPersonal', '$observacionPersonal', '$codigoVoucherPersonal', '$cargoVoucherPersonal', '$adscritoPersonal', '$codigoIPersonal', '$codigoBPersonal', '$institucionPersonal', '$codigoDependenciaPersonal', '$codigoDeaPersonal', '$copiaCIPersonal', '$copiaCredencialPersonal', '$constanciaTrabajoPersonal', '$reciboPagoPersonal', '$curriculoPersonal', NULL)";
				$ejecutar2 = mysqli_query($conectar,$sql2);

				if ($ejecutar2) {
					$data = 1;
				} else {
					$data = 6;
				}

			}else{
				$data = 6;
			}

		}

	}

	print(json_encode($data));

?>