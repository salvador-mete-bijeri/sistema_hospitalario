<!-- Modal -->
<div class="modal fade" id="eliminaModalusuario" tabindex="-1" aria-labelledby="eliminaModalusuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminaModalusuarioLabel">AVISO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar al usuario?
                
            </div>

            <div class="modal-footer">

            <form action="eliminausuario.php" method="POST" >

            <input type="hidden" name="id_usuario" id="id_usuario">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">  <i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-thumbs-up"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>