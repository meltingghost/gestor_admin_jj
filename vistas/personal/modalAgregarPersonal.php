<div class="modal fade" id="modalAgregarPersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetFormAgregarPersonal()"></button>
            </div>

            <a id="topP"></a>

            <div class="modal-body">

                <p style="text-align: justify;"><b>Asegurese de llenar los campos requeridos correctamente ya que algunos no podrán ser modificados más adelante.</b></p>

                <form id="formAgregarPersonal" method="POST" autocomplete="off" onsubmit="return agregarPersonal()">

                    <div style="text-align:center; margin-top:20px; margin-bottom:15px;">
                        <span id="step1" class="step active">1</span>
                        <span id="step2" class="step">2</span>
                        <span id="step3" class="step">3</span>
                        <span id="step4" class="step">4</span>
                        <span id="step5" class="step">5</span>
                    </div>

                    <fieldset id="aggPersonalPart1" style="display: block;">

                        <legend>1.- Tipo de Personal:</legend>

                        <div class="row">
                            <div class="col-sm-12 col-md-3 formV-group" id="tipoPersonalGroup">
                                <label> Tipo de Personal:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="formV-label form-check-label"><input type="radio" name="tipoPersonal" id="docente" class="form-check-input formV-input" value="Docente"> Docente</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="tipoPersonal" id="administrativo" class="form-check-input formV-input" value="Administrativo"> Administrativo</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="tipoPersonal" id="obrero" class="form-check-input formV-input" value="Obrero"> Obrero</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="tipoPersonal" id="cocinera" class="form-check-input formV-input" value="Cocinera"> Cocinera</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="tipoPersonal" id="integral" class="form-check-input formV-input" value="Integral"> Integral</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                             <div class="col-sm-12 col-md-3 formV-group" id="codigoPersonalGroup">
                                <label for="codigoPersonal" class="formV-label">Código:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="codigoPersonal" id="codigoPersonal" class="form-control formV-input input-no-space" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un código valido.</small>
                                </div>
                            </div>
                             <div class="col-sm-12 col-md-3">
                                <label for="">Traslado:</label><br>
                                <input type="hidden" name="trasladoPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="trasladoPersonal" id="trasladoPersonal" class="form-check-input" value="1"> Marque solo si es un traslado.</label>
                                </div>
                            </div>
                             <div class="col-sm-12 col-md-3">
                                <label for="fechaPersonal" class="formV-label">Fecha:</label>
                                <?php 
                                    include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                                ?>
                                <input type="text" name="fechaPersonal" id="fechaPersonal" class="form-control input-readonly" placeholder="<?php echo $fechaActual; ?>" value="<?php echo $fechaActual; ?>" readonly="">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="right">
                                <a href="#topP" class="btn btn-primary" id="btnGoAggPersonalPart2">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart2" style="display: none;">
                        
                        <legend>2.- Identificación:</legend>

                        <div class="row">
                            <div class="col formV-group" id="nombreCompletoPersonalGroup">
                                <label for="nombreCompletoPersonal" class="formV-label">Nombres y Apellidos:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nombreCompletoPersonal" id="nombreCompletoPersonal" class="form-control formV-input" maxlength="100" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un nombre valido.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-2 col-lg-3 formV-group" id="cedulaPersonalGroup">
                                <label for="cedulaPersonal" class="formV-label">Cédula:</label>
                                <div class="formV-group-input">
                                    <input type="number" name="cedulaPersonal" id="cedulaPersonal" class="form-control formV-input input-no-space">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una cédula valida.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 formV-group" id="fechaNacimientoPersonalGroup">
                                <label for="fechaNacimientoPersonal" class="formV-label">Fecha de Nacimiento:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaNacimientoPersonal" id="fechaNacimientoPersonal" class="form-control formV-input input-readonly" placeholder="dd-mm-aaaa" readonly="">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar una fecha.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 col-lg-2 formV-group" id="sexoPersonalGroup">
                                <label> Sexo:</label><br>
                                <div class="form-check formV-group-input">
                                    <label class="formV-label form-check-label"><input type="radio" name="sexoPersonal" id="masculino" class="form-check-input formV-input" value="Masculino"> Masculino</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="sexoPersonal" id="femenino" class="form-check-input formV-input" value="Femenino"> Femenino</label><br>
                                    <label class="formV-label form-check-label"><input type="radio" name="sexoPersonal" id="otro" class="form-check-input formV-input" value="Otro"> Otro</label><br>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una opción.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label for="grupoSanguineoPersonal" class="formV-label">Grupo Sanguineo:</label>
                                        <select name="grupoSanguineoPersonal" id="grupoSanguineoPersonal" class="form-control form-select">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="factorRhPersonal" class="formV-label">Factor Rh:</label>
                                        <select name="factorRhPersonal" id="factorRhPersonal" class="form-control form-select">
                                            <option value="+">+</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="nivelInstrucionPersonalGroup">
                                <label for="nivelInstrucionPersonal" class="formV-label">Nivel de Instrucción:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="nivelInstrucionPersonal" id="nivelInstrucionPersonal" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un nivel.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="especialidadPersonal" class="formV-label">Especialidad:</label>
                                <input type="text" name="especialidadPersonal" id="especialidadPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="egresadoPersonalGroup">
                                <label for="egresadoPersonal" class="formV-label">Egresado de:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="egresadoPersonal" id="egresadoPersonal" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar de egreso.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="preGradoPersonal" class="formV-label">Nivel de Pregrado:</label>
                                <input type="text" name="preGradoPersonal" id="preGradoPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="postGradoPersonal" class="formV-label">Nivel de Postgrado:</label>
                                <input type="text" name="postGradoPersonal" id="postGradoPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="condicionMedicaPersonal" class="formV-label">Posee Alguna Condición Medica:</label>
                                <textarea name="condicionMedicaPersonal" id="condicionMedicaPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col formV-group" id="direccionPersonalGroup">
                                <label for="direccionPersonal" class="formV-label">Dirección de Habitación:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="direccionPersonal" id="direccionPersonal" class="form-control formV-input" maxlength="150" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un lugar.</small>
                                </div>
                            </div>
                        </div>
                        <br>

                        <p>En caso de que solo posea un número telefónico complete la primera casilla solamente.</p>

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <label for="telefonoPersonal" class="formV-label">N° de Teléfono:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelPersonal"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoPersonalGroup">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoPersonal" id="telefonoPersonal" class="form-control formV-input input-no-space">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número telefónico invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="telefono2Personal" class="formV-label">N° de Teléfono Personal:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTel2Personal"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefono2PersonalGroup">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefono2Personal" id="telefono2Personal" class="form-control formV-input input-no-space" placeholder="Opcional">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número telefónico invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="telefonoOpcionalPersonal" class="formV-label">N° de Teléfono Opcional:</label>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div id="cargarCodigoTelOpcionalPersonal"></div>
                                    </div>
                                    <div class="col-sm-7 formV-group" id="telefonoOpcionalPersonalGroup">
                                        <div class="formV-group-input">
                                            <input type="number" name="telefonoOpcionalPersonal" id="telefonoOpcionalPersonal" class="form-control formV-input input-no-space" placeholder="Opcional">
                                            <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                            <small class="form-text text-red formV-input-error">Número telefónico invalido.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="correoPersonalGroup">
                                <label for="correoPersonal" class="formV-label">Correo Electrónico:</label>
                                <div class="formV-group-input">
                                    <input type="email" name="correoPersonal" id="correoPersonal" class="form-control formV-input input-no-space" maxlength="80">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un correo.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 formV-group" id="cuentaNominaPersonalGroup">
                                <label for="cuentaNominaPersonal" class="formV-label">Número de Cuenta Nómina:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="cuentaNominaPersonal" id="cuentaNominaPersonal" class="form-control formV-input input-no-space" maxlength="20">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un número de cuenta.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4" class="formV-label">
                                <label for="tipoCuentaPersonal" class="formV-label">Tipo de Cuenta:</label>
                                <select name="tipoCuentaPersonal" id="tipoCuentaPersonal" class="form-control form-select">
                                    <option value="Ahorro">Ahorro</option>
                                    <option selected value="Corriente">Corriente</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topP" class="btn btn-primary" id="btnBackAggPersonalPart1">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topP" class="btn btn-primary" id="btnGoAggPersonalPart3">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart3" style="display: none;">
                        
                        <legend>3.- Datos del Cargo Actual:</legend>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="funcionPersonalGroup">
                                <label for="funcionPersonal" class="formV-label">Función Actual:</label>
                                <div class="formV-group-input">
                                    <div id="cargarFuncionPersonal"></div>
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Seleccione una función.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="especialistaPersonal" class="formV-label">Especialista:</label>
                                <input type="text" name="especialistaPersonal" id="especialistaPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="fechaIngresoPersonalGroup">
                                <label for="fechaIngresoPersonal" class="formV-label">Fecha de Ingreso al Sistema Educativo:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="fechaIngresoPersonal" id="fechaIngresoPersonal" class="form-control formV-input input-readonly" placeholder="dd-mm-aaaa" readonly="">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar una fecha.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="observacionPersonal" class="formV-label">Observación:</label>
                                <input type="text" name="observacionPersonal" id="observacionPersonal" class="form-control" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-6 formV-group" id="codigoVoucherPersonalGroup">
                                <label for="codigoVoucherPersonal" class="formV-label">Código por Voucher:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="codigoVoucherPersonal" id="codigoVoucherPersonal" class="form-control formV-input input-no-space" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar un código válido.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 formV-group" id="cargoVoucherPersonalGroup">
                                <label for="cargoVoucherPersonal" class="formV-label">Cargo por Voucher:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="cargoVoucherPersonal" id="cargoVoucherPersonal" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar un cargo.</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-4 formV-group" id="adscritoPersonalGroup">
                                <label for="adscritoPersonal" class="formV-label">¿Esta Adscrito a la Institución?:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="adscritoPersonal" id="adscritoPersonal" class="form-control formV-input" maxlength="50" onkeyup="mayus(this.id, this.value);">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe indicar si está adscrito.</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="codigoIPersonal" class="formV-label">Código de Educación Inicial:</label>
                                <input type="text" name="codigoIPersonal" id="codigoIPersonal" class="form-control input-no-space
                                " placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <label for="codigoBPersonal" class="formV-label">Código de Educación Primaria</label>
                                <input type="text" name="codigoBPersonal" id="codigoBPersonal" class="form-control input-no-space
                                " placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topP" class="btn btn-primary" id="btnBackAggPersonalPart2">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topP" class="btn btn-primary" id="btnGoAggPersonalPart4">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart4" style="display: none;">
                        
                        <legend>4.- Solo para el Personal que Proviene de Otra Institución:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="institucionPersonal" class="formV-label">Nombre de la Institución:</label>
                                <input type="text" name="institucionPersonal" id="institucionPersonal" class="form-control" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="codigoDependenciaPersonal" class="formV-label">Código de Dependencia:</label>
                                <input type="text" name="codigoDependenciaPersonal" id="codigoDependenciaPersonal" class="form-control input-no-space"  placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="codigoDeaPersonal" class="formV-label">Código DEA:</label>
                                <input type="text" name="codigoDeaPersonal" id="codigoDeaPersonal" class="form-control input-no-space" placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <a href="#topP" class="btn btn-primary" id="btnBackAggPersonalPart3">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <a href="#topP" class="btn btn-primary" id="btnGoAggPersonalPart5">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart5" style="display: none;">
                        
                        <legend>5.- Anexar:</legend>
                        <p><b>Para completar el registro de personal se deben presentar los siguientes documentos de forma física, marque los documentos que hayan sido presentados.</b></p>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="">Copia de Cédula de Identidad Ampliada:</label>
                                <input type="hidden" name="copiaCIPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="copiaCIPersonal" id="copiaCIPersonal" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="">Copia de Credencial:</label>
                                <input type="hidden" name="copiaCredencialPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="copiaCredencialPersonal" id="copiaCredencialPersonal" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <label for="">Constancia de Trabajo:</label>
                                <input type="hidden" name="constanciaTrabajoPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="constanciaTrabajoPersonal" id="constanciaTrabajoPersonal" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentada.</label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label for="">Recibo de Pago:</label>
                                <input type="hidden" name="reciboPagoPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="reciboPagoPersonal" id="reciboPagoPersonal" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentado.</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="">Sintesis Curricular:</label>
                                <input type="hidden" name="curriculoPersonal" value="0">
                                <div class="mb-3 form-check form-switch">
                                    <label class="formV-label form-check-label"><input type="checkbox" name="curriculoPersonal" id="curriculoPersonal" class="form-check-input" value="1"> Marque solo en caso de que haya sido presentado.</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3" align="left">
                                <a href="#topP" class="btn btn-primary" id="btnBackAggPersonalPart4">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </a>
                            </div>
                            <div class="col" align="right">
                                <input type="submit" id="btnRegistrarPersonal" class="btn btn-success" value="Registrar">
                            </div>
                        </div>

                    </fieldset>
    
                </form>

            </div>

            <div class="modal-footer">
               <button type="button" id="btnCerrarModalAgregarPersonal" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetFormAgregarPersonal()">Cerrar</button>
            </div>

        </div>
    </div>
</div>
