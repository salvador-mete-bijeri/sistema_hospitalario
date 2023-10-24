<?php



require '../conexion/conexion.php';
$id_consulta =$conn->real_escape_string($_POST['id_consulta']);



$sql= "SELECT * FROM consultas WHERE id_consulta=$id_consulta LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>