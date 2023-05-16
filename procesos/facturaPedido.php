<?php  
require "../BD/conexion.php";
require "../assets/fpdf/fpdf.php";


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/logo.jpg',150,15,40);
    

    // Arial bold 15
    $this->SetFont('Arial','B',30);
    // Movernos a la derecha
    
  	// FACTURA
    $this->Ln(15);
    $this->Cell(10);
    $this->Cell(30,10,'FACTURA',0,0,'C');


    // DATOS DEL NEGOCIO
    $this->SetFont('Arial','B',13);
    $this->Ln(15);
    $this->Cell(10);
    $this->Cell(30,10,'Pasteles La Primavera',0,0,'C');

    $this->SetFont('Arial','',11);
    $this->Ln(5);
    $this->Cell(30,10,'Calle La Primavera',0,0,'');
    $this->Ln(5);
    $this->Cell(30,10,'3103 Bocono Estado Trujillo',0,0,'');
}



function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

require "../BD/conexion.php";
$id = $_GET['id'];
$consulta  = $conexion->prepare('SELECT * FROM ventas WHERE id_venta = :id');
$consulta->execute(array(
	':id'=>$id
));
$resultado = $consulta->fetch();


$pdf->Ln(30);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(118,10,"Facturar A:",1,0,"",0);
$pdf->Cell(70,10,"Fechas:",1,0,"",0);




$pdf->Ln(6);
$pdf->SetFont('Arial','B',11);
$pdf->Ln(5);
$pdf->Cell(118,10, "Nombre: " ,0,0,"",0);
$pdf->Cell(118,10, "Fecha Pedido: " ,0,0,"",0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(118,10, $resultado['nombre_cliente'] ,0,0,"",0);
$pdf->Cell(118,10, $resultado['fecha_pago'] ,0,0,"",0);



$pdf->Ln(6);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(118,10,"Direccion:",0,0,"",0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(118,10, $resultado['direccion_cliente'] ,0,0,"",0);


$pdf->Ln(6);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(118,10,"Cedula:",0,0,"",0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(118,10,$resultado['cedula_cliente'],0,0,"",0);



$pdf->Ln(6);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(118,10,"Telefono:",0,0,"",0);
$pdf->SetFont('Arial','',11);
$pdf->Ln(5);
$pdf->Cell(118,10,$resultado['telefono_cliente'],0,0,"",0);




$pdf->Ln(15);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(80,3,"------------------------------------------------------------------------------------------------------------------------------------------------",0,0,"",0);

$pdf->Ln(2);
$pdf->Cell(50,10,"Descripcion De Venta",0,0,"C",0);
$pdf->Cell(230,10,"Importe $",0,0,"C",0);
$pdf->Ln(8);


$pdf->Cell(80,3,"------------------------------------------------------------------------------------------------------------------------------------------------",0,0,"",0);


$pdf->Ln(7);
$pdf->Cell(120,8,"Servicio Privado La Primavera",0,0,"",0);
$pdf->Cell(87,10,$resultado['monto_pago'],0,0,"C",0);

$pdf->Ln(60);
$pdf->Cell(120,10,"",0,0,"",0);
$pdf->Cell(30,10,"Sub Total $",0,0,"C",0);
$pdf->Cell(25,10,$resultado['monto_pago'],1,0,"C",0);

$pdf->Ln(15);
$iva = ($resultado['monto_pago'] * 0.12);
$pdf->Cell(120,10,"",0,0,"",0);
$pdf->Cell(30,10,"IVA 12% $",0,0,"C",0);
$pdf->Cell(25,10, $iva ,1,0,"C",0);


$pdf->Ln(15);
$total = $resultado['monto_pago'] + $iva;
$pdf->Cell(120,10,"",0,0,"",0);
$pdf->Cell(30,10,"Total $",0,0,"C",0);
$pdf->Cell(25,10,$total,1,0,"C",0);





$pdf->Output();

?>