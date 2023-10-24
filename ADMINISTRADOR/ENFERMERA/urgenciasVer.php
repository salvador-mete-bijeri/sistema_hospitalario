<?php

require '../conexion/conexion.php';

$sqlPacientes= "SELECT `pacientes`.`nombre`,`pacientes`.`apellidos`,`pacientes`.`edad`,`pacientes`.`dip`,`consultas`.`idconsulta`, `consultas`.`peso`,`consultas`.`temperatura`,`consultas`.`presion_arterial`,`consultas`.`hora`,`consultas`.`fecha` FROM `pacientes` LEFT JOIN `consultas` ON `consultas`.`idpaciente` = `pacientes`.`idpaciente` where tipo='URGENCIAS' ";

$pacientes= $conn->query($sqlPacientes);



// iniciando la sesion

session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}



?>

<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Urgencias</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- boostrapps 5 -->
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
        <a href="index.php" class="nav-link"><i class="fa fa-home"></i> </a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
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
        <a class="nav-link" data-toggle="dropdown" href="../cerrar_sesion.php">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"><i class="fab fa-expeditedssl"></i>CERRAR </span>
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
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ENFERMERA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/enfermera_logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php  echo $_SESSION['usuario'];  ?> </a>
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
                <a href="urgenciasVer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>VER URGENCIAS</p>
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
            <h6 class="m-0">BIENVENIDO A URGENCIAS! </h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->

          <!-- boton nuevo para anadir  -->
          <div class="row justify-content-end">

          <div class="col-auto mt-2">
          <a href="urgencias.php" class="btn btn-primary" > <i class="fas fa-plus"></i>  </a>
           </div>

          </div>
          

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
               


                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>EDAD</th>
                    <th>DIP</th>
                    <th>PESO</th>
                    <th>TEMPERATURA</th>
                    <th>PRESION_ARTERIAL</th>
                    <th>HORA</th>
                    <th>FECHA</th>
                    <th>Acciones</th>
                  
                  </tr>
                  </thead>
                  <tbody>

                  <?php  while($row_pacientes = $pacientes->fetch_assoc()){  ?>

                    <tr>
                    <td> <?= $row_pacientes['idconsulta']; ?></td>
                    <td> <?= $row_pacientes['nombre']; ?></td>
                    <td> <?= $row_pacientes['apellidos']; ?></td>
                    <td> <?= $row_pacientes['edad']; ?></td>
                    <td> <?= $row_pacientes['dip']; ?></td>
                    <td> <?= $row_pacientes['peso']; ?></td>
                    <td> <?= $row_pacientes['temperatura']; ?></td>
                    <td> <?= $row_pacientes['presion_arterial']; ?></td>
                    <td> <?= $row_pacientes['hora']; ?></td>
                    <td> <?= $row_pacientes['fecha']; ?></td>
                    <td>

                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ModalUrgenciasEditar"
                      data-bs-idconsulta="<?= $row_pacientes['idconsulta'] ;   ?>"><i class="fas fa-user-plus"></i></a>
                      
                    </td>
                    </tr>


                  <?php } ?>
             
              
                  </tbody>
                 
                </table>




                <?php include 'ModalUrgenciasEditar.php'; ?>

               


                





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
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>


<!-- coger los datos para editarlos en el modal -->

<script>
   
   
    let ModalUrgenciasEditar = document.getElementById('ModalUrgenciasEditar')

   
   

    
        // aqui empieza el boton URGENCIAS EDITAR

    ModalUrgencias.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let idpaciente = button.getAttribute('data-bs-idpaciente')

    let inputIdpaciente = ModalUrgencias.querySelector('.modal-body #idpaciente ')
    let inputNombre = ModalUrgencias.querySelector('.modal-body #nombre')
    let inputApellidos = ModalUrgencias.querySelector('.modal-body #apellidos')
    let inputEdad = ModalUrgencias.querySelector('.modal-body #edad')
    let inputDip = ModalUrgencias.querySelector('.modal-body #dip')
   

    let  url = "getconsulta.php"
    let formData = new FormData()
    formData.append('idpaciente', idpaciente)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputIdpaciente.value = data.idpaciente
        inputNombre.value = data.nombre
        inputApellidos.value = data.apellidos
        inputEdad.value = data.edad
        inputDip.value = data.dip

      }).catch(err => console.log(err))

})    


</script>










<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 5 -->
<script src="../dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>


<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>

