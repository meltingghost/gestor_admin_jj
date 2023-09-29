<?php
session_start();
require_once "../database/conexion.php";

// Export database
//if(isset($_POST['export'])){
    // Set the database credentials
    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'gestor_jj';
    
    // Create a backup file
    $backupFile = 'database_backup_'.date('Y-m-d_H-i-s').'.sql';
    
    // Execute the mysqldump command
    $command = 'c:\xampp\mysql\bin\mysqldump.exe --opt --host '.$dbHost.' -u '.$dbUsername.' '.$dbName.' > '.$backupFile.' 2>&1';
    //$output = array();
    //$return_var = null;
    //exec($command, $output, $return_var);
    exec($command);

    //if ($return_var !== 0) {
        // The command failed, log the error message
    //    error_log('mysqldump failed with return code: '.$return_var);
    //    error_log('Command output: '.implode("\n", $output));
    //    $response = "Export failed."; // set the response
    //} else {
        // The command succeeded, log a success message
    //    error_log('mysqldump succeeded: '.$backupFile.' created.');
    //    $response = "Export successful."; // set the response
    //}
    
    //echo json_encode($response); // send the response as JSON
    //exit; // stop the script execution

    // Prompt the user to download the backup file
    //header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    //header('Content-Disposition: attachment; filename="'.basename($backupFile).'"');
    header('Content-Disposition: attachment; filename="' . $backupFile . '"');
    //header('Expires: 0');
    //header('Cache-Control: must-revalidate');
    //header('Pragma: public');
    //header('Content-Length: ' . filesize($backupFile));
    readfile($backupFile);
    //exit;

    unlink($filename);
//}
?>