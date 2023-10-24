





<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="editarModalprueba" tabindex="-1" aria-labelledby="editarModalprueba Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalprueba Label">ESTAS EDITANDO UNA PRUEBA PRUEBA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editarprueba.php" method="post" enctype="multipart/form-data">

                


                    <div class="d-flex flex-row justify-content-center">

                    <div class="p-2 col-lg-5">

                    <input type="hidden" class="form-control" name="id_tipo_prueba" id="id_tipo_prueba">
                
                <label for="nombre" class="form-label">NOMBRE</label>
                <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE PRUEBA" required>
            </div>

                        <div class="p-2 col-lg-5">
                
                            <label for="precio" class="form-label">PRECIO</label>
                            <input type="NUMBER" class="form-control" name="precio" id="precio" placeholder="PRECIO"  required min="0">
                        </div>

                        

                       

                    </div>

                  
                  

                    <div class="row justify-content-center">
                        <div class="col-auto">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i></button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>