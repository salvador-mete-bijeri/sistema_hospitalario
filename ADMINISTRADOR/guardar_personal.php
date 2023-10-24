<?php


require '../conexion/conexion.php';




$dip_personal = $conn->real_escape_string($_POST['dip']);
$nombre = $conn->real_escape_string($_POST['nombre']);
$apellidos = $conn->real_escape_string($_POST['apellidos']);
$fecha_nacimiento = $conn->real_escape_string($_POST['fecha_nacimiento']);

$genero = $conn->real_escape_string($_POST['genero']);

$direccion = $conn->real_escape_string($_POST['direccion']);

$correo = $conn->real_escape_string($_POST['correo']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$nacionalidad = $conn->real_escape_string($_POST['nacionalidad']);
$fecha = $conn->real_escape_string($_POST['fecha']);


$sql_personal= " SELECT * FROM personal where dip_personal='${dip_personal}' ";

$resultado_personal =mysqli_query($conn,$sql_personal);

$fila= mysqli_fetch_assoc($resultado_personal);

$dip_comparar= $fila['dip_personal'];


$sql_hospital= " SELECT * FROM hospital  ";

$resultado_hospital =mysqli_query($conn,$sql_hospital);

$fila2= mysqli_fetch_assoc($resultado_hospital);

$id_hospital= $fila2['id_hospital'];

if($dip_personal==$dip_comparar){

    header('Location: personal.php?mensaje=igual');

}else{
    


    
$sql= "INSERT INTO personal (dip_personal,nombre,apellidos,fecha_nacimiento,genero,direccion,email,telefono,nacionalidad,fecha_registro,id_hospital)
VALUES ('$dip_personal','$nombre','$apellidos','$fecha_nacimiento','$genero','$direccion','$correo','$telefono','$nacionalidad','$fecha','$id_hospital')";

if($conn->query($sql)){
    $id=$conn->insert_id;
}

header('Location: personal.php?mensaje=insertado'); 



}
















?>