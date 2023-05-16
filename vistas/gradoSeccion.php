<?php 

	require_once "header.php";
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
	 		<b>El código de inscripción sirve para proporcionar permisos de inscripción a todo aquel usuario que asi lo requiera, cabe mencionar que Los Códigos no se pueden modificar o eliminar, solo se reemplazan cuando se agrega uno nuevo.</b>
	 		<hr>

	 		<div id="tablaGrados" style="display: block;">Grados</div>
	 		<!-- LOS GRADOS SE AGREGARAN ASI NOMAS PERO PARA AGREGAR UNA SECCION SE DEBE SELECCIONAR EL GRADO AL Q PERTENECE Y PUES SE MOSTRARA EN LA TABLA DE SECCIONES LAS SECCIONES AGREGADAS Y EN UN LADO LOS GRADOS A Q PERTENECEN. -->
	 		<div id="tablaSecciones" style="display: none;">Secciones</div>

	 	</div>
	 </div>

<?php 

	require_once "footer.php";

?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btnSecciones').click(function() {
			document.getElementById('btnGrados').classList.remove('subActivo');
			document.getElementById('btnGrados').classList.add('subInactivo');
			document.getElementById('btnSecciones').classList.add('subActivo');
			document.getElementById('tablaGrados').style.display = 'none';
			document.getElementById('tablaSecciones').style.display = 'block';
		});
		$('#btnGrados').click(function() {
			document.getElementById('btnSecciones').classList.remove('subActivo');
			document.getElementById('btnSecciones').classList.add('subInactivo');
			document.getElementById('btnGrados').classList.add('subActivo');
			document.getElementById('tablaGrados').style.display = 'block';
			document.getElementById('tablaSecciones').style.display = 'none';

		});
	});
</script>