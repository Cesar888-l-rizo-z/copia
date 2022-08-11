<?php require 'views/templates/header_2.php' ?>

<div class="container">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-responsive">
        <thead class="table-active">
            <tr>
                <td class="table-R200 G215 B205">ID</td>
                <td class="table-R200 G215 B205">Nombre de la norma o ley </td>
                <td class="table-R200 G215 B205">Resumen</td>
                <td class="table-R200 G215 B205">Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vistmarco as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['idobjectives']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['nombre_objectives']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['description_objectives']; ?></textarea></td>
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['idobjectives']; ?>" href="<?php echo constant('URL') . 'index/select_target/' . $key['idobjectives']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['idobjectives']; ?>" href="<?php echo constant('URL') . 'index/delete_target/' . $key['idobjectives']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>