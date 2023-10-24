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

date_default_timezone_set('America/Mexico_City');

$fecha_actual = getdate();



 $fecha_actual_completa = $fecha_actual['year'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['mday'];


$sql1= "SELECT * FROM hospital limit 1";
$resultado1=mysqli_query($conn,$sql1);
$fila1=mysqli_fetch_assoc($resultado1);

$id_hospital=$fila1['id_hospital'];

$sql2= "INSERT INTO personal (dip_personal,nombre,apellidos,fecha_nacimiento, genero,direccion,email,telefono,nacionalidad,id_hospital,fecha_registro)
VALUES (174708,'Salvador','Mete Bijeri','1997-02-09','M','Buena esperanza I','Salavadormete3@gmail.com','+240222478702','ecuatoguineano',$id_hospital,'$fecha_actual_completa')";

if($conn->query($sql2)){
    $id=$conn->insert_id;

//////////////////////////////////////////////////////////
    $passadmin=123456;
$passwordHash = password_hash($passadmin, PASSWORD_DEFAULT);
$id_super=174708;

$sql3= "INSERT INTO usuarios (nombre_usuario,password_usuario,id_rol,dip_personal)
VALUES ('Mh123','$passwordHash',4,$id_super)";

$resultado3=mysqli_query($conn,$sql3);




}else{
    echo 'error de insersion';
}


header('Location: ../registro_personal.php'); 






?>