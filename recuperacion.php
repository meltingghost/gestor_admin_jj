<?php 

	require_once "header.php";

 ?>

<body style="margin: 0; background: url(img/fondoAll.avif) fixed; background-size: cover;">

	<div class="contenedor" id="ellipsis" style="display: none;">
		<div class="lds-ellipsis">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	<div class="h-100 p-5 text-dark bg-transparent rounded-5">
		<div class="container">
			<h1 class="display-4">Solución de Problemas</h1>
			Si presenta problemas con el software intente probar una de las siguientes opciones.
			<hr>
			<div class="row">
				<div class="col">
					Si experimenta problemas en la pestaña de registro, inicio de sesión o se muestra un mensaje de error en la base de datos, puede probar esta opción.
				</div>
				<div class="col d-grid gap-2">
					<span class="btn btn-primary btn-lg btn-block" onclick="restablecerDB()">
						Pulse Aqui <span class="fa-solid fa-share"></span>
					</span>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col">
					En caso de inconvenientes solo con el usuario registrado como director, puede probar esta opción.
				</div>
				<div class="col d-grid gap-2">
					<span class="btn btn-primary btn-lg btn-block" onclick="eliminarUserDirector()">
						Pulse Aqui <span class="fa-solid fa-share"></span>
					</span>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col">
					En caso de inconvenientes solo con el usuario registrado como sub-director administrativo, puede probar esta opción.
				</div>
				<div class="col d-grid gap-2">
					<span class="btn btn-primary btn-lg btn-block" onclick="eliminarUserSubDirectorAdmin()">
						Pulse Aqui <span class="fa-solid fa-share"></span>
					</span>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col">
					En caso de inconvenientes solo con el usuario registrado como sub-director académico, puede probar esta opción.
				</div>
				<div class="col d-grid gap-2">
					<span class="btn btn-primary btn-lg btn-block" onclick="eliminarUserSubDirectorAcad()">
						Pulse Aqui <span class="fa-solid fa-share"></span>
					</span>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col text-center">
					<a href="inicio.php" class="btn btn-secondary">Volver</a><br>
				</div>
				<div class="col-sm-3"></div>
			</div>
			<hr>
			<p align="center">
				Aplicación Web Desarrollada por Emilio Cabezas, Erickson Graterol y Ronal Garcia; Integrantes de Proyecto Socio Integrador Tecnológico IV. <br>
				SISTEMA ADMINISTRATIVO "PBRO. J.J. ESPINOZA" - SINCE 2022 - Todos los Derechos Reservados. <br>
				Universidad Politécnica Territorial del Estado Trujillo "Mario Briceño Iragorry". <br>
				Núcleo Territorial "Fabricio Ojeda" Boconó. <br>
				Programa Nacional de Formación en Informatica. <br>
				Estado Trujillo, Venezuela. <br>
				Inf: 0424-7000629 - 0424-7212439. <br>
			</p>
		</div>
	</div>

<?php 

	require_once "footer.php";

 ?>
 <script src="js/database.js"></script>