<?php 

	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("location:../accesoDenegado.php");
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../img/folder.png">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap5/bootstrap.min.css">
	<link rel="stylesheet" href="../librerias/dataTables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="../css/menuLateral.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosInternos.css">
	<link rel="stylesheet" href="../css/validarForms.css">
	<link rel="stylesheet" href="../css/ring.css">
	<link rel="stylesheet" href="../librerias/clockpicker/clockpicker.css">
	<link rel="stylesheet" href="../librerias/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="../librerias/alertify/css/alertify.min.css">
	<link rel="stylesheet" href="../librerias/alertify/css/themes/default.min.css">
	<link rel="stylesheet" href="../librerias/jquery/jquery-ui-1.13.2.blue.light/jquery-ui.min.css">
	<script src="../librerias/jquery/jquery-3.6.4.min.js"></script>
	<title>Gestor Administrativo JJ</title>
</head>
