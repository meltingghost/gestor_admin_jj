<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM cargos ORDER BY nombreCargo ASC");

 ?>

 <select class="form-control form-select formV-input" name="cargoOtroUserEdit" id="cargoOtroUserEdit">
 	<option selected="" disabled="" value="">Seleccione una opción</option>
 	<?php 
 		while ($mostrar = mysqli_fetch_array($query)) {
 			$id = $mostrar['id_cargo'];
 			$cargo = $mostrar['nombreCargo'];
 	 ?>
 	 	<option value="<?php echo $id ?>"> <?php echo $cargo ?> </option>
 	 <?php 
 	 	}
 	  ?>
 </select>