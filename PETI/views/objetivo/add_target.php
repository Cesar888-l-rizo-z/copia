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
                    <input type="text" required class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre Objetivo">
                </div>

                <div class="form-group">
                    <label for="txtObject">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject" id="txtObject" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject2">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject2" id="txtObject2" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject3">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject3" id="txtObject3" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject4">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject4" id="txtObject4" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject5">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject5" id="txtObject5" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject6">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject6" id="txtObject6" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject7">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject7" id="txtObject7" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject8">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject8" id="txtObject8" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject9">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject9" id="txtObject9" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="txtObject10">Descripción Objetivo:</label>
                    <textarea class="form-control" value="" name="txtObject10" id="txtObject10" placeholder="Descripción Del Objetivo" rows="3"></textarea>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>