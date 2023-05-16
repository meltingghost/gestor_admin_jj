<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaPersonalDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Cédula:</th>
				<th>Nombre Completo:</th>
				<th>Tipo:</th>
				<th>Función:</th>
				<th>Teléfono:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Cédula</td>
				<td>Nombre Completo</td>
				<td>Tipo</td>
				<td>Función</td>
				<td>Teléfono</td>
				<td>
					<span class="btn btn-warning" title="Editar">
						<span class="fa-solid fa-user-pen"></span>
					</span>
					<span class="btn btn-danger" title="Eliminar">
						<span class="fa-solid fa-user-xmark"></span>
					</span>
				</td>
			</tr>
		</tbody>

	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaPersonalDataTables').DataTable({
			// responsive: "true",
			// dom: 'Bfrtilp',
			// buttons: {
			// 	dom: {
			// 		button: {
			// 			className: 'btn'
			// 		}
			// 	},
			// 	buttons: [{
			// 		extend: 'excelHtml5',
			// 		text: '<i class="fa-solid fa-file-excel"></i>',
			// 		titleAttr: 'Exportar a Excel',
			// 		className: 'btn btn-success'
			// 	},
			// 	{
			// 		extend: 'pdfHtml5',
			// 		text: '<i class="fa-solid fa-file-pdf"></i>',
			// 		titleAttr: 'Exportar a PDF',
			// 		className: 'btn btn-danger'
			// 	},
			// 	{
			// 		extend: 'print',
			// 		text: '<i class="fa-solid fa-print"></i>',
			// 		titleAttr: 'Imprimir',
			// 		className: 'btn btn-info'
			// 	}]
			// },
			language: {
				url: '../librerias/dataTables/español.json'
			}
		});
	});
</script>