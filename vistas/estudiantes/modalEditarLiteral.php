<div class="modal fade" id="modalEditarLiteral" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Literal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui Podrá Modificar la Literal</b></p>
                <hr>

                <form id="formEditarLiteral" method="POST" autocomplete="off" onsubmit="return modificarLiteral()">

                    <input type="hidden" name="idLiteralEdit" id="idLiteralEdit">
                    <input type="hidden" name="letraLiteralOld" id="letraLiteralOld">

                    <div class="row">
                        <div class="col">
                            <label for="letraLiteralEdit" class="formV-label">Letra:</label>
                            <input type="text" name="letraLiteralEdit" id="letraLiteralEdit" class="form-control input-no-space" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ]+" maxlength="1" required="" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="descripcionLiteralEdit" class="formV-label">Descripción:</label>
                            <textarea name="descripcionLiteralEdit" id="descripcionLiteralEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. ]+" cols="30" rows="2" required="" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btnCerrarModalEditarLiteral" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>