<?php

    session_start();
    require_once "../../procesos/database/conexion.php";

    $grado = (isset($_POST['grado'])) ? $_POST['grado'] : "";

    $query = mysqli_query($conectar, "SELECT * FROM secciones ORDER BY letraSeccion ASC");

    $cadena = '<select name="seccionGradoCursarEBEdit" id="seccionGradoCursarEBEdit" class="form-control form-select formV-input">';
        
    $cadena = $cadena . '<option selected="" disabled="" value="">Seleccione una sección</option>';
         
    while ($mostrar = mysqli_fetch_array($query)) {
        $idGrado = $mostrar['id_grado'];
        $idSeccion = $mostrar['id_seccion'];
        $seccion = $mostrar['letraSeccion'];
        if ($idGrado == $grado) {
           
           $cadena = $cadena . '<option value="' .  $idSeccion . '">' .  $seccion . '</option>';
            
       }
   }
       
    $cadena = $cadena . '</select>';

    print(json_encode($cadena));

?>