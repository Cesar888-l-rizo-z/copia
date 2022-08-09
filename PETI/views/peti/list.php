<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="table-active">
            <tr>
                <th class="table-R200 G215 B205">ID</th>
                <th class="table-R200 G215 B205">Nombre_Projects </th>
                <th class="table-R200 G215 B205">Objetivo</th>
                <th class="table-R200 G215 B205">Proceso</th>
                <th class="table-R200 G215 B205">Fecha_Creacion</th>
                <th class="table-R200 G215 B205">Fecha_Limite</th>
                <th class="table-R200 G215 B205">Estado</th>
                <th class="table-R200 G215 B205">Archivo</th>
                <th class="table-R200 G215 B205">Imagen</th>
                <th class="table-R200 G215 B205">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->list as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['id']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['Nombre_Projects']; ?></td>
                    <td class="table-Black 40%"> <textarea rows="2" cols="17"><?php echo $key['Objetivo']; ?></textarea></td>
                    <td class="table-Black 40%"><?php echo $key['Proceso']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['Fecha_Creacion']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['Fecha_Limite']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['Estado']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['Archivo']; ?></td>
                    <td class="table-Black 40%">
                        <img class="mx-auto d-block rounded" src="public/images/<?php echo $key['Imagen']; ?>" width="50" alt="" srcset="">
                    </td>
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