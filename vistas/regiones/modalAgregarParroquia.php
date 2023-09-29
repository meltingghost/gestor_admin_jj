<div class="modal fade" id="modalAgregarParroquia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Parroquia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formAgregarParroquia" method="POST" autocomplete="off" onsubmit="return agregarParroquia()">

                <div class="modal-body">

                    <p><b>Aqui podrá agregar una nueva parroquia.</b></p>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <label for="municipioParroquia" class="formV-label">Municipio:</label>
                            <div id="cargarMunicipioParroquia"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nombreParroquia" class="formV-label">Nombre de la Parroquia:</label>
                            <input type="text" name="nombreParroquia" id="nombreParroquia" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalAgregarParroquia" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success">Registrar</button>
                </div>

            </form>

        </div>
    </div>
</div>