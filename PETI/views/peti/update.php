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
            Datos del proyecto
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" required readonly class="form-control" value="<?php echo $seleccion['id']; ?>" name="" id="txtID" placeholder="ID">
                    <input type="hidden" value="<?php echo $seleccion['id']; ?>" name="txtID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre del proyecto:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['Nombre_Projects']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del proyecto">
                </div>

                <div class="form-group">
                    <label for="txtObjetivo">Objetivo:</label>
                    <textarea required class="form-control" value="<?php echo $seleccion['Objetivo']; ?>" name="txtObjetivo" id="txtObjetivo" placeholder="Objetivo del proyecto" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtProceso">Proceso:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['Proceso']; ?>" name="txtProceso" id="txtProceso" placeholder="Proceso del proyecto">
                </div>

                <div class="Fecha De Creacion">
                    <label for="txtFecha_Creacion">Fecha_Creacion</label>
                    <input type="datetime-local" required class="form-control" value="<?php echo $seleccion['Fecha_Creacion']; ?>" name="txtCreation_date" id="txt_fechacreacion_Reg" placeholder="Seleccione la fecha de creacion">
                </div>
                <br />
                <div class="Fecha Limite">
                    <label>Fecha_Limite</label>
                    <input type="datetime-local" required class="form-control"  value="<?php echo $seleccion['Fecha_Limite']; ?>" name="txtDeadline" id="txt_fechalimite_Reg" placeholder="Seleccione la fecha limite de creacion">
                </div>

                <label for="estado" class="form-label">Estado:</label>
                <!-- <select class='mi-selector' name='txtStatus'> -->
                <select class='form-select' value="<?php echo $seleccion['Estado']; ?>" name='txtStatus' id="estado" required>
                    <!-- <option hidden value='' selected>Selecciona el resultado</option> -->
                    <?php
                    foreach ($this->estados as $key) {
                    ?>
                        <option value="<?php echo $key['idestado'] ?>" <?PHP echo $key['idestado'] ==  $seleccion['Estado']?'selected' :'' ?>><?php echo $key['descripcion'] ?></option>
                    <?php
                    }

                    ?>
                </select>

                <div class="form-group"> <label for="archivo" class="col-ms-2 control-label">Archivo</label>
                    <div class="col-sm-15"> <input type="file" class="form-control" value="<?php echo $seleccion['Archivo']; ?>" id="archivo" name="txtuploadedFile" /> </div>
                </div>

                <div class="form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" value="<?php echo $seleccion['Imagen']; ?>" name="txtImagen" id="txtImagen" accept="image/*">
                </div>

                <!-- <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
                </div> -->

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>