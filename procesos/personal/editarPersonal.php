<?php 

	session_start();
	require_once "../database/conexion.php";
	$idPersonal = (isset($_POST['idPersonal'])) ? $_POST['idPersonal'] : "";

	$sql = "SELECT p1.id_personal, p1.tipoPersonal, p1.codigoPersonal, p1.trasladoPersonal, DATE_FORMAT(p1.fechaPersonal, '%d-%m-%Y') AS fechaPersonal, p1.nombreCompletoPersonal, p1.cedulaPersonal, DATE_FORMAT(p1.fechaNacimientoPersonal, '%d-%m-%Y') AS fechaNacimientoPersonal, p1.sexoPersonal, p1.grupoSanguineoPersonal, p1.factorRhPersonal, p1.nivelInstrucionPersonal, p1.especialidadPersonal, p1.egresadoPersonal, p1.preGradoPersonal, p1.postGradoPersonal, p1.condicionMedicaPersonal, p1.direccionPersonal, p1.codigoTelPersonal, p1.telefonoPersonal, p1.codigoTel2Personal, p1.telefono2Personal, p1.codigoTelOpcionalPersonal, p1.telefonoOpcionalPersonal, p1.correoPersonal, p1.cuentaNominaPersonal, p1.tipoCuentaPersonal, p2.id_funcionPersonal, p2.especialistaPersonal, DATE_FORMAT(p2.fechaIngresoPersonal, '%d-%m-%Y') AS fechaIngresoPersonal, p2.observacionPersonal, p2.codigoVoucherPersonal, p2.cargoVoucherPersonal, p2.adscritoPersonal, p2.codigoIPersonal, p2.codigoBPersonal, p2.institucionPersonal, p2.codigoDependenciaPersonal, p2.codigoDeaPersonal, p2.copiaCIPersonal, p2.copiaCredencialPersonal, p2.constanciaTrabajoPersonal, p2.reciboPagoPersonal, p2.curriculoPersonal FROM personal_p1 AS p1 INNER JOIN personal_p2 AS p2 ON p1.id_personal = p2.id_personal INNER JOIN cargos ON p2.id_funcionPersonal = cargos.id_cargo WHERE p1.id_personal = '$idPersonal'";

	$result = $conectar->query($sql);

	$data = $result->fetch_array(MYSQLI_ASSOC);
	print(json_encode($data));

?>