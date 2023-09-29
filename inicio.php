<?php 

	require_once "header.php";

 ?>

<body style="margin: 0; background: url(img/fondoAll.avif) fixed; background-size: cover;">

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div class="container">

	 		<div class="card text-center" id="cardPrincipal">

	 			<div class="card-header">
	 				<ul class="nav nav-tabs card-header-tabs">
	 					<li class="nav-item">
	 						<a class="nav-link active" aria-current="true" style="background-color: #e9ecef"> <span class="fa-solid fa-house"></span> Inicio</a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" aria-current="page" href="asistencia.php"> <span class="fa-solid fa-file-pen"></span> Asistencia</a>
	 					</li>
	 					<li class="nav-item">
	 						
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="registro.php"> <span class="fas fa-cash-register"></span> Registrarse</a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="recuperacion.php"> <span class="fa-solid fa-share-from-square"></span> Recuperación</a>
	 					</li>
	 					<li class="nav-item">
	 						<a class="nav-link" href="ruleta.php"> <span class="fa-solid fa-puzzle-piece"></span> Juegos Didácticos</a>
	 					</li>
	 				</ul>
	 			</div>

	 			<div class="card-body" style="background-color: #e9ecef">

	 				<div class="row">
	 					<div class="col-sm-3" align="center">
	 						<img src="img/logoJJ.png" id="imgLogoIndex" title="Logo E.B. J.J. Espinoza" width="200px">
	 					</div>
	 					<div class="col-sm-8" id="cardContainer">
	 						<h1 class="card-title display-4">Sistema Administrativo "Pbro. J.J. Espinoza"</h1>
	 						<p class="card-text">Se parte del futuro optimizando las labores institucionales usando la herramienta tecnológica creada por estudiantes de Ingenieria en Informática.</p>
	 						<a class="btn btn-primary" href="login.php"> <span class="fa-solid fa-arrow-right-to-bracket"></span> Iniciar Sesión</a>
	 					</div>
	 					<div class="col-sm-1"></div>
	 				</div><br><br>

	 				<div id="carouselExampleControls" class="carousel slide slideshow-container" data-bs-ride="carousel">
	 					<div class="carousel-indicators">
	 						<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	 						<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
	 						<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
	 						<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
	 						<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="4" aria-label="Slide 5"></button>
	 					</div>
	 					<div class="carousel-inner">
	 						<div class="carousel-item active">
	 							<img src="img/slides1.png" class="d-block w-100" alt="...">
	 							<div class="carousel-caption d-none d-md-block">
	 								<!-- <h5>Primera Imagen</h5>
	 								<p>Some representative placeholder content for the first slide.</p> -->
	 							</div>
	 						</div>
	 						<div class="carousel-item">
	 							<img src="img/slides2.png" class="d-block w-100" alt="...">
	 							<div class="carousel-caption d-none d-md-block">
	 								<!-- <h5>Segunda Imagen</h5>
	 								<p>Some representative placeholder content for the first slide.</p> -->
	 							</div>
	 						</div>
	 						<div class="carousel-item">
	 							<img src="img/slides3.jpg" class="d-block w-100" alt="...">
	 							<div class="carousel-caption d-none d-md-block">
	 								<!-- <h5>Tercera Imagen</h5>
	 								<p>Some representative placeholder content for the first slide.</p> -->
	 							</div>
	 						</div>
	 						<div class="carousel-item">
	 							<img src="img/slides4.jpg" class="d-block w-100" alt="...">
	 							<div class="carousel-caption d-none d-md-block">
	 								<!-- <h5>Tercera Imagen</h5>
	 								<p>Some representative placeholder content for the first slide.</p> -->
	 							</div>
	 						</div>
	 						<div class="carousel-item">
	 							<img src="img/slides5.jpg" class="d-block w-100" alt="...">
	 							<div class="carousel-caption d-none d-md-block">
	 								<!-- <h5>Tercera Imagen</h5>
	 								<p>Some representative placeholder content for the first slide.</p> -->
	 							</div>
	 						</div>
	 					</div>
	 					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	 						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	 						<span class="visually-hidden">Previous</span>
	 					</button>
	 					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	 						<span class="carousel-control-next-icon" aria-hidden="true"></span>
	 						<span class="visually-hidden">Next</span>
	 					</button>
	 				</div>

	 			</div>
	 		</div><br>

	 		<div class="row">
	 			<div class="col">
	 				<div class="card text-white mb-3" style="max-width: 18rem;">
	 					<div class="card-header" style="background-color: #000E63"><span class="btn btn-link" style="color: white;" onclick="mostrarInfoJJ()">Más Información</span></div>
	 					<div class="card-body" style="background-color: #0B1C83">
	 						<h5 class="card-title">E.B. "Pbro J.J. Espinoza"</h5>
	 						<p class="card-text">Fue fundada en el año 1953 con el nombre para esa época de “Escuela Federal No 924” siendo su preceptora la Docente Celmira de Andueza.</p>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col">
	 				<div class="card text-white mb-3" style="max-width: 18rem;">
	 					<div class="card-header" style="background-color: #000E63"><span class="btn btn-link" style="color: white;" onclick="mostarMision()">Más Información</span></div>
	 					<div class="card-body" style="background-color: #0B1C83">
	 						<h5 class="card-title">Misión</h5>
	 						<p class="card-text">Formar para la vida al nuevo Republicano de manera axiológica y así construir un ser crítico y analítico reflexivo para enaltezer la escuela.</p>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col">
	 				<div class="card text-white mb-3" style="max-width: 18rem;">
	 					<div class="card-header" style="background-color: #000E63"><span class="btn btn-link" style="color: white;" onclick="mostrarVision()">Más Información</span></div>
	 					<div class="card-body" style="background-color: #0B1C83">
	 						<h5 class="card-title">Visión</h5>
	 						<p class="card-text">Ser una Institución Educativa Integral de excelencia basada en una concepción filosófica, humanista y constructivista con un claro horizonte.</p>
	 					</div>
	 				</div>
	 			</div>
	 			<div class="col">
	 				<div class="card text-white mb-3" style="max-width: 18rem;">
	 					<div class="card-header" style="background-color: #000E63"><span class="btn btn-link" style="color: white;" onclick="mostarInfoEstructura()">Más Información</span></div>
	 					<div class="card-body" style="background-color: #0B1C83">
	 						<h5 class="card-title">Actividades y Estructura</h5>
	 						<p class="card-text">Promociones de Preescolar y 6to Grado. Desfiles cívicos y de carnavales. Encuentros Bolivarianos. Encuentros deportivos, entre otros.</p>
	 					</div>
	 				</div>
	 			</div>
	 		</div><br>

	 	</div>
	 </div>

 <?php 

	require_once "footer.php";

 ?>

 <script src="js/infoJJ.js"></script>
 <script>
	$("#dark-mode-toggle").click(function() {
  		$("body").toggleClass("dark-mode");
	});
 </script>