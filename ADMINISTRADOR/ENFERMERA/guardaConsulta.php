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







date_default_timezone_set('America/Mexico_City');

$fecha_actual = getdate();



 $fecha_actual_completa = $fecha_actual['year'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['mday'];



$idpaciente = $conn->real_escape_string($_POST['doc']);
$peso = $conn->real_escape_string($_POST['peso']);
$temperatura = $conn->real_escape_string($_POST['temperatura']);
$presion_arterial = $conn->real_escape_string($_POST['presion_arterial']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$precio = $conn->real_escape_string($_POST['precio']);
$tension = $conn->real_escape_string($_POST['tension']);
$detalle_conculta=1;
$detalle_conculta3=3;

$sql1="SELECT * FROM pacientes WHERE dip=$idpaciente";
$resultado1=mysqli_query($conn,$sql1);
$fila1=mysqli_fetch_assoc($resultado1);

$fecha_nacimiento=$fila1['fecha_nacimiento'];


$datetime1=date_create($fecha_actual_completa);
$datetime2=date_create($fecha_nacimiento);
$contador= date_diff($datetime1, $datetime2);
$differenceFormat= '%a';

$dias= $contador->format($differenceFormat);

if($dias>2920){

  
$sql= "INSERT INTO consultas (peso,temperatura,presion_arterial,motivo, fecha, hora,dip,id_detalle_consulta,precio,dip_personal,tension)
VALUES ('$peso','$temperatura','$presion_arterial','$motivo','$fecha','$hora',$idpaciente, $detalle_conculta,$precio,$personal,'$tension')";





if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: consultas.php?mensaje=insertado'); 

}else{

  $sql= "INSERT INTO consultas (peso,temperatura,presion_arterial,motivo, fecha, hora,dip,id_detalle_consulta,precio,dip_personal,tension)
VALUES ('$peso','$temperatura','$presion_arterial','$motivo','$fecha','$hora',$idpaciente, $detalle_conculta3,$precio,$personal,'$tension')";





if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: consultas.php?mensaje=insertado'); 

}









?>