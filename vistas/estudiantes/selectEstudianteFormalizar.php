<?php

    require_once "../../procesos/database/conexion.php";

    $estudiante = (isset($_POST['estudiante'])) ? $_POST['estudiante'] : "";

    $cadena = '<select name="estudianteFormalizar" id="estudianteFormalizar" class="form-control form-select formV-input" required>';

    if ($estudiante == "" OR $estudiante == 0) {
        
        $query = mysqli_query($conectar, "SELECT id_estudiante, apellidosE, nombresE, cedulaE FROM e_data_estudiante WHERE papeleraE != 1 AND formalizado != 1 ORDER BY cedulaE ASC");

        $cadena = $cadena . '<option selected disabled value="">Seleccione un estudiante</option>';

        while ($mostrar = mysqli_fetch_array($query)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $apellidosEF = $mostrar['apellidosE'];
            $nombresEF = $mostrar['nombresE'];
            $cedulaEF = $mostrar['cedulaE'];

            $cadena = $cadena . '<option value="' .  $idEstudiante . '">' .  "C.E/I: " . $cedulaEF . " - " . $apellidosEF . " " . $nombresEF . '</option>';
        }

    } else {

        $query = mysqli_query($conectar, "SELECT id_estudiante, apellidosE, nombresE, cedulaE FROM e_data_estudiante WHERE id_estudiante = '$estudiante'");

        while ($mostrar = mysqli_fetch_array($query)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $apellidosEF = $mostrar['apellidosE'];
            $nombresEF = $mostrar['nombresE'];
            $cedulaEF = $mostrar['cedulaE'];
            if ($idEstudiante == $estudiante) {

            $cadena = $cadena . '<option value="' .  $idEstudiante . '">' .  "C.E/I: " . $cedulaEF . " - " . $apellidosEF . " " . $nombresEF . '</option>';

            }
        }

    }

    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>