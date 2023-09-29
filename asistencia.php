<?php 

	require_once "header.php";
    include_once "procesos/funcionesPhp/calcularFechaActual.php";

?>

<body style="margin:0; background:url(img/asistencia.avif) fixed; background-size: cover;">

	<div class="contenedor" id="animacionRing" style="display: none;">
		<div class="lds-ring">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<div class="formAsisPer h-100 p-5 text-dark bg-white rounded-5">
		<h1 align="center">Control de Asistencia</h1>
		<p style="text-align: center;">
			<b>Te Recordamos que la fecha y hora, tanto de entrada como de salida se marcarán automaticamente.</b>
			<span class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modalInfoAsistenciaExt">Mas Información.</span>
		</p>

		<hr>

		<form id="formAgregarAsistenciaExt" method="POST" autocomplete="off" onsubmit="return agregarAsistenciaExt()">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<label for="fechaAsist">Fecha:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="fechaAsist" name="fechaAsist" class="form-control input-readonly" placeholder="<?php echo $fechaActual; ?>" value="<?php echo $fechaActual; ?>" readonly="">
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<label for="horaAsist">Hora:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="horaAsist" name="horaAsist" class="form-control input-readonly" placeholder="8:10:45" readonly="">
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<label for="cedulaProf">Cédula:</label>
						</div>
						<div class="col-sm-9">
							<input type="number" id="cedulaProf" name="cedulaProf" class="form-control" required="">
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<label for="observacionAsis">Observación:</label>
						</div>
						<div class="col-sm-9">
							<textarea id="observacionAsis" name="observacionAsis" cols="30" rows="2" class="form-control" maxlength="200" onkeyup="mayus(this.id, this.value);"></textarea>
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<div class="row">
						<?php 
							if (date('D') == "Sat" OR date('D') == "Sun") {
						?>
							<div class="col text-left">
								<input class="btn btn-success" type="submit" value="Guardar" disabled>
							</div>
							<div class="col text-left">
								<button type="button" class="btn btn-warning" disabled>Inasistentes</button>
							</div>
						<?php 
							}else {
						?>
							<div class="col text-left">
								<input class="btn btn-success" type="submit" value="Guardar">
							</div>
							<div class="col text-left">
								<span class="btn btn-warning" onclick="agregarInasistenciasExt()">Inasistentes</span>
							</div>
						<?php 
							}
						?>
						<div class="col text-right">
							<a href="inicio.php" class="btn btn-secondary">Volver</a>
						</div>
						<div class="col text-right">
							<input class="btn btn-danger" type="reset" value="Limpiar">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<?php 

	include_once "vistas/asistencias/modalInfoAsistecias.php";
	require_once "footer.php";

?>

<script src="js/clock.js"></script>
<script src="js/asistencias.js"></script>