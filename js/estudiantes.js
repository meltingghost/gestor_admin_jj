function resetFormAgregarLiteral() {
	$('#formAgregarLiteral')[0].reset();
}



function agregarLiteral() {

	$.ajax({
		url: '../procesos/estudiantes/agregarLiteral.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarLiteral').serialize(),
		success:function(data) {

			if (data == 1) {
				$('#btnCerrarModalAgregarLiteral').click();
				$('#tablaLiteral').load("estudiantes/tablaLiteral.php");
				alertify.success('Literal Agregada con Exito!');
				resetFormAgregarLiteral();
			}

			if (data == 2) {
				resetFormAgregarLiteral();
				alertify.warning('Esta Literal ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				resetFormAgregarLiteral();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}



function editarLiteral(idLiteral) {

	idLiteral = parseInt(idLiteral);

	$.ajax({
		url: '../procesos/estudiantes/editarLiteral.php',
		type: 'POST',
		dataType: 'json',
		data: 'idLiteral=' + idLiteral,
		success:function(data) {

			$('#idLiteralEdit').val(data.id_literal);
			$('#letraLiteralOld').val(data.letraLiteral);
			$('#letraLiteralEdit').val(data.letraLiteral);
			$('#descripcionLiteralEdit').val(data.descripcionLiteral);

		}
	});

}



function modificarLiteral() {

	$.ajax({
		url: '../procesos/estudiantes/modificarLiteral.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarLiteral').serialize(),
		success:function(data) {

			if (data == 1) {
				$('#tablaLiteral').load("estudiantes/tablaLiteral.php");
				$('#btnCerrarModalEditarLiteral').click();
				alertify.success('Literal Modificada con Exito!');
			}

			if (data == 2) {
				alertify.warning('Esta Literal ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}



function eliminarLiteral(idLiteral) {

	idLiteral = parseInt(idLiteral);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminada no podrá recuperarse la literal!!!.",
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
    			url: '../procesos/estudiantes/eliminarLiteral.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idLiteral=' + idLiteral,
    			success:function(data) {

    				if (data == 1) {
    					$('#tablaLiteral').load("estudiantes/tablaLiteral.php");
    					alertify.success('Literal Eliminada con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});
    		

    	}
    });

}



function agregarCodigoInscripcion(){

	$.ajax({
		url: '../procesos/estudiantes/agregarCodigoInscripcion.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistrarCodigoInscripcion').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaCodigoInscripcion').load('estudiantes/tablaCodigoInscripcion.php');
				alertify.success('Codigo Agregado con Exito!');
				$('#formRegistrarCodigoInscripcion')[0].reset();
			}

			if (data == 2) {
				alertify.warning('Este Código ya fue usado, por favor ingrese otro!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}



function agregarGrado() {

	$.ajax({
		url: '../procesos/estudiantes/agregarGrado.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistrarGrado').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaGrados').load('estudiantes/tablaGrados.php');
				alertify.success('Grado Agregado con Exito!');
				$('#formRegistrarGrado')[0].reset();
				$('#cargarGradosSeccion').load('estudiantes/selectGradosSeccion.php');
			}

			if (data == 2) {
				alertify.warning('Este Grado ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarGrado(idGrado) {

	idGrado = parseInt(idGrado);

	$.ajax({
		url: '../procesos/estudiantes/editarGrado.php',
		type: 'POST',
		dataType: 'json',
		data: 'idGrado=' + idGrado,
		success:function(data){

			$('#idGradoEdit').val(data.id_grado);
			$('#numeroGradoOld').val(data.numeroGrado);
			$('#numeroGradoEdit').val(data.numeroGrado);

		}
	});

}



function modificarGrado() {

	$.ajax({
		url: '../procesos/estudiantes/modificarGrado.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarGrado').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaGrados').load('estudiantes/tablaGrados.php');
				$('#btnCerrarModalEditarGrado').click();
				alertify.success('Grado Modificado con Exito!');
				$('#cargarGradosSeccion').load('estudiantes/selectGradosSeccion.php');
			}

			if (data == 2) {
				alertify.warning('Este Grado ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}



function eliminarGrado(idGrado) {

	idGrado = parseInt(idGrado);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado no podrá recuperarse el grado!!!.",
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
    			url: '../procesos/estudiantes/eliminarGrado.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idGrado=' + idGrado,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaGrados').load('estudiantes/tablaGrados.php');
    					alertify.success('Grado Eliminado con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function agregarSeccion() {

	$.ajax({
		url: '../procesos/estudiantes/agregarSeccion.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistrarSeccion').serialize(),
		success:function(data) {

			if (data == 1) {
				$('#tablaSecciones').load('estudiantes/tablaSecciones.php');
				alertify.success('Sección Agregada con Exito!');
				$('#formRegistrarSeccion')[0].reset();
			}

			if (data == 2) {
				alertify.warning('Esta Sección ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}



function editarSeccion(idSeccion) {

	idSeccion = parseInt(idSeccion);

	$.ajax({
		url: '../procesos/estudiantes/editarSeccion.php',
		type: 'POST',
		dataType: 'json',
		data: 'idSeccion=' + idSeccion,
		success:function(data){

			$('#idSeccionEdit').val(data.id_seccion);
			$('#idGradoSeccionEdit').val(data.id_grado_seccion);
			$('#seccionOld').val(data.letraSeccion);
			$('#seccionEdit').val(data.letraSeccion);
			$('#gradoSeccionEdit').val(data.grado);

		}
	});
	

}



function modificarSeccion() {

	$.ajax({
		url: '../procesos/estudiantes/modificarSeccion.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarSeccion').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaSecciones').load('estudiantes/tablaSecciones.php');
				alertify.success('Sección Modificada con Exito!');
				$('#btnCerrarModalEditarSeccion').click();
			}

			if (data == 2) {
				alertify.warning('Esta Sección ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function eliminarSeccion(idSeccion) {

	idSeccion = parseInt(idSeccion);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminada no podrá recuperarse la seccion!!!.",
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
    			url: '../procesos/estudiantes/eliminarSeccion.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idSeccion=' + idSeccion,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaSecciones').load('estudiantes/tablaSecciones.php');
    					alertify.success('Sección Eliminada con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});
    		
    	}
    });

}



function resetFormAgregarAnioEscolar() {
	$('#formAgregarAnioEscolar')[0].reset();
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



// VALIDACIÓN DEL FORMULARIO (FORMULARIO DE REGISTRO DE AÑO ESCOLAR)
var formularioAgregarAnioEscolar = document.getElementById('formAgregarAnioEscolar');
var inputsAgregarAnioEscolar = document.querySelectorAll('#formAgregarAnioEscolar input');

var camposAgregarAnioEscolar = {
	ddmmi: false,
	yyi: false,
	ddmmf: false,
	yyf: false
}



function agregarAnioEscolar() {
	
	$.ajax({
		url: '../procesos/estudiantes/agregarAnioEscolar.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarAnioEscolar').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaAnioEscolar').load('estudiantes/tablaAnioEscolar.php');
				alertify.success('Año Escolar Agregado con Exito!');
				$('#btnCerrarModalAgregarAnioEscolar').click();
				resetFormAgregarAnioEscolar();
			}

			if (data == 2) {
				alertify.warning('Este año escolar ya finalizo, por favor ingrese otro!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function editarAnioEscolar(idAnioEscolar) {

	idAnioEscolar = parseInt(idAnioEscolar);

	$.ajax({
		url: '../procesos/estudiantes/editarAnioEscolar.php',
		type: 'POST',
		dataType: 'json',
		data: 'idAnioEscolar=' + idAnioEscolar,
		success:function(data){

			$('#idAnioEscolarEdit').val(data.id_anioEscolar);
			$('#ddmmiEdit').val(data.ddmmi);
			$('#yyiEdit').val(data.yyi);
			$('#ddmmfEdit').val(data.ddmmf);
			$('#yyfEdit').val(data.yyf);

		}
	});
	

}



function modificarAnioEscolar() {

	$.ajax({
		url: '../procesos/estudiantes/modificarAnioEscolar.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarAnioEscolar').serialize(),
		success:function(data) {

			if (data == 1) {
				$('#tablaAnioEscolar').load('estudiantes/tablaAnioEscolar.php');
				alertify.success('Año Escolar Modificado con Exito!');
				$('#btnCerrarModalEditarAnioEscolar').click();
			}

			if (data == 2) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function resetModalAgregarEstudianteI() {

	$('#formAgregarEstudianteI')[0].reset();
    document.getElementById('aggEIPart1').style.display = 'block';
	document.getElementById('aggEIPart2').style.display = 'none';
	document.getElementById('aggEIPart3').style.display = 'none';
	document.getElementById('aggEIPart4').style.display = 'none';
	document.getElementById('aggEIPart5').style.display = 'none';
	document.getElementById('step2').className = document.getElementById('step2').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step3').className = document.getElementById('step3').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step1').className += " active";

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



function agregarEstudianteI() {

	$.ajax({
		url: '../procesos/estudiantes/agregarEstudianteI.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarEstudianteI').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(datos) {

			var data = datos.data;
			var estudiante = datos.idEstudiante;

			if (data == 1) {

				$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
				$('#btnCerrarModalAgregarEstudianteI').click();
				$('#cargarEstudianteFormalizar').load('estudiantes/selectEstudianteFormalizar.php');
				resetModalAgregarEstudianteI();
				document.getElementById('animacionRing').style.display = 'none';
				Swal.fire({
					title: 'Agregado con Exito!!!',
					text: "El estudiante fue agregado correctamente, puede formalizar su inscripción ahora o puede dejarla para más tarde.",
					icon: 'success',
					allowOutsideClick: false,
					allowEscapeKey: false,
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Formalizar Ahora',
					cancelButtonText: 'Ahora no'
				}).then((result) => {
					if (result.isConfirmed) {

						$('#modalFormalizarInscripcionE').modal('show');
						mostrarEstudianteInscrito(estudiante);
						mostrarGradoFormalizar(estudiante);
						mostrarSeccionFormalizarEstudiante(estudiante);
						mostrarAnioEscolarFormalizar(estudiante);
						mostrarLiteralFormalizar(estudiante);    		

					}else{
						alertify.success('Estudiante agregado con exito, deberá formalizar su inscripción más adelante.');
						resetModalFormalizarE();  
					}
				});

			}

			if (data == 2) {
				document.getElementById('animacionRing').style.display = 'none';
				document.getElementById('aggEIPart1').style.display = 'block';
				document.getElementById('aggEIPart2').style.display = 'none';
				document.getElementById('aggEIPart3').style.display = 'none';
				document.getElementById('aggEIPart4').style.display = 'none';
				document.getElementById('aggEIPart5').style.display = 'none';
				document.getElementById('step2').className = document.getElementById('step2').className.replace( /(?:^|\s)active(?!\S)/g , '' );
				document.getElementById('step3').className = document.getElementById('step3').className.replace( /(?:^|\s)active(?!\S)/g , '' );
				document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
				document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
				document.getElementById('step1').className += " active";
				var cedula = document.getElementById('cEscolarEI');
				cedula.focus();
				alertify.warning('Esta cédula ya esta registrada en el sistema!!!.');
			}

			if (data == 3) {
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function editarEstudianteI(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	$.ajax({
		url: '../procesos/estudiantes/editarEstudianteI.php',
		type: 'POST',
		dataType: 'json',
		data: 'idEstudiante=' + idEstudiante,
		success:function(data){

			$('#idEstudianteEdit').val(data.id_estudiante);
			$('#apellidosEIEdit').val(data.apellidosE);
			$('#nombresEIEdit').val(data.nombresE);
			$('#cEscolarEIOld').val(data.cedulaE);
			$('#cEscolarEIEdit').val(data.cedulaE);
			$('#fechaNacimientoEIEdit').val(data.fechaNacimientoE);
			$('#edadAniosEIEdit').val(data.edadAniosE);
			$('#edadMesesEIEdit').val(data.edadMesesE);
			$('#lugarNacimientoEIEdit').val(data.lugarNacimientoE);
			$('#estadoNatalEIEdit').val(data.idEstadoNatalE);
			$('#municipioNatalEIEdit').html('<option value="' +  data.idMunicipioNatalE + '">' + data.municipio + '</option>');
			$('#parroquiaNatalEIEdit').html('<option value="' +  data.idParroquiaNatalE + '">' + data.parroquia + '</option>');
			$('#direccionHabitacionEIEdit').val(data.direccionHabitacionE);
			$('#parentescoREI1Edit').val(data.parentescoREI1);
			$('#nombreCompletoREI1Edit').val(data.nombreCompletoREI1);
			$('#cedulaREI1Edit').val(data.cedulaREI1);

			if (data.edadREI1 == 0) {
				$('#edadREI1Edit').val('');
			}else{
				$('#edadREI1Edit').val(data.edadREI1);
			}
			
			$('#nacionalidadREI1Edit').val(data.nacionalidadREI1);
			$('#gradoInstrucionREI1Edit').val(data.gradoInstrucionREI1);

			if (data.trabajaREI1 == 'Si') {
				$('#trabajaREI1EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI1Edit" id="siTrabajaREI1Edit" checked="checked" value="Si" class="form-check-input"> Si</label><br>');
			}else{
				$('#trabajaREI1EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI1Edit" id="siTrabajaREI1Edit" value="Si" class="form-check-input"> Si</label><br>');
			}

			if (data.trabajaREI1 == 'No') {
				$('#trabajaREI1EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI1Edit" id="noTrabajaREI1Edit" checked="checked" value="No" class="form-check-input"> No</label><br>');
			}else{
				$('#trabajaREI1EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI1Edit" id="noTrabajaREI1Edit" value="No" class="form-check-input"> No</label><br>');
			}

			$('#direccionTrabajoREI1Edit').val(data.direccionTrabajoREI1);

			if (data.trabajaREI1 == 'Si') {
				$('#viveREI1EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI1Edit" id="siViveREI1Edit" checked="checked" value="Si" class="form-check-input"> Si</label><br>');
			}else{
				$('#viveREI1EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI1Edit" id="siViveREI1Edit" value="Si" class="form-check-input"> Si</label><br>');
			}

			if (data.trabajaREI1 == 'No') {
				$('#viveREI1EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI1Edit" id="noViveREI1Edit" checked="checked" value="No" class="form-check-input"> No</label><br>');
			}else{
				$('#viveREI1EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI1Edit" id="noViveREI1Edit" value="No" class="form-check-input"> No</label><br>');
			}

			$('#codigoTelCasaREI1Edit').val(data.codigoTelCasaREI1);
			$('#telefonoCasaREI1Edit').val(data.telefonoCasaREI1);
			$('#codigoTelCelREI1Edit').val(data.codigoTelCelREI1);
			$('#telefonoCelREI1Edit').val(data.telefonoCelREI1);
			$('#direccionHabitacionREI1Edit').val(data.direccionHabitacionREI1);
			if (data.parentescoREI2 != "") {
				$('#parentescoREI2Edit').html('<option value="' +  data.parentescoREI2 + '">' + data.parentescoREI2 + '</option>');
			} else {
				$('#parentescoREI2Edit').html('<option selected="" disabled="" value="">Seleccione el parentesco</option>');
			}

			$('#nombreCompletoREI2Edit').val(data.nombreCompletoREI2);

			if (data.cedulaREI2 == 0) {
				$('#cedulaREI2Edit').val('');
			}else{
				$('#cedulaREI2Edit').val(data.cedulaREI2);
			}

			if (data.edadREI2 == 0) {
				$('#edadREI2Edit').val('');
			}else{
				$('#edadREI2Edit').val(data.edadREI2);
			}
			
			$('#nacionalidadREI2Edit').val(data.nacionalidadREI2);
			$('#gradoInstrucionREI2Edit').val(data.gradoInstrucionREI2);

			if (data.trabajaREI2 == 'Si') {
				$('#trabajaREI2EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI2Edit" id="siTrabajaREI2Edit" checked="checked" value="Si" class="form-check-input"> Si</label><br>');
			}else{
				$('#trabajaREI2EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI2Edit" id="siTrabajaREI2Edit" value="Si" class="form-check-input"> Si</label><br>');
			}

			if (data.trabajaREI2 == 'No') {
				$('#trabajaREI2EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI2Edit" id="noTrabajaREI2Edit" checked="checked" value="No" class="form-check-input"> No</label><br>');
			}else{
				$('#trabajaREI2EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="trabajaREI2Edit" id="noTrabajaREI2Edit" value="No" class="form-check-input"> No</label><br>');
			}

			$('#direccionTrabajoREI2Edit').val(data.direccionTrabajoREI2);

			if (data.trabajaREI2 == 'Si') {
				$('#viveREI2EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI2Edit" id="siViveREI2Edit" checked="checked" value="Si" class="form-check-input"> Si</label><br>');
			}else{
				$('#viveREI2EditSi').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI2Edit" id="siViveREI2Edit" value="Si" class="form-check-input"> Si</label><br>');
			}

			if (data.trabajaREI2 == 'No') {
				$('#viveREI2EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI2Edit" id="noViveREI2Edit" checked="checked" value="No" class="form-check-input"> No</label><br>');
			}else{
				$('#viveREI2EditNo').html('<label class="form-check-label formV-label"><input type="radio" name="viveREI2Edit" id="noViveREI2Edit" value="No" class="form-check-input"> No</label><br>');
			}

			$('#codigoTelCasaREI2Edit').val(data.codigoTelCasaREI2);
			$('#telefonoCasaREI2Edit').val(data.telefonoCasaREI2);
			$('#codigoTelCelREI2Edit').val(data.codigoTelCelREI2);
			$('#telefonoCelREI2Edit').val(data.telefonoCelREI2);
			$('#direccionHabitacionREI2Edit').val(data.direccionHabitacionREI2);

			if (data.situacionPadresEI == 'Conviven') {
				$('#situacionPadresEIEditConviven').html('<label class="form-check-label formV-label"><input type="radio" name="situacionPadresEIEdit" id="convivenSituacionPadresEIEdit" checked="checked" value="Conviven" class="form-check-input"> Conviven</label><br>');
			}else{
				$('#situacionPadresEIEditConviven').html('<label class="form-check-label formV-label"><input type="radio" name="situacionPadresEIEdit" id="convivenSituacionPadresEIEdit" value="Conviven" class="form-check-input"> Conviven</label><br>');
			}

			if (data.situacionPadresEI == 'Separados') {
				$('#situacionPadresEIEditSeparados').html('<label class="form-check-label formV-label"><input type="radio" name="situacionPadresEIEdit" id="separadosSituacionPadresEIEdit" checked="checked" value="Separados" class="form-check-input"> Separados</label><br>');
			}else{
				$('#situacionPadresEIEditSeparados').html('<label class="form-check-label formV-label"><input type="radio" name="situacionPadresEIEdit" id="separadosSituacionPadresEIEdit" value="Separados" class="form-check-input"> Separados</label><br>');
			}

			if (data.autorizacionFEI == 1) {
				$('#autorizacionFEIEditSi').html('<label class="form-check-label formV-label"><input type="checkbox" name="autorizacionFEIEdit" id="autorizacionFEIEdit" checked="checked" value="1" class="form-check-input" role="switch"> Marque solo si tiene autorización.</label>');
			}else{
				$('#autorizacionFEIEditSi').html('<label class="form-check-label formV-label"><input type="checkbox" name="autorizacionFEIEdit" id="autorizacionFEIEdit" value="1" class="form-check-input" role="switch"> Marque solo si tiene autorización.</label>');
			}

			$('#organismoAutorizacionFEIEdit').val(data.organismoAutorizacionFEI);

			if (data.autorizacionFEI == 1) {
				$('#tieneHermanosEIEditSi').html('<label class="form-check-label formV-label"><input type="checkbox" name="tieneHermanosEIEdit" id="tieneHermanosEIEdit" checked="checked" value="1" class="form-check-input" role="switch"> Marque solo si tiene hermanos.</label>');
			}else{
				$('#tieneHermanosEIEditSi').html('<label class="form-check-label formV-label"><input type="checkbox" name="tieneHermanosEIEdit" id="tieneHermanosEIEdit" value="1" class="form-check-input" role="switch"> Marque solo si tiene hermanos.</label>');
			}

			if (data.cuantosHermanosEI == 0) {
				$('#cuantosHermanosEIEdit').val('');
			}else{
				$('#cuantosHermanosEIEdit').val(data.cuantosHermanosEI);
			}

			if (data.cuantosHermanosVEI == 0) {
				$('#cuantosHermanosVEIEdit').val('');
			}else{
				$('#cuantosHermanosVEIEdit').val(data.cuantosHermanosVEI);
			}

			if (data.cuantosHermanosHEI == 0) {
				$('#cuantosHermanosHEIEdit').val('');
			}else{
				$('#cuantosHermanosHEIEdit').val(data.cuantosHermanosHEIEdit);
			}
			
			$('#lugarHermanosEIEdit').val(data.lugarHermanosEI);
			$('#quienDuermeEIEdit').val(data.quienDuermeEI);
			$('#quienJuegaEIEdit').val(data.quienJuegaEI);
			$('#localizarFEIEdit').val(data.localizarFEI);
			$('#dondeQuienViveEIEdit').val(data.dondeQuienViveEI);

			if (data.tipoPartoEI == 'Normal') {
				$('#tipoPartoEIEditNormal').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="normalTipoPartoEIEdit" checked="checked" value="Normal" class="form-check-input"> Normal</label><br>');
			}else{
				$('#tipoPartoEIEditNormal').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="normalTipoPartoEIEdit" value="Normal" class="form-check-input"> Normal</label><br>');
			}

			if (data.tipoPartoEI == 'Cesaría') {
				$('#tipoPartoEIEditCesaria').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="cesariaTipoPartoEIEdit" checked="checked" value="Cesaría" class="form-check-input"> Cesaría</label><br>');
			}else{
				$('#tipoPartoEIEditCesaria').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="cesariaTipoPartoEIEdit" value="Cesaría" class="form-check-input"> Cesaría</label><br>');
			}

			if (data.tipoPartoEI == 'Fórceps') {
				$('#tipoPartoEIEditForceps').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="forcepsTipoPartoEIEdit" checked="checked" value="Fórceps" class="form-check-input"> Fórceps</label><br>');
			}else{
				$('#tipoPartoEIEditForceps').html('<label class="form-check-label formV-label"><input type="radio" name="tipoPartoEIEdit" id="forcepsTipoPartoEIEdit" value="Fórceps" class="form-check-input"> Fórceps</label><br>');
			}

			$('#enfermedadesEIEdit').val(data.enfermedadesEI);
			$('#vacunasEIEdit').val(data.vacunasEI);
			$('#dificultadCaminarEIEdit').val(data.dificultadCaminarEI);
			$('#compromisoVisualEIEdit').val(data.compromisoVisualEI);
			$('#auditivosEIEdit').val(data.auditivosEI);
			$('#pronunciacionEIEdit').val(data.pronunciacionEI);
			$('#otrasEIEdit').val(data.otrasEI);
			$('#caracteristicasEIEdit').val(data.caracteristicasEI);
			$('#sueñoIntranquiloEIEdit').val(data.sueñoIntranquiloEI);
			$('#esfinteresEIEdit').val(data.esfinteresEI);
			$('#ayudaBanioEIEdit').val(data.ayudaBanioEI);
			$('#comeSoloEIEdit').val(data.comeSoloEI);
			$('#alimentosPrefiereEIEdit').val(data.alimentosPrefiereEI);
			$('#alergicoEIEdit').val(data.alergicoEI);
			$('#alimentosProhibidosEIEdit').val(data.alimentosProhibidosEI);
			$('#fiebreMedicamentoEIEdit').val(data.fiebreMedicamentoEI);
			$('#tallaOctubreEIEdit').val(data.tallaOctubreEI);
			$('#tallaEneroEIEdit').val(data.tallaEneroEI);
			$('#tallaAbrilEIEdit').val(data.tallaAbrilEI);
			$('#tallaJunioEIEdit').val(data.tallaJunioEI);
			$('#pesoOctubreEIEdit').val(data.pesoOctubreEI);
			$('#pesoEneroEIEdit').val(data.pesoEneroEI);
			$('#pesoAbrilEIEdit').val(data.pesoAbrilEI);
			$('#pesoJunioEIEdit').val(data.pesoJunioEI);

			if (data.atencionAdultaEI == 'Poca') {
				$('#atencionAdultaEIEditPoca').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="pocaAtencionAdultaEIEdit" checked="checked" value="Poca" class="form-check-input"> Poca</label><br>');
			}else{
				$('#atencionAdultaEIEditPoca').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="pocaAtencionAdultaEIEdit" value="Poca" class="form-check-input"> Poca</label><br>');
			}

			if (data.atencionAdultaEI == 'Mucha') {
				$('#atencionAdultaEIEditMucha').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="muchaAtencionAdultaEIEdit" checked="checked" value="Mucha" class="form-check-input"> Mucha</label><br>');
			}else{
				$('#atencionAdultaEIEditMucha').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="muchaAtencionAdultaEIEdit" value="Mucha" class="form-check-input"> Mucha</label><br>');
			}

			if (data.atencionAdultaEI == 'Normal') {
				$('#atencionAdultaEIEditNormal').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="normalAtencionAdultaEIEdit" checked="checked" value="Normal" class="form-check-input"> Normal</label><br>');
			}else{
				$('#atencionAdultaEIEditNormal').html('<label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEIEdit" id="normalAtencionAdultaEIEdit" value="Normal" class="form-check-input"> Normal</label><br>');
			}

			$('#entretieneSoloEIEdit').val(data.entretieneSoloEI);
			$('#expresaAfectoEIEdit').val(data.expresaAfectoEI);
			$('#enojaFrecuentementeEIEdit').val(data.enojaFrecuentementeEI);
			$('#porqueEnojaEIEdit').val(data.porqueEnojaEI);
			$('#miedosInfundidosEIEdit').val(data.miedosInfundidosEI);
			$('#intranquiloEIEdit').val(data.intranquiloEI);
			$('#tiempoViendoTvEIEdit').val(data.tiempoViendoTvEI);
			$('#programasTvEIEdit').val(data.programasTvEI);
			$('#tiempoGamingEIEdit').val(data.tiempoGamingEI);
			$('#gamesEIEdit').val(data.gamesEI);
			$('#actividadPeriodo1EIEdit').val(data.actividadPeriodo1EI);
			$('#actividadPeriodo2EIEdit').val(data.actividadPeriodo2EI);
			$('#actividadPeriodo3EIEdit').val(data.actividadPeriodo3EI);
			$('#infoCometeFaltaEIEdit').val(data.infoCometeFaltaEI);

		}
	});

}



function modificarEstudianteI() {

	$.ajax({
		url: '../procesos/estudiantes/modificarEstudianteI.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarEstudianteI').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(data){

			if (data == 1) {

				$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
				$('#btnCerrarModalEditarEIEdit').click();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.success('El estudiante fue modificado con exito.');

			}

			if (data == 2) {
				document.getElementById('animacionRing').style.display = 'none';
				var cedula = document.getElementById('cEscolarEIEdit');
				cedula.focus();
				alertify.warning('Esta cédula ya esta registrada en el sistema!!!.');
			}

			if (data == 3) {
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function informacionEI(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	$.ajax({
		url: '../procesos/estudiantes/editarEstudianteI.php',
		type: 'POST',
		dataType: 'json',
		data: "idEstudiante=" + idEstudiante,
		success:function(data){

			$('#apellidosEIInfo').html(data.apellidosE);
			$('#nombresEIInfo').html(data.nombresE);
			$('#cedulaEIInfo').html(data.cedulaE);
			$('#edadEIInfo').html(data.edadAniosE);
			$('#direccionEIInfo').html(data.direccionHabitacionE);
			$('#nombreCompletoREIInfo').html(data.nombreCompletoREI1);
			$('#cedulaREIInfo').html(data.cedulaREI1);
			$('#direccionTrabajoREIInfo').html(data.direccionTrabajoREI1);
			$('#telefonoCelREIInfo').html("+" + data.codigoTelCelREI1 + "-" + data.telefonoCelREI1);
			$('#direccionHabitaciónREIInfo').html(data.direccionHabitacionREI1);
			$('#telefonoCasaREIInfo').html("+" + data.codigoTelCasaREI1 + "-" + data.telefonoCasaREI1);
			$('#situacionPadresEIInfo').html(data.situacionPadresEI);

			if (data.autorizacionFEI == 1) {
				$('#autorizacionFEIInfo').html("Si");
			}else{
				$('#autorizacionFEIInfo').html("No");
			}

			$('#organismoAutorizacionFEIInfo').html(data.organismoAutorizacionFEI);

			if (data.tienerHermanos == 1) {
				$('#hermanosEIInfo').html("Si. ¿Cuantos? " + data.cuantosHermanosEI + " V: " + data.cuantosHermanosVEI + " H: " + data.cuantosHermanosHEI);
			}else{
				$('#hermanosEIInfo').html("No");
			}

			$('#localizarFEIInfo').html(data.localizarFEI);
			$('#dondeQuienViveEIInfo').html(data.dondeQuienViveEI);
			$('#fiebreMedicamentoEIInfo').html(data.fiebreMedicamentoEI);			

		}
	});
	
}



function eliminarEstudiante(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	Swal.fire({
        title: '¿Eliminar?',
        text: "El estudiante será movido a la papelera.",
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
    			url: '../procesos/estudiantes/eliminarEstudiante.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idEstudiante=' + idEstudiante,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
    					alertify.success('El estudiante fue movido a la papelera.');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function resetFormAgregarEstudianteB() {

	$('#formAgregarEstudianteB')[0].reset();
	document.getElementById('aggEBPart1').style.display = 'block';
	document.getElementById('aggEBPart2').style.display = 'none';
	document.getElementById('aggEBPart3').style.display = 'none';
	document.getElementById('step2EB').className = document.getElementById('step2EB').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step3EB').className = document.getElementById('step3EB').className.replace( /(?:^|\s)active(?!\S)/g , '' );
    document.getElementById('step1EB').className += " active";

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



function agregarEstudianteB() {

	$.ajax({
		url: '../procesos/estudiantes/agregarEstudianteB.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarEstudianteB').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(datos) {

			var data = datos.data;
			var estudiante = datos.idEstudiante;

			if (data == 1) {

				$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
				$('#btnCerrarModalAgregarEstudianteB').click();
				resetFormAgregarEstudianteB();
				$('#cargarEstudianteFormalizar').load('estudiantes/selectEstudianteFormalizar.php');
				document.getElementById('animacionRing').style.display = 'none';
				Swal.fire({
					title: 'Agregado con Exito!!!',
					text: "El estudiante fue agregado correctamente, puede formalizar su inscripción ahora o puede dejarla para más tarde.",
					icon: 'success',
					allowOutsideClick: false,
					allowEscapeKey: false,
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Formalizar Ahora',
					cancelButtonText: 'Ahora no'
				}).then((result) => {
					if (result.isConfirmed) {

						$('#modalFormalizarInscripcionE').modal('show');
						mostrarEstudianteInscrito(estudiante);
						mostrarGradoFormalizar(estudiante);
						mostrarSeccionFormalizarEstudiante(estudiante);
						mostrarAnioEscolarFormalizar(estudiante);
						mostrarLiteralFormalizar(estudiante);

					}else{
						alertify.success('Estudiante agregado con exito, deberá formalizar su inscripción más adelante.');
						resetModalFormalizarE();
					}
				});

			}

			if (data == 2) {
				document.getElementById('animacionRing').style.display = 'none';
				var cedula = document.getElementById('cedulaEB');
				cedula.focus();
				alertify.warning('Esta cédula ya esta registrada en el sistema!!!.');
			}

			if (data == 3) {
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarEstudianteB(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	$.ajax({
		url: '../procesos/estudiantes/editarEstudianteB.php',
		type: 'POST',
		dataType: 'json',
		data: 'idEstudiante=' + idEstudiante,
		success:function(data){

			$('#idEdit').val(data.id_estudiante);
			$('#apellidosEBEdit').val(data.apellidosE);
			$('#nombresEBEdit').val(data.nombresE);
			$('#lugarNacimientoEBEdit').val(data.lugarNacimientoE);
			$('#fechaNacimientoEBEdit').val(data.fechaNacimientoE);

			if (data.sexoEB == "Masculino") {
				$('#sexoEBEditMasculino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoEBEdit" id="masculino" class="form-check-input formV-input" checked="checked" value="Masculino"> Masculino</label><br>');
			} else {
				$('#sexoEBEditMasculino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoEBEdit" id="masculino" class="form-check-input formV-input" value="Masculino"> Masculino</label><br>');
			}

			if (data.sexoEB == "Femenino") {
				$('#sexoEBEditFemenino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoEBEdit" id="femenino" class="form-check-input formV-input" checked="checked" value="Femenino"> Femenino</label><br>');
			} else {
				$('#sexoEBEditFemenino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoEBEdit" id="femenino" class="form-check-input formV-input" value="Femenino"> Femenino</label><br>');
			}

			$('#sexoEBEdit').val(data.sexoEB);
			$('#edadEBEdit').val(data.edadAniosE);
			$('#cedulaOld').val(data.cedulaE);
			$('#cedulaEBEdit').val(data.cedulaE);
			$('#estadoNatalEBEdit').val(data.idEstadoNatalE);
			$('#municipioNatalEBEdit').html('<option value="' +  data.idMunicipioNatalE + '">' + data.municipio + '</option>');
			$('#parroquiaNatalEBEdit').html('<option value="' +  data.idParroquiaNatalE + '">' + data.parroquia + '</option>');
			$('#direccionEBEdit').val(data.direccionHabitacionE);

			$('#gradoCursarEBEdit').val(data.id_gradoCursar);
			$('#seccionGradoCursarEBEdit').html('<option value="' +  data.id_seccionGradoCursar + '">' + data.letraSeccion + '</option>');
			$('#anioEscolarEBEdit').val(data.id_anioEscolar);
			$('#literalEBEdit').val(data.id_literalGradoAnterior);

			$('#nombreCompletoREBEdit').val(data.nombreCompletoREB);
			$('#fechaNacimientoREBEdit').val(data.fechaNacimientoREB);
			$('#cedulaREBEdit').val(data.cedulaREB);
			$('#edadREBEdit').val(data.edadREB);
			$('#gradoInstruccionREBEdit').val(data.gradoInstruccionREB);
			$('#ocupacionREBEdit').val(data.ocupacionREB);
			$('#lugarTrabajoREBEdit').val(data.lugarTrabajoREB);
			$('#codigoTelREBEdit').val(data.codigoTelREB);
			$('#telefonoREBEdit').val(data.telefonoREB);
			$('#direccionHabitacionREBEdit').val(data.direccionDomicilioREB);
			$('#parentescoREBEdit').val(data.parentescoREB);
			$('#rSustitutoEBEdit').val(data.rSustitutoEB);
			$('#fechaNacimientoRSEBEdit').val(data.fechaNacimientoRSEB);
			$('#cedulaRSEBEdit').val(data.cedulaRSEB);
			$('#codigoTelRSEBEdit').val(data.codigoTelRSEB);
			$('#telefonoRSEBEdit').val(data.telefonoRSEB);
			$('#direccionHabitacionRSEBEdit').val(data.direccionHabitacionRSEB);

			$('#personalResponsableEBEdit').val(data.nombreCompletoPersonal + ' - ' + data.nombreCargo);
			$('#fechaInscripcionEBEdit').val(data.fechaInscripcionEB);

			if (data.confirmResponsableInsEB == 1) {
				$('#confirmResponsableInsEBEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="confirmResponsableInsEBEdit" id="confirmResponsableInsEBEdit" class="form-check-input" checked="checked" value="1"> Marque solo si usted es el responsable.</label>');
			} else {
				$('#confirmResponsableInsEBEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="confirmResponsableInsEBEdit" id="confirmResponsableInsEBEdit" class="form-check-input" value="1"> Marque solo si usted es el responsable.</label>');
			}

			$('#observacionesEBEdit').val(data.observacionesEB);

		}
	});	

}



function modificarEstudianteB() {

	$.ajax({
		url: '../procesos/estudiantes/modificarEstudianteB.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarEstudianteB').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(data){

			if (data == 1) {

				$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
				$('#btnCerrarModalEditarEstudianteBEdit').click();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.success('Estudiante modificado con exito.');

			}

			if (data == 2) {
				document.getElementById('animacionRing').style.display = 'none';
				var cedula = document.getElementById('cedulaEBEdit');
				cedula.focus();
				alertify.warning('Esta cédula ya esta registrada en el sistema!!!.');
			}

			if (data == 3) {
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function informacionEB(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	$.ajax({
		url: '../procesos/estudiantes/editarEstudianteB.php',
		type: 'POST',
		dataType: 'json',
		data: "idEstudiante=" + idEstudiante,
		success:function(data){

			$('#nombreCompletoEBInfo').html(data.apellidosE + " " + data.nombresE);
			$('#fechaInsEBInfo').html(data.fecha);
			$('#sexoEBInfo').html(data.sexoEB);
			$('#edadEBInfo').html(data.edadAniosE + " Años");
			$('#cedulaEBInfo').html(data.cedulaE);
			$('#gradoSeccionEBInfo').html(data.numeroGrado + " " + data.letraSeccion);
			$('#direccionEBInfo').html(data.direccionHabitacionE);

			$('#nombreCompletoREBInfo').html(data.nombreCompletoREB);
			$('#cedulaREBInfo').html(data.cedulaREB);
			$('#edadREBInfo').html(data.edadREB);
			$('#ocupacionREBInfo').html(data.ocupacionREB);
			$('#direccionTrabajoREBInfo').html(data.lugarTrabajoREB);
			$('#telefonoREBInfo').html("+" + data.codigoTelREB + "-" + data.telefonoREB);
			$('#direccionDomicilioREBInfo').html(data.direccionDomicilioREB);
			$('#parentescoREBInfo').html(data.parentescoREB);

			$('#RSEBInfo').html(data.rSustitutoEB);
			$('#cedulaRSEBInfo').html(data.cedulaRSEB);
			$('#telefonoRSEBInfo').html("+" + data.codigoTelRSEB + "-" + data.telefonoRSEB);
			$('#direccionHabitacionRSEBInfo').html(data.direccionHabitacionRSEB);

		}
	});
	
}



function resetModalFormalizarE() {
	$('#formFormalizarE')[0].reset();
	mostrarSeccionFormalizarEstudiante();
	mostrarGradoFormalizar();
	mostrarLiteralFormalizar();
	mostrarAnioEscolarFormalizar();
	mostrarEstudianteInscrito();
}



function formalizarInscripcion() {

	$.ajax({
		url: '../procesos/estudiantes/formalizarEstudiante.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formFormalizarE').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(data){

			if (data == 1) {

				$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
				$('#btnCerrarModalFormalizarInscripcionE').click();
				$('#cargarEstudianteFormalizar').load('estudiantes/selectEstudianteFormalizar.php');
				resetModalFormalizarE();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.success('La Inscripción del Estudiante fue Formalizada con Exito.');
			}

			if (data == 2) {
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}

	});

	return false;

}