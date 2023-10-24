<?php

require '../conexion/conexion.php';



$dip = $conn->real_escape_string($_POST['dip']);

$sql= "DELETE FROM pacientes WHERE dip=$dip";


if($conn->query($sql)){
   
}

header('Location: index.php'); 

?>