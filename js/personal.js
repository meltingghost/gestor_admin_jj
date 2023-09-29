function agregarCargo() {

	$.ajax({
		url: '../procesos/personal/agregarCargo.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formRegistrarCargos').serialize(),
		success:function(data){

			if (data == 1) {
				$('#formRegistrarCargos')[0].reset();
				$("#tablaCargos").load("personal/tablaCargos.php");
				alertify.success('Función Agregada con Exito!');
			}

			if (data == 2) {
				$('#formRegistrarCargos')[0].reset();
				alertify.warning('Esta Función ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				$('#formRegistrarCargos')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarCargo(idCargo) {

	idCargo = parseInt(idCargo);

	$.ajax({
		url: '../procesos/personal/editarCargo.php',
		type: 'POST',
		dataType: 'json',
		data: 'idCargo=' + idCargo,
		success:function(data) {

			$('#idCargoEdit').val(data['id_cargo']);
			$('#nombreCargoOld').val(data['nombreCargo']);
			$('#nombreCargoEdit').val(data['nombreCargo']);

		}
	});
	
}



function modificarCargo() {

	$.ajax({
		url: '../procesos/personal/modificarCargo.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarCargo').serialize(),
		success:function(data) {
			
			if (data == 1) {
				$('#btnCerrarModalEditarCargo').click();
				$("#tablaCargos").load("personal/tablaCargos.php");
				alertify.success('Función Modificada con Exito!');

			}

			if (data == 2) {
				alertify.warning('Esta Función ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function eliminarCargo(idCargo) {

	idCargo = parseInt(idCargo);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminada no podrá recuperarse la función!!!.",
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
    			url: '../procesos/personal/eliminarCargo.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idCargo=' + idCargo,
    			success:function(data) {
    				
    				if (data == 1) {
    					$("#tablaCargos").load("personal/tablaCargos.php");
    					alertify.success('Función Eliminada con Exito!');

    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function resetFormAgregarPermiso() {
	$('#formAgregarPermiso')[0].reset();
}



function agregarPermiso() {

	$.ajax({
		url: '../procesos/personal/agregarPermiso.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarPermiso').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaPermisos').load('personal/tablaPermisos.php');
				$('#btnCerrarModalAgregarPermiso').click();
				alertify.success('Permiso Agregado con Exito!');
				resetFormAgregarPermiso();
			}

			if (data == 2) {
				$('#formAgregarPermiso')[0].reset();
				alertify.warning('Este Permiso ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				$('#formAgregarPermiso')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarPermiso(idPermiso) {

	idPermiso = parseInt(idPermiso);

	$.ajax({
		url: '../procesos/personal/editarPermiso.php',
		type: 'POST',
		dataType: 'json',
		data: 'idPermiso=' + idPermiso,
		success:function(data){

			$('#idPermisoEdit').val(data.id_permiso);
			$('#nombrePermisoOld').val(data.nombrePermiso);
			$('#nombrePermisoEdit').val(data.nombrePermiso);
			$('#descripcionPermisoEdit').val(data.descripcionPermiso);
			

		}
	});
	
}



function modificarPermiso() {

	$.ajax({
		url: '../procesos/personal/modificarPermiso.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarPermiso').serialize(),
		success:function(data) {

			if (data == 1) {
				$('#tablaPermisos').load('personal/tablaPermisos.php');
				$('#btnCerrarModalEditarPermiso').click();
				alertify.success('Permiso Modificado con Exito!');

			}

			if (data == 2) {
				alertify.warning('Este Permiso ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function eliminarPermiso(idPermiso) {

	idPermiso = parseInt(idPermiso);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado no podrá recuperarse el cargo!!!.",
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
    			url: '../procesos/personal/eliminarPermiso.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idPermiso=' + idPermiso,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaPermisos').load('personal/tablaPermisos.php');
    					alertify.success('Permiso Eliminado con Exito!');

    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function resetFormAgregarPersonal() {

	$('#formAgregarPersonal')[0].reset();
	document.getElementById('aggPersonalPart1').style.display = 'block';
	document.getElementById('aggPersonalPart2').style.display = 'none';
	document.getElementById('aggPersonalPart3').style.display = 'none';
	document.getElementById('aggPersonalPart4').style.display = 'none';
	document.getElementById('aggPersonalPart5').style.display = 'none';
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



function agregarPersonal() {

	$.ajax({
		url: '../procesos/personal/agregarPersonal.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarPersonal').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaPersonal').load('personal/tablaPersonal.php');
				$('#btnCerrarModalAgregarPersonal').click();
				resetFormAgregarPersonal();
				alertify.success('Personal Agregado con Exito!');
			}

			if (data == 2) {
				document.getElementById('aggPersonalPart1').style.display = 'none';
				document.getElementById('aggPersonalPart2').style.display = 'block';
				document.getElementById('aggPersonalPart3').style.display = 'none';
				document.getElementById('aggPersonalPart4').style.display = 'none';
				document.getElementById('aggPersonalPart5').style.display = 'none';
				document.getElementById('step1').className = document.getElementById('step1').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step3').className = document.getElementById('step3').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step2').className += " active";
			    var cedula = document.getElementById('cedulaPersonal');
			    cedula.focus();
			    alertify.warning('Esta Cédula ya está Registrada en el Sistema!!!');
			}

			if (data == 3) {
				document.getElementById('aggPersonalPart1').style.display = 'none';
				document.getElementById('aggPersonalPart2').style.display = 'none';
				document.getElementById('aggPersonalPart3').style.display = 'block';
				document.getElementById('aggPersonalPart4').style.display = 'none';
				document.getElementById('aggPersonalPart5').style.display = 'none';
				document.getElementById('step1').className = document.getElementById('step1').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step2').className = document.getElementById('step2').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step3').className += " active";
			    var funcion = document.getElementById('funcionPersonal');
			    funcion.focus();
			    alertify.warning('Ya hay un Director Registrado en el Sistema!!!');
			}

			if (data == 4) {
				document.getElementById('aggPersonalPart1').style.display = 'none';
				document.getElementById('aggPersonalPart2').style.display = 'none';
				document.getElementById('aggPersonalPart3').style.display = 'block';
				document.getElementById('aggPersonalPart4').style.display = 'none';
				document.getElementById('aggPersonalPart5').style.display = 'none';
				document.getElementById('step1').className = document.getElementById('step1').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step2').className = document.getElementById('step2').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step3').className += " active";
			    var funcion = document.getElementById('funcionPersonal');
			    funcion.focus();
			    alertify.warning('Ya hay un Sub-Director Administrativo Registrado en el Sistema!!!');
			}

			if (data == 5) {
				document.getElementById('aggPersonalPart1').style.display = 'none';
				document.getElementById('aggPersonalPart2').style.display = 'none';
				document.getElementById('aggPersonalPart3').style.display = 'block';
				document.getElementById('aggPersonalPart4').style.display = 'none';
				document.getElementById('aggPersonalPart5').style.display = 'none';
				document.getElementById('step1').className = document.getElementById('step1').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step2').className = document.getElementById('step2').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step4').className = document.getElementById('step4').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step5').className = document.getElementById('step5').className.replace( /(?:^|\s)active(?!\S)/g , '' );
			    document.getElementById('step3').className += " active";
			    var funcion = document.getElementById('funcionPersonal');
			    funcion.focus();
			    alertify.warning('Ya hay un Sub-Director Académico Registrado en el Sistema!!!');
			}

			if (data == 6) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarPersonal(idPersonal) {

	idPersonal = parseInt(idPersonal);

	$.ajax({
		url: '../procesos/personal/editarPersonal.php',
		type: 'POST',
		dataType: 'json',
		data: 'idPersonal=' + idPersonal,
		success:function(data){

			$('#idPersonalEdit').val(data.id_personal);

			if (data.tipoPersonal == "Docente") {
				$('#tipoPersonalEditDocente').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="docente" class="form-check-input" checked="checked" value="Docente"> Docente</label><br>');
			} else {
				$('#tipoPersonalEditDocente').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="docente" class="form-check-input" value="Docente"> Docente</label><br>');
			}

			if (data.tipoPersonal == "Administrativo") {
				$('#tipoPersonalEditAdministrativo').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="administrativo" class="form-check-input" checked="checked" value="Administrativo"> Administrativo</label><br>');
			} else {
				$('#tipoPersonalEditAdministrativo').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="administrativo" class="form-check-input" value="Administrativo"> Administrativo</label><br>');
			}

			if (data.tipoPersonal == "Obrero") {
				$('#tipoPersonalEditObrero').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="obrero" class="form-check-input" checked="checked" value="Obrero"> Obrero</label><br>');
			} else {
				$('#tipoPersonalEditObrero').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="obrero" class="form-check-input" value="Obrero"> Obrero</label><br>');
			}

			if (data.tipoPersonal == "Cocinera") {
				$('#tipoPersonalEditCocinera').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="cocinera" class="form-check-input" checked="checked" value="Cocinera"> Cocinera</label><br>');
			} else {
				$('#tipoPersonalEditCocinera').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="cocinera" class="form-check-input" value="Cocinera"> Cocinera</label><br>');
			}

			if (data.tipoPersonal == "Integral") {
				$('#tipoPersonalEditIntegral').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="integral" class="form-check-input" checked="checked" value="Integral"> Integral</label><br>');
			} else {
				$('#tipoPersonalEditIntegral').html('<label class="formV-label form-check-label"><input type="radio" name="tipoPersonalEdit" id="integral" class="form-check-input" value="Integral"> Integral</label><br>');
			}

			$('#codigoPersonalEdit').val(data.codigoPersonal);

			if (data.trasladoPersonal == 1) {
				$('#trasladoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="trasladoPersonalEdit" id="trasladoPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo si es un traslado.</label>');
			} else {
				$('#trasladoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="trasladoPersonalEdit" id="trasladoPersonalEdit" class="form-check-input" value="1"> Marque solo si es un traslado.</label>');
			}

			$('#fechaPersonalEdit').val(data.fechaPersonal);
			$('#nombreCompletoPersonalEdit').val(data.nombreCompletoPersonal);
			$('#cedulaPersonalEdit').val(data.cedulaPersonal);
			$('#fechaNacimientoPersonalEdit').val(data.fechaNacimientoPersonal);

			if (data.sexoPersonal == "Masculino") {
				$('#sexoPersonalEditMasculino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="masculino" class="form-check-input" checked="checked" value="Masculino"> Masculino</label><br>');
			} else {
				$('#sexoPersonalEditMasculino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="masculino" class="form-check-input" value="Masculino"> Masculino</label><br>');
			}

			if (data.sexoPersonal == "Femenino") {
				$('#sexoPersonalEditFemenino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="femenino" class="form-check-input" checked="checked" value="Femenino"> Femenino</label><br>');
			} else {
				$('#sexoPersonalEditFemenino').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="femenino" class="form-check-input" value="Femenino"> Femenino</label><br>');
			}

			if (data.sexoPersonal == "Otro") {
				$('#sexoPersonalEditOtro').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="otro" class="form-check-input" checked="checked" value="Otro"> Otro</label><br>');
			} else {
				$('#sexoPersonalEditOtro').html('<label class="formV-label form-check-label"><input type="radio" name="sexoPersonalEdit" id="otro" class="form-check-input" value="Otro"> Otro</label><br>');
			}

			$('#grupoSanguineoPersonalEdit').val(data.grupoSanguineoPersonal);
			$('#factorRhPersonalEdit').val(data.factorRhPersonal);
			$('#nivelInstrucionPersonalEdit').val(data.nivelInstrucionPersonal);
			$('#especialidadPersonalEdit').val(data.especialidadPersonal);
			$('#egresadoPersonalEdit').val(data.egresadoPersonal);
			$('#preGradoPersonalEdit').val(data.preGradoPersonal);
			$('#postGradoPersonalEdit').val(data.postGradoPersonal);
			$('#condicionMedicaPersonalEdit').val(data.condicionMedicaPersonal);
			$('#direccionPersonalEdit').val(data.direccionPersonal);
			$('#codigoTelPersonalEdit').val(data.codigoTelPersonal);
			$('#telefonoPersonalEdit').val(data.telefonoPersonal);
			$('#codigoTel2PersonalEdit').val(data.codigoTel2Personal);
			$('#telefono2PersonalEdit').val(data.telefono2Personal);
			$('#codigoTelOpcionalPersonalEdit').val(data.codigoTelOpcionalPersonal);
			$('#telefonoOpcionalPersonalEdit').val(data.telefonoOpcionalPersonal);
			$('#correoPersonalEdit').val(data.correoPersonal);
			$('#cuentaNominaPersonalEdit').val(data.cuentaNominaPersonal);
			$('#tipoCuentaPersonalEdit').val(data.tipoCuentaPersonal);
			$('#funcionPersonalOld').val(data.id_funcionPersonal);
			$('#funcionPersonalEdit').val(data.id_funcionPersonal);
			$('#especialistaPersonalEdit').val(data.especialistaPersonal);
			$('#fechaIngresoPersonalEdit').val(data.fechaIngresoPersonal);
			$('#observacionPersonalEdit').val(data.observacionPersonal);
			$('#codigoVoucherPersonalEdit').val(data.codigoVoucherPersonal);
			$('#cargoVoucherPersonalEdit').val(data.cargoVoucherPersonal);
			$('#adscritoPersonalEdit').val(data.adscritoPersonal);
			$('#codigoIPersonalEdit').val(data.codigoIPersonal);
			$('#codigoBPersonalEdit').val(data.codigoBPersonal);
			$('#institucionPersonalEdit').val(data.institucionPersonal);
			$('#codigoDependenciaPersonalEdit').val(data.codigoDependenciaPersonal);
			$('#codigoDeaPersonalEdit').val(data.codigoDeaPersonal);

			if (data.copiaCIPersonal == 1) {
				$('#copiaCIPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="copiaCIPersonalEdit" id="copiaCIPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			} else {
				$('#copiaCIPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="copiaCIPersonalEdit" id="copiaCIPersonalEdit" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			}

			if (data.copiaCredencialPersonal == 1) {
				$('#copiaCredencialPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="copiaCredencialPersonalEdit" id="copiaCredencialPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			} else {
				$('#copiaCredencialPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="copiaCredencialPersonalEdit" id="copiaCredencialPersonalEdit" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			}

			if (data.constanciaTrabajoPersonal == 1) {
				$('#constanciaTrabajoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="constanciaTrabajoPersonalEdit" id="constanciaTrabajoPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			} else {
				$('#constanciaTrabajoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="constanciaTrabajoPersonalEdit" id="constanciaTrabajoPersonalEdit" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>');
			}

			if (data.reciboPagoPersonal == 1) {
				$('#reciboPagoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="reciboPagoPersonalEdit" id="reciboPagoPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo en caso de que haya sido presentado.</label>');
			} else {
				$('#reciboPagoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="reciboPagoPersonalEdit" id="reciboPagoPersonalEdit" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentado.</label>');
			}

			if (data.curriculoPersonal == 1) {
				$('#curriculoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="curriculoPersonalEdit" id="curriculoPersonalEdit" class="form-check-input" checked="checked" value="1"> Marque solo en caso de que haya sido presentado.</label>');
			} else {
				$('#curriculoPersonalEdit').html('<label class="formV-label form-check-label"><input type="checkbox" name="curriculoPersonalEdit" id="curriculoPersonalEdit" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentado.</label>');
			}
			

		}
	});
	
}



function modificarPersonal() {

	$.ajax({
		url: '../procesos/personal/modificarPersonal.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarPersonal').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaPersonal').load('personal/tablaPersonal.php');
				$('#btnCerrarModalEditarPersonal').click();
				alertify.success('Personal Modificado con Exito!');
			}

			if (data == 2) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

			if (data == 3) {
			    var funcionEdit = document.getElementById('funcionPersonalEdit');
			    funcionEdit.focus();
			    alertify.warning('Ya hay un Director Registrado en el Sistema!!!');
			}

			if (data == 4) {
			    var funcionEdit = document.getElementById('funcionPersonalEdit');
			    funcionEdit.focus();
			    alertify.warning('Ya hay un Sub-Director Administrativo Registrado en el Sistema!!!');
			}

			if (data == 5) {
			    var funcionEdit = document.getElementById('funcionPersonalEdit');
			    funcionEdit.focus();
			    alertify.warning('Ya hay un Sub-Director Académico Registrado en el Sistema!!!');
			}

		}
	});
	
	return false;
}



function eliminarPersonal(idPersonal) {

	idPersonal = parseInt(idPersonal);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado no podrá recuperarse el personal!!!.",
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
    			url: '../procesos/personal/eliminarPersonal.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idPersonal=' + idPersonal,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaPersonal').load('personal/tablaPersonal.php');
    					alertify.success('Personal Eliminado con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });
	
}