<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $estado = (isset($_POST['estado'])) ? $_POST['estado'] : "";

    $query = mysqli_query($conectar, "SELECT * FROM municipios ORDER BY municipio ASC");

    $cadena = '<select name="municipioNatalEB" id="municipioNatalEB" class="form-control form-select formV-input">';
        
    $cadena = $cadena . '<option selected="" disabled="" value="">Seleccione un municipio</option>';
         
    while ($mostrar = mysqli_fetch_array($query)) {
        $idEstado = $mostrar['id_estado'];
        $idMunicipio = $mostrar['id_municipio'];
        $municipio = $mostrar['municipio'];
        if ($idEstado == $estado) {
           
           $cadena = $cadena . '<option value="' .  $idMunicipio . '">' .  $municipio . '</option>';
            
       }
   }
       
    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>