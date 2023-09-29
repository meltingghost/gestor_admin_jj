<?php 

	session_start();
	require_once "../../procesos/database/conexion.php";

	$estudiante = (isset($_POST['estudiante'])) ? $_POST['estudiante'] : "";

    $sql = mysqli_query($conectar, "SELECT * FROM formalizar_ins_e INNER JOIN grados ON formalizar_ins_e.id_gradoCursar = grados.id_grado WHERE id_estudiante = '$estudiante'");
    $nr = mysqli_num_rows($sql);

    $cadena = '<select name="gradoFormalizar" id="gradoFormalizar" class="form-control form-select formV-input" required>';

    if ($nr == 1) {

        while ($mostrar = mysqli_fetch_array($sql)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $idGrado = $mostrar['id_grado'];
            $grado = $mostrar['numeroGrado'];
            if ($idEstudiante = $estudiante) {
                
                $cadena = $cadena . '<option value="' .  $idGrado . '">' .  $grado . '</option>';

            }
        }

    } else {	

		$query = mysqli_query($conectar, "SELECT * FROM grados ORDER BY id_grado ASC");

        $cadena = $cadena . '<option selected disabled value="">Seleccione un grado</option>';

		while ($mostrar = mysqli_fetch_array($query)) {
			$idGrado = $mostrar['id_grado'];
			$grado = $mostrar['numeroGrado'];

			$cadena = $cadena . '<option value="' .  $idGrado . '">' .  $grado . '</option>';

 	 	}

	}

	$cadena = $cadena . '</select>';

    print(json_encode($cadena));
?>