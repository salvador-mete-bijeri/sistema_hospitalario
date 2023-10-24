<?php


require '../conexion/conexion.php';

$id_sala = $conn->real_escape_string($_POST['id_sala']);
$nombre =$conn->real_escape_string($_POST['nombre']);




$sql= "UPDATE  salas SET nombre_sala='$nombre' WHERE id_sala=$id_sala";


if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: salas.php'); 






?>