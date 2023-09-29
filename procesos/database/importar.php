<?php

    session_start();
    require_once "../database/conexion.php";

    if(isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if($ext != 'sql') {
            echo "Invalid file type. Please select a SQL file.";
            exit;
        }
    
        $tmp_file = $file['tmp_name'];
        $target_file = 'tmp/'.$file['name'];
        move_uploaded_file($tmp_file, $target_file);
    
        $mysql_path = 'C:\xampp\mysql\bin\mysql.exe'; // path to MySQL executable
        $db_name = 'gestor_jj'; // name of the database
        $import_file = 'tmp/'.$file['name']; // path to the SQL file
    
        $cmd = "$mysql_path -u root $db_name < $import_file";
        exec($cmd);
    
        unlink($target_file);
    
        $response = "Importe exitoso.";
        echo json_encode($response); // return response as JSON
    }

?>