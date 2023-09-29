<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM municipios INNER JOIN estados ON municipios.id_estado = estados.id_estado";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="offset-1 col-10">
	<div class="table-responsive">
		<table class="table table-striped table-sm table-hover blue-light-jj" id="tablaMunicipiosDataTables">

			<thead class="blue-dark-jj text-white">
				<tr>
					<th>Municipio:</th>
					<th>Estado:</th>
					<th>Acciones:</th>
				</tr>
			</thead>

			<tbody>

				<?php 
					while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
						$idMunicipio = $row['id_municipio'];
				?>

					<tr>
						<td><?php echo $row['municipio'] ?></td>
						<td><?php echo $row['estado'] ?></td>
						<td>

						<?php 
	 						if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser == 3) {
	 					?>

							<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarMunicipio" onclick="editarMunicipio('<?php echo $idMunicipio ?>')">
								Editar
							</span>
							<span class="btn btn-danger" title="Eliminar" onclick="eliminarMunicipio('<?php echo $idMunicipio ?>')">
								Eliminar
							</span>

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
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaMunicipiosDataTables').DataTable({
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