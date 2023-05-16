<div class="modal fade" id="modalAgregarPersonal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Personal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p style="text-align: justify;"><b>Asegurese de llenar todos los campos y de ingresar los datos correctamente ya que todos son requeridos y algunos no podrán ser modificados más adelante.</b></p>

                <form method="POST" action="" autocomplete="off">

                    <div style="text-align:center;margin-top:40px;">
                        <span id="step1" class="step active">1</span>
                        <span id="step2" class="step">2</span>
                        <span id="step3" class="step">3</span>
                        <span id="step4" class="step">4</span>
                        <span id="step5" class="step">5</span>
                    </div>

                    <fieldset id="aggPersonalPart1" style="display: block;">

                        <legend>1.- Tipo de Personal:</legend>

                        <div class="row">
                            <div class="col">
                                <label> Tipo de Personal:</label><br>
                                <label><input type="radio" name="tipoPersonal" id="docente" value="Docente"> Docente</label><br>
                                <label><input type="radio" name="tipoPersonal" id="administrativo" value="Administrativo"> Administrativo</label><br>
                                <label><input type="radio" name="tipoPersonal" id="obrero" value="Obrero"> Obrero</label><br>
                                <label><input type="radio" name="tipoPersonal" id="cocinera" value="Cocinera"> Cocinera</label><br>
                                <label><input type="radio" name="tipoPersonal" id="integral" value="Integral" form-control> Integral</label><br>
                                <small class="form-text text-muted"><p id="alertTipoPersonal"></p></small>
                            </div>
                            <div class="col">
                                <label for="codigoPersonal">Código:</label>
                                <input type="text" name="codigoPersonal" id="codigoPersonal" class="form-control" oninput="this.value = this.value.toUpperCase()">
                                <small class="form-text text-muted"><p id="alertCodigoo"></p></small>
                            </div>
                            <div class="col">
                                <label for="trasladoPersonal">Traslado:</label>
                                <input type="hidden" name="trasladoPersonal" value="0">
                                <label><input type="checkbox" name="trasladoPersonal" id="trasladoPersonal" value="1"> Marque solo si es un traslado.</label>
                            </div>
                            <div class="col">
                                <label for="fechaPersonal">Fecha:</label>
                                <input type="text" name="fechaPersonal" id="fechaPersonal" class="form-control" placeholder="dd-mm-aaaa" readonly="">
                                <small class="form-text text-muted"><p id="alertFechaPersonal"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggPersonalPart2">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart2" style="display: none;">
                        
                        <legend>2.- Identificación:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="nombreCompletoPersonal">Nombres y Apellidos:</label>
                                <input type="text" name="nombreCompletoPersonal" id="nombreCompletoPersonal" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertNombreCompletoPersonal"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="cedulaPersonal">Cédula:</label>
                                <input type="text" name="cedulaPersonal" id="cedulaPersonal" class="form-control">
                                <small class="form-text text-muted"><p id="alertCedulaPersonal"></p></small>
                            </div>
                            <div class="col">
                                <label for="fechaNacimientoPersonal">Fecha:</label>
                                <input type="text" name="fechaNacimientoPersonal" id="fechaNacimientoPersonal" class="form-control" placeholder="dd-mm-aaaa" readonly="">
                                <small class="form-text text-muted"><p id="alertFechaNacimientosPersonal"></p></small>
                            </div>
                            <div class="col">
                                <label> Sexo:</label><br>
                                    <label><input type="radio" name="sexoPersonal" id="masculino" value="Masculino" aria-describedby="alertSexo"> Masculino</label><br>
                                    <label><input type="radio" name="sexoPersonal" id="femenino" value="Femenino" aria-describedby="alertSexo"> Femenino</label><br>
                                    <label><input type="radio" name="sexoPersonal" id="otro" value="Otro" aria-describedby="alertSexo"> Otro</label><br>
                                    <small class="form-text text-muted"><p id="alertSexoPersonal"></p></small>
                            </div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col">
                                        <label for="grupoSanguineoPersonal">Grupo Sanguineo:</label>
                                        <input type="text" name="grupoSanguineoPersonal" id="grupoSanguineoPersonal" class="form-control" oninput="this.value = this.value.toUpperCase()">
                                        <small class="form-text text-muted"><p id="alertGrupoSanguineoPersonal"></p></small>
                                    </div>
                                    <div class="col">
                                        <label for="factorRhPersonal">Factor Rh:</label>
                                        <input type="text" name="factorRhPersonal" id="factorRhPersonal" class="form-control">
                                        <small class="form-text text-muted"><p id="alertFactorRhPersonal"></p></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="nivelInstrucionPersonal">Nivel de Instrucción:</label>
                                <input type="text" name="nivelInstrucionPersonal" id="nivelInstrucionPersonal" class="form-control">
                                <small class="form-text text-muted"><p id="alertNivelInstrucionPersonal"></p></small>
                            </div>
                            <div class="col">
                                <label for="especialidadPersonal">Especialidad:</label>
                                <input type="text" name="especialidadPersonal" id="especialidadPersonal" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="egresadoPersonal">Egresado de:</label>
                                <input type="text" name="egresadoPersonal" id="egresadoPersonal" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertEgresadoPersonal"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="direccionPersonal">Dirección de Habitación:</label>
                                <input type="text" name="direccionPersonal" id="direccionPersonal" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertDireccionPersonal"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="telefonoPersonal">N° de Teléfono:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf">
                                        <select name="codigoTel" id="codigoTel" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoPersonal" id="telefonoPersonal" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoPersonal2">N° de Teléfono Personal:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf2">
                                        <select name="codigoTel2" id="codigoTel2" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoPersonal2" id="telefonoPersonal2" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="telefonoOpcional">N° de Teléfono Opcional:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telfOpcional">
                                        <select name="codigoTelOpcional" id="codigoTelOpcional" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoOpcional" id="telefonoOpcional" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="correoPersonal">Correo Electrónico:</label>
                                <input type="text" name="correoPersonal" id="correoPersonal" class="form-control">
                                <small class="form-text text-muted"><p id="alertCorreoPersonal"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggPersonalPart1">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggPersonalPart3">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart3" style="display: none;">
                        
                        <legend>3.- Datos del Cargo Actual:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="funcionActualPersonal">Función Actual:</label>
                                <input type="text" name="funcionActualPersonal" id="funcionActualPersonal" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="especialistaPersonal">Especialista:</label>
                                <input type="text" name="especialistaPersonal" id="especialistaPersonal" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="fechaIngresoPersonal">Fecha de Ingreso:</label>
                                <input type="text" name="fechaIngresoPersonal" id="fechaIngresoPersonal" class="form-control" placeholder="dd-mm-aaaa" readonly="">
                            </div>
                            <div class="col">
                                <label for="observacionPersonal">Observación:</label>
                                <input type="text" name="observacionPersonal" id="observacionPersonal" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggPersonalPart2">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggPersonalPart4">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart4" style="display: none;">
                        
                        <legend>4.- Solo para el Personal que Proviene de Otra Institución:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="institucionPersonal">Nombre de la Institución:</label>
                                <input type="text" name="institucionPersonal" id="institucionPersonal" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="codigoDependenciaPersonal">Código de Dependencia:</label>
                                <input type="text" name="codigoDependenciaPersonal" id="codigoDependenciaPersonal" class="form-control"  placeholder="Opcional" oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="col">
                                <label for="codigoDeaPersonal">Código DEA:</label>
                                <input type="text" name="codigoDeaPersonal" id="codigoDeaPersonal" class="form-control" placeholder="Opcional" oninput="this.value = this.value.toUpperCase()">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggPersonalPart3">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggPersonalPart5">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggPersonalPart5" style="display: none;">
                        
                        <legend>5.- Anexar:</legend>

                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li>
                                        Copia de Cédula de Identidad Ampliada
                                    </li>
                                    <li>
                                        Copia de Credencial
                                    </li>
                                    <li>
                                        Constancia de Trabajo
                                    </li>
                                    <li>
                                        Recibo de Pago
                                    </li>
                                    <li>
                                        Sintesis Curricular
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </fieldset>

                    <div class="row">
                        <div class="col-sm-2" align="left">
                                <span class="btn btn-primary" id="btnBackAggPersonalPart4" style="display: none;">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                        <div class="col" align="right">
                            <input type="submit" id="btnRegistrarPersonal" class="btn btn-success" value="Registrar" style="display: none;">
                        </div>
                    </div>
    
                </form>

            </div>

            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>
