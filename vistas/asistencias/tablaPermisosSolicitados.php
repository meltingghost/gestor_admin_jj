<?php 

	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT p1.id_personal, p1.nombreCompletoPersonal, p1.cedulaPersonal, cargos.nombreCargo, permisos.id_permiso, permisos.nombrePermiso, p_p.id_permiso_personal, p_p.id_permiso, p_p.id_personal, p_p.fechaInicial, p_p.fechaFin, p_p.observacion, p_p.fecha FROM permisos_personal AS p_p INNER JOIN permisos ON permisos.id_permiso = p_p.id_permiso INNER JOIN personal_p1 AS p1 ON p1.id_personal = p_p.id_personal INNER JOIN personal_p2 AS p2 ON p2.id_personal = p1.id_personal INNER JOIN cargos ON p2.id_funcionPersonal = cargos.id_cargo";
	$result = $conectar->query($sql);

?>

<div class="table-responsive">
	<table class="table table-striped table-hover table-sm blue-light-jj" id="tablaPermisosSolicitadosDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Personal:</th>
				<th>Tipo de Permiso:</th>
				<th>Fecha:</th>
				<th>Observación:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			foreach ($result as $key) {
				$idPersonal = $key['id_personal'];
				$idPermisoPersonal = $key['id_asistencia'];
				$cedulaPersonal = $key['cedulaPersonal'];
		?>

			<tr>

				<td><?php echo $key['nombreCompletoPersonal'] . " C.I: " . $key['cedulaPersonal']; ?></td>
				<td><?php echo $key['nombrePermiso'] ?></td>
				<td><?php echo $key['fechaInicial'] . " - " . $key['fechaFin'] ?></td>
				<td><?php echo $key['observacion'] ?></td>
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
		$('#tablaPermisosSolicitadosDataTables').DataTable({
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