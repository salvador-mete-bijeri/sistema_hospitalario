<?php


require '../conexion/conexion.php';




$dip_personal = $conn->real_escape_string($_POST['dip']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);

$genero = $conn->real_escape_string($_POST['genero']);

$direccion = $conn->real_escape_string($_POST['direccion']);

$email = $conn->real_escape_string($_POST['correo']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$nacionalidad = $conn->real_escape_string($_POST['nacionalidad']);
$fecha_registro = $conn->real_escape_string($_POST['fecha_registro']);
$hospital = $conn->real_escape_string($_POST['hospital']);



    


    
$sql= "INSERT INTO personal (dip_personal,nombre,apellidos,fecha_nacimiento,genero,direccion,email,telefono,nacionalidad,fecha_registro,id_hospital)
VALUES ('$dip_personal','$nombre','$apellidos','$fecha_nacimiento','$genero','$direccion','$email','$telefono','$nacionalidad','$fecha_registro',$hospital)";

if($conn->query($sql)){
    $id=$conn->insert_id;

    session_start();

    $_SESSION['usuario']=$_POST['dip'];
}

header('Location: ../registro_usuarios.php'); 



















?>