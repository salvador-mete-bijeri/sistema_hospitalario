<?php

include 'PruebaV.php';

require '../conexion/conexion.php';


$id_prueba=$_GET['id_prueba'];


$sql="SELECT * FROM prueba where id_prueba=$id_prueba limit 1";
$resultado=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($resultado);

$id_tipo_prueba= $row['id_tipo_prueba'];

$sql3="SELECT * FROM tipo_prueba where id_tipo_prueba=$id_tipo_prueba limit 1";
$resultado3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($resultado3);


// $fila=mysqli_fetch_assoc($resultado);

// imprimimos los datos del paciente segun el dip
$sql1="SELECT * FROM prueba";
$resultado1=mysqli_query($conn,$sql1);
$fila1=mysqli_fetch_assoc($resultado1);
$dip=$fila1['dip'];

$sql2="SELECT * FROM pacientes where dip=$dip limit 1";
$resultado2=mysqli_query($conn,$sql2);
$fila2=mysqli_fetch_assoc($resultado2);




$pdf= new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();



// LINEA SEPARADORA
$pdf->SetFillColor(0,0,0);
$pdf->SetX(20);
$pdf->cell(100,.2,'',1,1,'L',1);
$pdf->Ln(2);

// color a las celdas
$pdf->SetFillColor(232,232,232);

$pdf->SetFont('Arial','',13);
$pdf->SetX(20);
$pdf->cell(30,6,'PACIENTE',0,1,'L',1);
$pdf->Ln(2);



$pdf->SetFont('Arial','',10);
// encabezados



 $pdf->SetX(20);
 $pdf->cell(30,6,'CODIGO:',0,0,'L',1);
 $pdf->cell(30,6,$fila2['dip'],0,1,'L',1);
 $pdf->SetX(20);
 $pdf->cell(30,6,'NOMBRE:',0,0,'L',1);
 $pdf->cell(30,6,$fila2['nombre'],0,1,'L',1);
 $pdf->SetX(20);
 $pdf->cell(30,6,'FECHA DE NACIMIENTO:',0,0,'L',1);
 $pdf->cell(30,6,$fila2['fecha_nacimiento'],0,1,'L',1);
 $pdf->SetX(20);
$pdf->cell(30,6,'FECHA:',0,0,'L',1);
$pdf->cell(30,6,$fila1['fecha'],0,1,'L',1);


$pdf->Ln(2);

// LINEA SEPARADORA
$pdf->SetFillColor(0,0,0);
$pdf->SetX(20);
$pdf->cell(100,.2,'',1,1,'L',1);
$pdf->Ln(10);


// TITULO
$pdf->SetFillColor(232,232,232);
$pdf->SetTextColor(0,0,0);
$pdf->SetX(80);
$pdf->SetFont('Arial','',13);
$pdf->cell(100,.2,'PRUEBAS DE LABORATORIO',0,1,'L',1);


$pdf->Ln(20);







/// AQUI IMPRIMIMOS EL RESULTADO





//aqui empeieza la tabla

// color a las celdas
$pdf->SetFillColor(250,250,250);


$pdf->SetFont('Arial','B',12);










// encabezados
$pdf->SetX(20);
$pdf->SetY(190);
$pdf->cell(50,6,'PRUEBA',1,1,'L',1);
$pdf->SetY(200);
$pdf->cell(50,6,$row3['nombre_prueba'],0,0,'L',1);


$pdf->SetY(190);
$pdf->SetX(70);
$pdf->cell(50,6,'RESULTADO',1,1,'C',1);
$pdf->SetY(200);
$pdf->SetX(70);
 $pdf->cell(50,6,$row['resultado'],0,1,'C',1);

 $pdf->SetY(190);
$pdf->SetX(130);
 $pdf->cell(50,6,'PRECIO',1,0,'L',1);
 $pdf->SetTextColor(255, 87, 51);
 $pdf->SetY(200);
$pdf->SetX(130);
$pdf->cell(50,6,$row3['precio'],0,1,'C',1);
$pdf->SetTextColor(0,0,0);








$pdf->Output();






?>