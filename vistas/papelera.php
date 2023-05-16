<?php 

	require_once "header.php";

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-trash-can display-5"></span> Papelera</h1><br>
	 		<div class="row">
	 			<div class="col-sm-4">
	 				<span class="btn btn-primary">
	 					<span class="fa-solid fa-user-plus"></span> Vaciar Papelera
	 				</span>
	 			</div>
	 		</div><br>
	 		<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nam repellat odio accusamus, perferendis quod soluta sunt aperiam labore obcaecati beatae illo mollitia a inventore accusantium nostrum id commodi quae.</b>
	 		<hr>

	 		<div id="tablaPapelera"></div>

	 	</div>
	 </div>
 	
<?php 

	require_once "footer.php";

?>

<script type="text/javascript">
	 
 	$(document).ready(function(){
 		$('#tablaPapelera').load('papelera/tablaPapelera.php');
 	});

</script>