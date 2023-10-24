<?php

require '../conexion/conexion.php';


$id_consulta = $conn->real_escape_string($_POST['id_consulta']);
$dip = $conn->real_escape_string($_POST['dip']);
$peso = $conn->real_escape_string($_POST['peso']);
$temperatura = $conn->real_escape_string($_POST['temperatura']);
$presion_arterial = $conn->real_escape_string($_POST['presion_arterial']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$tension = $conn->real_escape_string($_POST['tension']);



$sql= "UPDATE  consultas SET peso='$peso',temperatura='$temperatura',presion_arterial='$presion_arterial',fecha='$fecha',hora='$hora',
dip='$dip',tension='$tension' WHERE id_consulta=$id_consulta";


if($conn->query($sql)){
   
}

header('Location: urgencias.php?mensaje=actualizado');   



?>