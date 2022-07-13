<?php require 'views/templates/header.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            Datos del proyecto
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crear" method="POST" enctype="multipart/form-data">

                <!-- <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" required readonly class="form-control" value="" name="txtID" id="txtID" placeholder="ID">
                </div> -->

                <div class="form-group">
                    <label for="txtNombre">Nombre del proyecto:</label>
                    <input type="text" required class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtObjetivo">Objetivo:</label>
                    <textarea required class="form-control" value="" name="txtObjetivo" id="txtObjetivo" placeholder="Objetivo del proyecto" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtProceso">Proceso:</label>
                    <input type="text" required class="form-control" value="" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div class="Fecha De Creacion">
                    <label for="txtFecha_Creacion">Fecha_Creacion</label>
                    <input type="datetime-local" required class="form-control" value="" name="txtCreation_date" id="txt_fechacreacion_Reg" placeholder="Seleccione la fecha de creacion">
                </div>
                <br />
                <div class="Fecha Limite">
                    <label>Fecha_Limite</label>
                    <input type="datetime-local" required class="form-control" name="txtDeadline" id="txt_fechalimite_Reg" placeholder="Seleccione la fecha limite de creacion">
                </div>

                <label for="estado" class="form-label">Estado:</label>
                <!-- <select class='mi-selector' name='txtStatus'> -->
                <select class='form-select' id="estado" name='txtStatus' required>
                    <option hidden value='' selected>Selecciona el resultado</option>
                    <?php
                    foreach ($this->estados as $key) {
                    ?>
                        <option value="<?php echo $key['idestado'] ?>"><?php echo $key['descripcion'] ?></option>
                    <?php
                    }

                    ?>
                </select>

                <div class="form-group"> <label for="archivo" class="col-ms-2 control-label">Archivo</label>
                    <div class="col-sm-15"> <input type="file" class="form-control" id="archivo" name="txtuploadedFile" /> </div>
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" accept="image/*">
                </div>

                <!-- <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
                </div> -->

                <div>
                    <input type="submit" value="Enviar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>