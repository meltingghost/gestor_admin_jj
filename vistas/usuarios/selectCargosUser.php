<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";

	$query = mysqli_query($conectar, "SELECT * FROM cargos ORDER BY nombreCargo ASC");

 ?>

 <select class="form-control form-select formU-input" name="cargosUser" id="cargosUser">
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
 <span class="fa-solid fa-circle-xmark formU-val-status" style="background-color: white;"></span>
 <small class="form-text text-red formU-input-error">Debe seleccionar un cargo.</small>