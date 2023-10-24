

<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="consultaModaleditar" tabindex="-1" aria-labelledby="consultaModaleditarLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="consultaModaleditarLabel">HACER CONSULTA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardarconsulta.php" method="POST" >

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                           
                        <input type="hidden" name="idconsulta" id="idconsulta">
                            <label for="nombre" class="form-label">NOMBRE</label>
                            <input type="txt" class="form-control" name="nombre" id="nombre" placeholder="introduce el nombre" readonly required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="introduce el apellido" readonly required>
                        </div>


                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">EDAD</label>
                            <input type="number" class="form-control" name="edad" id="edad" placeholder="introduce la edad" min="0" readonly required>
                        </div>

                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">DIP</label>
                            <input type="text" class="form-control" name="dip" id="dip" placeholder="introduce el dip" readonly required>

                        </div>
                       

                    </div>

                 


                  

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">PESO</label>
                            <input type="text" class="form-control" name="peso" id="peso" placeholder="peso" readonly required>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">TEMPERATURA</label>
                            <input type="text" class="form-control" name="temperatura" id="temperatura" placeholder="temperatura" readonly required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">PRESION ARTERIAL</label>
                            <input type="text" class="form-control" name="presion_arterial" id="presion_arterial" placeholder="Presion arterial" readonly required>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">FECHA</label>
                            <input type="date" class="form-control" name="fecha" id="fecha" placeholder="fecha" readonly required>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-10">
                            <label for="fecha" class="form-label">MOTIVO</label>
                            <textarea class="form-control" cols="10" rows="3" name="motivo" id="motivo"  placeholder="motivo" readonly required></textarea>
                        </div>
                    </div>

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-10">
                        <label for="fecha" class="form-label">OBSERVACIONES</label>
                        <textarea class="form-control" cols="10" rows="5" name="observaciones" id="observaciones"  placeholder="observaciones"  required></textarea>
                        </div>
                    </div>


                

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-10">
                            <label for="elegir" class="form-label">ELEGIR</label>
                            <select class="form-control" aria-label=".form-select-lg example" id="activo" name="activo" required>
                                <option value="selecciona">SELECCIONA</option>
                                <option value="LABORATORIO">LABORATORIO</option>
                                <option value="RECETA">RECETA</option>
                                <option value="TRASLADO">TRASLADO</option>
                            </select>
                        </div>
                       
                    </div>



                  



                    <div class="row justify-content-center">
                        <div class="col-auto">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                            <button type="submit" class="btn btn-success">GUARDAR</button>

                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>