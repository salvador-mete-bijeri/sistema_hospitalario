

<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="resultadosModalver" tabindex="-1" aria-labelledby="resultadosModalverLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resultadosModalverLabel">RESULTADOS DE LA ANALITICA</h5>
                       
                

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardarresultado.php" method="POST" >

                    <div class="d-flex flex-row justify-content-center">


                    <div class="p-2 col-lg-5">
                           
                       
                       

                        <label for="idprueba" class="form-label">CODIGO-PRUEBA</label>
                            <input type="txt" class="form-control" name="id_prueba" id="id_prueba"  readonly required>
                        </div>


                        <div class="p-2 col-lg-5">
                           
                       
                            <label for="dip" class="form-label">DIP</label>
                            <input type="txt" class="form-control" name="dip" id="dip"  readonly required>
                        </div>

                        


                    </div>



                   
                   
                   



                    <div class="d-flex flex-row justify-content-center">
                    <div class="p-2 col-lg-5">
                            <label for="prueba" class="form-label">PRUEBA</label>
                            <input type="text" class="form-control" name="nombre_prueba" id="nombre_prueba"  readonly required>
                        </div>
                    </div>



                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-10">
                            <label for="resultado" class="form-label">RESULTADO</label>
                            <input type="text" class="form-control" name="resultado" id="resultado"  required readonly>
                        </div>
                        
                    </div>




                </form>
            </div>

        </div>
    </div>
</div>