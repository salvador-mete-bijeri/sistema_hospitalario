<?php

require '../conexion/conexion.php';
$id_consulta =$conn->real_escape_string($_POST['dip']);


$sql= "SELECT peso, temperatura,presion_arterial,motivo,fecha,hora,dip from consultas WHERE dip=$id_consulta LIMIT 1";

// $sql= "SELECT peso, temperatura, presion_arterial, motivo,fecha FROM consultas  WHERE idconsulta=$idconsulta LIMIT 1";
$resultado = $conn ->query($sql);

$rows= $resultado->num_rows;

$consulta=[];

if($rows >0){
$consulta = $resultado->fetch_array();


}


echo json_encode($consulta, JSON_UNESCAPED_UNICODE);





?>