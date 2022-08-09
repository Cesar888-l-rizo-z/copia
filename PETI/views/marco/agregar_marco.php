<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            MARCO NORMATIVO
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crearmarco" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtNombre">Nombre de la ley:</label>
                    <input type="text" class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre de la ley o norma">
                </div>

                <div class="form-group">
                    <label for="txtResumen">Resumen:</label>
                    <textarea required class="form-control" value="" name="txtResumen" id="txtResumen" placeholder="Resumen de la norma o ley" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtLink">Link de descarga:</label>
                    <input type="text" class="form-control" value="" name="txtLink" id="txtLink" placeholder="Link de descarga">
                </div>

                <div class="form-group">
                    <label for="txtObservacion">Observacion:</label>
                    <textarea required class="form-control" value="" name="txtObservacion" id="txtObservacion" placeholder="Tienes alguna observacion" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>