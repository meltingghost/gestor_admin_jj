<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM personal_p1 INNER JOIN personal_p2 ON personal_p1.id_Personal = personal_p2.id_Personal INNER JOIN cargos ON personal_p2.id_funcionPersonal = cargos.id_cargo";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

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

		<?php 
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idPersonal = $row['id_personal'];
		?>

			<tr>
				<td>
					<a href="../procesos/imprimir/imprimirDatos.php?idPersonal=<?php echo $idPersonal ?>" class="btn btn-outline" target="_blank" title="Imprimir">
						<?php echo $row['cedulaPersonal'] ?>
					</a>
				</td>
				<td>
					<a href="../procesos/imprimir/imprimirDatos.php?idPersonal=<?php echo $idPersonal ?>" class="btn btn-outline" target="_blank" title="Imprimir">
						<?php echo $row['nombreCompletoPersonal'] ?>
					</a>
				</td>
				<td>
					<a href="../procesos/imprimir/imprimirDatos.php?idPersonal=<?php echo $idPersonal ?>" class="btn btn-outline" target="_blank" title="Imprimir">
						<?php echo $row['tipoPersonal'] ?>
					</a>
				</td>
				<td>
					<a href="../procesos/imprimir/imprimirDatos.php?idPersonal=<?php echo $idPersonal ?>" class="btn btn-outline" target="_blank" title="Imprimir">
						<?php echo $row['nombreCargo'] ?>
					</a>
				</td>
				<td>
					<a href="../procesos/imprimir/imprimirDatos.php?idPersonal=<?php echo $idPersonal ?>" class="btn btn-outline" target="_blank" title="Imprimir">
						+<?php echo $row['codigoTelPersonal'] . " " . $row['telefonoPersonal'] ?>
					</a>
				</td>
				<td>

				<?php 
					if ($idCargoUser == 1 OR $idCargoUser == 2) { 
				?>

					<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarPersonal" onclick="editarPersonal('<?php echo $idPersonal ?>')">
						<span class="fa-solid fa-user-pen"></span>
					</span>
					<span class="btn btn-danger" title="Eliminar" onclick="eliminarPersonal('<?php echo $idPersonal ?>')">
						<span class="fa-solid fa-user-xmark"></span>
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
		$('#tablaPersonalDataTables').DataTable({
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