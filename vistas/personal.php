<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container">

	 		<h1 class="display-4"><span class="fa-solid fa-person-chalkboard display-5"></span> Personal</h1><br>
	 		<div class="row">

			<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 2) { 
			 ?>

	 			<div class="col-sm-4">
	 				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarPersonal">
	 					<span class="fa-solid fa-user-plus"></span> Agregar Personal
	 				</span>
	 			</div>

	 		<?php 
	 			}
	 		?>

	 		</div><br>
	 		<b>A continuación se muestra un listado del personal registrado en la institución.</b>
	 		<hr>

	 		<div id="tablaPersonal"></div>

	 	</div>
	 </div>
 	
 <?php 

 	include "personal/modalAgregarPersonal.php";
 	include "personal/modalEditarPersonal.php";
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

  ?>

<script src="../js/calendario.js"></script>
<script src="../js/multiform.js"></script>
<script src="../js/personal.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		// MODAL  AGREGAR PERSONAL
		$('#tablaPersonal').load('personal/tablaPersonal.php');
		$('#cargarCodigoTelPersonal').load('codigosTel/selectCodigoTelPersonal.php');
		$('#cargarCodigoTel2Personal').load('codigosTel/selectCodigoTel2Personal.php');
		$('#cargarCodigoTelOpcionalPersonal').load('codigosTel/selectCodigoTelOpcionalPersonal.php');
		$('#cargarFuncionPersonal').load('personal/selectFuncionPersonal.php');

		// MODAL EDITAR PERSONAL
		$('#cargarCodigoTelPersonalEdit').load('codigosTel/selectCodigoTelPersonalEdit.php');
		$('#cargarCodigoTel2PersonalEdit').load('codigosTel/selectCodigoTel2PersonalEdit.php');
		$('#cargarCodigoTelOpcionalPersonalEdit').load('codigosTel/selectCodigoTelOpcionalPersonalEdit.php');
		$('#cargarFuncionPersonalEdit').load('personal/selectFuncionPersonalEdit.php');

	});

</script>

<script type="text/javascript">
	
	// VALIDACIÓN DE CAMPOS modalAgregarPersonal
	// PARTE i
	function validarTipoPersonal() {
		if (formAgregarPersonal.tipoPersonal.value == 0 || formAgregarPersonal.tipoPersonal.value == "") {
			validarSeleccionAgregarPersonal(formAgregarPersonal.tipoPersonal, 'tipoPersonal', '');
		}else {
			validarSeleccionAgregarPersonal(formAgregarPersonal.tipoPersonal, 'tipoPersonal', '');
		}
	}

	function validarCodigoPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.codigoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.codigoPersonal, 'codigoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.codigoPersonal, 'codigoPersonal', '');
		}
	}

	// PARTE II
	function validarNombreCompletoPersonal() {
		if (expresionesAgregarPersonal.texto.test(formAgregarPersonal.nombreCompletoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.texto, formAgregarPersonal.nombreCompletoPersonal, 'nombreCompletoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.texto, formAgregarPersonal.nombreCompletoPersonal, 'nombreCompletoPersonal', '');
		}
	}

	function validarCedulaPersonal() {
		if (expresionesAgregarPersonal.cedula.test(formAgregarPersonal.cedulaPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.cedula, formAgregarPersonal.cedulaPersonal, 'cedulaPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.cedula, formAgregarPersonal.cedulaPersonal, 'cedulaPersonal', '');
		}
	}

	function validarFechaNacimientoPersonal() {
		if (formAgregarPersonal.fechaNacimientoPersonal.value == 0 || formAgregarPersonal.fechaNacimientoPersonal.value == "") {
			validarSeleccionAgregarPersonal(formAgregarPersonal.fechaNacimientoPersonal, 'fechaNacimientoPersonal', '');
		}else {
			validarSeleccionAgregarPersonal(formAgregarPersonal.fechaNacimientoPersonal, 'fechaNacimientoPersonal', '');
		}
	}

	function validarSexoPersonal() {
		if (formAgregarPersonal.sexoPersonal.value == 0 || formAgregarPersonal.sexoPersonal.value == "") {
			validarSeleccionAgregarPersonal(formAgregarPersonal.sexoPersonal, 'sexoPersonal', '');
		}else {
			validarSeleccionAgregarPersonal(formAgregarPersonal.sexoPersonal, 'sexoPersonal', '');
		}
	}

	function validarNivelInstrucionPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.nivelInstrucionPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.nivelInstrucionPersonal, 'nivelInstrucionPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.nivelInstrucionPersonal, 'nivelInstrucionPersonal', '');
		}
	}

	function validarEgresadoPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.egresadoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.egresadoPersonal, 'egresadoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.egresadoPersonal, 'egresadoPersonal', '');
		}
	}

	function validarDireccionPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.direccionPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.direccionPersonal, 'direccionPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.direccionPersonal, 'direccionPersonal', '');
		}
	}

	function validarTelefonoPersonal() {
		if (expresionesAgregarPersonal.telefonoRequired.test(formAgregarPersonal.telefonoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefonoRequired, formAgregarPersonal.telefonoPersonal, 'telefonoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefonoRequired, formAgregarPersonal.telefonoPersonal, 'telefonoPersonal', '');
		}
	}

	function validarTelefono2Personal() {
		if (expresionesAgregarPersonal.telefono.test(formAgregarPersonal.telefono2Personal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefono, formAgregarPersonal.telefono2Personal, 'telefono2Personal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefono, formAgregarPersonal.telefono2Personal, 'telefono2Personal', '');
		}
	}

	function validarTelefonoOpcionalPersonal() {
		if (expresionesAgregarPersonal.telefono.test(formAgregarPersonal.telefonoOpcionalPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefono, formAgregarPersonal.telefonoOpcionalPersonal, 'telefonoOpcionalPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.telefono, formAgregarPersonal.telefonoOpcionalPersonal, 'telefonoOpcionalPersonal', '');
		}
	}

	function validarCorreoPersonal() {
		if (expresionesAgregarPersonal.correo.test(formAgregarPersonal.correoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.correo, formAgregarPersonal.correoPersonal, 'correoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.correo, formAgregarPersonal.correoPersonal, 'correoPersonal', '');
		}
	}

	function validarCuentaNominaPersonal() {
		if (expresionesAgregarPersonal.cuenta.test(formAgregarPersonal.cuentaNominaPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.cuenta, formAgregarPersonal.cuentaNominaPersonal, 'cuentaNominaPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.cuenta, formAgregarPersonal.cuentaNominaPersonal, 'cuentaNominaPersonal', '');
		}
	}

	function validarFuncionPersonal() {
		if (formAgregarPersonal.funcionPersonal.value == 0 || formAgregarPersonal.funcionPersonal.value == "") {
			validarSeleccionAgregarPersonal(formAgregarPersonal.funcionPersonal, 'funcionPersonal', 'cargarFuncionPersonal');
		}else {
			validarSeleccionAgregarPersonal(formAgregarPersonal.funcionPersonal, 'funcionPersonal', 'cargarFuncionPersonal');
		}
	}

	function validarFechaIngresoPersonal() {
		if (formAgregarPersonal.fechaIngresoPersonal.value == 0 || formAgregarPersonal.fechaIngresoPersonal.value == "") {
			validarSeleccionAgregarPersonal(formAgregarPersonal.fechaIngresoPersonal, 'fechaIngresoPersonal', '');
		}else {
			validarSeleccionAgregarPersonal(formAgregarPersonal.fechaIngresoPersonal, 'fechaIngresoPersonal', '');
		}
	}

	function validarCodigoVoucherPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.codigoVoucherPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.codigoVoucherPersonal, 'codigoVoucherPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.codigoVoucherPersonal, 'codigoVoucherPersonal', '');
		}
	}

	function validarCargoVoucherPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.cargoVoucherPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.cargoVoucherPersonal, 'cargoVoucherPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.cargoVoucherPersonal, 'cargoVoucherPersonal', '');
		}
	}

	function validarAdscritoPersonal() {
		if (expresionesAgregarPersonal.varios.test(formAgregarPersonal.adscritoPersonal.value)) {
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.adscritoPersonal, 'adscritoPersonal', '');
		}else{
			validarCampoAgregarPersonal(expresionesAgregarPersonal.varios, formAgregarPersonal.adscritoPersonal, 'adscritoPersonal', '');
		}
	}

</script>