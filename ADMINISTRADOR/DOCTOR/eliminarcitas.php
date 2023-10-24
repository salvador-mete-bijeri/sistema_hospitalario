<?php

require '../conexion/conexion.php';



$id_cita = $conn->real_escape_string($_POST['id_cita']);


echo $id_cita;


exit;

$sql= "DELETE FROM citas WHERE id_cita=$id_cita";


if($conn->query($sql)){
   
}

header('Location: citas.php'); 

?>