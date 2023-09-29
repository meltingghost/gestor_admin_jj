<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $municipio = (isset($_POST['municipio'])) ? $_POST['municipio'] : "";

    $query = mysqli_query($conectar, "SELECT * FROM parroquias ORDER BY parroquia ASC");

    $cadena = '<select name="parroquiaNatalEIEdit" id="parroquiaNatalEIEdit" class="form-control form-select">';
        
    $cadena = $cadena . '<option selected="" disabled="" value="">Seleccione una parroquia</option>';
         
    while ($mostrar = mysqli_fetch_array($query)) {
        $idMunicipio = $mostrar['id_municipio'];
        $idParroquia = $mostrar['id_parroquia'];
        $parroquia = $mostrar['parroquia'];
        if ($idMunicipio == $municipio) {
           
           $cadena = $cadena . '<option value="' .  $idParroquia . '">' .  $parroquia . '</option>';
            
       }
   }
       
    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>