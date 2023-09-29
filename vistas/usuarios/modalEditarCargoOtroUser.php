<div class="modal fade" id="modalEditarCargoOtroUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Función del Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aquí podrá modificar la función del usuario seleccionado.</b></p>
                <hr>
                
                <form id="formEditarCargoOtroUser" method="POST" autocomplete="off" onsubmit="return modificarCargoOtroUser()" action="">

                    <input type="hidden" name="idOtroUserEdit" id="idOtroUserEdit">
                    <input type="hidden" name="cargoOtroUserOld" id="cargoOtroUserOld">

                    <div class="row">
                        <div class="col">
                            <label for="cargoOtroUserEdit" class="formV-label">Función como Usuario:</label>
                            <div id="cargarCargoOtroUserEdit"></div>
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalEditarCargoOtroUser" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>

                </form>

            </div>
            
        </div>
    </div>
</div>