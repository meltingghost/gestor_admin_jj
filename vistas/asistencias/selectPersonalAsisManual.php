<?php

    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT p1.id_personal, p1.nombreCompletoPersonal, p1.cedulaPersonal, cargos.nombreCargo FROM personal_p1 AS p1 INNER JOIN personal_p2 AS p2 ON p1.id_personal = p2.id_personal INNER JOIN cargos ON p2.id_funcionPersonal = cargos.id_cargo ORDER BY p1.nombreCompletoPersonal ASC");

?>

<select name="personalAsisManual" id="personalAsisManual" class="form-select form-control" required>
    <option selected disabled value="">Seleccione al Personal</option>

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $nombreCompletoPersonal = $mostrar['nombreCompletoPersonal'];
            $cedula = $mostrar['cedulaPersonal'];
            $cargo = $mostrar['nombreCargo'];
    ?>

        <option value="<?php echo $cedula ?>"><?php echo $nombreCompletoPersonal . " C.I: " . $cedula . " - " . $cargo; ?></option>

    <?php
        }
    ?>

</select>