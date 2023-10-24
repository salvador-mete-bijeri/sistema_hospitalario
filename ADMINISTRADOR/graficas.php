<?php

require '../conexion/conexion.php';


$sql= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-01-01' AND '2023-01-31';";
$resultado= mysqli_query($conn,$sql);
$fila= mysqli_fetch_assoc($resultado);

$consulta_enero=mysqli_num_rows($resultado);

// febrero

$sql2= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-02-01' AND '2023-02-31';";
$resultado2= mysqli_query($conn,$sql2);
$fila2= mysqli_fetch_assoc($resultado2);

$consulta_febrero=mysqli_num_rows($resultado2);

// marzo

$sql3= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-03-01' AND '2023-03-31';";
$resultado3= mysqli_query($conn,$sql3);
$fila3= mysqli_fetch_assoc($resultado3);

$consulta_marzo=mysqli_num_rows($resultado3);

$sql4= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-04-01' AND '2023-04-31';";
$resultado4= mysqli_query($conn,$sql4);
$fila4= mysqli_fetch_assoc($resultado4);

$consulta_abril=mysqli_num_rows($resultado4);


$sql5= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-05-01' AND '2023-05-31';";
$resultado5= mysqli_query($conn,$sql5);
$fila5= mysqli_fetch_assoc($resultado5);

$consulta_mayo=mysqli_num_rows($resultado5);

$sql6= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-06-01' AND '2023-06-31';";
$resultado6= mysqli_query($conn,$sql6);
$fila6= mysqli_fetch_assoc($resultado6);

$consulta_junio=mysqli_num_rows($resultado6);

$sql7= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-07-01' AND '2023-07-31';";
$resultado7= mysqli_query($conn,$sql7);
$fila7= mysqli_fetch_assoc($resultado7);

$consulta_julio=mysqli_num_rows($resultado7);

$sql8= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-08-01' AND '2023-08-31';";
$resultado8= mysqli_query($conn,$sql8);
$fila8= mysqli_fetch_assoc($resultado8);

$consulta_agosto=mysqli_num_rows($resultado8);

$sql9= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-09-01' AND '2023-09-31';";
$resultado9= mysqli_query($conn,$sql9);
$fila9= mysqli_fetch_assoc($resultado9);

$consulta_septiembre=mysqli_num_rows($resultado9);


$sql10= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-10-01' AND '2023-10-31';";
$resultado10= mysqli_query($conn,$sql10);
$fila10= mysqli_fetch_assoc($resultado10);

$consulta_obtubre=mysqli_num_rows($resultado10);

$sql11= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-11-01' AND '2023-11-31';";
$resultado11= mysqli_query($conn,$sql11);
$fila11= mysqli_fetch_assoc($resultado11);

$consulta_noviembre=mysqli_num_rows($resultado11);

$sql12= "SELECT * FROM consultas WHERE fecha BETWEEN '2023-12-01' AND '2023-12-31';";
$resultado12= mysqli_query($conn,$sql12);
$fila12= mysqli_fetch_assoc($resultado12);

$consulta_diciembre=mysqli_num_rows($resultado12);



















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
  <title>ADMINISTRADOR</title>

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
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>





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
        <a class="nav-link"  href="../cerrar_sesion.php">
          
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">


          
           <!-- DONUT CHART -->
           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Donut Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->





            
           





           
             <!-- PIE CHART -->
             <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">GRAFICA DE CONSULTA POR MES</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            

          




          
          </div>
          </div>
          </div>
          </select>


        






       






           
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

    editaModalPaciente.addEventListener('shown.bs.modal', event =>{
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
    .then(data =>{

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

    eliminaModalPaciente.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let idpaciente = button.getAttribute('data-bs-idpaciente')
    eliminaModalPaciente.querySelector('.modal-footer #dip').value =idpaciente



    }) 


    // boton consulta
    
        // aqui empieza el boton consulta

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
<script
  type="text/javascript"
  src="../dist/js/design/mdb.min.js"
></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>

<!-- Page specific script -->
<script>
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'PACIENTES',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [
          3,
            1,
            1,
            1,
            1,
            1],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------



     //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
   //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, 
    
    
    {
      labels  : ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO','JULIO','AGOSTO','SEPTIEMBRE','OBTUBRE','NOVIEMBRE','DICIEMBRE'],
      datasets: [
        {
          label               : 'Consultas',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $consulta_enero; ?>,
            <?php echo $consulta_febrero; ?>, 
            <?php echo $consulta_marzo; ?>,
            <?php echo $consulta_abril; ?>,
            <?php echo $consulta_mayo; ?>,
            <?php echo $consulta_junio; ?>,
            <?php echo $consulta_julio; ?>,
            <?php echo $consulta_agosto; ?>,
            <?php echo $consulta_septiembre; ?>,
            <?php echo $consulta_obtubre; ?>,
            <?php echo $consulta_noviembre; ?>,
            <?php echo $consulta_diciembre; ?>
          ]
        },
       
      ]
    }


    )
   
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })







</script>

</body>
</html>

