<?php 

	require_once "header.php";

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-regular fa-calendar-days display-5"></span> Asistencias</h1><br>
	 		<div class="row">
	 			<div class="col">
	 				<span class="btn btn-primary">
	 					<span class="fa-solid fa-user-plus"></span> Agregar Permiso
	 				</span>
	 				<span class="btn btn-primary">
	 					<span class="fa-solid fa-user-plus"></span> Consultar Personal
	 				</span>
	 				<span class="btn btn-primary">
	 					<span class="fa-solid fa-user-plus"></span> Asistencias manual
	 				</span>
	 			</div>
	 		</div><br>
	 		<b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi repellendus ex cum commodi, itaque, iure reiciendis, impedit obcaecati, odit velit recusandae? Necessitatibus ullam animi, natus quisquam exercitationem, soluta adipisci quae.</b>
	 		<hr>

	 		<div id="tablaPermisos"></div>

	 	</div>
	 </div>
 	
 <?php 

 	require_once "footer.php";

?>

<script type="text/javascript">
 
	$(document).ready(function(){
		$('#tablaPermisos').load('personal/tablaPermisos.php');
	});

</script>