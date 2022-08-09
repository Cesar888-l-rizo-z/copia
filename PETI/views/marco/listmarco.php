<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="table-active">
            <tr>
                <th class="table-R200 G215 B205">ID</th>
                <th class="table-R200 G215 B205">Nombre de la norma o ley </th>
                <th class="table-R200 G215 B205">Resumen</th>
                <th class="table-R200 G215 B205">Link</th>
                <th class="table-R200 G215 B205">observacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vistmarco as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['idframework']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['norma_ley']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['resumen']; ?></textarea></td>
                    <td class="table-Black 40%"><?php echo $key['link']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['observacion']; ?></textarea></td>
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['id']; ?>" href="<?php echo constant('URL') . 'index/select/' . $key['id']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['id']; ?>" href="<?php echo constant('URL') . 'index/delete/' . $key['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>