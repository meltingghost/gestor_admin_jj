<?php 

	require_once "header.php";

?>

<div class="h-100 p-5 text-dark bg-transparent rounded-5">
	<div id="responsive" class="container spaceDown">

		<h1 class="display-4"><span class="fa-solid fa-graduation-cap display-5"></span> Estudiantes</h1><br>
		<div class="row">
			<div class="col">
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEI">
					<span class="fa-solid fa-user-plus"></span> Agregar Estudiante Inicial
				</span>
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarEstudianteBasica">
					<span class="fa-solid fa-user-plus"></span> Inscribir Estudiante de Basica
				</span>
				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
					<span class="fa-solid fa-clipboard-check"></span> Formalizar Inscripción
				</span>
			</div>
		</div><br>
		<b>Te recordamos que las inscripciones son unicamente para los nuevos estudiantes, ya que los estudiantes regulares ya están inscritos y estos solo se deben actualizar.</b>
		<hr>

		<div id="tablaEstudiantes"></div>

	</div>
</div>
 	
 <?php 

 	include 'estudiantes/modalAgregarEstudianteInicial.php';
 	include 'estudiantes/modalAgregarEstudianteBasica.php';
 	require_once "footer.php";

  ?>

  <script src="../js/calendario.js"></script>
  <script src="../js/multiform.js"></script>
  <script type="text/javascript">
  		$(document).ready(function(){
  			$('#tablaEstudiantes').load("estudiantes/tablaEstudiantes.php");
  		});
  </script>