<!-- Modal -->
<div class="modal fade" id="eliminaModalConsulta" tabindex="-1" aria-labelledby="eliminaModalConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminaModalConsultaLabel">AVISO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Desea eliminar la consulta?
                
            </div>

            <div class="modal-footer">

            <form action="eliminaConsulta.php" method="POST" >

            <input type="hidden" name="id_consulta" id="id_consulta">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">  <i class="fas fa-undo-alt"></i></button>
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>

                </form>


            </div>

        </div>
    </div>
</div>