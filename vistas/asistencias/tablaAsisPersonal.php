<?php 

	require_once "../../procesos/asistencias/consultarPersonalTabla.php";

?>

<div class="table-responsive">
	<table class="table table-striped table-hover table-sm blue-light-jj" id="tablaAsisPersonalDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Personal:</th>
				<th>Fecha:</th>
				<th>Entrada / Salida:</th>
				<th>Estado:</th>
				<th>Observación:</th>
				<th>Confirmado:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			foreach ($result as $key) {
				$idPersonal = $key['id_personal'];
				$idAsistencia = $key['id_asistencia'];
				$cedulaPersonal = $key['cedulaPersonal'];
		?>

			<tr>

				<td><?php echo $key['nombreCompletoPersonal'] . " C.I: " . $key['cedulaPersonal']; ?></td>
				<td><?php echo $key['fecha'] ?></td>
				<td><?php echo $key['horaEntrada'] . " - " . $key['horaSalida'] ?></td>
				<td>
				<?php 
					if ($key['asistente'] == 1) {
						echo "Asistente";
					} else {
						echo "Inasistente";
					}
				?>
				</td>
				<td><?php echo $key['observacion'] ?></td>
				<td>
				<?php 
					if ($key['confirmarAsistencia'] == 1) {
				?>
					<span class="btn btn-outline" style="color: green;" onclick="confirmarAsistencia('<?php echo $idAsistencia ?>', '<?php echo $cedulaPersonal ?>')">
						<span class="fa-solid fa-check"></span>
					</span>
				<?php 	
					} else {
				?>
					<span class="btn btn-outline" style="color: red;" onclick="confirmarAsistencia('<?php echo $idAsistencia ?>', '<?php echo $cedulaPersonal ?>')">
						<span class="fa-solid fa-xmark"></span>
					</span>
				<?php 	
					}
				?>
				</td>
				<td>
					<span class="btn btn-warning" title="Editar" onclick="editarAsistenciaManual('<?php echo $idAsistencia ?>', '<?php echo $cedulaPersonal ?>')"> Editar
					</span>
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
		$('#tablaAsisPersonalDataTables').DataTable({
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