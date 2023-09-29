<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM permisos";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaPermisosDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th class="col-sm-3">Tipo de Permiso:</th>
				<th>Descripción:</th>
				<th class="col-sm-3">Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 

			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idPermiso = $row['id_permiso'];			

		?>

			<tr>
				<td class="col-sm-3 text-center"><?php echo $row['nombrePermiso']; ?></td>
				<td><?php echo $row['descripcionPermiso']; ?></td>
				<td class="col-sm-3">

				<?php 
	 				if ($idCargoUser == 1 OR $idCargoUser == 2) {
	 			?>

						<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarPermiso" onclick="editarPermiso('<?php echo $idPermiso ?>')">Editar</span>
						<span class="btn btn-danger" title="Eliminar" onclick="eliminarPermiso('<?php echo $idPermiso ?>')">Eliminar</span>

				<?php 
					} else {
				?>

						<span class="btn btn-outline" onclick="noAutorizado()">
							<span class="fa-solid fa-xmark" title="Detalles"></span>
							<span title="Detalles">No autorizado</span>
							<span class="fa-solid fa-xmark" title="Detalles"></span>
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
		$('#tablaPermisosDataTables').DataTable({
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
			}
		});
	});
</script>