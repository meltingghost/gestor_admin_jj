<?php 

	require_once "header.php";

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-person-chalkboard display-5"></span> Personal</h1><br>
	 		<div class="row">
	 			<div class="col-sm-4">
	 				<span class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAgregarPersonal">
	 					<span class="fa-solid fa-user-plus"></span> Agregar Personal
	 				</span>
	 			</div>
	 		</div><br>
	 		<b>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Expedita quae assumenda iure amet esse ducimus nulla, at distinctio, provident culpa fugit nemo eius dignissimos perspiciatis non quas similique, excepturi optio?</b>
	 		<hr>

	 		<div id="tablaPersonal"></div>

	 	</div>
	 </div>
 	
 <?php 

 	include "personal/modalAgregarPersonal.php";
 	require_once "footer.php";

  ?>

<script src="../js/calendario.js"></script>
<script src="../js/multiform.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaPersonal').load('personal/tablaPersonal.php');
	});
</script>