<?php

require '../conexion/conexion.php';



$id_sala = $conn->real_escape_string($_POST['id_sala']);

$sql= "DELETE FROM salas WHERE id_sala=$id_sala";


if($conn->query($sql)){
   
}

header('Location: salas.php'); 

?>