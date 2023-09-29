<?php

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM codigos ORDER BY id_codigo DESC";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-sm table-striped table-hover blue-light-jj" id="tablaLiteralDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th style="display: none;">ID</th>
				<th>Código:</th>
				<th class="col-sm-5">Fecha:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while($row = $result->fetch_array(MYSQLI_ASSOC)) {
				
		 ?>

			<tr>
				<td style="display: none;"><?php echo $row['id_codigo'] ?></td>
				<td><?php echo $row['codigo'] ?></td>
				<td class="col-sm-5"><?php echo $row['fecha'] ?></td>
			</tr>

		<?php 
			}
		?>

		</tbody>

	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaLiteralDataTables').DataTable({
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
			order: [[0, 'desc']],
		});
	});
</script>