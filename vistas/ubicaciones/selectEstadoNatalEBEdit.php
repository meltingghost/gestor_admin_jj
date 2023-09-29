<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT * FROM estados ORDER BY estado ASC");

?>

<select name="estadoNatalEBEdit" id="estadoNatalEBEdit" class="form-select form-control formV-input">
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
<span class="fa-solid fa-circle-xmark formV-val-status"></span>
<small class="form-text text-red formV-input-error">Debe selecionar un estado.</small>