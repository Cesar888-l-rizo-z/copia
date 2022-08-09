<?php require 'views/templates/header.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    //  print_r($this->seleccionar);
    $seleccion = $this->seleccionar[0];
    // print_r($seleccion);
    ?>

    <div class="card">
        <div class="card-header">
            Informacion de las Brechas de T.I
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update_brechas" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" required readonly class="form-control" value="<?php echo $seleccion['idbrechasTI']; ?>" name="" id="txtID" placeholder="ID">
                    <input type="hidden" value="<?php echo $seleccion['idbrechasTI']; ?>" name="txtID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre de la Ruptura :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['nombre_rupturas']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtObjetivo">Descripcion de la ruptura:</label>
                    <textarea required class="form-control" value="<?php echo $seleccion['ruptura']; ?>" name="txtObjetivo" id="txtObjetivo" placeholder="Objetivo del proyecto" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtProceso">Estrategia:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['estrategia1']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtProceso">Estrategia:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['estrategia2']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>
                <br />
                <div class="form-group">
                    <label for="txtProceso">Estrategia:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['estrategia3']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtProceso">Estrategia:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['estrategia4']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtProceso">Estrategia:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['estrategia5']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>