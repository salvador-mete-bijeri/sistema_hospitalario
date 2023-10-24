<?php

require '../conexion/conexion.php';

$sqlConsultas= "SELECT * FROM consultas WHERE id_detalle_consulta=3";

$consultas= $conn->query($sqlConsultas);


// iniciando la sesion

session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}



date_default_timezone_set('America/Mexico_City');

$fecha_actual = getdate();



 $fecha_actual_completa = $fecha_actual['year'] . "-" . 0 . $fecha_actual['mon'] . "-" . 0 . $fecha_actual['mday'];


$sqlcitas = "SELECT * FROM citas where fecha='$fecha_actual_completa' and motivo='PEDIATRIA'";

$citas = $conn->query($sqlcitas);

$row_citas= $citas->num_rows;

 if($row_citas==0){

  $mensaje='hola';
 }else{
   $mensaje=$_SESSION['usuario'] . '  USTED TIENE ' .   $row_citas  . ' CITA EL DIA DE HOY';  
 }


?>



<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PEDIATRIA</title>


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">




  

  
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


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link"><i class="fa fa-home"></i> </a>
      </li>
     
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- Navbar Search -->
      <li class="nav-item">
       
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      <a class="nav-link"  href="·" data-bs-toggle="modal" data-bs-target="#modalsesion">

      
          
<span class="badge badge-danger navbar-badge"><i class="fas fa-user-lock"></i></span>
</a>


        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
         
       
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
       
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PEDIATRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/doctor.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php  echo $_SESSION['usuario']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DESLIZA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="doctor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONSULTAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pruebas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PRUEBAS DE LABORATORIO</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="recetas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RECETAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ingresos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>INGRESOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="citas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CITAS</p>
                </a>
              </li>
            </ul>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h6 class="m-0">Bienvenida pediatra! </h6>

            <?php  echo $mensaje; ?>


          </div><!-- /.col -->
         

        
          

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">



          
               <!-- alerta -->
    
               <?php
              if(isset($_GET['mensaje']) and $_GET['mensaje']=='insertado'){  
          ?>

          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-info-circle"></i>
          <strong> Hola!</strong> su registro ha tenido Exito.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

          <?php

}

          ?>



<?php
              if(isset($_GET['mensaje']) and $_GET['mensaje']=='actualizado'){  
          ?>

          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="fas fa-info-circle"></i>
          <strong> Hola!</strong> su registro ha sido actualizado.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

          <?php

}

          ?>






<?php
              if(isset($_GET['mensaje']) and $_GET['mensaje']=='ocupada'){  
          ?>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-campground"></i>
          <strong> Hola!</strong> porfavor esta cama ya esta ocupada.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

          <?php

}

          ?>



<?php
              if(isset($_GET['mensaje']) and $_GET['mensaje']=='ingresado'){  
          ?>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-campground"></i>
          <strong> Hola!</strong> porfavor este paciente ya tiene un ingreso en curso.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>

          <?php

}

          ?>



            <div class="card">
              <div class="card-body">
               


                <table id="example1" class="table table-bordered table-primary">
                  <thead class="table-success">
                  <tr class="table-active">
                  <th>ID</th>
                        <th>PACIENTE</th>
                        <th>PESO</th>
                        <th>TEMPERATURA</th>
                        <th>PRESION</th>
                        <th>HORA</th>
                        <th>FECHA</th>
                        
                        <th>Acciones</th>
                        
                  
                  </tr>
                  </thead>
                  <tbody>

                  <?php  while($row_consultas = $consultas->fetch_assoc()){  ?>

                    <tr>
                    <td> <?= $row_consultas['id_consulta']; ?></td>
                          <td> <?= $row_consultas['dip']; ?></td>
                          <td> <?= $row_consultas['peso']; ?></td>
                          <td> <?= $row_consultas['temperatura']; ?></td>
                          <td> <?= $row_consultas['presion_arterial']; ?></td>
                          <td> <?= $row_consultas['hora']; ?></td>
                      <td> <?= $row_consultas['fecha']; ?></td>
                         
                    
                    <td>
                      <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#consultaModalver"
                      data-bs-dip="<?= $row_consultas['dip'] ;   ?>">VER</a>



                      <a href="analisis.php?id_consulta=<?= $row_consultas['id_consulta'];     ?> & dip=<?= $row_consultas['dip'] ;    ?> " class="btn btn-sm btn-success"  > PRUEBAS </a>

                     

                     <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#consultaModalreseta"
                      data-bs-id_consulta="<?= $row_consultas['id_consulta'] ;   ?>">RECETA</a>

                      <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#ingresoModal"
                      data-bs-id_consulta="<?= $row_consultas['id_consulta'] ;   ?>"> INGRESO</a>

                      

                      
                    </td>
                    </tr>


                  <?php } ?>
             
              
                  </tbody>
                 
                </table>




                

                <?php include 'consultaModaleditar.php'; ?>
                <?php include 'consultaModalver.php'; ?>
                <?php include 'consultaModalreseta.php'; ?>
                <?php include 'ingresoModal.php'; ?>
                <?php include 'modalsesion.php'; ?>
               


                





              </div>
            </div>

          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    
  </footer>
</div>


<!-- coger los datos para editarlos en el modal -->



<script>




</script>












<script>
  
  let consultaModalver = document.getElementById('consultaModalver')
  let consultaModalreseta = document.getElementById('consultaModalreseta')
  let ingresoModal = document.getElementById('ingresoModal')

    let eliminaModalPaciente = document.getElementById('eliminaModalPaciente')
    let consultaModal = document.getElementById('consultaModal')

    consultaModalver.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let dip = button.getAttribute('data-bs-dip')

    let inputDip = consultaModalver.querySelector('.modal-body #dip ')
    let inputPeso = consultaModalver.querySelector('.modal-body #peso')
    let inputTemperatura = consultaModalver.querySelector('.modal-body #temperatura')
    let inputPresio_arterial = consultaModalver.querySelector('.modal-body #presion_arterial')
    let inputFecha = consultaModalver.querySelector('.modal-body #fecha')
  
    let inputHora = consultaModalver.querySelector('.modal-body #hora')
    let inputPrecio = consultaModalver.querySelector('.modal-body #precio')
    let inputMotivo = consultaModalver.querySelector('.modal-body #motivo')
   

    let url = "getconsulta.php"
    let formData = new FormData()
    formData.append('dip', dip)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputDip.value = data.dip
        inputPeso.value = data.peso
        inputTemperatura.value = data.temperatura
        inputPresio_arterial.value = data.presion_arterial
        inputFecha.value=data.fecha
        inputHora.value=data.hora
        inputMotivo.value=data.motivo
     
        



    }).catch(err => console.log(err))

    })






    consultaModalreseta.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let id_consulta = button.getAttribute('data-bs-id_consulta')

    let inputDip = consultaModalreseta.querySelector('.modal-body #dip ')
    let inputId_consulta = consultaModalreseta.querySelector('.modal-body #id_consulta')
    let inputFecha = consultaModalreseta.querySelector('.modal-body #fecha')
   
   

    let url = "getconsulta2.php"
    let formData = new FormData()
    formData.append('id_consulta', id_consulta)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputDip.value = data.dip
        inputId_consulta.value = data.id_consulta
        inputFecha.value= data.fecha
 


    }).catch(err => console.log(err))


    })


    ingresoModal.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let id_consulta = button.getAttribute('data-bs-id_consulta')

    let inputId_consulta = ingresoModal.querySelector('.modal-body #id_consulta')
    let inputDip = ingresoModal.querySelector('.modal-body #dip ')
    
    
   
  
   
   

    let url = "getingreso.php"
    let formData = new FormData()
    formData.append('id_consulta', id_consulta)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputId_consulta.value=data.id_consulta
        inputDip.value = data.dip
       
      
      
     
        



    }).catch(err => console.log(err))

    })


  


    
   
    

       


   





</script>










<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 5 -->
<script src="../../dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <!-- MDB -->
  <script
  type="text/javascript"
  src="../../dist/js/design/mdb.min.js"
></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "language": {

        "lengthMenu": "Mostrar _MENU_ Registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
          "sFirst": "Primero:",
          "sLast": "Ultimo:",
          "sNext": "Siguiente:",
          "sPrevious": "Anterior:"
        },

        "sProcessing": "Procesando..."

      },
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": true,
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>
</html>