





<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="editarModalentidad" tabindex="-1" aria-labelledby="editarModalentidadLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalentidadLabel">ESTAS EDITANDO LA INFORMACION DE LA ENTIDAD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="actualizarentidad.php" method="post" enctype="multipart/form-data">



        <div class="d-flex flex-row justify-content-center">


       <div class="p-2 col-lg-5 mb-3">
       <img id="img_logo" width="100">

    </div>

    <div class="p-2 col-lg-5">
      

    </div>

    </div>


<div class="d-flex flex-row justify-content-center">


<div class="p-2 col-lg-5">
        <label for="logo" class="form-label">LOGO</label>
        <input type="file" class="form-control" name="logo" id="logo"  required accept="image/jpeg">

    </div>

<div class="p-2 col-lg-5">
<input type="hidden" class="form-control" name="id_hospital" id="id_hospital" required>
        <label for="nombre" class="form-label">NOMBRE</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" required>

    </div>





   

   


</div>

<div class="d-flex flex-row justify-content-center">

<div class="p-2 col-lg-5">
        <label for="telefono" class="form-label">TELEFONO</label>
        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" required>
    </div>

    <div class="p-2 col-lg-5">
        <label for="nombre" class="form-label">DIRECCION</label>
        <input type="txt" class="form-control" name="direccion" id="direccion" placeholder="direccion" required>
    </div>


    

   

</div>

<div class="d-flex flex-row justify-content-center">
   

<div class="p-2 col-lg-5">

<label for="horario" class="form-label">HORARIO</label>
        <input type="text" class="form-control" name="horario" id="horario" placeholder="horario" required>
       
    </div>


    <div class="p-2 col-lg-5">
        <label for="email" class="form-label">EMAIL</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
    </div>



</div>







<div class="row justify-content-center ">
    <div class="col-auto  m-3">

        
        <button type="submit" class="btn btn-primary" > <i class="fas fa-sync"></i> </button>

    </div>

</div>


</form>

            </div>

        </div>
    </div>
</div>