<div class="modal fade" id="modalAgregarEB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Inscribir Nuevo Estudiante de Educación Básica</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetFormAgregarEstudianteB()"></button>
            </div>

            <a id="topEB"></a>

            <form id="formAgregarEstudianteB" method="POST" autocomplete="off" onsubmit="return agregarEstudianteB()">

                <div class="modal-body">

                    <p style="text-align: justify;"><b>Asegurese de llenar los campos requeridos correctamente, ya que algunos no podrán ser modificados más tarde, podrá formalizar la inscripción de los estudiantes al final del registro o más adelante.</b></p>

                    <div style="text-align:center; margin-topEB:20px; margin-bottom:15px;">
                        <span id="step1EB" class="step active">1</span>
                        <span id="step2EB" class="step">2</span>
                        <span id="step3EB" class="step">3</span>
                    </div>

                    <fieldset id="aggEBPart1">

                        <legend>1.- Identificacion del Alumno:</legend>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="apellidosEBGroup">
                                <label for="apellidosEB" class="formV-label">Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="apellidosEB" id="apellidosEB" class="form-control formV-input" maxlength="80" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un apellido valido.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 formV-group" id="nombresEBGroup">
                                <label for="nombresEB" class="formV-label">Nombres:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombresEB" id="nombresEB" class="form-control formV-input" maxlength="80" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="lugarNacimientoEBGroup">
                                <label for="lugarNacimientoEB" class="formV-label">Lugar de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="lugarNacimientoEB" id="lugarNacimientoEB" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-6 col-md-3 formV-group" id="fechaNacimientoEBGroup">
                                <label for="fechaNacimientoEB" class="formV-label">Fecha de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaNacimientoEB" id="fechaNacimientoEB" class="form-control formV-input" placeholder="dd-mm-yyyy" readonly>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una fecha.</small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 formV-group" id="sexoEBGroup">
                                <label> Sexo:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="formV-label form-check-label"><input type="radio" name="sexoEB" id="masculino" class="form-check-input formV-input" value="Masculino"> Masculino</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="sexoEB" id="femenino" class="form-check-input formV-input" value="Femenino"> Femenino</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <label for="edadEB">Edad:</label>
                                <input type="text" name="edadEB" id="edadEB" class="form-control input-readonly" readonly>
                            </div>
                            <div class="col-sm-6 col-md-3 formV-group" id="cedulaEBGroup">
                                <label for="cedulaEB" class="formV-label">C.I. N°:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaEB" id="cedulaEB" class="form-control input-no-space formV-input">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una cédula valida.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="estadoNatalEBGroup">
                                <label for="estadoNatalEB" class="formV-label">Estado:</label>
                                <div class="formV-group-input">
                                    <div id="cargarEstadoNatalEB"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 formV-group" id="municipioNatalEBGroup">
                                <label for="municipioNatalEB" class="formV-label">Municipio:</label>
                                <div class="formV-group-input">
                                    <div id="cargarMunicipioNatalEB"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 formV-group" id="parroquiaNatalEBGroup">
                                <label for="parroquiaNatalEB" class="formV-label">Parroquia:</label>
                                <div class="formV-group-input">
                                    <div id="cargarParroquiaNatalEB"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="direccionEBGroup">
                                <label for="direccionEB" class="formV-label">Dirección de Habitación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionEB" id="direccionEB" class="form-control formV-input" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar una dirección.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="gradoCursarEBGroup">
                                <label for="gradoCursarEB" class="formV-label">Grado a Cursar:</label>
                                <div class="formV-group-input">
                                    <div id="cargarGradoCursarEB"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 formV-group" id="seccionGradoCursarEBGroup">
                                <label for="seccionGradoCursarEB" class="formV-label">Sección:</label>
                                <div class="formV-group-input">
                                    <div id="cargarSeccionGradoCursarEB"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="anioEscolarEB" class="formV-label">Año Escolar:</label>
                                <div id="cargarAnioEscolarEB"></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="literalEB" class="formV-label">Literal Grado Anterior:</label>
                                <div id="cargarLiteralEB"></div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="right">
                                <a href="#topEB" class="btn btn-primary" id="btnGoAggEBPart2">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEBPart2" style="display: none;">

                        <legend>2.- Datos del Representante:</legend>

                        <div class="row">
                            <div class="col-sm-12 col-md-8 formV-group" id="nombreCompletoREBGroup">
                                <label for="nombreCompletoREB" class="formV-label">Nombres y Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombreCompletoREB" id="nombreCompletoREB" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 formV-group" id="fechaNacimientoREBGroup">
                                <label for="fechaNacimientoREB" class="formV-label">Fecha de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaNacimientoREB" id="fechaNacimientoREB" class="form-control formV-input" placeholder="dd-mm-yyyy" readonly>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una fecha.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="cedulaREBGroup">
                                <label for="cedulaREB" class="formV-label">C. I. N°:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaREB" id="cedulaREB" class="form-control input-no-space formV-input">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una cédula valida.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <label for="edadREB">Edad:</label>
                                <input type="text" name="edadREB" id="edadREB" class="form-control input-readonly" readonly>
                            </div>
                            <div class="col-sm-12 col-md-6 formV-group" id="gradoInstruccionREBGroup">
                                <label for="gradoInstruccionREB" class="formV-label">Grado de Insctrucción:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="gradoInstruccionREB" id="gradoInstruccionREB" class="form-control formV-input" maxlength="80" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un grado de instrucción.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="ocupacionREBGroup">
                                <label for="ocupacionREB" class="formV-label">Ocupación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="ocupacionREB" id="ocupacionREB" class="form-control formV-input" maxlength="80" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una ocupación.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 formV-group" id="lugarTrabajoREBGroup">
                                <label for="lugarTrabajoREB" class="formV-label">Lugar de Trabajo:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="lugarTrabajoREB" id="lugarTrabajoREB" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="telefonoREB" class="formV-label">Teléfono:</label>
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div id="cargarCodigoTelREB"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-7 formV-group" id="telefonoREBGroup">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoREB" id="telefonoREB" class="form-control input-no-space formV-input" maxlength="20">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Debe ingresar un número valido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 formV-group" id="direccionHabitacionREBGroup">
                                <label for="direccionHabitacionREB" class="formV-label">Dirección de Domicilio:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionHabitacionREB" id="direccionHabitacionREB" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="parentescoREBGroup">
                                <label for="parentescoREB" class="formV-label">Parentesco con el Niño:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="parentescoREB" id="parentescoREB" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un parentesco.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 formV-group" id="rSustitutoEBGroup">
                                <label for="rSustitutoEB" class="formV-label">En Caso de no ser el Representante Legal Quien Puede Sustituirla:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="rSustitutoEB" id="rSustitutoEB" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un sustituto.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="fechaNacimientoRSEBGroup">
                                <label for="fechaNacimientoRSEB" class="formV-label">Fecha de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaNacimientoRSEB" id="fechaNacimientoRSEB" class="form-control formV-input" placeholder="dd-mm-yyyy" readonly>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una fecha.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 formV-group" id="cedulaRSEBGroup">
                                <label for="cedulaRSEB" class="formV-label">C. I. N°:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaRSEB" id="cedulaRSEB" class="form-control input-no-space formV-input">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una cédula valida.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="telefonoRSEB" class="formV-label">Teléfono:</label>
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div id="cargarCodigoTelRSEB"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-7 formV-group" id="telefonoRSEBGroup">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoRSEB" id="telefonoRSEB" class="form-control input-no-space formV-input" maxlength="20">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Debe ingresar un número valido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="direccionHabitacionRSEBGroup">
                                <label for="direccionHabitacionRSEB" class="formV-label">Dirección de Habitación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionHabitacionRSEB" id="direccionHabitacionRSEB" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topEB" class="btn btn-primary" id="btnBackAggEBPart1">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topEB" class="btn btn-primary" id="btnGoAggEBPart3">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEBPart3" style="display: none;">

                        <legend>3.- Funcionario Responsable de la Inscripción:</legend>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="personalResponsableEB" class="formV-label">Nombres y Apellidos:</label>
                                <div id="cargarPersonalResponsableEB"></div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="fechaInscripcionEB">Fecha:</label>
                                <?php 
                                include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                                ?>
                                <input type="text" name="fechaInscripcionEB" id="fechaInscripcionEB" class="form-control input-readonly" placeholder="<?php echo $fechaActual; ?>" value="<?php echo $fechaActual; ?>" readonly>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="">Confirmación:</label>
                                <input type="hidden" name="confirmResponsableInsEB" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="confirmResponsableInsEB" id="confirmResponsableInsEB" class="form-check-input" value="1"> Marque solo si usted es el responsable.</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="observacionesEB" class="formV-label">Observaciones:</label>
                                <textarea name="observacionesEB" id="observacionesEB" class="form-control" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3" align="left">
                                <a href="#topEB" class="btn btn-primary" id="btnBackAggEBPart2">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <input type="submit" class="btn btn-success" value="Registrar">
                            </div>
                        </div>
                        <br>

                    </fieldset>
                    
                </div>

            <div class="modal-footer">
                <button type="button" id="btnCerrarModalAgregarEstudianteB" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetFormAgregarEstudianteB()">Cerrar</button>
            </div>

            </form>

        </div>
    </div>
</div>