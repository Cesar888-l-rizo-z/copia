<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    //   print_r($this->seleccionar);
    $seleccion = $this->seleccionar[0];
    //  print_r($seleccion);
    ?>

    <div class="card">
        <div class="card-header">
            Informacion Del Objetivo
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update_target" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="hidden" required readonly class="form-control" value="<?php echo $seleccion['idobjectives']; ?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['nombre_objectives']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtObject">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives']; ?>" name="txtObject" id="txtObject" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject2">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives2']; ?>" name="txtObject2" id="txtObject2" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject3">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives3']; ?>" name="txtObject3" id="txtObject3" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject4">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives4']; ?>" name="txtObject4" id="txtObject4" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject5">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives5']; ?>" name="txtObject5" id="txtObject5" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject6">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives6']; ?>" name="txtObject6" id="txtObject6" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject7">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives7']; ?>" name="txtObject7" id="txtObject7" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject8">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives8']; ?>" name="txtObject8" id="txtObject8" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject9">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives9']; ?>" name="txtObject9" id="txtObject9" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject10">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['description_objectives10']; ?>" name="txtObject10" id="txtObject10" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>