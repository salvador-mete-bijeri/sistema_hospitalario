


<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="ModalIngresos" tabindex="-1" aria-labelledby="ModalIngresosLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalIngresosLabel"> ESTAS EDITANDO UN INGRESO</h5>



                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualizar_ingreso.php" method="post" enctype="multipart/form-data">


                <div class="d-flex flex-row justify-content-center">

                <div class="p-2 col-lg-5">
                <input type="hidden" name="id_ingreso" id="id_ingreso">
                <label for="codigo" class="form-label">CODIGO DEL PACIENTE</label>
                <input type="txt" class="form-control" name="dip" id="dip"  readonly required>
                
                </div>

                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">

                        <label for="hora_ingreso" class="form-label">HORA DE INGRESO</label>
                            <input type="time" class="form-control" name="hora_ingreso" id="hora_ingreso"   required>
                        
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="fecha_ingreso" class="form-label">FECHA DE INGRESO</label>
                            <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso"   required>

                        </div>

                       


                    </div>

            

                
                  

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="sala" class="form-label">SALA</label>
                            <input type="text" class="form-control" name="sala" id="sala" placeholder="sala" readonly>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="numero_cama" class="form-label">CAMA</label>
                            <input type="text" class="form-control" name="numero_cama" id="numero_cama" placeholder="numero de cama" required min="1" max="7">
                        </div>
                    </div>

                    

                    

                    



                    <div class="row justify-content-center">
                        <div class="modal-footer col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">SALIR</button>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>