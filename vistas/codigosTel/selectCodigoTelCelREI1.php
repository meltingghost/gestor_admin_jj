<?php 

    include_once "consultarCodigos.php";

?>

<select name="codigoTelCelREI1" id="codigoTelCelREI1" class="form-select form-control">

    <?php
        while ($mostrar = mysqli_fetch_array($query)) {
            $id = $mostrar['id_pais'];
            $codigo = $mostrar['codigo'];
            if ($codigo == 58) {           
    ?>

            <option selected="" value="<?php echo $codigo ?>">+<?php echo $codigo ?></option>

    <?php
            }
    ?>

        <option value="<?php echo $codigo ?>">+<?php echo $codigo ?></option>
        
    <?php
        }
    ?>

</select>