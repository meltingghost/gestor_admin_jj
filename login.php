	<?php 

		require_once "header.php";

	?>

<body>

	<link rel="stylesheet" href="css/login.css">

	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" id="btnLogin">Iniciar Sesión</label>
			<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Recuperar Contraseña</label>
			<div class="login-form">
				<form id="formIniciarSesion" method="POST" autocomplete="off" onsubmit="return iniciarSesion()">
					<div class="sign-in-htm">
						<div class="group">
							<label for="username" class="label formV-label">Nombre de Usuario</label>
							<input id="username" name="username" type="text" class="input input-no-space" required="">
						</div>
						<div class="group">
							<label for="password" class="label formV-label">Contraseña</label>
							<input id="password" name="password" type="password" class="input input-no-space" data-type="password" required="">
						</div>
						<div class="group">
							<label for="codigoInscripcion" class="label formV-label">Código para la Inscripción</label>
							<input id="codigoInscripcion" name="codigoInscripcion" type="password" class="input input-no-space" placeholder="Opcional" data-type="password">
						</div>
						<div class="group">
							<input type="submit" class="button" value="Ingresar">
						</div>
						<div class="hr"></div>
						<div align="center">
							<a class="btn btn-link" href="registro.php">Registrarse</a><br>
							<a class="btn btn-secondary" href="inicio.php">Volver</a>
						</div>
					</div>
				</form>
				<form id="formRecuperarAcceso" method="POST" autocomplete="off" onsubmit="return recuperarAcceso()">
					<div class="for-pwd-htm">
						<div class="group">
							<br><br>
							<label for="usernameRecovery" class="label formV-label">Nombre de Usuario</label>
							<input type="text" name="usernameRecovery" id="usernameRecovery" class="input input-no-space" required="">
						</div>
						<div class="group">
							<br><br>
							<input type="submit" class="button" value="Recuperar">
						</div><br>
						<div class="hr"></div><br>
						<div align="center">
							<a class="btn btn-link" href="registro.php">Registrarse</a><br><br>
							<a class="btn btn-secondary" href="inicio.php">Volver</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php 

	include_once "vistas/usuarios/modalRecuperarAcceso.php";
	require_once "footer.php";

 ?>

 <script src="js/usuarios.js"></script>

 <script type="text/javascript">
 	
 	// VALIDACIÓN DEL FORMULARIO
	formularioNewPass.addEventListener('submit', (e) => {
		e.preventDefault();

		function validarNewPassword() {
			if (expresiones.password.test(formularioNewPass.newPassword.value)) {
				validarCampoNewPass(expresiones.password, formularioNewPass.newPassword, 'newPassword');
			}else {
				validarCampoNewPass(expresiones.password, formularioNewPass.newPassword, 'newPassword');
			}
		}

		validarNewPassword();	

		inputsNewPass.forEach((input) => {
			input.addEventListener('keyup', validarFormNewPass);
			input.addEventListener('blur', validarFormNewPass);
		});

		if (camposNewPass.newPassword) {
			modificarPassword();
			document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
				icono.classList.remove('formV-group-correcto');
			});
		}

	});

 </script>