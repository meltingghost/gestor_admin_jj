<?php 

	require_once "header.php";
    require_once "menu.php";
	session_start();
	$idUsuario = $_SESSION['id_usuario'];

?>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container">

	 		<h1 class="display-4"><span class="fa-solid fa-circle-user display-5"></span> Usuarios</h1>
	 		<div class="row">
	 			<div class="col">
	 				<span class="btn btn-warning" title="Editar Perfil Propio" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil" onclick="editarPerfil('<?php echo $idUsuario ?>')">
	 					<span class="fa-solid fa-user-pen"></span> Editar Perfil
	 				</span>
	 			</div>
	 		</div>
	 		<br>
	 		<p><b>A continuación se muestra un listado con todos los usuarios registrados de los cuales solo se podrá modificar la función, además pueden ser eliminados permanentemente. Para realizar cada una de estas acciones debe validar su perfil y comprobar su identidad.</b></p>
	 		<hr>

	 		<div id="tablaUsuarios"></div>

	 	</div>
	 </div>

<?php 

	include "usuarios/modalEditarPerfil.php";
    include "usuarios/modalEditarCargoOtroUser.php";
	require_once "footer.php";
    require_once "buttonsDataTables.php";

?>

<script src="../js/usuarios.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
		$('#cargarCargosUserEdit').load('usuarios/selectCargosUserEdit.php');
        $('#cargarCargoOtroUserEdit').load('usuarios/selectCargoOtroUserEdit.php')
	});

	// VALIDACIÓN DEL FORMULARIO
    formularioEditarPerfil.addEventListener('submit', (e) => {
        e.preventDefault();

        function validarNombreEdit() {
            if (expresiones.nombre.test(formularioEditarPerfil.nombreUserEdit.value)) {
                validarCampoEdit(expresiones.nombre, formularioEditarPerfil.nombreUserEdit, 'nombreUserEdit');
            }else{
                validarCampoEdit(expresiones.nombre, formularioEditarPerfil.nombreUserEdit, 'nombreUserEdit');
            }
        }

        function validarApellidoEdit() {
            if (expresiones.apellido.test(formularioEditarPerfil.apellidoUserEdit.value)) {
                validarCampoEdit(expresiones.apellido, formularioEditarPerfil.apellidoUserEdit, 'apellidoUserEdit');
            }else{
                validarCampoEdit(expresiones.apellido, formularioEditarPerfil.apellidoUserEdit, 'apellidoUserEdit');
            }
        }

        function validarCorreoEdit() {
            if (expresiones.correo.test(formularioEditarPerfil.correoUserEdit.value)) {
                validarCampoEdit(expresiones.correo, formularioEditarPerfil.correoUserEdit, 'correoUserEdit');
            }else {
                validarCampoEdit(expresiones.correo, formularioEditarPerfil.correoUserEdit, 'correoUserEdit');
            }
        }

        var seleccionarCargoEdit = () => {
            $(document).ready(function(){
                $('#cargarCargosUserEdit').change(function() {
                    validarCargoEdit();
                });
            });
        }

        var cargoUserEdit = false;

        function validarCargoEdit() {
            if (formularioEditarPerfil.cargosUserEdit.value == 0 || formularioEditarPerfil.cargosUserEdit.value == "") {
                document.getElementById(`cargosUserEditGroup`).classList.add('formV-group-incorrecto');
                document.getElementById(`cargosUserEditGroup`).classList.remove('formV-group-correcto');
                document.querySelector(`#cargosUserEditGroup span`).classList.remove('fa-circle-check');
                document.querySelector(`#cargosUserEditGroup span`).classList.add('fa-circle-xmark');
                document.querySelector(`#cargosUserEditGroup .formV-input-error`).classList.add('formV-input-error-activo');
                cargoUserEdit = false;
                seleccionarCargoEdit();
            }else {
                document.getElementById(`cargosUserEditGroup`).classList.remove('formV-group-incorrecto');
                document.getElementById(`cargosUserEditGroup`).classList.add('formV-group-correcto');
                document.querySelector(`#cargosUserEditGroup span`).classList.add('fa-circle-check');
                document.querySelector(`#cargosUserEditGroup span`).classList.remove('fa-circle-xmark');
                document.querySelector(`#cargosUserEditGroup .formV-input-error`).classList.remove('formV-input-error-activo');
                cargoUserEdit = true;
            }
        }

        function validarUsernameEdit() {
            if (expresiones.usuario.test(formularioEditarPerfil.usernameEdit.value)) {
                validarCampoEdit(expresiones.usuario, formularioEditarPerfil.usernameEdit, 'usernameEdit');
            }else {
                validarCampoEdit(expresiones.usuario, formularioEditarPerfil.usernameEdit, 'usernameEdit');
            }
        }

        function validarPasswordEdit() {
            if (expresiones.password.test(formularioEditarPerfil.passwordEdit.value)) {
                validarCampoEdit(expresiones.password, formularioEditarPerfil.passwordEdit, 'passwordEdit');
            }else {
                validarCampoEdit(expresiones.password, formularioEditarPerfil.passwordEdit, 'passwordEdit');
            }
        }

        validarNombreEdit();
        validarApellidoEdit();
        validarCorreoEdit();
        validarCargoEdit();
        validarUsernameEdit();
        validarPasswordEdit();  

        inputsEditarPerfil.forEach((input) => {
            input.addEventListener('keyup', validarFormEdit);
            input.addEventListener('blur', validarFormEdit);
        });

        if (camposEdit.nombreUserEdit && camposEdit.apellidoUserEdit && camposEdit.correoUserEdit && cargoUserEdit && camposEdit.usernameEdit && camposEdit.passwordEdit) {
            modificarPerfil();
            document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
                icono.classList.remove('formV-group-correcto');
            });
        }

    });

</script>