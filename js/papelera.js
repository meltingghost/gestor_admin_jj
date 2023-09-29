function restaurarEstudianteI(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	Swal.fire({
        title: '¿Restaurar?',
        text: "El estudiante será movido al registro principal.",
        icon: 'question',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#146c43',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Restaurar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
    	if (result.isConfirmed) {

    		$.ajax({
    			url: '../procesos/papelera/restaurarEstudianteI.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idEstudiante=' + idEstudiante,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaPapelera').load('papelera/tablaPapelera.php');
    					alertify.success('El estudiante fue movido al registro principal.');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function eliminarPermanenteEstudianteI(idEstudiante) {

	idEstudiante = parseInt(idEstudiante);

	Swal.fire({
        title: '¿Eliminar Permanentemente?',
        text: "Una vez eliminado no podrá recuperarse el estudiante!!!.",
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
    			url: '../procesos/papelera/eliminarPermanenteEstudianteI.php',
    			type: 'POST',
    			dataType: 'json',
    			data: 'idEstudiante=' + idEstudiante,
    			success:function(data){

    				if (data == 1) {
    					$('#tablaPapelera').load('papelera/tablaPapelera.php');
    					alertify.success('El estudiante fue eliminado con exito.');
    				}

    				if (data == 2) {
    					alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
    				}

    			}
    		});

    	}
    });

}



function vaciarPapelera() {

    Swal.fire({
        title: '¿Vaciar la Papelera?',
        text: "Esta acción no podrá revertirse!!!.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Vaciar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: '../procesos/papelera/vaciarPapelera.php',
                type: 'POST',
                dataType: 'json',
                data: '',
                beforeSend: function(){
                    document.getElementById('animacionRing').style.display = 'block';
                },
                success:function(data){

                    if (data == 1) {
                        $('#tablaPapelera').load('papelera/tablaPapelera.php');
                        document.getElementById('animacionRing').style.display = 'none';
                        alertify.success('La papelera fue vaciada con exito.');
                    }

                    if (data == 2) {
                        document.getElementById('animacionRing').style.display = 'none';
                        alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
                    }

                }
            });

        }
    });

}