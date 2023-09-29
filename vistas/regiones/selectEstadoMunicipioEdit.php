<?php 

	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM estados ORDER BY estado ASC");

?>

<select name="estadoMunicipioEdit" id="estadoMunicipioEdit" class="form-control form-select" required>
	
	<option selected disabled value="">Seleccione un estado</option>

	<?php 
		while ($mostrar = mysqli_fetch_array($query)) {
			$id = $mostrar['id_estado'];
			$estado = $mostrar['estado'];
	?>

		<option value="<?php echo $id ?>"><?php echo $estado ?></option>

	<?php 
		}
	?>

</select>