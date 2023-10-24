<?php



require '../conexion/conexion.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);
$genero = $conn->real_escape_string($_POST['genero']);
$dip = $conn->real_escape_string($_POST['dip']);
$direccion = $conn->real_escape_string($_POST['direccion']);
$email = $conn->real_escape_string($_POST['email']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$tutor = $conn->real_escape_string($_POST['tutor']);
$fecha_registro = $conn->real_escape_string($_POST['fecha_registro']);

$sql1= "SELECT * FROM pacientes WHERE dip=$dip";
$resultado1=mysqli_query($conn,$sql1);
$fila=mysqli_fetch_assoc($resultado1);

$row_hospital= $resultado1->num_rows;

if($row_hospital>0){


    header('Location: index.php?mensaje=igual'); 

   
}




$sql_hospital= "SELECT * FROM hospital";
$resultado_hospital=mysqli_query($conn,$sql_hospital);
$fila_hospital=mysqli_fetch_assoc($resultado_hospital);

$id_hospital= $fila_hospital['id_hospital'];



$sql= "INSERT INTO pacientes (nombre,apellidos,fecha_nacimiento,genero,dip,direccion,email,tel,tutor,fecha_registro,id_hospital)
VALUES ('$nombre','$apellidos','$fecha_nacimiento','$genero','$dip','$direccion','$email','$telefono','$tutor','$fecha_registro','$id_hospital')";

if($conn->query($sql)){
    $id=$conn->insert_id;
}

header('Location: index.php?mensaje=insertado'); 








?>