<?php 

	require_once "header.php";
	$idEstudianteB = $_GET['idEstudianteB'];
	require_once "../procesos/database/conexion.php";
	$sql = "SELECT p1.id_estudiante, p1.apellidosE, p1.nombresE, p1.cedulaE, DATE_FORMAT(p1.fechaNacimientoE, '%d-%m-%Y') AS fechaNacimientoE, p1.edadAniosE, p1.lugarNacimientoE, p1.idEstadoNatalE, p1.idMunicipioNatalE, p1.idParroquiaNatalE, p1.direccionHabitacionE, p1.sexoEB, DATE_FORMAT(p1.fecha, '%d-%m-%Y') AS fecha, p5.nombreCompletoREB, DATE_FORMAT(p5.fechaNacimientoREB, '%d-%m-%Y') AS fechaNacimientoREB, p5.cedulaREB, p5.edadREB, p5.gradoInstruccionREB, p5.ocupacionREB, p5.lugarTrabajoREB, p5.codigoTelREB, p5.telefonoREB, p5.direccionDomicilioREB, p5.parentescoREB, p5.rSustitutoEB, DATE_FORMAT(p5.fechaNacimientoRSEB, '%d-%m-%Y') AS fechaNacimientoRSEB, p5.cedulaRSEB, p5.direccionHabitacionRSEB, p5.codigoTelRSEB, p5.telefonoRSEB, p5.id_personalResponsableEB, p5.confirmResponsableInsEB, p5.observacionesEB, p5.fichaNumEB, personal_p1.id_personal, personal_p1.nombreCompletoPersonal, personal_p2.id_funcionPersonal, cargos.nombreCargo, formalizar.id_anioEscolar, formalizar.id_literalGradoAnterior, formalizar.id_gradoCursar, formalizar.id_seccionGradoCursar, estados.estado, municipios.municipio, parroquias.parroquia, secciones.letraSeccion FROM e_data_estudiante AS p1 INNER JOIN e_data_representante_b AS p5 ON p1.id_estudiante = p5.id_estudiante INNER JOIN personal_p1 ON p5.id_personalResponsableEB = personal_p1.id_personal INNER JOIN personal_p2 ON personal_p1.id_personal = personal_p2.id_personal INNER JOIN cargos ON personal_p2.id_funcionPersonal = cargos.id_cargo INNER JOIN formalizar_ins_e AS formalizar ON p1.id_estudiante = formalizar.id_estudiante INNER JOIN estados ON p1.idEstadoNatalE = estados.id_estado INNER JOIN municipios ON p1.idMunicipioNatalE = municipios.id_municipio INNER JOIN parroquias ON p1.idParroquiaNatalE = parroquias.id_parroquia INNER JOIN secciones ON formalizar.id_seccionGradoCursar = secciones.id_seccion WHERE p1.id_estudiante = '$idEstudianteB'";
	$result = $conectar->query($sql);
	$data = $result->fetch_array(MYSQLI_ASSOC);

?>

<link rel="stylesheet" href="../css/estilosImprimirEstudianteB.css">

<div class="contenedor">

	<p>aqui van los logos y el membrete</p>

	<!-- DE AQUI EN ADELANTE VA LA INFORMACION -->
	<div>

		<div>
			<p><b>FICHA DE INSCRIPCIÓN N° </b><u>__ <?php echo $data['fichaNumEB']; ?> __</u></p>
			<p><b>FECHA DE INSCRIPCIÓN: </b><u>__ <?php echo $data['fecha']; ?> __</u></p>
		</div>

		<p><b><u>1.-IDENTIFICACIÓN DEL ALUMNO:</u></b></p>

		<p>APELLIDOS Y NOMBRES: <u>__ <?php echo $data['apellidosE'] . " " . $data['nombresE']; ?> __</u></p>

		<div>
			<p>LUGAR Y FECHA DE NACIMIENTO: <u>__ <?php echo $data['lugarNacimientoE'] . " " . $data['fechaNacimientoE']; ?> __</u></p>
			<p>SEXO: <u>__ <?php echo $data['sexoEB']; ?> __</u></p>
		</div>

		<div>
			<p>EDAD: <u>__ <?php echo $data['edadAniosE'] ?> __</u></p>
			<p>C.I.N°: <u>__ <?php echo $data['cedulaE'] ?> __</u></p>
			<p>PARROQUIA: <u>__ <?php echo $data['parroquia'] ?> __</u></p>
		</div>

		<div>
			<p>MUNICIPIO: <u>__<?php echo $data['municipio'] ?>__</u></p>
			<p>ESTADO: <u>__<?php echo $data['estado'] ?>__</u></p>
			<p>DIRECCIÓN: <u>__<?php echo $data['direccionHabitacionE'] ?>__</u></p>
			<!-- DIRECCION PUEDE PASAR PARA LA LINEA SIGUIENTE YA QUE ES LARGA, PERO DEBE COMENZAR EN LA MISMA LINEA DEL ESTADO Y MUNICIPIO -->
		</div>

		<!-- EN ESTA TABLA SOLO HAGA EL DISEÑO XQ TENGO Q HACER PRIMERO LO DE LAS NOTAS Y LA VAINA PARA QUE SE PUEDA AGREGAR EL MISMO ESTUDIANTE EN UN AÑO ESCOLAR DIFERENTE, PARA QUE AQUI SE MUESTREN LOS DATOS DE LOS GRADOS QUE HA CURSADO EL ALUMNO EN LA INSTITUCIÓN ANTERIORMENTE, COMO ESTA ACTUALMENTE SOLO PUEDO HACER QUE SE MUESTRE EL GRADO QUE ESTA CURSANDO ASI Q NO SIRVE ASI -->
		<table border="2">
			
			<thead>
				<tr>
					<th>GRADO A CURSAR</th>
					<th>PRIMERO</th>
					<th>SEGUNDO</th>
					<th>TERCERO</th>
					<th>CUARTO</th>
					<th>QUINTO</th>
					<th>SEXTO</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>Año Escolar</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Literal Año Anterior</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>

		</table>

		<p><b><u>2.-DATOS DEL REPRESENTANTE:</u></b></p>

		<p>NOMBRES Y APELLIDOS: <u>__<?php echo $data['nombreCompletoREB'] ?>__</u></p>

		<div>
			<p>FECHA DE NAC.: <u>__<?php echo $data['fechaNacimientoREB'] ?>__</u></p>
			<p>C.I.N°: <u>__<?php echo $data['cedulaREB'] ?>__</u></p>
			<p>EDAD: <u>__<?php echo $data['edadREB'] ?>__</u></p>
		</div>

		<div>
			<p>GRADOS DE INSTRUCCIÓN: <u>__<?php echo $data['gradoInstruccionREB'] ?>__</u></p>
			<p>OCUPACIÓN: <u>__<?php echo $data['ocupacionREB'] ?>__</u></p>
		</div>

		<div>
			<p>LUGAR DE TRABAJO: <u>__<?php echo $data['lugarTrabajoREB'] ?>__</u></p>
			<p>TELÉFONO: <u>__<?php echo "+" . $data['codigoTelREB'] . "-" . $data['telefonoREB']; ?>__</u></p>
		</div>

		<div>
			<p>DIRECCIÓN DE DOMICILIO: <u>__<?php echo $data['direccionDomicilioREB'] ?>__</u></p>
			<p>PARENTESCO: <u>__<?php echo $data['parentescoREB'] ?>__</u></p>
		</div>

		<p>EN CASO DE NO SER EL REPRESENTANTE LEGAL QUIEN PUEDE SUSTITUIRLA: <u>__<?php echo $data['rSustitutoEB'] ?>__</u></p>

		<div>
			<p>FECHA DE NACIMIENTO: <u>__<?php echo $data['fechaNacimientoRSEB'] ?>__</u></p>
			<p>C.I.N°: <u>__<?php echo $data['cedulaRSEB'] ?>__</u></p>
		</div>

		<div>
			<p>DIRECCIÓN DE HABITACIÓN: <u>__<?php echo $data['direccionHabitacionRSEB'] ?>__</u></p>
			<p>TELÉFONO: <u>__<?php echo "+" . $data['codigoTelRSEB'] . "-" . $data['telefonoRSEB']; ?>__</u></p>
		</div>

		<p><b>3.-FUNCIONARIO RESPONSABLE DE LA INSCRIPCIÓN:</b></p>

		<!-- A ESTA TABLA LE VA A HACER LO MISMO QUE LA OTRA, OSEA SOLO EL DISEÑO XQ AJA TENGO QUE HACER LO DEMAS PRIMERO, AUNQUE AQUI MUESTRO ALGUNOS DATOS QUE LOS PUSE AHI XQ UD DEBE HACER QUE DONDE VA EL ESPACIO PARA LA FIRMA SE MUESTRE LA CONFIRMACION, LA CONFIRMACION SE MOSTRARA CON 0 Y 1, PERO UD DEBE HACER QUE SI ES 0 SE MUESTRE UNA X Y SI UNO SE MUESTRE UNA PALOMITA DE CHECHKED, ESA CONFIRMACION LA USAMOS PARA QUE AL MOMENTO DE REGISTRAR AL ESTUDIANTE NO HAGAN FALTA FIRMAS DIGITALES SINO Q SOLO MARQUE SI ES EL RESPONSABLE O NO, ENTONCES EN CADA ESPACIO DONDE VA LA FIRMA QUEDARIA LA X O LA PALOMITA Y AL LADO TODO EL ESPACIO DONDE DEBERIA FIRMAR EL RESPONSABLE. -->
		<table border="2">
			<thead>
				<tr>
					<th></th>
					<th>NOMBRES Y APELLIDOS</th>
					<th>FECHA</th>
					<th>FIRMA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td><?php echo $data['nombreCompletoPersonal'] . " - " . $data['nombreCargo'] ?></td>
					<td><?php echo $data['fecha'] ?></td>
					<td><?php echo $data['confirmResponsableInsEB'] ?></td>
				</tr>
				<tr>
					<td>2</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>3</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>4</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>5</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>6</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>

		<p>OBSERVACIONES: <u>
			<?php
				if ($data['observacionesEB'] != "") {
					echo "__" . $data['observacionesEB'] . "__";
				} else {
					echo "______________________________";
				}
			 ?>
				
		</u></p>

	</div>

</div>
