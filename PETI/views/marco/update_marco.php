<?php require 'views/templates/header_marc.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    //   print_r($this->seleccionar);
    $seleccion = $this->seleccionar[0];
    //  print_r($seleccion);
    ?>

    <div class="card">
        <div class="card-header">
            Informacion Del Marco Normativo
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update_marco" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" required readonly class="form-control" value="<?php echo $seleccion['idframework']; ?>" name="" id="txtID" placeholder="ID">
                    <input type="hidden" value="<?php echo $seleccion['idframework']; ?>" name="txtID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre De La Ley :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['norma_ley']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtResumen">Resumen:</label>
                    <textarea required class="form-control" value="<?php echo $seleccion['resumen']; ?>" name="txtResumen" id="txtResumen" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtLink">Link De Descarga:</label>
                    <input type="url" required class="form-control" value="<?php echo $seleccion['link']; ?>" name="txtLink" id="txtLink" placeholder="Link De Descarga">
                </div>

                <div class="form-group">
                    <label for="txtObservacion">Observacion:</label>
                    <textarea required class="form-control" value="<?php echo $seleccion['observacion']; ?>" name="txtObservacion" id="txtObservacion" placeholder="Observacion" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>