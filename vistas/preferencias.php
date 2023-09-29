<?php 

	require_once "header.php";
	require_once "menu.php";

 ?>

	 <div class="h-100 p-5 text-dark bg-transparent rounded-5">
	 	<div id="responsive" class="container spaceDown">

	 		<h1 class="display-4"><span class="fa-solid fa-gear display-5"></span> Preferencias</h1><br>

	 		<div class="row">
	 			<div class="col">
	 				Si desea copiar a otro dispositivo los datos existentes en este equipo, o desea crear un respaldo de los datos guardados, haga click aquí.
	 			</div>
	 			<div class="col d-grid gap-2 text-center">
	 				<button class="btn btn-secondary btn-lg btn-block" id="backup-button"><span class="fa-solid fa-database"></span> Exportar Base de Datos</button>
	 			</div>
	 		</div>
	 		<hr>

	 		<div class="row">
	 			<div class="col">
	 				Si desea sobreescribir los datos guardados en este equipo y reemplazarlos con datos de otro equipo, haga click aquí.
	 			</div>
	 			<div class="col d-grid gap-2 text-center">
	 				<form id="import-form" method="post" enctype="multipart/form-data">
						<div class="input-group mb-3">
							<input class="form-control form-control-lg" type="file" name="file" id="formFile">
							<label class="input-group-text btn btn-secondary btn-lg btn-block" for="formFile"><span class="fa-solid fa-database"></span><input type="submit" style="background: none; border: none; color: white;" name="submit" value="Importar Base de Datos" onclick="importarDB()"></label>
						</div>
					</form>
	 			</div>
	 		</div>
	 		<hr>

	 		<div class="row">
	 			<div class="col">
	 				En caso de que algún Estado, Municipio o Parroquia del pais tenga que ser modificado o tenga que agregarse uno nuevo, haga click aquí.
	 			</div>
	 			<div class="col d-grid gap-2 text-center">
	 				<a href="regiones.php" class="btn btn-secondary btn-lg btn-block">
	 					<span class="fa-solid fa-location-dot"></span> Localizaciones Geográficas
	 				</a>
	 			</div>
	 		</div>
	 		<hr>

	 		<div class="row">
	 			<div class="col">
	 				Si no esta familiarizado con el sistema, o tiene inconvenientes a la hora de usarlo puede leer el manual para aclarar sus dudas, haga click aquí.
	 			</div>
	 			<div class="col d-grid gap-2 text-center">
	 				<span class="btn btn-secondary btn-lg btn-block">
	 					<span class="fa-solid fa-address-book"></span> Descargar Manual de Usuario
	 				</span>
	 			</div>
	 		</div>
	 		<hr>

	 		<div class="row">
	 			<div class="col">
	 				Si presenta algún problema con el sistema y el manual no cuenta con la solución correspondiente puede llamar a soporte técnico, haga click aquí.
	 			</div>
	 			<div class="col d-grid gap-2 text-center">
					<a href="soporte.php" class="btn btn-secondary btn-lg btn-block">
	 					<span class="fa-solid fa-phone"></span> Contactar a Soporte Técnico
					</a>
	 			</div>
	 		</div>
	 		<hr>

	 		<p align="center">
				Aplicación Web Desarrollada por Emilio Cabezas, Erickson Graterol y Ronal Garcia; Integrantes de Proyecto Socio Integrador Tecnológico IV. <br>
				&copy; SISTEMA ADMINISTRATIVO "Pbro. J.J. Espinoza" - SINCE 2023 - Todos los Derechos Reservados. <br>
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

<script src="../js/database.js"></script>