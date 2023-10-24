<?php


require '../conexion/conexion.php';





$nombre = $conn->real_escape_string($_POST['nombre']);
$direccion = $conn->real_escape_string($_POST['direccion']);
$telefono = $conn->real_escape_string($_POST['telefono']);
$email = $conn->real_escape_string($_POST['email']);
$horario = $conn->real_escape_string($_POST['horario']);






$sql= "INSERT INTO hospital (nombre,direccion,telefono,email, horario)
VALUES ('$nombre','$direccion','$telefono','$email','$horario')";


if($conn->query($sql)){
    $id=$conn->insert_id;

if($_FILES['logo']['error'] == UPLOAD_ERR_OK){
    $permitidos = array("img/jpg", "image/jpeg", "image/png");
    if(in_array($_FILES['logo']['type'], $permitidos)){


        $dir="logo";

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

header('Location: ../registro_personal.php'); 






?>