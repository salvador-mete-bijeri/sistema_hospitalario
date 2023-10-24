<?php


require '../conexion/conexion.php';
$dip_personal =$conn->real_escape_string($_POST['dip_personal']);



$sql= "SELECT * FROM personal where dip_personal=$dip_personal";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>