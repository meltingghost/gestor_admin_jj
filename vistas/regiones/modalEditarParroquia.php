<div class="modal fade" id="modalEditarParroquia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Parroquia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEditarParroquia" method="POST" autocomplete="off" onsubmit="return modificarParroquia()">

                <div class="modal-body">

                    <p><b>Aqui podrá modificar la parroquia seleccionada.</b></p>
                    <hr>

                    <input type="hidden" name="idParroquiaEdit" id="idParroquiaEdit">
                    <input type="hidden" name="nombreParroquiaOld" id="nombreParroquiaOld">

                    <div class="row">
                        <div class="col">
                            <label for="municipioParroquiaEdit" class="formV-label">Municipio:</label>
                            <div id="cargarMunicipioParroquiaEdit"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nombreParroquiaEdit" class="formV-label">Nombre de la Parroquia:</label>
                            <input type="text" name="nombreParroquiaEdit" id="nombreParroquiaEdit" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalEditarParroquia" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-warning">Modificar</button>
                </div>

            </form>

        </div>
    </div>
</div>