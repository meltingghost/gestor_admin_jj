<div class="modal fade" id="modalAsistenciaManual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Asistencia Manual</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetModalAsistenciaManual()"></button>
            </div>

            <div class="modal-body">
                
                <p><b>Aquí podrá gestionar manualmente las asistencias del personal.</b></p>
                <hr>

                <div class="row">
                    <div class="col-sm-12 col-md-6">

                        <div class="row">
                            <div class="col">
                                <form id="formPersonalAsisManual" autocomplete="off" action="">
                                    <label for="personalAsisManual">Personal:</label>
                                    <div id="cargarPersonalAsisManual"></div>
                                </form>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col">
                                <span style="color: red; display: none;" id="alertAgregarNuevaAsistencia">Debe seleccionar a alguien del personal.</span>
                                <span class="btn btn-primary btn-sm" id="btnAgregarNuevaAsistencia">
                                    <span class="fa-solid fa-circle-plus"></span> Agregar Nueva Asistencia
                                </span>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <p class="mb-0"> Asistencias en el mes: 
                                    <span id="asistenciasMes"></span>
                                </p>
                                <p class="mt-0"> Totales: 
                                    <span id="asistenciasTotales"></span>
                                </p>
                            </div>
                            <div class="col">
                                <p class="mb-0"> Inasistencias en el mes: 
                                    <span id="inasistenciasMes"></span>
                                </p>
                                <p class="mt-0"> Totales: 
                                    <span id="inasistenciasTotales"></span>
                                </p>
                            </div>
                            <div class="col">
                                <p class="mb-0"> Permisos en el mes: 
                                    <span id="permisosMes"></span>
                                </p>
                                <p class="mt-0"> Totales: 
                                    <span id="permisosTotales"></span>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-12 col-md-6" style="border-left: 2px solid black;">
                        
                        <div id="divAgregarNuevaAsistencia" style="display: none;">

                            <b>Agregar Nueva Asistencia</b>
                            <hr>

                            <form id="formAgregarAsistenciaManual" method="POST" autocomplete="off" onsubmit="return agregarAsistenciaManual()">

                                <input type="hidden" id="cedulaPersonalNewAsis" name="cedulaPersonalNewAsis">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <label for="fechaNewAsis">Fecha:</label>
                                        <?php 
                                            include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                                        ?>
                                        <input type="text" id="fechaNewAsis" name="fechaNewAsis" class="form-control" placeholder="<?php echo $fechaAyer ?>" readonly value="<?php echo $fechaAyer ?>">
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <label for="horaEntradaNewAsis">Hora de Entrada:</label>
                                        <input type="time" id="horaEntradaNewAsis" name="horaEntradaNewAsis" class="form-control" value="08:00">
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-4 me-0 pe-0">
                                        <label for="horaSalidaNewAsis">Hora de Salida:</label>
                                        <input type="time" id="horaSalidaNewAsis" name="horaSalidaNewAsis" class="form-control" value="12:00">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-1 mt-4 ms-0 ps-1">
                                        <button id="btnGuardarNuevaAsistencia" class="btn btn-success fa-solid fa-save" title="Guardar"></button>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <textarea id="observacionNewAsis" name="observacionNewAsis" class="form-control" placeholder="Observación" required></textarea>
                                    </div>
                                    
                                </div>

                            </form>

                        </div>

                        <div id="divModificarAsistenciaManual" style="display: none;">

                            <b>Modificar Asistencia</b>
                            <hr>

                            <form id="formModificarAsistenciaManual" method="POST" autocomplete="off" onsubmit="return modificarAsistenciaManual()">

                                <input type="hidden" id="idAsistenciaManEdit" name="idAsistenciaManEdit">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <label for="fechaAsisManEdit">Fecha:</label>
                                        <?php 
                                            include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                                        ?>
                                        <input type="text" id="fechaAsisManEdit" name="fechaAsisManEdit" class="form-control" readonly>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        <label for="horaEntradaAsisManEdit">Hora de Entrada:</label>
                                        <input type="time" id="horaEntradaAsisManEdit" name="horaEntradaAsisManEdit" class="form-control">
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-4 me-0 pe-0">
                                        <label for="horaSalidaAsisManEdit">Hora de Salida:</label>
                                        <input type="time" id="horaSalidaAsisManEdit" name="horaSalidaAsisManEdit" class="form-control">
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-1 mt-4 ms-0 ps-1">
                                        <button id="btnModificarAsistenciaManual" class="btn btn-warning fa-solid fa-save" title="Modificar"></button>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <textarea id="observacionAsisManEdit" name="observacionAsisManEdit" class="form-control" placeholder="Observación" maxlength="200" required onkeyup="mayus(this.id, this.value);"></textarea>
                                    </div>
                                    
                                </div>

                            </form>
                            
                        </div>

                    </div>

                </div>

                <div id="tablaAsisPersonal"></div>

            </div>

            <div class="modal-footer">
                <button type="button" id="btnCerrarModalAsistenciaManual" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalAsistenciaManual()">Cerrar</button>
            </div>

        </div>
    </div>
</div>