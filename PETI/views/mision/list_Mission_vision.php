<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-responsive">
        <thead class="table-active">
            <tr>
                <td class="table-R200 G215 B205">ID</td>
                <td class="table-R200 G215 B205">Nombre de la mision o vision </td>
                <td class="table-R200 G215 B205">Descripción De La Mision o Vición</td>
                <td class="table-R200 G215 B205">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vistMission_vision as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['idMission_vision']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['nombren_Mission_vision']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['description_Mission_vision']; ?></textarea></td>
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['idMission_vision']; ?>" href="<?php echo constant('URL') . 'index/select_Mission_vision/' . $key['idMission_vision']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['idMission_vision']; ?>" href="<?php echo constant('URL') . 'index/delete_Mission_vision/' . $key['idMission_vision']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>