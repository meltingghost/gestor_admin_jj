<div class="modal fade" id="modalAgregarEI" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Inscribir Estudiante Inicialr</h1>
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

                    <fieldset id="aggEIPart1">

                        <legend>Datos del Niño o Niña:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="apellidosEI">Apellidos:</label>
                                <input type="text" name="apellidosEI" id="apellidosEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertApellidosEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="nombresEI">Nombres:</label>
                                <input type="text" name="apellidosEI" id="apellidosEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertNombresEI"></p></small>
                            </div>
                            <div class="col-sm-4">
                                <label for="cEscolarEI">C. Escolar:</label>
                                <input type="text" name="cEscolarEI" id="cEscolarEI" class="form-control" placeholder="Opcional">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="fechaNacimientoEI">Fecha de Nacimiento:</label>
                                <input type="text" name="fechaNacimientoEI" id="fechaNacimientoEI" class="form-control" placeholder="dd-mm-aaaa" readonly="">
                                <small class="form-text text-muted"><p id="alertFechaNacimientoEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="edadAños">Edad: Años:</label>
                                <input type="text" name="edadAños" id="edadAños" class="form-control" disabled="" readonly="">
                            </div>
                            <div class="col">
                                <label for="edadMeses">Edad: Meses:</label>
                                <input type="text" name="edadMeses" id="edadMeses" class="form-control" disabled="" readonly="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="lugarNacimientosEI">Lugar de Nacimiento:</label>
                                <input type="text" name="lugarNacimientosEI" id="lugarNacimientosEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col-sm-4">
                                <label for="estadoNacimientoEI">Estado:</label>
                                <select name="estadoNacimientoEI" id="estadoNacimientoEI" class="form-select form-control">
                                    <option selected="" disabled="">Seleccione un Estado</option>
                                </select>
                                <small class="form-text text-muted"><p id="alertEstadoNacimientoEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="municipioNacimientoEI">Municipio:</label>
                                <select name="municipioNacimientoEI" id="municipioNacimientoEI" class="form-select form-control">
                                    <option selected="" disabled="">Seleccione un Municipio</option>
                                </select>
                                <small class="form-text text-muted"><p id="alertMunicipioNacimientoEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="parroquiaNacimientoEI">Parroquia:</label>
                                <select name="parroquiaNacimientoEI" id="parroquiaNacimientoEI" class="form-select form-control">
                                    <option selected="" disabled="">Seleccione una Parroquia</option>
                                </select>
                                <small class="form-text text-muted"><p id="alertParroquiaNacimientoEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="direccionNacimientoEI">Dirección:</label>
                                <input type="text" name="direccionNacimientoEI" id="direccionNacimientoEI" class="form-control" placeholder="Opcional">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggEIPart2">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggEIPart2" style="display: none;">

                        <legend>Datos de la Madre:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="nombreCompletoMEI">Nombre y Apellidos:</label>
                                <input type="text" name="nombreCompletoMEI" id="nombreCompletoMEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alert nombreCompletoMEI"></p></small>
                            </div>
                            <div class="col-sm-4">
                                <label for="cedulaMEI">C.I. N°</label>
                                <input type="text" name="cedulaMEI" id="cedulaMEI" class="form-control">
                                <small class="form-text text-muted"><p id="alertCedulaMEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="edadMEI">Edad:</label>
                                <input type="text" name="edadMEI" id="edadMEI" class="form-control" placeholder="Opcional">
                            </div>
                            <div class="col">
                                <label for="nacionalidadMEI">Nacionalidad:</label>
                                <input type="text" name="nacionalidadMEI" id="nacionalidadMEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="gradoInstrucionMEI">Grado de Instrucción:</label>
                                <input type="text" name="gradoInstrucionMEI" id="gradoInstrucionMEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="trabajaMEI">Trabaja:</label><br>
                                <label><input type="radio" name="trabajaMEI" id="si" value="Si"> Si</label><br>
                                <label><input type="radio" name="trabajaMEI" id="no" value="No"> No</label><br>
                                <small class="form-text text-muted"><p id="alertTrabajaMEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="direccionTrabajoMEI">Dirección de Trabajo:</label>
                                <input type="text" name="direccionTrabajoMEI" id="direccionTrabajoMEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-2">
                                <label for="viveMEI">Vive:</label><br>
                                <label><input type="radio" name="viveMEI" id="si" value="Si"> Si</label><br>
                                <label><input type="radio" name="viveMEI" id="no" value="No"> No</label><br>
                                <small class="form-text text-muted"><p id="alertViveMEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="telefonoCasaMEI">Teléfono Casa:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf">
                                        <select name="codigoTel" id="codigoTel" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoCasaMEI" id="telefonoCasaMEI" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCelularMEI">Teléfono Celular:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf">
                                        <select name="codigoTel" id="codigoTel" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoCelularMEI" id="telefonoCelularMEI" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="direccionHabitacionMEI">Dirección de Habitación:</label>
                                <input type="text" name="direccionHabitacionMEI" id="direccionHabitacionMEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <legend>Datos del Padre:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="nombreCompletoPEI">Nombre y Apellidos:</label>
                                <input type="text" name="nombreCompletoPEI" id="nombreCompletoPEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alert nombreCompletoPEI"></p></small>
                            </div>
                            <div class="col-sm-4">
                                <label for="cedulaPEI">C.I. N°</label>
                                <input type="text" name="cedulaPEI" id="cedulaPEI" class="form-control">
                                <small class="form-text text-muted"><p id="alertCedulaPEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="edadPEI">Edad:</label>
                                <input type="text" name="edadPEI" id="edadPEI" class="form-control" placeholder="Opcional">
                            </div>
                            <div class="col">
                                <label for="nacionalidadPEI">Nacionalidad:</label>
                                <input type="text" name="nacionalidadPEI" id="nacionalidadPEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                            <div class="col">
                                <label for="gradoInstrucionPEI">Grado de Instrucción:</label>
                                <input type="text" name="gradoInstrucionPEI" id="gradoInstrucionPEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <label for="trabajaPEI">Trabaja:</label><br>
                                <label><input type="radio" name="trabajaPEI" id="si" value="Si"> Si</label><br>
                                <label><input type="radio" name="trabajaPEI" id="no" value="No"> No</label><br>
                                <small class="form-text text-muted"><p id="alertTrabajaPEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="direccionTrabajoPEI">Dirección de Trabajo:</label>
                                <input type="text" name="direccionTrabajoPEI" id="direccionTrabajoPEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-2">
                                <label for="vivePEI">Vive:</label><br>
                                <label><input type="radio" name="vivePEI" id="si" value="Si"> Si</label><br>
                                <label><input type="radio" name="vivePEI" id="no" value="No"> No</label><br>
                                <small class="form-text text-muted"><p id="alertVivePEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="telefonoCasaPEI">Teléfono Casa:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf">
                                        <select name="codigoTel" id="codigoTel" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoCasaPEI" id="telefonoCasaPEI" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="telefonoCelularPEI">Teléfono Celular:</label>
                                <div class="row">
                                    <div class="col-sm-5" id="telf">
                                        <select name="codigoTel" id="codigoTel" class="form-control">
                                            <option>0424</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" name="telefonoCelularPEI" id="telefonoCelularPEI" class="form-control" placeholder="Opcional">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="direccionHabitacionPEI">Dirección de Habitación:</label>
                                <input type="text" name="direccionHabitacionPEI" id="direccionHabitacionPEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <legend>Situación de los Padres:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="situacionPadresEI">Situación de los Padres:</label><br>
                                <label><input type="radio" name="situacionPadresEI" id="conviven" value="Conviven"> Conviven</label><br>
                                <label><input type="radio" name="situacionPadresEI" id="separados" value="Separados"> Separados</label><br>
                                <small class="form-text text-muted"><p id="alertSituacionPadresEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggEIPart1">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggEIPart3">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEIPart3" style="display: none;">

                        <legend>Datos Familiares Autorizados para Representarlos:</legend>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="autorizacionFEI">Tiene Autorización:</label>
                                <input type="hidden" name="autorizacionFEI" value="0">
                                <label><input type="checkbox" name="autorizacionFEI" id="autorizacionFEI" value="1"> Marque solo si tiene autorización.</label>
                            </div>
                            <div class="col">
                                <label for="organismoAutorizacionFEI">Que Organismo la Otorga:</label>
                                <input type="text" name="organismoAutorizacionFEI" id="organismoAutorizacionFEI" class="form-control" placeholder="Opcional" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="tieneHermanosEI">Tiene Hermanos:</label>
                                <input type="hidden" name="tieneHermanosEI" value="0">
                                <label><input type="checkbox" name="tieneHermanosEI" id="tieneHermanosEI" value="1"> Marque solo si tiene hermanos.</label>
                            </div>
                            <div class="col">
                                <label for="cuantosHermanosEI">¿Cuantos Hermanos Tiene? V: H:</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="cuantosHermanosEI" id="cuantosHermanosEI" class="form-control">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="cuantosHermanosVEI" id="cuantosHermanosVEI" class="form-control">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="cuantosHermanosHEI" id="cuantosHermanosHEI" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="lugarHermanosEI">Lugar que Ocupa Entre Ellos:</label>
                                <input type="text" name="lugarHermanosEI" id="lugarHermanosEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="quienDuermeEI">¿Con Quién Duerme?</label>
                                <input type="text" name="quienDuermeEI" id="quienDuermeEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertQuienDuermeEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="quienJuegaEI">¿Con Quién Juega?</label>
                                <input type="text" name="quienJuegaEI" id="quienJuegaEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertQuienJuegaEI"></p></small>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="localizarFEI">*Donde Localizar a la Familia o Responsable del Niño o la Niña en Caso de Alguna Emergencia:</label>
                                <input type="text" name="localizarFEI" id="localizarFEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertLocalizarFEI"></p></small>
                            </div>
                        </div>

                        <legend>Antecedentes del Niño (A):</legend>

                        <div class="row">
                            <div class="col">
                                <label for="dondeQuienViveEI">Donde y con Quién Vive el Niño o la Niña:</label>
                                <input type="text" name="dondeQuienViveEI" id="dondeQuienViveEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertDondeQuienViveEI"></p></small>
                            </div>
                            <div class="col-sm-2">
                                <label for="tipoPartoEI">Tipo de Parto:</label>
                                <label><input type="radio" name="tipoPartoEI" id="normal" value="Normal"> Normal</label><br>
                                <label><input type="radio" name="tipoPartoEI" id="cesaria" value="Cesaría"> Cesaría</label><br>
                                <label><input type="radio" name="tipoPartoEI" id="forceps" value="Fórceps"> Fórceps</label><br>
                                <small class="form-text text-muted"><p id="alertTipoPartoEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="enfermedadesEI">Enfermedades Padecidas:</label>
                                <input type="text" name="enfermedadesEI" id="enfermedadesEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="vacunasEI">Vacunas Recibidas:</label>
                                <input type="text" name="vacunasEI" id="vacunasEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertVacunasEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="dificultadCaminarEI">Presto Dificultad para Caminar:</label>
                                <input type="text" name="dificultadCaminarEI" id="dificultadCaminarEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertDificultadCaminarEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="compromisoVisualEI">Compromiso Visual:</label>
                                <input type="text" name="compromisoVisualEI" id="compromisoVisualEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertCompromisoVisualEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="auditivosEI">Auditivos:</label>
                                <input type="text" name="auditivosEI" id="auditivosEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertAuditivosEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="pronunciacionEI">Pronunciación:</label>
                                <input type="text" name="pronunciacionEI" id="pronunciacionEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertPronunciacionEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="otrasEI">Otras:</label>
                                <input type="text" name="otrasEI" id="otrasEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertOtrasEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="caracteristicasEI">Que Caracteristicas Presenta:</label>
                                <input type="text" name="caracteristicasEI" id="caracteristicasEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertCaracteristicasEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="sueñoIntranquiloEI">Tiene Sueño Intranquilo:</label>
                                <input type="text" name="sueñoIntranquiloEI" id="sueñoIntranquiloEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertSueñoIntranquiloEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="esfinteresEI">Contrala las Esfínteres:</label>
                                <input type="text" name="esfinteresEI" id="esfinteresEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertEsfinteresEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="ayudaBañoEI">Necesita Ayuda para ir al Baño:</label>
                                <input type="text" name="ayudaBañoEI" id="ayudaBañoEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertAyudaBañoEI"></p></small>
                            </div>
                            <div class="col">
                                <label for="comeSoloEI">Come Solo:</label>
                                <input type="text" name="comeSoloEI" id="comeSoloEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertComeSoloEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alimentosPrefiereEI">Que Alimentos Prefiere:</label>
                                <input type="text" name="alimentosPrefiereEI" id="alimentosPrefiereEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertAlimentosPrefiereEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alergicoEI">Es Alérgico:</label>
                                <input type="text" name="alergicoEI" id="alergicoEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertAlergicoEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="alimentosProhibidosEI">Que Alimentos son Prohibidos por Indicación Médica</label>
                                <input type="text" name="alimentosProhibidosEI" id="alimentosProhibidosEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertAlimentosProhibidosEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="fiebreMedicamentoEI">En Caso de Fiebre que Medicamento Suministra al Niño:</label>
                                <input type="text" name="fiebreMedicamentoEI" id="fiebreMedicamentoEI" class="form-control" onkeyup="mayus(this.id, this.value);">
                                <small class="form-text text-muted"><p id="alertFiebreMedicamentoEI"></p></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggEIPart2">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggEIPart4">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <fieldset id="aggEIPart4" style="display: none;">

                        <legend>Control de Talla:</legend>

                        Talla:

                        <div class="row">
                            <div class="col">
                                <label for="">Octubre:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Enero:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Abril:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Junio:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>

                        Peso:

                        <div class="row">
                            <div class="col">
                                <label for="">Octubre:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Enero:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Abril:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Junio:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>

                        <legend>Desarrollo Emocional:</legend>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for=""> ¿Demanda Atención de Adultos?</label>
                                <label><input type="radio" name="" id="" value="Poca"> Poca</label><br>
                                <label><input type="radio" name="" id="" value="Mucha"> Mucha</label><br>
                                <label><input type="radio" name="" id="" value="Normal"> Normal</label><br>
                            </div>
                            <div class="col">
                                <label for="">¿Se Entretiene Solo (a)?</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-5">
                                <label for="">¿Expresa Afecto Hacia las Personas?</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">¿Se Enoja con Frecuencia?</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">¿Porque?</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>

                        <legend>Otros Datos de Interés:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="">Tiene Miedos Infundidos:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Es Tremendamente Intranquilo:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="">Pasa Mucho Tiempo Viendo TV:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Que Programas le Gusta:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="">Pasa Mucho Tiempo con los Video Juegos:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Cuales:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col" align="left">
                                <span class="btn btn-primary" id="btnBackAggEIPart3">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                            <div class="col" align="right">
                                <span class="btn btn-primary" id="btnGoAggEIPart5">
                                    Siguiente <span class="fa-solid fa-arrow-right"></span>
                                </span>
                            </div>
                        </div>

                    </fieldset>

                    <fieldset id="aggEIPart5" style="display: none;">

                        <legend>Resumen de la Actividad del Niño:</legend>

                        <div class="row">
                            <div class="col">
                                <label for="">Primer Periodo:</label><br>
                                <textarea cols="100" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="">Segundo Periodo:</label><br>
                                <textarea cols="100" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="">Tercer Periodo:</label><br>
                                <textarea cols="100" rows="3"></textarea>
                            </div>
                        </div>

                        <legend>*Infromación Acerca de que Hace la Familia Cuando el Niño o la Niña Comete Alguna Falta, Entre Otras:</legend>
                        <div class="row">
                            <div class="col">
                                <textarea cols="100" rows="3"></textarea>
                            </div>
                        </div>
                        <br>

                    </fieldset>

                    <div class="row">
                        <div class="col-sm-2" align="left">
                                <span class="btn btn-primary" id="btnBackAggEIPart4" style="display: none;">
                                    <span class="fa-solid fa-arrow-left"></span> Atrás
                                </span>
                            </div>
                        <div class="col" align="right">
                            <input type="submit" id="btnRegistrarEI" class="btn btn-success" value="Registrar" style="display: none;">
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