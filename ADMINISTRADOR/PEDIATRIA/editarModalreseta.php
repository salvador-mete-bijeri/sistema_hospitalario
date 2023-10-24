<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="editarModalreseta" tabindex="-1" aria-labelledby="editarModalresetaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalresetaLabel">RECETAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualizarreceta.php" method="post" enctype="multipart/form-data">


                    <div class="d-flex flex-row justify-content-center">

                        <div class="p-2 col-lg-2">

                        <input type="hidden" class="form-control" name="id_receta" id="id_receta" placeholder="introduce codigo" readonly>

                            <label for="dip" class="form-label">CONSULTA</label>
                            <input type="txt" class="form-control" name="id_consulta" id="id_consulta" placeholder="introduce codigo" readonly>

                        </div>


                        <div class="p-2 col-lg-2">

                            <label for="dip" class="form-label">PACIENTE</label>
                            <input type="txt" class="form-control" name="dip" id="dip" placeholder="introduce codigo" readonly>

                        </div>

                        <div class="p-2 col-lg-2">

                            <label for="fecha" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha"  readonly>

                        </div>




                    </div>


                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">RECETA</label>
                            <textarea class="form-control"  name="receta" id="receta" rows="10" cols="50"></textarea>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="instrucciones" class="form-label">INTRUCCIONES DE LA RECETA</label>
                            <textarea class="form-control"  name="instrucciones" id="instrucciones" rows="10" cols="50"></textarea>
                        </div>
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
                       

                   
                        <div class="modal-footer col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fas fa-undo-alt"></i> </button>
                            <button type="submit" class="btn btn-primary"> <i class="fas fa-sync"></i> </button>

                       

                    </div>


                    

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>