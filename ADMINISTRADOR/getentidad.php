<?php


require '../conexion/conexion.php';
$id_hospital =$conn->real_escape_string($_POST['id_hospital']);



$sql= "SELECT * FROM hospital where id_hospital=$id_hospital";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>