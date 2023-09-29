<div class="modal fade" id="modalAgregarEI" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Inscribir Nuevo Estudiante de Educación Inicial</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetModalAgregarEstudianteI()"></button>
            </div>

            <a id="topEI"></a>

            <div class="modal-body">
                
                <p style="text-align: justify;"><b>Asegurese de llenar los campos requeridos correctamente, ya que algunos no podrán ser modificados más tarde, podrá formalizar la inscripción de los estudiantes al final del registro o más adelante.</b></p>

                <form id="formAgregarEstudianteI" method="POST" autocomplete="off" onsubmit="return agregarEstudianteI()">

                    <div style="text-align:center; margin-top:20px; margin-bottom:15px;">
                        <span id="step1" class="step active">1</span>
                        <span id="step2" class="step">2</span>
                        <span id="step3" class="step">3</span>
                        <span id="step4" class="step">4</span>
                        <span id="step5" class="step">5</span>
                    </div>

                    <fieldset id="aggEIPart1">

                        <legend>Datos del Niño o Niña:</legend>

                        <div class="row">
                            <div class="col formV-group" id="apellidosEIGroup">
                                <label for="apellidosEI" class="formV-label">Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="apellidosEI" id="apellidosEI" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar apellidos validos.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="nombresEIGroup">
                                <label for="nombresEI" class="formV-label">Nombres:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombresEI" id="nombresEI" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar nombres validos.</small>
                                </div>
                            </div>
                            <div class="col-sm-4 formV-group" id="cEscolarEIGroup">
                                <label for="cEscolarEI" class="formV-label">Cédula:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cEscolarEI" id="cEscolarEI" class="form-control formV-input input-no-space" maxlength="11">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Cédula invalida.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="fechaNacimientoEIGroup">
                                <label for="fechaNacimientoEI" class="formV-label">Fecha de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaNacimientoEI" id="fechaNacimientoEI" class="form-control formV-input" placeholder="dd-mm-aaaa" readonly="">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar la fecha de nacimiento.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="edadAniosEI">Edad (Años):</label>
                                <input type="text" name="edadAniosEI" id="edadAniosEI" class="form-control input-readonly" readonly="">
                            </div>
                            <div class="col">
                                <label for="edadMesesEI">Edad (Meses):</label>
                                <input type="text" name="edadMesesEI" id="edadMesesEI" class="form-control input-readonly" readonly="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="lugarNacimientoEIGroup">
                                <label for="lugarNacimientoEI" class="formV-label">Lugar de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="lugarNacimientoEI" id="lugarNacimientoEI" class="form-control formV-input"
                                    maxlength="80" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar el luegar de nacimiento.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 formV-group" id="estadoNatalEIGroup">
                                <label for="estadoNatalEI" class="formV-label">Estado:</label>
                                <div class="formV-group-input">
                                    <div id="cargarEstadoNatalEI"></div>
                                </div>
                            </div>
                            <div class="col formV-group" id="municipioNatalEIGroup">
                                <label for="municipioNatalEI" class="formV-label">Municipio:</label>
                                <div class="formV-group-input">
                                    <div id="cargarMunicipioNatalEI"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe selecionar un municipio.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="parroquiaNatalEIGroup">
                                <label for="parroquiaNatalEI" class="formV-label">Parroquia:</label>
                                <div class="formV-group-input">
                                    <div id="cargarParroquiaNatalEI"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe selecionar una parroquia.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="direccionHabitacionEIGroup">
                                <label for="direccionHabitacionEI" class="formV-label">Dirección de Habitación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionHabitacionEI" id="direccionHabitacionEI" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar la dirección.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="right">
                                <a href="#topEI" class="btn btn-primary" id="btnGoAggEIPart2">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggEIPart2" style="display: none;">

                        <div class="row">
                            <div class="col-sm-6">
                                <legend>Datos del Representante 1:</legend>
                            </div>
                            <div class="col-sm-6 formV-group" id="parentescoREI1Group">
                                <div class="formV-group-input">
                                    <select name="parentescoREI1" id="parentescoREI1" class="form-control form-select formV-input">
                                        <option selected disabled value="">Seleccione el parentesco</option>
                                        <option value="Madre">Madre</option>
                                        <option value="Padre">Padre</option>
                                        <option value="Representante">Representante</option>
                                    </select>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="nombreCompletoREI1Group">
                                <label for="nombreCompletoREI1" class="formV-label">Nombres y Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombreCompletoREI1" id="nombreCompletoREI1" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                            <div class="col-sm-4 formV-group" id="cedulaREI1Group">
                                <label for="cedulaREI1" class="formV-label">C.I. N°:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaREI1" id="cedulaREI1" class="form-control formV-input" maxlength="8">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Cédula invalida.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="edadREI1Group">
                                <label for="edadREI1" class="formV-label">Edad:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="edadREI1" id="edadREI1" class="form-control formV-input" maxlength="2">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Edad invalida.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="nacionalidadREI1Group">
                                <label for="nacionalidadREI1" class="formV-label">Nacionalidad:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nacionalidadREI1" id="nacionalidadREI1" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar la nacionalidad.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="gradoInstrucionREI1Group">
                                <label for="gradoInstrucionREI1" class="formV-label">Grado de Instrucción:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="gradoInstrucionREI1" id="gradoInstrucionREI1" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar el grado de instrucción.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3 formV-group" id="trabajaREI1Group">
                                <label for="">Trabaja:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="trabajaREI1" id="siTrabajaREI1" value="Si" class="form-check-input formV-input"> Si</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="trabajaREI1" id="noTrabajaREI1" value="No" class="form-check-input formV-input"> No</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col formV-group" id="direccionTrabajoREI1Group">
                                <label for="direccionTrabajoREI1" class="formV-label">Dirección de Trabajo:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionTrabajoREI1" id="direccionTrabajoREI1" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una dirección.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3 formV-group" id="viveREI1Group">
                                <label for="">Vive:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="viveREI1" id="siViveREI1" value="Si" class="form-check-input formV-input"> Si</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="viveREI1" id="noViveREI1" value="No" class="form-check-input formV-input"> No</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCasaREI1" class="formV-label">Teléfono Casa:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelCasaREI1"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoCasaREI1Group">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoCasaREI1" id="telefonoCasaREI1" class="form-control formV-input" maxlength="10">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número de teléfono invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCelREI1" class="formV-label">Teléfono Celular:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelCelREI1"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoCelREI1Group">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoCelREI1" id="telefonoCelREI1" class="form-control formV-input" maxlength="10">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número de teléfono invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col formV-group" id="direccionHabitacionREI1Group">
                                <label for="direccionHabitacionREI1" class="formV-label">Dirección de Habitación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionHabitacionREI1" id="direccionHabitacionREI1" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una dirección.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-6">
                                <legend>Datos del Representante 2:</legend>
                            </div>
                            <div class="col-sm-6">
                                <div id="cargarParentescoREI2"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="nombreCompletoREI2Group">
                                <label for="nombreCompletoREI2" class="formV-label">Nombres y Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombreCompletoREI2" id="nombreCompletoREI2" class="form-control formV-input" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                            <div class="col-sm-4 formV-group" id="cedulaREI2Group">
                                <label for="cedulaREI2" class="formV-label">C.I. N°:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaREI2" id="cedulaREI2" class="form-control formV-input" maxlength="8" placeholder="Opcional">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Cédula invalida.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="edadREI2Group">
                                <label for="edadREI2" class="formV-label">Edad:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="edadREI2" id="edadREI2" class="form-control formV-input" maxlength="2" placeholder="Opcional">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Edad invalida.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="nacionalidadREI2" class="formV-label">Nacionalidad:</label>
                                <input type="text" name="nacionalidadREI2" id="nacionalidadREI2" class="form-control" maxlength="50" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="gradoInstrucionREI2" class="formV-label">Grado de Instrucción:</label>
                                <input type="text" name="gradoInstrucionREI2" id="gradoInstrucionREI2" class="form-control" maxlength="50" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3 formV-group" id="trabajaREI2Group">
                                <label for="">Trabaja:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="trabajaREI2" id="siTrabajaREI2" value="Si" class="form-check-input formV-input"> Si</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="trabajaREI2" id="noTrabajaREI2" value="No" class="form-check-input formV-input"> No</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="direccionTrabajoREI2" class="formV-label">Dirección de Trabajo:</label>
                                <input type="text" name="direccionTrabajoREI2" id="direccionTrabajoREI2" class="form-control" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3 formV-group" id="viveREI2Group">
                                <label for="">Vive:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="viveREI2" id="siViveREI2" value="Si" class="form-check-input formV-input"> Si</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="viveREI2" id="noViveREI2" value="No" class="form-check-input formV-input"> No</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCasaREI2" class="formV-label">Teléfono Casa:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelCasaREI2"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoCasaREI2Group">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoCasaREI2" id="telefonoCasaREI2" class="form-control formV-input" maxlength="10" placeholder="Opcional">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número de teléfono invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCelREI2" class="formV-label">Teléfono Celular:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelCelREI2"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoCelREI2Group">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoCelREI2" id="telefonoCelREI2" class="form-control formV-input" maxlength="10" placeholder="Opcional">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número de teléfono invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="direccionHabitacionREI2" class="formV-label">Dirección de Habitación:</label>
                                <input type="text" name="direccionHabitacionREI2" id="direccionHabitacionREI2" class="form-control" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <legend>Situación de los Padres:</legend>

                        <div class="row">
                            <div class="col formV-group" id="situacionPadresEIGroup">
                                <label for="situacionPadresEI">Situación de los Padres:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="situacionPadresEI" id="convivenSituacionPadresEI" value="Conviven" class="form-check-input formV-input"> Conviven</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="situacionPadresEI" id="separadosSituacionPadresEI" value="Separados" class="form-check-input formV-input"> Separados</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topEI" class="btn btn-primary" id="btnBackAggEIPart1">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topEI" class="btn btn-primary" id="btnGoAggEIPart3">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEIPart3" style="display: none;">

                        <legend>Datos Familiares Autorizados para Representarlos:</legend>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="autorizacionFEI">Tiene Autorización:</label>
                                <div class="mb-3 form-check form-switch">
                                    <input type="hidden" name="autorizacionFEI" value="0">
                                    <label class="form-check-label formV-label"><input type="checkbox" name="autorizacionFEI" id="autorizacionFEI" value="1" class="form-check-input" role="switch"> Marque solo si tiene autorización.</label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="organismoAutorizacionFEI" class="formV-label">Que Organismo la Otorga:</label>
                                <input type="text" name="organismoAutorizacionFEI" id="organismoAutorizacionFEI" class="form-control" maxlength="100" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="tieneHermanosEI">Tiene Hermanos:</label>
                                <div class="mb-3 form-check form-switch">
                                    <input type="hidden" name="tieneHermanosEI" value="0">
                                    <label class="form-check-label formV-label"><input type="checkbox" name="tieneHermanosEI" id="tieneHermanosEI" value="1" class="form-check-input" role="switch"> Marque solo si tiene hermanos.</label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="cuantosHermanosEI" class="formV-label">¿Cuantos Hermanos Tiene? V: H:</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" name="cuantosHermanosEI" id="cuantosHermanosEI" class="form-control" maxlength="2">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="cuantosHermanosVEI" id="cuantosHermanosVEI" class="form-control" maxlength="2">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="cuantosHermanosHEI" id="cuantosHermanosHEI" class="form-control" maxlength="2">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="lugarHermanosEI" class="formV-label">Lugar que Ocupa Entre Ellos:</label>
                                <input type="text" name="lugarHermanosEI" id="lugarHermanosEI" class="form-control" maxlength="20" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="quienDuermeEI" class="formV-label">¿Con Quién Duerme?</label>
                                <input type="text" name="quienDuermeEI" id="quienDuermeEI" class="form-control" maxlength="80" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="quienJuegaEI" class="formV-label">¿Con Quién Juega?</label>
                                <input type="text" name="quienJuegaEI" id="quienJuegaEI" class="form-control" maxlength="80" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col formV-group" id="localizarFEIGroup">
                                <label for="localizarFEI" class="formV-label">*Donde Localizar a la Familia o Responsable del Niño o la Niña en Caso de Alguna Emergencia:</label>
                                <div class="formV-group-input">
                                    <textarea name="localizarFEI" id="localizarFEI" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>

                        <legend>Antecedentes del Niño(a):</legend>

                        <div class="row">
                            <div class="col formV-group" id="dondeQuienViveEIGroup">
                                <label for="dondeQuienViveEI" class="formV-label">Donde y con Quién Vive el Niño o la Niña:</label>
                                <div class="formV-group-input">
                                    <textarea name="dondeQuienViveEI" id="dondeQuienViveEI" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                            <div class="col-sm-3 formV-group" id="tipoPartoEIGroup">
                                <label for="">Tipo de Parto:</label>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="tipoPartoEI" id="normalTipoPartoEI" value="Normal" class="form-check-input formV-input"> Normal</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="tipoPartoEI" id="cesariaTipoPartoEI" value="Cesaría" class="form-check-input formV-input"> Cesaría</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="tipoPartoEI" id="forcepsTipoPartoEI" value="Fórceps" class="form-check-input formV-input"> Fórceps</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="enfermedadesEI" class="formV-label">Enfermedades Padecidas:</label>
                                <textarea name="enfermedadesEI" id="enfermedadesEI" class="form-control" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="vacunasEI" class="formV-label">Vacunas Recibidas:</label>
                                <input type="text" name="vacunasEI" id="vacunasEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="dificultadCaminarEI" class="formV-label">Presto Dificultad para Caminar:</label>
                                <input type="text" name="dificultadCaminarEI" id="dificultadCaminarEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="compromisoVisualEI" class="formV-label">Compromiso Visual:</label>
                                <input type="text" name="compromisoVisualEI" id="compromisoVisualEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="auditivosEI" class="formV-label">Auditivos:</label>
                                <input type="text" name="auditivosEI" id="auditivosEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="pronunciacionEI" class="formV-label">Pronunciación:</label>
                                <input type="text" name="pronunciacionEI" id="pronunciacionEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="otrasEI" class="formV-label">Otras:</label>
                                <textarea name="otrasEI" id="otrasEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                            <div class="col">
                                <label for="caracteristicasEI" class="formV-label">Que Caracteristicas Presenta:</label>
                                <textarea name="caracteristicasEI" id="caracteristicasEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="sueñoIntranquiloEI" class="formV-label">Tiene Sueño Intranquilo:</label>
                                <input type="text" name="sueñoIntranquiloEI" id="sueñoIntranquiloEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="esfinteresEI" class="formV-label">Contrala las Esfínteres:</label>
                                <input type="text" name="esfinteresEI" id="esfinteresEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="ayudaBanioEI" class="formV-label">Necesita Ayuda para ir al Baño:</label>
                                <input type="text" name="ayudaBanioEI" id="ayudaBanioEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="comeSoloEI" class="formV-label">Come Solo:</label>
                                <input type="text" name="comeSoloEI" id="comeSoloEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alimentosPrefiereEI" class="formV-label">Que Alimentos Prefiere:</label>
                                <input type="text" name="alimentosPrefiereEI" id="alimentosPrefiereEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alergicoEI" class="formV-label">Es Alérgico:</label>
                                <input type="text" name="alergicoEI" id="alergicoEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alimentosProhibidosEI">Que Alimentos son Prohibidos por Indicación Médica</label>
                                <input type="text" name="alimentosProhibidosEI" id="alimentosProhibidosEI" placeholder="Opcional" maxlength="100" class="form-control" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="fiebreMedicamentoEIGroup">
                                <label for="fiebreMedicamentoEI" class="formV-label">En Caso de Fiebre que Medicamento Suministra al Niño:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fiebreMedicamentoEI" id="fiebreMedicamentoEI" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar los medicamentos.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topEI" class="btn btn-primary" id="btnBackAggEIPart2">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topEI" class="btn btn-primary" id="btnGoAggEIPart4">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEIPart4" style="display: none;">

                        <legend>Control de Talla:</legend>

                        Talla:

                        <div class="row">
                            <div class="col">
                                <label for="tallaOctubreEI">Octubre:</label>
                                <input type="text" name="tallaOctubreEI" id="tallaOctubreEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="tallaEneroEI">Enero:</label>
                                <input type="text" name="tallaEneroEI" id="tallaEneroEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="tallaAbrilEI">Abril:</label>
                                <input type="text" name="tallaAbrilEI" id="tallaAbrilEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="tallaJunioEI">Junio:</label>
                                <input type="text" name="tallaJunioEI" id="tallaJunioEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        Peso:

                        <div class="row">
                            <div class="col">
                                <label for="pesoOctubreEI">Octubre:</label>
                                <input type="text" name="pesoOctubreEI" id="pesoOctubreEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="pesoEneroEI">Enero:</label>
                                <input type="text" name="pesoEneroEI" id="pesoEneroEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="pesoAbrilEI">Abril:</label>
                                <input type="text" name="pesoAbrilEI" id="pesoAbrilEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="pesoJunioEI">Junio:</label>
                                <input type="text" name="pesoJunioEI" id="pesoJunioEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <legend>Desarrollo Emocional:</legend>

                        <div class="row">
                            <div class="col-sm-4 formV-group" id="atencionAdultaEIGroup">
                                <label for=""> ¿Demanda Atención de Adultos?</label>
                                <div class="form-check formV-group-input">
                                    <label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEI" id="pocaAtencionAdultaEI" value="Poca" class="form-check-input formV-input"> Poca</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEI" id="muchaAtencionAdultaEI" value="Mucha" class="form-check-input formV-input"> Mucha</label><br>
                                    <label class="form-check-label formV-label"><input type="radio" name="atencionAdultaEI" id="normalAtencionAdultaEI" value="Normal" class="form-check-input formV-input"> Normal</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col">
                                <label for="entretieneSoloEI">¿Se Entretiene Solo(a)?</label>
                                <input type="text" name="entretieneSoloEI" id="entretieneSoloEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col-sm-5">
                                <label for="expresaAfectoEI">¿Expresa Afecto Hacia las Personas?</label>
                                <input type="text" name="expresaAfectoEI" id="expresaAfectoEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="enojaFrecuentementeEI">¿Se Enoja con Frecuencia?</label>
                                <input type="text" name="enojaFrecuentementeEI" id="enojaFrecuentementeEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="porqueEnojaEI">¿Porque?</label>
                                <input type="text" name="porqueEnojaEI" id="porqueEnojaEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <legend>Otros Datos de Interés:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="miedosInfundidosEI">Tiene Miedos Infundidos:</label>
                                <input type="text" name="miedosInfundidosEI" id="miedosInfundidosEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="intranquiloEI">Es Tremendamente Intranquilo:</label>
                                <input type="text" name="intranquiloEI" id="intranquiloEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="tiempoViendoTvEI">Pasa Mucho Tiempo Viendo TV:</label>
                                <input type="text" name="tiempoViendoTvEI" id="tiempoViendoTvEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="programasTvEI">Que Programas le Gusta:</label>
                                <input type="text" name="programasTvEI" id="programasTvEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="tiempoGamingEI">Pasa Mucho Tiempo con los Video Juegos:</label>
                                <input type="text" name="tiempoGamingEI" id="tiempoGamingEI" class="form-control" placeholder="Opcional" maxlength="80" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="gamesEI">Cuales:</label>
                                <input type="text" name="gamesEI" id="gamesEI" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topEI" class="btn btn-primary" id="btnBackAggEIPart3">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topEI" class="btn btn-primary" id="btnGoAggEIPart5">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggEIPart5" style="display: none;">

                        <legend>Resumen de la Actividad del Niño:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="actividadPeriodo1EI">Primer Periodo:</label><br>
                                <textarea name="actividadPeriodo1EI" id="actividadPeriodo1EI" class="form-control" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="actividadPeriodo2EI">Segundo Periodo:</label><br>
                                <textarea name="actividadPeriodo2EI" id="actividadPeriodo2EI" class="form-control" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="actividadPeriodo3EI">Tercer Periodo:</label><br>
                                <textarea name="actividadPeriodo3EI" id="actividadPeriodo3EI" class="form-control" placeholder="Opcional" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>

                        <legend>*Infromación Acerca de que Hace la Familia Cuando el Niño o la Niña Comete Alguna Falta, Entre Otras:</legend>

                        <div class="row">
                            <div class="col">
                                <textarea name="infoCometeFaltaEI" id="infoCometeFaltaEI" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="200" required onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3" align="left">
                                <a href="#topEI" class="btn btn-primary" id="btnBackAggEIPart4">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <input type="submit" id="btnRegistrarEI" class="btn btn-success" value="Registrar">
                            </div>
                        </div>

                    </fieldset>

                </form>

            </div>

            <div class="modal-footer">
                <button type="button" id="btnCerrarModalAgregarEstudianteI" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalAgregarEstudianteI()">Cerrar</button>
            </div>

        </div>
    </div>
</div>