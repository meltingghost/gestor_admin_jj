$(document).ready(function(){

	var estados = (idDiv) => {

		document.querySelectorAll('.mostrar').forEach((div) => {
			div.classList.add('ocultar');
			div.classList.remove('mostrar');
		});
		document.querySelectorAll('.subActivo').forEach((div) => {
			div.classList.add('subInactivo');
			div.classList.remove('subActivo');
		});
		document.querySelector(`#${idDiv}`).classList.add('mostrar');
		document.querySelector(`#${idDiv}`).classList.remove('ocultar');
		document.querySelector(`#btnEstados`).classList.add('subActivo');
		document.querySelector(`#${idDiv}`).classList.remove('subInactivo');

	}

	var municipios = (idDiv) => {

		document.querySelectorAll('.mostrar').forEach((div) => {
			div.classList.add('ocultar');
			div.classList.remove('mostrar');
		});
		document.querySelectorAll('.subActivo').forEach((div) => {
			div.classList.add('subInactivo');
			div.classList.remove('subActivo');
		});
		document.querySelector(`#${idDiv}`).classList.add('mostrar');
		document.querySelector(`#${idDiv}`).classList.remove('ocultar');
		document.querySelector(`#btnMunicipios`).classList.add('subActivo');
		document.querySelector(`#${idDiv}`).classList.remove('subInactivo');

	}

	var parroquias = (idDiv) => {

		document.querySelectorAll('.mostrar').forEach((div) => {
			div.classList.add('ocultar');
			div.classList.remove('mostrar');
		});
		document.querySelectorAll('.subActivo').forEach((div) => {
			div.classList.add('subInactivo');
			div.classList.remove('subActivo');
		});
		document.querySelector(`#${idDiv}`).classList.add('mostrar');
		document.querySelector(`#${idDiv}`).classList.remove('ocultar');
		document.querySelector(`#btnParroquias`).classList.add('subActivo');
		document.querySelector(`#${idDiv}`).classList.remove('subInactivo');

	}

	$('#btnEstados').click(function(){

		estados('divEstados');

	});

	$('#btnMunicipios').click(function(){

		municipios('divMunicipios');

	});

	$('#btnParroquias').click(function(){

		parroquias('divParroquias');

	});

});



function agregarEstado() {

	$.ajax({
		url: '../procesos/regiones/agregarEstado.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarEstado').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaEstados').load('regiones/tablaEstados.php');
				$('#btnCerrarModalAgregarEstado').click();
				alertify.success('Estado Agregado con Exito!');
				$('#formAgregarEstado')[0].reset();
				$('#cargarEstadoMunicipio').load('regiones/selectEstadoMunicipio.php');
				$('#cargarEstadoMunicipioEdit').load('regiones/selectEstadoMunicipioEdit.php');
				$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
			}

			if (data == 2) {
				$('#formAgregarEstado')[0].reset();
				alertify.warning('Este Estado ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				$('#formAgregarEstado')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarEstado(idEstado) {

	idEstado = parseInt(idEstado);

	$.ajax({
		url: '../procesos/regiones/editarEstado.php',
		type: 'POST',
		dataType: 'json',
		data: 'idEstado=' + idEstado,
		success:function(data){

			$('#idEstadoEdit').val(data.id_estado);
			$('#nombreEstadoOld').val(data.estado);
			$('#nombreEstadoEdit').val(data.estado);

		}
	});
	
}



function modificarEstado() {

	$.ajax({
		url: '../procesos/regiones/modificarEstado.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarEstado').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaEstados').load('regiones/tablaEstados.php');
				$('#btnCerrarModalEditarEstado').click();
				alertify.success('Estado Modificado con Exito!');
				$('#cargarEstadoMunicipio').load('regiones/selectEstadoMunicipio.php');
				$('#cargarEstadoMunicipioEdit').load('regiones/selectEstadoMunicipioEdit.php');
				$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
			}

			if (data == 2) {
				alertify.warning('Este Estado ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function eliminarEstado(idEstado) {

	idEstado = parseInt(idEstado);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado no podrá recuperarse el estado!!!.",
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
    			url: '../procesos/regiones/eliminarEstado.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idEstado=' + idEstado,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaEstados').load('regiones/tablaEstados.php');
    					alertify.success('Estado Eliminado con Exito!');
    					$('#cargarEstadoMunicipio').load('regiones/selectEstadoMunicipio.php');
						$('#cargarEstadoMunicipioEdit').load('regiones/selectEstadoMunicipioEdit.php');
						$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
						$('#tablaParroquias').load('regiones/tablaParroquias.php');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });	
	
}



function agregarMunicipio() {

	$.ajax({
		url: '../procesos/regiones/agregarMunicipio.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarMunicipio').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
				$('#btnCerrarModalAgregarMunicipio').click();
				alertify.success('Municipio Agregado con Exito!');
				$('#formAgregarMunicipio')[0].reset();
				$('#cargarMunicipioParroquia').load('regiones/selectMunicipioParroquia.php');
				$('#cargarMunicipioParroquiaEdit').load('regiones/selectMunicipioParroquiaEdit.php');
				$('#tablaParroquias').load('regiones/tablaParroquias.php');
			}

			if (data == 2) {
				$('#formAgregarMunicipio')[0].reset();
				alertify.warning('Este Municipio ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				$('#formAgregarMunicipio')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarMunicipio(idMunicipio) {

	idMunicipio = parseInt(idMunicipio);

	$.ajax({
		url: '../procesos/regiones/editarMunicipio.php',
		type: 'POST',
		dataType: 'json',
		data: 'idMunicipio=' + idMunicipio,
		success:function(data){

			$('#idMunicipioEdit').val(data.id_municipio);
			$('#nombreMunicipioOld').val(data.municipio);
			$('#estadoMunicipioEdit').val(data.id_estado);
			$('#nombreMunicipioEdit').val(data.municipio);

		}
	});
	
}



function modificarMunicipio() {

	$.ajax({
		url: '../procesos/regiones/modificarMunicipio.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarMunicipio').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
				$('#btnCerrarModalEditarMunicipio').click();
				alertify.success('Municipio Modificado con Exito!');
				$('#cargarMunicipioParroquia').load('regiones/selectMunicipioParroquia.php');
				$('#cargarMunicipioParroquiaEdit').load('regiones/selectMunicipioParroquiaEdit.php');
				$('#tablaParroquias').load('regiones/tablaParroquias.php');
			}

			if (data == 2) {
				alertify.warning('Este Municipio ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function eliminarMunicipio(idMunicipio) {

	idMunicipio = parseInt(idMunicipio);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminado no podrá recuperarse el municipio!!!.",
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
    			url: '../procesos/regiones/eliminarMunicipio.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idMunicipio=' + idMunicipio,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
    					alertify.success('Municipio Eliminado con Exito!');
    					$('#cargarMunicipioParroquia').load('regiones/selectMunicipioParroquia.php');
						$('#cargarMunicipioParroquiaEdit').load('regiones/selectMunicipioParroquiaEdit.php');
						$('#tablaParroquias').load('regiones/tablaParroquias.php');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});
    		
    	}
    });

}



function agregarParroquia() {

	$.ajax({
		url: '../procesos/regiones/agregarParroquia.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formAgregarParroquia').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaParroquias').load('regiones/tablaParroquias.php');
				$('#btnCerrarModalAgregarParroquia').click();
				alertify.success('Parroquia Agregada con Exito!');
				$('#formAgregarParroquia')[0].reset();
			}

			if (data == 2) {
				$('#formAgregarParroquia')[0].reset();
				alertify.warning('Esta Parroquia ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				$('#formAgregarParroquia')[0].reset();
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function editarParroquia(idParroquia) {

	idParroquia = parseInt(idParroquia);

	$.ajax({
		url: '../procesos/regiones/editarParroquia.php',
		type: 'POST',
		dataType: 'json',
		data: 'idParroquia=' + idParroquia,
		success:function(data){

			$('#idParroquiaEdit').val(data.id_parroquia);
			$('#nombreParroquiaOld').val(data.parroquia);
			$('#municipioParroquiaEdit').val(data.id_municipio);
			$('#nombreParroquiaEdit').val(data.parroquia);

		}
	});	

}



function modificarParroquia() {

	$.ajax({
		url: '../procesos/regiones/modificarParroquia.php',
		type: 'POST',
		dataType: 'json',
		data: $('#formEditarParroquia').serialize(),
		success:function(data){

			if (data == 1) {
				$('#tablaParroquias').load('regiones/tablaParroquias.php');
				$('#btnCerrarModalEditarParroquia').click();
				alertify.success('Parroquia Modificada con Exito!');
			}

			if (data == 2) {
				alertify.warning('Esta Parroquia ya está Registrada en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	
	return false;
}



function eliminarParroquia(idParroquia) {

	idParroquia = parseInt(idParroquia);

	Swal.fire({
        title: '¿Eliminar?',
        text: "Una vez eliminada no podrá recuperarse la parroquia!!!.",
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
    			url: '../procesos/regiones/eliminarParroquia.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idParroquia=' + idParroquia,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaParroquias').load('regiones/tablaParroquias.php');
    					alertify.success('Parroquia Eliminada con Exito!');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});    		

    	}
    });

}