<?php

require '../conexion/conexion.php';



$id_tipo_prueba = $conn->real_escape_string($_POST['id_tipo_prueba']);

$sql= "DELETE FROM tipo_prueba WHERE id_tipo_prueba=$id_tipo_prueba";


if($conn->query($sql)){
   
}

header('Location: tipo_prueba.php'); 

?>