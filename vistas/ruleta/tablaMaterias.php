<?php 

	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM materias_ruleta ORDER BY nombreMateria ASC";
	$result = $conectar->query($sql);

?>

<div class="table-responsive">
	<table class="table table-striped table-hover " id="tablaMaterias">

		<thead>
			<tr>
				<th>Nombre de la Materia:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idMateria = $row['id_materia'];
		?>

			<tr>
				<td><?php echo $row['nombreMateria'] ?></td>
				<td>
					
					<button class="btn btn-warning" title="Editar" onclick="editarMateria('<?php echo $idMateria ?>')">
						<i class="fa-regular fa-pen-to-square"></i>
					</button>
					<button class="btn btn-danger" title="Eliminar" onclick="eliminarMateria('<?php echo $idMateria ?>')">
						<i class="fa-solid fa-delete-left"></i>
					</button>

				</td>
			</tr>

		<?php 
			}
		?>

		</tbody>

	</table>
</div>