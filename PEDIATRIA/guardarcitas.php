<?php



require '../conexion/conexion.php';

session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}
$personal= $_SESSION['usuario'];




$sql= "SELECT * FROM usuarios where nombre_usuario='$personal'";
$resultado= mysqli_query($conn,$sql);
$fila=mysqli_fetch_assoc($resultado);

$dip_personal=$fila['dip_personal'];

echo $dip_personal;



$dip = $conn->real_escape_string($_POST['doc']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora= $conn->real_escape_string($_POST['hora']);



$sql_hora= "SELECT * FROM citas where hora='$hora'";
$resultado_hora= mysqli_query($conn,$sql_hora);
$fila_hora= mysqli_fetch_assoc($resultado_hora);

$hora_filtro= $fila_hora['hora'];
$fecha_filtro= $fila_hora['fecha'];
$dip_filtro= $fila_hora['dip'];



if($hora==$hora_filtro){
    
    header('Location: citas.php?mensaje=ocupada');

}else{

    
$sql1= "INSERT INTO citas (dip_personal,dip,motivo,fecha,hora)
VALUES ('$dip_personal','$dip','$motivo','$fecha','$hora')";

if($conn->query($sql1)){
    $id=$conn->insert_id;
}

header('Location: citas.php?mensaje=insertado'); 



if($conn->query($sql)){
   
}

header('Location: citas.php?mensaje=actualizado'); 


}






?>