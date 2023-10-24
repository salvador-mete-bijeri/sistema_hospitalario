<?php

require '../conexion/conexion.php';

$sqlPacientes= "SELECT `ingresos`.*, `salas`.* FROM `ingresos` LEFT JOIN `salas` ON `ingresos`.`id_sala` = `salas`.`id_sala`  where estado=0";

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
  <title>enfermera</title>

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
      <a class="nav-link"  href="·" data-bs-toggle="modal" data-bs-target="#modalsesion">

      
          
<span class="badge badge-danger navbar-badge">CERRAR SESION</span>
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
                <a href="ingresos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>INGRESOS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="altas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ALTAS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ingresos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TODOS</p>
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
            <h6 class="m-0">BIENVENIDO A INGRESOS! </h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->

          <!-- boton nuevo para anadir  -->
          <div class="row justify-content-end">

          <div class="col-auto mt-2">
          <a href="consultas.php" class="btn btn-primary" > <i class="fas fa-plus"></i>  </a>
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


           <!-- fin de la alerta alerta -->
 



            <div class="card">
              <div class="card-body">
               


                <table id="example1" class="table table-bordered table-striped">
                  <thead class="table-dark">
                  <tr>
                    <th>ID</th>
                    <th>CONSULTA</th>
                    <th>PACIENTE</th>
                    <th>SALA</th>
                    <th>CAMA</th>
                    <th>FECHA</th>
                    <th>HORA</th>
                    
                    <th>Acciones</th>
                  
                  </tr>
                  </thead>
                  <tbody>

                  <?php  while($row_pacientes = $pacientes->fetch_assoc()){  ?>

                    <tr>
                    <td> <?= $row_pacientes['id_ingreso']; ?></td>
                    <td> <?= $row_pacientes['id_consulta']; ?></td>
                    <td> <?= $row_pacientes['dip']; ?></td>
                    <td> <?= $row_pacientes['nombre_sala']; ?></td>
                    <td> <?= $row_pacientes['numero_cama']; ?></td>
                    <td> <?= $row_pacientes['fecha']; ?></td>
                    <td> <?= $row_pacientes['hora']; ?></td>
                   
                    <td>
                      <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ModalIngresos"
                      data-bs-id_ingreso="<?= $row_pacientes['id_ingreso'] ;   ?>"><i class="fas fa-edit fa-pen-to-square"></i></a>


                    <!--  <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#altaModal"
                      data-bs-id_ingreso="  <?= $row_pacientes['id_ingreso'] ;   ?>">ALTA</a>  -->
                     
                      
                    </td>
                    </tr>


                  <?php } ?>
             
              
                  </tbody>
                 
                </table>




               

                <?php include 'ModalIngresos.php'; ?>
                <?php include 'consultaModal.php'; ?>
                <?php include 'altaModal.php'; ?>

               

                





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


<script type="text/javascript">





    function buscar_datos(){
       
      doc=$("#doc").val();

      var parametros=
      {
        "buscar": "1",
        "doc": doc

      };

      $.ajax({
        data: parametros,
        dataType: 'json',
        url: 'codigos.php',
        type: 'POST',
       
        error: function()
        {alert("no se encontro este codigo");},
      
        success: function(valores)

        {
          doc=$(".modal-body #nombre").val(valores.nombre);
          doc=$(".modal-body #apellidos").val(valores.apellidos);
          doc=$(".modal-body #edad").val(valores.edad);
          doc=$(".modal-body #dip").val(valores.dip);
        }

      })
      

     
    }

  </script>







<script>
    
    let ModalIngresos = document.getElementById('ModalIngresos')
    let altaModal = document.getElementById('altaModal')
    
   


  ModalIngresos.addEventListener('shown.bs.modal', event =>{
let button = event.relatedTarget
let id_ingreso = button.getAttribute('data-bs-id_ingreso')

let inputDip = ModalIngresos.querySelector('.modal-body #dip')
let inputId_ingreso = ModalIngresos.querySelector('.modal-body #id_ingreso')
let inputHora_ingreso = ModalIngresos.querySelector('.modal-body #hora_ingreso')

let inputSala = ModalIngresos.querySelector('.modal-body #sala')
let inputNumero_cama = ModalIngresos.querySelector('.modal-body #numero_cama')


let inputFecha_ingreso = ModalIngresos.querySelector('.modal-body #fecha_ingreso')
    


    let url = "getingreso.php"
    let formData = new FormData()
    formData.append('id_ingreso', id_ingreso)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputId_ingreso.value=data.id_ingreso
        inputDip.value = data.dip
        inputHora_ingreso.value = data.hora
        inputFecha_ingreso.value = data.fecha
        inputSala.value = data.nombre_sala
        inputNumero_cama.value = data.numero_cama

    }).catch(err => console.log(err))


  })


    altaModal.addEventListener('shown.bs.modal', event =>{
let button = event.relatedTarget
let id_ingreso = button.getAttribute('data-bs-id_ingreso')

let inputId_consulta = altaModal.querySelector('.modal-body #id_consulta')
let inputDip = altaModal.querySelector('.modal-body #dip ')
    


    let url = "getingreso.php"
    let formData = new FormData()
    formData.append('id_ingreso', id_ingreso)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputId_consulta.value=data.id_ingreso
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

  <!-- MDB -->
  <script
  type="text/javascript"
  src="../dist/js/design/mdb.min.js"
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

