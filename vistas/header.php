<?php 

	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("location:../accesoDenegado.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../img/folder.png">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../librerias/bootstrap5/bootstrap.min.css">
	<link rel="stylesheet" href="../librerias/dataTables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="../css/menuLateral.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosInternos.css">
	<link rel="stylesheet" href="../css/ring.css">
	<link rel="stylesheet" href="../librerias/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../librerias/sweetalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="../librerias/alertify/css/alertify.min.css">
	<link rel="stylesheet" href="../librerias/alertify/css/themes/default.min.css">
	<link rel="stylesheet" href="../librerias/jquery/jquery-ui-1.13.2.blue.light/jquery-ui.min.css">
	<script src="../librerias/jquery/jquery-3.6.4.min.js"></script>
	<title>Gestor Administrativo JJ</title>
</head>

<body style="background-image:url(../img/fondoAll.avif); background-size: cover;">

	<header id="headerTitulo">
		<h1 id="h1Titulo">Escuela Bolivariana "Presbítero José de Jesús Espinoza"</h1>
		<img src="../img/logoJJ.png" id="imgTitulo" title="Logo E.B. J.J. Espinoza" width="80px">
	</header>

	<div id="mySidenav" class="sidenav">
		<!-- mejor poner todas las opciones por separado, tipo estudiantes y cuando se meta q le aparesca la opcion de buscar agregar regular o nuevo, y abajo la tabla -->
		<a href="inicio.php" id="inicio" onclick="iniciarAnimacion()">Inicio <span id="mySpanSidenav" class="fa-solid fa-house-chimney"></span></a>
		<a href="estudiantes.php" id="estudiantes" onclick="iniciarAnimacion()">Estudiantes <span id="mySpanSidenav" class="fa-solid fa-graduation-cap"></span></a>
		<a href="literal.php" id="literal" onclick="iniciarAnimacion()">Literal <span id="mySpanSidenav" class="fa-solid fa-spell-check"></span></a>
		<a href="asistencias.php" id="asistencias" onclick="iniciarAnimacion()">Asistencias <span id="mySpanSidenav" class="fa-regular fa-calendar-days"></span></a>
		<a href="personal.php" id="personal" onclick="iniciarAnimacion()">Personal <span id="mySpanSidenav" class="fa-solid fa-person-chalkboard"></span></a>
		<a href="cargos.php" id="cargos" onclick="iniciarAnimacion()">Cargos <span id="mySpanSidenav" class="fa-regular fa-address-card"></span></a>
		<a href="papelera.php" id="papelera" onclick="iniciarAnimacion()">Papelera <span id="mySpanSidenav" class="fa-solid fa-trash-can"></span></a>
		<a href="preferencias.php" id="preferencias" onclick="iniciarAnimacion()">Preferencias <span id="mySpanSidenav" class="fa-solid fa-gear"></span></a>
		<a href="../logout.php" id="salir">Salir <span id="mySpanSidenav" class="fa-solid fa-arrow-right-from-bracket"></span></a>
	</div>

	<div class="contenedor" id="animacionRing" style="display: block;">
		<div class="lds-ring">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>