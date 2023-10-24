<?php

require '../conexion/conexion.php';


$id_ingreso = $conn->real_escape_string($_POST['id_ingreso']);
$dip = $conn->real_escape_string($_POST['dip']);
$hora_ingreso = $conn->real_escape_string($_POST['hora_ingreso']);
$fecha_ingreso = $conn->real_escape_string($_POST['fecha_ingreso']);
$numero_cama = $conn->real_escape_string($_POST['numero_cama']);


$sql= "UPDATE  ingresos SET hora='$hora_ingreso',fecha='$fecha_ingreso',numero_cama='$numero_cama' WHERE id_ingreso=$id_ingreso";


if($conn->query($sql)){
   
}

header('Location: ingresos.php?mensaje=actualizado');   



?>