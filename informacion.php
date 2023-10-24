<?php 
require 'conexion/conexion.php';


// ahora verificamos si ya hay un administrador



$usuarios=" SELECT * FROM usuarios";

$resultado_usuarios=mysqli_query($conn,$usuarios);

$row_usuarios= $resultado_usuarios->num_rows;

if($row_usuarios<1){
   header('Location: registro_hospital.php');
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

    <title>informacion</title>
</head>
<body>

<div class="container-fluid bg-danger mb-5">
    <div class="row">
      <div class="col-md">
        <header class="py-3 ">
            <h6 class="text-center text-light">AVISO <span></span></h6>
        </header>
      </div>
    </div>
</div>





<div class="container mt-5">
    <div class="row justify-content-center">
       




        <div class="col-md-7">
           

        <div class="card">
            <div class="card-header text-center">
                 gracias por su comprension!
            </div>


               <h2 class="text-center">PORFAVOR PONTE EN CONTACTO CON EL ADMINISTRADOR +240 222478702</h2> 
                
               <div class="row ">
               <div class="col-md-12 justify-content-center">
               <a href="login.php" class="btn btn-danger text-center">VOLVER</a>
               </div>
              
               </div>
               

           
        </div>

        </div>

    </div>
</div>














    

<footer class="container-fluid bg-danger fixed-bottom">
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