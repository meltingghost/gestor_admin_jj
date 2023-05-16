<?php 

	require_once "header.php";

?>

<body style="margin:0; background:url(img/asistencia.avif) fixed; background-size: cover;">

	<div class="formAsisPer h-100 p-5 text-dark bg-white rounded-5">
		<h1 align="center">Control de Asistencia</h1>
		<p style="text-align: center;"><b>Te Recordamos que la fecha y hora, tanto de entrada como salida se marcarán automaticamente.</b></p>
		<hr>

		<form autocomplete="off" onsubmit="return preguntas()">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<label for="fechaAsist">Fecha:</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="fechaAsist" name="fechaAsist" class="form-control" disabled="" readonly="">
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
							<input type="text" id="horaAsist" name="horaAsist" class="form-control clockpicker" placeholder="--:--" data-placement="left" data-align="top" data-autoclose="true" readonly="">
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
							<label for="espAsist">Observación:</label>
						</div>
						<div class="col-sm-9">
							<textarea id="espAsist" name="espAsist" cols="30" rows="2" class="form-control"></textarea>
						</div>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-sm-6 text-left">
							<input class="btn btn-success" type="submit" value="Guardar">
						</div>
						<div class="col-sm-3 text-right">
							<a href="inicio.php" class="btn btn-secondary">Volver</a>
						</div>
						<div class="col-sm-3 text-right">
							<input class="btn btn-danger" type="reset" value="Limpiar">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<?php 

	require_once "footer.php";

?>

<script type="text/javascript">
	$('.clockpicker').clockpicker();
</script>
