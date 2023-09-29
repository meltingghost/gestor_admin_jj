<?php

    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT p1.id_personal, p1.nombreCompletoPersonal, cargos.nombreCargo FROM personal_p1 AS p1 INNER JOIN personal_p2 AS p2 ON p1.id_personal = p2.id_personal INNER JOIN cargos ON p2.id_funcionPersonal = cargos.id_cargo ORDER BY p1.nombreCompletoPersonal ASC");

?>

<select name="personalResponsableEB" id="personalResponsableEB" class="form-select form-control" required>
    <option selected disabled value="">Seleccione un responsable</option>

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $id = $mostrar['id_personal'];
            $nombreCompletoPersonal = $mostrar['nombreCompletoPersonal'];
            $cargo = $mostrar['nombreCargo'];
    ?>

        <option value="<?php echo $id ?>"><?php echo $nombreCompletoPersonal . " - " . $cargo; ?></option>

    <?php
        }
    ?>

</select>