<!-- Modal -->
<div class="modal fade" id="eliminaModalprueba" tabindex="-1" aria-labelledby="eliminaModalpruebaLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminaModalpruebaLabel">AVISO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar esta prueba?
                
            </div>

            <div class="modal-footer">

            <form action="eliminaprueba.php" method="POST" >

            <input type="hidden" name="id_tipo_prueba" id="id_tipo_prueba">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">  <i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-thumbs-up"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>