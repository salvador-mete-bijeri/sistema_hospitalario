<?php

require '../conexion/conexion.php';


$id_consulta = $conn->real_escape_string($_POST['id_consulta']);
$peso = $conn->real_escape_string($_POST['peso']);
$temperatura = $conn->real_escape_string($_POST['temperatura']);
$presion_arterial = $conn->real_escape_string($_POST['presion_arterial']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$precio = $conn->real_escape_string($_POST['precio']);
$detalle_conculta=1;

$sql= "UPDATE  consultas SET peso='$peso',temperatura='$temperatura',presion_arterial='$presion_arterial',motivo='$motivo',fecha='$fecha',
hora='$hora',precio='$precio'  WHERE id_consulta=$id_consulta";


if($conn->query($sql)){
   
}

header('Location: consultas.php?mensaje=actualizado');   



?>