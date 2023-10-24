<?php



require '../conexion/conexion.php';
$id_receta =$conn->real_escape_string($_POST['id_receta']);



$sql= "SELECT * FROM receta WHERE id_receta=$id_receta LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>