<div class="modal fade" id="modalAgregarEstado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form id="formAgregarEstado" method="POST" autocomplete="off" onsubmit="return agregarEstado()">

                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Estado</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <p><b>Aqui podrá agregar un nuevo estado.</b></p>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <label for="nombreEstado" class="formV-label">Nombre del estado:</label>
                            <input type="text" name="nombreEstado" id="nombreEstado" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>
                    <br>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalAgregarEstado" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success">Registrar</button>
                </div>

            </form>

        </div>
    </div>
</div>