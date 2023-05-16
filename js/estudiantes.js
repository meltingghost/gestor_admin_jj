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
				alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
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
				$('#btnCerrarModalEditarLiteral').click();
				$('#tablaLiteral').load("estudiantes/tablaLiteral.php");
				alertify.success('Literal Modificada con Exito!');
			}

			if (data == 2) {
				alertify.warning('Esta Literal ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
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
    					alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
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
				alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
			}

		}
	});
	

	return false;
}