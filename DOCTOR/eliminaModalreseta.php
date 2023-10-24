<!-- Modal -->
<div class="modal fade" id="eliminaModalreceta" tabindex="-1" aria-labelledby="eliminaModalrecetaLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminaModalrecetaLabel">AVISO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar al esta receta?
                
            </div>

            <div class="modal-footer">

            <form action="eliminareceta.php" method="POST" >

            <input type="hidden" name="id_receta" id="id_receta">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">  <i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>