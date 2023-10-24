<?php



require '../conexion/conexion.php';
$id_ingreso =$conn->real_escape_string($_POST['id_ingreso']);



$sql= "SELECT `pacientes`.*, `ingresos`.* FROM `pacientes` , `ingresos` WHERE ingresos.id_ingreso=$id_ingreso LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>