<?php

require '../conexion/conexion.php';


$id_cita = $conn->real_escape_string($_POST['idcita']);
$motivo = $conn->real_escape_string($_POST['motivo']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);

$sql_hora= "SELECT * FROM citas where hora='$hora'";
$resultado_hora= mysqli_query($conn,$sql_hora);
$fila_hora= mysqli_fetch_assoc($resultado_hora);

$hora_filtro= $fila_hora['hora'];
$fecha_filtro= $fila_hora['fecha'];
$dip_filtro= $fila_hora['dip'];



if($hora==$hora_filtro){
    
    header('Location: citas.php?mensaje=ocupada');

}else{

    $sql= "UPDATE  citas SET hora='$hora',fecha='$fecha',motivo='$motivo' WHERE id_cita=$id_cita";


if($conn->query($sql)){
   
}

header('Location: citas.php?mensaje=actualizado'); 


}


  



?>