<?php



require '../conexion/conexion.php';
$id_cita =$conn->real_escape_string($_POST['id_cita']);



$sql= "SELECT * FROM citas WHERE id_cita=$id_cita LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>