<?php 

	require_once "../database/conexion.php";

	$estudianteFormalizar = $_POST['estudianteFormalizar'];
	$anioEscolarFormalizar = $_POST['anioEscolarFormalizar'];
	$literalFormalizar = $_POST['literalFormalizar'];
	$gradoFormalizar = $_POST['gradoFormalizar'];
	$seccionFormalizar = $_POST['seccionFormalizar'];
	$confirmacionRE = $_POST['confirmacionRE'];

	$query = mysqli_query($conectar, "SELECT * FROM formalizar_ins_e WHERE id_estudiante = '$estudianteFormalizar'");
	$nr = mysqli_num_rows($query);

	if ($nr == 0) {
		
		$sql = "INSERT INTO formalizar_ins_e VALUES(NULL, '$estudianteFormalizar', '$anioEscolarFormalizar', '$literalFormalizar', '$gradoFormalizar', '$seccionFormalizar', '$confirmacionRE', NULL)";
		$ejecutar = mysqli_query($conectar,$sql);

		if ($ejecutar) {

			$sql2 = "UPDATE e_data_estudiante SET formalizado = 1 WHERE id_estudiante = '$estudianteFormalizar'";
			$ejecutar2 = mysqli_query($conectar,$sql2);

			if ($ejecutar2) {
				$data = 1;
			} else {
				$data = 2;
			}
			
		} else {
			$data = 2;
		}

	} else {

		$sql = "UPDATE formalizar_ins_e SET confirmacionRE = '$confirmacionRE' WHERE id_estudiante = '$estudianteFormalizar'";
		$ejecutar = mysqli_query($conectar,$sql);

		if ($ejecutar) {

			$sql2 = "UPDATE e_data_estudiante SET formalizado = 1 WHERE id_estudiante = '$estudianteFormalizar'";
			$ejecutar2 = mysqli_query($conectar,$sql2);

			if ($ejecutar2) {
				$data = 1;
			} else {
				$data = 2;
			}
			
		} else {
			$data = 2;
		}

	}

	sleep(1);
	print json_encode($data);

?>