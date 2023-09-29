function agregarPreguntasSegUser() {

	$.ajax({
		url: 'procesos/usuarios/agregarPreguntasSegUser.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formPreguntasSegUser').serialize(),
		success:function(data){

			var username = document.getElementById('usernameFinish')
			var usernameFinish = username.value;

			if (data == 1) {
				$('#formRegistrarUser')[0].reset();
				$('#formPreguntasSegUser')[0].reset();
				$('#btnCerrarModalPreguntasSegUser').click();
				Swal.fire({
					title: 'Registro Exitoso!',
					html: 'Usuario registrado con el nombre: <b>' + usernameFinish + '</b>',
					icon: 'success',
					allowOutsideClick: false,
					allowEscapeKey: false
				}).then((result) => {
					if (result.value){
						window.location.href = "login.php";
					}
				});
			} else if (data == 2) {
				$('#formRegistrarUser')[0].reset();
				$('#formPreguntasSegUser')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;

}



var registrarUser = () => {

	$.ajax({
		url: 'procesos/usuarios/agregarUsuario.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistrarUser').serialize(),
		success:function(datos){

			var data = datos.data;
			var idUsuario = datos.idUsuario;
			var username = datos.username;

			// Si no funcionaba lo de arriba se pudo haber hecho esto de abajo tambien, primero el stringify para convertirlo a JSON y despues el parse para convetirlo a JavaScript
			// var datos1 = JSON.stringify(datos);
			// var datos2 = JSON.parse(datos1);
			// console.log("data"+datos2.data);
			// console.log("idUsuario"+datos2.idUsuario);

			if (data == 1) {
				$('#idUsuario').val(idUsuario);
				$('#usernameFinish').val(username);
				$('#modalPreguntasSegUser').modal('show');
			}
			if (data == 2) {
				$('#formRegistrarUser')[0].reset();
				Swal.fire({
					title: 'Usuario Existente!',
					text: 'Por favor ingresa otro nombre de Usuario!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			}
			if (data == 3) {
				$('#formRegistrarUser')[0].reset();
				Swal.fire({
					title: 'Cargo Ocupado!',
					text: 'Ya hay un director registrado en el sistema!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			}
			if (data == 4) {
				$('#formRegistrarUser')[0].reset();
				Swal.fire({
					title: 'Cargo Ocupado!',
					text: 'Ya hay un sub-director administrativo registrado en el sistema!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			}
			if (data == 5) {
				$('#formRegistrarUser')[0].reset();
				Swal.fire({
					title: 'Cargo Ocupado!',
					text: 'Ya hay un sub-director académico registrado en el sistema!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			}
			if (data == 6) {
				$('#formRegistrarUser')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});	
	
	return false;

}



// VALIDACIÓN DEL FORMULARIO (FORMULARIO DE REGISTRO DE USUARIOS)
var formulario = document.getElementById('formRegistrarUser');
// Con querySelectorAll se almacenan todos los datos indicados en un array, se debe especificar de donde se agarran los datos y que tipos
// de datos se van a agarrar
var inputs = document.querySelectorAll('#formRegistrarUser input');
// Con elements se accede a todos los elementos del elemento padre
// var elementos = formulario.elements;

var expresiones = {
	nombre : /^[a-zA-ZÀ-ÿ\s]{3,30}$/,
	apellido : /^[a-zA-ZÀ-ÿ\s]{3,30}$/,
	correo : /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/,
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,
	password: /^.{8,16}$/
	// numeros: /^\d{7,14}$/
}

var campos = {
	nombreUser: false,
	apellidoUser: false,
	correoUser: false,
	username: false,
	password: false
}

var validarForm = (e) => {

	switch (e.target.name) {

		case "nombreUser":
		validarCampo(expresiones.nombre, e.target, e.target.name);
		break;

		case "apellidoUser":
		validarCampo(expresiones.apellido, e.target, e.target.name);
		break;

		case "correoUser":
		validarCampo(expresiones.correo, e.target, e.target.name);
		break;

		case "username":
		validarCampo(expresiones.usuario, e.target, e.target.name);
		break;

		case "password":
		validarCampo(expresiones.password, e.target, e.target.name);
		break;

	}

}

var validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		campos[campo] = false;
	}
}



function iniciarSesion(){

    $.ajax({
        url: "procesos/usuarios/iniciarSesion.php",
        type: "POST",
        datatype: "json",
        data: $('#formIniciarSesion').serialize(),
        success:function(data){

        	var username = document.getElementById('username')
			var usernameFinish = username.value;

            if (data == 1){
                $('#formIniciarSesion')[0].reset();
                Swal.fire({
                    title: 'Datos Correctos!',
                    html: 'Has inicado sesión como: <b>' + usernameFinish + '</b>',
                    icon: 'success',
                    confirmButtonText: 'Continuar',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                	if (result.value){
                		window.location.href = "vistas/inicio.php";
                	}
                })
            }

            if (data == 2) {
                $('#formIniciarSesion')[0].reset();
                Swal.fire({
                    title: 'Usuario Incorrecto!',
                    html: 'No existe ningún usuario con el nombre: <b>' + usernameFinish + '</b>',
                    icon: 'error',
                    confirmButtonText: 'Reintentar',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }
            
            if (data == 3) {
                $('#formIniciarSesion')[0].reset();
                Swal.fire({
                    title: 'Contraseña Incorrecta!',
                    text: 'La contraseña ingresada no es correcta!',
                    icon: 'error',
                    confirmButtonText: 'Reintentar',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }

            if (data == 4) {

            	Swal.fire({
            		title: 'Código Incorrecto!',
            		text: "¿Desea iniciar sesión sin permisos para inscribir?.",
            		icon: 'warning',
            		allowOutsideClick: false,
            		allowEscapeKey: false,
            		showCancelButton: true,
            		confirmButtonColor: '#3085d6',
            		cancelButtonColor: '#d33',
            		confirmButtonText: 'Si, Iniciar Sesión',
            		cancelButtonText: 'Reintentar'
            	}).then((result) => {
            		if (result.isConfirmed) {

            			$('#formIniciarSesion')[0].reset();
            			Swal.fire({
            				html: 'Has inicado sesión como: <b>' + usernameFinish + '</b>, no tienes permiso para inscribir alumnos.',
            				icon: 'success',
            				confirmButtonText: 'Continuar',
            				allowOutsideClick: false,
            				allowEscapeKey: false
            			}).then((result) => {
            				if (result.value){
            					window.location.href = "vistas/inicio.php";
            				}
            			});

            		} else {
            			$('#formIniciarSesion')[0].reset();
            		}
            	});

            }

        }

    });

    return false;
}



function resetModalEditarPerfil() {
	$('#formValidarUser')[0].reset();
	$('#formEditarPerfil')[0].reset();
	document.getElementById('divValidarUser').style.display = 'block';
	document.getElementById('divEditarPerfil').style.display = 'none';
	document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
		icono.classList.remove('formV-group-correcto');
	});
	document.querySelectorAll('.formV-group-incorrecto').forEach((icono) => {
		icono.classList.remove('formV-group-incorrecto');
	});
	document.querySelectorAll('.formV-input-error').forEach((mensaje) => {
		mensaje.classList.remove('formV-input-error-activo');
	})
}



function validarUser() {

	var username = document.getElementById('validarUsername');
	var usernameFinish = username.value;

	$.ajax({
		url: '../procesos/usuarios/validarUser.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formValidarUser').serialize(),
		success:function(data){

			if (data == 1) {

				$('#formValidarUser')[0].reset();
				Swal.fire({
					title: 'Validación Exitosa!',
					html: 'Usuario: <b>' + usernameFinish + '</b>, validado correctamente!',
					icon: 'success',
					allowOutsideClick: false,
					allowEscapeKey: false
				}).then((result) => {
					if (result.value){

						document.getElementById('divValidarUser').style.display = 'none';
						document.getElementById('divEditarPerfil').style.display = 'block';

					}
				});

			}

			if (data == 2) {
                $('#formValidarUser')[0].reset();
                Swal.fire({
                    title: 'Usuario Incorrecto!',
                    html: 'No iniciaste sesión con el usuario: <b>' + usernameFinish + '</b>',
                    icon: 'error',
                    confirmButtonText: 'Reintentar',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }
            
            if (data == 3) {
                $('#formValidarUser')[0].reset();
                Swal.fire({
                    title: 'Contraseña Incorrecta!',
                    text: 'La contraseña ingresada no es correcta!',
                    icon: 'error',
                    confirmButtonText: 'Reintentar',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }

		}
	});

	return false;
}



function editarPerfil(idUsuario) {

	idUsuario = parseInt(idUsuario);

	$.ajax({
		url: '../procesos/usuarios/editarPerfil.php',
		type: 'POST',
		dataType: 'json',
		data: 'idUsuario=' + idUsuario,
		success:function(data){

			$('#idUsuarioEdit').val(data.id_usuario);
			$('#nombreUserEdit').val(data.nombreUser);
			$('#apellidoUserEdit').val(data.apellidoUser);
			$('#correoUserEdit').val(data.correoUser);
			$('#cargoUserOld').val(data.id_cargoUser);
			$('#cargosUserEdit').val(data.id_cargoUser);
			$('#usernameOld').val(data.username);

		}
	});
	
}



// VALIDACIÓN DEL FORMULARIO (FORMULARIO DE MODIFICAR USUARIO)
var formularioEditarPerfil = document.getElementById('formEditarPerfil');
var inputsEditarPerfil = document.querySelectorAll('#formEditarPerfil input');

var camposEdit = {
	nombreUserEdit: false,
	apellidoUserEdit: false,
	correoUserEdit: false,
	usernameEdit: false,
	passwordEdit: false
}

var validarFormEdit = (e) => {

	switch (e.target.name) {

		case "nombreUserEdit":
		validarCampoEdit(expresiones.nombre, e.target, e.target.name);
		break;

		case "apellidoUserEdit":
		validarCampoEdit(expresiones.apellido, e.target, e.target.name);
		break;

		case "correoUserEdit":
		validarCampoEdit(expresiones.correo, e.target, e.target.name);
		break;

		case "usernameEdit":
		validarCampoEdit(expresiones.usuario, e.target, e.target.name);
		break;

		case "passwordEdit":
		validarCampoEdit(expresiones.password, e.target, e.target.name);
		break;

	}

}

var validarCampoEdit = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposEdit[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		camposEdit[campo] = false;
	}
}



function modificarPerfil() {

	$.ajax({
		url: '../procesos/usuarios/modificarPerfil.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarPerfil').serialize(),
		success:function(data){

			if (data == 1) {
				$('#btnCerrarModalEditarPerfil').click();
                resetModalEditarPerfil();
                Swal.fire({
                    title: 'Modificación Exitosa!',
                    text: 'El perfil ha sido actualizado correctamente, por razones de seguridad se cerrará la sesión.',
                    icon: 'success',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                    if (result.value){
                        window.location.href = "../logout.php";
                    }
                });
            } else if (data == 2) {
                Swal.fire({
                    title: 'Usuario Existente!',
                    text: 'Por favor ingresa otro nombre de Usuario!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            } else if (data == 3) {
                Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un director registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            } else if (data == 4) {
                Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un sub-director administrativo registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            } else if (data == 5) {
                 Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un sub-director academico registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            } else if (data == 6) {
               alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
            }

		}
	});
	

	return false;
}



function editarCargoOtroUser(idUsuario) {

	idUsuario = parseInt(idUsuario);

	$.ajax({
		url: '../procesos/usuarios/editarCargoOtroUser.php',
		type: 'POST',
		dataType: 'json',
		data: 'idUsuario=' + idUsuario,
		success:function(data){

			$('#idOtroUserEdit').val(data.id_usuario);
			$('#cargoOtroUserOld').val(data.id_cargoUser);
			$('#cargoOtroUserEdit').val(data.id_cargoUser);

		}
	});
	
}



function modificarCargoOtroUser() {

	$.ajax({
		url: '../procesos/usuarios/modificarCargoOtroUser.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarCargoOtroUser').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
				$('#btnCerrarModalEditarCargoOtroUser').click();
				alertify.success('La Función del Usuario fue Modificada con Exito!');
			}

			if (data == 2) {
                Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un director registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }

            if (data == 3) {
                Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un sub-director administrativo registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }

            if (data == 4) {
                 Swal.fire({
                    title: 'Cargo Ocupado!',
                    text: 'Ya hay un sub-director academico registrado en el sistema!',
                    icon: 'error',
                    allowOutsideClick: false,
                    allowEscapeKey: false
                });
            }

			if (data == 5) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function eliminarOtroUser(idUsuario) {

	idUsuario = parseInt(idUsuario);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado, el usuario tendrá que registrarse nuevamente!!!.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
    	if (result.isConfirmed) {

    		$.ajax({
    			url: '../procesos/usuarios/eliminarOtroUser.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idUsuario=' + idUsuario,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaUsuarios').load('usuarios/tablaUsuarios.php');
    					alertify.success('Usuario Eliminado con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});    		

    	}
    });

}



// FUNCIONES PARA RECUPERAR CONTRASEÑA
function recuperarAcceso() {

	$.ajax({
		url: 'procesos/usuarios/recuperarAcceso.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRecuperarAcceso').serialize(),
		success:function(datos){

			var username = document.getElementById('usernameRecovery')
			var usernameFinish = username.value;

			if (datos.data == 1) {

				$('#modalRecuperarAcceso').modal('show');
				$('#idUserRecovery').val(datos.info.id_usuario);
				$('#pregunta1Recovery').html(datos.info.pregunta1 + ":");
				$('#pregunta2Recovery').html(datos.info.pregunta2 + ":");
				$('#pregunta3Recovery').html(datos.info.pregunta3 + ":");

			}

			if (datos.data == 2) {

				$('#formRecuperarAcceso')[0].reset();
				Swal.fire({
					title: 'Usuario Incorrecto!',
					html: 'No existe ningún usuario registrado con el nombre: <b>' + usernameFinish + '</b>',
					icon: 'error',
					confirmButtonText: 'Reintentar',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
				
			}

		}
	});
	
	return false;
}

function resetModalRecuperarAcceso() {

	$('#formConfirmarPreguntasSegUser')[0].reset();
	$('#formNewPassword')[0].reset();
	mostrarDiv('divConfirmarPreguntasSegUser');

	document.querySelectorAll('.formV-group-correcto').forEach((icono) => {
		icono.classList.remove('formV-group-correcto');
	});
	document.querySelectorAll('.formV-group-incorrecto').forEach((icono) => {
		icono.classList.remove('formV-group-incorrecto');
	});
	document.querySelectorAll('.formV-input-error').forEach((mensaje) => {
		mensaje.classList.remove('formV-input-error-activo');
	})

}

var mostrarDiv = (idDiv) => {
	document.querySelectorAll('.mostrar').forEach((div) => {
		div.classList.add('ocultar');
		div.classList.remove('mostrar');
	});
	document.querySelector(`#${idDiv}`).classList.add('mostrar');
	document.querySelector(`#${idDiv}`).classList.remove('ocultar');
}

function confirmarPreguntasSegUser() {

	$.ajax({
		url: 'procesos/usuarios/confirmarPreguntasSegUser.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formConfirmarPreguntasSegUser').serialize(),
		success:function(datos){

			if (datos.data == 1) {

				mostrarDiv('divGenerarPassword');
				$('#idUserRecoveryNew').val(datos.idUsuario);

			}

			if (datos.data == 2) {
				alertify.error('Las respuestas ingresadas son incorrectas!!!');
			}

		}
	});
	
	return false;
}

// VALIDACIÓN DE LA NUEVA CONTRASEÑA
var formularioNewPass = document.getElementById('formNewPassword');
var inputsNewPass = document.querySelectorAll('#formNewPassword input');

var camposNewPass = {
	newPassword: false
}

var validarFormNewPass = (e) => {

	switch (e.target.name) {

		case "newPassword":
		validarCampoNewPass(expresiones.password, e.target, e.target.name);
		break;

	}

}

var validarCampoNewPass = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`${campo}Group`).classList.remove('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.remove('formV-input-error-activo');
		camposNewPass[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formV-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formV-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formV-input-error`).classList.add('formV-input-error-activo');
		camposNewPass[campo] = false;
	}
}

function modificarPassword() {

	$.ajax({
		url: 'procesos/usuarios/modificarPassword.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formNewPassword').serialize(),
		success:function(data){

			if (data == 1) {
				$('#btnCerrarModalRecuperarAcceso').click();
				$('#btnLogin').click();
				resetModalRecuperarAcceso();
				alertify.success('Nueva contraseña generada con exito, ahora puede acceder al sistema!!!')
			}

			if (data == 2) {
				resetModalRecuperarAcceso();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
	
}