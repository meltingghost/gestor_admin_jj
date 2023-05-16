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
				Swal.fire({
					title: 'Error!',
					text: 'Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
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
				Swal.fire({
					title: 'Error!',
					text: 'Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!',
					icon: 'error',
					allowOutsideClick: false,
					allowEscapeKey: false
				});
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
		document.getElementById(`${campo}Group`).classList.remove('formU-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.add('formU-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formU-input-error`).classList.remove('formU-input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`${campo}Group`).classList.add('formU-group-incorrecto');
		document.getElementById(`${campo}Group`).classList.remove('formU-group-correcto');
		document.querySelector(`#${campo}Group span`).classList.remove('fa-circle-check');
		document.querySelector(`#${campo}Group span`).classList.add('fa-circle-xmark');
		document.querySelector(`#${campo}Group .formU-input-error`).classList.add('formU-input-error-activo');
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