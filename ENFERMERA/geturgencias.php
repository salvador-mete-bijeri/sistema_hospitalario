<?php

require '../conexion/conexion.php';
$idconsulta =$conn->real_escape_string($_POST['idconsulta']);

$sql= "SELECT idpaciente, nombre, apellidos,edad,dip FROM pacientes WHERE idpaciente=$idpaciente LIMIT 1";
$resultado = $conn ->query($sql);

$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>