<div class="modal fade" id="modalEditarSeccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Sección</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui podrá modificar la sección.</b></p>
                <hr>
                
                <form id="formEditarSeccion" method="POST" autocomplete="off" onsubmit="return modificarSeccion()">

                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="idSeccionEdit" id="idSeccionEdit">
                            <input type="hidden" name="idGradoSeccionEdit" id="idGradoSeccionEdit">
                            <input type="hidden" name="seccionOld" id="seccionOld">
                            <label for="seccionEdit" class="formV-label">Sección:</label>
                            <input type="text" name="seccionEdit" id="seccionEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ]+" maxlength="3" required onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="gradoSeccionEdit" class="formV-label">Grado:</label>
                            <input type="text" id="gradoSeccionEdit" class="form-control form-select input-readonly" readonly>
                        </div>
                    </div>
                    <br>
                    
                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalEditarSeccion" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>

                </form>
                
            </div>

        </div>
    </div>
</div>