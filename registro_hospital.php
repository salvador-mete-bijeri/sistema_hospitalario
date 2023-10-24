<?php 
require 'conexion/conexion.php';


// ahora verificamos si ya hay un administrador



$usuarios=" SELECT * FROM usuarios";

$resultado_usuarios=mysqli_query($conn,$usuarios);

$row_usuarios= $resultado_usuarios->num_rows;

if($row_usuarios>1){
   header('Location: login.php');
}




$consulta=" SELECT * FROM hospital";

$resultado_consulta=mysqli_query($conn,$consulta);




$row_hospital= $resultado_consulta->num_rows;

if($row_hospital>0){

    header('Location: registro_personal.php');
}






?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    
       <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link rel="stylesheet" href="../dist/css/design/mdb.min.css">

    <title>Registro</title>
</head>
<body>

<div class="container-fluid bg-primary">
    <div class="row">
      <div class="col-md">
        <header class="py-3 ">
            <h6 class="text-center text-light">PORFAVOR REGISTRE TU ENTIDAD HOSPITALARIA <span>paso 1/3</span></h6>
        </header>
      </div>
    </div>
</div>





<div class="container mt-5">
    <div class="row justify-content-center">
       




        <div class="col-md-7">
           

        <div class="card bg-primary text-white">
            <div class="card-header">
                Registro
            </div>


            <form action="ENFERMERA/insertar_hospital.php" method="post" enctype="multipart/form-data">


                    <div class="d-flex flex-row justify-content-center">


                    <div class="p-2 col-lg-5">
                            <label for="logo" class="form-label">LOGO</label>
                            <input type="file" class="form-control" name="logo" id="logo"  required accept="image/jpeg" >

                        </div>

                    <div class="p-2 col-lg-5">
                            <label for="nombre" class="form-label">NOMBRE</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>

                        </div>





                       

                       


                    </div>

                    <div class="d-flex flex-row justify-content-center">

                    <div class="p-2 col-lg-5">
                            <label for="telefono" class="form-label">TELEFONO</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="nombre" class="form-label">DIRECCION</label>
                            <input type="txt" class="form-control" name="direccion" id="direccion" placeholder="direccion" required>
                        </div>


                        

                       

                    </div>

                    <div class="d-flex flex-row justify-content-center">
                       

                    <div class="p-2 col-lg-5">

                    <label for="horario" class="form-label">HORARIO</label>
                            <input type="text" class="form-control" name="horario" id="horario" placeholder="horario" required>
                           
                        </div>


                        <div class="p-2 col-lg-5">
                            <label for="email" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                        </div>


                
                    </div>

                    

                   

                   

                    <div class="row justify-content-center ">
                        <div class="col-auto  m-3">

                            
                            <button type="submit" class="btn btn-success" >ENVIAR </button>

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
 <!-- MDB -->
 <script
  type="text/javascript"
  src="../dist/js/design/mdb.min.js"
></script>
</body>
</html>