<?php



require '../conexion/conexion.php';
$dip =$conn->real_escape_string($_POST['dip']);



$sql= "SELECT * FROM consultas WHERE dip=$dip LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>