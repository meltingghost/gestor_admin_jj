<?php

    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT * FROM literal ORDER BY letraLiteral ASC");

?>

<select name="literalEBEdit" id="literalEBEdit" class="form-select form-control">

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $id = $mostrar['id_literal'];
            $literal = $mostrar['letraLiteral'];
    ?>

        <option value="<?php echo $id ?>"><?php echo $literal; ?></option>

    <?php
        }
    ?>

</select>