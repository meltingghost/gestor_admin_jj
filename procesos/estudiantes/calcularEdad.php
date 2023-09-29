<?php 

	include "../funcionesPhp/calcularTiempo.php";

	$fechaInicio = (isset($_POST['fecha'])) ? $_POST['fecha'] : "";
	$fechaFin = date('d-m-Y');

	$anios = calcularTiempo($fechaInicio,$fechaFin)[0];
	$meses = calcularTiempo($fechaInicio,$fechaFin)[1];
	$data = array("anios"=>$anios, "meses"=>$meses);
	print (json_encode($data));

?>