<?php

require '../conexion/conexion.php';

$idconsulta = $conn->real_escape_string($_POST['idconsulta']);
$peso = $conn->real_escape_string($_POST['peso']);
$temperatura = $conn->real_escape_string($_POST['temperatura']);
$presion_arterial = $conn->real_escape_string($_POST['presion_arterial']);
$motivo = $conn->real_escape_string($_POST['motivo']);

$sql= "UPDATE  consultas SET peso='$peso',temperatura='$temperatura',presion_arterial='$presion_arterial',motivo='$motivo' WHERE idconsulta=$idconsulta";


if($conn->query($sql)){

echo 'regisro insertado';
   
}

header('Location: consultas.php'); 



?>