<?php 
require 'conexion/conexion.php';



session_start();



// ahora verificar si hay un personal

$personal=" SELECT * FROM personal";

$resultado_personal=mysqli_query($conn,$personal);




$row_personal= $resultado_personal->num_rows;

if($row_personal<1){
    header('Location: registro_personal.php');

}else{


    // ahora verificar si hay un personal

$usuarios=" SELECT * FROM usuarios";

$resultado_usuarios=mysqli_query($conn,$usuarios);


$row_usuario= $resultado_usuarios->num_rows;

if($row_usuario > 1){
    header('Location: login.php');
    
}


}



    // cogemos el codigo del personal registrado

    $sql_personal=" SELECT dip_personal FROM personal ORDER BY dip_personal DESC limit 1";

    $resultado_personal=mysqli_query($conn,$sql_personal);
   
    $fila_personal=mysqli_fetch_assoc($resultado_personal);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <title>Registro</title>
</head>

<body>

    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-md">
                <header class="py-3 ">
                    <p class="text-center text-light">un paso mas porfavor</p>
                    <h6 class="text-center text-light">REGISTRE A UN USUARIO <span>paso 3/3</span></h6>
                </header>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <div class="row justify-content-center">





            <div class="col-md-7">


                <div class="card bg-primary text-white">
                    <div class="card-header   bg-primary">
                       <p class="text-center text-light">Credenciales de Acceso para el administrador</p> 
                    </div>


                    <form action="ENFERMERA/insertar_usuario.php" method="post" enctype="multipart/form-data">

                


<div class="d-flex flex-row justify-content-center">

<div class="p-2 col-lg-5">

<label for="dip_personal" class="form-label">CODIGO DEL PERSONAL</label>
<input type="txt" class="form-control" name="dip_personal" id="dip_personal" value="<?php   echo $_SESSION['usuario']; ?>" required readonly>
</div>

    <div class="p-2 col-lg-5">

        <label for="nombre_usuario" class="form-label">NOMBRE DE USUARIO</label>
        <input type="txt" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="NOMBRE DE USUARIO"  required>
    </div>

    

   

</div>




<div class="d-flex flex-row justify-content-center">




<div class="p-2 col-lg-5">

        <label for="nombre" class="form-label">PASSWORD</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password"  required>
    </div>


    <div class="p-2 col-lg-5">
    <label for="nombre" class="form-label">ROL</label>
    <select class="form-control"  id="rol" name="rol" required>
         <option selected value="4">ADMINISTRADOR</option>
                </select>
    </div>
    
</div>





<div class="row justify-content-center">
    <div class="col-auto py-2">

        
        <button type="submit" class="btn btn-success">ENVIAR</button>

    </div>

</div>


</form>


                </div>

            </div>

        </div>
    </div>
















    <footer class="container-fluid bg-primary fixed-bottom">
        <div class="row">
            <div class="col-md text-light text-center py-2">
                @sistema hospitalario
            </div>
        </div>
    </footer>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>