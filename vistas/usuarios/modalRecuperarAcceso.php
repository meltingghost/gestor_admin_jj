<div class="modal fade" id="modalRecuperarAcceso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-black">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Recuperar Acceso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnCerrarModalRecuperarAcceso" onclick="resetModalRecuperarAcceso()"></button>
            </div>

            <div id="divConfirmarPreguntasSegUser" class="mostrar">

                <form id="formConfirmarPreguntasSegUser" method="POST" autocomplete="off" onsubmit="return confirmarPreguntasSegUser()">

                    <div class="modal-body">

                        <p style="font-size: 15px; text-align: justify;"><b>A continuación deberá responder las preguntas de seguridad que fueron registradas al momento de crear su usuario, si realiza esto correctamente podrá generar una nueva contraseña para poder acceder al sistema.</b></p>
                        <hr>

                        <input type="hidden" name="idUserRecovery" id="idUserRecovery">

                        <div class="row">
                            <div class="col">
                                <label for="respuesta1Recovery" class="formV-label"><div id="pregunta1Recovery"></div></label>
                                <input type="text" name="respuesta1Recovery" id="respuesta1Recovery" class="form-control" oninput="this.value = this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="respuesta2Recovery" class="formV-label"><div id="pregunta2Recovery"></div></label>
                                <input type="text" name="respuesta2Recovery" id="respuesta2Recovery" class="form-control" oninput="this.value = this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label for="respuesta3Recovery" class="formV-label"><div id="pregunta3Recovery"></div></label>
                                <input type="text" name="respuesta3Recovery" id="respuesta3Recovery" class="form-control" oninput="this.value = this.value.toUpperCase()" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalRecuperarAcceso()">Cerrar</button>
                        <button class="btn btn-warning">Confirmar</button>
                    </div>

                </form>

            </div>

            <div id="divGenerarPassword" class="ocultar">

                <form id="formNewPassword" method="POST" autocomplete="off" action="">

                    <div class="modal-body">

                        <p style="font-size: 15px; text-align: justify;"><b>A continuación deberá generar una nueva contraseña con la cual podrá acceder nuevamente al sistema.</b></p>
                        <hr>

                        <input type="hidden" name="idUserRecoveryNew" id="idUserRecoveryNew">

                        <div class="row">
                            <div class="col formV-group" id="newPasswordGroup">
                                <label for="newPassword" class="formV-label">Nueva Contraseña:</label>
                                <div class="formV-group-input">
                                    <input type="text" name="newPassword" id="newPassword" class="form-control formV-input">
                                    <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                    <small class="form-text text-red formV-input-error">Debe ingresar una contraseña valida.</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalRecuperarAcceso()">Cerrar</button>
                        <button class="btn btn-warning">Generar</button>
                    </div>


                </form>

            </div>

        </div>
    </div>
</div>