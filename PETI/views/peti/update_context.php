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
            Informacion Del Contexto Estratégico
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/update_context" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" required readonly class="form-control" value="<?php echo $seleccion['idstrategic_context']; ?>" name="" id="txtID" placeholder="ID">
                    <input type="hidden" value="<?php echo $seleccion['idstrategic_context']; ?>" name="txtID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre De La Matriz :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['nombre_context']; ?>" name="txtNombre" id="txtNombre" placeholder="Nombre De La Matriz">
                </div>

                <div class="form-group">
                    <label for="txtOportunidad">Descripción y Oportunidades :</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['descripcion']; ?>" name="txtOportunidad" id="txtOportunidad" placeholder="Nombre De La Matriz">
                </div>

                <div class="form-group">
                    <label for="txtNo1">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No1']; ?>" name="txtNo1" id="txtNo1" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo2">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No2']; ?>" name="txtNo2" id="txtNo2" placeholder="Descripcion De La Oportunidad">
                </div>
                <br />
                <div class="form-group">
                    <label for="txtNo3">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No3']; ?>" name="txtNo3" id="txtNo3" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo4">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No4']; ?>" name="txtNo4" id="txtNo4" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo5">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No5']; ?>" name="txtNo5" id="txtNo5" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo6">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No6']; ?>" name="txtNo6" id="txtNo6" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo7">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No7']; ?>" name="txtNo7" id="txtNo7" placeholder="Descripcion De La Oportunidad">
                </div>
                <br />
                <div class="form-group">
                    <label for="txtNo8">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No8']; ?>" name="txtNo8" id="txtNo8" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo9">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No9']; ?>" name="txtNo9" id="txtNo9" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo10">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No10']; ?>" name="txtNo10" id="txtNo10" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo11">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No11']; ?>" name="txtNo11" id="txtNo11" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo12">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No12']; ?>" name="txtNo12" id="txtNo12" placeholder="Descripcion De La Oportunidad">
                </div>
                <br />
                <div class="form-group">
                    <label for="txtNo13">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No13']; ?>" name="txtNo13" id="txtNo13" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo14">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No14']; ?>" name="txtNo14" id="txtNo14" placeholder="Descripcion De La Oportunidad">
                </div>

                <div class="form-group">
                    <label for="txtNo15">Numero De Oprtunidades:</label>
                    <input type="text" required class="form-control" value="<?php echo $seleccion['No15']; ?>" name="txtNo15" id="txtNo15" placeholder="Descripcion De La Oportunidad">
                </div>

                <!-- <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" : ""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" : ""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
 
                </div> -->

                <div>
                    <input type="submit" value="Modificar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>