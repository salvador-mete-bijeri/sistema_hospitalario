<?php

include 'conexion/conexion.php';


$usuario= "Mh123";
$password= '12345';
$id_rol=4;
$id_personal=174708;



$passwordHash = password_hash($password, PASSWORD_DEFAULT);


$sql= "INSERT INTO usuarios (nombre_usuario,password_usuario,id_rol,dip_personal)
          VALUES ('$usuario','$passwordHash','$id_rol','$id_personal')";

          $resultado=mysqli_query($conn,$sql);

          if($resultado=true){
            echo 'registro insertado gracias';
          }



?>









<?php  while($row_consultas = $consultas->fetch_assoc()){  ?>





  <tr>
  <td><img  alt="escudo del <?php echo $row_consultas['nombre']; ?>" title="escudo del <?php echo $row_consultas['nombre']; ?> "  src="resources/img/escudos/ <?= $row_consultas['id']; ?>.png " width="40" height="30"> </td>
  
  <td> <?= $row_consultas['nombre']; ?></td>
  
 

  </tr>


<?php } ?>