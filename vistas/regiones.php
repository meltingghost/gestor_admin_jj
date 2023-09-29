<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

?>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container">

	 		<h1 class="display-4">
	 			<span class="fa-solid fa-location-dot display-5"></span>
	 			<span id="btnEstados" class="subActivo formV-label" title="Click para ver Estados">Estados</span>,
	 			<span id="btnMunicipios" class="subInactivo formV-label" title="Click para ver Municipios">Municipios</span> y 
	 			<span id="btnParroquias" class="subInactivo formV-label" title="Click para ver Parroquias">Parroquias</span>
	 		</h1>
	 		<br>

	 		<div id="divEstados" class="mostrar">

 			<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser ==3) { 
			 ?>
	 			
	 			<div class="row">
	 				<div class="col">
	 					<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEstado">
	 						<span class="fa-solid fa-circle-plus"></span> Agregar Estado
	 					</span>
	 				</div>
	 			</div>

	 		<?php 
	 			}
	 		?>

	 			<p class="mt-2"><b>Agrege estados para poder asignar las direcciones tanto del personal como de los estudiantes. Le recordamos que si elimina un estado que contenga municipios y parroquias asignados estos serán eliminados automaticamente al igual que el personal y los estudiantes que tengan como direcciones el estado seleccionado.</b></p>
	 			<hr>
	 			<div id="tablaEstados"></div>

	 		</div>

	 		<div id="divMunicipios" class="ocultar">

	 		<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser ==3) { 
			 ?>
	 			
	 			<div class="row">
	 				<div class="col">
	 					<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarMunicipio">
	 						<span class="fa-solid fa-circle-plus"></span> Agregar Municipio
	 					</span>
	 				</div>
	 			</div>

	 		<?php 
	 			}
	 		?>

	 			<p class="mt-2"><b>Agrege municipios para poder asignar las direcciones tanto del personal como de los estudiantes. Le recordamos que si elimina un muncipio que contenga parroquias asignadas estas serán eliminadas automaticamente al igual que el personal y los estudiantes que tengan como direcciones el municipio seleccionado.</b></p>
	 			<hr>
	 			<div id="tablaMunicipios"></div>

	 		</div>

	 		<div id="divParroquias" class="ocultar">

	 		<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser ==3) { 
			 ?>
	 			
	 			<div class="row">
	 				<div class="col">
	 					<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarParroquia">
	 						<span class="fa-solid fa-circle-plus"></span> Agregar Parroquia
	 					</span>
	 				</div>
	 			</div>

	 		<?php 
	 			}
	 		?>

	 			<p class="mt-2"><b>Agrege parroquias para poder asignar las direcciones tanto del personal como de los estudiantes. Le recordamos que si elimina una parroquia que este asiganda como dirección a alguien del personal o a los estudiantes estos serán eliminados automaticamente.</b></p>
	 			<hr>
	 			<div id="tablaParroquias"></div>

	 		</div>

	 	</div>
	 </div>

<?php 

	include_once "regiones/modalAgregarEstado.php";
	include_once "regiones/modalEditarEstado.php";
	include_once "regiones/modalAgregarMunicipio.php";
	include_once "regiones/modalEditarMunicipio.php";
	include_once "regiones/modalAgregarParroquia.php";
	include_once "regiones/modalEditarParroquia.php";
	require_once "footer.php";
	require_once "buttonsDataTables.php";

?>

<script src="../js/regiones.js"></script>

<script type="text/javascript">
	
	$(document).ready(function(){

		$('#tablaEstados').load('regiones/tablaEstados.php');
		$('#tablaMunicipios').load('regiones/tablaMunicipios.php');
		$('#tablaParroquias').load('regiones/tablaParroquias.php');
		$('#cargarEstadoMunicipio').load('regiones/selectEstadoMunicipio.php');
		$('#cargarEstadoMunicipioEdit').load('regiones/selectEstadoMunicipioEdit.php');
		$('#cargarMunicipioParroquia').load('regiones/selectMunicipioParroquia.php');
		$('#cargarMunicipioParroquiaEdit').load('regiones/selectMunicipioParroquiaEdit.php');

	});

</script>