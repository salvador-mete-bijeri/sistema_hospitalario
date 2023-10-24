<?php


require '../conexion/conexion.php';

$id_prueba = $conn->real_escape_string($_POST['id_prueba']);
$resultado =$conn->real_escape_string($_POST['resultado']);
$estado=1;


$sql= "UPDATE  prueba SET resultado='$resultado',estado='$estado' WHERE id_prueba=$id_prueba";


if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: index.php?mensaje=insertado'); 






?>