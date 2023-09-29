<?php 

	function calcularTiempo($fechaInicio,$fechaFin){

		// INDICE 0 = AÑOS
		// INDICE 1 = MESES
		// INDICE 2 = DIAS
		// INDICE 11 = TOTAL EN DIAS
		$datetime1 = date_create($fechaInicio);
		$datetime2 = date_create($fechaFin);
		$interval = date_diff($datetime1, $datetime2);

		$tiempo = array();

		foreach ($interval as $valor) {
			$tiempo[] = $valor;
		}

		return $tiempo;

	}

?>