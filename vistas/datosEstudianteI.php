<?php 

	require_once "header.php";
	$idEstudianteI = $_GET['idEstudianteI'];
	require_once "../procesos/database/conexion.php";
	$sql = "SELECT p1.id_estudiante, p1.apellidosE, p1.nombresE, p1.cedulaE, DATE_FORMAT(p1.fechaNacimientoE, '%d-%m-%Y') AS fechaNacimientoE, p1.edadAniosE, p1.edadMesesE, p1.lugarNacimientoE, p1.idEstadoNatalE, p1.idMunicipioNatalE, p1.idParroquiaNatalE, p1.direccionHabitacionE, p2.parentescoREI1, p2.nombreCompletoREI1, p2.cedulaREI1, p2.edadREI1, p2.nacionalidadREI1, p2.gradoInstrucionREI1, p2.trabajaREI1, p2.direccionTrabajoREI1, p2.viveREI1, p2.codigoTelCasaREI1, p2.telefonoCasaREI1, p2.codigoTelCelREI1, p2.telefonoCelREI1, p2.direccionHabitacionREI1, p2.parentescoREI2, p2.nombreCompletoREI2, p2.cedulaREI2, p2.edadREI2, p2.nacionalidadREI2, p2.gradoInstrucionREI2, p2.trabajaREI2, p2.direccionTrabajoREI2, p2.viveREI2, p2.codigoTelCasaREI2, p2.telefonoCasaREI2, p2.codigoTelCelREI2, p2.telefonoCelREI2, p2.direccionHabitacionREI2, p2.situacionPadresEI, p3.autorizacionFEI, p3.organismoAutorizacionFEI, p3.tieneHermanosEI, p3.cuantosHermanosEI, p3.cuantosHermanosVEI, p3.cuantosHermanosHEI, p3.lugarHermanosEI, p3.quienDuermeEI, p3.quienJuegaEI, p3.localizarFEI, p3.dondeQuienViveEI, p3.tipoPartoEI, p3.enfermedadesEI, p3.vacunasEI, p3.dificultadCaminarEI, p3.compromisoVisualEI, p3.auditivosEI, p3.pronunciacionEI, p3.otrasEI, p3.caracteristicasEI, p3.sueñoIntranquiloEI, p3.esfinteresEI, p3.ayudaBanioEI, p3.comeSoloEI, p3.alimentosPrefiereEI, p3.alergicoEI, p3.alimentosProhibidosEI, p3.fiebreMedicamentoEI, p4.tallaOctubreEI, p4.tallaEneroEI, p4.tallaAbrilEI, p4.tallaJunioEI, p4.pesoOctubreEI, p4.pesoEneroEI, p4.pesoAbrilEI, p4.pesoJunioEI, p4.atencionAdultaEI, p4.entretieneSoloEI, p4.expresaAfectoEI, p4.enojaFrecuentementeEI, p4.porqueEnojaEI, p4.miedosInfundidosEI, p4.intranquiloEI, p4.tiempoViendoTvEI, p4.programasTvEI, p4.tiempoGamingEI, p4.gamesEI, p4.actividadPeriodo1EI, p4.actividadPeriodo2EI, p4.actividadPeriodo3EI, p4.infoCometeFaltaEI, estados.estado, municipios.municipio, parroquias.parroquia FROM e_data_estudiante AS p1 INNER JOIN e_data_padres_i AS p2 ON p1.id_estudiante=p2.id_estudiante INNER JOIN e_data_familiar_i AS p3 ON p1.id_estudiante=p3.id_estudiante INNER JOIN e_data_interes_i AS p4 ON p1.id_estudiante=p4.id_estudiante INNER JOIN estados ON p1.idEstadoNatalE = estados.id_estado INNER JOIN municipios ON p1.idMunicipioNatalE=municipios.id_municipio INNER JOIN parroquias ON p1.idParroquiaNatalE=parroquias.id_parroquia WHERE p1.id_estudiante = '$idEstudianteI'";
	$result = $conectar->query($sql);
	$data = $result->fetch_array(MYSQLI_ASSOC);

?>

<link rel="stylesheet" href="../css/estilosImprimirEstudianteI.css">

<div class="contenedor">

	<p>aqui van los logos y el membrete</p>

	<!-- EN UN LADO DE ESTO VA EL CUADRO DE LA FOTO -->
	<p><b>FICHA ACUMULATIVA</b></p>
	<p><b>INSCRIPCIÓN INICIAL DEL NIÑO O NIÑA</b></p>

	<!-- DE AQUI EN ADELANTE VA LA INFORMACION -->
	<div>

		<p><b>DATOS DEL NIÑO O NIÑA:</b></p>

		<p>Apellidos: <u>__<?php echo $data['apellidosE'] ?>__</u></p>

		<div>
			<p>Nombres: <u>__<?php echo $data['nombresE'] ?>__</u></p>
			<p>C. Escolar: <u>__<?php echo $data['cedulaE'] ?>__</u></p>
		</div>

		<div>
			<p>Fecha de Nacimiento: <u>__<?php echo $data['fechaNacimientoE'] ?>__</u></p>
			<p>Edad: <?php echo "Años: <u>__" . $data['edadAniosE'] . "__</u> Meses: <u>__" . $data['edadMesesE']; ?>__</u></p>
		</div>

		<div>
			<p>Lugar de Nacimiento: <u>__<?php echo $data['lugarNacimientoE'] ?>__</u></p>
			<p>Parroquia: <u>__<?php echo $data['parroquia'] ?>__</u></p>
		</div>

		<div>
			<p>Municipio: <u>__<?php echo $data['municipio'] ?>__</u></p>
			<p>Estado: <u>__<?php echo $data['estado'] ?>__</u></p>
		</div>

		<p>Dirección: <u>__<?php echo $data['direccionHabitacionE'] ?>__</u></p>

		<div>
			<p><b>DATOS DEL REPRESENTANTE 1:</b></p>
			<p>Parentesco: <u>__<?php echo $data['parentescoREI1'] ?>__
		</div>

		<div>
			<p>Nombres y Apellidos: <u>__<?php echo $data['nombreCompletoREI1'] ?>__</u></p>
			<p>C.I.N°:<u>__<?php echo $data['cedulaREI1'] ?>__</u></p>
		</div>

		<div>
			<p>Edad: <u>__<?php echo $data['edadREI1'] ?>__</u></p>
			<p>Nacionalidad: <u>__<?php echo $data['nacionalidadREI1'] ?>__</u></p>
			<p>Grado de Instrucción: <u>__<?php echo $data['gradoInstrucionREI1'] ?>__</u></p>
		</div>

		<div>
			<p>Trabaja: 
			<?php 
				if ($data['trabajaREI1'] == "Si") {
					echo "Si: <u>__X__</u> ";
				} else {
					echo "Si: <u>_____</u> ";
				}

				if ($data['trabajaREI1'] == "No") {
					echo "No: <u>__X__</u>";
				} else {
					echo "No: <u>_____</u>";
				}
			?>
			</p>
			<p>Dirección de Trabajo: <u>__<?php echo $data['direccionTrabajoREI1'] ?>__</u></p>
		</div>

		<div>
			<p>Vive: 
			<?php 
				if ($data['viveREI1'] == "Si") {
					echo "Si: <u>__X__</u> ";
				} else {
					echo "Si: <u>_____</u> ";
				}

				if ($data['viveREI1'] == "No") {
					echo "No: <u>__X__</u>";
				} else {
					echo "No: <u>_____</u>";
				}
			?>
			</p>
			<p>Teléfono Casa: <u>__<?php echo "+" . $data['codigoTelCasaREI1'] . "-" . $data['telefonoCasaREI1']; ?>__</u></p>
			<p>Teléfono Celular: <u>__<?php echo "+" . $data['codigoTelCelREI1'] . "-" . $data['telefonoCelREI1']; ?>__</u></p>
		</div>

		<p>Dirección de Habitación: <u>__<?php echo $data['direccionHabitacionREI1'] ?>__</u></p>

		<div>
			<p><b>DATOS DEL REPRESENTANTE 2:</b></p>
			<p>Parentesco: <u>__<?php echo $data['parentescoREI2'] ?>__
		</div>

		<div>
			<p>Nombres y Apellidos: 
				<?php
					if ($data['nombreCompletoREI2'] != "") {
						echo "<u>__" . $data['nombreCompletoREI2'] . "</u>";
					} else {
						echo "______________________________";
					}
				?>
			<p>C.I.N°: 
				<?php
					if ($data['cedulaREI2'] != 0) {
						echo "<u>__" . $data['cedulaREI2'] . "</u>";
					} else {
						echo "__________";
					}
				?>
			</p>
		</div>

		<div>
			<p>Edad: 
				<?php
					if ($data['edadREI2'] != "") {
				 		echo "<u>__" . $data['edadREI2'] . "</u>";
					} else {
						echo "__________";
					}
				?>
				</p>
			<p>Nacionalidad: 
				<?php
					if ($data['nacionalidadREI2'] != "") {
					 	echo "<u>__" . $data['nacionalidadREI2'] . "</u>";
					} else {
						echo "__________";
					} 
				?>
			</p>
			<p>Grado de Instrucción: 
				<?php
					if ($data['gradoInstrucionREI2'] != "") {
					 	echo "<u>__" . $data['gradoInstrucionREI2'] . "</u>";
					} else {
						echo "__________";
					} 
				?>
			</p>
		</div>

		<div>
			<p>Trabaja: 
			<?php 
				if ($data['trabajaREI2'] == "Si") {
					echo "Si: <u>__X__</u> ";
				} else {
					echo "Si: <u>_____</u> ";
				}

				if ($data['trabajaREI2'] == "No") {
					echo "No: <u>__X__</u>";
				} else {
					echo "No: <u>_____</u>";
				}
			?>
			</p>
			<p>Dirección de Trabajo: 
				<?php 
					if ($data['direccionTrabajoREI2'] != "") {
						echo "<u>__" . $data['direccionTrabajoREI2'] . "</u>";
					} else {
						echo "__________";
					}
				?>
			</p>
		</div>

		<div>
			<p>Vive: 
			<?php 
				if ($data['viveREI2'] == "Si") {
					echo "Si: <u>__X__</u> ";
				} else {
					echo "Si: <u>_____</u> ";
				}

				if ($data['viveREI2'] == "No") {
					echo "No: <u>__X__</u>";
				} else {
					echo "No: <u>_____</u>";
				}
			?>
			</p>
			<p>Teléfono Casa: 
				<?php 
					if ($data['telefonoCasaREI2'] != "") {
						echo "+" . $data['codigoTelCasaREI2'] . "-" . $data['telefonoCasaREI2'];
					}else {
						echo "__________";
					}
				?>
			</p>
			<p>Teléfono Celular: 
				<?php 
					if ($data['telefonoCelREI2'] != "") {
						echo "+" . $data['codigoTelCelREI2'] . "-" . $data['telefonoCelREI2'];
					} else {
						echo "__________";
					}
				?>
			</p>
		</div>

		<p>Dirección de Habitación: 
			<?php 
				if ($data['direccionHabitacionREI2'] != "") {
					echo $data['direccionHabitacionREI2'];
				}else{
					echo "__________";
				}
			?>
		</p>

		<p><b>SITUACIÓN DE LOS PADRES: 
			<?php 
				if ($data['situacionPadresEI'] == "Conviven") {
					echo "Conviven <u>__X__</u> ";
				}else {
					echo "Conviven _____ ";
				}

				if ($data['situacionPadresEI'] == "Separados") {
					echo "Separados <u>__X__</u> ";
				}else {
					echo "Separados _____";
				}
			?>
		</b></p>

		<p><b>DATOS FAMILIARES AUTORIZADOS PARA REPRESENTARLOS:</b></p>

		<div>
			<p><b>Tiene autorización: <u>
				<?php 
					if ($data['autorizacionFEI'] == 1) {
						echo "__" . $data['autorizacionFEI'] . "__";
					}else {
						echo "_____";
					}
				?>
			</u></b></p>
			<p><b>Que Organismo la Otorga: <u>
				<?php 
					if ($data['autorizacionFEI'] == 1) {
						echo "__" . $data['organismoAutorizacionFEI'] . "__";
					}else {
						echo "_____";
					}
				?>
			</u></b></p>
		</div>

		<div>
			<p>Tiene Hermanos: 
				<?php if ($data['tieneHermanosEI'] == 1) { ?>
					<u>__ <?php echo $data['tieneHermanosEI'] . "__</u> ¿Cuantos? <u>__" . $data['cuantosHermanosEI'] . "__</u> V: <u>__" . $data['cuantosHermanosVEI'] . "__</u> H: <u>__" . $data['cuantosHermanosHEI'] . "__</u>"; ?></p>
				<?php }else{ ?>
					<u>__ <?php echo "_" . "__</u> ¿Cuantos? <u>__" . "_" . "__</u> V: <u>__" . "_" . "__</u> H: <u>__" . "_" . "__</u>"; ?></p>
				<?php } ?>
			<p>Lugar que ocupa entre ellos: <u>
				<?php 
					if ($data['tieneHermanosEI'] == 1) {
						echo "__" . $data['lugarHermanosEI'] . "__"; 
					}else {
						echo "_____";
					}
				?>				
			</u></p>
		</div>

		<div>
			<p>¿Con quién duerme? <u>
				<?php 
					if ($data['quienDuermeEI'] != "") {
						echo "__" . $data['quienDuermeEI'] . "__" ;
					}else {
						echo "_____";
					}
				?>
			</u></p>
			<p>¿Con quién juega? <u>
				<?php 
					if ($data['quienJuegaEI'] != "") {
						echo "__" . $data['quienJuegaEI'] . "__";
					}else {
						echo "_____";
					}
				?>
			</u></p>
		</div>

		<p>*Donde localizar a la familia o responsable del niño o la niña en caso de alguna emergencia: <u>__<?php echo $data['localizarFEI'] ?>__</u></p>

		<p><b>ANTECEDENTES DEL NIÑO (A):</b></p>

		<p>Donde y con quien vive el Niño o la Niña: <u>__ <?php echo $data['dondeQuienViveEI'] ?>__</u></p>

		<p>Tipo de Parto: 
			<?php
				if ($data['tipoPartoEI'] == "Normal") {
					echo "Normal <u>__X__</u> ";
				}else{
					echo "Normal _____ ";
				}

				if ($data['tipoPartoEI'] == "Cesaría") {
					echo "Cesaría <u>__X__</u> ";
				}else{
					echo "Cesaría _____ ";
				}

				if ($data['tipoPartoEI'] == "Fórceps") {
					echo "Fórceps <u>__X__</u> ";
				}else{
					echo "Fórceps _____ ";
				}
			?>
		</p>

		<p>Enfermedades Padecidas: 
			<?php
				if ($data['enfermedadesEI'] != "") {
				 	echo "<u>__" . $data['enfermedadesEI'] . "__</u>";
				}else{
					echo "______________________________";
				}
			?>
		</p>

		<div>
			<p>Vacunas Recibidas: 
			<?php 
				if ($data['vacunasEI'] != "") {
					echo "<u>__" . $data['vacunasEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Presto dificultad para caminar: 
			<?php 
				if ($data['dificultadCaminarEI'] != "") {
					echo "<u>__" . $data['dificultadCaminarEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
		</div>

		<div>
			<p>Compromiso visual: 
			<?php 
				if ($data['compromisoVisualEI'] != "") {
					echo "<u>__" . $data['compromisoVisualEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Auditivos: 
			<?php 
				if ($data['auditivosEI'] != "") {
					echo "<u>__" . $data['auditivosEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Pronunciación: 
			<?php 
				if ($data['pronunciacionEI'] != "") {
					echo "<u>__" . $data['pronunciacionEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
		</div>

		<div>
			<p>Otras: 
			<?php 
				if ($data['otrasEI'] != "") {
					echo "<u>__" . $data['otrasEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Que características presenta: 
			<?php 
				if ($data['caracteristicasEI'] != "") {
					echo "<u>__" . $data['caracteristicasEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
		</div>

		<!-- AQUI TERMINE UNA HOJA Y COMIENZA UNA NUEVA -->

		<p>Tiene sueño intranquilo: 
			<?php 
				if ($data['sueñoIntranquiloEI'] != "") {
					echo "<u>__" . $data['sueñoIntranquiloEI'] . "__</u>";
				}else {
					echo "______________________________";
				}
			?>
		</p>

		<div>
			<p>Controla las esfinteres: 
			<?php 
				if ($data['esfinteresEI'] != "") {
					echo "<u>__" . $data['esfinteresEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Necesita ayuda para ir al baño: 
			<?php 
				if ($data['ayudaBanioEI'] != "") {
					echo "<u>__" . $data['ayudaBanioEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
			<p>Come solo: 
			<?php 
				if ($data['comeSoloEI'] != "") {
					echo "<u>__" . $data['comeSoloEI'] . "__</u>";
				}else {
					echo "__________";
				}
			?>
			</p>
		</div>

		<p>Que alimentos prefiere: 
			<?php 
				if ($data['alimentosPrefiereEI'] != "") {
					echo "<u>__" . $data['alimentosPrefiereEI'] . "__</u>";
				}else {
					echo "______________________________";
				}
			?>
		</p>

		<p>Es Alérgico: 
			<?php 
				if ($data['alergicoEI'] != "") {
					echo "<u>__" . $data['alergicoEI'] . "__</u>";
				}else {
					echo "______________________________";
				}
			?>
		</p>

		<p>Que alimentos son prohibidos por indicación médica: 
			<?php 
				if ($data['alimentosProhibidosEI'] != "") {
					echo "<u>__" . $data['alimentosProhibidosEI'] . "__</u>";
				}else {
					echo "______________________________";
				}
			?>
		</p>

		<p>En caso de fiebre que medicamentos suministra al niño: <?php echo "<u>__" . $data['fiebreMedicamentoEI'] . "__</u>"; ?></p>

		<table border="2">

			<thead>
				<tr>
					<th>MES</th>
					<th>OCTUBRE</th>
					<th>ENERO</th>
					<th>ABRIL</th>
					<th>JUNIO</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<th>TALLA</th>
					<td><?php echo $data['tallaOctubreEI'] ?></td>
					<td><?php echo $data['tallaEneroEI'] ?></td>
					<td><?php echo $data['tallaAbrilEI'] ?></td>
					<td><?php echo $data['tallaJunioEI'] ?></td>
				</tr>
				<tr>
					<th>PESO</th>
					<td><?php echo $data['pesoOctubreEI'] ?></td>
					<td><?php echo $data['pesoEneroEI'] ?></td>
					<td><?php echo $data['pesoAbrilEI'] ?></td>
					<td><?php echo $data['pesoJunioEI'] ?></td>
				</tr>
			</tbody>

		</table>

		<p><b>DESARROLLO EMOCIONAL: </b></p>

		<p>¿Demanda atención de adultos?
			<?php
				if ($data['atencionAdultaEI'] == "Poca") {
					echo "Poca: <u>__X__</u> ";
				}else{
					echo "Poca _____ ";
				}

				if ($data['atencionAdultaEI'] == "Mucha") {
					echo "Mucha: <u>__X__</u> ";
				}else{
					echo "Mucha _____ ";
				}

				if ($data['atencionAdultaEI'] == "Normal") {
					echo "Normal: <u>__X__</u> ";
				}else{
					echo "Normal _____ ";
				}
			?>
		</p>

		<div>
			<p>¿Se entretiene solo (a)? 
			<?php 
				if ($data['entretieneSoloEI'] != "") {
					echo "<u>__" . $data['entretieneSoloEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
			<p>¿Expresa afecto hacia las demás personas? 
			<?php 
				if ($data['expresaAfectoEI'] != "") {
					echo "<u>__" . $data['expresaAfectoEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
		</div>

		<div>
			<p>¿Se enoja con frecuencia? 
			<?php 
				if ($data['enojaFrecuentementeEI'] != "") {
					echo "<u>__" . $data['enojaFrecuentementeEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
			<p>¿Porque? 
			<?php 
				if ($data['porqueEnojaEI'] != "") {
					echo "<u>__" . $data['porqueEnojaEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
		</div>

		<p><b>OTROS DATOS DE INTERÉS:</b></p>

		<div>
			<p>Tiene miedos infundidos: 
			<?php 
				if ($data['miedosInfundidosEI'] != "") {
					echo "<u>__" . $data['miedosInfundidosEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
			<p>Es tremendamente intranquilo: 
			<?php 
				if ($data['intranquiloEI'] != "") {
					echo "<u>__" . $data['intranquiloEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
		</div>

		<div>
			<p>Pasa mucho tiempo viendo TV: 
			<?php 
				if ($data['tiempoViendoTvEI'] != "") {
					echo "<u>__" . $data['tiempoViendoTvEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
			<p>Que programas le gusta: 
			<?php 
				if ($data['programasTvEI'] != "") {
					echo "<u>__" . $data['programasTvEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
		</div>

		<div>
			<p>Pasa mucho tiempo con los video juegos: 
			<?php 
				if ($data['tiempoGamingEI'] != "") {
					echo "<u>__" . $data['tiempoGamingEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
			<p>¿Cuales? 
			<?php 
				if ($data['gamesEI'] != "") {
					echo "<u>__" . $data['gamesEI'] . "__</u> ";
				}else {
					echo "__________ ";
				}
			?>
			</p>
		</div>

		<p><b>RESUMEN DE LA ACTIVIDAD DEL NIÑO:</b></p>

		<!-- AQUI DEBE HACER QUE EN CASO DE QUE NO TENGA NADA ESCRITO DENTRO DE LA ACTIVIDAD EN ALGUN PERIODO SE MUESTREN TRES LINEAS COMPLETA CON EL SUBRAYADO DONDE SE SUPONE QUE DEBE ESCRIBIR LA INFORMACION, YO NO HICE ESO PUES XQ ESO LO HACE UD CUANDO ESTE DISEÑANDO ESTO -->
		<p>Primer Periodo: 
			<?php 
				if ($data['actividadPeriodo1EI'] != "") {
					echo "<u>__" . $data['actividadPeriodo1EI'] . "__</u> ";
				}else {
					echo "______________________________ ";
				}
			?>
		</p>
		<p>Segundo Periodo: 
			<?php 
				if ($data['actividadPeriodo2EI'] != "") {
					echo "<u>__" . $data['actividadPeriodo2EI'] . "__</u> ";
				}else {
					echo "______________________________ ";
				}
			?>
		</p>
		<p>Tercer Periodo: 
			<?php 
				if ($data['actividadPeriodo3EI'] != "") {
					echo "<u>__" . $data['actividadPeriodo3EI'] . "__</u> ";
				}else {
					echo "______________________________ ";
				}
			?>
		</p>

		<p>*Información acerca de que hace la familia cuando el niño o la niña comete alguna falta, entre otras: <u>__<?php echo $data['infoCometeFaltaEI'] ?>__</u></p>

		<!-- AQUI VAN LAS FIRMAS DE LOS DOCENTES QUE SUPONGO Q PUEDEN SER VARIOS, TAMBIEN LAS FIRMAS DE LOS REPRESENTANTES QUE SON MAXIMO 2, Y DEL DIRECTOR -->

		<div>
			<p>Docentes</p>
			<p>Representantes</p>
		</div>

		<p>Director</p>

		<!-- AQUI TERMINA UNA HOJA Y COMIENZA UNA NUEVA -->

		<p><b><u>FORMALIZACIÓN DE LA INSCRIPCIÓN</u></b></p>

		<!-- AQUI EN ESTA TABLA EN LA PARTE DE FIRMA DEL REPRESENTANTE HAY QUE HACER ALGO PARECIDO A UNA TABLA Q ESTA EN LA PAGINA DE IMPRIMIR ESTUDIANTE BASICA, DONDE DICE FIRMA DEL PERSONAL RESPONSABLE, BUENO AL MOMENTO DE HACER ESTE REGISTRO EN EL SISTEMA SE PIDE Q SE CONFIRME SI EL REPRESENTANTE ESTA DE ACUERDO CON LA INSCRIPCION Y ESO SE HACE CON UN CHECKED ENTONCES AQUI UD DEBE HACER QUE SI EL REPRESENTANTE CONFIRMO PUES QUE SE MUESTRE UNA PALOMITA EN UN LADO DEL ESPACIO DE LA FIRMA Y QUE QUEDE EL OTRO LADO PARA QUE FIRME EL REPRESENTANTE Y EN CASO DE QUE NO HAYA CONFIRMADO EL REPRESENTANTE PUES Q SE MUESTRE UNA X, YO TODAVIA NO HAGO ESA CONSULTA PERO UD AQUI IGUAL PUEDE HACER ESO, NO SE CRRE UNA VARIABLE Y LO HACE Y YO DESPUES METO LA CONSULTA ENLUGAR DE LA VARIABLE, EN CASO DE SI ESTE CONFIRMADO POR EL REPRESENTANTE PUES ES 1 Y EN CASO DE Q NO ESTE CONFIRMADO ES 0 -->
		<!-- EN EL DISEÑO DE LA TABLA TIENE QUE HACER QUE EN DONDE DICE 1° GRUPO, 2° GRUPO Y 3° GRUPO SALGA PREESCOLAR EN UN LADO, ASI COMO ESTA EN LA FICHA, YO NO PUDE HACER ESO -->
		<table border="2">
			<thead>
				<tr>
					<th>AÑO ESCOLAR</th>
					<th>GRADO</th>
					<th>FIRMA DEL REPRESENTANTE</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>1° Grupo</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>2° Grupo</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>3° Grupo</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>1° Grado</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>2° Grado</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>3° Grado</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>4° Grado</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>5° Grado</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>6° Grado</td>
					<td></td>
				</tr>
			</tbody>
		</table>

		<!-- ESTOS SI LLEVAN NADA MAS EL ESPACIO SUBRAYADO PARA QUE SE MARQUE CON LAPIZ UNA VEZ QUE ESTE IMPRESO, XQ EL SISTEMA NO TIENE ESTO -->
		<p><b>Documentos Entregados: </b></p>

		<p>Partida de Nacimiento: __________</p>
		<p>Copia de C.I.: __________</p>
		<p>Tarjetas de Vacunas: __________</p>
		<p>Fotos: __________</p>
		<p>Boletines de Lapsos: 1°: _____ 2°: _____ 3°: _____</p>

		<p><b>NOTA: </b>una vez que el niño o la niña sea promovido al 1° grado de Educación Básica continuará con la misma planilla de inscripción y actualizará datos.</p>

	</div>

</div>
