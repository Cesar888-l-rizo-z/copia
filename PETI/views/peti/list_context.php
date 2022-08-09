<?php require 'views/templates/header_2.php' ?>

<div class="container-fluid">

    <?php
    echo $this->mensaje;
    ?>

    <table class="table table-hover table-sm table-responsive">
        <thead class="table-active">
            <tr>
                <th class="table-R200 G215 B205">ID</th>
                <th class="table-R200 G215 B205">Nombre De La Matriz </th>
                <th class="table-R200 G215 B205">Descripción y Oportunidades</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Descripción De La Oportunidad</th>
                <th class="table-R200 G215 B205">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->vistlist_context as $key) {
                //  print_r($key);
            ?>
                <tr>
                    <td class="table-Black 40%"><?php echo $key['idstrategic_context']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['nombre_context']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['descripcion']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No1']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No2']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No3']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No4']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No5']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No6']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No7']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No8']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No9']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No10']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No11']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No12']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No13']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No14']; ?></td>
                    <td class="table-Black 40%"><?php echo $key['No15']; ?></td>
                    
                    <td>
                        <a class="btn btn-primary" id="btn_<?php echo $key['idstrategic_context']; ?>" href="<?php echo constant('URL') . 'index/select_context/' . $key['idstrategic_context']; ?>">Seleccionar</a>
                        <a class="btn btn-danger" id="btn_<?php echo $key['idstrategic_context']; ?>" href="<?php echo constant('URL') . 'index/delete_context/' . $key['idstrategic_context']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>

<?php require 'views/templates/footer.php' ?>