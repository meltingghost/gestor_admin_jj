<?php 

	require_once "header.php";

?>

<body style="margin:0; background:url(img/registroUser.webp) fixed; background-size: cover;">

	<div class="formRegistroUser h-100 p-5 text-white bg-white rounded-5">
		<div class="row">
			<div class="col">
				<h1 align="center">Registro de Usuarios</h1>
				<p style="text-align: center;"><b>Te recordamos que el nombre de usuario es unico.</b></p>
				<hr>
			</div>
		</div>


		<form id="formRegistrarUser" class="formV" method="POST" autocomplete="off">
			<div class="row">
				<div class="col formV-group" id="nombreUserGroup">
					<label for="nombreUser" class="formV-label">Nombre:</label>
					<div class="formV-group-input">
						<input type="text" id="nombreUser" name="nombreUser" class="form-control formV-input" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" minlength="3" maxlength="30" onkeyup="mayus(this.id, this.value);">
						<span class="fa-solid fa-circle-xmark formV-val-status"></span>
						<small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
					</div>
				</div>
				<div class="col formV-group" id="apellidoUserGroup">
					<label for="apellidoUser" class="formV-label">Apellido:</label>
					<div class="formV-group-input">
						<input type="text" id="apellidoUser" name="apellidoUser" class="form-control formV-input" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" minlength="3" maxlength="30" onkeyup="mayus(this.id, this.value);">
						<span class="fa-solid fa-circle-xmark formV-val-status"></span>
						<small class="form-text formV-input-error">Debe ingresar un apellido valido.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col formV-group" id="correoUserGroup">
					<label for="correoUser" class="formV-label">Correo Electrónico:</label>
					<div class="formV-group-input">
						<input type="email" id="correoUser" name="correoUser" class="form-control input-no-space formV-input" minlength="6" maxlength="80">
						<span class="fa-solid fa-circle-xmark formV-val-status"></span>
						<small class="form-text formV-input-error">Debe ingresar un correo valido.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col formV-group" id="cargosUserGroup">
					<label for="cargosUser" class="formV-label">Función como Usuario:</label>
					<div class="formV-group-input">
						<div id="cargarCargosUser"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col formV-group" id="usernameGroup">
					<label for="username" class="formV-label">Nombre de Usuario:</label>
					<div class="formV-group-input">
						<input type="text" id="username" name="username" class="form-control input-no-space formV-input" minlength="3" maxlength="30">
						<span class="fa-solid fa-circle-xmark formV-val-status"></span>
						<small class="form-text formV-input-error">El nombre de usuario debe ser de más de 3 digitos y sin simbolos.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col formV-group" id="passwordGroup">
					<label for="password" class="formV-label">Contraseña:</label>
					<div class="formV-group-input">
						<input type="password" id="password" name="password" class="form-control input-no-space formV-input" minlength="8" maxlength="16">
						<span class="fa-solid fa-circle-xmark formV-val-status"></span>
						<small class="form-text formV-input-error">La contraseña debe tener entre 8 y 16 caracteres.</small>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col text-left">
					<input type="submit" class="btn btn-success" value="Registrar">
				</div>
				<div class="col text-left">
					<a href="login.php" class="btn btn-primary">Ingresar</a>
				</div>
				<div class="col text-right">
					<a href="inicio.php" class="btn btn-secondary">Volver</a>
				</div>
				<div class="col text-right">
					<input class="btn btn-danger" type="reset" value="Limpiar">
				</div>
			</div>
		</form>
	</div>

<?php 

	include "vistas/usuarios/modalAgregarPreguntasSegUser.php";
	require_once "footer.php";

?>

<script src="js/usuarios.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#cargarCargosUser').load("vistas/usuarios/selectCargosUser.php");
	});

	// VALIDACIÓN DEL FORMULARIO
	formulario.addEventListener('submit', (e) => {
		e.preventDefault();

		function validarNombre() {
			if (expresiones.nombre.test(formulario.nombreUser.value)) {
				validarCampo(expresiones.nombre, formulario.nombreUser, 'nombreUser');
			}else{
				validarCampo(expresiones.nombre, formulario.nombreUser, 'nombreUser');
			}
		}

		function validarApellido() {
			if (expresiones.apellido.test(formulario.apellidoUser.value)) {
				validarCampo(expresiones.apellido, formulario.apellidoUser, 'apellidoUser');
			}else{
				validarCampo(expresiones.apellido, formulario.apellidoUser, 'apellidoUser');
			}
		}

		function validarCorreo() {
			if (expresiones.correo.test(formulario.correoUser.value)) {
				validarCampo(expresiones.correo, formulario.correoUser, 'correoUser');
			}else {
				validarCampo(expresiones.correo, formulario.correoUser, 'correoUser');
			}
		}

		var seleccionarCargo = () => {
			$(document).ready(function(){
				$('#cargarCargosUser').change(function() {
					validarCargo();
				});
			});
		}

		var cargoUser = false;

		function validarCargo() {
			if (formulario.cargosUser.value == 0 || formulario.cargosUser.value == "") {
				document.getElementById(`cargosUserGroup`).classList.add('formV-group-incorrecto');
				document.getElementById(`cargosUserGroup`).classList.remove('formV-group-correcto');
				document.querySelector(`#cargosUserGroup span`).classList.remove('fa-circle-check');
				document.querySelector(`#cargosUserGroup span`).classList.add('fa-circle-xmark');
				document.querySelector(`#cargosUserGroup .formV-input-error`).classList.add('formV-input-error-activo');
				cargoUser = false;
				seleccionarCargo();
			}else {
				document.getElementById(`cargosUserGroup`).classList.remove('formV-group-incorrecto');
				document.getElementById(`cargosUserGroup`).classList.add('formV-group-correcto');
				document.querySelector(`#cargosUserGroup span`).classList.add('fa-circle-check');
				document.querySelector(`#cargosUserGroup span`).classList.remove('fa-circle-xmark');
				document.querySelector(`#cargosUserGroup .formV-input-error`).classList.remove('formV-input-error-activo');
				cargoUser = true;
			}
		}

		function validarUsername() {
			if (expresiones.usuario.test(formulario.username.value)) {
				validarCampo(expresiones.usuario, formulario.username, 'username');
			}else {
				validarCampo(expresiones.usuario, formulario.username, 'username');
			}
		}

		function validarPassword() {
			if (expresiones.password.test(formulario.password.value)) {
				validarCampo(expresiones.password, formulario.password, 'password');
			}else {
				validarCampo(expresiones.password, formulario.password, 'password');
			}
		}

		validarNombre();
		validarApellido();
		validarCorreo();
		validarCargo();
		validarUsername();
		validarPassword();	

		inputs.forEach((input) => {
			input.addEventListener('keyup', validarForm);
			input.addEventListener('blur', validarForm);
		});

		if (campos.nombreUser && campos.apellidoUser && campos.correoUser && cargoUser && campos.username && campos.password) {
			registrarUser();
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

</script>