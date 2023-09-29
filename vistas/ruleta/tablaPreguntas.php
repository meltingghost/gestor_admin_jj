<?php 

	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM preguntas_ruleta INNER JOIN materias_ruleta ON preguntas_ruleta.materia = materias_ruleta.nombreMateria ORDER BY nombreMateria ASC";
	$result = $conectar->query($sql);

?>

<div class="table-responsive">
	<table class="table table-striped table-hover " id="tablaPreguntas">

		<thead>
			<tr>
				<th>Materia:</th>
				<th>Pregunta:</th>
				<th>Respuesta:</th>
				<th>Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idPregunta = $row['id_pregunta'];
		?>

			<tr>
				<td><?php echo $row['nombreMateria'] ?></td>
				<td><?php echo $row['pregunta'] ?></td>
				<td><?php echo $row['respuesta'] ?></td>
				<td>
					
					<button class="btn btn-warning" title="Editar" onclick="editarPregunta('<?php echo $idPregunta ?>')">
						<i class="fa-regular fa-pen-to-square"></i>
					</button>
					<button class="btn btn-danger" title="Eliminar" onclick="eliminarPregunta('<?php echo $idPregunta ?>')">
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