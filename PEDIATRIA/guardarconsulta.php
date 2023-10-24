<?php



require '../conexion/conexion.php';

$idconsulta = $conn->real_escape_string($_POST['idconsulta']);
$observacion = $conn->real_escape_string($_POST['observaciones']);
$fecha = $conn->real_escape_string($_POST['fecha']);
$activo = $conn->real_escape_string($_POST['activo']);
$estado=0;


if($activo=="selecciona"){

    echo 'porfavor selecciona alguna accion';
   
}else{

    if($activo=="LABORATORIO"){
        

        $sql1="SELECT * FROM laboratorio where idconsulta=$idconsulta";
        $resultado1=mysqli_query($conn,$sql1);

      

        if($resultado1->num_rows){
            echo "ESTE REGISTRO YA TIENE RESULTADOS";

        }else{


            $sql= "UPDATE  consultas SET observaciones='$observacion',activo='$activo' WHERE idconsulta=$idconsulta";
            $resultado=mysqli_query($conn,$sql);
    
            $sql2="INSERT INTO laboratorio (detalles_doctor,fecha,idconsulta,activo)
            VALUES ('$observacion','$fecha',$idconsulta,$estado)";
             $resultado2=mysqli_query($conn,$sql2);
    
             if($resultado==true && $resultado2==true){
                     
                header('Location: doctor.php');  
             }else{
                echo 'error al insertar registros';
             }
    
        }
    
        }





        elseif($activo=="RECETA"){
        

            $sql3="SELECT * FROM receta where idconsulta=$idconsulta";
            $resultado3=mysqli_query($conn,$sql3);
    
            if($resultado3->num_rows){
                echo "ESTE REGISTRO YA TIENE UNA RECETA";
    
            }else{
    
    
                $sql= "UPDATE  consultas SET observaciones='$observacion',activo='$activo' WHERE idconsulta=$idconsulta";
                $resultado=mysqli_query($conn,$sql);
        
                $sql2="INSERT INTO receta (detalles_receta,fecha,idconsulta)
                VALUES ('$observacion','$fecha',$idconsulta)";
                 $resultado2=mysqli_query($conn,$sql2);
        
                 if($resultado==true && $resultado2==true){
                         
                    header('Location: doctor.php');  
                 }else{
                    echo 'error al insertar registros';
                 }
        
            }
        
    
    
            }






            elseif($activo=="TRASLADO"){
        

                $sql4="SELECT * FROM traslado where idconsulta=$idconsulta";
                $resultado4=mysqli_query($conn,$sql4);
        
                if($resultado4->num_rows){
                    echo "ESTE REGISTRO YA TIENE UNA DESCRIPCION";
        
                }else{
        
        
                    $sql= "UPDATE  consultas SET observaciones='$observacion',activo='$activo' WHERE idconsulta=$idconsulta";
                    $resultado=mysqli_query($conn,$sql);
            
                    $sql2="INSERT INTO traslado (detalles_traslado,fecha,idconsulta)
                    VALUES ('$observacion','$fecha',$idconsulta)";
                     $resultado2=mysqli_query($conn,$sql2);
            
                     if($resultado==true && $resultado2==true){
                             
                        header('Location: doctor.php');  
                     }else{
                        echo 'error al insertar registros';
                     }
            
                }
            
        
        
                }
    




       
}




?>