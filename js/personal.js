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
				alertify.success('Cargo Agregado con Exito!');
			}

			if (data == 2) {
				$('#formRegistrarCargos')[0].reset();
				alertify.warning('Este Cargo ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				$('#formRegistrarCargos')[0].reset();
				alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
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
				alertify.success('Cargo Modificado con Exito!');

			}

			if (data == 2) {
				alertify.warning('Este Cargo ya está Registrado en el Sistema!');
			}

			if (data == 3) {
				alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
			}

		}
	});

	return false;
}



function eliminarCargo(idCargo) {

	idCargo = parseInt(idCargo);

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
    			url: '../procesos/personal/eliminarCargo.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idCargo=' + idCargo,
    			success:function(data) {
    				
    				if (data == 1) {
    					$("#tablaCargos").load("personal/tablaCargos.php");
    					alertify.success('Cargo Eliminado con Exito!');

    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}