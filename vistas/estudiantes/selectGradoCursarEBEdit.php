<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM grados ORDER BY id_grado ASC");

?>

<select name="gradoCursarEBEdit" id="gradoCursarEBEdit" class="form-control form-select" required>
	<option selected disabled value="">Seleccione un grado</option>
	<?php 
		while ($mostrar = mysqli_fetch_array($query)) {
			$id = $mostrar['id_grado'];
			$grado = $mostrar['numeroGrado'];
	?>
		<option value="<?php echo $id ?>"><?php echo $grado ?></option>
	<?php 
 	 	}
 	 ?>
</select>