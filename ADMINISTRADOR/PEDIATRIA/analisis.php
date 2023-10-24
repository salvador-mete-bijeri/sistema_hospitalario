<?php require '../conexion/conexion.php';

$sql = "SELECT * FROM tipo_prueba";

$resultado = mysqli_query($conn, $sql);


$sql2 = "SELECT * FROM tipo_prueba";

$resultado2 = mysqli_query($conn, $sql2);


$id_consulta=$_GET['id_consulta'];


session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}

// tenemos el id del personal atravez de este codigo
$user=$_SESSION['usuario'];

// $sql1= "SELECT id_usuario,id_usuario, dip_personal from usuarios where nombre_usuario='$user'";

$sql1= "SELECT `usuarios`.`id_usuario`,`usuarios`.`nombre_usuario`, `personal`.`dip_personal`, `personal`.`nombre` FROM `usuarios` LEFT JOIN `personal` ON `usuarios`.`dip_personal` = `personal`.`dip_personal` where `usuarios`.`nombre_usuario`='$user'";

$resultado1=mysqli_query($conn,$sql1);
$fila= mysqli_fetch_assoc($resultado1);

// echo $fila['id_personal'] . "</br>";


$id_paciente=$_GET['dip'];

// echo $id_paciente;










?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
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

<link rel="stylesheet" href="../../dist/css/design/mdb.min.css">


      <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<!-- boostrapps 5
<link rel="stylesheet" href="../dist/css/bootstrap.min.css"> -->




    <style>
        body {
            background-color: #f5f5f5;
            
            
        }

        form {
            margin: 50px auto;
        }

        .form-row {
            margin-top: 10px;
        }

        fieldset {
            border: 1px solid #ddd !important;
            margin: 0;
            xmin-width: 0;
            padding: 30px;
            position: relative;
            border-radius: 4px;
            background-color: #fff;
            padding-left: 10px !important;
        }

        legend {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 0px;
           
            width: 35%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px 5px 5px 10px;
            background-color: #ffffff;
        }

        legend .boton_volver{
            margin-left: 15px;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-8">

                <?php
                if (isset($_POST['submit'])) {

                    // obteniedo la hora y la fecha actual


                    date_default_timezone_set('America/Mexico_City');

                    $fecha_actual = getdate();
                    
                
                    
                     $fecha_actual_completa = $fecha_actual['year'] . "-" . $fecha_actual['mon'] . "-" . $fecha_actual['mday'];
            
            
                


                   ////----////
                  $seleccione=$_POST['durchgefuhrte_arbeiten'];

                  if($seleccione!=""){


                


                    foreach ($_POST['durchgefuhrte_arbeiten'] as $key => $value) {

                        $query1 = "INSERT INTO prueba(id_tipo_prueba,id_consulta,dip_personal,dip,fecha)VALUES ('" . $_POST['durchgefuhrte_arbeiten'][$key] . "','" . $_POST['von'][$key] . "','" . $_POST['bis'][$key] . "','" . $_POST['std'][$key] .  "','" . $fecha_actual_completa. "')";




                        if($conn->query($query1)){
                            $id=$conn->insert_id;
                            header('Location: pruebas.php?mensaje=insertado'); 
                        }else{
                            echo "error de insersion";
                        }
                    }

                }else{

                    header('Location: analisis.php?mensaje=seleccione'); 
                }


            }
                   

                   
                ?>


                <form action="" method="post" enctype="">

                    <fieldset>
                        <legend>BIENVENIDA PEDIATRA:   <?php echo $fila['nombre']; ?>    <a href="doctor.php" class="btn btn-sm btn-primary  boton_volver" > <i class="fas fa-backward"></i> </a> </legend>
                     

                        <div class="form-row">



                            <div class="col"></div>

                            <div class="col">
                                <h2>HOSPITAL BANEY</h2>
                                <p>Direccion. Zona alta/wachacha</p>
                                <p style="margin-top: -16px;">Tel: 3334509454</p>
                            </div>



                        </div><br><br>

                        <div class="form-row">


                        </div><br>





                        <div id="dynamic_field">
                            <h5>PRUEBAS:</h5>
                            <div class="form-row">
                                <div class="col">


                                <!-- alerta -->


                                
<?php
              if(isset($_GET['mensaje']) and $_GET['mensaje']=='seleccione'){  
          ?>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-campground"></i>
          <strong> Hola!</strong> porfavor seleecione una pueba en todos los campos.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

          <?php

}

          ?>



                                <!-- fin de la alerta -->



                                    <select class="form-control" aria-label=".form-select-lg example" id="sexo" name="durchgefuhrte_arbeiten[]" required>
                                        <option selected value="">seleccione.....</option>

                                        <?php

                                        while ($row_consultas = $resultado->fetch_assoc()) { ?>

                                            <option value=" <?php echo  $row_consultas['id_tipo_prueba'];  ?>  "> <?php echo  $row_consultas['nombre_prueba']; ?> </option>

                                        <?php }  ?>

                                    </select>


                                    <!-- <input type="text" class="form-control" name="durchgefuhrte_arbeiten[]" placeholder="1"> -->
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="von[]"  value=" <?php echo $id_consulta;  ?> " readonly>
                                </div>

                                 <div class="">
                                    <input type="hidden" class="form-control" name="bis[]"  value=" <?php echo $fila['dip_personal']; ?> ">
                                </div> 

                                <div class="">
                                    <input type="hidden" class="form-control" name="std[]"  value=" <?php echo $id_paciente; ?> ">
                                </div> 
                                

                                <div class="col">
                                    <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                </div>
                            </div>
                        </div>








                        <br>
                        <div class="form-row"><br>
                            <div class="col">
                                <button type="submit" id='submit' name="submit" class="btn btn-primary " value="Save"><i class="fa fa-save"></i> </button>
                            </div>
                        </div>
                        <br>
                </form>
                </fieldset>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script> -->
    <script src="../../dist/js/jquery-3.6.0.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
      <!-- MDB -->
  <script
  type="text/javascript"
  src="../../dist/js/design/mdb.min.js"
></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<div class="form-row" id="row' + i + '"> <div class="col">    <select class"form-control" name="durchgefuhrte_arbeiten[]" required> <option value="">selecciona..</option>  <?php while($row_consultas2 = $resultado2->fetch_assoc()) {  ?>  <option value=" <?php echo $row_consultas2['id_tipo_prueba']; ?> ">   <?php echo $row_consultas2['nombre_prueba']; ?> </option>  <?php }  ?>  </select> </div> <div class="col"> <input type="text" class="form-control" name="von[]" value="<?php echo $id_consulta;  ?>" readonly > </div>  <div class=""> <input type="hidden" class="form-control" name="bis[]" value="<?php echo $fila['dip_personal']; ?> "> </div>     <div class="">  <input type="hidden" class="form-control" name="std[]" value="<?php echo $id_paciente; ?> "> </div>    <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");

                $('#row' + button_id + '').remove();
            });



            $('#add2').click(function() {
                i++;
                $('#dynamic_field2').append('<div class="form-row"  id="row2' + i + '"> <div class="col"> <input type="text" class="form-control" name="mange[]"> </div> <div class="col"> <input type="text" class="form-control"  name="bezeichnung[]"> </div> <div class="col"> <input type="text" class="form-control" name="art_nr[]"> </div> <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove2" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove2', function() {
                var button_id = $(this).attr("id");

                $('#row2' + button_id + '').remove();
            });


            $('#add3').click(function() {
                i++;
                $('#dynamic_field3').append('<div class="form-row" id="row3' + i + '"> <div class="col"> <input type="text" class="form-control"  name="offene_pukte[]"> </div> <div class="col"> <input type="text" class="form-control" name="intern[]"> </div> <div class="col"> <td><button type="button" name="add"  class="btn btn-danger btn_remove3" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
            });
            $(document).on('click', '.btn_remove3', function() {
                var button_id = $(this).attr("id");

                $('#row3' + button_id + '').remove();
            });



        });
    </script>

</body>

</html>