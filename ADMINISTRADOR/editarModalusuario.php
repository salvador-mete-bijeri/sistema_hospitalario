
<?php

require '../conexion/conexion.php';

$sqlPacientes= "SELECT * FROM roles";

$pacientes= $conn->query($sqlPacientes);





?>




<!-- Modal -->
<div class="modal  modal-dialog-scrollable" id="editarModalusuario" tabindex="-1" aria-labelledby="editarModalusuarioLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalusuarioLabel">ESTAS EDITANDO A UN USUARIO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="guardar_usuario.php" method="post" enctype="multipart/form-data">

                


                    <div class="d-flex flex-row justify-content-center">

                    <div class="p-2 col-lg-5">
                
                <label for="nombre_usuario" class="form-label">CODIGO DEL PERSONAL</label>
                <input type="txt" class="form-control" name="dip_personal" id="dip_personal" placeholder="ID - PERSONAL" required>
            </div>

                        <div class="p-2 col-lg-5">
                
                            <label for="nombre_usuario" class="form-label">NOMBRE DE USUARIO</label>
                            <input type="txt" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="NOMBRE DE USUARIO"  required>
                        </div>

                        

                       

                    </div>

                  
                  

                    <div class="d-flex flex-row justify-content-center">




                    <div class="p-2 col-lg-5">
                
                            <label for="nombre" class="form-label">PASSWORD</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password"  required>
                        </div>


                        <div class="p-2 col-lg-5">
                        <label for="nombre" class="form-label">ROL</label>
                        <select class="form-control" aria-label=".form-select-lg example" id="rol" name="rol" required>
                                        <option selected value="">seleccione.....</option>

                                        <?php

                                        while ($row_consultas = $pacientes->fetch_assoc()) { ?>

                                            <option value=" <?php echo  $row_consultas['id_rol'];  ?>  "> <?php echo  $row_consultas['nombre']; ?> </option>

                                        <?php }  ?>

                                    </select>
                        </div>
                        
                    </div>

                    
                    

                    


                    <!-- 

                    <div class="d-flex flex-row justify-content-center">
                        <div class="p-2 col-lg-5">
                            <label for="edad" class="form-label">ACTIVO</label>
                            <select class="form-control" aria-label=".form-select-lg example" id="activo" name="activo" required>
                                <option selected>Elije el sexo</option>
                                <option value="">M</option>
                                <option value="">F</option>
                            </select>
                        </div>
                        <div class="p-2 col-lg-5">
                            <label for="fecha" class="form-label">OBSERVACIONES</label>
                            <input type="text" class="form-control" name="observacion" id="observacion" placeholder="observacion" required>
                        </div>
                    </div>



                       -->



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