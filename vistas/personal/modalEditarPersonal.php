<form id="formEditarPersonal" method="POST" autocomplete="off" onsubmit="return modificarPersonal()">

    <div class="modal fade" id="modalEditarPersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <div class="modal-header bg-warning">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Personal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <p style="text-align: justify;"><b>Aqui podrá modificar el personal, algunos campos no podrán ser modificados.</b></p>

                    <legend>1.- Tipo de Personal:</legend>

                    <input type="hidden" name="idPersonalEdit" id="idPersonalEdit">

                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <label> Tipo de Personal:</label><br>
                            <div class="form-check">
                                <div id="tipoPersonalEditDocente"></div>
                                <div id="tipoPersonalEditAdministrativo"></div>
                                <div id="tipoPersonalEditObrero"></div>
                                <div id="tipoPersonalEditCocinera"></div>
                                <div id="tipoPersonalEditIntegral"></div>
                            </div>
                        </div>
                         <div class="col-sm-12 col-md-3">
                            <label for="codigoPersonalEdit" class="formV-label">Código:</label>
                            <input type="text" name="codigoPersonalEdit" id="codigoPersonalEdit" class="form-control input-no-space" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ 1-9]+" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                         <div class="col-sm-12 col-md-3">
                            <label for="">Traslado:</label><br>
                            <input type="hidden" name="trasladoPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="trasladoPersonalEdit"></div>
                            </div>
                        </div>
                         <div class="col-sm-12 col-md-3">
                            <label for="fechaPersonalEdit" class="formV-label">Fecha:</label>
                            <input type="text" name="fechaPersonalEdit" id="fechaPersonalEdit" class="form-control input-readonly" readonly="">
                        </div>
                    </div>
                    <br>
                    
                    <legend>2.- Identificación:</legend>

                    <div class="row">
                        <div class="col">
                            <label for="nombreCompletoPersonalEdit" class="formV-label">Nombres y Apellidos:</label>
                            <input type="text" name="nombreCompletoPersonalEdit" id="nombreCompletoPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-lg-3">
                            <label for="cedulaPersonalEdit" class="formV-label">Cédula:</label>
                            <input type="number" name="cedulaPersonalEdit" id="cedulaPersonalEdit" class="form-control input-no-space input-readonly" pattern="[0-9]+" readonly>
                        </div>
                        <div class="col-sm-12 col-md-2">
                            <label for="fechaNacimientoPersonalEdit" class="formV-label">Fecha de Nacimiento:</label>
                            <input type="text" name="fechaNacimientoPersonalEdit" id="fechaNacimientoPersonalEdit" class="form-control input-readonly" placeholder="dd-mm-aaaa" readonly="">
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-2">
                            <label> Sexo:</label><br>
                            <div class="form-check">
                                <div id="sexoPersonalEditMasculino"></div>
                                <div id="sexoPersonalEditFemenino"></div>
                                <div id="sexoPersonalEditOtro"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="grupoSanguineoPersonalEdit" class="formV-label">Grupo Sanguineo:</label>
                                    <input type="text" name="grupoSanguineoPersonalEdit" id="grupoSanguineoPersonalEdit" class="form-control input-readonly" readonly>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="factorRhPersonalEdit" class="formV-label">Factor Rh:</label>
                                    <input type="text" name="factorRhPersonalEdit" id="factorRhPersonalEdit" class="form-control input-readonly" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="nivelInstrucionPersonalEdit" class="formV-label">Nivel de Instrucción:</label>
                            <input type="text" name="nivelInstrucionPersonalEdit" id="nivelInstrucionPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="especialidadPersonalEdit" class="formV-label">Especialidad:</label>
                            <input type="text" name="especialidadPersonalEdit" id="especialidadPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="egresadoPersonalEdit" class="formV-label">Egresado de:</label>
                            <input type="text" name="egresadoPersonalEdit" id="egresadoPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="preGradoPersonalEdit" class="formV-label">Nivel de Pregrado:</label>
                            <input type="text" name="preGradoPersonalEdit" id="preGradoPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="postGradoPersonalEdit" class="formV-label">Nivel de Postgrado:</label>
                            <input type="text" name="postGradoPersonalEdit" id="postGradoPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="condicionMedicaPersonalEdit" class="formV-label">Posee Alguna Condición Medica:</label>
                            <textarea name="condicionMedicaPersonalEdit" id="condicionMedicaPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="direccionPersonalEdit" class="formV-label">Dirección de Habitación:</label>
                            <input type="text" name="direccionPersonalEdit" id="direccionPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="150" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="telefonoPersonalEdit" class="formV-label">N° de Teléfono:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelPersonalEdit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoPersonalEdit" id="telefonoPersonalEdit" class="form-control input-no-space" pattern="[0-9]+" placeholder="Opcional" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="telefono2PersonalEdit" class="formV-label">N° de Teléfono Personal:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTel2PersonalEdit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefono2PersonalEdit" id="telefono2PersonalEdit" class="form-control input-no-space" pattern="[0-9]+" placeholder="Opcional" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="telefonoOpcionalPersonalEdit" class="formV-label">N° de Teléfono Opcional:</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <div id="cargarCodigoTelOpcionalPersonalEdit"></div>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" name="telefonoOpcionalPersonalEdit" id="telefonoOpcionalPersonalEdit" class="form-control input-no-space" pattern="[0-9]+" placeholder="Opcional" maxlength="20">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="correoPersonalEdit" class="formV-label">Correo Electrónico:</label>
                            <input type="email" name="correoPersonalEdit" id="correoPersonalEdit" class="form-control input-no-space" maxlength="80">
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="cuentaNominaPersonalEdit" class="formV-label">Número de Cuenta Nómina:</label>
                            <input type="text" name="cuentaNominaPersonalEdit" id="cuentaNominaPersonalEdit" class="form-control input-no-space" pattern="[0-9]+" maxlength="20">
                        </div>
                        <div class="col-sm-12 col-md-4" class="formV-label">
                            <label for="tipoCuentaPersonalEdit" class="formV-label">Tipo de Cuenta:</label>
                            <select name="tipoCuentaPersonalEdit" id="tipoCuentaPersonalEdit" class="form-control form-select">
                                <option value="Ahorro">Ahorro</option>
                                <option selected value="Corriente">Corriente</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    
                    <legend>3.- Datos del Cargo Actual:</legend>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <input type="hidden" name="funcionPersonalOld" id="funcionPersonalOld">
                            <label for="funcionPersonalEdit" class="formV-label">Función Actual:</label>
                            <div id="cargarFuncionPersonalEdit"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="especialistaPersonalEdit" class="formV-label">Especialista:</label>
                            <input type="text" name="especialistaPersonalEdit" id="especialistaPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="fechaIngresoPersonalEdit" class="formV-label">Fecha de Ingreso al Sistema Educativo:</label>
                            <input type="text" name="fechaIngresoPersonalEdit" id="fechaIngresoPersonalEdit" class="form-control input-readonly" placeholder="dd-mm-aaaa" readonly="">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="observacionPersonalEdit" class="formV-label">Observación:</label>
                            <input type="text" name="observacionPersonalEdit" id="observacionPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="100" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="codigoVoucherPersonalEdit" class="formV-label">Código por Voucher:</label>
                            <input type="text" name="codigoVoucherPersonalEdit" id="codigoVoucherPersonalEdit" class="form-control input-no-space" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="cargoVoucherPersonalEdit" class="formV-label">Cargo por Voucher:</label>
                            <input type="text" name="cargoVoucherPersonalEdit" id="cargoVoucherPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md4">
                            <label for="adscritoPersonalEdit" class="formV-label">¿Esta Adscrito a la Institución?:</label>
                            <input type="text" name="adscritoPersonalEdit" id="adscritoPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" onkeyup="mayus(this.id, this.value);">
                        </div>
                        <div class="col-sm-12 col-md4">
                            <label for="codigoIPersonalEdit" class="formV-label">Código de Educación Inicial:</label>
                            <input type="text" name="codigoIPersonalEdit" id="codigoIPersonalEdit" class="form-control input-no-space" placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="col-sm-12 col-md4">
                            <label for="codigoBPersonalEdit" class="formV-label">Código de Educación Primaria</label>
                            <input type="text" name="codigoBPersonalEdit" id="codigoBPersonalEdit" class="form-control input-no-space" placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>
                    <br>
                    
                    <legend>4.- Solo para el Personal que Proviene de Otra Institución:</legend>

                    <div class="row">
                        <div class="col">
                            <label for="institucionPersonalEdit" class="formV-label">Nombre de la Institución:</label>
                            <input type="text" name="institucionPersonalEdit" id="institucionPersonalEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" placeholder="Opcional" maxlength="150" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="codigoDependenciaPersonalEdit" class="formV-label">Código de Dependencia:</label>
                            <input type="text" name="codigoDependenciaPersonalEdit" id="codigoDependenciaPersonalEdit" class="form-control input-no-space"  placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="codigoDeaPersonalEdit" class="formV-label">Código DEA:</label>
                            <input type="text" name="codigoDeaPersonalEdit" id="codigoDeaPersonalEdit" class="form-control input-no-space" placeholder="Opcional" maxlength="50" oninput="this.value = this.value.toUpperCase()">
                        </div>
                    </div>
                    <br>
                    
                    <legend>5.- Anexar:</legend>
                    <p><b>Para completar el registro de personal se deben presentar los siguientes documentos de forma física, marque los documentos que hayan sido presentados.</b></p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="">Copia de Cédula de Identidad Ampliada:</label>
                            <input type="hidden" name="copiaCIPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="copiaCIPersonalEdit"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="">Copia de Credencial:</label>
                            <input type="hidden" name="copiaCredencialPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="copiaCredencialPersonalEdit"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="">Constancia de Trabajo:</label>
                            <input type="hidden" name="constanciaTrabajoPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="constanciaTrabajoPersonalEdit"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="">Recibo de Pago:</label>
                            <input type="hidden" name="reciboPagoPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="reciboPagoPersonalEdit"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">Sintesis Curricular:</label>
                            <input type="hidden" name="curriculoPersonalEdit" value="0">
                            <div class="mb-3 form-check form-switch">
                                <div id="curriculoPersonalEdit"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                   <button type="button" id="btnCerrarModalEditarPersonal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                   <input type="submit" class="btn btn-warning" value="Modificar">
                </div>

            </div>
        </div>
    </div>

</form>