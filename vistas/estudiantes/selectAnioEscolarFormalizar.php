<?php

    require_once "../../procesos/database/conexion.php";

    $estudiante = (isset($_POST['estudiante'])) ? $_POST['estudiante'] : "";

    $sql = mysqli_query($conectar, "SELECT * FROM formalizar_ins_e INNER JOIN anio_escolar ON formalizar_ins_e.id_anioEscolar = anio_escolar.id_anioEscolar WHERE id_estudiante = '$estudiante'");
    $nr = mysqli_num_rows($sql);

    $cadena = '<select name="anioEscolarFormalizar" id="anioEscolarFormalizar" class="form-control form-select formV-input">';

    if ($nr == 1) {

        while ($mostrar = mysqli_fetch_array($sql)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $idAnioEscolar = $mostrar['id_anioEscolar'];
            $yyi = $mostrar['yyi'];
            $yyf = $mostrar['yyf'];
            if ($idEstudiante = $estudiante) {
                
                $cadena = $cadena . '<option value="' .  $idAnioEscolar . '">' .  $yyi . "-" . $yyf . '</option>';

            }
        }

    } else {

        $query = mysqli_query($conectar, "SELECT * FROM anio_escolar ORDER BY id_anioEscolar DESC");

            while ($mostrar = mysqli_fetch_array($query)) {
                $idAnioEscolar = $mostrar['id_anioEscolar'];
                $yyi = $mostrar['yyi'];
                $yyf = $mostrar['yyf'];

                $cadena = $cadena . '<option value="' .  $idAnioEscolar . '">' .  $yyi . "-" . $yyf . '</option>';

            }

    }

    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>