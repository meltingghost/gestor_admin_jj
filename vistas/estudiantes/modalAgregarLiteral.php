<div class="modal fade" id="modalAgregarLiteral" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nueva Literal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetFormAgregarLiteral()"></button>
            </div>

            <div class="modal-body">

                <p><b>Añada literales para poder evaluar a los estudiantes.</b></p>
                <hr>

                <form id="formAgregarLiteral" method="POST" action="" autocomplete="off" onsubmit="return agregarLiteral()">
                    
                    <label for="letraLiteral" class="formV-label">Letra:</label>
                    <input type="text" name="letraLiteral" id="letraLiteral" class="form-control input-no-space" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ]+" maxlength="1" required="" onkeyup="mayus(this.id, this.value);">
                    <br>
                    <label for="descripcionLiteral" class="formV-label">Descripción:</label>
                    <textarea name="descripcionLiteral" id="descripcionLiteral" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ., ]+" cols="30" rows="2" required="" onkeyup="mayus(this.id, this.value);"></textarea>
                    <br>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalAgregarLiteral" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetFormAgregarLiteral()">Cerrar</button>
                        <input type="submit" class="btn btn-success" value="Registrar">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>