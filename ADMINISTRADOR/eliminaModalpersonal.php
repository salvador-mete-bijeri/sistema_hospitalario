<!-- Modal -->
<div class="modal fade" id="eliminaModalpersonal" tabindex="-1" aria-labelledby="eliminaModalpersonalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminaModalpersonalLabel">AVISO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar al personal?
                
            </div>

            <div class="modal-footer">

            <form action="eliminapersonal.php" method="POST" >

            <input type="hidden" name="dip_personal" id="dip_personal">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">  <i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-thumbs-up"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>