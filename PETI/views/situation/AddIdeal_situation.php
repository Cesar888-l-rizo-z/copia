<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            SITUACIÓN IDEAL DE T.I
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crear_situation" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtindicador">Nombre Del Indicador</label>
                    <input type="text" required class="form-control" value="" name="txtindicador" id="txtindicador" placeholder="Nombre Del Indicador">
                </div>

                <div class="form-group">
                    <label for="txtobject">Valor Objetivo</label>
                    <input type="text" required class="form-control" value="" name="txtobject" id="txtobject" placeholder="Nombre Del Indicador">
                </div>

                <div class="form-group">
                    <label for="txtvalueini">Valor Inicial</label>
                    <input type="text" required class="form-control" value="" name="txtvalueini" id="txtvalueini" placeholder="Nombre Del Indicador">
                </div>

                <div class="Fecha De Creacion">
                    <label for="txtFecha_initial">Fecha Del Valor Inicial</label>
                    <input type="datetime-local" required class="form-control" value="" name="txtFecha_initial" id="txtFecha_initial" placeholder="Seleccione La Fecha Del Valor Inicial ">
                </div>
                <br />
                <div class="Fecha Limite">
                    <label for="txtFecha_value">Fecha Del Valor Objetivo</label>
                    <input type="datetime-local" required class="form-control" name="txtFecha_value" id="txtFecha_value" placeholder="Seleccione La Fecha Del Valor Objetivo">
                </div>

                <div class="form-group">
                    <label for="txtdescription"> Descripción </label>
                    <textarea required class="form-control" value="" name="txtdescription" id="txtdescription" placeholder="Descripción" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtobservation"> Observación </label>
                    <textarea required class="form-control" value="" name="txtobservation" id="txtobservation" placeholder="Observación" rows="3"></textarea>
                </div>              

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>