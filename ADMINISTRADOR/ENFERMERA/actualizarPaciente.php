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

$sql= "UPDATE  pacientes SET nombre='$nombre',apellidos='$apellidos',fecha_nacimiento='$fecha_nacimiento',genero='$genero',direccion='$direccion',
email='$email',tel='$telefono',tutor='$tutor',fecha_registro='$fecha_registro' WHERE dip=$dip";


if($conn->query($sql)){
   
}

header('Location: index.php?mensaje=actualizado');   



?>