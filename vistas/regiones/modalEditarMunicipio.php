<div class="modal fade" id="modalEditarMunicipio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Municipio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formEditarMunicipio" method="POST" autocomplete="off" onsubmit="return modificarMunicipio()">

                <div class="modal-body">

                    <p><b>Aqui podrá modificar el municipio seleccionado.</b></p>
                    <hr>

                    <input type="hidden" name="idMunicipioEdit" id="idMunicipioEdit">
                    <input type="hidden" name="nombreMunicipioOld" id="nombreMunicipioOld">

                    <div class="row">
                        <div class="col">
                            <label for="estadoMunicipioEdit" class="formV-label">Estado:</label>
                            <div id="cargarEstadoMunicipioEdit"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nombreMunicipioEdit" class="formV-label">Nombre del municipio:</label>
                            <input type="text" name="nombreMunicipioEdit" id="nombreMunicipioEdit" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalEditarMunicipio" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-warning">Modificar</button>
                </div>

            </form>

        </div>
    </div>
</div>