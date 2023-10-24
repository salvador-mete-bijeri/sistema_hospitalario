<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="altaModal" tabindex="-1" aria-labelledby="altaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="altaModalLabel">DANDO DE ALTA AL PACIENTE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardaAltas.php" method="post" enctype="multipart/form-data">


                    <div class="d-flex flex-row justify-content-center">

                        <div class="p-2 col-lg-5">
                        <label for="nombre" class="form-label">INGRESO</label>
                            <input type="text" class="form-control" name="id_consulta" id="id_consulta" readonly>
                            </div>

                            <div class="p-2 col-lg-5">
                            <label for="nombre" class="form-label">CODIGO DE PACIENTE</label>
                            <input type="txt" class="form-control" name="dip" id="dip" placeholder="introduce codigo" readonly>
                        </div>

                        
                    </div>


                    <div class="d-flex flex-row justify-content-center">
                        
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha"  required >
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="hora" class="form-label">HORA</label>
                            <input type="time" class="form-control" name="hora" id="hora" required >
                        </div>


                    </div>

                  

                    <div class="d-flex flex-row justify-content-center">
                       
                    

                        
                    </div>

                    


                    <!-- 

    <div class="d-flex flex-row justify-content-center">
        <div class="p-2 col-lg-5">
            <label for="edad" class="form-label">ACTIVO</label>
            <select class="form-control" aria-label=".form-select-lg example" id="activo" name="activo" required>
                <option selected>Elije el sexo</option>
                <option value="">M</option>
                <option value="">F</option>
            </select>
        </div>
        <div class="p-2 col-lg-5">
            <label for="fecha" class="form-label">OBSERVACIONES</label>
            <input type="text" class="form-control" name="observacion" id="observacion" placeholder="observacion" required>
        </div>
    </div>



       -->



                    <div class="row justify-content-center">
                        <div class="col-auto">


                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fas fa-undo-alt"></i> </button>
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-upload"></i> </button>

                   

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>