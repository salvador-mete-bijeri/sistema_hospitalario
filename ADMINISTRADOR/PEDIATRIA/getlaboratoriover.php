<?php

require '../conexion/conexion.php';
$idconsulta =$conn->real_escape_string($_POST['idpaciente']);



$sql= "SELECT `prueba`.`id_prueba`, `pacientes`.`dip`, `tipo_prueba`.`nombre_prueba` FROM `prueba` LEFT JOIN `pacientes` ON `prueba`.`id_paciente` = `pacientes`.`id_paciente` LEFT JOIN `tipo_prueba` ON `prueba`.`id_tipo_prueba` = `tipo_prueba`.`id_tipo_prueba`  WHERE id_prueba=$idconsulta  LIMIT 1";

// $sql= "SELECT peso, temperatura, presion_arterial, motivo,fecha FROM consultas  WHERE idconsulta=$idconsulta LIMIT 1";
$resultado = $conn ->query($sql);

$rows= $resultado->num_rows;

$consulta=[];

if($rows >0){
$consulta = $resultado->fetch_array();


}


echo json_encode($consulta, JSON_UNESCAPED_UNICODE);





?>