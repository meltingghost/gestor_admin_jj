<div class="modal fade" id="modalEditarAnioEscolar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Año Escolar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <b>Aqui podrá modificar solo el dia y el mes de inicio y finalización del año escolar.</b>
                <hr>

                <form id="formEditarAnioEscolar" method="POST" autocomplete="off" onsubmit="return modificarAnioEscolar()">

                    <input type="hidden" name="idAnioEscolarEdit" id="idAnioEscolarEdit">

                    <div class="row">
                        <div class="col">
                            <label for="ddmmiEdit" class="formV-label">Día y Mes de Inicio:</label>
                            <input type="text" name="ddmmiEdit" id="ddmmiEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col">
                            <label for="yyiEdit">Año de Inicio:</label>
                            <input type="text" name="yyiEdit" id="yyiEdit" class="form-control" readonly disabled>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="ddmmfEdit" class="formV-label">Día y Mes de Finalización:</label>
                            <input type="text" name="ddmmfEdit" id="ddmmfEdit" class="form-control input-readonly" readonly>
                        </div>
                        <div class="col">
                            <label for="yyfEdit">Año de Finalización:</label>
                            <input type="text" name="yyfEdit" id="yyfEdit" class="form-control" readonly disabled>
                        </div>
                    </div>

                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btnCerrarModalEditarAnioEscolar" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Modificar">
                    </div>
                    
                </form>

            </div>

        </div>
    </div>
</div>