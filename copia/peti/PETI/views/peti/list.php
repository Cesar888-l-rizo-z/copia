<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre_Projects </th>
                <th scope="col">Objetivo</th>
                <th scope="col">Proceso</th>
                <th scope="col">Fecha_Creacion</th>
                <th scope="col">Fecha_Limite</th>
                <th scope="col">Estado</th>
                <th scope="col">Archivo</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->list as $key) {
                // print_r($key);
            ?>
                <tr>
                    <td><?php echo $key['id']; ?></td>
                    <td><?php echo $key['Nombre_Projects']; ?></td>
                    <td> <textarea rows="2" cols="17"><?php echo $key['Objetivo']; ?></textarea></td>
                    <td><?php echo $key['Proceso']; ?></td>
                    <td><?php echo $key['Fecha_Creacion']; ?></td>
                    <td><?php echo $key['Fecha_Limite']; ?></td>
                    <td><?php echo $key['Estado']; ?></td>
                    <td><?php echo $key['Archivo']; ?></td>
                    <td>
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