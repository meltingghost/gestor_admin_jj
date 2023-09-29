<?php 

	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM materias_ruleta ORDER BY nombreMateria ASC")

?>


<select name="materiaPregunta" id="materiaPregunta" class="form-select
">
	<option selected disabled value="">Seleccione una Materia</option>

	<?php 
		while ($mostrar = mysqli_fetch_array($query)) {
			//$id = $mostrar['id_materia'];
			$materia = $mostrar['nombreMateria'];
	?>

		<option value="<?php echo $materia ?>"><?php echo $materia ?></option>

	<?php 
		}
	?>

</select>