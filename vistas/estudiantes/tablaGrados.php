<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM grados ORDER BY id_grado ASC";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<h2>Listado de Grados y Secciones</h2>
<p><b>Te recordamos que si eliminas un grado, todo aquel estudiante que se encuentre asignado a dicho grado será eliminado automaticamente al igual que las secciónes correspondientes.</b></p>
<hr>

<div class="table-responsive">
	<table class="table table-sm table-striped table-hover blue-light-jj" id="tablaGradosDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th style="display: none;">ID</th>
				<th class="col-sm-4">Grado:</th>
				<th class="col-sm-2">Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 

			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idGrado = $row['id_grado'];			

		?>

			<tr>
				<td style="display: none;"><?php echo $row['id_grado']; ?></td>
				<td class="col-sm-4 text-center"><?php echo $row['numeroGrado']; ?></td>
				<td class="col-sm-2">

				<?php 
	 				if ($idCargoUser == 1 OR $idCargoUser == 3) {
	 			?>

						<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarGrado" onclick="editarGrado('<?php echo $idGrado ?>')">Editar</span>
						<span class="btn btn-danger" title="Eliminar" onclick="eliminarGrado('<?php echo $idGrado ?>')">Eliminar</span>

				<?php 
					} else {
				?>

						<span class="btn btn-outline" title="Detalles" onclick="noAutorizado()">
							<span class="fa-solid fa-xmark"></span>
							<span>No autorizado</span>
							<span class="fa-solid fa-xmark"></span>
						</span>	

				<?php 
					}
				?>

				</td>
			</tr>

		<?php 

			}

		?>

		</tbody>

	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaGradosDataTables').DataTable({
			responsive: "true",
			dom: 'Bfrtilp',
			buttons: {
				dom: {
					button: {
						className: 'btnes'
					}
				},
				buttons: [{
					extend: 'excelHtml5',
					text: '<i class="fa-solid fa-file-excel"></i>',
					titleAttr: 'Exportar a Excel',
					className: 'btn btn-success'
				},
				{
					extend: 'pdfHtml5',
					text: '<i class="fa-solid fa-file-pdf"></i>',
					titleAttr: 'Exportar a PDF',
					className: 'btn btn-danger'
				},
				{
					extend: 'print',
					text: '<i class="fa-solid fa-print"></i>',
					titleAttr: 'Imprimir',
					className: 'btn btn-primary'
				}]
			},
			language: {
				url: '../librerias/dataTables/spanish.json'
			},
			order: [[0, 'asc']]
		});
	});
</script>