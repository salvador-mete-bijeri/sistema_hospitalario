<?php

require '../conexion/conexion.php';


$id_ingreso = $conn->real_escape_string($_POST['id_ingreso']);
$dip = $conn->real_escape_string($_POST['dip']);
$hora_ingreso = $conn->real_escape_string($_POST['hora_ingreso']);
$fecha_ingreso = $conn->real_escape_string($_POST['fecha_ingreso']);
$numero_cama = $conn->real_escape_string($_POST['numero_cama']);
$sala_nombre1 = $conn->real_escape_string($_POST['sala']);


$sql_ingreso= "SELECT * FROM ingresos where estado=0";
$resultado_ingreso= mysqli_query($conn,$sql_ingreso);
$fila_ingreso= mysqli_fetch_assoc($resultado_ingreso);

$sala= $fila_ingreso['id_sala'];
$cama_filtro= $fila_ingreso['numero_cama'];
$dip_filtro= $fila_ingreso['dip'];

$sql_ingreso2= "SELECT * FROM salas where id_sala=$sala";
$resultado_ingreso2= mysqli_query($conn,$sql_ingreso2);
$fila_ingreso2= mysqli_fetch_assoc($resultado_ingreso2);
$sala_nombre= $fila_ingreso2['nombre_sala'];

if($sala_nombre1==$sala_nombre  and $cama_filtro==$cama){
    
    header('Location: ingresos.php?mensaje=ocupada');

}else{

    $sql= "UPDATE  ingresos SET hora='$hora_ingreso',fecha='$fecha_ingreso',numero_cama='$numero_cama' WHERE id_ingreso=$id_ingreso";


if($conn->query($sql)){
   
}

header('Location: ingresos.php?mensaje=actualizado'); 


}


  



?>