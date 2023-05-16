<div class="modal fade" id="modalConsultarNotaEstudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Consultar Literal del Estudiante</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                
                <form method="POST" action="" autocomplete="off">

                    <p><b>Aqui podrás consultar el literal de los estudiantes, desde la fecha de ingreso a la institución hasta la actual.</b></p>

                    <label for="gradoActual">Grado Actual:</label>
                    <select name="gradoActual" id="gradoActual" class="form-select form-control" required="">
                        <option selected="" disabled="" value="">Seleccione un Grado</option>
                        <option>Preescolar 1° Nivel</option>
                        <option>Preescolar 2° Nivel</option>
                        <option>Preescolar 3° Nivel</option>
                        <option>1° Grado</option>
                        <option>2° Grado</option>
                        <option>3° Grado</option>
                        <option>4° Grado</option>
                        <option>5° Grado</option>
                        <option>6° Grado</option>
                        <option>Promovido</option>
                    </select>
                    <br>

                    <label for="estudianteConsulta">Estudiante:</label>
                    <select name="estudianteConsulta" id="estudianteConsulta" class="form-select form-control" required="">
                        <option selected="" disabled="" value="">Seleccione un Estudiante</option>
                    </select>
                    <br>

                    <label for="periodoConsulta">Periodo:</label>
                    <select name="periodoConsulta" id="periodoConsulta" class="form-select form-control" required="">
                        <option selected="" disabled="" value="">Seleccione un Periodo</option>
                        <option>Primer Periodo</option>
                        <option>Segundo Periodo</option>
                        <option>Tercer Periodo</option>
                        <option>Todos los Periodos</option>
                    </select>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <input type="submit" class="btn btn-success" value="Consultar">
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>