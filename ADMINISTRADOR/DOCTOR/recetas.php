<?php

require '../conexion/conexion.php';




// iniciando la sesion

session_start();
if(!isset($_SESSION['usuario'])){

  header('Location:../login.php');
}





$sqlConsultas= "SELECT * FROM receta";

$consultas= $conn->query($sqlConsultas);


?>



<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RECETAS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- boostrapps 5 -->
  <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">

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
        <a href="doctor.php" class="nav-link"><i class="fa fa-home"></i> </a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

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
      <span class="brand-text font-weight-light">DOCTOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/doctor.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php  echo $_SESSION['usuario']; ?></a>
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
          <h6 class="m-0">Bienvenido doctor! </h6>
          </div><!-- /.col -->
          

               <!-- boton nuevo para anadir  -->
               <div class="row justify-content-end">

<div class="col-auto mt-2">
<a href="doctor.php" class="btn btn-primary"> <i class="fas fa-plus"></i>  </a>
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







            <div class="card">
              <div class="card-body">







<!--  ----------------formulario de busqueda   -->
               
                 <div class="row">
                 
               
                     



                 <form action="../reportes/recetas.php" method="POST" target="_blank" >


                 <div class="d-flex flex-row justify-content-center">
                    <div class="col-lg-2">
    
                            <input type="txt" class="form-control" name="dip" id="dip"  placeholder="codigo" required>

                            
                        </div>

                        <div class=" col-lg-2">

                        <input type="date" class="form-control" name="fecha" id="fecha"  placeholder="fecha" required>
         
                        </div>

                        <div class=" col-lg-1">

                        <button type="submit" class="btn btn-warning" target="_blank"  > <i class="fa fa-print"></i> </button>
                        
         
                        </div>

                        </div>



                </form>

                 </div>

<!--  ----------------formulario de busqueda   -->









                <table id="example1" class="table table-bordered table-info">
                  <thead class="table-primary">
                  <tr class="table-active">
                    <th>ID</th>
                    
                    <th>ID-CONSULTA</th>
                    <th>PACIENTE</th>
                    <th >FECHA</th>
                    
                   
                    <th>ACCIONES</th>
                  
                   
                  </tr>
                  </thead>
                  <tbody>

                  <?php  while($row_consultas = $consultas->fetch_assoc()){  ?>

                 

                    <tr>
                    <td> <?= $row_consultas['id_receta']; ?></td>
                    
                    <td> <?= $row_consultas['id_consulta']; ?></td>
                    <td> <?= $row_consultas['dip']; ?></td>
                    
                    <td> <?= $row_consultas['fecha']; ?></td>
                   

                    <td>
                    

                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editarModalreseta"
                      data-bs-id_receta="<?= $row_consultas['id_receta'] ;   ?>"><i class="fas fa-edit fa-pen-to-square"></i></a>

                      <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#verModalreseta"
                      data-bs-id_receta="<?= $row_consultas['id_receta'] ;   ?>"><i class="fas fa-eye"></i></a>

                      <a href="#" class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#eliminaModalreceta"
                      data-bs-id_receta="<?= $row_consultas['id_receta'] ;   ?>"><i class="far fa-trash-alt"></i></a>

                    </td>
                    
                   
                    </tr>


                  <?php } ?>
             
              
                  </tbody>
                 
                </table>




                

                <?php include 'editarModalreseta.php'; ?>
                <?php include 'verModalreseta.php'; ?>
                <?php include 'eliminaModalreseta.php'; ?>
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
  
    let editarModalreseta = document.getElementById('editarModalreseta')
    let verModalreseta = document.getElementById('verModalreseta')
    let consultaModalver = document.getElementById('consultaModalver')
    
    editarModalreseta.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let id_receta = button.getAttribute('data-bs-id_receta')

    let inputDip = editarModalreseta.querySelector('.modal-body #dip ')
    let inputId_consulta = editarModalreseta.querySelector('.modal-body #id_consulta')
    let inputFecha = editarModalreseta.querySelector('.modal-body #fecha')
    let inputReceta = editarModalreseta.querySelector('.modal-body #receta')
    let inputInstrucciones = editarModalreseta.querySelector('.modal-body #instrucciones')
    let inputId_receta = editarModalreseta.querySelector('.modal-body #id_receta')
   

    let url = "getreceta.php"
    let formData = new FormData()
    formData.append('id_receta', id_receta)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputDip.value = data.dip
        inputId_consulta.value = data.id_consulta
        inputFecha.value= data.fecha
        inputReceta.value=data.descripcion_receta
        inputInstrucciones.value=data.instrucciones_receta
        inputId_receta.value=data.id_receta
 


    }).catch(err => console.log(err))

    })





    verModalreseta.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let id_receta = button.getAttribute('data-bs-id_receta')

    let inputDip = verModalreseta.querySelector('.modal-body #dip ')
    let inputId_consulta = verModalreseta.querySelector('.modal-body #id_consulta')
    let inputFecha = verModalreseta.querySelector('.modal-body #fecha')
    let inputReceta = verModalreseta.querySelector('.modal-body #receta')
    let inputInstrucciones = verModalreseta.querySelector('.modal-body #instrucciones')
    let inputId_receta = verModalreseta.querySelector('.modal-body #id_receta')
   

    let url = "getreceta.php"
    let formData = new FormData()
    formData.append('id_receta', id_receta)

    fetch(url, {
        method: "POST",
        body: formData
    }).then(response => response.json())
    .then(data =>{

        inputDip.value = data.dip
        inputId_consulta.value = data.id_consulta
        inputFecha.value= data.fecha
        inputReceta.value=data.descripcion_receta
        inputInstrucciones.value=data.instrucciones_receta
        inputId_receta.value=data.id_receta
 


    }).catch(err => console.log(err))

    })


// boton eliminar codigo del modal..

eliminaModalreceta.addEventListener('shown.bs.modal', event =>{
    let button = event.relatedTarget
    let id_receta = button.getAttribute('data-bs-id_receta')
    eliminaModalreceta.querySelector('.modal-footer #id_receta').value =id_receta



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
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
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