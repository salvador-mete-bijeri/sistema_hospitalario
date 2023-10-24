

<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="modalCitaseditar" tabindex="-1" aria-labelledby="modalCitaseditarLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCitaseditarLabel">ESTAS EDITANDO UNA CITA</h5>



                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualizar_citas.php" method="post" enctype="multipart/form-data">

                
                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                        <input type="hidden" name="idcita" id="idcita">
                            <label for="codigo" class="form-label">PACIENTE</label>
                            <input type="txt" class="form-control" name="codigo" id="codigo" readonly required>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="motivo" class="form-label">MOTIVO</label>
                            <input type="text" class="form-control" name="motivo" id="motivo" placeholder="Motivo de la cita" required>
                        </div>
                       

                       
                    </div>


                    <div class="d-flex flex-row justify-content-center">
                       
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha"  required>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="hora" class="form-label">HORA</label>
                            <input type="time" class="form-control" name="hora" id="hora"  required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                       
                        <div class="p-2 col-lg-5">
                            
                        </div>
                    </div>

                   


                    <div class="row justify-content-center">
                        <div class="modal-footer col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">SALIR</button>
                            <button type="submit" class="btn btn-primary">ACTUALIZAR</button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>