$(document).ready(function() {
    $('#backup-button').click(function() {
      // Prompt user to choose where to save backup file
      var filename = prompt('Enter filename for backup:', 'database_backup.sql');
      
        // If user entered a filename, execute backup process
        if (filename != null && filename != '') {
            $.ajax({
            type: 'POST',
            url: '../procesos/database/exportar.php',
            data: { filename: filename },
            success: function(response) {
                // Download backup file
                var link = document.createElement('a');
                link.href = 'data:application/octet-stream;charset=utf-8,' + encodeURIComponent(response);
                link.download = filename;
                link.click();
            }
            });
        }
    });
});



function importarDB() {
    event.preventDefault(); // prevent default form submission behavior
    var form = document.getElementById('import-form');
    var formData = new FormData(form);

    $.ajax({
        url: '../procesos/database/importar.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            alert(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
}



function restablecerDB() {

    Swal.fire({
        title: '¡Advertencia!',
        text: "Esta acción restablecerá por completo la base de datos, es decir, eliminará permanentemente todos los registros, ¿está seguro de continuar?.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            Swal.fire({
                title: 'Validar Acción',
                html: '<div class="container col-sm-12"> <h6>Ingrese el código de confirmación para continuar con la acción. Este código se encuentra en el manual de usuario.</h6> <hr> <div class="row"> <div class="col"> <form id="frmCodConfirm" method="POST" autocomplete="off"> <label>Código:</label> <input name="codigo" id="codigo" class="form-control" required=""> <br> <div class="row"> <div class="col-sm-12 text-center"> </div> </div> </form> </div> </div> </div>',
                icon: 'warning',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Continuar',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: 'procesos/database/restablecerDB.php',
                        type: 'POST',
                        dataType: 'json',
                        data: $('#frmCodConfirm').serialize(),
                        success:function(data){

                            console.log(data);

                        }
                    });

                }
            });

        }
    });

}



function eliminarUserDirector() {

    Swal.fire({
        title: '¡Advertencia!',
        text: "Esta acción eliminará al usuario registrado como director, por lo tanto el cargo quedará disponible para cualquier usuario que desee registrarse, ¿está seguro de continuar?.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            Swal.fire({
                title: 'Validar Acción',
                html: '<div class="container col-sm-12"> <h6>Ingrese el código de confirmación para continuar con la acción. Este código se encuentra en el manual de usuario.</h6> <hr> <div class="row"> <div class="col"> <form id="frmCodConfirm" method="POST" autocomplete="off"> <label>Código:</label> <input name="codigo" id="codigo" class="form-control" required=""> <br> <div class="row"> <div class="col-sm-12 text-center"> </div> </div> </form> </div> </div> </div>',
                icon: 'warning',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Continuar',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: 'procesos/database/eliminarUserDirector.php',
                        type: 'POST',
                        dataType: 'json',
                        data: $('#frmCodConfirm').serialize(),
                        success:function(data){

                            if (data == 1) {
                                alertify.success('Usuario Director Eliminado con Exito!');
                            }

                            if (data == 2) {
                                alertify.error('El codigó ingresado es incorrecto!');
                            }

                            if (data == 3) {
                                resetFormAgregarLiteral();
                                alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
                            }

                        }
                    });

                }
            });

        }
    });

}



function eliminarUserSubDirectorAdmin() {

    Swal.fire({
        title: '¡Advertencia!',
        text: "Esta acción eliminará al usuario registrado como sub-director administrativo, por lo tanto el cargo quedará disponible para cualquier usuario que desee registrarse, ¿está seguro de continuar?.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            Swal.fire({
                title: 'Validar Acción',
                html: '<div class="container col-sm-12"> <h6>Ingrese el código de confirmación para continuar con la acción. Este código se encuentra en el manual de usuario.</h6> <hr> <div class="row"> <div class="col"> <form id="frmCodConfirm" method="POST" autocomplete="off"> <label>Código:</label> <input name="codigo" id="codigo" class="form-control" required=""> <br> <div class="row"> <div class="col-sm-12 text-center"> </div> </div> </form> </div> </div> </div>',
                icon: 'warning',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Continuar',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: 'procesos/database/eliminarUserSubDirectorAdmin.php',
                        type: 'POST',
                        dataType: 'json',
                        data: $('#frmCodConfirm').serialize(),
                        success:function(data){

                            if (data == 1) {
                                alertify.success('Usuario Sub-Director Administrativo Eliminado con Exito!');
                            }

                            if (data == 2) {
                                alertify.error('El codigó ingresado es incorrecto!');
                            }

                            if (data == 3) {
                                resetFormAgregarLiteral();
                                alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
                            }

                        }
                    });

                }
            });

        }
    });

}



function eliminarUserSubDirectorAcad() {

    Swal.fire({
        title: '¡Advertencia!',
        text: "Esta acción eliminará al usuario registrado como sub-director académico, por lo tanto el cargo quedará disponible para cualquier usuario que desee registrarse, ¿está seguro de continuar?.",
        icon: 'warning',
        allowOutsideClick: false,
        allowEscapeKey: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {

            Swal.fire({
                title: 'Validar Acción',
                html: '<div class="container col-sm-12"> <h6>Ingrese el código de confirmación para continuar con la acción. Este código se encuentra en el manual de usuario.</h6> <hr> <div class="row"> <div class="col"> <form id="frmCodConfirm" method="POST" autocomplete="off"> <label>Código:</label> <input name="codigo" id="codigo" class="form-control" required=""> <br> <div class="row"> <div class="col-sm-12 text-center"> </div> </div> </form> </div> </div> </div>',
                icon: 'warning',
                allowOutsideClick: false,
                allowEscapeKey: false,
                showCancelButton: false,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Continuar',
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: 'procesos/database/eliminarUserSubDirectorAcad.php',
                        type: 'POST',
                        dataType: 'json',
                        data: $('#frmCodConfirm').serialize(),
                        success:function(data){

                            if (data == 1) {
                                alertify.success('Usuario Sub-Director Académico Eliminado con Exito!');
                            }

                            if (data == 2) {
                                alertify.error('El codigó ingresado es incorrecto!');
                            }

                            if (data == 3) {
                                resetFormAgregarLiteral();
                                alertify.error('Hubo algún error con el servidor, asegurese de que los datos requeridos fueron introducidos correctamente y si el problema persiste contacte a soporte técnico!');
                            }

                        }
                    });

                }
            });

        }
    });

}