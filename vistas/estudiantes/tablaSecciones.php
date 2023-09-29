<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT secciones.id_seccion, secciones.letraSeccion, secciones.id_grado AS id_gradoSeccion, grados.id_grado, grados.numeroGrado FROM secciones INNER JOIN grados ON secciones.id_grado = grados.id_grado ORDER BY id_grado, letraSeccion ASC";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<h2>Listado de Grados y Secciones</h2>
<p><b>Te recordamos que si eliminas un grado, todo aquel estudiante que se encuentre asignado a dicho grado será eliminado automaticamente al igual que las secciónes correspondientes.</b></p>
<hr>

<div class="table-responsive">
	<table class="table table-sm table-striped table-hover blue-light-jj" id="tablaSeccionesDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th style="display: none;">ID</th>
				<th class="col-sm-6">Grado:</th>
				<th>Sección:</th>
				<th class="col-sm-3">Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 

			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idGrado = $row['id_grado'];
				$idSeccion = $row['id_seccion'];			

		?>

			<tr>
				<td style="display: none;"><?php echo $row['id_seccion']; ?></td>
				<td class="col-sm-6 text-center"><?php echo $row['numeroGrado']; ?></td>
				<td><?php echo $row['letraSeccion']; ?></td>
				<td class="col-sm-3">

				<?php 
	 				if ($idCargoUser == 1 OR $idCargoUser == 3) {
	 			?>

						<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarSeccion" onclick="editarSeccion('<?php echo $idSeccion ?>')">Editar</span>
						<span class="btn btn-danger" title="Eliminar" onclick="eliminarSeccion('<?php echo $idSeccion ?>')">Eliminar</span>

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
		$('#tablaSeccionesDataTables').DataTable({
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