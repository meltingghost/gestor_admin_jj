<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

?>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4">
	 			<span class="fa-solid fa-users display-5"></span>
	 			<span id="btnGrados" class="subActivo" title="Click para ver Grados">Grados</span> y 
	 			<span id="btnSecciones" class="subInactivo" title="Click para ver Secciones">Secciones</span>
	 		</h1>

	 			<b id="pGrados" style="display: block;">Añada grados para poder inscribir a los estudiantes, una vez agregados los grados proceda a agregar las secciones correspondientes. Los grados pueden ser agregados con letras o números.</b>
	 			<b id="pSecciones" style="display: none;">Añada secciones a los grados que ya están registrados en el sistema.</b>
	 			<hr>

	 			<div class="row">

	 				<div class="col-sm-4" id="divGrados" style="display: block;">
 						<?php 
	 					if ($idCargoUser == 1 OR $idCargoUser == 3) { 
 						?>

	 						<div class="h-100 p-5 text-white bg-jj rounded-5 formRegistroSm">
	 							<form id="formRegistrarGrado" method="POST" autocomplete="off" onsubmit="return agregarGrado()">
	 								<label for="grado" class="formV-label">Grado:</label><br><br>
	 								<input type="text" name="grado" id="grado" class="form-control" maxlength="80" placeholder="Primero / 1°" required="" onkeyup="mayus(this.id, this.value);"><br>
	 								<div class="col d-grid gap-2">
	 									<input type="submit" class="btn btn-success btn-block" value="Registrar">
	 								</div>
	 							</form>
	 						</div>

	 					<?php 
	 					} else {
	 					?>

	 						<div class="h-100 p-4 text-white bg-jj rounded-5 formRegistroSm">
	 							<p class="mt-2" style="text-align: justify;">Usted solo tiene permisos de lectura, por lo tanto solo podrá ver el contenido de página, sin opción de agregar, modificar o eliminar algo. Los unicos usuarios autorizados para realizar estas acciones son: el Director, el Sub-director Administrativo  y el Sub-director Académico.</p>
	 						</div> 					

 						<?php 
	 					}
 						?>
	 				</div>

	 				<div class="col-sm-4" id="divSecciones" style="display: none;">
	 					<?php 
	 					if ($idCargoUser == 1 OR $idCargoUser == 3) { 
	 					?>

	 						<div class="h-100 p-5 text-white bg-jj rounded-5 formRegistroMd">
	 							<form id="formRegistrarSeccion" method="POST" autocomplete="off" onsubmit="return agregarSeccion()">
	 								<div class="row">
	 									<div class="col">
	 										<label for="seccion" class="formV-label">Sección:</label>
	 										<input type="text" name="seccion" id="seccion" class="form-control" pattern="[a-zA-ZÁÉÍÓÚáéíóúÑñ]+"  maxlength="3" placeholder="Ejemplo: A" required="" onkeyup="mayus(this.id, this.value);">
	 									</div>
	 								</div><br>
	 								<div class="row">
	 									<div class="col">
	 										<label for="gradoSeccion" class="formV-label">Grado:</label>
	 										<div id="cargarGradosSeccion"></div>
	 									</div>
	 								</div>
	 								<br>
	 								<div class="col d-grid gap-2">
	 									<input type="submit" class="btn btn-success btn-block" value="Registrar">
	 								</div>
	 							</form>
	 						</div>

	 					<?php 
	 					} else {
	 					?>

	 						<div class="h-100 p-4 text-white bg-jj rounded-5 formRegistroSm">
	 							<p class="mt-2" style="text-align: justify;">Usted solo tiene permisos de lectura, por lo tanto solo podrá ver el contenido de página, sin opción de agregar, modificar o eliminar algo. Los unicos usuarios autorizados para realizar estas acciones son: el Director, el Sub-director Administrativo  y el Sub-director Académico.</p>
	 						</div> 					

	 					<?php 
	 					}
	 					?>
	 				</div>

	 				<div class="col-sm-8" id="divTablaGrados">
	 					<div id="tablaGrados" style="display: block;"></div>
	 				</div>

	 				<div class="col-sm-8" id="divTablaSecciones" style="display: none;">
	 					<div id="tablaSecciones"></div>
	 				</div>

	 			</div>

	 		</div>

	 	</div>
	 </div>

<?php 

	include "estudiantes/modalEditarGrado.php";
	include "estudiantes/modalEditarSeccion.php";
	require_once "footer.php";
	require_once "buttonsDataTables.php";

?>

<script src="../js/estudiantes.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$('#tablaGrados').load('estudiantes/tablaGrados.php');
		$('#tablaSecciones').load('estudiantes/tablaSecciones.php');
		$('#cargarGradosSeccion').load('estudiantes/selectGradosSeccion.php');

		$('#btnSecciones').click(function() {
			document.getElementById('btnGrados').classList.remove('subActivo');
			document.getElementById('btnGrados').classList.add('subInactivo');
			document.getElementById('btnSecciones').classList.add('subActivo');
			document.getElementById('pGrados').style.display = 'none';
			document.getElementById('pSecciones').style.display = 'block';
			document.getElementById('divGrados').style.display = 'none';
			document.getElementById('divSecciones').style.display = 'block';
			document.getElementById('divTablaGrados').style.display = 'none';
			document.getElementById('divTablaSecciones').style.display = 'block';
		});
		$('#btnGrados').click(function() {
			document.getElementById('btnSecciones').classList.remove('subActivo');
			document.getElementById('btnSecciones').classList.add('subInactivo');
			document.getElementById('btnGrados').classList.add('subActivo');
			document.getElementById('pGrados').style.display = 'block';
			document.getElementById('pSecciones').style.display = 'none';
			document.getElementById('divGrados').style.display = 'block';
			document.getElementById('divSecciones').style.display = 'none';
			document.getElementById('divTablaGrados').style.display = 'block';
			document.getElementById('divTablaSecciones').style.display = 'none';

		});
	});
</script>