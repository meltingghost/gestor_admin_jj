<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM usuarios INNER JOIN cargos ON usuarios.id_cargoUser = cargos.id_cargo";
	$result = $conectar->query($sql);
	$idUsuarioSession = $_SESSION['id_usuario'];
	$idCargoUser = $_SESSION['id_cargo'];

?>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaUsuariosDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Nombre:</th>
				<th>Apellido:</th>
				<th class="col-sm-3">Correo:</th>
				<th>Función como Usuario:</th>
				<th>Nombre de Usuario:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 

			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idUsuario = $row['id_usuario'];

				if ($idUsuario != $idUsuarioSession) {			

		?>

				<tr>
					<td><?php echo $row['nombreUser']; ?></td>
					<td><?php echo $row['apellidoUser']; ?></td>
					<td class="col-sm-3"><?php echo $row['correoUser']; ?></td>
					<td><?php echo $row['nombreCargo']; ?></td>

					<?php 
		 				if ($idCargoUser == 1 OR $idCargoUser == 2) {
		 			?>
		 				<td><?php echo $row['username']; ?></td>
						<td>

							<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarCargoOtroUser" onclick="editarCargoOtroUser('<?php echo $idUsuario ?>')">
								<span class="fa-solid fa-user-pen"></span>
							</span>
							<span class="btn btn-danger" title="Eliminar" onclick="eliminarOtroUser('<?php echo $idUsuario ?>')">
								<span class="fa-solid fa-user-xmark"></span>
							</span>

					<?php 
						} else {
					?>
						<td>********************</td>
						<td>

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
			}

		?>

		</tbody>

	</table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaUsuariosDataTables').DataTable({
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