

<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="ModalPrueba" tabindex="-1" aria-labelledby="ModalPruebaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalPruebaLabel">PRUEBAS DE LABORATORIO</h5>



                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                
                <form action="guardaConsulta.php" method="post"  enctype="multipart/form-data" id="form_contacto">


                   
                        

                <div class="form-row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary" id="agregar">Agregar campo +</button>
                            </div>
                        </div>
                        <div class="form-row clonar">
                            <div class="form-group col-md-12">
                                <label for="">Nombres</label>
                                <input type="text" class="form-control" name="nombres[]">
                                <span class="badge badge-pill badge-danger puntero ocultar">Eliminar</span>
                            </div>
                        </div>
                        <div id="contenedor"></div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" id="enviar_contacto">Enviar</button>
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