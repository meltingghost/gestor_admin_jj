<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT * FROM estados ORDER BY estado ASC");

?>

<select name="estadoNatalEIEdit" id="estadoNatalEIEdit" class="form-select form-control">
    <option selected="" disabled="" value="">Seleccione un Estado</option>

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $id = $mostrar['id_estado'];
            $estado = $mostrar['estado'];
    ?>

        <option value="<?php echo $id ?>"><?php echo $estado ?></option>

    <?php
        }
    ?>

</select>