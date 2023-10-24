<?php

require '../conexion/conexion.php';



$id_usuario = $conn->real_escape_string($_POST['id_usuario']);



if($id_usuario==1){

    header('Location: usuarios.php?mensaje=error');  

}else{

    $sql= "DELETE FROM usuarios WHERE id_usuario=$id_usuario";


if($conn->query($sql)){
   
}

header('Location: usuarios.php?mensaje=insertado'); 

}



?>