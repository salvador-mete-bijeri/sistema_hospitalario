<?php

require '../conexion/conexion.php';



$id_consulta = $conn->real_escape_string($_POST['id_consulta']);

$sql= "DELETE FROM consultas WHERE id_consulta=$id_consulta";


if($conn->query($sql)){
   
}

header('Location: consultas.php'); 

?>