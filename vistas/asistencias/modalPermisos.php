<div class="modal fade" id="modalPermisos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-info">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Gestionar Permisos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetModalPermisos()"></button>
            </div>

            <div class="modal-body">
                
                <p><b>Aquí podrá gestionar todos los permisos del personal.</b></p>
                <hr>

                <div class="row mb-2">
                    <div class="col">
                        <span class="btn btn-primary btn-sm">
                            <span class="fa-solid fa-circle-plus"></span> Solicitar Permiso
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div id="divInfoSolicitarPermiso" style="display: block;">
                            <p style="text-align: justify;">Aquí se gestionarán las solicitudes de los permisos del personal, podrá agregar nuevas solicitudes, modificar las solicitudes existentes y eliminar dichas solicitudes, cabe mencionar que el hecho de que alguien posea algún permiso no significa que esta persona estará asistente durante la fecha seleccionada, sino que estará inasistente pero contará con alguna justificación.</p>
                            <hr>
                        </div>

                        <div id="divSolicitarPermiso" style="display: none;">

                            <b>Solicitar Permiso</b>
                            <hr>

                            <form id="formSolicitarPermiso" method="POST" autocomplete="off" onsubmit="return solicitarPermiso()">

                                <input type="hidden" id="" name="">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-3">
                                        <label for="fechaNewAsis">Fecha:</label>
                                        <?php 
                                        include_once "../procesos/funcionesPhp/calcularFechaActual.php";
                                        ?>
                                        <input type="text" id="" name="" class="form-control" placeholder="<?php echo $fechaAyer ?>" readonly value="<?php echo $fechaAyer ?>">
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
                                        <button id="" class="btn btn-success fa-solid fa-save" title="Guardar"></button>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col">
                                        <textarea id="observacionNewAsis" name="observacionNewAsis" class="form-control" placeholder="Observación" required></textarea>
                                    </div>
                                    
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                <div id="tablaPermisosSolicitados"></div>

            </div>

            <div class="modal-footer">
                <button type="button" id="btnCerrarModalPermisos" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalPermisos()">Cerrar</button>
            </div>

        </div>
    </div>
</div>