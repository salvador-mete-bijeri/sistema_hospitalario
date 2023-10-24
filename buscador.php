<?php


require 'conexion/conexion.php';

$sql3= "SELECT * FROM consultas ORDER by idconsulta DESC LIMIT 1";
$resultado3= mysqli_query($conn,$sql3);

$fila3= mysqli_fetch_assoc($resultado3);

//var_dump($fila) . "<br>";

$idconsulta= $fila3['idconsulta'];



echo $idconsulta;
//echo $fila['idpaciente'];

?>

