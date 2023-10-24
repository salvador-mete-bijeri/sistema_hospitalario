<?php

require '../conexion/conexion.php';


$id_alta = $conn->real_escape_string($_POST['id_alta']);
$dip = $conn->real_escape_string($_POST['dip']);
$hora = $conn->real_escape_string($_POST['hora']);
$fecha = $conn->real_escape_string($_POST['fecha']);



$sql= "UPDATE  altas SET hora='$hora',fecha='$fecha' WHERE id_alta=$id_alta";


if($conn->query($sql)){
   
}

header('Location: altas.php?mensaje=actualizado');   



?>