<?php 

	require_once "../database/conexion.php";

	$idPermiso = (isset($_POST['idPermisoEdit'])) ? $_POST['idPermisoEdit'] : "";
	$permisoOld = (isset($_POST['nombrePermisoOld'])) ? $_POST['nombrePermisoOld'] : "";
	$permiso = (isset($_POST['nombrePermisoEdit'])) ? $_POST['nombrePermisoEdit'] : "";
	$descripcion = (isset($_POST['descripcionPermisoEdit'])) ? $_POST['descripcionPermisoEdit'] : "";

	if ($permiso != $permisoOld) {
		
		$query = mysqli_query($conectar, "SELECT * FROM permisos WHERE nombrePermiso = '$permiso'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;
		}else{

			$sql = "UPDATE permisos SET nombrePermiso = '$permiso', descripcionPermiso = '$descripcion' WHERE id_permiso = '$idPermiso'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data= 1;
			}else{
				$data= 3;
			}

		}

	}else {

		$sql = "UPDATE permisos SET nombrePermiso = '$permiso', descripcionPermiso = '$descripcion' WHERE id_permiso = '$idPermiso'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data= 1;
		}else{
			$data= 3;
		}

	}

	print json_encode($data);

?>