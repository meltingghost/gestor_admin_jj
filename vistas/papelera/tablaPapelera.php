<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM e_data_estudiante AS p1 WHERE p1.papeleraE != 0";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaPapeleraDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Cédula:</th>
				<th class="col-sm-3">Nombre Completo:</th>
				<th>Dirección:</th>
				<!-- <th class="col-sm-2">Fecha Nacimiento:</th> -->
				<th class="col-sm-2">Edad:</th>
				<th>Grado:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idEstudiante = $row['id_estudiante'];
				// $fechaNacimientoE = new DateTime($row['fechaNacimientoE']);
		?>

			<tr>
				<td><?php echo $row['cedulaE'] ?></td>
				<td class="col-sm-3"><?php echo $row['nombresE'] . " " . $row['apellidosE'] ?></td>
				<td><?php echo $row['direccionHabitacionE'] ?></td>
				<!-- <td class="col-sm-2"><?php // echo $fechaNacimientoE->format('d-m-Y') ?></td> -->
				<td class="col-sm-2"><?php echo $row['edadAniosE'] . " años, " . $row['edadMesesE'] . " meses." ?></td>
				<td>Grado</td>
				<td>
					<span class="btn btn-success" title="Restaurar" onclick="restaurarEstudianteI('<?php echo $idEstudiante ?>')">
						<span class="fa-solid fa-trash-arrow-up"></span>
					</span>
					<span class="btn btn-danger" title="Eliminar" onclick="eliminarPermanenteEstudianteI('<?php echo $idEstudiante ?>')">
						<span class="fa-solid fa-ban"></span>
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
		$('#tablaPapeleraDataTables').DataTable({
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