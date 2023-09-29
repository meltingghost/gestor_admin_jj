<?php 

	$consulta = "SELECT * FROM codigos ORDER BY id_codigo DESC LIMIT 1";
	$respuesta = $conectar->query($consulta);

	while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
		$codInsAct = $row['codigo'];
	}

?>