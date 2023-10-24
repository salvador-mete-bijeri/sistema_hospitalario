<?php


require '../conexion/conexion.php';


// primero actualizamos la consulta atravez de su id
$id_ingreso = $conn->real_escape_string($_POST['id_consulta']);
$dip = $conn->real_escape_string($_POST['dip']);

$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$estado_ingreso=1;

$sql1= "UPDATE  ingresos SET estado='$estado_ingreso' WHERE id_ingreso=$id_ingreso";

if($conn->query($sql1)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

// ahora insertamos el alta del paciente

$sql= "INSERT INTO altas (id_ingreso,fecha,hora)
VALUES ('$id_ingreso','$fecha','$hora')";





if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: ingresos.php'); 






?>