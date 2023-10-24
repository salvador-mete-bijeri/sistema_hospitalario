

<?php


require 'conexion/conexion.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){


    $usuario=mysqli_real_escape_string($conn, $_POST['usuario'] ) ;
    
    $password=mysqli_real_escape_string($conn, $_POST['password'] )  ;



    if(!$usuario){
        echo 'porfavor el usuario es necesario';
    }



    if(!$password){
        echo 'porfavor el password es obligatorio';
    }

    if($usuario!=""){
        $sql="SELECT `usuarios`.`nombre_usuario`, `usuarios`.`password_usuario`, `roles`.`nombre` FROM `usuarios` LEFT JOIN `roles` ON `usuarios`.`id_rol` = `roles`.`id_rol` where nombre_usuario='${usuario}'";
        $resultado= mysqli_query($conn,$sql);

       

     

      if($resultado->num_rows){


        // verificar si el password es corecto

        $usuario= mysqli_fetch_assoc($resultado);

        $auth= password_verify($password, $usuario['password_usuario'] );

        var_dump($auth);

        echo 'usuario verificado';

        if($auth){
            // cuando existe el usuario y la contrasena

        

        $tipo_user=$usuario['nombre'];

        // cuando el nombre de usuario existe

        if($tipo_user=="DOCTOR"){

            session_start();

            $_SESSION['usuario']=$_POST['usuario'];
           

            header('Location: DOCTOR/doctor.php');

        }


        if($tipo_user=="ENFERMERA"){
            
            session_start();

           $_SESSION['usuario']=$_POST['usuario'];

            header('Location: ENFERMERA/index.php');

        }
        if($tipo_user=="LABORATORIO"){

            session_start();

            $_SESSION['usuario']=$_POST['usuario'];
            
            header('Location: LABORATORIO/index.php');

        } 
        if($tipo_user=="ADMINISTRADOR"){

            session_start();

            $_SESSION['usuario']=$_POST['usuario'];
            
            header('Location: ADMINISTRADOR/index.php');

        }
        if($tipo_user=="PEDIATRIA"){

            session_start();

            $_SESSION['usuario']=$_POST['usuario'];
            
            header('Location: PEDIATRIA/doctor.php');

        }




        }else{

            echo 'la contrasena es incorecta';
        }



       

      }else{
        echo 'este usuario no existe';
      }




       
        
        }




    }
    








?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>hospital</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dist/css/sb-admin-2.min.css" rel="stylesheet">
           

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

<link rel="stylesheet" href="dist/css/personalizados.css">

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block img_principal"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">BIENVENIDO!</h1>
                                    </div>
                                    <div class="row ">
                                    <img src="dist/img/logo6.png" class="rounded mx-auto d-block imagen_logo" alt="hospital baney">
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="usuario" name="usuario" aria-describedby="emailHelp"
                                                placeholder="inserte su usaurio..."  required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password" required>
                                        </div>
                                       
                                        <input type="submit" value="Iniciar Sesion" class="btn btn-primary btn-user btn-block">
                                        <hr>
                                        
                                       
                                       
                                    </form>
                                  
                                    <div class="text-center">
                                        <a class="small" href="informacion.php">¿no tiene usuario ?Registrese</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    
     <!-- MDB -->
     <script
  type="text/javascript"
  src="../dist/js/design/mdb.min.js"
></script>

</body>

</html>