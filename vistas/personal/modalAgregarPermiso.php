<div class="modal fade" id="modalAgregarPermisos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Permiso</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetFormAgregarPermiso()"></button>
            </div>

            <div class="modal-body">

                <p><b>Aqui podrá agregar los nuevo permisos.</b></p>
                <hr>
                
                <form id="formAgregarPermiso" method="POST" autocomplete="off" onsubmit="return agregarPermiso()">

                    <div class="row">
                        <div class="col">
                            <label for="nombrePermiso" class="formV-label">Nombre del  de Permiso:</label>
                            <input type="text" name="nombrePermiso" id="nombrePermiso" class="form-control" placeholder="Médico" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ ]+" maxlength="80" required="" onkeyup="mayus(this.id, this.value);">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="descripcionPermiso" class="formV-label">Descripción del Permiso:</label>
                            <textarea name="descripcionPermiso" id="descripcionPermiso" class="form-control" placeholder="Opcional" cols="30" rows="2" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. ]+" onkeyup="mayus(this.id, this.value);"></textarea>
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalAgregarPermiso" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetFormAgregarPermiso()">Cerrar</button>
                        <input type="submit" class="btn btn-success" value="Registrar">
                    </div>

                </form>

            </div>
            
        </div>
    </div>
</div>