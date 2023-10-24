<?php


require '../conexion/conexion.php';
$id_tipo_prueba =$conn->real_escape_string($_POST['id_tipo_prueba']);



$sql= "SELECT * from tipo_prueba WHERE id_tipo_prueba=$id_tipo_prueba LIMIT 1";
$resultado = $conn ->query($sql);



$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>