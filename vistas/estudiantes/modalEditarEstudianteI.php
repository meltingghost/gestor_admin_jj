<form id="formEditarEstudianteI" method="POST" autocomplete="off" onsubmit="return modificarEstudianteI()">

    <div class="modal fade" id="modalEditarEI" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Estudiante de Educación Inicial</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <p style="text-align: justify;"><b>Aqui podrá modificar los datos del estudiante.</b></p>
                    <hr>

                    <legend>Datos del Niño o Niña:</legend>

                    <input type="hidden" name="idEstudianteEdit" id="idEstudianteEdit">

                    <div class="row">
                        <div class="col">
                            <label for="apellidosEIEdit" class="formV-label">Apellidos:</label>
                            <input type="text" name="apellidosEIEdit" id="apellidosEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="50" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="nombresEIEdit" class="formV-label">Nombres:</label>
                            <input type="text" name="nombresEIEdit" id="nombresEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="50" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="hidden" name="cEscolarEIOld" id="cEscolarEIOld">
                            <label for="cEscolarEIEdit" class="formV-label">Cédula:</label>
                            <input type="text" name="cEscolarEIEdit" id="cEscolarEIEdit" class="form-control input-no-space" pattern="[0-9]+" maxlength="11" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="fechaNacimientoEIEdit" class="formV-label">Fecha de Nacimiento:</label>
                            <input type="text" name="fechaNacimientoEIEdit" id="fechaNacimientoEIEdit" class="form-control input-readonly" placeholder="dd-mm-aaaa" readonly>
                        </div>
                        <div class="col">
                            <label for="edadAniosEIEdit">Edad (Años):</label>
                            <input type="text" name="edadAniosEIEdit" id="edadAniosEIEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col">
                            <label for="edadMesesEIEdit">Edad (Meses):</label>
                            <input type="text" name="edadMesesEIEdit" id="edadMesesEIEdit" class="form-control input-readonly" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="lugarNacimientoEIEdit" class="formV-label">Lugar de Nacimiento:</label>
                            <input type="text" name="lugarNacimientoEIEdit" id="lugarNacimientoEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="80" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="estadoNatalEIEdit" class="formV-label">Estado:</label>
                            <div id="cargarEstadoNatalEIEdit"></div>
                        </div>
                        <div class="col">
                            <label for="municipioNatalEIEdit" class="formV-label">Municipio:</label>
                            <div id="cargarMunicipioNatalEIEdit"></div>
                        </div>
                        <div class="col">
                            <label for="parroquiaNatalEIEdit" class="formV-label">Parroquia:</label>
                            <div id="cargarParroquiaNatalEIEdit"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="direccionHabitacionEIEdit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionHabitacionEIEdit" id="direccionHabitacionEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <legend>Datos del Representante 1:</legend>
                        </div>
                        <div class="col-sm-6">
                            <select name="parentescoREI1Edit" id="parentescoREI1Edit" class="form-control form-select">
                                <option selected disabled value="">Seleccione el parentesco</option>
                                <option value="Madre">Madre</option>
                                <option value="Padre">Padre</option>
                                <option value="Representante">Representante</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="nombreCompletoREI1Edit" class="formV-label">Nombres y Apellidos:</label>
                            <input type="text" name="nombreCompletoREI1Edit" id="nombreCompletoREI1Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="cedulaREI1Edit" class="formV-label">C.I. N°:</label>
                            <input type="number" name="cedulaREI1Edit" id="cedulaREI1Edit" class="form-control input-readonly" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="edadREI1Edit" class="formV-label">Edad:</label>
                            <input type="text" name="edadREI1Edit" id="edadREI1Edit" class="form-control" pattern="[0-9]+" maxlength="2" required>
                        </div>
                        <div class="col">
                            <label for="nacionalidadREI1Edit" class="formV-label">Nacionalidad:</label>
                            <input type="text" name="nacionalidadREI1Edit" id="nacionalidadREI1Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                        <div class="col">
                            <label for="gradoInstrucionREI1Edit" class="formV-label">Grado de Instrucción:</label>
                            <input type="text" name="gradoInstrucionREI1Edit" id="gradoInstrucionREI1Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="">Trabaja:</label><br>
                            <div class="form-check">
                                <div id="trabajaREI1EditSi"></div>
                                <div id="trabajaREI1EditNo"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="direccionTrabajoREI1Edit" class="formV-label">Dirección de Trabajo:</label>
                            <input type="text" name="direccionTrabajoREI1Edit" id="direccionTrabajoREI1Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="">Vive:</label><br>
                            <div class="form-check">
                                <div id="viveREI1EditSi"></div>
                                <div id="viveREI1EditNo"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefonoCasaREI1Edit" class="formV-label">Teléfono Casa:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelCasaREI1Edit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoCasaREI1Edit" id="telefonoCasaREI1Edit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20" required>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefonoCelREI1Edit" class="formV-label">Teléfono Celular:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelCelREI1Edit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoCelREI1Edit" id="telefonoCelREI1Edit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="direccionHabitacionREI1Edit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionHabitacionREI1Edit" id="direccionHabitacionREI1Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <legend>Datos del Representante 2:</legend>
                        </div>
                        <div class="col-sm-6">
                            <div id="cargarParentescoREI2Edit"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="nombreCompletoREI2Edit" class="formV-label">Nombres y Apellidos:</label>
                            <input type="text" name="nombreCompletoREI2Edit" id="nombreCompletoREI2Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col-sm-4">
                            <label for="cedulaREI2Edit" class="formV-label">C.I. N°:</label>
                            <input type="text" name="cedulaREI2Edit" id="cedulaREI2Edit" class="form-control" pattern="[0-9]+" maxlength="8" placeholder="Opcional">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="edadREI2Edit" class="formV-label">Edad:</label>
                            <input type="text" name="edadREI2Edit" id="edadREI2Edit" class="form-control" pattern="[0-9]+" maxlength="2" placeholder="Opcional">
                        </div>
                        <div class="col">
                            <label for="nacionalidadREI2Edit" class="formV-label">Nacionalidad:</label>
                            <input type="text" name="nacionalidadREI2Edit" id="nacionalidadREI2Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="gradoInstrucionREI2Edit" class="formV-label">Grado de Instrucción:</label>
                            <input type="text" name="gradoInstrucionREI2Edit" id="gradoInstrucionREI2Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="">Trabaja:</label><br>
                            <div class="form-check">
                                <div id="trabajaREI2EditSi"></div>
                                <div id="trabajaREI2EditNo"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="direccionTrabajoREI2Edit" class="formV-label">Dirección de Trabajo:</label>
                            <input type="text" name="direccionTrabajoREI2Edit" id="direccionTrabajoREI2Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="">Vive:</label><br>
                            <div class="form-check">
                                <div id="viveREI2EditSi"></div>
                                <div id="viveREI2EditNo"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefonoCasaREI2Edit" class="formV-label">Teléfono Casa:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelCasaREI2Edit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoCasaREI2Edit" id="telefonoCasaREI2Edit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefonoCelREI2Edit" class="formV-label">Teléfono Celular:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelCelREI2Edit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoCelREI2Edit" id="telefonoCelREI2Edit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="direccionHabitacionREI2Edit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionHabitacionREI2Edit" id="direccionHabitacionREI2Edit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <legend>Situación de los Padres:</legend>

                    <div class="row">
                        <div class="col">
                            <label for="situacionPadresEIEdit">Situación de los Padres:</label><br>
                            <div class="form-check">
                                <div id="situacionPadresEIEditConviven"></div>
                                <div id="situacionPadresEIEditSeparados"></div>
                            </div>
                        </div>
                    </div>

                    <legend>Datos Familiares Autorizados para Representarlos:</legend>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="autorizacionFEIEdit">Tiene Autorización:</label>
                            <div class="mb-3 form-check form-switch">
                                <input type="hidden" name="autorizacionFEIEdit" value="0">
                                <div id="autorizacionFEIEditSi"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="organismoAutorizacionFEIEdit" class="formV-label">Que Organismo la Otorga:</label>
                            <input type="text" name="organismoAutorizacionFEIEdit" id="organismoAutorizacionFEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="tieneHermanosEIEdit">Tiene Hermanos:</label>
                            <div class="mb-3 form-check form-switch">
                                <input type="hidden" name="tieneHermanosEIEdit" value="0">
                                <div id="tieneHermanosEIEditSi"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="cuantosHermanosEIEdit" class="formV-label">¿Cuantos Hermanos Tiene? V: H:</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="cuantosHermanosEIEdit" id="cuantosHermanosEIEdit" class="form-control" pattern="[0-9]+" maxlength="2">
                                </div>
                                <div class="col">
                                    <input type="text" name="cuantosHermanosVEIEdit" id="cuantosHermanosVEIEdit" class="form-control" pattern="[0-9]+" maxlength="2">
                                </div>
                                <div class="col">
                                    <input type="text" name="cuantosHermanosHEIEdit" id="cuantosHermanosHEIEdit" class="form-control" pattern="[0-9]+" maxlength="2">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="lugarHermanosEIEdit" class="formV-label">Lugar que Ocupa Entre Ellos:</label>
                            <input type="text" name="lugarHermanosEIEdit" id="lugarHermanosEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="20" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="quienDuermeEIEdit" class="formV-label">¿Con Quién Duerme?</label>
                            <input type="text" name="quienDuermeEIEdit" id="quienDuermeEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="80" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="quienJuegaEIEdit" class="formV-label">¿Con Quién Juega?</label>
                            <input type="text" name="quienJuegaEIEdit" id="quienJuegaEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="80" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="localizarFEIEdit" class="formV-label">*Donde Localizar a la Familia o Responsable del Niño o la Niña en Caso de Alguna Emergencia:</label>
                            <textarea name="localizarFEIEdit" id="localizarFEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);" required></textarea>
                        </div>
                    </div>

                    <legend>Antecedentes del Niño(a):</legend>

                    <div class="row">
                        <div class="col">
                            <label for="dondeQuienViveEIEdit" class="formV-label">Donde y con Quién Vive el Niño o la Niña:</label>
                            <textarea name="dondeQuienViveEIEdit" id="dondeQuienViveEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);" required></textarea>
                        </div>
                        <div class="col-sm-3">
                            <label for="">Tipo de Parto:</label>
                            <div class="form-check">
                                <div id="tipoPartoEIEditNormal"></div>
                                <div id="tipoPartoEIEditCesaria"></div>
                                <div id="tipoPartoEIEditForceps"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="enfermedadesEIEdit" class="formV-label">Enfermedades Padecidas:</label>
                            <textarea name="enfermedadesEIEdit" id="enfermedadesEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="vacunasEIEdit" class="formV-label">Vacunas Recibidas:</label>
                            <input type="text" name="vacunasEIEdit" id="vacunasEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="dificultadCaminarEIEdit" class="formV-label">Presto Dificultad para Caminar:</label>
                            <input type="text" name="dificultadCaminarEIEdit" id="dificultadCaminarEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="compromisoVisualEIEdit" class="formV-label">Compromiso Visual:</label>
                            <input type="text" name="compromisoVisualEIEdit" id="compromisoVisualEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="auditivosEIEdit" class="formV-label">Auditivos:</label>
                            <input type="text" name="auditivosEIEdit" id="auditivosEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="pronunciacionEIEdit" class="formV-label">Pronunciación:</label>
                            <input type="text" name="pronunciacionEIEdit" id="pronunciacionEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="otrasEIEdit" class="formV-label">Otras:</label>
                            <textarea name="otrasEIEdit" id="otrasEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                        <div class="col">
                            <label for="caracteristicasEIEdit" class="formV-label">Que Caracteristicas Presenta:</label>
                            <textarea name="caracteristicasEIEdit" id="caracteristicasEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="sueñoIntranquiloEIEdit" class="formV-label">Tiene Sueño Intranquilo:</label>
                            <input type="text" name="sueñoIntranquiloEIEdit" id="sueñoIntranquiloEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="esfinteresEIEdit" class="formV-label">Contrala las Esfínteres:</label>
                            <input type="text" name="esfinteresEIEdit" id="esfinteresEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="ayudaBanioEIEdit" class="formV-label">Necesita Ayuda para ir al Baño:</label>
                            <input type="text" name="ayudaBanioEIEdit" id="ayudaBanioEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="comeSoloEIEdit" class="formV-label">Come Solo:</label>
                            <input type="text" name="comeSoloEIEdit" id="comeSoloEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="alimentosPrefiereEIEdit" class="formV-label">Que Alimentos Prefiere:</label>
                            <input type="text" name="alimentosPrefiereEIEdit" id="alimentosPrefiereEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="alergicoEIEdit" class="formV-label">Es Alérgico:</label>
                            <input type="text" name="alergicoEIEdit" id="alergicoEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="alimentosProhibidosEIEdit">Que Alimentos son Prohibidos por Indicación Médica</label>
                            <input type="text" name="alimentosProhibidosEIEdit" id="alimentosProhibidosEIEdit" placeholder="Opcional" maxlength="100" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="fiebreMedicamentoEIEdit" class="formV-label">En Caso de Fiebre que Medicamento Suministra al Niño:</label>
                            <input type="text" name="fiebreMedicamentoEIEdit" id="fiebreMedicamentoEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="100" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                    <legend>Control de Talla:</legend>

                    Talla:

                    <div class="row">
                        <div class="col">
                            <label for="tallaOctubreEIEdit">Octubre:</label>
                            <input type="text" name="tallaOctubreEIEdit" id="tallaOctubreEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="tallaEneroEIEdit">Enero:</label>
                            <input type="text" name="tallaEneroEIEdit" id="tallaEneroEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="tallaAbrilEIEdit">Abril:</label>
                            <input type="text" name="tallaAbrilEIEdit" id="tallaAbrilEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="tallaJunioEIEdit">Junio:</label>
                            <input type="text" name="tallaJunioEIEdit" id="tallaJunioEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    Peso:

                    <div class="row">
                        <div class="col">
                            <label for="pesoOctubreEIEdit">Octubre:</label>
                            <input type="text" name="pesoOctubreEIEdit" id="pesoOctubreEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="pesoEneroEIEdit">Enero:</label>
                            <input type="text" name="pesoEneroEIEdit" id="pesoEneroEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="pesoAbrilEIEdit">Abril:</label>
                            <input type="text" name="pesoAbrilEIEdit" id="pesoAbrilEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="pesoJunioEIEdit">Junio:</label>
                            <input type="text" name="pesoJunioEIEdit" id="pesoJunioEIEdit" class="form-control"  pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <legend>Desarrollo Emocional:</legend>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for=""> ¿Demanda Atención de Adultos?</label>
                            <div class="form-check">
                                <div id="atencionAdultaEIEditPoca"></div>
                                <div id="atencionAdultaEIEditMucha"></div>
                                <div id="atencionAdultaEIEditNormal"></div>
                            </div>
                        </div>
                        <div class="col">
                            <label for="entretieneSoloEIEdit">¿Se Entretiene Solo(a)?</label>
                            <input type="text" name="entretieneSoloEIEdit" id="entretieneSoloEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col-sm-5">
                            <label for="expresaAfectoEIEdit">¿Expresa Afecto Hacia las Personas?</label>
                            <input type="text" name="expresaAfectoEIEdit" id="expresaAfectoEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-4">
                            <label for="enojaFrecuentementeEIEdit">¿Se Enoja con Frecuencia?</label>
                            <input type="text" name="enojaFrecuentementeEIEdit" id="enojaFrecuentementeEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="porqueEnojaEIEdit">¿Porque?</label>
                            <input type="text" name="porqueEnojaEIEdit" id="porqueEnojaEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <legend>Otros Datos de Interés:</legend>

                    <div class="row">
                        <div class="col">
                            <label for="miedosInfundidosEIEdit">Tiene Miedos Infundidos:</label>
                            <input type="text" name="miedosInfundidosEIEdit" id="miedosInfundidosEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="intranquiloEIEdit">Es Tremendamente Intranquilo:</label>
                            <input type="text" name="intranquiloEIEdit" id="intranquiloEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="tiempoViendoTvEIEdit">Pasa Mucho Tiempo Viendo TV:</label>
                            <input type="text" name="tiempoViendoTvEIEdit" id="tiempoViendoTvEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="programasTvEIEdit">Que Programas le Gusta:</label>
                            <input type="text" name="programasTvEIEdit" id="programasTvEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="tiempoGamingEIEdit">Pasa Mucho Tiempo con los Video Juegos:</label>
                            <input type="text" name="tiempoGamingEIEdit" id="tiempoGamingEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col">
                            <label for="gamesEIEdit">Cuales:</label>
                            <input type="text" name="gamesEIEdit" id="gamesEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <legend>Resumen de la Actividad del Niño:</legend>

                    <div class="row">
                        <div class="col">
                            <label for="actividadPeriodo1EIEdit">Primer Periodo:</label><br>
                            <textarea name="actividadPeriodo1EIEdit" id="actividadPeriodo1EIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="actividadPeriodo2EIEdit">Segundo Periodo:</label><br>
                            <textarea name="actividadPeriodo2EIEdit" id="actividadPeriodo2EIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="actividadPeriodo3EIEdit">Tercer Periodo:</label><br>
                            <textarea name="actividadPeriodo3EIEdit" id="actividadPeriodo3EIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>

                    <legend>*Infromación Acerca de que Hace la Familia Cuando el Niño o la Niña Comete Alguna Falta, Entre Otras:</legend>

                    <div class="row">
                        <div class="col">
                            <textarea name="infoCometeFaltaEIEdit" id="infoCometeFaltaEIEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="200" required onkeyup="mayus(this.id, this.value);" required></textarea>
                        </div>
                    </div>
                    <br>            

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalEditarEIEdit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-warning" value="Modificar">
                </div>

            </div>
        </div>
    </div>

</form>