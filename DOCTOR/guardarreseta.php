<?php



require '../conexion/conexion.php';

$idconsulta = $conn->real_escape_string($_POST['id_consulta']);
$dip = $conn->real_escape_string($_POST['dip']);
$reseta = $conn->real_escape_string($_POST['receta']);
$instrucciones = $conn->real_escape_string($_POST['instrucciones']);

 // obteniedo la hora y la fecha actual


 date_default_timezone_set('America/Mexico_City');

 $fecha_actual = getdate();
 

 
  $fecha_actual_completa = $fecha_actual['year'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['mday'];


 $sql="INSERT INTO receta (descripcion_receta,id_consulta,dip,instrucciones_receta,fecha)
VALUES ('$reseta','$idconsulta','$dip','$instrucciones','$fecha_actual_completa')";
 
if($conn->query($sql)){
    $id=$conn->insert_id;
}else{
    echo "error de insersion";
}

header('Location: recetas.php?mensaje=insertado');



       
                         
                 
                
 




?>