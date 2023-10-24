<?php
require 'conexion/conexion.php';

$consulta = " SELECT * FROM hospital";

$resultado_consulta = mysqli_query($conn, $consulta);




$row_hospital = $resultado_consulta->num_rows;

if ($row_hospital < 1) {

    header('Location: registro_hospital.php');
}else{

    $personal = " SELECT * FROM personal";

     $resultado_personal = mysqli_query($conn, $personal);

$row_personal = $resultado_personal->num_rows;

if($row_personal>1){

    header('Location: registro_usuarios.php');
}

}






/// RELLENAMOS EL NOMBRE DEL HOSPITL EN EL SELECT

$sql_hospital = "SELECT * FROM hospital limit 1";

$resultado_hospital = mysqli_query($conn, $sql_hospital);



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
                    <h6 class="text-center text-light">PORFAVOR REGISTRE A UN PERSONAL DE TU ENTIDAD <span>paso 2/3</span></h6>
                </header>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <div class="row justify-content-center">





            <div class="col-md-9">


                <div class="card bg-primary text-white">
                    <div class="card-header">
                        estas registrando a un administrador para el sistema
                    </div>


                    <form action="ENFERMERA/insertar_personal.php" method="post" enctype="multipart/form-data">


                        <div class="d-flex flex-row justify-content-center">



                            <div class="p-2 col-lg-4">
                                <label for="edad" class="form-label">DIP</label>
                                <input type="number" class="form-control" name="dip" id="dip" placeholder="introduce sin puntos" required>

                            </div>





                            <div class="p-2 col-lg-4">
                                <label for="nombre" class="form-label">NOMBRE</label>
                                <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" required>
                            </div>

                            <div class="p-2 col-lg-4">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="introduce el apellido" required>
                            </div>


                        </div>


                        <div class="d-flex flex-row justify-content-center">


                            <div class="p-2 col-lg-4">
                                <label for="edad" class="form-label">FECHA DE NACIMIENTO</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"  required>
                            </div>
                            <div class="p-2 col-lg-4">
                                <label for="sexo" class="form-label">GENERO</label>
                                <select class="form-control" id="genero" name="genero" required>
                                    <option selected>Elije el sexo</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                            <div class="p-2 col-lg-4">
                                <label for="direccion" class="form-label">direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="introduce la direccion" required>
                            </div>
                        
                        </div>




                        <div class="d-flex flex-row justify-content-center">
                            
                            <div class="p-2 col-lg-4">
                                <label for="correo" class="form-label">EMAIL</label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="introduce el correo" required>
                            </div>
                            <div class="p-2 col-lg-4">
                                <label for="telefono" class="form-label">TELEFONO</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="introduce el telefono" required>
                            </div>

                            <div class="p-2 col-lg-4">
                                <label for="nacionalidad" class="form-label">NACIONALIDAD</label>
                                <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="introduce la nacionalidad" required>

                        </div>

                        </div>

                        <div class="d-flex flex-row justify-content-center">


                            <div class="p-2 col-lg-4">
                                <label for="nacionalidad" class="form-label">FECHA DE REGISTRO</label>
                                <input type="date" class="form-control" name="fecha_registro" id="fecha_registro" required>


                            </div>

                            <div class="p-2 col-lg-4">
                                <label for="hospital" class="form-label">HOSPITAL</label>
                                <select class="form-control" id="hospital" name="hospital" required >
                    
                                    <?php

                                    while ($row_consultas = $resultado_hospital->fetch_assoc()) { ?>

                                        <option value=" <?php echo  $row_consultas['id_hospital'];  ?>  "> <?php echo  $row_consultas['nombre']; ?> </option>

                                    <?php }  ?>
                                </select>
                            </div>

                            <div class="p-2 col-lg-4">
                                
                            </div>

                        </div>






                        <div class="row justify-content-center py-2">
                            <div class="col-auto">

                                
                                <button type="submit" class="btn btn-success"> ENVIAR</button>

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