<?php

require '../conexion/conexion.php';



$id_receta = $conn->real_escape_string($_POST['id_receta']);

$sql= "DELETE FROM receta WHERE id_receta=$id_receta";


if($conn->query($sql)){
   
}

header('Location: recetas.php'); 

?>