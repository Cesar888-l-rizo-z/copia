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

            <form action="<?php echo constant('URL') ?>index/crear_Mission_vision" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtNombre">Nombre De La Misión o Visión</label>
                    <input type="text" class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre De La Misión y Visión">
                </div>

                <div class="form-group">
                    <label for="txtMission_vision">Descripción De La Misión o Visión</label>
                    <textarea required class="form-control" value="" name="txtMission_vision" id="txtMission_vision" placeholder="Descripción De La Misión y Visión" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>