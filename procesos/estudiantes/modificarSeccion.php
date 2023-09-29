<?php 

	require_once "../database/conexion.php";

	$idGradoSeccion = (isset($_POST['idGradoSeccionEdit'])) ? $_POST['idGradoSeccionEdit'] : "";
	$idSeccion = (isset($_POST['idSeccionEdit'])) ? $_POST['idSeccionEdit'] : "";
	$seccionOld = (isset($_POST['seccionOld'])) ? $_POST['seccionOld'] : "";
	$seccion = (isset($_POST['seccionEdit'])) ? $_POST['seccionEdit'] : "";

	if ($seccion != $seccionOld) {
		$query = mysqli_query($conectar, "SELECT * FROM secciones WHERE letraSeccion = '$seccion' AND id_grado = '$idGradoSeccion'");
		$nr = mysqli_num_rows($query);

		if ($nr == 1) {
			$data = 2;	
		}else {
			$sql = "UPDATE secciones SET letraSeccion = '$seccion' WHERE id_seccion = '$idSeccion'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data= 1;
			}else{
				$data= 3;
			}
		}
	}else {
		$sql = "UPDATE secciones SET letraSeccion = '$seccion' WHERE id_seccion = '$idSeccion'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data= 1;
		}else{
			$data= 3;
		}
	}

	print json_encode($data);

?>