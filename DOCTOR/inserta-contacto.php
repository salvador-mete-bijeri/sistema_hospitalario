<?php

//require '../conexion/Conexion2.php';

$nombre_contacto = $_POST['nombre_contacto'] ?? '';
$numero = $_POST['numero'] ?? '';
$nombres = $_POST['nombres'] ?? [];


echo $nombres;


exit;

$conexion = new Conexion();
$db = $conexion->conectar();


function insertaNombre($nombres,$db){
    $stmt = $db->prepare('INSERT INTO prueba22(nombre) VALUES (?,?)');
    $stmt->bind_param('si',$nombres);
    return $stmt->execute();
}
$errores = [];

if (!empty($nombres)) {
    foreach ($nombres as $key => $nombre){
        if (!insertaNombre($nombres,$db)) {
        	$errores[] = $key;
        }
    }
}

if (empty($errores)) {
	echo json_encode(['respuesta' => true,'mensaje' =>'Se insertaron los datos correctamente']);
}else{
    echo json_encode(['respuesta' => false,'mensaje' =>'Hubo un problema al insertar los datos, intente más tarde']);
}







?>