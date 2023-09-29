<?php 

	require_once "header.php";
	require_once "procesos/database/conexion.php";
	$sql = "SELECT * FROM materias_ruleta ORDER BY RAND() LIMIT 8";
	$result = $conectar->query($sql);

?>

<body>

	<link rel="stylesheet" href="css/ruleta.css">

	<div class="container mt-1">
		
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6" style="text-align: center;">
				<div id="mainbox" class="mainbox">
					<div id="box" class="box">
						<?php
							$count = 0;
							echo '<div class="box1">';
							while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
								$idMateria = $row['id_materia'];
								if ($count == 4) {
									echo '</div><div class="box2">';
								}
								$class = "span" . (($count % 4) + 1);
								echo '<span class="' . $class . '"><b>' . $row['nombreMateria'] . '</b></span>';
								$count++;
							}
							echo '</div>';
						?>
					</div>
					<button id="spinButton" class="spin" onclick="myfunction()">SPIN</button>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 mt-5">
				<div class="row">
					<div class="col-sm-12 col-md-6 d-grid gap-2">
						<a href="inicio.php" class="btn btn-secondary">Volver</a>
					</div>
					<div class="col-sm-12 col-md-6 d-grid gap-2">
						<button class="btn btn-secondary dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false">Menú</button>
						<ul class="dropdown-menu">
							<li><h6 class="dropdown-header">Preguntas y Respuestas</h6></li>
							<li><a class="dropdown-item" href="#" onclick="agregarPreguntaRuleta('divAggPreguntaRuleta')">Agregar Pregunta</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalPreguntasRuleta">Ver Lista de Preguntas</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#" onclick="agregarMateriaRuleta('divAggMateriaRuleta')">Agregar Materia</a></li>
							<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalMateriasRuleta">Ver Lista de Materias</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#" onclick="ayudaRuleta('divAyudaRuleta')">Ayuda</a></li>
						</ul>
					</div>
				</div>
				<br>
				<div class="row">
					<div id="cuadroText" class="col">
						<div class="contenedor-small" id="animacionRing" style="display: block;">
							<div class="lds-ring">
								<div></div>
								<div></div>
								<div></div>
							</div>
						</div>

						<div id="divPrincipalRuleta" class="mostrar text-center mt-5">
							<h2><p><b>Haz click en el botón "SPIN" para hacer girar la ruleta!!!.</b></p></h2>
						</div>

						<div id="showMateria" class="mostrar text-center mt-5">
							<h3><p id="selectedMateria"></p></h3>
						</div>

						<div id="showPregunta" class="mostrar text-center mt-5">
							<h3><p id="selectedPregunta"></p></h3>
						</div>

						<div id="showRespuesta" class="mostrar text-center mt-4">
							<h3><p id="answerContainer"></p></h3>
						</div>

						<div id="showValidacion" class="mostrar text-center mt-5">
							<h3><p id="responseMessage"></p></h3>
						</div>

						<div id="showResponseAggPregunta" class="mostrar text-center mt-5">
							<h3><p id="responseMessageAggPregunta"></p></h3>
						</div>

						<div id="showResponseModificarPregunta" class="mostrar text-center mt-5">
							<h3><p id="responseMessageModificarPregunta"></p></h3>
						</div>

						<div id="showResponseEliminarPregunta" class="mostrar text-center mt-5">
							<h3><p id="responseMessageEliminarPregunta"></p></h3>
						</div>

						<div id="showResponseAggMateria" class="mostrar text-center mt-5">
							<h3><p id="responseMessageAggMateria"></p></h3>
						</div>

						<div id="showResponseModificar" class="mostrar text-center mt-5">
							<h3><p id="responseMessageModificar"></p></h3>
						</div>

						<div id="showResponseEliminarMateria" class="mostrar text-center mt-5">
							<h3><p id="responseMessageEliminarMateria"></p></h3>
						</div>

						<div id="divAggPreguntaRuleta" class="ocultar">
							
							<p class="text-center"><b>Agregue preguntas y respuestas para hacer funcionar la ruleta, estas preguntas serán agregadas a las diferentes materias registradas.</b></p>

							<form id="formAggPreguntaRuleta" method="POST" autocomplete="off" onsubmit="return agregarPregunta()">

								<div class="row">
									<div class="col">
										<div id="cargarMateriaPregunta"></div>
									</div>
								</div>
								<div class="row mt-1">
									<div class="col">
										<input type="text" name="pregunta" id="pregunta" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,.¿? 1-9]+" maxlength="50" placeholder="Pregunta" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<div class="row mt-1">
									<div class="col">
										<input type="text" name="respuesta" id="respuesta" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" placeholder="Respuesta" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<div class="row mt-1">
									<div class="col text-center">
										<input type="submit" class="btn btn-success" value="Registrar">
									</div>
								</div>

							</form>

						</div>

						<div id="divModificarPreguntaRuleta" class="ocultar">
							
							<p class="mt-1 mb-4"><b>Aqui podrá editar la pregunta seleccionada.</b></p>

							<form id="formModificarPreguntaRuleta" method="POST" autocomplete="off" onsubmit="return modificarPregunta()">

								<input type="hidden" name="idPreguntaEdit" id="idPreguntaEdit">
								<input type="hidden" name="idMateriaPEdit" id="idMateriaPEdit">
								<input type="hidden" name="preguntaOld" id="preguntaOld">

								<div class="row mt-3">
									<div class="col">
										<div id="cargarMateriaPreguntaEdit"></div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<input type="text" name="preguntaEdit" id="preguntaEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,.¿? 1-9]+" maxlength="50" placeholder="Pregunta" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col">
										<input type="text" name="respuestaEdit" id="respuestaEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" placeholder="Respuesta" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<div class="row mt-3">
									<div class="col text-center">
										<a class="btn btn-secondary" onclick="resetCuadroText('divPrincipalRuleta')">Cancelar</a>
										<input type="submit" class="btn btn-warning" value="Modificar">
									</div>
								</div>

							</form>

						</div>

						<div id="divAggMateriaRuleta" class="ocultar">

							<p class="text-center"><b>Agregue materias hasta llenar la ruleta. Debe tener un mínimo de 8 materias agregadas para que la ruleta funcione correctamente. Recuerde agregarle preguntas a cada materia agregada en la ruleta.</b></p>

							<form id="formAggMateriaRuleta" method="POST" autocomplete="off" onsubmit="return agregarMateria()">

								<div class="row">
									<div class="col">
										<label for="nombreMateria" class="formV-label">Nombre de la Materia:</label>
										<input type="text" name="nombreMateria" id="nombreMateria" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col text-center">
										<input type="submit" class="btn btn-success" value="Registrar">
									</div>
								</div>

							</form>

						</div>

						<div id="divModificarMateriaRuleta" class="ocultar">
							
							<p><b>Aqui podrá editar la materia seleccionada.</b></p>

							<form id="formModificarMateriaRuleta" method="POST" autocomplete="off" onsubmit="return modificarMateria()">

								<input type="hidden" name="idMateriaEdit" id="idMateriaEdit">
								<input type="hidden" name="nombreMateriaOld" id="nombreMateriaOld">

								<div class="row">
									<div class="col">
										<label for="nombreMateriaEdit" class="formV-label">Nombre de la Materia:</label>
										<input type="text" name="nombreMateriaEdit" id="nombreMateriaEdit" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ,. 1-9]+" maxlength="50" required onkeyup="mayus(this.id, this.value);">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col text-center">
										<a class="btn btn-secondary" onclick="resetCuadroText('divPrincipalRuleta')">Cancelar</a>
										<input type="submit" class="btn btn-warning" value="Modificar">
									</div>
								</div>

							</form>

						</div>

						<div id="divAyudaRuleta" class="ocultar">
							<h3 class="text-center">Ruleta del Saber</h3>
							<p class="fs-6" style="text-align: justify;">Pruebe los conocimientos de sus alumnos con esta divertida ruleta de preguntas. Presione el botón spin para seleccionar una pregunta asignada a alguna materia de manera aleatoria, cuando se muestre en la pantalla deberá de escribir en el recuadro
								 la que piense que sea la respuesta, a lo que se mostrara en la pantalla si su respuesta fué la correcta. Utilize el menú para desplegar las distintas funciones integradas. Primero debe ingresar las materias cursadas por los alumnos, asegurese de tener un
								mínimo de 8 preguntas agregadas para que la ruleta pueda funcionar correctamente. Seguidamente deberá
								agregar las preguntas correspondientes a cada una de las materias.
								Cada una de las materias agregadas debe tener mínimo una pregunta asignada para que la ruleta funcione correctamente.
							</p>
						</div>

					</div>
				</div>
			</div>
			
			<br>
		</div>

	</div>

<?php 

	include_once "vistas/ruleta/modalMateriasRuleta.php";
	include_once "vistas/ruleta/modalPreguntasRuleta.php";
	require_once "footer.php";

?>

<script src="js/ruleta.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#cargarMateriaPregunta').load("vistas/ruleta/selectMateriasRuleta.php");
		$('#cargarMateriaPreguntaEdit').load("vistas/ruleta/selectMateriasRuletaEdit.php");
		$('#tablaMaterias').load("vistas/ruleta/tablaMaterias.php");
		$('#tablaPreguntas').load("vistas/ruleta/tablaPreguntas.php");
	});
</script>