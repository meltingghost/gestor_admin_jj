<?php

    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT * FROM anio_escolar ORDER BY id_anioEscolar DESC");

?>

<select name="anioEscolarEB" id="anioEscolarEB" class="form-select form-control">

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $id = $mostrar['id_anioEscolar'];
            $yyi = $mostrar['yyi'];
            $yyf = $mostrar['yyf'];
    ?>

        <option value="<?php echo $id ?>"><?php echo $yyi . "-" . $yyf; ?></option>

    <?php
        }
    ?>

</select>