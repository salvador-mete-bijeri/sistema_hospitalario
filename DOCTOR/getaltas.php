<?php



require '../conexion/conexion.php';
$id_alta =$conn->real_escape_string($_POST['id_alta']);



$sql= "SELECT * FROM altas WHERE id_alta=$id_alta LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>