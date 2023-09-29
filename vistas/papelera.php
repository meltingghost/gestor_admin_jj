<?php 

	require_once "header.php";
	require_once "menu.php";

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-trash-can display-5"></span> Papelera</h1><br>
	 		<div class="row">
	 			<div class="col-sm-4">
	 				<span class="btn btn-primary" title="Vaciar Papelera" onclick="vaciarPapelera()">
	 					<span class="fa-solid fa-recycle"></span> Vaciar Papelera
	 				</span>
	 			</div>
	 		</div><br>
	 		<b>A continuación se muestran todos los estudiantes que fueron eliminados del registro principal.</b>
	 		<hr>

	 		<div id="tablaPapelera"></div>

	 	</div>
	 </div>
 	
<?php 

	require_once "footer.php";

?>

<script src="../js/papelera.js"></script>

<script type="text/javascript">
	 
 	$(document).ready(function(){
 		$('#tablaPapelera').load('papelera/tablaPapelera.php');
 	});

</script>