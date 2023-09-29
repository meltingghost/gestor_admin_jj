<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container">

	 		<h1 class="display-4">
	 			<span class="fa-regular fa-calendar-days display-5"></span>
	 			<span id="btnAsistencias" class="subActivo formV-label" title="Click para ver las Asistencias"> Asistencias</span> e
	 			<span id="btnInasistencias" class="subInactivo formV-label" title="Click para ver las Inasistencias"> Inasistencias</span>
	 		</h1>
	 		<br>

	 		<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 2) { 
			 ?>

		 		<div class="row">
		 			<div class="col">
		 				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPermisos">
		 					<span class="fa-solid fa-user-plus"></span> Gestionar Permisos
		 				</span>
		 				<!-- ESTE BOTON LO VOY A DEJAR AQUI POR SI ACASO MAS ADELANTE -->
		 				<!-- <span class="btn btn-primary">
		 					<span class="fa-solid fa-user-plus"></span> Consultar Personal
		 				</span> -->
		 				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAsistenciaManual">
		 					<span class="fa-solid fa-user-plus"></span> Asistencia Manual
		 				</span>
		 			</div>
		 		</div><br>

		 	<?php 
		 		}
		 	?>

	 		<b>A continuación podrá visualizar el personal asistente e inasistente en calendarios distintos, podrá seleccionar el calendario de asistencias y el calendario de inasistencias dando click en el titulo de la página. Aqui tambien podrá agregar o modificar las asistencias e inasistencias del personal en caso de imprevistos a la hora de registrar las asistencias externas, pero te recordamos que para hacer esto las asistencias e inasistencias de los dias anteriores deben haber sido registradas correctamente. Por último podrá agregar permisos al personal.</b>
	 		<hr>

		 		<div id="divCalendarAsistencias" class="card" style="display: block;">
		 			<div class="card-body">
		 				<div id="calendarAsistencias"></div>
		 			</div>
		 		</div>

		 		<div id="divCalendarInasistencias" class="card" style="display: none;">
		 			<div class="card-body">
		 				<div id="calendarInasistencias"></div>
		 			</div>
		 		</div>

		 	</div>

	 	</div>
	 </div>
 	
 <?php 

 	include_once "asistencias/modalAsistenciaManual.php";
 	include_once "asistencias/modalPermisos.php";
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

?>

<script src="../js/fullCalendar.js"></script>
<script src="../js/calendario.js"></script>
<script src="../js/asistencias.js"></script>

<script type="text/javascript">
 
	$(document).ready(function(){
		
		$('#tablaAsisPersonal').load('asistencias/tablaAsisPersonal.php');
		$('#cargarPersonalAsisManual').load('asistencias/selectPersonalAsisManual.php');

		$('#btnInasistencias').click(function(){

			document.getElementById('btnAsistencias').classList.add('subInactivo');
			document.getElementById('btnAsistencias').classList.remove('subActivo');
			document.getElementById('btnInasistencias').classList.add('subActivo');
			document.getElementById('btnInasistencias').classList.remove('subInactivo');

			document.getElementById('divCalendarAsistencias').style.display = 'none';
			document.getElementById('divCalendarInasistencias').style.display = 'block';

			cargarCalendarInasistencias();

		});

		$('#btnAsistencias').click(function(){

			document.getElementById('btnAsistencias').classList.add('subActivo');
			document.getElementById('btnAsistencias').classList.remove('subInactivo');
			document.getElementById('btnInasistencias').classList.add('subInactivo');
			document.getElementById('btnInasistencias').classList.remove('subActivo');

			document.getElementById('divCalendarAsistencias').style.display = 'block';
			document.getElementById('divCalendarInasistencias').style.display = 'none';

			cargarCalendarAsistencias();

		});

		$('#cargarPersonalAsisManual').change(function(){
			let cedulaPersonal = $('#personalAsisManual').val();
			$('#tablaAsisPersonal').load('asistencias/tablaAsisPersonal.php?cedulaPersonal=' + cedulaPersonal);
		});

		$('#btnAgregarNuevaAsistencia').click(function(){

			let cedulaPersonal = $('#personalAsisManual').val();

			if (cedulaPersonal != "" && cedulaPersonal != 0 && cedulaPersonal != null) {

				document.getElementById('divAgregarNuevaAsistencia').style.display = 'block';
				document.getElementById('alertAgregarNuevaAsistencia').style.display = 'none';

				$('#cedulaPersonalNewAsis').val(cedulaPersonal);

			} else {
				document.getElementById('alertAgregarNuevaAsistencia').style.display = 'block';
			}

		});

	});

</script>

<script type="text/javascript">
 
	$(document).ready(function(){

		$('#tablaPermisosSolicitados').load('asistencias/tablaPermisosSolicitados.php');

	});

</script>