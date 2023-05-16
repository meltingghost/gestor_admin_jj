<?php

	$conectar=mysqli_connect('127.0.0.1','root','','gestor_jj');
	$conectar->set_charset('utf8mb4');
	if(!$conectar){
		die("No se Pudo Conectar con el Servidor: " . mysqli_connect_error());
	}

?>