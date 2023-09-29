<div class="modal fade" id="modalEditarPermiso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Permiso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui podrá agregar los nuevo permisos.</b></p>
                <hr>
                
                <form id="formEditarPermiso" method="POST" autocomplete="off" onsubmit="return modificarPermiso()">

                    <input type="hidden" name="idPermisoEdit" id="idPermisoEdit">
                    <input type="hidden" name="nombrePermisoOld" id="nombrePermisoOld">

                    <div class="row">
                        <div class="col">
                            <label for="nombrePermisoEdit" class="formV-label">Nombre del  de Permiso:</label>
                            <input type="text" name="nombrePermisoEdit" id="nombrePermisoEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="80" required="" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="descripcionPermisoEdit" class="formV-label">Descripción del Permiso:</label>
                            <textarea name="descripcionPermisoEdit" id="descripcionPermisoEdit" class="form-control" placeholder="Opcional" cols="30" rows="2" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. ]+" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalEditarPermiso" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>

                </form>

            </div>
            
        </div>
    </div>
</div>