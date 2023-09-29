<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

?>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-school display-5"></span> Año Escolar</h1>
	 		<br>
	 		
	 		<?php 
	 			if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser == 3) { 
	 		?>
		 		<div class="row">
		 			<div class="col">
		 				<span class="btn btn-primary" id="btnAgregarLiteral" data-bs-toggle="modal" data-bs-target="#modalAgregarAnioEscolar">
		 					<span class="fa-solid fa-circle-plus"></span> Agregar Año Escolar
		 				</span>
		 			</div>
		 		</div>
		 		<br>
		 		<b>Agrege el año escolar actual para gestionar las inscripciones de los alumnos y la asistencia del personal.</b>
		 	<?php
		 		}
		 	?>
	 		
	 		<hr>

	 		<div id="tablaAnioEscolar"></div>

	 	</div>
	 </div>

<?php 

	include "estudiantes/modalAgregarAnioEscolar.php";
	include "estudiantes/modalEditarAnioEscolar.php";
	require_once "footer.php";
	require_once "buttonsDataTables.php";

?>

<script src="../js/calendario.js"></script>
<script src="../js/estudiantes.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaAnioEscolar').load('estudiantes/tablaAnioEscolar.php');
	});

	// VALIDACIÓN DEL FORMULARIO
	formularioAgregarAnioEscolar.addEventListener('submit', (e) => {
		e.preventDefault();

		var validarCampoAgregarAnioEscolar = (input, campo) => {
			if (input.value == 0 || input.value == "") {
				document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
				document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
				document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
				document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
				document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
				seleccionarFechaAgregarAnioEscolar(campo);
				camposAgregarAnioEscolar[campo] = false;
			} else {
				document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
				document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
				document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
				document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
				document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
				camposAgregarAnioEscolar[campo] = true;
			}
		}

		var seleccionarFechaAgregarAnioEscolar = (campo) => {
			$(document).ready(function(){
				$(`#${campo}`).change(function() {

					switch (campo) {

						case 'ddmmi':
							validarddmmi();
						break;

						case 'yyi':
							validaryyi();
						break;

						case 'ddmmf':
							validarddmmf();
						break;

						case 'yyf':
							validaryyf();
						break;
						
					}

				});
			});
		}

		function validarddmmi() {
			if (formularioAgregarAnioEscolar.ddmmi.value == 0 || formularioAgregarAnioEscolar.ddmmi.value == "") {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.ddmmi, 'ddmmi');
			}else {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.ddmmi, 'ddmmi');
			}
		}

		function validaryyi() {
			if (formularioAgregarAnioEscolar.yyi.value == 0 || formularioAgregarAnioEscolar.yyi.value == "") {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.yyi, 'yyi');
			}else {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.yyi, 'yyi');
			}
		}

		function validarddmmf() {
			if (formularioAgregarAnioEscolar.ddmmf.value == 0 || formularioAgregarAnioEscolar.ddmmf.value == "") {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.ddmmf, 'ddmmf');
			}else {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.ddmmf, 'ddmmf');
			}
		}

		function validaryyf() {
			if (formularioAgregarAnioEscolar.yyf.value == 0 || formularioAgregarAnioEscolar.yyf.value == "") {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.yyf, 'yyf');
			}else {
				validarCampoAgregarAnioEscolar(formularioAgregarAnioEscolar.yyf, 'yyf');
			}
		}
		
		validarddmmi();
		validaryyi();
		validarddmmf();
		validaryyf();

		if (camposAgregarAnioEscolar.ddmmi && camposAgregarAnioEscolar.yyi && camposAgregarAnioEscolar.ddmmf && camposAgregarAnioEscolar.yyf) {
			agregarAnioEscolar();
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

</script>