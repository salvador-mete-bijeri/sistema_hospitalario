<!-- Modal -->
<div class="modal fade" id="nuevoModalpersonal" tabindex="-1" aria-labelledby="nuevoModalpersonalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nuevoModalpersonalLabel">REGISTRO DE PERSONAL</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardar_personal.php" method="post" enctype="multipart/form-data">


                    <div class="d-flex flex-row justify-content-center">



                    <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">DIP</label>
                            <input type="number" class="form-control" name="dip" id="dip" placeholder="introduce el dip" required>

                        </div>





                        <div class="p-2 col-lg-5">
                            <label for="nombre" class="form-label">NOMBRE</label>
                            <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" required>
                        </div>

                       


                    </div>

                    <div class="d-flex flex-row justify-content-center">

                    <div class="p-2 col-lg-5">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="introduce el apellido" required>
                        </div>


                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">FECHA DE NACIMIENTO</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"  required>
                        </div>

                       

                    </div>

                    <div class="d-flex flex-row justify-content-center">
                       

                    <div class="p-2 col-lg-5">
                            <label for="sexo">GENERO</label>
                            <select class="form-control" aria-label=".form-select-lg example" id="genero" name="genero" required>
                                <option selected>Elije el genero</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="direccion" class="form-label">direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="introduce la direccion" required>
                        </div>



                    </div>

                    <div class="d-flex flex-row justify-content-center">
                       
                        <div class="p-2 col-lg-5">
                            <label for="correo" class="form-label">EMAIL</label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="introduce el correo" required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="telefono" class="form-label">TELEFONO</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="introduce el telefono" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                    
                        <div class="p-2 col-lg-5">
                            <label for="nacionalidad" class="form-label">NACIONALIDAD</label>
                            <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" placeholder="introduce la nacionalidad" required>


                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="nacionalidad" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha"  required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                   
                       

                        <div class="p-2 col-lg-5">
                           


                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fas fa-undo-alt"></i> </button>
                            <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> </button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>