<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM literal ORDER BY letraLiteral ASC";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];

?>

<h2>Listado de Literal</h2>
<p><b>Te recordamos que si eliminas un literal, todo aquel estudiante que se encuentre calificado con dicha literal será eliminado automaticamente.</b></p>
<hr>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaLiteralDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th class="col-sm-2">Letra:</th>
				<th>Descripción:</th>
				<th class="col-sm-3">Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 

			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idLiteral = $row['id_literal'];			

		?>

			<tr>
				<td class="col-sm-2 text-center"><?php echo $row['letraLiteral']; ?></td>
				<td><?php echo $row['descripcionLiteral']; ?></td>
				<td class="col-sm-3">

				<?php 
	 				if ($idCargoUser == 1 OR $idCargoUser == 3) {
	 			?>

						<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarLiteral" onclick="editarLiteral('<?php echo $idLiteral; ?>')">Editar</span>
						<span class="btn btn-danger" title="Eliminar" onclick="eliminarLiteral('<?php echo $idLiteral; ?>')">Eliminar</span>

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
		$('#tablaLiteralDataTables').DataTable({
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