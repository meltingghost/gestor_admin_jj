function agregarAsistenciaExt() {

	$.ajax({
		url: 'procesos/asistencias/agregarAsistenciasExt.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarAsistenciaExt').serialize(),
		success:function(data){

			if (data == 1) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.success('Entrada Registrada con Exito!!!');
			}

			if (data == 2) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.success('Salida Registrada con Exito!!!');
			}

			if (data == 3) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.warning('Esta Cédula no está Registrada en el Sistema!!!');
			}

			if (data == 4) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.warning('Ya Registraste tus Dos Asistencias del Día!!!');
			}

			if (data == 5) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.warning('Ya Fuiste Registrado como Inasistente!!!');
			}

			if (data == 6) {
				$('#formAgregarAsistenciaExt')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}
			
		}
	});
	
	return false;
}



function agregarInasistenciasExt() {

	$.ajax({
		url: 'procesos/asistencias/agregarInasistenciasExt.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarAsistenciaExt').serialize(),
		beforeSend: function(){
            document.getElementById('animacionRing').style.display = 'block';
        },
		success:function(data){

			if (data == 1) {
				$('#formAgregarAsistenciaExt')[0].reset();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.success('Inasistencias Registradas con Exito!!!');
			}

			if (data == 2) {
				$('#formAgregarAsistenciaExt')[0].reset();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.warning('No estás Autorizado para Realizar esta Acción!!!');
			}

			if (data == 3) {
				$('#formAgregarAsistenciaExt')[0].reset();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.warning('Ya fueron Registradas todas las Inasistencias!!!');
			}

			if (data == 4) {
				$('#formAgregarAsistenciaExt')[0].reset();
				document.getElementById('animacionRing').style.display = 'none';
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

}



function resetModalAsistenciaManual(){
	$('#formAgregarAsistenciaManual')[0].reset();
	$('#formPersonalAsisManual')[0].reset();
	$('#formModificarAsistenciaManual')[0].reset();
	document.getElementById('divAgregarNuevaAsistencia').style.display = 'none';
	document.getElementById('divModificarAsistenciaManual').style.display = 'none';
	document.getElementById('alertAgregarNuevaAsistencia').style.display = 'none';
	$('#tablaAsisPersonal').load('asistencias/tablaAsisPersonal.php');
}



function agregarAsistenciaManual() {

	$.ajax({
		url: '../procesos/asistencias/agregarAsistenciaManual.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarAsistenciaManual').serialize(),
		success:function(data){

			if (data == 1) {
				$('#btnCerrarModalAsistenciaManual').click();
				resetModalAsistenciaManual();
				alertify.success('Asistencia Registrada con Exito!!!');
				cargarCalendarAsistencias();
				cargarCalendarInasistencias();
			}

			if (data == 2) {
				alertify.warning('El Personal Asistio esta Fecha!!!');
			}

			if (data == 3) {
				resetModalAsistenciaManual();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function confirmarAsistencia(idAsistencia, cedulaPersonal) {

	idAsistencia = parseInt(idAsistencia);
	cedulaPersonal = parseInt(cedulaPersonal);

	$.ajax({
		url: '../procesos/asistencias/confirmarAsistencia.php',
		type: 'POST',
		dataType: 'json',
		data: 'idAsistencia=' + idAsistencia,
		success:function(data){

			if (data == 1) {
				$('#tablaAsisPersonal').load('asistencias/tablaAsisPersonal.php?cedulaPersonal=' + cedulaPersonal);
			}

			if (data == 2) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
}



function editarAsistenciaManual(idAsistencia, cedulaPersonal) {

	idAsistencia = parseInt(idAsistencia);
	cedulaPersonal = parseInt(cedulaPersonal);

	$.ajax({
		url: '../procesos/asistencias/editarAsistenciaManual.php',
		type: 'POST',
		dataType: 'json',
		data: 'idAsistencia=' + idAsistencia,
		success:function(data){

			document.getElementById('divModificarAsistenciaManual').style.display = "block";

			$('#idAsistenciaManEdit').val(data.id_asistencia);
			$('#fechaAsisManEdit').val(data.fecha);
			$('#horaEntradaAsisManEdit').val(data.horaEntrada);
			$('#horaSalidaAsisManEdit').val(data.horaSalida);
			$('#observacionAsisManEdit').val(data.observacion);

		}
	});
	
}



function modificarAsistenciaManual(){

	$.ajax({
		url: '../procesos/asistencias/modificarAsistenciaManual.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formModificarAsistenciaManual').serialize(),
		success:function(data){

			if (data == 1) {
				alertify.success('Asistencia Modificada con Exito!!!');
				$('#btnCerrarModalAsistenciaManual').click();
				resetModalAsistenciaManual();
				cargarCalendarAsistencias();
				cargarCalendarInasistencias();
			}

			if (data == 2) {
				resetModalAsistenciaManual();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



