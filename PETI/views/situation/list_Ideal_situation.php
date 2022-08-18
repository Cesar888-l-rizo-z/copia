<?php require 'views/templates/header_marc.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-responsive">
        <thead class="table-active">
            <tr>
                <td class="table-R200 G215 B205">ID</td>
                <td class="table-R200 G215 B205">Idicador </td>
                <td class="table-R200 G215 B205">Valor Objetivo</td>
                <td class="table-R200 G215 B205">Valor Inicial</td>
                <td class="table-R200 G215 B205">Fecha Del Valor Inicial </td>
                <td class="table-R200 G215 B205">Fecha Del Valor Objetivo</td>
                <td class="table-R200 G215 B205">Descripción</td>
                <td class="table-R200 G215 B205">Observación</td>
                <td class="table-R200 G215 B205">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vistsituation as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['id_Ideal_situation']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['indicator']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['value_target']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['value_initial']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['initial_value_date']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['target_value_date']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['descript']; ?></textarea></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['observation']; ?></textarea></td>
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['id_Ideal_situation']; ?>" href="<?php echo constant('URL') . 'index/select_situation/' . $key['id_Ideal_situation']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['id_Ideal_situation']; ?>" href="<?php echo constant('URL') . 'index/delete_situation/' . $key['id_Ideal_situation']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>