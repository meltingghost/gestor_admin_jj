<?php 

	require_once "header.php";
	$idPersonal = $_GET['idPersonal'];
	require_once "../procesos/database/conexion.php";
	$sql = "SELECT * FROM personal_p1 INNER JOIN personal_p2 ON personal_p1.id_Personal = personal_p2.id_Personal INNER JOIN cargos ON personal_p2.id_funcionPersonal = cargos.id_cargo WHERE personal_p1.id_personal = '$idPersonal'";
	$result = $conectar->query($sql);
	$data = $result->fetch_array(MYSQLI_ASSOC);

?>

<link rel="stylesheet" href="../css/estilosImprimirPersonal.css">

<div class="contenedor">

	<div id="logos">
		<img id="imgLogoMinisterio" src="../img/logoMinisterio.jpg">
		<img id="imgLogoJJ" src="../img/logoJJ.png">
	</div>

	<div id="titulo">
		<p id="pTitulo"><b>FICHA DE REGISTRO DE PERSONAL</b></p>
		<div id="foto"></div>
	</div>

	<p id="p1"><b>1.-TIPO DE PERSONAL:</b></p>
	
	<table id="tabla1" cellpadding="5" cellspacing="">

		<thead>

			<tr>
				<td colspan="1">
					<?php 
						if ($data['tipoPersonal'] == "Docente") {

							echo "<div>DOCENTE <u>__X__</u></div>";

							if ($data['codigoPersonal'] != "") {
								echo "<div>CÓDIGO <u>__" . $data['codigoPersonal'] . "__</u></div>";
							}

						} else {
							echo "<div>DOCENTE _____</div>";
							echo "<div>CÓDIGO _____</div>";
						}
					?>
				</td>
				<td colspan="1">
					<?php 
						if ($data['tipoPersonal'] == "Administrativo") {

							echo "<div>ADMINISTRATIVO <u>__X__</u></div>";

							if ($data['codigoPersonal'] != "") {
								echo "<div>CÓDIGO <u>__" . $data['codigoPersonal'] . "__</u></div>";
							}

						} else {
							echo "<div>ADMINISTRATIVO _____</div>";
							echo "<div>CÓDIGO _____</div>";
						}
					?>
				</td>
				<td colspan="1">
					<?php 
						if ($data['tipoPersonal'] == "Obrero") {

							echo "<div>OBRERO <u>__X__</u></div>";

							if ($data['codigoPersonal'] != "") {
								echo "<div>CÓDIGO <u>__" . $data['codigoPersonal'] . "__</u></div>";
							}

						} else {
							echo "<div>OBRERO _____</div>";
							echo "<div>CÓDIGO _____</div>";
						}
					?>
				</td>
				<td colspan="1">
					<?php 
						if ($data['tipoPersonal'] == "Cocinera") {

							echo "<div>COCINERA <u>__X__</u></div>";

							if ($data['codigoPersonal'] != "") {
								echo "<div>CÓDIGO <u>__" . $data['codigoPersonal'] . "__</u></div>";
							}

						} else {
							echo "<div>COCINERA _____</div>";
							echo "<div>CÓDIGO _____</div>";
						}
					?>
				</td>
				<td colspan="1">
					<?php 
						if ($data['tipoPersonal'] == "Integral") {

							echo "<div>INTEGRAL <u>__X__</u></div>";

							if ($data['codigoPersonal'] != "") {
								echo "<div>CÓDIGO <u>__" . $data['codigoPersonal'] . "__</u></div>";
							}

						} else {
							echo "<div>INTEGRAL _____</div>";
							echo "<div>CÓDIGO _____</div>";
						}
					?>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<?php 
						if ($data['trasladoPersonal'] == 1) {
							echo 'TRASLADO: <i class="fa-solid fa-check"></i>';
						}else {
							echo 'TRASLADO: _____';
						}
					?>
				</td>
				<td colspan="2">
					<?php 
						$fechaPersonal = new DateTime($data['fechaPersonal']);
						echo "FECHA: <u>" . $fechaPersonal->format('d-m-Y') . "</u>";
					?>
				</td>
			</tr>

			<tr>
				<th colspan="3" rowspan="1">2.-IDENTIFICACIÓN:</th>
			</tr>

			<tr>
				<td colspan="3" rowspan="1">NOMBRES Y APELLIDOS: <u><?php echo $data['nombreCompletoPersonal']; ?></u></td>
			</tr>

			<tr>
				<td>C.I: <u><?php echo $data['cedulaPersonal'] ?> </u></td>
				<td colspan="3">FECHA DE NACIMIENTO: <u>
					<?php 
						$fechaNacimientoPersonal = new DateTime($data['fechaNacimientoPersonal']);
						echo $fechaNacimientoPersonal->format('d-m-Y');
					?>
				</u></td>
				<td colspan="2">SEXO: <u> <?php echo $data['sexoPersonal'] ?> </u></td>
			</tr>

			<tr>
				<td colspan="2">GRUPO SANGUINEO: <u>__ <?php echo $data['grupoSanguineoPersonal'] ?> __</u></td>
				<td colspan="2">FACTOR Rh: <u>__ <?php echo $data['factorRhPersonal'] ?> __</u></td>
			</tr>

			<tr>
				<td colspan="3">NIVEL DE INSTRUCCIÓN: <u> <?php echo $data['nivelInstrucionPersonal'] ?> </u></td>
				<td>ESP: <u> 
					<?php
						if ($data['especialidadPersonal'] != "") {
							echo $data['especialidadPersonal'];
						} else {
							echo "__________";
						}
						
					?> 
				</u></td>
			</tr>

			<tr>
				<td colspan="3" rowspan="1">EGRESADO DE: <u><?php echo $data['egresadoPersonal']; ?></u></td>
			</tr>

			<tr>
				<td colspan="3" rowspan="1">DIRECCIÓN DE HABITACIÓN: <u><?php echo $data['direccionPersonal']; ?></u></td>
			</tr>

			<tr>
				<td colspan="3">N° DE TELEFÓNO: <u> +<?php echo $data['codigoTelPersonal'] . "-" . $data['telefonoPersonal'] ?> </u></td>
				<td colspan="3">N° DE TELEFÓNO PERSONAL: <u> 
					<?php
						if ($data['telefono2Personal'] != "") {
							echo "+" . $data['codigoTel2Personal'] . "-" . $data['telefono2Personal'];
						} else {
							echo "__________";
						}
					?> 
				</u></td>
			</tr>

			<tr>
				<td colspan="3">N° DE TELEFÓNO OPCIONAL: <u> 
					<?php
						if ($data['telefonoOpcionalPersonal'] != "") {
							echo "+" . $data['codigoTelOpcionalPersonal	'] . "-" . $data['telefonoOpcionalPersonal'];
						} else {
							echo "__________";
						}
					 ?> 
				</u></td>
				<td colspan="2">CORREO ELECTRÓNICO: <u> <?php echo $data['correoPersonal'] ?> </u></td>
			</tr>

			<tr>
				<th colspan="3" rowspan="1">3.-DATOS DEL CARGO ACTUAL</th>
			</tr>

			<tr>
				<td colspan="2">FUNCIÓN ACTUAL: <u> <?php echo $data['nombreCargo'] ?> </u></td>
				<td colspan="2">ESPECIALISTA: <u>
					<?php 
						if ($data['especialistaPersonal'] != "") {
							echo $data['especialistaPersonal'];
						} else {
							echo "__________";
						}
						
					?>
				</u></td>
			</tr>

			<tr>
				<td colspan="2">FECHA DE INGRESO: <u>
					<?php
						$fechaIngresoPersonal = new DateTime($data['fechaIngresoPersonal']);
						echo $fechaIngresoPersonal->format('d-m-Y');
					?>
				</u></td>
				<td colspan="2">OBSERVACIÓN: <u>
					<?php 
						if ($data['observacionPersonal'] != "") {
							echo $data['observacionPersonal'];
						} else {
							echo "__________";
						}
					?>
				</u></td>
			</tr>

			<tr>
				<th colspan="3" rowspan="1">4.-SOLO PARA EL PERSONAL QUE PROVIENE DE OTRA INSTITUCIÓN: *****</th>
			</tr>

			<tr>
				<td colspan="3" rowspan="1">NOMBRE DE LA INSTITUCIÓN: <u>
					<?php 
						if ($data['institucionPersonal'] != "") {
							echo $data['institucionPersonal'];
						} else {
							echo "______________________________";
						}
					 ?>
				</u></td>
			</tr>

			<tr>
				<td colspan="2">CÓDIGO DE DEPENDENCIA: <u>
					<?php 
						if ($data['codigoDependenciaPersonal'] != "") {
							echo $data['codigoDependenciaPersonal'];
						} else {
							echo "__________";
						}
					 ?>
				</u></td>
				<td colspan="2">CÓDIGO DEA: <u>
					<?php 
						if ($data['codigoDeaPersonal'] != "") {
							echo $data['codigoDeaPersonal'];
						} else {
							echo "__________";
						}
					 ?>
				</u></td>
			</tr>

			<tr>
				<th colspan="3" rowspan="1">5.-ANEXAR:</th>
			</tr>

			<tr>
				<td>
					<ul>
						<li>COPIA DE CÉDULA DE IDENTIDAD AMPLIADA. 
							<?php 
								if ($data['copiaCIPersonal'] == 1) {
									echo '<i class="fa-solid fa-check"></i>';
								}
							?>
						</li>
						<li>COPIA DE CREDENCIAL.
							<?php 
								if ($data['copiaCredencialPersonal'] == 1) {
									echo '<i class="fa-solid fa-check"></i>';
								}
							?>
						</li>
						<li>CONSTANCIA DE TRABAJO.
							<?php 
								if ($data['constanciaTrabajoPersonal'] == 1) {
									echo '<i class="fa-solid fa-check"></i>';
								}
							?>
						</li>
						<li>RECIBO DE PAGO.
							<?php 
								if ($data['reciboPagoPersonal'] == 1) {
									echo '<i class="fa-solid fa-check"></i>';
								}
							?>
						</li>
						<li>SINTESIS CURRICULAR.
							<?php 
								if ($data['curriculoPersonal'] == 1) {
									echo '<i class="fa-solid fa-check"></i>';
								}
							?>
						</li>
					</ul>
				</td>
			</tr>

			<tr>
				<th align="left">FIRMA DEL USUARIO</th>
				<th align="right">FIRMA DEL DIRECTOR (E)</th>
			</tr>

		</thead>
		<tbody id="tbody1">
			
			
		</tbody>

	</table>

</div>
