<?php

	// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
	require_once '../../vendor/autoload.php';

	$imprimir = "";

	if ((isset($_GET['idPersonal'])) ? $_GET['idPersonal'] : "") {
		$idObtenido = $_GET['idPersonal'];
		$imprimir = 1;
	}

	if ((isset($_GET['idEstudianteB'])) ? $_GET['idEstudianteB'] : "") {
		$idObtenido = $_GET['idEstudianteB'];
		$imprimir = 2;
	}

	if ((isset($_GET['idEstudianteI'])) ? $_GET['idEstudianteI'] : "") {
		$idObtenido = $_GET['idEstudianteI'];
		$imprimir = 3;
	}

	use Dompdf\Dompdf;

	// Introducimos HTML de prueba

	if ($imprimir == 1) {
		$html=file_get_contents_curl("http://localhost/gestor_admin_jj/vistas/datosPersonal.php?idPersonal=" . $idObtenido);
	}

	if ($imprimir == 2) {
		$html=file_get_contents_curl("http://localhost/gestor_admin_jj/vistas/datosEstudianteB.php?idEstudianteB=" . $idObtenido);
	}

	if ($imprimir == 3) {
		$html=file_get_contents_curl("http://localhost/gestor_admin_jj/vistas/datosEstudianteI.php?idEstudianteI=" . $idObtenido);
	}

	// Instanciamos un objeto de la clase DOMPDF.
	$pdf = new DOMPDF();
	 
	// Definimos el tamaño y orientación del papel que queremos.
	$pdf->set_paper("letter", "portrait");
	//$pdf->set_paper(array(0,0,104,250));
	 
	// Cargamos el contenido HTML.
	$pdf->load_html(utf8_decode($html));
	 
	// Renderizamos el documento PDF.
	$pdf->render();
	 
	// Enviamos el fichero PDF al navegador.

	if ($imprimir == 1) {
		$pdf->stream('Datos_Personal.pdf');
	}

	if ($imprimir == 2) {
		$pdf->stream('Datos_Estudiante_Basica.pdf');
	}

	if ($imprimir == 3) {
		$pdf->stream('Datos_Estudiante_Inicial.pdf');
	}

	function file_get_contents_curl($url) {
		$crl = curl_init();
		$timeout = 5;
		curl_setopt($crl, CURLOPT_URL, $url);
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
		$ret = curl_exec($crl);
		curl_close($crl);
		return $ret;
	}

?>