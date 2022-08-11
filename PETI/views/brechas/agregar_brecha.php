<?php require 'views/templates/header.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <div class="card">
        <div class="card-header">
            BRECHAS DE T.I
        </div>

        <div class="card-body">

            <form action="<?php echo constant('URL') ?>index/crear1" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtNombre">Nombre de la ruptura:</label>
                    <input type="text" class="form-control" value="" name="txtNombre" id="txtNombre" placeholder="Nombre de la ruptura">
                </div>

                <div class="form-group">
                    <label for="txtRuptura">Ruptura:</label>
                    <textarea required class="form-control" value="" name="txtRuptura" id="txtRuptura" placeholder="Ruptura del proyecto" rows="3"></textarea>
                </div>

                <div class="lista-producto float-clear" style="clear:both;">
                    <label for="txtstrategy">Estrategia:</label>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input type="text" class="form-control" name="txtstrategy1" id="txtstrategy1" placeholder="Nombre de la estrategia">
                            <input type="text" class="form-control" name="txtstrategy2" id="txtstrategy2" placeholder="Nombre de la estrategia">
                            <input type="text" class="form-control" name="txtstrategy3" id="txtstrategy3" placeholder="Nombre de la estrategia">
                            <input type="text" class="form-control" name="txtstrategy4" id="txtstrategy4" placeholder="Nombre de la estrategia">
                            <input type="text" class="form-control" name="txtstrategy5" id="txtstrategy5" placeholder="Nombre de la estrategia">
                        </li>
                    </ul>
                </div>

                <div>
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>

            </form>

        </div>

    </div>
</div>

<?php require 'views/templates/footer.php' ?>