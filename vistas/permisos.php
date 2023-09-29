<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

?>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-clipboard-list display-5"></span> Tipos de Permisos</h1><br>

 			<?php 
 				if ($idCargoUser == 1 OR $idCargoUser == 2) {
 			?>

	 			<div class="row">
	 				<div class="col">

	 					<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarPermisos">
	 						<span class="fa-solid fa-circle-plus"></span> Agregar Permiso
	 					</span>

	 				</div>
	 			</div>
	 			<br>
	 			<p><b>Agrege los tipos de permisos que pueden ser solicitados por el personal.</b></p>

 			<?php 
 				}
 			?>
	 			
	 		<hr>

	 		<div id="tablaPermisos"></div>

	 	</div>
	</div>

<?php 

 	include "personal/modalAgregarPermiso.php";
 	include "personal/modalEditarPermiso.php";
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

?>


<script src="../js/personal.js"></script>
<script type="text/javascript">
  	$(document).ready(function(){

  		$('#tablaPermisos').load('personal/tablaPermisos.php');

  	})
</script>