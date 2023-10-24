<?php


require '../conexion/conexion.php';




$dip_personal = $conn->real_escape_string($_POST['dip_personal']);
$nombe_usuario = $conn->real_escape_string($_POST['nombre_usuario']);
$password_usuario = $conn->real_escape_string($_POST['password']);
$rol = $conn->real_escape_string($_POST['rol']);


$passwordHash = password_hash($password_usuario, PASSWORD_DEFAULT);


$sql= "INSERT INTO usuarios (nombre_usuario,password_usuario,id_rol,dip_personal)
VALUES ('$nombe_usuario','$passwordHash','$rol','$dip_personal')";





if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: ../login.php'); 








exit;













?>