<?php


require '../conexion/conexion.php';
$id_sala =$conn->real_escape_string($_POST['id_sala']);



$sql= "SELECT * FROM salas WHERE id_sala=$id_sala LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>