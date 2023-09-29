<h2>Listado de Literal del Estudiante</h2>
<p><b>A continuación se muestra la calificación del estudiante, podrá agregar, modificar y eliminar la calificación.</b></p>
<hr>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaLiteralEstudianteDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Cédula:</th>
				<th>Nombre:</th>
				<th>Peridodo:</th>
				<th>Grado:</th>
				<th class="col-sm-3">Acciones:</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Cédula</td>
				<td>Nombre</td>
				<td>Peridodo</td>
				<td>Grado</td>
				<td class="col-sm-3">
					<span class="btn btn-warning" title="Editar">Editar</span>
					<span class="btn btn-danger" title="Eliminar">Eliminar</span>
				</td>
			</tr>
		</tbody>

	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaLiteralEstudianteDataTables').DataTable({
			responsive: "true",
			dom: 'Bfrtilp',
			buttons: {
				dom: {
					button: {
						className: 'btn'
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
			}
		});
	});
</script>