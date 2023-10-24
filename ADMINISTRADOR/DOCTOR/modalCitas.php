

<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="modalCitas" tabindex="-1" aria-labelledby="modalCitasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCitasLabel">REGISTRO DE CITAS</h5>



                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardarcitas.php" method="post" enctype="multipart/form-data">


                <div class="d-flex flex-row justify-content-center">

                <div class="p-2 col-lg-5">
                        
                <label for="doc" class="form-label">CODIGO DE PACIENTE</label>
                <input type="number" class="form-control" name="doc" id="doc" placeholder="introduce codigo" required  onblur="buscar_datos();">
                </div>

                
                </div>

                
               


                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                        <input type="hidden" name="idpaciente" id="idpaciente">
                            <label for="nombre" class="form-label">NOMBRE</label>
                            <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" readonly required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="introduce el apellido" readonly required>
                        </div>


                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="fecha_nacimiento" class="form-label">FECHA DE NACIMIENTO</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"  readonly required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">DIP</label>
                            <input type="text" class="form-control" name="dip" id="dip" placeholder="introduce el dip" readonly required>

                        </div>
                       

                    </div>

                 


                  

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                        <label for="fecha" class="form-label">MOTIVO</label>
                        <select class="form-control" aria-label=".form-select-lg example" id="motivo" name="motivo" required>
                                <option selected>Seleccione</option>
                               
                                <option value="REVISIONES">  REVISIONES</option>
                            </select>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha"  required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="hora" class="form-label">HORA</label>
                            <input type="time" class="form-control" name="hora" id="hora"  required>
                        </div>
                        <div class="p-2 col-lg-5">
                            
                        </div>
                    </div>

                   


                    <div class="row justify-content-center">
                        <div class="modal-footer col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>