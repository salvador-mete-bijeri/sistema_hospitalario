<?php


require '../conexion/conexion.php';

$sql_hospital= " SELECT * FROM hospital";

$resultado_hospital= mysqli_query($conn,$sql_hospital);
$fila= mysqli_fetch_assoc($resultado_hospital);

$id_hospital= $fila['id_hospital'];

$nombre_sala = $conn->real_escape_string($_POST['nombre']);



    $sql= "INSERT INTO salas (nombre_sala,id_hospital)
    VALUES ('$nombre_sala','$id_hospital')";
   
    if($conn->query($sql)){
        $id=$conn->insert_id;
    }else{
        echo "error de insersion";
    }
    
    header('Location: salas.php'); 

















?>