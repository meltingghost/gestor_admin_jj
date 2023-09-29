<div class="modal fade" id="modalPreguntasSegUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #5EC86A ">
				<h1 class="modal-title fs-5" id="staticBackdropLabel">Preguntas de Seguridad</h1>
			</div>
			<div class="modal-body">

				<p align="center"><b>Por razones de seguridad deberá indicar a continuación tres preguntas junto con su respectiva respuesta.</b></p>
				<hr>

				<form id="formPreguntasSegUser" method="POST" autocomplete="off" onsubmit="return agregarPreguntasSegUser()">

					<input type="hidden" id="idUsuario" name="idUsuario">
					<input type="hidden" id="usernameFinish" name="usernameFinish">

					<div class="row">
						<div class="col-sm-3">
							<label for="pregunta1">Pregunta #1:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="pregunta1" name="pregunta1" class="form-control" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-3">
							<label for="respuesta1">Respuesta #1:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="respuesta1" name="respuesta1" class="form-control input-no-space" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-3">
							<label for="pregunta2">Pregunta #2:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="pregunta2" name="pregunta2" class="form-control" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-3">
							<label for="respuesta2">Respuesta #2:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="respuesta2" name="respuesta2" class="form-control input-no-space" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-3">
							<label for="pregunta3">Pregunta #3:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="pregunta3" name="pregunta3" class="form-control" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>
					<div class="row">
						<div class="col-sm-3">
							<label for="respuesta3">Respuesta #3:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="respuesta3" name="respuesta3" class="form-control input-no-space" required="" oninput="this.value = this.value.toUpperCase()">
						</div>
					</div><br>

					<input class="btn btn-success" type="submit" value="Registrar">
					<button type="button" id="btnCerrarModalPreguntasSegUser" data-bs-dismiss="modal" style="display: none;">Close</button>
				</form>

			</div>
		</div>
	</div>
</div>