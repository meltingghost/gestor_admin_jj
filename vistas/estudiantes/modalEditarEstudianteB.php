<form id="formEditarEstudianteB" method="POST" autocomplete="off" onsubmit="return modificarEstudianteB()">

    <div class="modal fade" id="modalEditarEB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Estudiante de Educación Básica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <p style="text-align: justify;"><b>Aqui podrá modificar los datos del estudiante.</b></p>
                    <hr>

                    <input type="hidden" name="idEdit" id="idEdit">

                    <legend>1.- Identificacion del Alumno:</legend>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="apellidosEBEdit" class="formV-label">Apellidos:</label>
                            <input type="text" name="apellidosEBEdit" id="apellidosEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="80" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="nombresEBEdit" class="formV-label">Nombres:</label>
                            <input type="text" name="nombresEBEdit" id="nombresEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="80" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="lugarNacimientoEBEdit" class="formV-label">Lugar de Nacimiento:</label>
                            <input type="text" name="lugarNacimientoEBEdit" id="lugarNacimientoEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <label for="fechaNacimientoEBEdit" class="formV-label">Fecha de Nacimiento:</label>
                            <input type="text" name="fechaNacimientoEBEdit" id="fechaNacimientoEBEdit" class="form-control input-readonly" placeholder="dd-mm-yyyy" readonly>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label> Sexo:</label><br>
                            <div class="form-check">
                                <div id="sexoEBEditMasculino"></div>
                                <div id="sexoEBEditFemenino"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="edadEBEdit">Edad:</label>
                            <input type="text" name="edadEBEdit" id="edadEBEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="cedulaEBEdit" class="formV-label">C.I. N°:</label>
                            <input type="hidden" name="cedulaOld" id="cedulaOld">
                            <input type="text" name="cedulaEBEdit" id="cedulaEBEdit" class="form-control input-no-space" pattern="[0-9]+" maxlength="11" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="estadoNatalEBEdit" class="formV-label">Estado:</label>
                            <div id="cargarEstadoNatalEBEdit"></div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="municipioNatalEBEdit" class="formV-label">Municipio:</label>
                            <div id="cargarMunicipioNatalEBEdit"></div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="parroquiaNatalEBEdit" class="formV-label">Parroquia:</label>
                            <div id="cargarParroquiaNatalEBEdit"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="direccionEBEdit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionEBEdit" id="direccionEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="gradoCursarEBEdit" class="formV-label">Grado a Cursar:</label>
                            <div id="cargarGradoCursarEBEdit"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="seccionGradoCursarEBEdit" class="formV-label">Sección:</label>
                            <div id="cargarSeccionGradoCursarEBEdit"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="anioEscolarEBEdit" class="formV-label">Año Escolar:</label>
                            <div id="cargarAnioEscolarEBEdit"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="literalEBEdit" class="formV-label">Literal Grado Anterior:</label>
                            <div id="cargarLiteralEBEdit"></div>
                        </div>
                    </div>
                    <br>

                    <legend>2.- Datos del Representante:</legend>

                    <div class="row">
                        <div class="col-sm-12 col-md-8">
                            <label for="nombreCompletoREBEdit" class="formV-label">Nombres y Apellidos:</label>
                            <input type="text" name="nombreCompletoREBEdit" id="nombreCompletoREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-12 col-md-4" class="formV-label">
                            <label for="fechaNacimientoREBEdit">Fecha de Nacimiento:</label>
                            <input type="text" name="fechaNacimientoREBEdit" id="fechaNacimientoREBEdit" class="form-control input-readonly" placeholder="dd-mm-yyyy" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="cedulaREBEdit" class="formV-label">C. I. N°:</label>
                            <input type="text" name="cedulaREBEdit" id="cedulaREBEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <label for="edadREBEdit">Edad:</label>
                            <input type="text" name="edadREBEdit" id="edadREBEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="gradoInstruccionREBEdit" class="formV-label">Grado de Insctrucción:</label>
                            <input type="text" name="gradoInstruccionREBEdit" id="gradoInstruccionREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="80" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="ocupacionREBEdit" class="formV-label">Ocupación:</label>
                            <input type="text" name="ocupacionREBEdit" id="ocupacionREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="80" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <label for="lugarTrabajoREBEdit" class="formV-label">Lugar de Trabajo:</label>
                            <input type="text" name="lugarTrabajoREBEdit" id="lugarTrabajoREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="telefonoREBEdit" class="formV-label">Teléfono:</label>
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div id="cargarCodigoTelREBEdit"></div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <input type="text" name="telefonoREBEdit" id="telefonoREBEdit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <label for="direccionHabitacionREBEdit" class="formV-label">Dirección de Domicilio:</label>
                            <input type="text" name="direccionHabitacionREBEdit" id="direccionHabitacionREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="parentescoREBEdit" class="formV-label">Parentesco con el Niño:</label>
                            <input type="text" name="parentescoREBEdit" id="parentescoREBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="50" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <label for="rSustitutoEBEdit" class="formV-label">En Caso de no ser el Representante Legal Quien Puede Sustituirla:</label>
                            <input type="text" name="rSustitutoEBEdit" id="rSustitutoEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="fechaNacimientoRSEBEdit" class="formV-label">Fecha de Nacimiento:</label>
                            <input type="text" name="fechaNacimientoRSEBEdit" id="fechaNacimientoRSEBEdit" class="form-control input-readonly" placeholder="dd-mm-yyyy" readonly>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="cedulaRSEBEdit" class="formV-label">C. I. N°:</label>
                            <input type="text" name="cedulaRSEBEdit" id="cedulaRSEBEdit" class="form-control input-no-space input-readonly" pattern="[0-9]+" maxlength="8" readonly>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="telefonoRSEBEdit" class="formV-label">Teléfono:</label>
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div id="cargarCodigoTelRSEBEdit"></div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <input type="text" name="telefonoRSEBEdit" id="telefonoRSEBEdit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="direccionHabitacionRSEBEdit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionHabitacionRSEBEdit" id="direccionHabitacionRSEBEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <legend>3.- Funcionario Responsable de la Inscripción:</legend>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="personalResponsableEBEdit" class="formV-label">Nombres y Apellidos:</label>
                            <input type="text" name="personalResponsableEBEdit" id="personalResponsableEBEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="fechaInscripcionEBEdit">Fecha:</label>
                            <?php 
                                include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                            ?>
                            <input type="text" name="fechaInscripcionEBEdit" id="fechaInscripcionEBEdit" class="form-control input-readonly" placeholder="<?php echo $fechaActual; ?>" value="<?php echo $fechaActual; ?>" readonly>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="">Confirmación:</label>
                            <input type="hidden" name="confirmResponsableInsEBEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="confirmResponsableInsEBEdit"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="observacionesEBEdit" class="formV-label">Observaciones:</label>
                            <textarea name="observacionesEBEdit" id="observacionesEBEdit" class="form-control" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalEditarEstudianteBEdit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-warning" value="Modificar">
                </div>

            </div>
        </div>
    </div>

</form>