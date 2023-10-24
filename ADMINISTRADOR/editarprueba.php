<?php

require '../conexion/conexion.php';

$id_tipo_prueba = $conn->real_escape_string($_POST['id_tipo_prueba']);
$nombre_prueba = $conn->real_escape_string($_POST['nombre']);
$precio = $conn->real_escape_string($_POST['precio']);


$sql= "UPDATE  tipo_prueba SET nombre_prueba='$nombre_prueba',precio='$precio' WHERE id_tipo_prueba=$id_tipo_prueba";


if($conn->query($sql)){

echo 'regisro insertado';
   
}

header('Location: tipo_prueba.php'); 



?>