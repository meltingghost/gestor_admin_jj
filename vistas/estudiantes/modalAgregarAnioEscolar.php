<div class="modal fade" id="modalAgregarAnioEscolar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Nuevo Año Escolar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetFormAgregarAnioEscolar()"></button>
            </div>

            <div class="modal-body">

                <b>Deberá indicar la fecha completa para el inicio del año escolar y para la finalización.</b>
                <hr>

                <form id="formAgregarAnioEscolar" method="POST" autocomplete="off">

                    <div class="row">
                        <div class="col formV-group" id="ddmmiGroup">
                            <label for="ddmmi" class="formV-label">Día y Mes de Inicio:</label>
                            <div class="formV-group-input">
                                <input type="text" name="ddmmi" id="ddmmi" class="form-control formV-input input-readonly" placeholder="dd-mm" readonly>
                                <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                <small class="form-text text-red formV-input-error">Debe seleccionar el dia y el mes.</small>
                            </div>
                        </div>
                        <div class="col formV-group" id="yyiGroup">
                            <label for="yyi" class="formV-label">Año de Inicio:</label>
                            <div  class="formV-group-input">
                                <input type="text" name="yyi" id="yyi" class="form-control formV-input input-readonly" placeholder="yyyy" readonly>
                                <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                <small class="form-text text-red formV-input-error">Debe seleccionar el año.</small>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col formV-group" id="ddmmfGroup">
                            <label for="ddmmf" class="formV-label">Día y Mes de Finalización:</label>
                            <div  class="formV-group-input">
                                <input type="text" name="ddmmf" id="ddmmf" class="form-control formV-input input-readonly" placeholder="dd-mm" readonly>
                                <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                <small class="form-text text-red formV-input-error">Debe seleccionar el dia y el mes.</small>
                            </div>
                        </div>
                        <div class="col formV-group" id="yyfGroup">
                            <label for="yyf" class="formV-label">Año de Finalización:</label>
                            <div  class="formV-group-input">
                                <input type="text" name="yyf" id="yyf" class="form-control formV-input input-readonly" placeholder="yyyy" readonly>
                                <span class="fa-solid fa-circle-xmark formV-val-status"></span>
                                <small class="form-text text-red formV-input-error">Debe seleccionar el año.</small>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btnCerrarModalAgregarAnioEscolar" data-bs-dismiss="modal" onclick="resetFormAgregarAnioEscolar()">Cerrar</button>
                        <input type="submit" class="btn btn-success" value="Registrar">
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>