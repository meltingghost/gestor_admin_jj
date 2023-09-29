<?php 

    session_start();
    require_once "../../procesos/database/conexion.php";

    $query = mysqli_query($conectar, "SELECT id_pais, codigo FROM paises ORDER BY codigo ASC");

?>