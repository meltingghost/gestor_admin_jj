<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM anio_escolar ORDER BY id_anioEscolar ASC";
	$result = $conectar->query($sql); 
	$nr = mysqli_num_rows($result);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-sm table-striped table-hover blue-light-jj" id="tablaAnioEscolarDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th style="display: none;">ID</th>
				<th>Fecha Inicio:</th>
				<th>Fecha Finalización:</th>
				<th>Año Escolar:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idAnioEscolar = $row['id_anioEscolar'];
				
		 ?>

			<tr>
				<td style="display: none;"><?php echo $row['id_anioEscolar']; ?></td>
				<td><?php echo $row['ddmmi'].'-'.$row['yyi']; ?></td>
				<td><?php echo $row['ddmmf'].'-'.$row['yyf']; ?></td>
				<td> <?php echo $row['yyi'].'-'.$row['yyf']; ?> </td>

				<td class="col d-grid gap-2">

				<?php 
					$nr--;
					if ($nr<1) {
						if ($idCargoUser == 1 OR $idCargoUser == 2 OR $idCargoUser == 3) {
				?>

						<span class="btn btn-warning btn-sm btn-block" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarAnioEscolar" onclick="editarAnioEscolar('<?php echo $idAnioEscolar ?>');">Editar</span>

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
					
				<?php 
					}else {
				?>

					<span class="btn btn-sm btn-block">Año Finalizado</span>

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
		$('#tablaAnioEscolarDataTables').DataTable({
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