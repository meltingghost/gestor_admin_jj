<?php 

	require_once "../database/conexion.php";

	$idMateria = (isset($_POST['idMateriaEdit'])) ? $_POST['idMateriaEdit'] : "";
	$materiaOld = (isset($_POST['nombreMateriaOld'])) ? $_POST['nombreMateriaOld'] : "";
	$materia = (isset($_POST['nombreMateriaEdit'])) ? $_POST['nombreMateriaEdit'] : "";

	if ($materia != $materiaOld) {

		$query = mysqli_query($conectar, "SELECT * FROM materias_ruleta WHERE nombreMateria = '$materia'");
		$nr = mysqli_num_rows($query);

		if($nr == 1){
			$data = 2;
		} else {

			$sql = "UPDATE materias_ruleta SET nombreMateria = '$materia' WHERE id_materia = '$idMateria'";
			$resultado = $conectar->query($sql);

			if ($resultado) {
				$data = 1;
			} else {
				$data = 3;
			}

		}

	} else {

		$sql = "UPDATE materias_ruleta SET nombreMateria = '$materia' WHERE id_materia = '$idMateria'";
		$resultado = $conectar->query($sql);

		if ($resultado) {
			$data = 1;
		} else {
			$data = 3;
		}

	}

	print json_encode($data);

?>