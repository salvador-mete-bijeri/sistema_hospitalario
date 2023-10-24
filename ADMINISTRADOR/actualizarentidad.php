<?php


require '../conexion/conexion.php';

$id_hospital = $conn->real_escape_string($_POST['id_hospital']);

$nombre = $conn->real_escape_string($_POST['nombre']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$direccion = $conn->real_escape_string($_POST['direccion']);
$Horario = $conn->real_escape_string($_POST['horario']);
$email = $conn->real_escape_string($_POST['email']);



$sql= "UPDATE  hospital SET nombre='$nombre',telefono='$telefono', direccion='$direccion',horario='$Horario',email='$email' WHERE id_hospital=$id_hospital";


if($conn->query($sql)){
    $id=$conn->insert_id;


    if($_FILES['logo']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        if(in_array($_FILES['logo']['type'], $permitidos)){
    
    
            $dir="../ENFERMERA/logo";
    
            $info_img=pathinfo($_FILES['logo']['name']);
            $info_img['extencion'];
    
    
            $logo= $dir .'/'.$id. '.jpg';
    
            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }
    
            if(move_uploaded_file($_FILES['logo']['tmp_name'], $logo)){
                echo 'error al enviar la imagen';
            }
        }else{
            echo 'Formato de imagen no permitido';
        }
    }
    



}else{
    echo "error de insersion";
}

header('Location: entidad.php'); 






?>