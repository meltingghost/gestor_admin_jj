<div class="modal fade" id="modalEditarEstado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Estado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEditarEstado" method="POST" autocomplete="off" onsubmit="return modificarEstado()">

                <div class="modal-body">

                    <p><b>Aquí podrá modificar el estado seleccionado.</b></p>
                    <hr>

                    <input type="hidden" name="idEstadoEdit" id="idEstadoEdit">
                    <input type="hidden" name="nombreEstadoOld" id="nombreEstadoOld">

                    <div class="row">
                        <div class="col">
                            <label for="nombreEstadoEdit" class="formV-label">Nombre del estado:</label>
                            <input type="text" name="nombreEstadoEdit" id="nombreEstadoEdit" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalEditarEstado" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-warning">Modificar</button>
                </div>

            </form>

        </div>
    </div>
</div>