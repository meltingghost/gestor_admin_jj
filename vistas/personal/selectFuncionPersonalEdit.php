<?php

	session_start();
	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM cargos ORDER BY nombreCargo ASC");

?>

<select name="funcionPersonalEdit" id="funcionPersonalEdit" class="form-control formV-input form-select">
	
	<option selected disabled value="">Seleccione una Función</option>

	<?php 
		while ($mostrar = mysqli_fetch_array($query)) {
			$id = $mostrar['id_cargo'];
			$cargo = $mostrar['nombreCargo'];
	?>

		<option value="<?php echo $id ?>"><?php echo $cargo ?></option>

	<?php 
		}
	?>

</select>