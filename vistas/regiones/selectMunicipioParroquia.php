<?php 

	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM municipios ORDER BY municipio ASC");

?>

<select name="municipioParroquia" id="municipioParroquia" class="form-control form-select" required>
	
	<option selected disabled value="">Seleccione un municipio</option>

	<?php 
		while ($mostrar = mysqli_fetch_array($query)) {
			$id = $mostrar['id_municipio'];
			$municipio = $mostrar['municipio'];
	?>

		<option value="<?php echo $id ?>"><?php echo $municipio ?></option>

	<?php 
		}
	?>

</select>