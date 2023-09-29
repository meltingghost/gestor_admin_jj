<?php 

	require_once "../database/conexion.php";

	$idLiteral = (isset($_POST['idLiteralEdit'])) ? $_POST['idLiteralEdit'] : "";
	$literalOld = (isset($_POST['letraLiteralOld'])) ? $_POST['letraLiteralOld'] : "";
	$literal = (isset($_POST['letraLiteralEdit'])) ? $_POST['letraLiteralEdit'] : "";
	$descripcion = (isset($_POST['descripcionLiteralEdit'])) ? $_POST['descripcionLiteralEdit'] : "";

	if ($literal != $literalOld) {
		$query = mysqli_query($conectar, "SELECT * FROM literal WHERE letraLiteral = '$literal'");
		$nr = mysqli_num_rows($query);

		if($nr==1){
			$data = 2;
		}else{
			$sql = "UPDATE literal SET letraLiteral='$literal', descripcionLiteral='$descripcion' WHERE id_literal = '$idLiteral'";
			$resultado = $conectar->query($sql);

			if($resultado){
				$data= 1;
			}else{
				$data= 3;
			}
		}
	}else{
		$sql = "UPDATE literal SET letraLiteral='$literal', descripcionLiteral='$descripcion' WHERE id_literal = '$idLiteral'";
		$resultado = $conectar->query($sql);

		if($resultado){
			$data= 1;
		}else{
			$data= 3;
		}
	}

	print json_encode($data);	

?>