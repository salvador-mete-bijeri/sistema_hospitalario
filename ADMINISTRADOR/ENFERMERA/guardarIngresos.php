<?php

require '../conexion/conexion.php';






$id_consulta= $conn->real_escape_string(($_POST['id_consulta']));
$dip = $conn->real_escape_string($_POST['dip']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$hora = $conn->real_escape_string($_POST['hora']);
$id_sala = $conn->real_escape_string($_POST['sala']);
$cama = $conn->real_escape_string($_POST['cama']);


$sql_ingreso= "SELECT * FROM ingresos where estado=0";
$resultado_ingreso= mysqli_query($conn,$sql_ingreso);
$fila_ingreso= mysqli_fetch_assoc($resultado_ingreso);

$sala= $fila_ingreso['id_sala'];
$cama_filtro= $fila_ingreso['numero_cama'];
$dip_filtro= $fila_ingreso['dip'];

if($dip_filtro!=$dip){



    if($sala==$id_sala  and $cama_filtro==$cama){
        header('Location: consultas.php?mensaje=ocupada');

    }else{

        $sql= "INSERT INTO ingresos (id_consulta,dip,id_sala,numero_cama,fecha,hora)
        VALUES ('$id_consulta','$dip','$id_sala','$cama','$fecha','$hora')";
        
        if($conn->query($sql)){
            $id=$conn->insert_id;
        }
        
        header('Location: ingresos.php?mensaje=insertado'); 

    }



}else{

    header('Location: consultas.php?mensaje=ingresado');

   
}


   























?>