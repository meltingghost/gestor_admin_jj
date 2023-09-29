<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-lock display-5"></span> Código de Inscripción</h1>
	 		<b>El código de inscripción sirve para proporcionar permisos de inscripción a todo aquel usuario que asi lo requiera, cabe mencionar que Los Códigos no se pueden modificar o eliminar, solo se reemplazan cuando se agrega uno nuevo.</b>
	 		<hr>

	 		<div class="row">

	 			<div class="col-sm-4">
 				<?php 
 					if ($idCargoUser == 1 OR $idCargoUser == 3) { 
 				?>
	 				
 					<div class="h-100 p-5 text-white bg-jj rounded-5 formRegistroSm">
	 					<form id="formRegistrarCodigoInscripcion" method="POST" autocomplete="off" onsubmit="return agregarCodigoInscripcion()">
	 						<label for="codigo" class="formV-label">Código:</label><br><br>
	 						<input type="text" name="codigo" id="codigo" class="form-control input-no-space" maxlength="30" required="" onkeyup="mayus(this.id, this.value);"><br>
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

	 			<div class="col-sm-8">
	 				<h2>Listado de Códigos</h2>
	 				<p><b>Solo se tomará en cuenta el código actual, los demás codigos solo se mantendrán como registro.</b></p>
	 				<hr>
	 				<div id="tablaCodigoInscripcion"></div>
	 			</div>

	 		</div>

	 	</div>
	 </div>
 	

 <?php 

 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

?>

<script src="../js/estudiantes.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaCodigoInscripcion').load('estudiantes/tablaCodigoInscripcion.php');
	});
</script>