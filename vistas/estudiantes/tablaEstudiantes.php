<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";
	$sql = "SELECT * FROM e_data_estudiante AS p1 WHERE p1.papeleraE != 1";
	$result = $conectar->query($sql);
	$idCargoUser = $_SESSION['id_cargo'];
	$codigoInscripcion = $_SESSION['codigoInscripcion'];
	include_once "../../procesos/estudiantes/consultarCodInsAct.php";
	// aqui debo referenciar el archivo donde se consultara el año escolar actual, no lo hago horita xq esa tabla se debe arreglar, entonces no se si le pondre un 0-1 a los años para determinar el actual y entonces en la consulta de abajo debe consultar los q estan formalizados en el año actual nada mas

?>

<div class="table-responsive">
	<table class="table table-striped table-hover blue-light-jj" id="tablaEIDataTables">

		<thead class="blue-dark-jj text-white">
			<tr>
				<th>Cédula:</th>
				<th class="col-3">Nombre Completo:</th>
				<th class="col-3">Dirección:</th>
				<th class="col-2">Edad:</th>
				<th class="col-2">Grado:</th>
				<th class="col-2">Acciones:</th>
			</tr>
		</thead>

		<tbody>

		<?php 
			while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
				$idEstudiante = $row['id_estudiante'];
		?>

			<tr>

			<?php 
				if ($idCargoUser == 1 OR $idCargoUser == 3 OR $codigoInscripcion == $codInsAct) {
					if ($row['inscritoInicial'] == 1) {
			?>

					<td>
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteI=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['cedulaE'] ?>
						</a>
					</td>
					<td class="col-3">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteI=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['nombresE'] . " " . $row['apellidosE'] ?>
						</a>
					</td>
					<td class="col-3">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteI=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['direccionHabitacionE'] ?>
						</a>
					</td>
					<td class="col-2">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteI=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['edadAniosE'] . " años, " . $row['edadMesesE'] . " meses." ?>
						</a>
					</td>

				<?php 
					}else{
				?>

					<td>
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteB=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['cedulaE'] ?>
						</a>
					</td>
					<td class="col-3">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteB=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['nombresE'] . " " . $row['apellidosE'] ?>
						</a>
					</td>
					<td class="col-3">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteB=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['direccionHabitacionE'] ?>
						</a>
					</td>
					<td class="col-2">
						<a href="../procesos/imprimir/imprimirDatos.php?idEstudianteB=<?php echo $idEstudiante ?>" class="btn btn-outline" target="_blank" title="Imprimir">
							<?php echo $row['edadAniosE'] . " años, " . $row['edadMesesE'] . " meses." ?>
						</a>
					</td>

			<?php 
					}
				}else{
					if ($row['inscritoInicial'] == 1) {
			?>

					<td>
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEI" onclick="informacionEI('<?php echo $idEstudiante ?>')">
							<?php echo $row['cedulaE'] ?>
						</span>
					</td>
					<td class="col-3">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEI" onclick="informacionEI('<?php echo $idEstudiante ?>')">
							<?php echo $row['nombresE'] . " " . $row['apellidosE'] ?>
						</span>
					</td>
					<td class="col-3">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEI" onclick="informacionEI('<?php echo $idEstudiante ?>')">
							<?php echo $row['direccionHabitacionE'] ?>
						</span>
					</td>
					<td class="col-2">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEI" onclick="informacionEI('<?php echo $idEstudiante ?>')">
							<?php echo $row['edadAniosE'] . " años, " . $row['edadMesesE'] . " meses." ?>
						</span>
					</td>

				<?php 
					}else{
				?>

					<td>
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEB" onclick="informacionEB('<?php echo $idEstudiante ?>')">
							<?php echo $row['cedulaE'] ?>
						</span>
					</td>
					<td class="col-3">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEB" onclick="informacionEB('<?php echo $idEstudiante ?>')">
							<?php echo $row['nombresE'] . " " . $row['apellidosE'] ?>
						</span>
					</td>
					<td class="col-3">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEB" onclick="informacionEB('<?php echo $idEstudiante ?>')">
							<?php echo $row['direccionHabitacionE'] ?>
						</span>
					</td>
					<td class="col-2">
						<span class="btn btn-outline" title="Mas Información" data-bs-toggle="modal" data-bs-target="#modalInformacionEB" onclick="informacionEB('<?php echo $idEstudiante ?>')">
							<?php echo $row['edadAniosE'] . " años, " . $row['edadMesesE'] . " meses." ?>
						</span>
					</td>

			<?php
					}
				}

	 				$sql2 = "SELECT * FROM e_data_estudiante AS p1 INNER JOIN formalizar_ins_e AS formalizar ON p1.id_estudiante = formalizar.id_estudiante INNER JOIN grados ON formalizar.id_gradoCursar = grados.id_grado INNER JOIN secciones ON formalizar.id_seccionGradoCursar = secciones.id_seccion WHERE p1.id_estudiante = '$idEstudiante'";
					$result2 = $conectar->query($sql2);
	 				$nr = mysqli_num_rows($result2);
	 				

	 				if ($nr > 0) {
	 					while ($mostrar = $result2->fetch_array(MYSQLI_ASSOC)) {

 			?>

						<td class="col-2">
							<?php 
								if ($mostrar['formalizado'] == 1) {
									echo $mostrar['numeroGrado'] . " - " . $mostrar['letraSeccion'] . " <span class='fa-solid fa-check' style='color: #1c7430;'></span>";
								} else {
									echo $mostrar['numeroGrado'] . " - " . $mostrar['letraSeccion'] . " <span class='fa-solid fa-xmark' style='color: #dc3545;'></span>";
								}
							?>
						</td>
						<td class="col-2">

				<?php 
						}
	 				} else {
				?>

					<td class="col-2">No Asignado</td>
					<td class="col-2">

				<?php 
					}
	 				if ($idCargoUser == 1 OR $idCargoUser == 3 OR $codigoInscripcion == $codInsAct) {
	 					if ($row['inscritoInicial'] == 1) {
	 			?>

					<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarEI" onclick="editarEstudianteI('<?php echo $idEstudiante ?>')">
						<span class="fa-solid fa-user-pen"></span>
					</span>

					<?php 
		 				} else {
		 			?>

	 				<span class="btn btn-warning" title="Editar" data-bs-toggle="modal" data-bs-target="#modalEditarEB" onclick="editarEstudianteB('<?php echo $idEstudiante ?>')">
						<span class="fa-solid fa-user-pen"></span>
					</span>

					<?php 
						}
					?>
					<span class="btn btn-danger" title="Eliminar" onclick="eliminarEstudiante('<?php echo $idEstudiante ?>')">
						<span class="fa-solid fa-user-xmark"></span>
					</span>

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
		$('#tablaEIDataTables').DataTable({
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