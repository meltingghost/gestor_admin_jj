<?php 

	require_once "../database/conexion.php";

	$idPersonal = (isset($_POST['idPersonalEdit'])) ? $_POST['idPersonalEdit'] : "";
	$tipoPersonal = (isset($_POST['tipoPersonalEdit'])) ? $_POST['tipoPersonalEdit'] : "";
	$codigoPersonal = (isset($_POST['codigoPersonalEdit'])) ? $_POST['codigoPersonalEdit'] : "";
	$trasladoPersonal = (isset($_POST['trasladoPersonalEdit'])) ? $_POST['trasladoPersonalEdit'] : "";

	$nombreCompletoPersonal = (isset($_POST['nombreCompletoPersonalEdit'])) ? $_POST['nombreCompletoPersonalEdit'] : "";
	$sexoPersonal = (isset($_POST['sexoPersonalEdit'])) ? $_POST['sexoPersonalEdit'] : "";
	$nivelInstrucionPersonal = (isset($_POST['nivelInstrucionPersonalEdit'])) ? $_POST['nivelInstrucionPersonalEdit'] : "";
	$especialidadPersonal = (isset($_POST['especialidadPersonalEdit'])) ? $_POST['especialidadPersonalEdit'] : "";
	$egresadoPersonal = (isset($_POST['egresadoPersonalEdit'])) ? $_POST['egresadoPersonalEdit'] : "";
	$preGradoPersonal = (isset($_POST['preGradoPersonalEdit'])) ? $_POST['preGradoPersonalEdit'] : "";
	$postGradoPersonal = (isset($_POST['postGradoPersonalEdit'])) ? $_POST['postGradoPersonalEdit'] : "";
	$condicionMedicaPersonal = (isset($_POST['condicionMedicaPersonalEdit'])) ? $_POST['condicionMedicaPersonalEdit'] : "";
	$direccionPersonal = (isset($_POST['direccionPersonalEdit'])) ? $_POST['direccionPersonalEdit'] : "";
	$codigoTelPersonal = (isset($_POST['codigoTelPersonalEdit'])) ? $_POST['codigoTelPersonalEdit'] : "";
	$telefonoPersonal = (isset($_POST['telefonoPersonalEdit'])) ? $_POST['telefonoPersonalEdit'] : "";
	$codigoTel2Personal = (isset($_POST['codigoTel2PersonalEdit'])) ? $_POST['codigoTel2PersonalEdit'] : "";
	$telefono2Personal = (isset($_POST['telefono2PersonalEdit'])) ? $_POST['telefono2PersonalEdit'] : "";
	$codigoTelOpcionalPersonal = (isset($_POST['codigoTelOpcionalPersonalEdit'])) ? $_POST['codigoTelOpcionalPersonalEdit'] : "";
	$telefonoOpcionalPersonal = (isset($_POST['telefonoOpcionalPersonalEdit'])) ? $_POST['telefonoOpcionalPersonalEdit'] : "";
	$correoPersonal = (isset($_POST['correoPersonalEdit'])) ? $_POST['correoPersonalEdit'] : "";
	$cuentaNominaPersonal = (isset($_POST['cuentaNominaPersonalEdit'])) ? $_POST['cuentaNominaPersonalEdit'] : "";
	$tipoCuentaPersonal = (isset($_POST['tipoCuentaPersonalEdit'])) ? $_POST['tipoCuentaPersonalEdit'] : "";

	$funcionPersonalOld = (isset($_POST['funcionPersonalOld'])) ? $_POST['funcionPersonalOld'] : "";
	$funcionPersonal = (isset($_POST['funcionPersonalEdit'])) ? $_POST['funcionPersonalEdit'] : "";
	$especialistaPersonal = (isset($_POST['especialistaPersonalEdit'])) ? $_POST['especialistaPersonalEdit'] : "";
	$observacionPersonal = (isset($_POST['observacionPersonalEdit'])) ? $_POST['observacionPersonalEdit'] : "";
	$codigoVoucherPersonal = (isset($_POST['codigoVoucherPersonalEdit'])) ? $_POST['codigoVoucherPersonalEdit'] : "";
	$cargoVoucherPersonal = (isset($_POST['cargoVoucherPersonalEdit'])) ? $_POST['cargoVoucherPersonalEdit'] : "";
	$adscritoPersonal = (isset($_POST['adscritoPersonalEdit'])) ? $_POST['adscritoPersonalEdit'] : "";
	$codigoIPersonal = (isset($_POST['codigoIPersonalEdit'])) ? $_POST['codigoIPersonalEdit'] : "";
	$codigoBPersonal = (isset($_POST['codigoBPersonalEdit'])) ? $_POST['codigoBPersonalEdit'] : "";

	$institucionPersonal = (isset($_POST['institucionPersonalEdit'])) ? $_POST['institucionPersonalEdit'] : "";
	$codigoDependenciaPersonal = (isset($_POST['codigoDependenciaPersonalEdit'])) ? $_POST['codigoDependenciaPersonalEdit'] : "";
	$codigoDeaPersonal = (isset($_POST['codigoDeaPersonalEdit'])) ? $_POST['codigoDeaPersonalEdit'] : "";
	
	$copiaCIPersonal = (isset($_POST['copiaCIPersonalEdit'])) ? $_POST['copiaCIPersonalEdit'] : "";
	$copiaCredencialPersonal = (isset($_POST['copiaCredencialPersonalEdit'])) ? $_POST['copiaCredencialPersonalEdit'] : "";
	$constanciaTrabajoPersonal = (isset($_POST['constanciaTrabajoPersonalEdit'])) ? $_POST['constanciaTrabajoPersonalEdit'] : "";
	$reciboPagoPersonal = (isset($_POST['reciboPagoPersonalEdit'])) ? $_POST['reciboPagoPersonalEdit'] : "";
	$curriculoPersonal = (isset($_POST['curriculoPersonalEdit'])) ? $_POST['curriculoPersonalEdit'] : "";

	if ($funcionPersonal != $funcionPersonalOld) {
		
		if ($funcionPersonal == 1) {

			$query2 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 1");
			$nr2 = mysqli_num_rows($query2);

			if ($nr2 == 1) {
				$data = 3;
			} else {

				$sql = "UPDATE personal_p1 SET tipoPersonal = '$tipoPersonal', codigoPersonal = '$codigoPersonal', trasladoPersonal = '$trasladoPersonal', nombreCompletoPersonal = '$nombreCompletoPersonal', sexoPersonal = '$sexoPersonal', nivelInstrucionPersonal = '$nivelInstrucionPersonal', especialidadPersonal = '$especialidadPersonal', egresadoPersonal = '$egresadoPersonal', preGradoPersonal = '$preGradoPersonal', postGradoPersonal = '$postGradoPersonal', condicionMedicaPersonal = '$condicionMedicaPersonal', direccionPersonal = '$direccionPersonal', codigoTelPersonal = '$codigoTelPersonal', telefonoPersonal = '$telefonoPersonal', codigoTel2Personal = '$codigoTel2Personal', telefono2Personal = '$telefono2Personal', codigoTelOpcionalPersonal = '$codigoTelOpcionalPersonal', telefonoOpcionalPersonal = '$telefonoOpcionalPersonal', correoPersonal = '$correoPersonal', cuentaNominaPersonal = '$cuentaNominaPersonal', tipoCuentaPersonal = '$tipoCuentaPersonal' WHERE id_personal = '$idPersonal'";
				$resultado = $conectar->query($sql);

				if($resultado){

					$sql2 = "UPDATE personal_p2 SET id_funcionPersonal = '$funcionPersonal', especialistaPersonal = '$especialistaPersonal', observacionPersonal = '$observacionPersonal', codigoVoucherPersonal = '$codigoVoucherPersonal', cargoVoucherPersonal = '$cargoVoucherPersonal', adscritoPersonal = '$adscritoPersonal', codigoIPersonal = '$codigoIPersonal', codigoBPersonal = '$codigoBPersonal', institucionPersonal = '$institucionPersonal', codigoDependenciaPersonal = '$codigoDependenciaPersonal', codigoDeaPersonal = '$codigoDeaPersonal', copiaCIPersonal = '$copiaCIPersonal', copiaCredencialPersonal = '$copiaCredencialPersonal', constanciaTrabajoPersonal = '$constanciaTrabajoPersonal', reciboPagoPersonal = '$reciboPagoPersonal', curriculoPersonal = '$curriculoPersonal' WHERE id_personal = '$idPersonal'";
					$resultado2 = $conectar->query($sql2);

					if ($resultado2) {
						$data = 1;
					} else {
						$data = 2;
					}

				}else{
					$data = 2;
				}

			}

		} else if ($funcionPersonal == 2) {

			$query3 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 2");
			$nr3 = mysqli_num_rows($query3);

			if ($nr3 == 1) {
				$data = 4;
			} else {

				$sql = "UPDATE personal_p1 SET tipoPersonal = '$tipoPersonal', codigoPersonal = '$codigoPersonal', trasladoPersonal = '$trasladoPersonal', nombreCompletoPersonal = '$nombreCompletoPersonal', sexoPersonal = '$sexoPersonal', nivelInstrucionPersonal = '$nivelInstrucionPersonal', especialidadPersonal = '$especialidadPersonal', egresadoPersonal = '$egresadoPersonal', preGradoPersonal = '$preGradoPersonal', postGradoPersonal = '$postGradoPersonal', condicionMedicaPersonal = '$condicionMedicaPersonal', direccionPersonal = '$direccionPersonal', codigoTelPersonal = '$codigoTelPersonal', telefonoPersonal = '$telefonoPersonal', codigoTel2Personal = '$codigoTel2Personal', telefono2Personal = '$telefono2Personal', codigoTelOpcionalPersonal = '$codigoTelOpcionalPersonal', telefonoOpcionalPersonal = '$telefonoOpcionalPersonal', correoPersonal = '$correoPersonal', cuentaNominaPersonal = '$cuentaNominaPersonal', tipoCuentaPersonal = '$tipoCuentaPersonal' WHERE id_personal = '$idPersonal'";
				$resultado = $conectar->query($sql);

				if($resultado){

					$sql2 = "UPDATE personal_p2 SET id_funcionPersonal = '$funcionPersonal', especialistaPersonal = '$especialistaPersonal', observacionPersonal = '$observacionPersonal', codigoVoucherPersonal = '$codigoVoucherPersonal', cargoVoucherPersonal = '$cargoVoucherPersonal', adscritoPersonal = '$adscritoPersonal', codigoIPersonal = '$codigoIPersonal', codigoBPersonal = '$codigoBPersonal', institucionPersonal = '$institucionPersonal', codigoDependenciaPersonal = '$codigoDependenciaPersonal', codigoDeaPersonal = '$codigoDeaPersonal', copiaCIPersonal = '$copiaCIPersonal', copiaCredencialPersonal = '$copiaCredencialPersonal', constanciaTrabajoPersonal = '$constanciaTrabajoPersonal', reciboPagoPersonal = '$reciboPagoPersonal', curriculoPersonal = '$curriculoPersonal' WHERE id_personal = '$idPersonal'";
					$resultado2 = $conectar->query($sql2);

					if ($resultado2) {
						$data = 1;
					} else {
						$data = 2;
					}

				}else{
					$data = 2;
				}

			}

		} else if ($funcionPersonal == 3) {

			$query4 = mysqli_query($conectar, "SELECT * FROM personal_p2 WHERE id_funcionPersonal = 3");
			$nr4 = mysqli_num_rows($query4);

			if ($nr4 == 1) {
				$data = 5;
			} else {

				$sql = "UPDATE personal_p1 SET tipoPersonal = '$tipoPersonal', codigoPersonal = '$codigoPersonal', trasladoPersonal = '$trasladoPersonal', nombreCompletoPersonal = '$nombreCompletoPersonal', sexoPersonal = '$sexoPersonal', nivelInstrucionPersonal = '$nivelInstrucionPersonal', especialidadPersonal = '$especialidadPersonal', egresadoPersonal = '$egresadoPersonal', preGradoPersonal = '$preGradoPersonal', postGradoPersonal = '$postGradoPersonal', condicionMedicaPersonal = '$condicionMedicaPersonal', direccionPersonal = '$direccionPersonal', codigoTelPersonal = '$codigoTelPersonal', telefonoPersonal = '$telefonoPersonal', codigoTel2Personal = '$codigoTel2Personal', telefono2Personal = '$telefono2Personal', codigoTelOpcionalPersonal = '$codigoTelOpcionalPersonal', telefonoOpcionalPersonal = '$telefonoOpcionalPersonal', correoPersonal = '$correoPersonal', cuentaNominaPersonal = '$cuentaNominaPersonal', tipoCuentaPersonal = '$tipoCuentaPersonal' WHERE id_personal = '$idPersonal'";
				$resultado = $conectar->query($sql);

				if($resultado){

					$sql2 = "UPDATE personal_p2 SET id_funcionPersonal = '$funcionPersonal', especialistaPersonal = '$especialistaPersonal', observacionPersonal = '$observacionPersonal', codigoVoucherPersonal = '$codigoVoucherPersonal', cargoVoucherPersonal = '$cargoVoucherPersonal', adscritoPersonal = '$adscritoPersonal', codigoIPersonal = '$codigoIPersonal', codigoBPersonal = '$codigoBPersonal', institucionPersonal = '$institucionPersonal', codigoDependenciaPersonal = '$codigoDependenciaPersonal', codigoDeaPersonal = '$codigoDeaPersonal', copiaCIPersonal = '$copiaCIPersonal', copiaCredencialPersonal = '$copiaCredencialPersonal', constanciaTrabajoPersonal = '$constanciaTrabajoPersonal', reciboPagoPersonal = '$reciboPagoPersonal', curriculoPersonal = '$curriculoPersonal' WHERE id_personal = '$idPersonal'";
					$resultado2 = $conectar->query($sql2);

					if ($resultado2) {
						$data = 1;
					} else {
						$data = 2;
					}

				}else{
					$data = 2;
				}

			}

		} else {

			$sql = "UPDATE personal_p1 SET tipoPersonal = '$tipoPersonal', codigoPersonal = '$codigoPersonal', trasladoPersonal = '$trasladoPersonal', nombreCompletoPersonal = '$nombreCompletoPersonal', sexoPersonal = '$sexoPersonal', nivelInstrucionPersonal = '$nivelInstrucionPersonal', especialidadPersonal = '$especialidadPersonal', egresadoPersonal = '$egresadoPersonal', preGradoPersonal = '$preGradoPersonal', postGradoPersonal = '$postGradoPersonal', condicionMedicaPersonal = '$condicionMedicaPersonal', direccionPersonal = '$direccionPersonal', codigoTelPersonal = '$codigoTelPersonal', telefonoPersonal = '$telefonoPersonal', codigoTel2Personal = '$codigoTel2Personal', telefono2Personal = '$telefono2Personal', codigoTelOpcionalPersonal = '$codigoTelOpcionalPersonal', telefonoOpcionalPersonal = '$telefonoOpcionalPersonal', correoPersonal = '$correoPersonal', cuentaNominaPersonal = '$cuentaNominaPersonal', tipoCuentaPersonal = '$tipoCuentaPersonal' WHERE id_personal = '$idPersonal'";
			$resultado = $conectar->query($sql);

			if($resultado){

				$sql2 = "UPDATE personal_p2 SET id_funcionPersonal = '$funcionPersonal', especialistaPersonal = '$especialistaPersonal', observacionPersonal = '$observacionPersonal', codigoVoucherPersonal = '$codigoVoucherPersonal', cargoVoucherPersonal = '$cargoVoucherPersonal', adscritoPersonal = '$adscritoPersonal', codigoIPersonal = '$codigoIPersonal', codigoBPersonal = '$codigoBPersonal', institucionPersonal = '$institucionPersonal', codigoDependenciaPersonal = '$codigoDependenciaPersonal', codigoDeaPersonal = '$codigoDeaPersonal', copiaCIPersonal = '$copiaCIPersonal', copiaCredencialPersonal = '$copiaCredencialPersonal', constanciaTrabajoPersonal = '$constanciaTrabajoPersonal', reciboPagoPersonal = '$reciboPagoPersonal', curriculoPersonal = '$curriculoPersonal' WHERE id_personal = '$idPersonal'";
				$resultado2 = $conectar->query($sql2);

				if ($resultado2) {
					$data = 1;
				} else {
					$data = 2;
				}

			}else{
				$data = 2;
			}

		}

	} else {

		$sql = "UPDATE personal_p1 SET tipoPersonal = '$tipoPersonal', codigoPersonal = '$codigoPersonal', trasladoPersonal = '$trasladoPersonal', nombreCompletoPersonal = '$nombreCompletoPersonal', sexoPersonal = '$sexoPersonal', nivelInstrucionPersonal = '$nivelInstrucionPersonal', especialidadPersonal = '$especialidadPersonal', egresadoPersonal = '$egresadoPersonal', preGradoPersonal = '$preGradoPersonal', postGradoPersonal = '$postGradoPersonal', condicionMedicaPersonal = '$condicionMedicaPersonal', direccionPersonal = '$direccionPersonal', codigoTelPersonal = '$codigoTelPersonal', telefonoPersonal = '$telefonoPersonal', codigoTel2Personal = '$codigoTel2Personal', telefono2Personal = '$telefono2Personal', codigoTelOpcionalPersonal = '$codigoTelOpcionalPersonal', telefonoOpcionalPersonal = '$telefonoOpcionalPersonal', correoPersonal = '$correoPersonal', cuentaNominaPersonal = '$cuentaNominaPersonal', tipoCuentaPersonal = '$tipoCuentaPersonal' WHERE id_personal = '$idPersonal'";
		$resultado = $conectar->query($sql);

		if($resultado){

			$sql2 = "UPDATE personal_p2 SET id_funcionPersonal = '$funcionPersonal', especialistaPersonal = '$especialistaPersonal', observacionPersonal = '$observacionPersonal', codigoVoucherPersonal = '$codigoVoucherPersonal', cargoVoucherPersonal = '$cargoVoucherPersonal', adscritoPersonal = '$adscritoPersonal', codigoIPersonal = '$codigoIPersonal', codigoBPersonal = '$codigoBPersonal', institucionPersonal = '$institucionPersonal', codigoDependenciaPersonal = '$codigoDependenciaPersonal', codigoDeaPersonal = '$codigoDeaPersonal', copiaCIPersonal = '$copiaCIPersonal', copiaCredencialPersonal = '$copiaCredencialPersonal', constanciaTrabajoPersonal = '$constanciaTrabajoPersonal', reciboPagoPersonal = '$reciboPagoPersonal', curriculoPersonal = '$curriculoPersonal' WHERE id_personal = '$idPersonal'";
			$resultado2 = $conectar->query($sql2);

			if ($resultado2) {
				$data = 1;
			} else {
				$data = 2;
			}

		}else{
			$data = 2;
		}

	}

	print(json_encode($data));

?>