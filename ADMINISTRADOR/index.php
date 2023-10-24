<?php

require '../conexion/conexion.php';

$sqlPacientes = "SELECT dip, nombre, apellidos,fecha_nacimiento,genero,direccion,email,tel,tutor,fecha_registro FROM pacientes";

$pacientes = $conn->query($sqlPacientes);


$row_pacintes = $pacientes->num_rows;

//////------------------
$sqlConsultas = "SELECT * FROM consultas";

$consultas = $conn->query($sqlConsultas);


$row_consultas = $consultas->num_rows;

//////------------------
$sqlPersonal = "SELECT * FROM personal";

$personal = $conn->query($sqlPersonal);


$row_personal = $personal->num_rows;

//////------------------
$sqlPrueba = "SELECT * FROM prueba";

$prueba = $conn->query($sqlPrueba);


$row_prueba = $prueba->num_rows;

//////------------------
$sqlTipo_Prueba = "SELECT * FROM tipo_prueba";

$prueba_tipo = $conn->query($sqlTipo_Prueba);


$row_tipoprueba = $prueba_tipo->num_rows;

//////------------------
$sqlRoles = "SELECT * FROM roles";

$roles = $conn->query($sqlRoles);


$row_roles = $roles->num_rows;

//////------------------
$sqlUsuarios = "SELECT * FROM usuarios";

$usuarios = $conn->query($sqlUsuarios);


$row_usuarios = $usuarios->num_rows;

//////------------------
$sqlRecetas = "SELECT * FROM receta";

$receta = $conn->query($sqlRecetas);


$row_recetas = $receta->num_rows;



// iniciando la sesion

session_start();
if (!isset($_SESSION['usuario'])) {

  header('Location:../login.php');
}



?>

<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>administrador</title>

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


  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../dist/css/design/mdb.min.css">

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
          <a class="nav-link" href="·" data-bs-toggle="modal" data-bs-target="#modalsesion">



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
      <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ADMINISTRADOR</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/enfermera_logo.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"> <?php echo $_SESSION['usuario'];  ?> </a>
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
                  <a href="usuarios.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>REGISTRAR</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="graficas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>GRAFICAS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="copias.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>COPIAS DE SEGURIDAD</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ENFERMERA/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ENFERMERA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="DOCTOR/doctor.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>DOCTOR</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="PEDIATRIA/doctor.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>PEDIATRIA</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="LABORATORIO/index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>LABORATORIO</p>
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
            <div class="col-sm-6 p-2">
              <h6 class="m-0">BIENVENIDO ADMIN! </h6>
            </div><!-- /.col -->
            <div class="col-sm-12 p-2">












              <!-- Main content -->
              <div class="content py-3">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">




                        <?php
                        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'nada') {
                        ?>

                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-info-circle"></i>
                            <strong> lo siento!</strong> no hay resultados con este codigo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>

                        <?php

                        }

                        ?>




                        <div class="card-body">





                          <!--  ----------------formulario de busqueda   -->

                          <div class="row">

                            <div class="d-flex flex-row justify-content-start">
                              <div class="col-lg-5 p-1">


                                <form action="../reportes/historialmedico.php" target="_blank" rel="noopener noreferrer" method="POST">


                                  <div class="d-flex flex-row justify-content-start">
                                    <div class="col-lg-7 p-1">
                                      <h6 class="m-0">HISTORIAL POR CODIGO</h6>
                                    </div>

                                  </div>


                                  <div class="d-flex flex-row justify-content-start">
                                    <div class="col-lg-5">

                                      <input type="txt" class="form-control" name="dip" id="dip" placeholder="codigo" required>


                                    </div>


                                    <div class=" col-lg-1">

                                      <button type="submit" class="btn btn-warning"> <i class="fa fa-print"></i> </button>

                                    </div>

                                  </div>



                                </form>


                              </div>





                              <div class="col-lg-5 p-1">


                                <form action="../reportes/historialmedico_dia.php" target="_blank" rel="noopener noreferrer" method="POST">


                                  <div class="d-flex flex-row justify-content-start">
                                    <div class="col-lg-7 p-1">
                                      <h6 class="m-0">HISTORIAL POR FECHA</h6>
                                    </div>

                                  </div>


                                  <div class="d-flex flex-row justify-content-start">
                                    <div class="col-lg-5">

                                      <input type="txt" class="form-control" name="dip" id="dip" placeholder="codigo" required>
                                      


                                    </div>

                                    <div class="col-lg-5">

                                      <input type="date" class="form-control" name="fecha" id="fecha" placeholder="codigo" required>
                                      


                                    </div>


                                    <div class=" col-lg-1">

                                      <button type="submit" class="btn btn-warning"> <i class="fa fa-print"></i> </button>

                                    </div>

                                  </div>



                                </form>




                              </div>






                            </div>


















                          </div>

                          <!--  ----------------formulario de busqueda   -->








                        </div>
                      </div>

                    </div>

                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content -->

















              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3><?php echo $row_pacintes ?></h3>

                      <p>PACIENTES</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="ENFERMERA/index.php" class="small-box-footer">imprimir <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3> <?php echo $row_consultas;     ?> <sup style="font-size: 20px"></sup></h3>

                      <p>consultas</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="ENFERMERA/consultas.php" rel="noopener noreferrer" class="small-box-footer">imprimir <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3> <?php echo $row_personal; ?></h3>

                      <p>personal</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="../reportes/personal.php" target="_blank" rel="noopener noreferrer" class="small-box-footer">imprimir <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3> <?php echo $row_prueba; ?> </h3>

                      <p>PRUEBAS HECHAS</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="" rel="noopener noreferrer" class="small-box-footer">Ver mas <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->








              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                    <div class="inner">
                      <h3><?php echo $row_tipoprueba ?></h3>

                      <p>TIPOS DE PRUEBAS</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="../reportes/tipo_prueba.php" class="small-box-footer" target="_blank">imprimir <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3> <?php echo $row_roles;     ?> <sup style="font-size: 20px"></sup></h3>

                      <p>ROLES</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div> <a href="" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3> <?php echo $row_usuarios; ?></h3>

                      <p>USUARIOS</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="../reportes/usuarios.php" class="small-box-footer" target="_blank">imprimir <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3> <?php echo $row_recetas; ?> </h3>

                      <p>RECETAS</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->



















            </div><!-- /.col -->





          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- <div class="content py-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body"> -->








      <?php include 'modalsesion.php'; ?>






      <!-- </div>
            </div>

          </div>
          
        </div>
        
      </div>
    </div>    -->
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
    let editaModalPaciente = document.getElementById('editaModalPaciente')
    let eliminaModalPaciente = document.getElementById('eliminaModalPaciente')
    let consultaModal = document.getElementById('consultaModal')

    editaModalPaciente.addEventListener('shown.bs.modal', event => {
      let button = event.relatedTarget
      let idpaciente = button.getAttribute('data-bs-idpaciente')

      let inputIdpaciente = editaModalPaciente.querySelector('.modal-body #dip ')
      let inputNombre = editaModalPaciente.querySelector('.modal-body #nombre')
      let inputApellidos = editaModalPaciente.querySelector('.modal-body #apellidos')
      let inputEdad = editaModalPaciente.querySelector('.modal-body #edad')
      let inputTelefono = editaModalPaciente.querySelector('.modal-body #telefono')

      let inputDireccion = editaModalPaciente.querySelector('.modal-body #direccion')
      let inputTutor = editaModalPaciente.querySelector('.modal-body #tutor')
      let inputSexo = editaModalPaciente.querySelector('.modal-body #sexo')
      let inputEmail = editaModalPaciente.querySelector('.modal-body #email')
      let inputFecha = editaModalPaciente.querySelector('.modal-body #fecha')

      let url = "getpaciente.php"
      let formData = new FormData()
      formData.append('dip', idpaciente)

      fetch(url, {
          method: "POST",
          body: formData
        }).then(response => response.json())
        .then(data => {

          inputIdpaciente.value = data.dip
          inputNombre.value = data.nombre
          inputApellidos.value = data.apellidos
          inputEdad.value = data.edad
          inputTelefono.value = data.tel

          inputDireccion.value = data.direccion
          inputTutor.value = data.tutor
          inputSexo.value = data.sexo
          inputEmail.value = data.email
          inputFecha.value = data.fecha



        }).catch(err => console.log(err))

    })

    // boton eliminar codigo del modal..

    eliminaModalPaciente.addEventListener('shown.bs.modal', event => {
      let button = event.relatedTarget
      let idpaciente = button.getAttribute('data-bs-idpaciente')
      eliminaModalPaciente.querySelector('.modal-footer #dip').value = idpaciente



    })


    // boton consulta

    // aqui empieza el boton consulta

    consultaModalver.addEventListener('shown.bs.modal', event => {
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
        .then(data => {

          inputDip.value = data.dip
          inputPeso.value = data.peso
          inputTemperatura.value = data.temperatura
          inputPresio_arterial.value = data.presion_arterial
          inputFecha.value = data.fecha
          inputHora.value = data.hora
          inputMotivo.value = data.motivo





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


  <!-- MDB -->
  <script type="text/javascript" src="../dist/js/design/mdb.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
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