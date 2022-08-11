<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            OBJETIVOS
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crear_target" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtNombre">Nombre objetivos</label>
                    <input type="text" class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre Objetivo">
                </div>

                <div class="form-group">
                    <label for="txtObject">Descripción Objetivo:</label>
                    <textarea required class="form-control" value="" name="txtObject" id="txtObject" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>