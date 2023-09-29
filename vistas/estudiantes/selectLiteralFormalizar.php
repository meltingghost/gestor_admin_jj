<?php

    require_once "../../procesos/database/conexion.php";

    $estudiante = (isset($_POST['estudiante'])) ? $_POST['estudiante'] : "";

    $sql = mysqli_query($conectar, "SELECT * FROM formalizar_ins_e INNER JOIN literal ON formalizar_ins_e.id_literalGradoAnterior = literal.id_literal WHERE id_estudiante = '$estudiante'");
    $nr = mysqli_num_rows($sql);

    $cadena = '<select name="literalFormalizar" id="literalFormalizar" class="form-control form-select formV-input" required>';

    if ($nr == 1) {

        while ($mostrar = mysqli_fetch_array($sql)) {
            $idEstudiante = $mostrar['id_estudiante'];
            $idLiteral = $mostrar['id_literal'];
            $literal = $mostrar['letraLiteral'];
            if ($idEstudiante = $estudiante) {
                
                $cadena = $cadena . '<option value="' .  $idLiteral . '">' .  $literal . '</option>';

            }
        }
        
    } else {

        $query = mysqli_query($conectar, "SELECT * FROM literal ORDER BY letraLiteral ASC");

        $cadena = $cadena . '<option selected disabled value="">Seleccione una literal</option>';

        while ($mostrar = mysqli_fetch_array($query)) {
            $idLiteral = $mostrar['id_literal'];
            $literal = $mostrar['letraLiteral'];

            $cadena = $cadena . '<option value="' .  $idLiteral . '">' .  $literal . '</option>';
        }

    }

    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>