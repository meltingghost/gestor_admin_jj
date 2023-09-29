<div class="modal fade" id="modalEditarGrado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modificar Grado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui podrá modificar el grado.</b></p>
                <hr>
                
                <form id="formEditarGrado" method="POST" autocomplete="off" onsubmit="return modificarGrado()">

                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="idGradoEdit" id="idGradoEdit">
                            <input type="hidden" name="numeroGradoOld" id="numeroGradoOld">
                            <label for="numeroGradoEdit" class="formV-label">Grado:</label>
                            <input type="text" name="numeroGradoEdit" id="numeroGradoEdit" class="form-control" required onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>   

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalEditarGrado" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>               
                    
                </form>

            </div>

        </div>
    </div>
</div>