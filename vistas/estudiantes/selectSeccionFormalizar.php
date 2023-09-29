<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $estudiante = (isset($_POST['estudiante'])) ? $_POST['estudiante'] : "";
    $grado = (isset($_POST['grado'])) ? $_POST['grado'] : "";

    $sql = mysqli_query($conectar, "SELECT * FROM formalizar_ins_e INNER JOIN secciones ON formalizar_ins_e.id_seccionGradoCursar = secciones.id_seccion WHERE id_estudiante = '$estudiante'");
    $nr = mysqli_num_rows($sql);

    $cadena = '<select name="seccionFormalizar" id="seccionFormalizar" class="form-control form-select formV-input" required>';

    if ($nr == 1) {

        while ($mostrar = mysqli_fetch_array($sql)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $idSeccion = $mostrar['id_seccion'];
            $seccion = $mostrar['letraSeccion'];
            if ($idEstudiante = $estudiante) {
                
                $cadena = $cadena . '<option value="' .  $idSeccion . '">' .  $seccion . '</option>';

            }
        }
        
    } else {

        

        $query = mysqli_query($conectar, "SELECT * FROM secciones ORDER BY letraSeccion ASC");

        $cadena = $cadena . '<option selected="" disabled="" value="">Seleccione una sección</option>';

        while ($mostrar = mysqli_fetch_array($query)) {
            $idGrado = $mostrar['id_grado'];
            $idSeccion = $mostrar['id_seccion'];
            $seccion = $mostrar['letraSeccion'];
            if ($idGrado == $grado) {

                $cadena = $cadena . '<option value="' .  $idSeccion . '">' .  $seccion . '</option>';

            }
        }

    }
       
    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>