<?php


require '../conexion/conexion.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$precio = $conn->real_escape_string($_POST['precio']);


$sql_hospital= "SELECT * FROM hospital limit 1";
$resultado_hospital=mysqli_query($conn,$sql_hospital);
$fila_hospital=mysqli_fetch_assoc($resultado_hospital);

$id_hospital=$fila_hospital['id_hospital'];



$sql_personal= " SELECT * FROM tipo_prueba where nombre_prueba='${nombre}' ";

$resultado_personal =mysqli_query($conn,$sql_personal);

$fila= mysqli_fetch_assoc($resultado_personal);

$dip_comparar= $fila['nombre_prueba'];

if($nombre==$dip_comparar){


    echo 'Error esta analitica ya existe';





}else{

    $sql= "INSERT INTO tipo_prueba (nombre_prueba,precio,id_hospital)
    VALUES ('$nombre','$precio','$id_hospital')";
   
    if($conn->query($sql)){
        $id=$conn->insert_id;
    }else{
        header('Location: tipo_prueba.php?mensaje=error'); 
    }
    
    header('Location: tipo_prueba.php?mensaje=insertado');
    


}
















?>