<?php 

	require_once "header.php";
	require_once "menu.php";
	session_start();
	$idCargoUser = $_SESSION['id_cargo'];

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container">

	 		<h1 class="display-4"><span class="fa-solid fa-spell-check display-5"></span> Literal</h1><br>
	 		
	 		<div class="row">
	 			<div class="col">
	 				<span class="btn btn-primary" id="btnCosultarNotaEstudiante" data-bs-toggle="modal" data-bs-target="#modalConsultarNotaEstudiante">
	 					<span class="fa-solid fa-clipboard-check"></span> Consultar Literal del Estudiante
	 				</span>

	 			<?php 
	 				if ($idCargoUser == 1 OR $idCargoUser == 3) {
	 			?>

		 				<span class="btn btn-primary" id="btnAgregarLiteral" data-bs-toggle="modal" data-bs-target="#modalAgregarLiteral">
		 					<span class="fa-solid fa-circle-plus"></span> Agregar Literal
		 				</span>

	 			<?php 
	 				}
	 			?>

	 			</div>
	 		</div>
	 		<br>

	 		<div id="tablaLiteral" style="display: block;"></div>
	 		<div id="tablaLiteralEstudiante" style="display: none;"></div>

	 	</div>
	 </div>

 <?php 

 	include "estudiantes/modalConsultarNotaEstudiante.php";
 	include "estudiantes/modalAgregarLiteral.php";
 	include "estudiantes/modalEditarLiteral.php";
 	require_once "footer.php";
 	require_once "buttonsDataTables.php";

?>

	<script src="../js/estudiantes.js"></script>

  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#tablaLiteral').load("estudiantes/tablaLiteral.php");
  		$('#tablaLiteralEstudiante').load("estudiantes/tablaLiteralEstudiante.php");

  		$('#btnCosultarNotaEstudiante').click(function(){
  			document.getElementById('tablaLiteral').style.display = 'none';
  			document.getElementById('tablaLiteralEstudiante').style.display = 'block';
  		});
  	})
  </script>