
<?php


$host='127.0.0.1';
$user='root';
$pass='';
$db='hospital_baney';

$conn= new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("eror de conexion" . $conn->connect_error);
}






?>