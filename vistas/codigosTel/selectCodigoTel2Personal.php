<?php 

    include_once "consultarCodigos.php";

?>

<select name="codigoTel2Personal" id="codigoTel2Personal" class="form-select form-control">
    
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