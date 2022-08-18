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
            Informacion De La Situación Ideal De T.I
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update_Ideal_situation" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="hidden" required readonly class="form-control" value="<?php echo $seleccion['id_Ideal_situation']; ?>" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtindicador">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['indicator']; ?>" name="txtindicador" id="txtindicador" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtobject">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['value_target']; ?>" name="txtobject" id="txtobject" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtvalueini">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['value_initial']; ?>" name="txtvalueini" id="txtvalueini" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtFecha_initial">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['initial_value_date']; ?>" name="txtFecha_initial" id="txtFecha_initial" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtFecha_value">Nombre Del objetivo :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['target_value_date']; ?>" name="txtFecha_value" id="txtFecha_value" placeholder="Nombre De La Liey">
                </div>

                <div class="form-group">
                    <label for="txtdescription">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['descript']; ?>" name="txtdescription" id="txtdescription" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtobservation">Descripción Del Objetivo:</label>
                    <textarea class="form-control" value="<?php echo $seleccion['observation']; ?>" name="txtobservation" id="txtobservation" placeholder="Resumen" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>