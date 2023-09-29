<div class="modal fade" id="modalEditarCargo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifcar Función</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui Podrá Modifcar la Función</b></p>

                <hr>

                <form id="formEditarCargo" method="POST" autocomplete="off" onsubmit="return modificarCargo()">

                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="idCargoEdit" id="idCargoEdit">
                            <input type="hidden" name="nombreCargoOld" id="nombreCargoOld">
                            <label for="nombreCargoEdit" class="formV-label">Nombre de la Función:</label>
                            <input type="text" name="nombreCargoEdit" id="nombreCargoEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="30" required="" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalEditarCargo" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>

                </form>

            </div>
            
        </div>
    </div>
</div>