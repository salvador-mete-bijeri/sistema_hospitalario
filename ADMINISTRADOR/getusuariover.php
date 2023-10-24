<?php


require '../conexion/conexion.php';
$id_usuario =$conn->real_escape_string($_POST['id_usuario']);



$sql= "SELECT `usuarios`.`id_usuario`, `usuarios`.`nombre_usuario`, `usuarios`.`dip_personal`, `roles`.* FROM `usuarios` LEFT JOIN `roles` ON `usuarios`.`id_rol` = `roles`.`id_rol` WHERE id_usuario=$id_usuario LIMIT 1";
$resultado = $conn ->query($sql);





$rows= $resultado->num_rows;

$paciente=[];

if($rows >0){
$paciente = $resultado->fetch_array();


}


echo json_encode($paciente, JSON_UNESCAPED_UNICODE);





?>