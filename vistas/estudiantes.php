<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];
	$codigoInscripcion = $_SESSION['codigoInscripcion'];
	require_once "../procesos/database/conexion.php";
	include_once "../procesos/estudiantes/consultarCodInsAct.php";

?>

<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	<div id="responsive" class="container">

		<h1 class="display-4"><span class="fa-solid fa-graduation-cap display-5"></span> Estudiantes</h1><br>
		<div class="row">

			<?php 
	 			if ($idCargoUser == 1 OR $idCargoUser == 3 OR $codigoInscripcion == $codInsAct) {
	 		?>

			<div class="col">
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEI">
					<span class="fa-solid fa-user-plus"></span> Agregar Estudiante Inicial
				</span>
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEB">
					<span class="fa-solid fa-user-plus"></span> Agregar Estudiante de Basica
				</span>
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFormalizarInscripcionE">
					<span class="fa-solid fa-clipboard-check"></span> Formalizar Inscripción
				</span>
			</div>

			<?php 
				}
			?>

		</div><br>
		<b>Te recordamos que las inscripciones son unicamente para los nuevos estudiantes, ya que los estudiantes regulares ya están inscritos y solo se debe formalizar su inscripción en el nuevo año escolar.</b>
		<hr>

		<div id="tablaEstudiantes"></div>

	</div>
</div>
 	
 <?php 

 	include 'estudiantes/modalAgregarEstudianteI.php';
 	include 'estudiantes/modalEditarEstudianteI.php';
 	include 'estudiantes/modalAgregarEstudianteB.php';
 	include 'estudiantes/modalEditarEstudianteB.php';
 	include 'estudiantes/modalFormalizarInscripcionE.php';
 	include 'estudiantes/modalInformacionEI.php';
 	include 'estudiantes/modalInformacionEB.php';
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

?>

<script src="../js/calendario.js"></script>
<script src="../js/multiform.js"></script>
<script src="../js/estudiantes.js"></script>
<script src="../js/ubicaciones.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

		$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
		$('#cargarEstadoNatalEI').load('ubicaciones/selectEstadoNatalEI.php');
		$('#cargarEstadoNatalEIEdit').load('ubicaciones/selectEstadoNatalEIEdit.php');
		$('#cargarCodigoTelCasaREI1').load('codigosTel/selectCodigoTelCasaREI1.php');
		$('#cargarCodigoTelCelREI1').load('codigosTel/selectCodigoTelCelREI1.php');
		$('#cargarCodigoTelCasaREI2').load('codigosTel/selectCodigoTelCasaREI2.php');
		$('#cargarCodigoTelCelREI2').load('codigosTel/selectCodigoTelCelREI2.php');
		$('#cargarCodigoTelCasaREI1Edit').load('codigosTel/selectCodigoTelCasaREI1Edit.php');
		$('#cargarCodigoTelCelREI1Edit').load('codigosTel/selectCodigoTelCelREI1Edit.php');
		$('#cargarCodigoTelCasaREI2Edit').load('codigosTel/selectCodigoTelCasaREI2Edit.php');
		$('#cargarCodigoTelCelREI2Edit').load('codigosTel/selectCodigoTelCelREI2Edit.php');

		// FUNCIONES PARA LA MODAL AGREGAR ESTUDIANTE INICIAL
		$('#fechaNacimientoEI').change(function() {
			var fechaNacimientoEI = document.getElementById('fechaNacimientoEI');

			$.ajax({
				url: '../procesos/estudiantes/calcularEdad.php',
				type: 'POST',
				dataType: 'json',
				data: 'fecha=' + fechaNacimientoEI.value,
				success:function(data){
					$('#edadAniosEI').val(data.anios);
					$('#edadMesesEI').val(data.meses);
				}
			});
			
		});

		mostrarMunicipioNatalEI();
		mostrarParroquiaNatalEI();

		$('#cargarEstadoNatalEI').change(function() {
			var estado = document.getElementById('estadoNatalEI').value;
			mostrarMunicipioNatalEI(estado);
		});

		$('#cargarMunicipioNatalEI').change(function() {
			var municipio = document.getElementById('municipioNatalEI').value;
			mostrarParroquiaNatalEI(municipio);
		});

		function mostrarParentescoREI2(parentescoREI1) {
			$.ajax({
				url: 'estudiantes/selectParentescoREI2.php',
				type: 'POST',
				dataType: 'json',
				data: 'parentescoREI1=' + parentescoREI1,
				success:function(cadena){
					$('#cargarParentescoREI2').html(cadena);
				}
			});
		}

		mostrarParentescoREI2();

		$('#parentescoREI1').change(function(){
			var parentescoREI1 = document.getElementById('parentescoREI1').value;
			mostrarParentescoREI2(parentescoREI1);
		});

		// FUNCIONES PARA LA MODAL EDITAR ESTUDIANTE INICIAL
		mostrarMunicipioNatalEIEdit();
		mostrarParroquiaNatalEIEdit();

		$('#cargarEstadoNatalEIEdit').change(function() {
			var estado = document.getElementById('estadoNatalEIEdit').value;
			mostrarMunicipioNatalEIEdit(estado);
		});

		$('#cargarMunicipioNatalEIEdit').change(function() {
			var municipio = document.getElementById('municipioNatalEIEdit').value;
			mostrarParroquiaNatalEIEdit(municipio);
		});

		function mostrarParentescoREI2Edit(parentescoREI1Edit) {
			$.ajax({
				url: 'estudiantes/selectParentescoREI2Edit.php',
				type: 'POST',
				dataType: 'json',
				data: 'parentescoREI1Edit=' + parentescoREI1Edit,
				success:function(cadena){
					$('#cargarParentescoREI2Edit').html(cadena);
				}
			});
		}

		mostrarParentescoREI2Edit();

		$('#parentescoREI1Edit').change(function(){
			var parentescoREI1Edit = document.getElementById('parentescoREI1Edit').value;
			mostrarParentescoREI2Edit(parentescoREI1Edit);
		});

	});

</script>

<script type="text/javascript">

	// VALIDACIÓN DE CAMPOS modalAgregarEstudianteI
	// PARTE i
	function validarApellidosEI() {
		if (expresionesAgregarEI.texto.test(formAgregarEI.apellidosEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.apellidosEI, 'apellidosEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.apellidosEI, 'apellidosEI', '');
		}
	}

	function validarNombresEI() {
		if (expresionesAgregarEI.texto.test(formAgregarEI.nombresEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nombresEI, 'nombresEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nombresEI, 'nombresEI', '');
		}
	}

	function validarCedulaEscolarEI() {
		if (expresionesAgregarEI.cedulaE.test(formAgregarEI.cEscolarEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.cedulaE, formAgregarEI.cEscolarEI, 'cEscolarEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.cedulaE, formAgregarEI.cEscolarEI, 'cEscolarEI', '');
		}
	}

	function validarLugarNacimientoEI() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.lugarNacimientoEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.lugarNacimientoEI, 'lugarNacimientoEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.lugarNacimientoEI, 'lugarNacimientoEI', '');
		}
	}

	function validarDireccionHabitacionEI() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.direccionHabitacionEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionHabitacionEI, 'direccionHabitacionEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionHabitacionEI, 'direccionHabitacionEI', '');
		}
	}

	function validarFechaNacimientoEI() {
		if (formAgregarEI.fechaNacimientoEI.value == 0 || formAgregarEI.fechaNacimientoEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.fechaNacimientoEI, 'fechaNacimientoEI', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.fechaNacimientoEI, 'fechaNacimientoEI', '');
		}
	}

	function validarEstadoNatalEI() {
		if (formAgregarEI.estadoNatalEI.value == 0 || formAgregarEI.estadoNatalEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.estadoNatalEI, 'estadoNatalEI', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.estadoNatalEI, 'estadoNatalEI', '');
		}
	}

	function validarMunicipioNatalEI() {
		if (formAgregarEI.municipioNatalEI.value == 0 || formAgregarEI.municipioNatalEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.municipioNatalEI, 'municipioNatalEI', 'cargarMunicipioNatalEI');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.municipioNatalEI, 'municipioNatalEI', 'cargarMunicipioNatalEI');
		}
	}

	function validarParroquiaNatalEI() {
		if (formAgregarEI.parroquiaNatalEI.value == 0 || formAgregarEI.parroquiaNatalEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.parroquiaNatalEI, 'parroquiaNatalEI', 'cargarParroquiaNatalEI');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.parroquiaNatalEI, 'parroquiaNatalEI', 'cargarParroquiaNatalEI');
		}
	}

	// PARTE ii
	function validarParentescoREI1() {
		if (formAgregarEI.parentescoREI1.value == 0 || formAgregarEI.parentescoREI1.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.parentescoREI1, 'parentescoREI1', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.parentescoREI1, 'parentescoREI1', '');
		}
	}

	function validarNombreCompletoREI1() {
		if (expresionesAgregarEI.texto.test(formAgregarEI.nombreCompletoREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nombreCompletoREI1, 'nombreCompletoREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nombreCompletoREI1, 'nombreCompletoREI1', '');
		}
	}

	function validarCedulaREI1() {
		if (expresionesAgregarEI.cedula.test(formAgregarEI.cedulaREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.cedula, formAgregarEI.cedulaREI1, 'cedulaREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.cedula, formAgregarEI.cedulaREI1, 'cedulaREI1', '');
		}
	}

	function validarEdadREI1() {
		if (expresionesAgregarEI.edadRequired.test(formAgregarEI.edadREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.edadRequired, formAgregarEI.edadREI1, 'edadREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.edadRequired, formAgregarEI.edadREI1, 'edadREI1', '');
		}
	}

	function validarNacionalidadREI1() {
		if (expresionesAgregarEI.texto.test(formAgregarEI.nacionalidadREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nacionalidadREI1, 'nacionalidadREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.texto, formAgregarEI.nacionalidadREI1, 'nacionalidadREI1', '');
		}
	}

	function validarGradoInstrucionREI1() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.gradoInstrucionREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.gradoInstrucionREI1, 'gradoInstrucionREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.gradoInstrucionREI1, 'gradoInstrucionREI1', '');
		}
	}

	function validarTrabajaREI1() {
		if (formAgregarEI.trabajaREI1.value == 0 || formAgregarEI.trabajaREI1.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.trabajaREI1, 'trabajaREI1', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.trabajaREI1, 'trabajaREI1', '');
		}
	}

	function validarDireccionTrabajoREI1() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.direccionTrabajoREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionTrabajoREI1, 'direccionTrabajoREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionTrabajoREI1, 'direccionTrabajoREI1', '');
		}
	}

	function validarViveREI1() {
		if (formAgregarEI.viveREI1.value == 0 || formAgregarEI.viveREI1.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.viveREI1, 'viveREI1', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.viveREI1, 'viveREI1', '');
		}
	}

	function validarTelefonoCasaREI1() {
		if (expresionesAgregarEI.telefonoRequired.test(formAgregarEI.telefonoCasaREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, formAgregarEI.telefonoCasaREI1, 'telefonoCasaREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, formAgregarEI.telefonoCasaREI1, 'telefonoCasaREI1', '');
		}
	}

	function validarTelefonoCelREI1() {
		if (expresionesAgregarEI.telefonoRequired.test(formAgregarEI.telefonoCelREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, formAgregarEI.telefonoCelREI1, 'telefonoCelREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.telefonoRequired, formAgregarEI.telefonoCelREI1, 'telefonoCelREI1', '');
		}
	}

	function validarDireccionHabitacionREI1() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.direccionHabitacionREI1.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionHabitacionREI1, 'direccionHabitacionREI1', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.direccionHabitacionREI1, 'direccionHabitacionREI1', '');
		}
	}

	function validarNombreCompletoREI2() {
		if (expresionesAgregarEI.textoNone.test(formAgregarEI.nombreCompletoREI2.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.textoNone, formAgregarEI.nombreCompletoREI2, 'nombreCompletoREI2', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.textoNone, formAgregarEI.nombreCompletoREI2, 'nombreCompletoREI2', '');
		}
	}

	function validarCedulaREI2() {
		if (expresionesAgregarEI.cedulaNone.test(formAgregarEI.cedulaREI2.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.cedulaNone, formAgregarEI.cedulaREI2, 'cedulaREI2', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.cedulaNone, formAgregarEI.cedulaREI2, 'cedulaREI2', '');
		}
	}

	function validarEdadREI2() {
		if (expresionesAgregarEI.edad.test(formAgregarEI.edadREI2.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.edad, formAgregarEI.edadREI2, 'edadREI2', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.edad, formAgregarEI.edadREI2, 'edadREI2', '');
		}
	}

	function validarTrabajaREI2() {
		if (formAgregarEI.trabajaREI2.value == 0 || formAgregarEI.trabajaREI2.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.trabajaREI2, 'trabajaREI2', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.trabajaREI2, 'trabajaREI2', '');
		}
	}

	function validarViveREI2() {
		if (formAgregarEI.viveREI2.value == 0 || formAgregarEI.viveREI2.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.viveREI2, 'viveREI2', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.viveREI2, 'viveREI2', '');
		}
	}

	function validarTelefonoCasaREI2() {
		if (expresionesAgregarEI.telefono.test(formAgregarEI.telefonoCasaREI2.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.telefono, formAgregarEI.telefonoCasaREI2, 'telefonoCasaREI2', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.telefono, formAgregarEI.telefonoCasaREI2, 'telefonoCasaREI2', '');
		}
	}

	function validarTelefonoCelREI2() {
		if (expresionesAgregarEI.telefono.test(formAgregarEI.telefonoCelREI2.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.telefono, formAgregarEI.telefonoCelREI2, 'telefonoCelREI2', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.telefono, formAgregarEI.telefonoCelREI2, 'telefonoCelREI2', '');
		}
	}

	function validarSituacionPadresEI() {
		if (formAgregarEI.situacionPadresEI.value == 0 || formAgregarEI.situacionPadresEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.situacionPadresEI, 'situacionPadresEI', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.situacionPadresEI, 'situacionPadresEI', '');
		}
	}

	// PARTE III
	function validarLocalizarFEI() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.localizarFEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.localizarFEI, 'localizarFEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.localizarFEI, 'localizarFEI', '');
		}
	}

	function validarDondeQuienViveEI() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.dondeQuienViveEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.dondeQuienViveEI, 'dondeQuienViveEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.dondeQuienViveEI, 'dondeQuienViveEI', '');
		}
	}

	function validarTipoPartoEI() {
		if (formAgregarEI.tipoPartoEI.value == 0 || formAgregarEI.tipoPartoEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.tipoPartoEI, 'tipoPartoEI', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.tipoPartoEI, 'tipoPartoEI', '');
		}
	}

	function validarFiebreMedicamentoEI() {
		if (expresionesAgregarEI.varios.test(formAgregarEI.fiebreMedicamentoEI.value)) {
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.fiebreMedicamentoEI, 'fiebreMedicamentoEI', '');
		}else{
			validarCampoAgregarEI(expresionesAgregarEI.varios, formAgregarEI.fiebreMedicamentoEI, 'fiebreMedicamentoEI', '');
		}
	}

	// PARTE IV
	function validarAtencionAdultaEI() {
		if (formAgregarEI.atencionAdultaEI.value == 0 || formAgregarEI.atencionAdultaEI.value == "") {
			validarSeleccionAgregarEI(formAgregarEI.atencionAdultaEI, 'atencionAdultaEI', '');
		}else {
			validarSeleccionAgregarEI(formAgregarEI.atencionAdultaEI, 'atencionAdultaEI', '');
		}
	}

</script>

<script type="text/javascript">

	$(document).ready(function(){

		$('#cargarEstadoNatalEB').load('ubicaciones/selectEstadoNatalEB.php');
		$('#cargarGradoCursarEB').load('estudiantes/selectGradoCursarEB.php');
		$('#cargarAnioEscolarEB').load('estudiantes/selectAnioEscolarEB.php');
		$('#cargarLiteralEB').load('estudiantes/selectLiteralEB.php');
		$('#cargarCodigoTelREB').load('codigosTel/selectCodigoTelREB.php');
		$('#cargarCodigoTelRSEB').load('codigosTel/selectCodigoTelRSEB.php');
		$('#cargarPersonalResponsableEB').load('estudiantes/selectPersonalResponsableEB.php');
		$('#cargarEstadoNatalEBEdit').load('ubicaciones/selectEstadoNatalEBEdit.php');
		$('#cargarGradoCursarEBEdit').load('estudiantes/selectGradoCursarEBEdit.php');
		$('#cargarAnioEscolarEBEdit').load('estudiantes/selectAnioEscolarEBEdit.php');
		$('#cargarLiteralEBEdit').load('estudiantes/selectLiteralEBEdit.php');
		$('#cargarCodigoTelREBEdit').load('codigosTel/selectCodigoTelREBEdit.php');
		$('#cargarCodigoTelRSEBEdit').load('codigosTel/selectCodigoTelRSEBEdit.php');

		// FUNCIONES PARA LA MODAL AGREGAR ESTUDIANTE DE BASICA
		$('#fechaNacimientoEB').change(function() {
			var fechaNacimientoEB = document.getElementById('fechaNacimientoEB');

			$.ajax({
				url: '../procesos/estudiantes/calcularEdad.php',
				type: 'POST',
				dataType: 'json',
				data: 'fecha=' + fechaNacimientoEB.value,
				success:function(data){
					$('#edadEB').val(data.anios);
				}
			});
			
		});

		mostrarMunicipioNatalEB();
		mostrarParroquiaNatalEB();

		$('#cargarEstadoNatalEB').change(function() {
			var estado = document.getElementById('estadoNatalEB').value;
			mostrarMunicipioNatalEB(estado);
		});

		$('#cargarMunicipioNatalEB').change(function() {
			var municipio = document.getElementById('municipioNatalEB').value;
			mostrarParroquiaNatalEB(municipio);
		});

		function mostrarSeccionEB(grado) {

			$.ajax({
				url: 'estudiantes/selectSeccionGradoCursarEB.php',
				type: 'POST',
				dataType: 'json',
				data: 'grado=' + grado,
				success:function(cadena){
					$('#cargarSeccionGradoCursarEB').html(cadena);
				}
			});

		}

		mostrarSeccionEB();

		$('#cargarGradoCursarEB').change(function() {
			var grado = document.getElementById('gradoCursarEB').value;
			mostrarSeccionEB(grado);
		});

		$('#fechaNacimientoREB').change(function() {
			var fechaNacimientoREB = document.getElementById('fechaNacimientoREB');

			$.ajax({
				url: '../procesos/estudiantes/calcularEdad.php',
				type: 'POST',
				dataType: 'json',
				data: 'fecha=' + fechaNacimientoREB.value,
				success:function(data){
					$('#edadREB').val(data.anios);
				}
			});
			
		});



		// FUNCIONES PARA LA MODAL EDITAR ESTUDIANTE DE BASICA
		mostrarMunicipioNatalEBEdit();
		mostrarParroquiaNatalEBEdit();

		$('#cargarEstadoNatalEBEdit').change(function() {
			var estado = document.getElementById('estadoNatalEBEdit').value;
			mostrarMunicipioNatalEBEdit(estado);
		});

		$('#cargarMunicipioNatalEBEdit').change(function() {
			var municipio = document.getElementById('municipioNatalEBEdit').value;
			mostrarParroquiaNatalEBEdit(municipio);
		});

		function mostrarSeccionEBEdit(grado) {

			$.ajax({
				url: 'estudiantes/selectSeccionGradoCursarEBEdit.php',
				type: 'POST',
				dataType: 'json',
				data: 'grado=' + grado,
				success:function(cadena){
					$('#cargarSeccionGradoCursarEBEdit').html(cadena);
				}
			});

		}

		mostrarSeccionEBEdit();

		$('#cargarGradoCursarEBEdit').change(function() {
			var grado = document.getElementById('gradoCursarEBEdit').value;
			mostrarSeccionEBEdit(grado);
		});

	});

</script>

<script type="text/javascript">
	
	// VALIDACIÓN DE CAMPOS modalAgregarEstudianteB
	// PARTE I
	function validarApellidosEB() {
		if (expresionesAgregarEB.texto.test(formAgregarEB.apellidosEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.apellidosEB, 'apellidosEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.apellidosEB, 'apellidosEB', '');
		}
	}

	function validarNombresEB() {
		if (expresionesAgregarEB.texto.test(formAgregarEB.nombresEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.nombresEB, 'nombresEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.nombresEB, 'nombresEB', '');
		}
	}

	function validarLugarNacimientoEB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.lugarNacimientoEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.lugarNacimientoEB, 'lugarNacimientoEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.lugarNacimientoEB, 'lugarNacimientoEB', '');
		}
	}

	function validarFechaNacimientoEB() {
		if (formAgregarEB.fechaNacimientoEB.value == 0 || formAgregarEB.fechaNacimientoEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoEB, 'fechaNacimientoEB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoEB, 'fechaNacimientoEB', '');
		}
	}

	function validarSexoEB() {
		if (formAgregarEB.sexoEB.value == 0 || formAgregarEB.sexoEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.sexoEB, 'sexoEB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.sexoEB, 'sexoEB', '');
		}
	}

	function validarCedulaEB() {
		if (expresionesAgregarEB.cedulaE.test(formAgregarEB.cedulaEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.cedulaE, formAgregarEB.cedulaEB, 'cedulaEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.cedulaE, formAgregarEB.cedulaEB, 'cedulaEB', '');
		}
	}

	function validarEstadoNatalEB() {
		if (formAgregarEB.estadoNatalEB.value == 0 || formAgregarEB.estadoNatalEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.estadoNatalEB, 'estadoNatalEB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.estadoNatalEB, 'estadoNatalEB', '');
		}
	}

	function validarMunicipioNatalEB() {
		if (formAgregarEB.municipioNatalEB.value == 0 || formAgregarEB.municipioNatalEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.municipioNatalEB, 'municipioNatalEB', 'cargarMunicipioNatalEB');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.municipioNatalEB, 'municipioNatalEB', 'cargarMunicipioNatalEB');
		}
	}

	function validarParroquiaNatalEB() {
		if (formAgregarEB.parroquiaNatalEB.value == 0 || formAgregarEB.parroquiaNatalEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.parroquiaNatalEB, 'parroquiaNatalEB', 'cargarParroquiaNatalEB');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.parroquiaNatalEB, 'parroquiaNatalEB', 'cargarParroquiaNatalEB');
		}
	}

	function validarDireccionEB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.direccionEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionEB, 'direccionEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionEB, 'direccionEB', '');
		}
	}

	function validarGradoCursarEB() {
		if (formAgregarEB.gradoCursarEB.value == 0 || formAgregarEB.gradoCursarEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.gradoCursarEB, 'gradoCursarEB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.gradoCursarEB, 'gradoCursarEB', '');
		}
	}

	function validarSeccionGradoCursarEB() {
		if (formAgregarEB.seccionGradoCursarEB.value == 0 || formAgregarEB.seccionGradoCursarEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.seccionGradoCursarEB, 'seccionGradoCursarEB', 'cargarSeccionGradoCursarEB');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.seccionGradoCursarEB, 'seccionGradoCursarEB', 'cargarSeccionGradoCursarEB');
		}
	}

	// PARTE II
	function validarNombreCompletoREB() {
		if (expresionesAgregarEB.texto.test(formAgregarEB.nombreCompletoREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.nombreCompletoREB, 'nombreCompletoREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.texto, formAgregarEB.nombreCompletoREB, 'nombreCompletoREB', '');
		}
	}

	function validarFechaNacimientoREB() {
		if (formAgregarEB.fechaNacimientoREB.value == 0 || formAgregarEB.fechaNacimientoREB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoREB, 'fechaNacimientoREB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoREB, 'fechaNacimientoREB', '');
		}
	}

	function validarCedulaREB() {
		if (expresionesAgregarEB.cedula.test(formAgregarEB.cedulaREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.cedula, formAgregarEB.cedulaREB, 'cedulaREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.cedula, formAgregarEB.cedulaREB, 'cedulaREB', '');
		}
	}

	function validarGradoInstruccionREB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.gradoInstruccionREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.gradoInstruccionREB, 'gradoInstruccionREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.gradoInstruccionREB, 'gradoInstruccionREB', '');
		}
	}

	function validarOcupacionREB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.ocupacionREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.ocupacionREB, 'ocupacionREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.ocupacionREB, 'ocupacionREB', '');
		}
	}

	function validarLugarTrabajoREB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.lugarTrabajoREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.lugarTrabajoREB, 'lugarTrabajoREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.lugarTrabajoREB, 'lugarTrabajoREB', '');
		}
	}

	function validarTelefonoREB() {
		if (expresionesAgregarEB.telefonoRequired.test(formAgregarEB.telefonoREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, formAgregarEB.telefonoREB, 'telefonoREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, formAgregarEB.telefonoREB, 'telefonoREB', '');
		}
	}

	function validarDireccionHabitacionREB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.direccionHabitacionREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionHabitacionREB, 'direccionHabitacionREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionHabitacionREB, 'direccionHabitacionREB', '');
		}
	}

	function validarParentescoREB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.parentescoREB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.parentescoREB, 'parentescoREB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.parentescoREB, 'parentescoREB', '');
		}
	}

	function validarRSustitutoEB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.rSustitutoEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.rSustitutoEB, 'rSustitutoEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.rSustitutoEB, 'rSustitutoEB', '');
		}
	}

	function validarFechaNacimientoRSEB() {
		if (formAgregarEB.fechaNacimientoRSEB.value == 0 || formAgregarEB.fechaNacimientoRSEB.value == "") {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoRSEB, 'fechaNacimientoRSEB', '');
		}else {
			validarSeleccionAgregarEB(formAgregarEB.fechaNacimientoRSEB, 'fechaNacimientoRSEB', '');
		}
	}

	function validarCedulaRSEB() {
		if (expresionesAgregarEB.cedula.test(formAgregarEB.cedulaRSEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.cedula, formAgregarEB.cedulaRSEB, 'cedulaRSEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.cedula, formAgregarEB.cedulaRSEB, 'cedulaRSEB', '');
		}
	}

	function validarTelefonoRSEB() {
		if (expresionesAgregarEB.telefonoRequired.test(formAgregarEB.telefonoRSEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, formAgregarEB.telefonoRSEB, 'telefonoRSEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.telefonoRequired, formAgregarEB.telefonoRSEB, 'telefonoRSEB', '');
		}
	}

	function validarDireccionHabitacionRSEB() {
		if (expresionesAgregarEB.varios.test(formAgregarEB.direccionHabitacionRSEB.value)) {
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionHabitacionRSEB, 'direccionHabitacionRSEB', '');
		}else{
			validarCampoAgregarEB(expresionesAgregarEB.varios, formAgregarEB.direccionHabitacionRSEB, 'direccionHabitacionRSEB', '');
		}
	}

</script>

<script type="text/javascript">

	// FORMALIZAR INSCRIPCIÓN
	function mostrarEstudianteInscrito(estudiante) {

		$.ajax({
			url: 'estudiantes/selectEstudianteFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'estudiante=' + estudiante,
			success:function(cadena){
				$('#cargarEstudianteFormalizar').html(cadena);
			}
		});

	}

	mostrarEstudianteInscrito();



	function mostrarGradoFormalizar(estudiante) {

		$.ajax({
			url: 'estudiantes/selectGradoFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'estudiante=' + estudiante,
			success:function(cadena){
				$('#cargarGradoFormalizar').html(cadena);
			}
		});

	}

	mostrarGradoFormalizar();

	$('#cargarEstudianteFormalizar').change(function() {
		var estudiante = document.getElementById('estudianteFormalizar').value;
		mostrarGradoFormalizar(estudiante);
	});



	function mostrarSeccionFormalizarEstudiante(estudiante) {

		$.ajax({
			url: 'estudiantes/selectSeccionFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'estudiante=' + estudiante,
			success:function(cadena){
				$('#cargarSeccionFormalizar').html(cadena);
			}
		});

	}

	mostrarSeccionFormalizarEstudiante();

	$('#cargarEstudianteFormalizar').change(function() {
		var estudiante = document.getElementById('estudianteFormalizar').value;
		mostrarSeccionFormalizarEstudiante(estudiante);
	});



	function mostrarSeccionFormalizar(grado) {

		$.ajax({
			url: 'estudiantes/selectSeccionFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'grado=' + grado,
			success:function(cadena){
				$('#cargarSeccionFormalizar').html(cadena);
			}
		});

	}

	mostrarSeccionFormalizar();
	
	$('#cargarGradoFormalizar').change(function() {
		var grado = document.getElementById('gradoFormalizar').value;
		mostrarSeccionFormalizar(grado);
	});



	function mostrarAnioEscolarFormalizar(estudiante) {

		$.ajax({
			url: 'estudiantes/selectAnioEscolarFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'estudiante=' + estudiante,
			success:function(cadena){
				$('#cargarAnioEscolarFormalizar').html(cadena);
			}
		});

	}

	mostrarAnioEscolarFormalizar();

	$('#cargarEstudianteFormalizar').change(function() {
		var estudiante = document.getElementById('estudianteFormalizar').value;
		mostrarAnioEscolarFormalizar(estudiante);
	});



	function mostrarLiteralFormalizar(estudiante) {

		$.ajax({
			url: 'estudiantes/selectLiteralFormalizar.php',
			type: 'POST',
			dataType: 'json',
			data: 'estudiante=' + estudiante,
			success:function(cadena){
				$('#cargarLiteralFormalizar').html(cadena);
			}
		});

	}

	mostrarLiteralFormalizar();

	$('#cargarEstudianteFormalizar').change(function() {
		var estudiante = document.getElementById('estudianteFormalizar').value;
		mostrarLiteralFormalizar(estudiante);
	});

</script>