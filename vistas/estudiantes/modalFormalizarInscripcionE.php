<div class="modal fade" id="modalFormalizarInscripcionE" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Formalizar Inscripción</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="resetModalFormalizarE()"></button>
            </div>

            <form id="formFormalizarE" method="POST" autocomplete="off" onsubmit="return formalizarInscripcion()">

                <div class="modal-body">

                    <p style="text-align: justify;"><b>Aqui podrá formalizar la inscripción del estudiante seleccionado, en caso de haber seleccionado un estudiante de educación basica no podrá modificar los datos ingresados en el momento que se inscribio.</b></p>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <label for="estudianteFormalizar" class="formV-label">Estudiante:</label>
                            <div id="cargarEstudianteFormalizar"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="gradoFormalizar" class="formV-label">Grado a Cursar:</label>
                            <div id="cargarGradoFormalizar"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="seccionFormalizar" class="formV-label">Sección:</label>
                            <div id="cargarSeccionFormalizar"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="anioEscolarFormalizar" class="formV-label">Año Escolar:</label>
                            <div id="cargarAnioEscolarFormalizar"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="literalFormalizar" class="formV-label">Literal Grado Anterior:</label>
                            <div id="cargarLiteralFormalizar"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">Confirmación del Representante:</label><br>
                            <div class="mb-3 form-check form-switch">
                                <input type="hidden" name="confirmacionRE" value="0">
                                <label class="formV-label form-check-label"><input type="checkbox" name="confirmacionRE" id="confirmacionRE" class="form-check-input" value="1"> Marque solo si el representante esta presente.</label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" id="btnCerrarModalFormalizarInscripcionE" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetModalFormalizarE()">Cerrar</button>
                        <input type="submit" class="btn btn-warning" value="Formalizar">
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>