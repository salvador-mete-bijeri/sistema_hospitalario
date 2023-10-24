<?php


require '../conexion/conexion.php';

$id_receta = $conn->real_escape_string($_POST['id_receta']);
$receta =$conn->real_escape_string($_POST['receta']);
$instrucciones =$conn->real_escape_string($_POST['instrucciones']);



$sql= "UPDATE  receta SET descripcion_receta='$receta',instrucciones_receta='$instrucciones' WHERE id_receta=$id_receta";


if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: recetas.php?mensaje=actualizado'); 






?>