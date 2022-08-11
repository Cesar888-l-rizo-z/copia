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

            <form action="<?php echo constant('URL') ?>index/update_Mission_vision" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="hidden" required readonly class="form-control" value="<?php echo $seleccion['idMission_vision']; ?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['nombren_Mission_vision']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtMission_vision">Descripción Del Objetivo:</label>
                    <textarea required class="form-control" value="<?php echo $seleccion['description_Mission_vision']; ?>" name="txtMission_vision" id="txtMission_vision" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>