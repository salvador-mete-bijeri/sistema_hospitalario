<?php


require '../conexion/conexion.php';


// primero capturamos el id del personal atravez de la sesion

session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}



$usuario=$_SESSION['usuario'];



$sql1= " SELECT dip_personal from usuarios where nombre_usuario='$usuario' ";

$resultado =mysqli_query($conn,$sql1);

$fila= mysqli_fetch_assoc($resultado);

$personal= $fila['dip_personal'];





$idpaciente = $conn->real_escape_string($_POST['doc']);
$peso = $conn->real_escape_string($_POST['peso']);
$temperatura = $conn->real_escape_string($_POST['temperatura']);
$presion_arterial = $conn->real_escape_string($_POST['presion_arterial']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$precio = $conn->real_escape_string($_POST['precio']);
$detalle_conculta=2;




$sql= "INSERT INTO consultas (peso,temperatura,presion_arterial,motivo, fecha, hora,dip,id_detalle_consulta,dip_personal,precio)
VALUES ('$peso','$temperatura','$presion_arterial','$motivo','$fecha','$hora',$idpaciente, $detalle_conculta,$personal,$precio)";


if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: urgencias.php?mensaje=insertado'); 






?>








?>