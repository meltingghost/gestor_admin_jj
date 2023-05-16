<?php

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM cargos ORDER BY nombreCargo ASC";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-sm table-striped table-hover blue-light-jj" id="tablaCargosDataTables">
		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Cargo</th>
				<th class="col-sm-2">Asignado</th>
				<th class="col-sm-4">Acciones</th>
			</tr>
		</thead>
		<tbody>

		<?php 

			while($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idCargo = $row['id_cargo'];
				
		 ?>

			<tr>
				<td><?php echo $row['nombreCargo'] ?></td>

				<td align="center" class="col-sm-2">

				<?php 
					if ($row['asignado']==0) { 
				?>
						<span class="fa-solid fa-xmark" style="color: #dc3545;"></span>
				<?php 
					}else{ 
				?>
						<span class="fa-solid fa-check" style="color: #1c7430;"></span>
				<?php 
					} 
				?>

				</td>

				<td  class="col-sm-4">

				<?php 
					if ($idCargo !=1 && $idCargo !=2 && $idCargo !=3) { 
				?>

					<?php 
						if ($idCargoUser == 1 OR $idCargoUser == 2) { 
					?>

							<span class="btn btn-warning bt-sm" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarCargo" onclick="editarCargo('<?php echo $idCargo ?>')">
								Editar
							</span>
							<span class="btn btn-danger bt-sm" title="Eliminar" onclick="eliminarCargo('<?php echo $idCargo ?>')">
								Eliminar
							</span>

					<?php 
						}else{ 
					?>

							<span class="btn btn-outline" onclick="noAutorizado()">
								<span class="fa-solid fa-xmark" title="Detalles"></span>
								<span title="Detalles">No autorizado</span>
								<span class="fa-solid fa-xmark" title="Detalles"></span>
							</span>

					<?php 
						} 
					?>

				<?php 
					}else{ 
				?>

						<span class="btn btn-outline" onclick="noHayAcciones()">
							<span class="fa-solid fa-xmark" title="Detalles"></span>
							<span title="Detalles">No hay acciones</span>
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
		$('#tablaCargosDataTables').DataTable({
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
				url: '../librerias/dataTables/español.json'
			}
		});
	});
</script>