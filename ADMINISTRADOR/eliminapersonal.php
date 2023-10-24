<?php

require '../conexion/conexion.php';



$dip_personal = $conn->real_escape_string($_POST['dip_personal']);

if($dip_personal==174708){

    header('Location: personal.php?mensaje=error');  

}else{

 $sql= "DELETE FROM personal WHERE dip_personal=$dip_personal";

if($conn->query($sql)){
   
}

header('Location: personal.php?mensaje=eliminado'); 

}



?>