<div class="modal fade" id="modalAgregarMunicipio" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Municipio</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="formAgregarMunicipio" method="POST" autocomplete="off" onsubmit="return agregarMunicipio()">

                <div class="modal-body">

                    <p><b>Aqui podrá agregar un nuevo municipio.</b></p>
                    <hr>
                    
                    <div class="row">
                        <div class="col">
                            <label for="estadoMunicipio" class="formV-label">Estado:</label>
                            <div id="cargarEstadoMunicipio"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nombreMunicipio" class="formV-label">Nombre del municipio:</label>
                            <input type="text" name="nombreMunicipio" id="nombreMunicipio" class="form-control" maxlength="80" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" onkeyup="mayus(this.id, this.value);" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" id="btnCerrarModalAgregarMunicipio" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-success">Registrar</button>
                </div>

            </form>

        </div>
    </div>
</div>