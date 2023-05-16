<?php 

	require_once "header.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-address-card display-5"></span> Cargos</h1>
	 		<p><b>Añada cargos para poder asignar al personal.</b></p>
	 		<hr>

	 		<div class="row">
	 			<div class="col-sm-4">

 				<?php 
 					if ($idCargoUser == 1 OR $idCargoUser == 2) { 
 				 ?>

	 				<div class="h-100 p-5 text-white bg-jj rounded-5 formRegistroSm">
	 					<form id="formRegistrarCargos" method="POST" autocomplete="off" onsubmit="return agregarCargo()">
	 						<label for="nombreCargo">Nombre del Cargo:</label><br><br>
	 						<input type="text" name="nombreCargo" id="nombreCargo" class="form-control" pattern="[a-zA-Z]+" minlength="3" maxlength="30" required="" onkeyup="mayus(this.id, this.value);"><br>
	 						<div class="col d-grid gap-2">
	 							<input type="submit" class="btn btn-success btn-block" value="Registrar">
	 						</div>
	 					</form>
	 				</div>

	 			<?php 
	 				} else {
	 			?>	

	 			<div class="h-100 p-4 text-white bg-jj rounded-5 formRegistrarCargos">
	 				<p class="mt-2" style="text-align: justify;">Usted solo tiene permisos de lectura, por lo tanto solo podrá ver el contenido de página, sin opción de agregar, modificar o eliminar algo. Los unicos usuarios autorizados para realizar estas acciones son: el Director, el Sub-director Administrativo  y el Sub-director Académico.</p>
	 			</div>
	 			<?php	
	 				}
	 			?>
	 				
	 			</div>

	 			<div class="col-sm-8">
	 				<h2>Listado de Cargos</h2>
	 				<p><b>Te recordamos que si eliminas un cargo que se encuentre asignado, el personal asignado a dicho cargo será eliminado automaticamente.</b></p>
	 				<hr>
	 				<div id="tablaCargos"></div>
	 			</div>

	 		</div>

	 	</div>
	 </div>
 	
 <?php 

 	include "personal/modalEditarCargo.php";
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

  ?>

  <script src="../js/personal.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$("#tablaCargos").load("personal/tablaCargos.php");
  	})
  </script>